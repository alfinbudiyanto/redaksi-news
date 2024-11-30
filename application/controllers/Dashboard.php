<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        check_not_login();

        $data['title'] = 'Dashboard';
        $data['userInfo'] = $this->func->user_login();
        $this->template->load('template', 'dashboard', $data);
    }
}
