<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Singlepost_model extends CI_Model {
	public function getTopic($topic_id)
	{
		$query = $this->db->get_where('v_topics', array('actived' => 1,'tid' => $topic_id));
		return $query->row_array();
	}
	public function getTopicCate($cateid)
	{
		$query = $this->db->order_by('dateadd', 'DESC')->get_where('topics', array('actived' => 1,'cateid' => $cateid),5,0);
		return $query->result();
	}
	public function getTopicLasted()
	{
		$query = $this->db->order_by('dateadd', 'DESC')->get_where('topics', array('actived' => 1),5,0);
		return $query->result();
	}
	public function getCategories()
	{
		$query = $this->db->order_by('catename', 'DESC')->get('categories');
		return $query->result();
	}
}
?>