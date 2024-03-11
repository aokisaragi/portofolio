<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_barang extends CI_Model
    {
    public function get_barang(){
        return $this->db->get('TB_BARANG');
        }
    public function get_detail_barang($id){
        return $this->db->get_where('TB_BARANG', array('KODE_BRG' => $id));
        }
    public function update_barang($data,$id){
        $this->db->update("TB_BARANG",$data,$id);
        }
    public function delete_barang($id){
        $this->db->where('KODE_BRG', $id);
        $this->db->delete('TB_BARANG');
        }
    public function insert_barang($data){
        $this->db->insert('TB_BARANG', $data);
        }
    public function get_stok10(){
        $sql_nya = ('SELECT NAMA_BRG, STOK_BRG FROM TB_BARANG ORDER BY STOK_BRG DESC LIMIT 10');
        return $this->db->query($sql_nya);
        }
}