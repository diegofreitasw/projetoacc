<?php 
namespace App\Models;

use CodeIgniter\Model;


class ComprovanteModel extends Model{

    protected $table = 'comprovantes_acc';
    protected $primarykey = 'idcomprovantes_acc';
   

    protected $allowedFields =[
        'nome',
        'ano',
        'dt_ini',
        'dt_fim',
        'ch_realizada',
        'cidade',
        'estado',
        'arquivo',
        'instituicao',
        'obs',
        'dt_cadastro',
        'aluno_usuario_idusuario'
    ];   
}