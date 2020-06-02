<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depan extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function regis()
	{
		$this->load->view('regis');
    }
    public function proses_daftar_anggota(){
        $this->load->model('mymodel');
        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'id_telegram' => $this->input->post('id_telegram'),
            'alamat' => $this->input->post('alamat'),

        );
        // var_dump($data);
        $query = $this->mymodel->Insert('anggota', $data);
        if($query){
            echo "<script> alert('Daftar Anggota Suksess') </script>";
            $this->load->view('index');
        }else{
            echo "<script> alert('Daftar Anggota Gagal') </script>";
            $this->load->view('regis');
        }
    }
    public function proses_login_anggota(){
        $this->load->model('mymodel');
        $where=array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        $cek = $this->mymodel->Getwhere('anggota', $where);
        $count_cek = count($cek);
        if($count_cek > 0){
            $data_session = array(
                'id_anggota' => $cek[0]['id_anggota'],
                'username' => $cek[0]['username'],
                // 'foto' => $cek[0]['foto']
            );                
            $this->session->set_userdata($data_session);
            echo "<script> alert('Login Anggota Suksess') </script>";
            redirect(base_url("index.php/dashboardanggota"));
            //membaca controller baru Dashboardrelawan
        }else{
            echo "<script> alert('Login Anggota Gagal') </script>";
            $this->index();
        }
    }
}
