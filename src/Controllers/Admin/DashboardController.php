<?php

namespace Admin\PhpOop\Controllers\Admin;

use Admin\PhpOop\Commons\Controller;
use Admin\PhpOop\Models\Category;
use Admin\PhpOop\Models\Product;
use Admin\PhpOop\Models\User;


class DashboardController extends Controller
{

    private Product $product;
    private Category $category;
    private User $user;
    public function __construct()
    {
        $this->product = new Product();
        $this->category = new Category();
        $this->user = new User();
    }
    public function dashboard()
    {
        $products = $this->product->count();
        $categories = $this->category->count();
        $users = $this->user->count();

        $this->renderViewAdmin('dashboard', [
            'products' => $products,
            'categories' => $categories,
            'users' => $users,
            
        ]);

    }


}
