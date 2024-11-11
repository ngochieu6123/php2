<?php

namespace Admin\PhpOop\Controllers\Client;

use Admin\PhpOop\Commons\Controller;
use Admin\PhpOop\Commons\Helper;
use Admin\PhpOop\Models\Category;
use Admin\PhpOop\Models\Product;
use Admin\PhpOop\Models\Overview;
use Admin\PhpOop\Commons\Model;
class HomeController extends Controller
{
    private Product $product;
    private Category $category;
    private Overview $overview;

    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
        $this->overview = new Overview();
    }
    public function index() {
        $products = $this->product->all();
        $counts = $this->product->count();
        // Helper::debug($counts);

        $this->renderViewClient('home', [
            'products' => $products,
            'counts' => $counts
        ]);
    }
}