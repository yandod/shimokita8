<?php
class GyubaraController extends AppController {
    
    public $scaffold;
    public $uses = array('Item');
    
    public function umai() {
        $this->Shimokita->oss();
        $item_list = $this->Item->find('all');
        $this->set('item_list',$item_list);
        $a = 'aaa';
        $this->set('taste', 100000);
        $this->set('var',$a);
        $this->render('verygood');
    }
    
    public function yayaumai() {
        $item_list = $this->Item->find('all');
        $this->set('item_list',$item_list);
        $this->set('taste',7650);
        $this->render('verygood');
    }
    
    public function mikke() {
    
        $this->Item->save(array(
            'name' => $this->request->data['nikunamae'],
            'rank' => $this->request->data['rank']
        ));
        $this->Session->setFlash('うまい肉みつけたので登録した');
        $this->redirect('umai');
    }
    
    public function byebye() {
        $this->Session->setFlash('肉 bye bye');
        $this->redirect('umai');
    }
    
}