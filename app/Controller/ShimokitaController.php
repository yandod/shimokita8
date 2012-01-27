<?php
class ShimokitaController extends AppController {
    public $scaffold;
    public $uses = array('Shimokita','Item');
    public $layout = 'default';
    
    public function assocTest() {
        $data = $this->Item->find('all');
        $this->set('data',$data);
        $this->set('keyword',$this->request->data['keyword']);
    }
    
    public function hello() {
        $this->layout ='ajax';
    }
}
?>