<?php
App::uses('Interval', 'Model');

/**
 * Interval Test Case
 *
 */
class IntervalTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.interval'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Interval = ClassRegistry::init('Interval');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Interval);

		parent::tearDown();
	}

}
