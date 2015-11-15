<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Singlepost extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data["pactive"] = 'home';
		redirect('detail');
	}
	public function readdetail()
	{
		$data["pactive"] = 'home';
		$topic_get = $this->uri->segment(2, 0);
		$pget = base64_decode($topic_get);
		$arrGet = explode('|',$pget);
		if(count($arrGet)==2)
		{
			$topic_id = $arrGet[0];
			$page = $arrGet[1];
			if(is_numeric($topic_id))
			{
				if(intval($topic_id)<0)
					$topic_id = 0;
			}
			else
				$topic_id = 0;
			$this->load->model("singlepost_model");
			$topic = $this->singlepost_model->getTopic($topic_id);
			$cateid = $topic["cateid"];
			$topic_cate = $this->singlepost_model->getTopicCate($cateid);
			$topic_lasted = $this->singlepost_model->getTopicLasted();
			$categories = $this->singlepost_model->getCategories();
			if($topic==null)
			{
				redirect('detail');
			}
			else
			{
				$data["page"] = $page;
				$data["topics"] = $topic;
				$data["topics_cate"] = $topic_cate;
				$data["topics_lasted"] = $topic_lasted;
				$data["categories"] = $categories;
				$this->load->view('singlepost/topic',$data);
			}	
		}
		else
		{
			redirect('detail');
		}	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */