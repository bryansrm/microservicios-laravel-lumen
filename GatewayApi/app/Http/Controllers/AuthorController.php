<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponser;

    public $authorService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Show a list all authors.
     *
     * @return Illuminate\Http\Response
     */
    public function index(){
        return $this->successResponse($this->authorService->getAuthors());
    }

    /**
     * Save an author.
     *
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Show a specific author.
     *
     * @return Illuminate\Http\Response
     */
    public function show($author){

    }

    /**
     * Update a specific author.
     *
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author){

    }

    /**
     * Delete a specific author.
     *
     * @return Illuminate\Http\Response
     */
    public function destroy($author){

    }


}
