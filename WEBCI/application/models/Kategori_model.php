<?php
<<<<<<< HEAD
	class Kategori_model extends CI_Model{ 
		function get_kategori(){
			return $this->db->query('SELECT * FROM kategori')->result();
		}
	}
=======
class Kategori_model extends CI_Model{
function get_kategori(){
		return $this -> db -> query('SELECT * FROM kategori')->result ();
	}
 
}
>>>>>>> e0224a28bf580bdecd4acc19aa262c2fc7278418
?>