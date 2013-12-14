<?php
App::uses('AppController', 'Controller');
/**
 * Scenes Controller
 *
 * @property Scene $Scene
 * @property PaginatorComponent $Paginator
 */
class ScenesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Scene->recursive = 0;
		$this->set('scenes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Scene->exists($id)) {
			throw new NotFoundException(__('Invalid scene'));
		}
		$options = array('conditions' => array('Scene.' . $this->Scene->primaryKey => $id));
		$this->set('scene', $this->Scene->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Scene->create();
			if ($this->Scene->save($this->request->data)) {
				$this->Session->setFlash(__('The scene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
			}
		}
		$meigens = $this->Scene->Meigen->find('list');
		$this->set(compact('meigens'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Scene->exists($id)) {
			throw new NotFoundException(__('Invalid scene'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Scene->save($this->request->data)) {
				$this->Session->setFlash(__('The scene has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scene could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Scene.' . $this->Scene->primaryKey => $id));
			$this->request->data = $this->Scene->find('first', $options);
		}
		$meigens = $this->Scene->Meigen->find('list');
		$this->set(compact('meigens'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Scene->id = $id;
		if (!$this->Scene->exists()) {
			throw new NotFoundException(__('Invalid scene'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Scene->delete()) {
			$this->Session->setFlash(__('The scene has been deleted.'));
		} else {
			$this->Session->setFlash(__('The scene could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
