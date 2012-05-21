<?php
class Bbs extends CI_Controller{
    
    public function index() 
    {
        $boards = array(
            "query" => Board::find("all",array('order'=>'id desc'))
        );
        $this->load->view('bbs/bbsview',$boards);
    }

    public function add()
    {
        $this->load->helper('date');
        $this->load->view('bbs/add');
        
        if(!empty($_POST))
        {
            $boards = new Board(array(
                'name' => $_POST["name"],
                'content' => $_POST["content"],
                'date' => time()
            ));
          if($boards->is_valid())
          {
            $boards->save();
            redirect("/bbs/show/{$boards->id}");
          }else{
            $this->load->view('bbs/bbsview');
          }
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
        
        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
          $board = Board::find($id);
          $board->update_attributes(array(
              'name' => $_POST["name"],
              'content' => $_POST["content"],
              'date' =>time()
          ));
        redirect("bbs/show/{$board->id}");
        }else{
            $this->load->view('bbs/edit',
            array(
                "query" => Board::find($id)
            )); 
        }
    }
}

?>