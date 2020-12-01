<?php namespace App\Controllers;

use App\Models\categoriaModel;


class Categorias extends BaseController

{
	public function index()
	{	

		$categoriaModel = new categoriaModel();

		$categorias = $categoriaModel->paginate(5);

		$data = [
			'categorias' => $categorias,
			'pager'		 => $categoriaModel->pager,
			
		];

		 //echo '<pre>';
		 //print_r($categorias);
		 //echo '</pre>';

		//dd($categorias);
	
		return view('categorias/index',$data);
	
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
	public function store(){

		$categoriaModel = new categoriaModel();

		
		$post = $this->request->getPost();
		//dd($post);
		
		if ($this->$categoriaModel->save($post)){
			echo 'Registro Salvo com Sucesso.';
		}else{
			echo view('categorias/form',[
				'titulo' => 'Nova Categoria',
				'errors' => $this->categoriaModel->errors()
			]);
			
		}
	}	
}