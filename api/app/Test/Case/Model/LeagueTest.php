<?php
App::uses('League', 'Model');

/**
 * League Test Case
 *
 */
class LeagueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.league',
		'app.event',
		'app.source',
		'app.player',
		'app.point',
		'app.team',
		'app.user',
		'app.players_team',
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
		$this->League = ClassRegistry::init('League');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->League);

		parent::tearDown();
	}

}
