<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');    
    }

    public function auth()
    {
        $data = $_POST;
        $user = $this->User->get(['filter' => ['username' => $data['username']]]);
        if($user != null){
           if($data['password'] == $user[0]->password){
                if($user[0]->jabatan == 1){
                    $newdata = array(
                        'logged_in' => TRUE,
                        'akses' => 'KEPSEK'
                    );   
                    $this->session->set_userdata($newdata);                   
                    redirect('dashboard-kepsek');
                }else if($user[0]->jabatan == 2){
                    $newdata = array(
                        'logged_in' => TRUE,
                        'akses' => 'WAKA'
                    );   
                    $this->session->set_userdata($newdata);                   
                    redirect('dashboard-waka');
                }else if($user[0]->jabatan == 3){
                    $newdata = array(
                        'logged_in' => TRUE,
                        'akses' => 'TU'
                    );   
                    $this->session->set_userdata($newdata);                   
                    redirect('dashboard-tu');
                }
           }else{
                $this->session->set_flashdata('error_login', 'Username atau Password Salah!'); 
                redirect('login');
           }
        }else{
            $this->session->set_flashdata('error_login', 'Username atau Password Salah!'); 
            redirect('login');
        }
    }    

    public function logout(){
        $this->session->sess_destroy();

        redirect('login');
    }
}
