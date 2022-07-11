<?php 

namespace App\Controllers;

use Symfony\Component\Routing\RouteCollection;

class ImprintController
{
    public function index()
	{
        require_once APP_ROOT . '/views/imprint.php';
	}

}