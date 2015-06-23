<?php

class PostsController extends AppController {
  public $helpers = array('Html', 'Form');

  public function index() {
    $this->set('posts', $this->Post->find('all'));
  }

  public function view($id = null) {
    if(!$id) {
      throw new NotFoundException(__('Invalid post'));
    }

    //$idを元に、対応するレコードを$postnに入れる
    $post = $this->Post->findById($id);
    if(!$post) {
      throw new NotFoundException(__('Invalid post'));
    }
    $this->set('post', $post);
  }

  public function add() {
    //isはrequestオブジェクトのHTTPリクエストを判断するためのもの
    if($this->request->is('post')) {
      $this->Post->create();
      if ($this->Post->save($this->request->data)) {
        $this->Session->setFlash(__('Your post has been saved.'));
        return $this->redirect(array('action' => 'index'));
       }
       $this->Session->setFlash(__('Unable to add your post.'));
     }
  }

  public function edit($id = null) {
    if(!$id) {
      throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Post->findById($id);
    if(!$post) {
      throw new NotFoundException(__('Invalid post'));
    }
    
    if($this->request->is('post')) {
      $this->Post->id = $id; 
      if($this->Post->save($this->request->data)) {
        $this->Session->setFlash(__('投稿されました'));
        return $this->redirect(array('action' => 'index'));
      }
    }

    if(!$this->request->data) {
      $this->request->data = $post;
    }
  }
}
