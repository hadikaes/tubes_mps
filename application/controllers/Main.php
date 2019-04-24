<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Enl\MosesClient\Client;

class Main extends CI_Controller {

	public function index()
	{
		$translation = '';

		if ($this->input->get('su')) {
			$client = Client::factory('http://10.20.32.21:8080/RPC2');
			$translation = $client->translate($this->input->get('su'));
		}

		$data['source'] = $this->input->get('su');
		$data['target'] = $translation;

		$this->load->view('Main.php', $data);
	}

	public function index2()
	{
		$client = Client::factory('http://10.20.32.21:8080/RPC2');
		$translation = $client->translate("Ibu kota Indonésia nyaéta Jakarta");
		echo $translation;
	}
}
