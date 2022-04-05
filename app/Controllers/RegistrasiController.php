<?php 
namespace App\Controllers;
use App\Models\MRegistrasi;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class RegistrasiController extends ResourceController
{
  
    // create
    public function create() {
        $model = new MRegistrasi();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        $model->insert($data); 
        $response = [
          'status'   => 201,
          'error'    => null,
          'messages' => [
              'success' => 'Member created successfully'
          ]
      ];
      return $this->respondCreated($response);
  
}
   
}