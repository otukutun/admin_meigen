<?php
App::uses('Scene', 'Model');

/**
 * Scene Test Case
 *
 */
class SceneTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.scene',
		'app.meigen',
		'app.user',
		'app.category',
		'app.author',
		'app.meigens_scene',
		'app.tag',
		'app.meigens_tag'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Scene = ClassRegistry::init('Scene');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Scene);

		parent::tearDown();
	}

}
