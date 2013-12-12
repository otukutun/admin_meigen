<?php
App::uses('Meigen', 'Model');

/**
 * Meigen Test Case
 *
 */
class MeigenTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.meigen',
		'app.user',
		'app.category',
		'app.author',
		'app.scene',
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
		$this->Meigen = ClassRegistry::init('Meigen');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Meigen);

		parent::tearDown();
	}

}
