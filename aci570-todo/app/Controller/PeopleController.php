<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Person $Person
 * @property PaginatorComponent $Paginator
 */
class PeopleController extends AppController {

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
		$this->Person->recursive = 0;
		$this->set('people', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
		$this->set('person', $this->Person->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Person->create();
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		}
		$projects = $this->Person->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Person->exists($id)) {
			throw new NotFoundException(__('Invalid person'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Person->save($this->request->data)) {
				$this->Session->setFlash(__('The person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Person.' . $this->Person->primaryKey => $id));
			$this->request->data = $this->Person->find('first', $options);
		}
		$projects = $this->Person->Project->find('list');
		$this->set(compact('projects'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Person->id = $id;
		if (!$this->Person->exists()) {
			throw new NotFoundException(__('Invalid person'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Person->delete()) {
			$this->Session->setFlash(__('The person has been deleted.'));
		} else {
			$this->Session->setFlash(__('The person could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
