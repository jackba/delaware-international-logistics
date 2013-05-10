<?php
App::uses('AppController', 'Controller');
/**
 * Movers Controller
 *
 * @property Mover $Mover
 */
class MoversController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mover->recursive = 0;
		$this->set('movers', $this->paginate('Mover', array('Mover.user_id =' => $this->Auth->user('id'))));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mover->hasAny( array('Mover.id' => $id, 'Mover.user_id' => $this->Auth->user('id')))) {
			throw new NotFoundException(__('Invalid mover'));
		}
		$options = array('conditions' => array('Mover.' . $this->Mover->primaryKey => $id));
		$this->set('mover', $this->Mover->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mover->create();
			if ($this->Mover->save($this->request->data)) {
				$this->Session->setFlash(__('The mover has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mover could not be saved. Please, try again.'));
			}
		}
		$options = array('conditions' => array('User.id' => $this->Auth->user('id')));
		$users = $this->Mover->User->find('list', $options);
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
		if (!$this->Mover->hasAny( array('Mover.id' => $id, 'Mover.user_id' => $this->Auth->user('id')))) {
			throw new NotFoundException(__('Invalid mover'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mover->save($this->request->data)) {
				$this->Session->setFlash(__('The mover has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mover could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mover.' . $this->Mover->primaryKey => $id));
			$this->request->data = $this->Mover->find('first', $options);
		}
		$users = $this->Mover->User->find('list', array('conditions' => array('User.id' => $this->Auth->user('id'))));
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
		$this->Mover->id = $id;
		if (!$this->Mover->hasAny( array('Mover.id' => $id, 'Mover.user_id' => $this->Auth->user('id')))) {
			throw new NotFoundException(__('Invalid mover'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mover->delete()) {
			$this->Session->setFlash(__('Mover deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mover was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
