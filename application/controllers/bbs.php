<?php
class Bbs extends CI_Controller{
    
    public function index() {

        $boards = array(
            "query" => Board::find("all",array('order'=>'id desc'))
        );
        $this->load->view('bbs/bbsview',$boards);
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $boards = new Board(array(
                'name' => $_POST["name"],
                'content' => $_POST["content"],
            ));
            $boards->save();

            redirect("/bbs/bbsview". $boards->id);

        }else{
            $this->load->view('bbs/add');
        }
        
    }
    
    public function show($id)
    {
        $boards = array(
             "query" => Board::find($id)
    );       
        $this->load->view('bbs/show',$boards);
    }
    
    public function edit($id)
    {
        $board = array(
            "query" => Board::find($id)
        );
        $this->load->view('bbs/edit',$board);

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $board = new Board(array(
                'name' => $_POST["name"],
                'content' => $_POST["content"],
            ));
            $board->save();

            redirect("/bbs/bbsview". $board->id);

        }else{
            $this->load->view('bbs/bbsview');
        }
    }
}

?>