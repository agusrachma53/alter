<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
   function __construct(){
		parent::__construct();
    $this->load->model('proses');
	}

  public function index(){
    if($_POST){
      $user = $this->input->post('username');
      $pass = md5($this->input->post('password'));

      $row = $this->db->get_where('user',array('username' => $user, 'password' => $pass))->row();
      if(count($row)){
        $this->session->set_userdata('loginuser',true);
        $this->session->set_userdata('id_user',$row->id_user);
        $this->session->set_userdata('user_login',$row->username);
        $this->session->set_userdata('nl',$row->nama);
        $this->session->set_userdata('hak',$row->hak);

        if($this->session->set_userdata('hak')== 1)
        {
          $this->session->set_userdata('hak_akses','Super Admin');
        }else{
          $this->session->set_userdata('hak_akses','Admin Biasa');
        }
        redirect(base_url('admin/home'));
      }else{
        echo "Gagal Login <a href='" . base_url('admin') . "'> Login Ulang</a>";
      }
    }else{
      $this->load->view('admin/login');
    }

  }

  public function logout()
  {
    if(!$this->session->userdata('loginuser')){
      redirect(base_url('admin'));
    }
    $this->session->sess_destroy();
    redirect(base_url('admin'));
  }

	public function home()
  {
        // $data['day'] = array('minggu' => 'sunday',
        //                     'senin' => 'monday');
        $data['tampil'] = "Ini adalah halaman Home";
		    $this->load->view('admin/v_home',$data);
	}

    public function kategori_artikel(){
        $data['kategori'] = $this->db->get('kategori_artikel');
        $this->load->view('admin/v_kategori_artikel',$data);
    }

    public function kategori_artikel_edit($aksi,$id){
      if($aksi == 'edit'){
      //untuk memuncilkan data value pada form edit kategori
      $data['edit_kategori'] = $this->db->get_where('kategori_artikel',array('id_kategori'=>$id))->row();
    }elseif($aksi == 'delete'){

      //untuk mengambil id kategori
      $this->db->where('id_kategori',$id);
      //untuk mendelete kategori berdasarkan id yang telah di get
      $this->db->delete('kategori_artikel');
      redirect(base_url('admin/kategori_artikel/tambah'));

    }
      //Untuk Memunculkan tabel data kategori
      $data['kategori'] = $this->db->get('kategori_artikel');
      $this->load->view('admin/v_kategori_artikel',$data);
    }
      //
      // public function kategori_artikel_delete($id){
      //   //untuk mengambil id kategori
      //   $this->db->where('id_kategori',$id);
      //   //untuk mendelete kategori berdasarkan id yang telah di get
      //   $this->db->delete('kategori_artikel');
      // }
      //   redirect(base_url('admin/kategori_artikel/tambah'));

      public function kategori_artikel_delete($id){
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori_artikel');
        redirect(base_url('admin/kategori_artikel/tambah'));
      }

    public function aksi_kategori($id){
        $kategori = $this->input->post('nama_kategori');
        $tombol = $this->input->post('proses');

        if($tombol == "input"){
            $this->db->insert('kategori_artikel',array('nama_kategori'=>$kategori));
            redirect(base_url('admin/kategori_artikel/tambah'));
        }else{
            $id = $this->input->post('id');
            $this->db->where('id_kategori',$id);
            $this->db->update('kategori_artikel',array('nama_kategori'=>$kategori));
            redirect(base_url('admin/kategori_artikel/tambah'));
        }
    }

    public function slider(){
      $data['slider_tampil'] = $this->db->get('slider');
      $this->load->view('admin/slider',$data);
    }


    public function category_product(){
      $data['ss'] = $this->db->get('kategori_prp');
      $this->load->view('admin/category_product',$data);
    }


    public function article(){
      $data['tampil'] = $this->proses->tampil_article();
      $this->load->view('admin/article',$data);
    }


    public function insert_article(){
        $data = array(
          'title' => $this->input->post('title'),
          'isi' => $this->input->post('isi')
        );
        $insert = $this->proses->proses_insert_article($data);
        if($insert > 0 ){
          $this->load->view('admin/input_post',$insert);
        }else{
          echo "gagal";
        }

    }

}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
