<?php
class Bbs extends CI_Controller{
    
    public function index() {

        $this->load->model('Board');
        
        $board = array(
            "query" => Board::find("all",array('order'=>'id desc'))
        );
        $this->load->view('bbs/bbsview',$board);
    }

    public function add()
    {

        $this->load->model('Board');
        $this->load->view('bbs/add');
        
        $this->load->helper('url');

    $board = new Board(array('name'=>'','content' => ''));
    $board->save();
    $board->errors->is_invalid('name','content'); 
    $board->errors->on('name','content'); 
    }
    
    public function show()
    {
        $this->load->model('Board');
        Board::find();
        $this->load->view('bbs/show');
    }
    
    public function edit()
    {
        $this->load->model('Board');
        Board::find();
        $this->load->view('bbs/edit');    
    }
}

?>