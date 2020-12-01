<?php namespace App\Controllers;

use App\Models\ComprovanteModel;

class Comprovantes extends BaseController
{
	private $ComprovanteModel;

	public function __construct()
	{
		$this->ComprovanteModel = new ComprovanteModel();
	}
	
	public function index()
	
	{
		$comprovantes = $this->ComprovanteModel->findAll();
		
		
		$data = [
			'comprovantes' => $comprovantes
			
			
		];


		// echo '<pre>';
		// print_r($comprovantes);
		 //echo '</pre>';

		//dd($comprovantes);

		return view('comprovantes/index', $data);
		
	}

	//--------------------------------------------------------------------

}
