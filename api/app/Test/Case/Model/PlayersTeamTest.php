<?php
App::uses('PlayersTeam', 'Model');

/**
 * PlayersTeam Test Case
 *
 */
class PlayersTeamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.players_team',
		'app.player',
		'app.source',
		'app.event',
		'app.league',
		'app.team',
		'app.user',
		'app.tag',
		'app.leagues_tag',
		'app.point'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PlayersTeam = ClassRegistry::init('PlayersTeam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PlayersTeam);

		parent::tearDown();
	}

}
