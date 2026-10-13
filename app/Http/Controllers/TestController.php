<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{
    public function index(): View {
        $quote = "Life is available only in the present moment. - Thich Nhat Hanh";
        return view("test", compact("quote"));
    }
}
