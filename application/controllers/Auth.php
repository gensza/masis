<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		// menjalankan method ketika class Auth dijalankan
		parent::__construct();
		$this->load->library('form_validation');

		if (!$this->session->userdata('userlogin')) {
			redirect('http://mips.msalgroup.com/msal-login/');
		}
	}

	public function index()
	{
		// jika sudah login tidak bisa ke view login
		if ($this->session->userdata('username')) {
			redirect('Admin');
		}
		// validasi inputan
		$this->form_validation->set_rules('username', 'username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			// ketika lolos validasi
			$this->_login();
		}
	}

	private function _login()
	{
		// jika sudah login tidak bisa ke view login
		if ($this->session->userdata('username')) {
			redirect('Admin');
		}
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// cek username dari inputan
		$user = $this->db->get_where('user', ['username' => $username, 'is_active' => 1])->row_array();
		//jika user nya ada
		if ($user) {
			// jika usernya aktif
			if ($user['is_active'] == 1) {
				// cek password, jika benar akan masuk dan set session lalu di redirect
				if (password_verify($password, $user['password'])) {
					$data = [
						'username' => $user['username'],
						'role_id' => $user['role_id'],
						'id_pt' => $user['id_pt']
					];
					$this->session->set_userdata($data);
					// role_id 1 = admin
					if ($user['role_id'] == 1) {
						redirect('Admin');
					} else {
						redirect('Admin');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="danger"> Wrong password!</div>');
					redirect('Auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="danger"> This email has not been activated!</div>');
				redirect('Auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="danger">Username is not registered!</div>');
			redirect('Auth');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[user.username]', [
			'is_unique' => 'This email has already registered!'
		]);
		// trim = manghapus spasi lebih, valid_email = jika format email salah, is_unique = untuk cek ke DB apakah sudah ada atau belum
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [
			'matches' => 'Password dont match!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {

			$data['pt'] = $this->db->get('tb_pt')->result_array();

			$data['title'] = 'Registration';
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registration');
			$this->load->view('templates/auth_footer');
		} else {
			// ketika lolos validasi
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'id_pt' => htmlspecialchars($this->input->post('id_pt', true)),
				'username' => htmlspecialchars($this->input->post('username', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('userlogin');
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		// redirect('http://mips.msalgroup.com/msal-login/');
		redirect('Auth');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}
