<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
        $this->load->view('fitur_search/search');
        $this->load->view('templates/footer');
	}

	public function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('search_model');
		if($this->input->post('query'))
		{
			$query = $this->input->post('query');
		}
		$data = $this->search_model->fetch_data($query);
		
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
					<div class="span m-4"> 
						<div class="card text-center " style="width: 16rem; float: left;">
							<img src="'.base_url("/uploads/$row->gambar").'" class="card-img-top" style="width: 250px;
							height: 250px; margin: auto; padding: 10px">
							<div class="produk">
								<p class="font-weight-bold text-uppercase">
									'.$row->nama_barang.'
								</p>
								<small class="font-italic">Category: '.$row->kategori.'</small>
								<p>
									Price: Rp'.number_format($row->harga,0,',','.').'
								</p>
							<div style="padding: 10px"> 
									'.anchor('fitur_cart/cart/add2_keranjang/'.$row->id_barang,'<div class="btn btn-primary btn-block" style="margin:auto; background-color: #730006; outline-style: no-outline;" id="tambah_barang">Add to Cart</div>').'
									<a style="cursor: pointer; margin:6px 0px ;  " class="btn btn-outline-dark btn-block" id="">Detail</a>
								</div>  
							</div>
						</div>
					</div>
				';
			}
		}
		else
		{
			$output .= '<tr>
							<td colspan="5">No Data Found</td>
						</tr>';
		}
		echo $output;
	}
	
}
