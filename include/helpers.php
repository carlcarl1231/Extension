<?php
class CSRF {
    private $token_key = 'csrf_token_hash';
    private $raw_key = 'csrf_token_hash';

    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function generate() {
        if (empty($_SESSION[$this->token_key])) {
            $raw = bin2hex(random_bytes(32));

            $hash = hash('sha256', $raw);

            $_SESSION[$this->token_key] = $hash;

            $_SESSION[$this->token_key] = $raw;


            return $raw;
        }
    }

    public function input() {
        $token = $this->generate();
        return '<input type = "hidden" name="' .$this->token_key.'" value="' . $token . '">';
    }

    public function verify($raw_token) {
        if(!isset($_SESSION[$this->token_key])) {
            return false;
        }

        $submitted_hash = hash('sha256', $raw_token);

        return hash_equals($_SESSION[$this->token_key], $submitted_hash);
    }


    public function refresh() {
        $this->generate();
    }
}


 ?>