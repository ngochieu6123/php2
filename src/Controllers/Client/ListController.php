<?php

namespace Admin\PhpOop\Controllers\Client;

use Admin\PhpOop\Commons\Controller;
use Admin\PhpOop\Commons\Helper;
use Admin\PhpOop\Models\Category;
use Admin\PhpOop\Models\Product;
use Admin\PhpOop\Models\Overview;
class ListController extends Controller
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
    public function list() {

        $products = $this->product->all();
        $counts = $this->product->count();
        // Helper::debug($products);

        $this->renderViewClient('list', [
            'products' => $products,
            'counts' => $counts
        ]);

    }
}