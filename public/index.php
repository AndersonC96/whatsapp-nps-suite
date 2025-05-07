<?php
    // Carrega o autoload do Composer
    require_once __DIR__ . '/../vendor/autoload.php';
    use Core\Env;
    use Core\Router;
    // Carrega as variáveis do arquivo .env
    Env::load(__DIR__ . '/../.env');
    // Define o timezone
    date_default_timezone_set($_ENV['APP_TIMEZONE'] ?? 'UTC');
    // Exibe erros se APP_DEBUG estiver true
    if ($_ENV['APP_DEBUG'] === 'true') {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
    } else {
        ini_set('display_errors', 0);
        error_reporting(0);
    }
    // Instancia e despacha o roteador
    $router = new Router();
    $router->dispatch();