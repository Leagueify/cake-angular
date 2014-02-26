<?php
App::uses('AppController', 'Controller');
/**
 * Points Controller
 *
 * @property Point $Point
 * @property PaginatorComponent $Paginator
 */
class PointsController extends AppController {

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
		$this->Point->recursive = 0;
		$this->set('points', $this->Paginator->paginate());
		$this->set('pointsAll', $this->Point->find('all'));
		$this->set('_serialize', array('pointsAll'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Point->exists($id)) {
			throw new NotFoundException(__('Invalid point'));
		}
		$this->Point->recursive = 2;
		$options = array('conditions' => array('Point.' . $this->Point->primaryKey => $id));
		$this->set('point', $this->Point->find('first', $options));
		$this->set('_serialize', array('point'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Point->create();
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		}
		$sources = $this->Point->Source->find('list');
		$teams = $this->Point->Team->find('list');
		$this->set(compact('sources', 'teams'));
	}

/**
 * json add method
 *
 * @return void
 */
	public function jsonAdd() {
		$status = array(
			'status' => 'Failure',
			'id' => ''
		);
		if ($this->request->is('post')) {
			$this->Point->create();
			if ($this->Point->save($this->request->data)) {
				$status['status'] = 'Success';
				$status['id'] = $this->Point->id;
			}
		}
        $this->set(compact('status'));
        $this->set('_serialize', array('status'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Point->exists($id)) {
			throw new NotFoundException(__('Invalid point'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Point->save($this->request->data)) {
				$this->Session->setFlash(__('The point has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The point could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Point.' . $this->Point->primaryKey => $id));
			$this->request->data = $this->Point->find('first', $options);
		}
		$sources = $this->Point->Source->find('list');
		$teams = $this->Point->Team->find('list');
		$this->set(compact('sources', 'teams'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Point->id = $id;
		if (!$this->Point->exists()) {
			throw new NotFoundException(__('Invalid point'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Point->delete()) {
			$this->Session->setFlash(__('The point has been deleted.'));
		} else {
			$this->Session->setFlash(__('The point could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function jsonDelete($id = null) {
		$status = array('status' => 'Failure');
		$this->Point->id = $id;
		$this->request->onlyAllow('post', 'delete');
		if ($this->Point->delete()) {
			$status['status'] = 'Success';
		}
        $this->set(compact('status'));
        $this->set('_serialize', array('status'));
	}}
