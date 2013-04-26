<?php
App::uses('AppController', 'Controller');
/**
 * Packagers Controller
 *
 * @property Packager $Packager
 */
class PackagersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Packager->recursive = 0;
		$this->set('packagers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Packager->exists($id)) {
			throw new NotFoundException(__('Invalid packager'));
		}
		$options = array('conditions' => array('Packager.' . $this->Packager->primaryKey => $id));
		$this->set('packager', $this->Packager->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Packager->create();
			if ($this->Packager->save($this->request->data)) {
				$this->Session->setFlash(__('The packager has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The packager could not be saved. Please, try again.'));
			}
		}
		$users = $this->Packager->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Packager->exists($id)) {
			throw new NotFoundException(__('Invalid packager'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Packager->save($this->request->data)) {
				$this->Session->setFlash(__('The packager has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The packager could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Packager.' . $this->Packager->primaryKey => $id));
			$this->request->data = $this->Packager->find('first', $options);
		}
		$users = $this->Packager->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Packager->id = $id;
		if (!$this->Packager->exists()) {
			throw new NotFoundException(__('Invalid packager'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Packager->delete()) {
			$this->Session->setFlash(__('Packager deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Packager was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
