<?php
App::uses('AppController', 'Controller');
/**
 * PointsTeams Controller
 *
 * @property PointsTeam $PointsTeam
 * @property PaginatorComponent $Paginator
 */
class PointsTeamsController extends AppController {

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
		$this->PointsTeam->recursive = 0;
		$this->set('pointsTeams', $this->Paginator->paginate());
		$this->set('pointsTeamsAll', $this->PointsTeam->find('all'));
		$this->set('_serialize', array('pointsTeamsAll'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PointsTeam->exists($id)) {
			throw new NotFoundException(__('Invalid points team'));
		}
		$this->PointsTeam->recursive = 2;
		$options = array('conditions' => array('PointsTeam.' . $this->PointsTeam->primaryKey => $id));
		$this->set('pointsTeam', $this->PointsTeam->find('first', $options));
		$this->set('_serialize', array('pointsTeam'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PointsTeam->create();
			if ($this->PointsTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The points team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The points team could not be saved. Please, try again.'));
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
			$this->PointsTeam->create();
			if ($this->PointsTeam->save($this->request->data)) {
				$status['status'] = 'Success';
				$status['id'] = $this->PointsTeam->id;
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
		if (!$this->PointsTeam->exists($id)) {
			throw new NotFoundException(__('Invalid points team'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PointsTeam->save($this->request->data)) {
				$this->Session->setFlash(__('The points team has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The points team could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PointsTeam.' . $this->PointsTeam->primaryKey => $id));
			$this->request->data = $this->PointsTeam->find('first', $options);
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
		$this->PointsTeam->id = $id;
		if (!$this->PointsTeam->exists()) {
			throw new NotFoundException(__('Invalid points team'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PointsTeam->delete()) {
			$this->Session->setFlash(__('The points team has been deleted.'));
		} else {
			$this->Session->setFlash(__('The points team could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function jsonDelete($id = null) {
		$status = array('status' => 'Failure');
		$this->PointsTeam->id = $id;
		$this->request->onlyAllow('post', 'delete');
		if ($this->PointsTeam->delete()) {
			$status['status'] = 'Success';
		}
        $this->set(compact('status'));
        $this->set('_serialize', array('status'));
	}}
