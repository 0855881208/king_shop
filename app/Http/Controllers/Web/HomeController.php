<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Services\ProductService;

class HomeController extends Controller
{
    protected CategoryService $categoryService;
    protected ProductService $productService;

    public function __construct(CategoryService $categoryService,ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }

    public function index()
    {
        $category = $this->categoryService->getParent();

        $products = $this->productService->getRandProduct();
        return view('web.home', compact('category','products'));
    }
}
