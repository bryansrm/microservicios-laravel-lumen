<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('Services.authors.base_uri');
    }

    /**
     * Get list of authors from the authors service
     */
    public function getAuthors(){
        return $this->perfomRequest('GET', '/authors');
    }
}