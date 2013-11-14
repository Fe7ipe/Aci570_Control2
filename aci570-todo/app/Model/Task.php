<?php
App::uses('AppModel', 'Model');
/**
 * Task Model
 *
 * @property TaskList $TaskList
 * @property Person $Person
 */
class Task extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TaskList' => array(
			'className' => 'TaskList',
			'foreignKey' => 'task_list_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
