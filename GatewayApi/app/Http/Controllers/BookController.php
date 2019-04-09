<?php

namespace App\Http\Controllers;

use App\Services\BookService;
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
     * Show a list all books.
     *
     * @return Illuminate\Http\Response
     */
    public function index(){
        return $this->successResponse($this->bookService->getBooks());
    }

    /**
     * Save an book.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        return $this->successResponse($this->bookService->createBook($request->all()), Response::HTTP_CREATED);
    }

    /**
     * Show a specific book.
     *
     * @return Illuminate\Http\Response
     */
    public function show($book){
        return $this->successResponse($this->bookService->getOneBook($book));
    }

    /**
     * Update a specific book.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book){
        return $this->successResponse($this->bookService->editBook($request->all(), $book));
    }

    /**
     * Delete a specific book.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($book){
        return $this->successResponse($this->bookService->deleteBook($book));
    }


}
