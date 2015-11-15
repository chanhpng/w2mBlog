<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Homes_model extends CI_Model {
	public function getHomeTopic($topic_page,$topic_limit)
	{
		$offset = $topic_page * $topic_limit;
		$query = $this->db->get_where('v_topics', array('actived' => 1), $topic_limit, $offset);
		return $query->result();
	}
}
?>