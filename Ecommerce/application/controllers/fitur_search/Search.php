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

						<div class="col-lg-4 col-md-3 mb-4 float-left">
                        <div class="card card-ecommerce">
                        <div class="view overlay">
						<img src="<?php echo site_url(uploads/'.$row->gambar.')?>" style="width: 419px; height: 169.98px" alt="">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
                            <div class="card-body">
                                <h5 class="card-title mb-1"><strong><a href="" class="dark-grey-text">'.$row->nama_barang.'</a></strong></h5>
                                <span class="badge badge-info mb-2">'.$row->kategori.'</span>
                                <br>
                                <span class="text-center"><a>'.$row->keterangan.'</a></span>
                                <div class="card-footer pb-0">
                                    <div class="row mb-0">
                                        <span class="float-left"><strong>'.$row->harga.'</strong></span>
                                    </div>
                                    <div class="text-center">
                                        <a style="cursor: pointer;" class=" btn btn-primary text-white tambah_barang" > tambah </a>
                                        <a style="cursor: pointer;" class="btn btn-primary text-white" id="">Detail</a>
                                    </div>

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
