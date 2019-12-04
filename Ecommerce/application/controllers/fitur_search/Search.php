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
						<div class="span"> 
                            <div class="card text-center " style="width: 16rem; float: left; margin-right: 55   px;">
                                <img src="<?php echo base_url().upload'.$row->gambar.'?>" class="card-img-top" style="width: 250px;
                                height: 250px; margin: auto;">
                                <div class="produk ">
                                    <p>
                                    '.$row->nama_barang.'
                                    </p>
                                    <small>'.$row->keterangan.'</small>
                                    <p>
                                        Rp. 
                                        '.$row->harga.'
                                    </p>
                                    
                                    <a style="cursor: pointer;" class=" btn btn-primary text-white tambah_barang" > tambah </a>
                                    <a style="cursor: pointer;" class="btn btn-primary text-white" id="">Detail</a>
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
