<?php
/**
 * LeagueFixture
 *
 */
class LeagueFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'logo' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'motto' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'started_date' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'event_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'public' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'logo' => 'Lorem ipsum dolor sit amet',
			'motto' => 'Lorem ipsum dolor sit amet',
			'started_date' => '2014-03-04 03:10:44',
			'event_id' => 1,
			'public' => 1,
			'created' => '2014-03-04 03:10:44',
			'updated' => '2014-03-04 03:10:44'
		),
	);

}
