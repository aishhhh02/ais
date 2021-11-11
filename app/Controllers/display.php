<?php

namespace App\Controllers;

class Product extends BaseController
{
    public function index()
    {
        return view('product_page');
    }
    public function display()
    {
        return view('product/product_display');
    }
}