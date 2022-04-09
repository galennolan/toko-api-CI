<?php 
namespace App\Controllers;
use App\Models\MRegistrasi;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;


class RegistrasiController extends ResourceController
{
    public $format = 'json';
    protected function responseHasil($code, $status, $data)
    {
        return $this->respond([ 
            'code' => $code,
            'status' => $status,
            'data' => $data,
        ]);
    }
 // create
    public function create() {
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ]; 
        $model = new MRegistrasi();
        $model->insert($data); 
         return $this-> responseHasil(200,true, "Registrasi Berhasil");
    }
   
}