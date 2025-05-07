<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    use Core\Env;
    Env::load(__DIR__ . '/../.env');
    echo "Executando migrations...";
        foreach (glob(__DIR__ . '/migrations/*.php') as $file) {
            echo " - " . basename($file) . "";
            (require $file)();
        }
    echo "Executando seeders...";
    foreach (glob(__DIR__ . '/seeders/*.php') as $file) {
        echo " - " . basename($file) . "";
        (require $file)();
    }
    echo "✅ Banco de dados pronto.";