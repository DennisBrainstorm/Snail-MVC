<?php

class DebugController extends Controller {
	public function __construct() {
		parent::__construct();

		$this->config_view_array();

		/**
		 * Render the correct
		 * content based on the
		 * parameter
		 */
		$this->view->show('debug/debug');
	}
}