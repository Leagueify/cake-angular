<?php
App::uses('AppController', 'Controller');
/**
 * PlayersTeams Controller
 *
 * @property PlayersTeam $PlayersTeam
 * @property PaginatorComponent $Paginator
 */
class PlayersTeamsController extends AppController {

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
		$this->PlayersTeam->recursive = 0;
		$this->set('playersTeams', $this->Paginator->paginate());
		$this->set('playersTeamsAll', $this->PlayersTeam->find('all'));
		$this->set('_serialize', array('playersTeamsAll'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PlayersTeam->exists($id)) {
			throw new NotFoundException(__('Invalid players team'));
		}
		$this->PlayersTeam->recursive = 2;
		$options = array('conditions' => array('PlayersTeam.' . $this->PlayersTeam->primaryKey => $id));
		$this->set('playersTeam', $this->PlayersTeam->find('first', $options));
		$this->set('_serialize', array('playersTeam'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PlayersTeam->create();
			if ($this->PlayersTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The players team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The players team could not be saved. Please, try again.'));
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
			$this->PlayersTeam->create();
			if ($this->PlayersTeam->save($this->request->data)) {
				$status['status'] = 'Success';
				$status['id'] = $this->PlayersTeam->id;
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
		if (!$this->PlayersTeam->exists($id)) {
			throw new NotFoundException(__('Invalid players team'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PlayersTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The players team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The players team could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PlayersTeam.' . $this->PlayersTeam->primaryKey => $id));
			$this->request->data = $this->PlayersTeam->find('first', $options);
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
		$this->PlayersTeam->id = $id;
		if (!$this->PlayersTeam->exists()) {
			throw new NotFoundException(__('Invalid players team'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PlayersTeam->delete()) {
			$this->Session->setFlash(__('The players team has been deleted.'));
		} else {
			$this->Session->setFlash(__('The players team could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function jsonDelete($id = null) {
		$status = array('status' => 'Failure');
		$this->PlayersTeam->id = $id;
		$this->request->onlyAllow('post', 'delete');
		if ($this->PlayersTeam->delete()) {
			$status['status'] = 'Success';
		}
        $this->set(compact('status'));
        $this->set('_serialize', array('status'));
	}}
