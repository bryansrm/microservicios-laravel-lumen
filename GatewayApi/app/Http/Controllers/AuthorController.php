<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
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
     * Show a list all authors.
     *
     * @return Illuminate\Http\Response
     */
    public function index(){

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
