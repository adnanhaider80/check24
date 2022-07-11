<?php 

namespace App\Controllers;

use App\Models\Article;
use Symfony\Component\Routing\RouteCollection;

class OverviewController
{
    public function index()
	{
        //TODO: fetch all articles
        $articles = new Article();
        $articles = $articles->readAll();

        require_once APP_ROOT . '/views/overview.php';
	}


}