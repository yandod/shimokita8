<?php
//app/Controller/CoworkingController.php
class CoworkingController extends AppController {
    public $uses = array('Shimokita');
    
    public function index() {
        $option = array(
            'order' => array(
                'Shimokita.name' => 'DESC',
            ),            
        );
        $data = $this->Shimokita->find('list',$option);
        $this->set('data',$data);
    }
    
    public function add() {
        $this->Shimokita->save(
            array(
                'id' => 400,
                'name' => 'Another guy2',
                'twitter' => '@aaaaa',
                'status' => '0',
            )
            );
        $this->Session->setFlash('got new friend');
        $this->redirect('index');
    }
}