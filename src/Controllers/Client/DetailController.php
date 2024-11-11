<?php

namespace Admin\PhpOop\Controllers\Client;

use Admin\PhpOop\Commons\Controller;
use Admin\PhpOop\Commons\Helper;
use Admin\PhpOop\Models\Category;
use Admin\PhpOop\Models\Product;
use Admin\PhpOop\Models\Overview;
class DetailController extends Controller
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
    public function detail($id) {

        $products = $this->product->findByID($id);
        $categories = $this->category->all();
        // Helper::debug($categories);

        $this->renderViewClient('detail', [
            'products' => $products,
            'categories' => $categories,
        ]);
        // $this->renderViewClient('detail', []);
    }
}