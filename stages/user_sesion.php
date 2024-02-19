<?php

class UserSession {

    public function setCurrentUser($user_data) {
        $_SESSION['user'] = $user_data;
    }

    public function getCurrentUser() {
        return $_SESSION['user'];
    }

    public function storeUserData($key, $value) {
        $_SESSION['user'][$key] = $value;
    }

    public function getUserData($key) {
        return isset($_SESSION['user'][$key]) ? $_SESSION['user'][$key] : null;
    }

    public function closeSession() {
        session_unset();
        session_destroy();
    }
}

?>
