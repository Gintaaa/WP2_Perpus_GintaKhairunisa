<?php 
class Tokosepatu extends CI_controller
{
	public function index()

	{
		$this->load->view('view-form-tokosepatu');
	}

	public function cetak()
	{
		$this->form_validation->set_rules('nama','Nama Pembeli','required|min_length[3]', [
			'required' => 'Nama Pembeli Harus diisi',
			'min_length' => 'Nama terlalu pendek'
		]);

		$this->form_validation->set_rules('nohp', 'Nomor HP', 'required|min_length[3]', [
			'required' => 'Nomor HP Harus diisi',
		]);

		$this->form_validation->set_rules('merek', 'Merek Sepatu', 'required|min_length[3]', [
			'required' => 'Merek Sepatu Harus diisi',
		]);

		$this->form_validation->set_rules('ukuran', 'Ukuran Sepatu', 'required|min_length[2]', [
			'required' => 'Ukuran Sepatu Harus diisi',
		]);

		if ($this->form_validation->run() != true) { 
            $this->load->view('view-form-tokosepatu'); 
        } else { 
        	$this->load->model('ModelTokosepatu');
            $data = [ 
                'nama' => $this->input->post('nama'), 
                'nohp' => $this->input->post('nohp'), 
                'merek' => $this->input->post('merek'), 
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->ModelTokosepatu->hargaSepatu($this->input->post('merek'))
            ]; 

             $this->load->view('view-data-tokosepatu', $data);
        }
	}
}