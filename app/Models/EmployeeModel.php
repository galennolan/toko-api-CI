<?php 
namespace App\Models;
use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'email','password'];
}