<?php

/**
 * @title
 * Containe \Drupal\kp_main\Controller\FirstPage.
 */

namespace Drupal\kp_main\Controller;

/**
 * Provides route for our costum module.
 */
class FirstPage{

	/**
	* Display simple page.
	*/
	public function content() {
		return array(
			'#markup' => 'Hello world',
		);
	}
}
