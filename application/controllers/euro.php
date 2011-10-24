<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


define('FACEBOOK_APPID', '301783043168036');
define('FACEBOOK_SECRET', '3862820b8345909f22cb74f337ca408a');

require_once 'libs/facebook.php'; 

class Euro extends CI_Controller {

	private $fb;

	public function __construct() {
		parent::__construct();
		$this->fb = new Facebook(array(
			'appId' => FACEBOOK_APPID,
			'secret' => FACEBOOK_SECRET
		));
	}

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
	public function index() {
		
		$user = $this->fb->getUser();
		
		if ($user) {
			try {
				// Proceed knowing you have a logged in user who's authenticated.
				$user_profile = $this->fb->api('/me');
			} catch (FacebookApiException $e) {
				error_log($e);
				$user = null;
			}
		}

		if ($user) {
			$logoutUrl = $facebook->getLogoutUrl();
		}
		else {
			$loginUrl = $facebook->getLoginUrl();
		}

		$data['user'] = $user;
		$data['loginUrl'] = $loginUrl;
		$this->load->view('euro_view', $data);
	}

	public function get_friends () {
		echo ('user_profile: ' . $this->fb->api('/me'));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */