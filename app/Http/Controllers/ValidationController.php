<?php

namespace App\Http\Controllers;

use App\Providers\BookServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class ValidationController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private $bookService;

    public function __construct()
    {
        $this->bookService = new BookServiceProvider();
    }

    public function index(): View
    {
        $newest = $this->bookService->lastThree();
        return view('index', ['books' => $newest]);
    }

    public function authorize()
    {
        return \Illuminate\Support\Facades\Response::json(['mojemeno'=>'moepriezvisko']);
    }

}
