<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Search extends CI_Controller{
        
        public function index (){
            $data['barang'] = $this->model_barang->tampil_data()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/navbar');
            $this->load->view('fitur_search/search',$data);
            $this->load->view('templates/footer');
        }

        function fetch()
        {
            $output = '';
            $query = '';
            $this->load->model('ajaxsearch_model');
            if($this->input->post('query'))
            {
                $query = $this->input->post('query');
            }
            $data = $this->ajaxsearch_model->fetch_data($query);
            $output .= '';
            if($data->num_rows() > 0)
            {
                foreach($data->result() as $row)
                {
                    $output .= '
                        <div class="span"> 
                        
                            <div class="card " style="width: 17rem;">
                                <img src='.$row->gambar.' class="card-img-top gambar">
                                <div class="produk">
                                    <p>
                                        ' .$row->nama_barang.' 
                                    </p>
                                    <p>
                                        Rp. 
                                        '.$row->harga.'
                                    </p>
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
            $output .= '</table>';
            echo $output;
        }

    }


    
?>