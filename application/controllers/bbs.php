<?php
class Bbs extends CI_Controller{
    
    public function index() {

        $board = array(
            "query" => Board::find("all",array('order'=>'id desc'))
        );
        $this->load->view('bbs/bbsview',$board);
    }

    public function add()
    {
        $this->load->helper("url");
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $board = new Board(array(
                'name' => $_POST["name"],
                'content' => $_POST["content"],
            ));
            $board->save();

            redirect("/bbs/show/". $board->id);

        }else{
            $this->load->view('bbs/add');
        }
        
    }
    
    public function show($id)
    {
        $board = array(
             "query" => Board::find($id)
    );       
        $this->load->view('bbs/show',$board);
    }
    
    public function edit()
    {
        $board = array(
            "query" => Board::find()
    );
        $this->load->view('bbs/show',$board); 
    }
}

?>