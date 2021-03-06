<?php

require_once APPPATH.'controllers/admin/CMSController.php';

class Dashboard extends CMSController{
    
    public function __construct() {
        parent::__construct();
        $this->template->set_template('admin_template');
    }
    
    function index(){
        $this->data['page_title']=lang('global_dashboard');
        $this->template->write_view('content', 'admin/dashboard', $this->data, FALSE);
        $this->template->render();
    }
}
