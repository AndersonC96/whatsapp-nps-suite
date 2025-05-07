<?php
    namespace Core;
    class Env {
        public static function load(string $path = __DIR__ . '/../.env'): void {
            if (!file_exists($path)) {
                throw new \Exception(".env file not found at path: {$path}");
            }
            $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                if (str_starts_with(trim($line), '#')) {
                    continue;
                }
                [$name, $value] = explode('=', $line, 2);
                $name = trim($name);
                $value = trim($value);
                // Remove aspas se existirem
                $value = trim($value, '"\'');
                if (!array_key_exists($name, $_ENV)) {
                    putenv("{$name}={$value}");
                    $_ENV[$name] = $value;
                }
            }
        }
        public static function get(string $key, $default = null) {
            return $_ENV[$key] ?? getenv($key) ?: $default;
        }
    }