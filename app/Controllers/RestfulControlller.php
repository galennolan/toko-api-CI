<?php

namespace App\Controllers;

use Codeigniter\RESTful\ResourceController;


class RestfulController extends ResourceController
{
    use ResponseTrait;
    protected $format = 'json';

    protected function responseHasil($code, $status, $data)
    {
        return $this->respond([ 
            'code' => $code,
            'status' => $status,
            'data' => $data,
        ]);
    }
}
