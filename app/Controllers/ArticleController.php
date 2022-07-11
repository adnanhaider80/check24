<?php 

namespace App\Controllers;

use App\Models\Article;
use Symfony\Component\Routing\RouteCollection;

class ArticleController
{
    public function index()
    {
        require_once APP_ROOT . '/views/article_new.php';
    }
    // Show the attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $product = new Article();
        $product->read($id);

        require_once APP_ROOT . '/views/articles.php';
	}

    public function save()
    {
        $product = new Article();
        $product->create($_POST);
        //TODO: we should use try catch block here
    }

}