<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return books list.
     *
     * @return Illuminate\Http\Response
     */
    public function index(){
        $books = Book::all();

        return $this->successResponse($books);
    }

    /**
     * Create an instance of Book.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255|in:male,female',
            'price' => 'required|max:255',
            'author_id' => 'required|max:255',
        ];

        $this->validate($request, $rules);

        $book = Book::create($request->all());

        return $this->successResponse($book, Response::HTTP_CREATED);
    }

    /**
     * Return an specific book.
     *
     * @return Illuminate\Http\Response
     */
    public function show($book){
        $book = Book::findOrFail($book);

        return $this->successResponse($book);
    }

    /**
     * Update the information of an existing book.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book){

        $rules = [
            'name' => 'max:255',
            'gender' => 'max:255|in:male,female',
            'country' => 'max:255',
        ];

        $this->validate($request, $rules);

        $book = Author::findOrFail($book);

        $book->fill($request->all());

        if($book->isClean()){
            return $this->errorResponse('Al menos debe cambiar un valor para actualizar', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $book->save();
        return $this->successResponse($book);
    }

    /**
     * Removes an existing book.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($book){
        $book = Author::findOrFail($book);

        $book-> delete();

        return $this->successResponse($book);
    }
}
