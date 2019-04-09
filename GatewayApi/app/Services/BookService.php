<?php

namespace App\services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('Services.books.base_uri');
        $this->secret = config('Services.books.secret');
    }

    /**
     * Get list of books from the books service
     */
    public function getBooks(){
        return $this->perfomRequest('GET', '/books');
    }

    /**
     * Create an books from the books service
     */
    public function createBook($data){
        return $this->perfomRequest('POST', '/books', $data);
    }

    /**
     * Get one specific book from the books service
     */
    public function getOneBook($book){
        return $this->perfomRequest('GET', "/books/{$book}");
    }

    /**
     * Create an books from the books service
     */
    public function editBook($data, $book){
        return $this->perfomRequest('PUT', "/books/{$book}", $data);
    }

    /**
     * Delete an books from the books service
     */
    public function deleteBook($book){
        return $this->perfomRequest('DELETE', "/books/{$book}");
    }
}