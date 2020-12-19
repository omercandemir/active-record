<?php

class Personel extends CI_Controller{

    public function index(){

        $rows = $this
        ->db
        ->get('personel')
        ->result();

        $viewData = new stdClass();
        $viewData->rows = $rows;


        $this->load->view('anasayfa', $viewData);
    }

    public function updatePage(){
        $id = $this->uri->segment(3);
        $row = $this->db->where("ID", $id)->get('personel')->row();

        $viewData = new stdClass();
        $viewData->row = $row;

        $this->load->view('duzenle', $viewData);
    }

    public function guncelle(){
        $detay = $this->input->post('detay');
        $id = $this->uri->segment(3);

        $data = array(
            "detay"     => $detay
        );

        $guncel = $this->db->where('ID', $id)->update('personel', $data);
        if ($guncel) {
            redirect(base_url('personel'));
        }
        else {
            echo "Güncelleme işlemi sırasında bir hata oluştu.";
        }
    }

    public function insertPage(){
        $this->load->view('ekle');
    }

    public function ekle(){
        $isim   = $this->input->post('isim');
        $detay  = $this->input->post('detay');

        $data = array(
            "isim"      => $isim,
            "detay"     => $detay
        );

        $basarili = $this->db->insert('personel', $data);
        if ($basarili) {
            redirect(base_url('personel'));
        }
        else {
            echo "Kayıt başarısız!";
        }
    }

    public function sil(){
        $id = $this->uri->segment(3);
        $sil = $this->db->where('ID', $id)->delete('personel');

        if ($sil) {
            redirect(base_url('personel'));
        }
        else {
            echo "Personel silme işlemi sırasında bir hata oluştu.";
        }
    }

}


?>