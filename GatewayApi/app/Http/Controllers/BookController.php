<?php

namespace App\Http\Controllers;

use App\service\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;

    public $bookService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Show a list all authors.
     *
     * @return Illuminate\Http\Response
     */
    public function index(){

    }

    /**
     * Save an book.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Show a specific book.
     *
     * @return Illuminate\Http\Response
     */
    public function show($book){

    }

    /**
     * Update a specific book.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book){

    }

    /**
     * Delete a specific book.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($book){

    }


}
