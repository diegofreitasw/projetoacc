<?php namespace App\Controllers;

use App\Models\usuarioModel;


class Usuarios extends BaseController
{
	public function index()
	{	

		$UsuarioModel = new UsuarioModel();

		$usuarios = $UsuarioModel;

		$data = [
			'usuarios' => $usuarios

		];

		 //echo '<pre>';
		 //print_r($categorias);
		 //echo '</pre>';

		//dd($categorias);
	
		return view('usuarios/form',$data);
	
	}
	/**
	 * Chama a view do formulário
	 *
	 * @return void
	 */
	public function create(){
		$data = [
		'titulo' => 'Nova Categoria'
		];
		echo view('categorias/form',$data);

		//dd($data);
	}
	/**
	 * Metodo Salvar do Formulário
	 *
	 * @return void
	 */
	public function store()
	{		
		
		$post = $this->request->getPost();
		
		
		if ($this->usuarioModel->save($post)) {
			echo 'Registro Salvo com Sucesso.';
		}else{
			
				

			$data = [	
							
				'errors' => $this->usuarioModel->errors()
			];
			dd($data);
			echo view('usuarios/form',$data);
		}
	}	
}