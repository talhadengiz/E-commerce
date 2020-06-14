<?php


class Database_Model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		
	}
	
	public function insert_data($table,$data)
	{
		
		$this->db->insert($table,$data);
		return $this->db->insert_id();
		
	}
		public function update_data($table,$data,$id)
	{
		$this->db->where("Id",$id);
		$this->db->update($table,$data);
		return true;
		
	}
		
			public function login($tablo,$email,$sifre)
		
		{
			$this->db->select('*');
			$this->db->from($tablo);
			$this->db->where('email',$email);
			$this->db->where('sifre',$sifre);
			$this->db->limit(1);
			
			$query=$this->db->get();
			
			if($query->num_rows() == 1){
				return $query->result();
								
			}else {
				
				return false;
				
			}
			
		}
		
		public function urunler_get()
		{
			$query = $this->db->query('SELECT urunler.*,kategoriler.Ad as katadi
			FROM urunler
			INNER JOIN kategoriler ON urunler.kategori_id=kategoriler.Id
			order by urunler.ID desc');
			
			return $query->result();
			
			
			
			
			
			
		}
		
		public function urun_get($id) //home sayfası kategor isim getirme
		{
			$query = $this->db->query('SELECT urunler.*,kategoriler.Ad as katadi
			FROM urunler
			INNER JOIN kategoriler ON urunler.kategori_id=kategoriler.Id
			WHERE urunler.Id='.$id);
			
			return $query->result();
			
			
			
			
			
			
		}

		public function urun_get_kategori($kategori)
	{
		$query=$this->db->query('SELECT urunler.*, kategoriler.Ad as katadi
		FROM urunler
		INNER JOIN kategoriler ON urunler.kategori_id=kategoriler.Id
		WHERE urunler.kategori_id='.$kategori);
		
		
		return $query->result();
		
		
	}

			public function urunler_get_kategori($kategori)
	{
		$query=$this->db->query('SELECT urunler.*, kategoriler.Ad as katadi
		FROM urunler
		INNER JOIN kategoriler ON urunler.kategori_id=kategoriler.Id
		WHERE kategoriler.parent_id='.$kategori);
		
		
		return $query->result();
		
		
	}
		
      
		
      
	
}