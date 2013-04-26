<?php
App::uses('AppController', 'Controller');
/**
 * Shippers Controller
 *
 * @property Shipper $Shipper
 */
class ShippersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Shipper->recursive = 0;
		$this->set('shippers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Shipper->exists($id)) {
			throw new NotFoundException(__('Invalid shipper'));
		}
		$options = array('conditions' => array('Shipper.' . $this->Shipper->primaryKey => $id));
		$this->set('shipper', $this->Shipper->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Shipper->create();
			if ($this->Shipper->save($this->request->data)) {
				$this->Session->setFlash(__('The shipper has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shipper could not be saved. Please, try again.'));
			}
		}
		$users = $this->Shipper->User->find('list');
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
		if (!$this->Shipper->exists($id)) {
			throw new NotFoundException(__('Invalid shipper'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Shipper->save($this->request->data)) {
				$this->Session->setFlash(__('The shipper has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shipper could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Shipper.' . $this->Shipper->primaryKey => $id));
			$this->request->data = $this->Shipper->find('first', $options);
		}
		$users = $this->Shipper->User->find('list');
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
		$this->Shipper->id = $id;
		if (!$this->Shipper->exists()) {
			throw new NotFoundException(__('Invalid shipper'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Shipper->delete()) {
			$this->Session->setFlash(__('Shipper deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Shipper was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
