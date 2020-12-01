<?php 
namespace App\Models;

use CodeIgniter\Model;


class UsuarioModel extends Model{

    protected $table = 'usuario';
    protected $primarykey = 'idusuario';
   
    protected $allowedFields =[
        'nome',
        'email',
        'senha',
        'cpf'
    ];    
    protected $validationRules = [
        'nome' => [
        'label' => 'Nome',
        'rules' => 'required'             
    ],
        'email' => [
        'label' => 'Email',
        'rules' => 'required|valid_email'               
    ],
        'cpf' => [
        'label' => 'Cpf',
        'rules' => 'required'          
    ],
        'senha' => [
        'label' => 'Senha',
        'rules' => 'required'              
    ],
    'repita_senha' => [
        'label' => 'Senha',
        'rules' => 'required|matches[senha]'              
    ]
]; 
}