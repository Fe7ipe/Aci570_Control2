<?php
App::uses('TaskList', 'Model');

/**
 * TaskList Test Case
 *
 */
class TaskListTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.task_list',
		'app.project'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TaskList = ClassRegistry::init('TaskList');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TaskList);

		parent::tearDown();
	}

}
