<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model {

    function data($number,$offset){
		return $query = $this->db->get('mahasiswa',$number,$offset)->result();		
    }
    
    function datacari($number,$offset,$cari){
        $this->db->where('nama', $cari);
        $this->db->or_where('nim', $cari);
        $this->db->or_where('kelas', $cari);

		return $query = $this->db->get('mahasiswa',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('mahasiswa')->num_rows();
    }

    function jumlah_datacari($cari){
        $this->db->where('nama', $cari);
        $this->db->or_where('nim', $cari);
        $this->db->or_where('kelas', $cari);
		return $this->db->get('mahasiswa')->num_rows();
    }
    
    public function deletedata($id)
    {
        $this->db->where('nim', $id);
        $this->db->delete('mahasiswa');
        
    }

    public function input($nama,$nim,$tgl,$ipk,$kelas)
    {
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl' => $tgl,
            'IPK' => $ipk,
            'Kelas' => $kelas
         );

         $this->db->insert('mahasiswa', $data);
         
    }

    public function edit($nama,$nim,$tgl,$ipk,$kelas)
    {
        $data = array(
            'nama' => $nama,
            'nim' => $nim,
            'tgl' => $tgl,
            'IPK' => $ipk,
            'Kelas' => $kelas
         );
         $this->db->where('nim', $nim);
         $this->db->update('mahasiswa', $data);
         
         
    }

    public function editdata($id)
    {
        $this->db->from('mahasiswa');
        $this->db->where('nim', $id);
        $query = $this->db->get();
        return $query->result();
        
    }


}

/* End of file m_data.php */
