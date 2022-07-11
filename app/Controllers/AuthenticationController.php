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
        // require_once APP_ROOT . '/views/overview.php';
	}

    public function logout()
	{
        // require_once APP_ROOT . '/views/overview.php';
	}

}