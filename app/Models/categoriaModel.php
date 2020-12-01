<?php 
namespace App\Models;

use CodeIgniter\Model;


class CategoriaModel extends Model{

    protected $table = 'categoria_acc';
    protected $primarykey = 'idcategoria_acc';
    protected $beforeInsert = ['vinculacurso'];

    protected $allowedFields =[
        'nome',
        'descricao',
        'ch_max',
        'curso_idcurso'
    ];
    protected $validationRules = [
            'nome' => [
            'label' => 'Nome',
            'rules' => 'required'             
        ],
        'descricao' => [
            'label' => 'Descrição',
            'rules' => 'required'               
        ],
        'ch_max' => [
            'label' => 'Carga Horária Máxima',
            'rules' => 'required'          
        ],
        'curso_idcurso' => [
            'label' => 'Curso',
            'rules' => 'required'              
        ]
    ];
    
   
   
}