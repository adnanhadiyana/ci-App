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
    //$this->db->where('Id', $Id);
    $this->db->delete('mahasiswa',['Id' => $Id]);
    }



  public function getMahasiswaById($Id){
    return $this->db->get_where('mahasiswa',['Id' => $Id])->row_array();
  }

  public function ubahDataMahasiswa(){
    $data = [
          "Nama" => $this->input->post('Nama', true),
          "Nrp" => $this->input->post('Nrp', true),
          "Email" => $this->input->post('Email', true),
          "Jurusan" => $this->input->post('Jurusan', true)
    ];
    $this->db->where('Id', $this->input->post('Id'));
    $this->db->update('mahasiswa', $data);
}
}