<?php
/**
 * PointFixture
 *
 */
class PointFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'source_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'value' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '9,4'),
		'date' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'value' => 1,
			'date' => '2014-02-26 04:50:19',
			'created' => '2014-02-26 04:50:19',
			'updated' => '2014-02-26 04:50:19'
		),
	);

}
