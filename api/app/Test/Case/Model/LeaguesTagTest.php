<?php
App::uses('LeaguesTag', 'Model');

/**
 * LeaguesTag Test Case
 *
 */
class LeaguesTagTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.leagues_tag',
		'app.league',
		'app.event',
		'app.source',
		'app.player',
		'app.point',
		'app.team',
		'app.user',
		'app.players_team',
		'app.tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->LeaguesTag = ClassRegistry::init('LeaguesTag');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->LeaguesTag);

		parent::tearDown();
	}

}
