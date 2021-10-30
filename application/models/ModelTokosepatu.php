<?php

class ModelTokosepatu extends CI_Model
{
	public $harga;

	public function hargaSepatu($data)

	{
     if ($this->input->post('merek') == "Nike"){
        	$this->harga = 375000;
        }elseif ($this->input->post('merek') == "Adidas"){
        	$this->harga = 300000;
        }elseif ($this->input->post('merek') == "Kicker"){
        	$this->harga = 250000;
        }elseif ($this->input->post('merek') == "Eiger"){
        	$this->harga = 275000;
        }elseif ($this->input->post('merek') == "Bucherri"){
        	$this->harga = 400000;
        }
        return($this->harga);
    }    
}
