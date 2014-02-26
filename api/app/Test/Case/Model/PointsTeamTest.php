<?php
App::uses('PointsTeam', 'Model');

/**
 * PointsTeam Test Case
 *
 */
class PointsTeamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.points_team',
		'app.point',
		'app.source',
		'app.event',
		'app.league',
		'app.team',
		'app.user',
		'app.tag',
		'app.leagues_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PointsTeam = ClassRegistry::init('PointsTeam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PointsTeam);

		parent::tearDown();
	}

}
