<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Index extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        $this->load->database();
 
    }
 
    public function index()
    {
        //test
    }
    
    public function verify($id=null)
    {
        //$this->db->query('YOUR QUERY HERE');
        
        header('Content-Type: application/json');
        
        $result['data'] = $this->db->query( 'SELECT * FROM cert WHERE CONCAT( cert.date_from, cert.id) = ? ', [$id] )->result();
        
        if(count($result['data'])) {
            $result['data'] = $result['data'][0];
            $result['status'] = ['code' => 200, 'message' => 'Found'];
            echo json_encode($result, true);
        }
        else {
            $result['data'] = null;
            $result['status'] = ['code' => 404, 'message' => 'Not Found'];
            echo json_encode($result, true);
        }

    }
    
    public function certs()
    {
        //$this->grocery_crud->set_table('cert');
        //$output = $this->grocery_crud->render();
        
        if(!$this->session->userdata('username'))
        {
            redirect('/index/login');
            exit();
        }
        
        $crud = new grocery_CRUD();
 
        $crud->set_table('cert');
        
        $crud->unset_texteditor('title','venue','for');
        
        $output = $crud->render();
        
        $this->load->view('crud', $output);

    }
    
    public function login()
    {
        if($this->session->userdata('username'))
        {
            redirect('/index/certs');
            exit();
        }
        
        $this->load->view("login");
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/index/login');
    }
    
    public function checklogin()
    {
        if($this->db->query( 'SELECT * FROM user WHERE username = ? and password = ?', [$_POST['username'], $_POST['password']] )->result())
        {
            $this->session->set_userdata(['username'=>'admin']);
            redirect('/index/certs');
        }
        else
            redirect('/index/login');
    }
}