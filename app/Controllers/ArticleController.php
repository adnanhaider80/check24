<?php 

namespace App\Controllers;

use App\Models\Article;
use Symfony\Component\Routing\RouteCollection;

class ArticleController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        $product = new Article();
        $product->read($id);

        require_once APP_ROOT . '/views/articles.php';
	}


}