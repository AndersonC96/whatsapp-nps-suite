<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use Core\\Env;
    use Core\\Router;
    session_start();
    // Carrega variáveis de ambiente
    Env::load(__DIR__ . '/.env');
    // Define timezone
    date_default_timezone_set($_ENV['APP_TIMEZONE'] ?? 'UTC');
    // Define exibição de erros com base no APP_DEBUG
    if ($_ENV['APP_DEBUG'] === 'true') {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
    } else {
        ini_set('display_errors', 0);
        error_reporting(0);
    }
    // Roteia
    $router = new Router();
    $router->dispatch();