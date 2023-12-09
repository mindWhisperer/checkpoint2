<?php

namespace App\Http\Controllers;

use App\Providers\GenreServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class PridatController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    private $genreService;

    public function __construct()
    {
        $this->genreService = new GenreServiceProvider();
    }

    public function index(): View
    {
        $genreList = $this->genreService->readAll();
        return view('pridat', ['genreList' => $genreList]);
    }


    public function createBook()
    {
        //dump($id);
        $this->bookService->create([
            'nazov' => 'Sluka',
            'zaner' => 'SamDoma',
            'obrazok' => 'https://www.rewind.sk/wp-content/uploads/2020/11/thumb-1920-578405.jpg.webp',
            'popis' => 'juchu',
            'created_at' => date('Y-m-d H:i:s')
        ]);

        return $this->index();
    }

}
