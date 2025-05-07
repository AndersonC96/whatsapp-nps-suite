<?php
    namespace App\Controllers;
    use Core\Controller;
    class HomeController extends Controller {
        public function index() {
            echo "<h1>Bem-vindo à Plataforma NPS</h1>";
        }
    }