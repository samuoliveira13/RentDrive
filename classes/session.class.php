<?php
    declare(strict_types=1);
    
    class Session {

        public function __construct() {
            session_start();

            if (!isset($_SESSION['csrf'])) {
                $_SESSION['csrf'] = bin2hex(random_bytes(16));
            }
        }

        public function isLoggedIn() : bool {
            return isset($_SESSION['id']);
        }

        public function logout() {
            session_destroy();
        }

        public function getId() : ?int {
            return isset($_SESSION['id']) ? $_SESSION['id'] : null;    
        }
    }
?>