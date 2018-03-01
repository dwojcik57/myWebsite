<?php
	class Graphics3D extends CI_Controller {
		public function view($page = 'home') {
			$this->load->view('graphics3D/templates/header');
			$this->load->view('graphics3D/pages/'.$page);
			$this->load->view('graphics3D/templates/footer');
		}
	}