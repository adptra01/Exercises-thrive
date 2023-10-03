<?php

namespace App\Services;

use LaravelEasyRepository\Service;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductService extends Service {

     /**
     * don't change $this->mainInterface variable name
     * because used in extends service class
     */
     protected $mainInterface;

    public function __construct(ProductRepositoryInterface $mainInterface)
    {
      $this->mainInterface = $mainInterface;
    }

    // Define your custom methods :)
}
