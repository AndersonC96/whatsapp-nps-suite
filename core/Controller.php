<?php
    namespace Core;
    class Controller {
        protected function view($view, $data = []) {
            extract($data);
            include __DIR__ . '/../app/Views/' . $view . '.php';
        }
    }