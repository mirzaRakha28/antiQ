<?php

    class Dasboard_admin extends CI_Controller{

        public function index (){
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_admin/dasboard_admin',$data);
            $this->load->view('templates/footer');
        }
        public function tambah_barang(){
            $nama_barang = $this->input->post('nama_barang');
            $keterangan = $this->input->post('keterangan');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $stock = $this->input->post('stock');
            $gambar = $_FILES['gambar']['name'];
            if($gambar == ''){

            }else {
                $config['upload_path'] = './uploads';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('gambar')){
                    echo "gambar";                
                }else{
                    $gambar = $this->upload->data('file_name');
                }
            }
            $data = array(
                'nama_barang' => $nama_barang, 
                'keterangan'  => $keterangan,
                'kategori'    => $kategori,
                'harga'       => $harga,
                'stock'        => $stock,
                'gambar'      => $gambar
            );
            $this->model_barang->tambah_barang($data, 'tb_barang');
            redirect('fitur_admin/dasboard_admin/index');
        }
    }

?>