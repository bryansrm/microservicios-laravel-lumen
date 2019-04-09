<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('Services.books.base_uri');
    }
}