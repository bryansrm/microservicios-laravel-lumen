<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('Services.authors.base_uri');
        $this->secret = config('Services.authors.secret');
    }

    /**
     * Get list of authors from the authors service
     */
    public function getAuthors(){
        return $this->perfomRequest('GET', '/authors');
    }

    /**
     * Create an authors from the authors service
     */
    public function createAuthor($data){
        return $this->perfomRequest('POST', '/authors', $data);
    }

    /**
     * Get one specific author from the authors service
     */
    public function getOneAuthor($author){
        return $this->perfomRequest('GET', "/authors/{$author}");
    }

    /**
     * Create an authors from the authors service
     */
    public function editAuthor($data, $author){
        return $this->perfomRequest('PUT', "/authors/{$author}", $data);
    }

    /**
     * Delete an authors from the authors service
     */
    public function deleteAuthor($author){
        return $this->perfomRequest('DELETE', "/authors/{$author}");
    }
}