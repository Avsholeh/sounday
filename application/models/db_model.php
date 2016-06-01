<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class Db_Model extends CI_Model 
{
	
	function insert_chat($data)
	{
		$username = $data['username'];
		$message = $data['message'];
		$this->db->query("INSERT INTO chat (username, message) VALUES ('$username', '$message')");
	}

	function get_messages()
	{
		$query = $this->db->query("SELECT username, message FROM chat ORDER BY time DESC");
		return $query->result();
	}
	
	function insert_song_info($song_data)
	{
		$title = $song_data['title'];
		$path = $song_data['song']['file_path'];
		$username = $song_data['username'];
		$filename = $song_data['song']['file_name'];
		$singer = $song_data['singer'];
		$this->db->query(
			"INSERT INTO song (title, path_song, username, filename, singer) VALUES ('$title', '$path', '$username', '$filename', '$singer')"
			);
	}

	function get_song_info($data)
	{
		$user = $data;
		$query = $this->db->get_where('song', array('username' => $user));
		return $query->result();
	}

	function search_song($data)
	{
		$sql = "SELECT title, path_song, username, filename, singer FROM song WHERE singer LIKE '%$data%' OR filename LIKE '%$data%'";
		$res = $this->db->query($sql);
		return $res->result();
	}

	function delete_song($data)
	{
		$user = $data['username'];
		$file = $data['filename'];
		$sql = "DELETE FROM song WHERE username = '$user' AND  filename = '$file' ";
		$query = $this->db->query($sql);
	}

	function add_song($sdata)
	{
		$title = $sdata['title'];
		$path = $sdata['path_song'];
		$username = $sdata['username'];
		$filename = $sdata['filename'];
		$singer = $sdata['singer'];
		$sql = "INSERT INTO song (title, path_song, username, filename, singer) VALUES ('$title', '$path', '$username', '$filename', '$singer')";
		$this->db->query($sql);
	}

	function get_one_song($data)
	{
		$user = $data['username'];
		$file = $data['filename'];
		$sql = "SELECT * FROM song WHERE username = '$user' AND filename = '$file'";
		$query = $this->db->query($sql);

		return $query->result();
	}
}

?>