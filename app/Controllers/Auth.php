<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController

{

	public function __construct()
	{
		helper('form');
		$this->AuthModel = new AuthModel();
		$this->form_validation = \Config\Services::validation();
	}

	public function index()
	{

		return view('login');
	}


	public function register()
	{


		$this->AuthModel->save([
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
			'level' => 2

		]);

		session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

		return redirect()->to('auth');
	}



	public function cekLogin()
	{
		if ($this->validate([
			'username' => [
				'labels' => 'username',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} wajib di isi '
				]
			],
			'password' => [
				'labels' => 'password',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} wajib di isi '
				]
			]
		])) {

			$username = $this->request->getVar('username');
			$password = $this->request->getVar('password');
			$cek = $this->AuthModel->login($username, $password);
			if ($cek) {
				session()->set('log', true);
				session()->set('id_user', $cek['id_user']);
				session()->set('username', $cek['username']);
				session()->set('level', $cek['level']);
				return redirect()->to('home');
			} else {

				session()->setFlashdata('errors', $this->form_validation->getErrors());
				return redirect()->to('auth');
			}
		}
	}

	public function logout()
	{
		session()->remove('log');
		session()->remove('username');
		session()->remove('level');

		return redirect()->to('auth');
	}
}
