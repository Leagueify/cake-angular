<?php
/**
 * PlayerFixture
 *
 */
class PlayerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'source_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'key' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'handicap' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
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
			'source_id' => 1,
			'key' => 'Lorem ipsum dolor sit amet',
			'handicap' => 1,
			'created' => '2014-03-04 03:10:45',
			'updated' => '2014-03-04 03:10:45'
		),
	);

}
