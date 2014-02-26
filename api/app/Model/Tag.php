<?php
App::uses('AppModel', 'Model');
/**
 * Tag Model
 *
 * @property League $League
 */
class Tag extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'League' => array(
			'className' => 'League',
			'joinTable' => 'leagues_tags',
			'foreignKey' => 'tag_id',
			'associationForeignKey' => 'league_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
