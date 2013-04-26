<?php
App::uses('AppModel', 'Model');
/**
 * Booking Model
 *
 * @property User $User
 * @property Shipper $Shipper
 * @property Packager $Packager
 * @property Mover $Mover
 */
class Booking extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Shipper' => array(
			'className' => 'Shipper',
			'foreignKey' => 'shipper_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Packager' => array(
			'className' => 'Packager',
			'foreignKey' => 'packager_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Mover' => array(
			'className' => 'Mover',
			'foreignKey' => 'mover_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
