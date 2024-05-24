<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Selamat Datang!';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
   
    
    // edit mulai
    public function edit()
    {
        $data['title'] = 'Lengkapi Data Personal Anda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $tmp_lahir = $this->input->post('tmp_lahir');
            $tgl_lahir = $this->input->post('tgl_lahir');
            $gender = $this->input->post('gender');
            $nik1 = $this->input->post('nik1');
            $agama = $this->input->post('agama');
            $ponsel = $this->input->post('ponsel');
            $goldar = $this->input->post('goldar');
            $status_tmp_tinggal = $this->input->post('status_tmp_tinggal');
            $alamat = $this->input->post('alamat');
            $kota = $this->input->post('kota');
            $kec = $this->input->post('kec');
            $kel = $this->input->post('kel');
            $kd_pos = $this->input->post('kd_pos');
            $transport = $this->input->post('transport');
            $jarak = $this->input->post('jarak');
            $waktu = $this->input->post('waktu');
            $nama_ibu = $this->input->post('nama_ibu');
            $status_nikah = $this->input->post('status_nikah');
            $sutri = $this->input->post('sutri');
            $email = $this->input->post('email');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '1000';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $name);
            $this->db->set('tmp_lahir', $tmp_lahir);
            $this->db->set('tgl_lahir', $tgl_lahir);
            $this->db->set('gender', $gender);
            $this->db->set('nik1', $nik1);
            $this->db->set('agama', $agama);
            $this->db->set('ponsel', $ponsel);
            $this->db->set('goldar', $goldar);
            $this->db->set('status_tmp_tinggal', $status_tmp_tinggal);
            $this->db->set('alamat', $alamat);
            $this->db->set('kota', $kota);
            $this->db->set('kec', $kec);
            $this->db->set('kel', $kel);
            $this->db->set('kd_pos', $kd_pos);
            $this->db->set('transport', $transport);
            $this->db->set('jarak', $jarak);
            $this->db->set('waktu', $waktu);
            $this->db->set('nama_ibu', $nama_ibu);
            $this->db->set('status_nikah', $status_nikah);
            $this->db->set('sutri', $sutri);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil diperbarui</div>');
            redirect('user');
        }
    }

    //akhir edit
    
    
     //pegawai mulai 
     public function pegawai()
    {
        $data['title'] = 'Lengkapi Data Kepegawaian Anda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('status_pgwai', 'Status Pegawai', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/pegawai', $data);
            $this->load->view('templates/footer');
        } else {
            $status_pgwai = $this->input->post('status_pgwai');
            $nip = $this->input->post('nip');
            $pangkat = $this->input->post('pangkat');
            $status_tugas = $this->input->post('status_tugas');
            $jabatan = $this->input->post('jabatan');
            $instansi_sk = $this->input->post('instansi_sk');
            $no_sk = $this->input->post('no_sk');
            $tgl_sk = $this->input->post('tgl_sk');
            $jns_sk = $this->input->post('jns_sk');
            $nuptk = $this->input->post('nuptk');
            $status_serti = $this->input->post('status_serti');
            $tgl_serti = $this->input->post('tgl_serti');
            $no_serti = $this->input->post('no_serti');
            $mapel_serti = $this->input->post('mapel_serti');
            
            $email = $this->input->post('email');
           
            
        //set->> DB        
            $this->db->set('status_pgwai', $status_pgwai);
            $this->db->set('nip', $nip);
            $this->db->set('pangkat', $pangkat);
            $this->db->set('status_tugas', $status_tugas);
            $this->db->set('jabatan', $jabatan);
            $this->db->set('instansi_sk', $instansi_sk);
            $this->db->set('no_sk', $no_sk);
            $this->db->set('tgl_sk', $tgl_sk);
            $this->db->set('jns_sk', $jns_sk);
            $this->db->set('status_serti', $status_serti);
            $this->db->set('nuptk', $nuptk);
            $this->db->set('tgl_serti', $tgl_serti);
            $this->db->set('no_serti', $no_serti);
            $this->db->set('mapel_serti', $mapel_serti);
            
            $this->db->where('email', $email);
            $this->db->update('user');
        
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil diperbarui</div>');
            redirect('user');
      
        }
    }

    // akhir pegawai
    
    
    //pendidikan mulai 
     public function tambahpendidikan()
    {
        $data['title'] = 'Lengkapi Data Pendidikan Anda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('jenjang', 'JENJANG', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/pendidikan', $data);
            $this->load->view('templates/footer');
        } else {
            $jenjang = $this->input->post('jenjang');
            $nama_pt = $this->input->post('nama_pt');
            $status_pt = $this->input->post('status_pt');
            $fakul_pt = $this->input->post('fakul_pt');
            $prodi_pt = $this->input->post('prodi_pt');
            $alamat_pt = $this->input->post('alamat_pt');
            $thn_masuk = $this->input->post('thn_masuk');
            $thn_lulus = $this->input->post('thn_lulus');
            $ipk = $this->input->post('ipk');
            $tgl_ijazah = $this->input->post('tgl_ijazah');
            $no_ijazah = $this->input->post('no_ijazah');
            
            $email = $this->input->post('email');
           
            
        //set->> DB        
            $this->db->set('nama_pt', $nama_pt);
            $this->db->set('jenjang', $jenjang);
            $this->db->set('status_pt', $status_pt);
            $this->db->set('fakul_pt', $fakul_pt);
            $this->db->set('prodi_pt', $prodi_pt);
            $this->db->set('alamat_pt', $alamat_pt);
            $this->db->set('thn_masuk', $thn_masuk);
            $this->db->set('thn_lulus', $thn_lulus);
            $this->db->set('ipk', $ipk);
            $this->db->set('tgl_ijazah', $tgl_ijazah);
            $this->db->set('no_ijazah', $no_ijazah);
            
            
            $this->db->where('email', $email);
            $this->db->update('user');
        
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil ditambahkan</div>');
            redirect('user/pendidikan');
      
        }
    }
    
    
     public function tambahpendidikan2()
    {
        $data['title'] = 'Lengkapi Data Pendidikan Anda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('jenjang2', 'JENJANG S2', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/pendidikan2', $data);
            $this->load->view('templates/footer');
        } else {
            $jenjang2 = $this->input->post('jenjang2');
            $nama_pt2 = $this->input->post('nama_pt2');
            $status_pt2 = $this->input->post('status_pt2');
            $fakul_pt2 = $this->input->post('fakul_pt2');
            $prodi_pt2 = $this->input->post('prodi_pt2');
            $alamat_pt2 = $this->input->post('alamat_pt2');
            $thn_masuk2 = $this->input->post('thn_masuk2');
            $thn_lulus2 = $this->input->post('thn_lulus2');
            $ipk2 = $this->input->post('ipk2');
            $tgl_ijazah2 = $this->input->post('tgl_ijazah2');
            $no_ijazah2 = $this->input->post('no_ijazah2');
            
            $email = $this->input->post('email');
           
            
        //set->> DB        
            $this->db->set('nama_pt2', $nama_pt2);
            $this->db->set('jenjang2', $jenjang2);
            $this->db->set('status_pt2', $status_pt2);
            $this->db->set('fakul_pt2', $fakul_pt2);
            $this->db->set('prodi_pt2', $prodi_pt2);
            $this->db->set('alamat_pt2', $alamat_pt2);
            $this->db->set('thn_masuk2', $thn_masuk2);
            $this->db->set('thn_lulus2', $thn_lulus2);
            $this->db->set('ipk2', $ipk2);
            $this->db->set('tgl_ijazah2', $tgl_ijazah2);
            $this->db->set('no_ijazah2', $no_ijazah2);
            
            
            $this->db->where('email', $email);
            $this->db->update('user');
        
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil ditambahkan</div>');
            redirect('user/pendidikan');
      
        }
    }
    
    
    
     public function tambahpendidikan3()
    {
        $data['title'] = 'Lengkapi Data Pendidikan Anda';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

      $this->form_validation->set_rules('jenjang3', 'JENJANG S3', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/pendidikan3', $data);
            $this->load->view('templates/footer');
        } else {
            $jenjang3 = $this->input->post('jenjang3');
            $nama_pt3 = $this->input->post('nama_pt3');
            $status_pt3 = $this->input->post('status_pt3');
            $fakul_pt3 = $this->input->post('fakul_pt3');
            $prodi_pt3 = $this->input->post('prodi_pt3');
            $alamat_pt3 = $this->input->post('alamat_pt3');
            $thn_masuk3 = $this->input->post('thn_masuk3');
            $thn_lulus3 = $this->input->post('thn_lulus3');
            $ipk3 = $this->input->post('ipk3');
            $tgl_ijazah3 = $this->input->post('tgl_ijazah3');
            $no_ijazah3 = $this->input->post('no_ijazah3');
            
            $email = $this->input->post('email');
           
            
        //set->> DB        
            $this->db->set('nama_pt3', $nama_pt3);
            $this->db->set('jenjang3', $jenjang3);
            $this->db->set('status_pt3', $status_pt3);
            $this->db->set('fakul_pt3', $fakul_pt3);
            $this->db->set('prodi_pt3', $prodi_pt3);
            $this->db->set('alamat_pt3', $alamat_pt3);
            $this->db->set('thn_masuk3', $thn_masuk3);
            $this->db->set('thn_lulus3', $thn_lulus3);
            $this->db->set('ipk3', $ipk3);
            $this->db->set('tgl_ijazah3', $tgl_ijazah3);
            $this->db->set('no_ijazah3', $no_ijazah3);
            
            
            $this->db->where('email', $email);
            $this->db->update('user');
        
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil ditambahkan</div>');
            redirect('user/pendidikan');
      
        }
    }
    
    
     public function pendidikan()
    {
        $data['title'] = 'Data Pendidikan';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/tambahpendidikan', $data);
        $this->load->view('templates/footer');
    }

    // akhir pendidikan
    
    //cek data mulai
     public function cekdata()
    {
        $data['title'] = 'Cek Data';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/cekdata', $data);
        $this->load->view('templates/footer');
    }
    //cek data akhir
    
    
    
     // berkas mulai
     public function gtk()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/gtk', $data);
        $this->load->view('templates/footer');
    }
    // berkas akhir
    
    // gtk1 mulai
    public function gtk1()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk1', $data);
    }
    // gtk1 akhir
    
    // gtk2 mulai
    public function gtk2()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk2', $data);
    }
    // gtk2 akhir
    
     // gtk3 mulai
    public function gtk3()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk3', $data);
    }
    // gtk3 akhir
    
    // gtk4 mulai
    public function gtk4()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk4', $data);
    }
    // gtk4 akhir
    
    // gtk5 mulai
    public function gtk5()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk5', $data);
    }
    // gtk5 akhir
    
    // gtk6 mulai
    public function gtk6()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk6', $data);
    }
    // gtk6 akhir
    
    // gtk7 mulai
    public function gtk7()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk7', $data);
    }
    // gtk7 akhir

    // gtk8 mulai
    public function gtk8()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk8', $data);
    }
    // gtk8 akhir

    // gtk9 mulai
    public function gtk9()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk9', $data);
    }
    // gtk9 akhir

    // gtk10 mulai
    public function gtk10()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk10', $data);
    }
    // gtk10 akhir

    // gtk11 mulai
    public function gtk11()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk11', $data);
    }
    // gtk11 akhir

    // gtk12 mulai
    public function gtk12()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk12', $data);
    }
    // gtk12 akhir

    // gtk13 mulai
    public function gtk13()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk13', $data);
    }
    // gtk13 akhir

    // gtk14 mulai
    public function gtk14()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk14', $data);
    }
    // gtk14 akhir

    // gtk15 mulai
    public function gtk15()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk15', $data);
    }
    // gtk15 akhir

    // gtk16 mulai
    public function gtk16()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk16', $data);
    }
    // gtk16 akhir

    // gtk17 mulai
    public function gtk17()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk17', $data);
    }
    // gtk17 akhir

    // gtk18 mulai
    public function gtk18()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk18', $data);
    }
    // gtk18 akhir
    
    // gtk19 mulai
    public function gtk19()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk19', $data);
    }
    // gtk19 akhir
    
    // gtk20 mulai
    public function gtk20()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk20', $data);
    }
    // gtk20 akhir
    
    // gtk21 mulai
    public function gtk21()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk21', $data);
    }
    // gtk21 akhir
    
    // gtk22 mulai
    public function gtk22()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk22', $data);
    }
    // gtk22 akhir
    
    // gtk23 mulai
    public function gtk23()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk23', $data);
    }
    // gtk23 akhir
    
     // gtk24 mulai
    public function gtk24()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk24', $data);
    }
    // gtk24 akhir
    
    // gtk25 mulai
    public function gtk25()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk25', $data);
    }
    // gtk25 akhir
    
    // gtk26 mulai
    public function gtk26()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk26', $data);
    }
    // gtk26 akhir
    
    // gtk27 mulai
    public function gtk27()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk27', $data);
    }
    // gtk27 akhir
    
    // gtk28 mulai
    public function gtk28()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk28', $data);
    }
    // gtk28 akhir
    
    // gtk29 mulai
    public function gtk29()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk29', $data);
    }
    // gtk29 akhir
    
    // gtk30 mulai
    public function gtk30()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk30', $data);
    }
    // gtk30 akhir
    
     // gtk31 mulai
    public function gtk31()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk31', $data);
    }
    // gtk31 akhir
    
    // gtk32 mulai
    public function gtk32()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk32', $data);
    }
    // gtk32 akhir
    
    // gtk33 mulai
    public function gtk33()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk33', $data);
    }
    // gtk33 akhir
    
    // gtk34 mulai
    public function gtk34()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk34', $data);
    }
    // gtk34 akhir
    
    // gtk35 mulai
    public function gtk35()
    {
        $data['title'] = 'Unggah Berkas';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('user/gtk35', $data);
    }
    // gtk35 akhir













    
    
    
    
    
    
    
    
    
    
    //ganti password mulai
    public function changepassword()
    {
        $data['title'] = 'Ganti Password';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim', [
            'required' => 'Harap mengisi Password Sebelumnya'
        ]);
        $this->form_validation->set_rules('new_password1', 'Password', 'required|trim|min_length[6]|matches[new_password2]', [
            'required' => 'Harap mengisi Password Baru',
            'matches' => 'Password tidak sama',
            'min_length' => 'Password min. 6 karakter'
        ]);
        $this->form_validation->set_rules('new_password2', 'Password', 'required|trim|matches[new_password1]', [
            'required' => 'Harap mengisi Ulangi Password',
            'matches' => 'Password tidak sama',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Password saat ini salah!</div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Password baru tidak boleh sama dengan password sebelumnya!</div>');
                    redirect('user/changepassword');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    //$this->db->where()('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password berhasil diganti!</div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
