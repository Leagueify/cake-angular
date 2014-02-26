<?php
App::uses('AppController', 'Controller');
/**
 * LeaguesTags Controller
 *
 * @property LeaguesTag $LeaguesTag
 * @property PaginatorComponent $Paginator
 */
class LeaguesTagsController extends AppController {

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
		$this->LeaguesTag->recursive = 0;
		$this->set('leaguesTags', $this->Paginator->paginate());
		$this->set('leaguesTagsAll', $this->LeaguesTag->find('all'));
		$this->set('_serialize', array('leaguesTagsAll'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LeaguesTag->exists($id)) {
			throw new NotFoundException(__('Invalid leagues tag'));
		}
		$this->LeaguesTag->recursive = 2;
		$options = array('conditions' => array('LeaguesTag.' . $this->LeaguesTag->primaryKey => $id));
		$this->set('leaguesTag', $this->LeaguesTag->find('first', $options));
		$this->set('_serialize', array('leaguesTag'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LeaguesTag->create();
			if ($this->LeaguesTag->save($this->request->data)) {
				$this->Session->setFlash(__('The leagues tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leagues tag could not be saved. Please, try again.'));
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
			$this->LeaguesTag->create();
			if ($this->LeaguesTag->save($this->request->data)) {
				$status['status'] = 'Success';
				$status['id'] = $this->LeaguesTag->id;
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
		if (!$this->LeaguesTag->exists($id)) {
			throw new NotFoundException(__('Invalid leagues tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LeaguesTag->save($this->request->data)) {
				$this->Session->setFlash(__('The leagues tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The leagues tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LeaguesTag.' . $this->LeaguesTag->primaryKey => $id));
			$this->request->data = $this->LeaguesTag->find('first', $options);
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
		$this->LeaguesTag->id = $id;
		if (!$this->LeaguesTag->exists()) {
			throw new NotFoundException(__('Invalid leagues tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LeaguesTag->delete()) {
			$this->Session->setFlash(__('The leagues tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The leagues tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function jsonDelete($id = null) {
		$status = array('status' => 'Failure');
		$this->LeaguesTag->id = $id;
		$this->request->onlyAllow('post', 'delete');
		if ($this->LeaguesTag->delete()) {
			$status['status'] = 'Success';
		}
        $this->set(compact('status'));
        $this->set('_serialize', array('status'));
	}}
