<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homes extends CI_Controller {

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
		$this->load->model("homes_model");
		$topic_limit = 5;
		$topic_page = $this->uri->segment(3, 0);
		if(is_numeric($topic_page))
		{
			if(intval($topic_page)<0)
				$topic_page = 0;
		}
		else
			$topic_page = 0;		
		$data["page"] = $topic_page;
		$data["topics"] = $this->homes_model->getHomeTopic($topic_page,$topic_limit);
		$this->load->model("singlepost_model");
		$topic_lasted = $this->singlepost_model->getTopicLasted();
		$categories = $this->singlepost_model->getCategories();
		$data["topics_lasted"] = $topic_lasted;
		$data["categories"] = $categories;
		$this->load->view('homes/home',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */