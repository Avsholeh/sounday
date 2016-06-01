<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class User extends CI_Controller
{

	/**
	 * Function untuk menampilkan halaman upload
	 */
	public function upload()
	{
		$this->load->view('templates/header');
		$this->load->view('show_upload');
		$this->load->view('templates/footer');
	}

	/**
	 * Function untuk melakukan upload lagu
	 */
	public function upload_song()
	{
		// Konfigurasi upload file
		$config['upload_path']          = './musicdata/';
        $config['allowed_types']        = 'mp3';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['max_filename']			= 90;
        $this->load->library('upload', $config);

        // Form validation
        $this->form_validation->set_rules('singer', 'singer', 'required',
        				array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('title', 'title', 'required',
                        array('required' => 'You must provide a %s.'));
        
        if ( !$this->form_validation->run() ){
        	//$page_error = array( 'required' => 'Song title is empty' );
        	$this->load->view('templates/header');
            $this->load->view('show_upload');
			$this->load->view('templates/footer');
        } else {
	        // Kondisi jika upload gagal
	        if ( !$this->upload->do_upload() ){
	            $error = array('error' => $this->upload->display_errors());
	            $this->load->view('templates/header');
	            $this->load->view('show_upload', $error);
				$this->load->view('templates/footer');

			// Kondisi jika upload berhasil
	        } else {
	        	$title = $this->input->post('title');
	        	$user = $this->ion_auth->user()->row();
	        	$song_data = array(
	        		'singer' => $this->input->post('singer'),
	        		'title' => $this->input->post('title'),
	        		'username' => $user->username,
	        		'song' => $this->upload->data()
	        		);

	        	// Mengirimkan informasi lagu ke dalam database
	        	$this->db_model->insert_song_info($song_data);

	        	// Mengirimkan data lagu berupa title ke view
				$this->load->view('templates/header');
	            $this->load->view('show_upload', $song_data);
				$this->load->view('templates/footer');
	        }
        }

        //if ( !empty($song_data['song']) ) : var_dump($song_data['song']); endif;
        
	}

	/**
	 * Function untuk menampilkan daftar lagu pengguna
	 */
	public function my_song()
	{
		$user = $this->ion_auth->user()->row();
		$userdata = $user->username;
		$song_data = array('data' => $this->db_model->get_song_info($userdata));
		$this->load->view('templates/header');
        $this->load->view('show_song_list', $song_data);
		$this->load->view('templates/footer');

		//var_dump($song_data);
	}

	public function delete()
	{
		$user_data = $this->ion_auth->user()->row();
		$data = array(
			'username' => $user_data->username,
			'filename' => $this->uri->segment(3)
				);

		$this->db_model->delete_song($data);
		
		redirect('user/my_song');
	}

	public function edit()
	{

	}

	public function file_edit()
	{

	}

	public function add_song()
	{
		$sdata = array();
		if (!$this->ion_auth->logged_in()){
			redirect('home/login');
		} else {

			$data = array(
				'username' => $this->uri->segment(3),
				'filename' => $this->uri->segment(4)
				);
			// Mengirimkan data ke database untuk dilakukan pencarian
			// data yang terkait dengan lagu tersebut
			$get_info = $this->db_model->get_one_song($data);


			// Mendapatkan username dari user
			$user_data = $this->ion_auth->user()->row();
			$user = $user_data->username;
			// Mengambil data yang telah didapat
			foreach ($get_info as $item) {
				$sdata = array(
				'title' => $item->title,
				'path_song' => $item->path_song,
				'username' => $user,
				'filename' => $item->filename,
				'singer' => $item->singer
				);
			}
			// Menambahkan data lagu dalam song list user
			// var_dump($sdata);
			$this->db_model->add_song($sdata);

			redirect('home/search');
		}
	}

	/**
	 * Function untuk mengirimkan pesan chat
	 */
	public function send_chat()
	{
		if (!$this->ion_auth->logged_in()){
			redirect('home/login');
		}

		$chat_message = $this->input->post('msage');
		$chat_username = $this->ion_auth->user()->row();

		$data = array(
			'username' => $chat_username->username,
			'message' => $chat_message
			);

		$this->db_model->insert_chat($data);
		redirect('');
	}

	/**
	 * Function untuk menampilkan pesan chat
	 */
	public function show_chat()
	{
		$data = $this->db_model->get_messages();
		var_dump($data);

		foreach ($data as $key => $value){
			echo "{$key->username} {$value->message}";
		}
	}

} // Endof User Controller

?>