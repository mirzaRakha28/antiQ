<?php

    class Input_data extends CI_Controller{

        public function index (){
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_admin/input_data',$data);
            $this->load->view('templates/footer');
        }

        public function add_barang(){
            $nama_barang = $this->input->post('nama_barang');
            $keterangan = $this->input->post('keterangan');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $stock = $this->input->post('stock');
            $gambar = $_FILES['gambar']['name'];
            if($gambar = ''){
                $config['upluad_path'] = './uploads';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $this->input->library('upload',$config);
                if(!$this->upload->do_upload('gambar')){
                    echo 'gambar error';
                }
                else {
                    $gambar =$this->input->post('gambar'); 
                }
            }

            $data = array(
                'nama_barang' => $nama_barang,
                'keterangan' => $keterangan,
                'kategori' => $kategori,
                'harga' => $harga,
                'stock' => $stock,
                'gambar' => $gambar
            );
            $this->model_barang->tambah_barang($data,'tb_barang');
            redirect('fitur_admin/input_barang/index');
        }
        
    }

?>