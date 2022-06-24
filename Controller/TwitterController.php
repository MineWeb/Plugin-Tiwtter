<?php
class TwitterController extends AppController {

    public function index(){
		$this->loadModel('Twitter.Twitter');
		$this->set('title_for_layout', 'Twitter');
        $twitter = $this->Twitter->find('first');
        $this->set(compact('twitter'));
    }

    public function admin_index($id = false){
        if($this->isConnected AND $this->User->isAdmin()){
			$this->loadModel('Twitter.Twitter');
			$this->layout = 'admin';
			$twitter = $this->Twitter->find('first');
            $this->set(compact('twitter'));
        } else {
            $this->redirect('/');
        }
    }

    public function admin_ajax_create(){
        if (!$this->request->is('post')) throw new BadRequestException();
        if (empty($this->request->data['name_twitter'])) return $this->sendJSON(['statut' => false, 'msg' => $this->Lang->get('TWITTER__NAME_EMPTY')]);

        $this->Twitter->read(null, null);
        $this->Twitter->set([
            'name_twitter' =>  $this->request->data['name_twitter']
        ]);
        $this->Twitter->save();
        return $this->sendJSON(['statut' => true, 'msg' => $this->Lang->get('GLOBAL__TWITTER__SUCCESS')]);
    }

    function admin_ajax_edit() {
        if (!$this->request->is('post'))
            throw new BadRequestException();

        if (empty($this->request->data['id_twitter'])) return $this->sendJSON(['statut' => false, 'msg' => $this->Lang->get('TWITTER__ID_EMPTY')]);
        if (empty($this->request->data['name_twitter'])) return $this->sendJSON(['statut' => false, 'msg' => $this->Lang->get('TWITTER__NAME_EMPTY')]);    
           
        $this->loadModel('Twitter.Twitter');

        $this->Twitter->read(null, $this->request->data['id_twitter']);
        $this->Twitter->set([
            'id' => $this->request->data['id_twitter'],
            'name_twitter' =>  $this->request->data['name_twitter']
        ]);
        $this->Twitter->save();
        $this->sendJSON(['statut' => true, 'msg' => $this->Lang->get('GLOBAL__TWITTER__SUCCESS')]);
    }

    public function admin_delete($id){
        $this->autoRender = false;
        if($this->isConnected AND $this->User->isAdmin()){
			$this->loadModel('Twitter.Twitter');
            
            $this->Twitter->delete($id);

            $this->redirect('/admin/twitter');
        } else {
            $this->redirect('/');
        }
    }
}
