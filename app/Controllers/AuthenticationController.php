<?php 

namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class AuthenticationController
{
    public function login()
	{
        require_once APP_ROOT . '/views/login.php';
	}

    public function is_login()
	{
        //TODO: validate user name and password from database
        if (true)
        {
            session_start();
            $_SESSION["firstname"] = "john1";
            $_SESSION["email"] = "john@example.com";
            $_SESSION["id"] = 1;
        }
	}

    public function logout()
	{
        // destroy the session
        session_destroy();
	}

}