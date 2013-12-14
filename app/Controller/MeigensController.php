<?php
App::uses('AppController', 'Controller');
/**
 * Meigens Controller
 *
 * @property Meigen $Meigen
 * @property PaginatorComponent $Paginator
 */
class MeigensController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Meigen->recursive = 0;
		$this->set('meigens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Meigen->exists($id)) {
			throw new NotFoundException(__('Invalid meigen'));
		}
		$options = array('conditions' => array('Meigen.' . $this->Meigen->primaryKey => $id));
		$this->set('meigen', $this->Meigen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Meigen->create();
			if ($this->Meigen->save($this->request->data)) {
				$this->Session->setFlash(__('The meigen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meigen could not be saved. Please, try again.'));
			}
		}
		$users = $this->Meigen->User->find('list');
		$categories = $this->Meigen->Category->find('list');
		$authors = $this->Meigen->Author->find('list');
		$scenes = $this->Meigen->Scene->find('list');
		$tags = $this->Meigen->Tag->find('list');
		$this->set(compact('users', 'categories', 'authors', 'scenes', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Meigen->exists($id)) {
			throw new NotFoundException(__('Invalid meigen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Meigen->save($this->request->data)) {
				$this->Session->setFlash(__('The meigen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The meigen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Meigen.' . $this->Meigen->primaryKey => $id));
            $this->request->data = $this->Meigen->find('first', $options);
            $this->request->data['Meigen']['name'] = $this->request->data['Meigen']['author'];
		}
		$users = $this->Meigen->User->find('list');
		$categories = $this->Meigen->Category->find('list');
		$authors = $this->Meigen->Author->find('list');
		$scenes = $this->Meigen->Scene->find('list');
		$tags = $this->Meigen->Tag->find('list');
		$this->set(compact('users', 'categories', 'authors', 'scenes', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Meigen->id = $id;
		if (!$this->Meigen->exists()) {
			throw new NotFoundException(__('Invalid meigen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Meigen->delete()) {
			$this->Session->setFlash(__('The meigen has been deleted.'));
		} else {
			$this->Session->setFlash(__('The meigen could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
