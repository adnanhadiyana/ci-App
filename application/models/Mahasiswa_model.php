<?php
class Mahasiswa_model extends CI_model{
    public function getAllMahasiswa(){
        return $this->db->get('mahasiswa')->result_array();
    }

    public function tambahDataMahasiswa(){
        $data = [
              "Nama" => $this->input->post('Nama', true),
              "Nrp" => $this->input->post('Nrp', true),
              "Email" => $this->input->post('Email', true),
              "Jurusan" => $this->input->post('Jurusan', true)
        ];
        $this->db->insert('mahasiswa', $data);
  }

  public function hapusDataMahasiswa($Id){
    $this->db->where('Id', $Id);
    $this->db->delete('mahasiswa');
    }
}