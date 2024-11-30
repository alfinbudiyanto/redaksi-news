<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        check_alredy_login();
        $this->load->view('login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);

            if ($query->num_rows() > 0) {
                $row = $query->row();
                $params = array(
                    'userid' => $row->user_id,
                    'username' => $row->username,
                    'name' => $row->name,
                    'level' => $row->level
                );
                $this->session->set_userdata($params);
                if ($params['level'] === '1') {
                    echo "
                        <script>
                            alert('Welcome " . $params['name'] . ", Login success!');
                            window.location='" . site_url('dashboard') . "';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Welcome " . $params['name'] . ", Login success!');
                            window.location='" . site_url('main') . "';
                        </script>
                    ";
                }
            } else {
                echo "
                    <script>
                        alert('Login failed!, username/password incorect.');
                        window.location = '" . site_url('auth/login') . "';
                    </script>
                ";
            }
        }
    }

    public function logout()
    {
        $params = array('userid', 'name', 'level');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}
