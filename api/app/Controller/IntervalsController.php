<?php
App::uses('AppController', 'Controller');
/**
 * Intervals Controller
 *
 * @property Interval $Interval
 * @property PaginatorComponent $Paginator
 */
class IntervalsController extends AppController {

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
		$this->Interval->recursive = 0;
		$this->set('intervals', $this->Paginator->paginate());
		$this->set('intervalsAll', $this->Interval->find('all'));
		$this->set('_serialize', array('intervalsAll'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Interval->exists($id)) {
			throw new NotFoundException(__('Invalid interval'));
		}
		$this->Interval->recursive = 2;
		$options = array('conditions' => array('Interval.' . $this->Interval->primaryKey => $id));
		$this->set('interval', $this->Interval->find('first', $options));
		$this->set('_serialize', array('interval'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Interval->create();
			if ($this->Interval->save($this->request->data)) {
				$this->Session->setFlash(__('The interval has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interval could not be saved. Please, try again.'));
			}
		}
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
			$this->Interval->create();
			if ($this->Interval->save($this->request->data)) {
				$status['status'] = 'Success';
				$status['id'] = $this->Interval->id;
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
		if (!$this->Interval->exists($id)) {
			throw new NotFoundException(__('Invalid interval'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Interval->save($this->request->data)) {
				$this->Session->setFlash(__('The interval has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interval could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Interval.' . $this->Interval->primaryKey => $id));
			$this->request->data = $this->Interval->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Interval->id = $id;
		if (!$this->Interval->exists()) {
			throw new NotFoundException(__('Invalid interval'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Interval->delete()) {
			$this->Session->setFlash(__('The interval has been deleted.'));
		} else {
			$this->Session->setFlash(__('The interval could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function jsonDelete($id = null) {
		$status = array('status' => 'Failure');
		$this->Interval->id = $id;
		$this->request->onlyAllow('post', 'delete');
		if ($this->Interval->delete()) {
			$status['status'] = 'Success';
		}
        $this->set(compact('status'));
        $this->set('_serialize', array('status'));
	}}
