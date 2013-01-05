<?php

/**
 * bbcode module initialisation
 */
class BbcodeModule implements Knowledgeroot_Module_Interface {
	/**
	 * return bbcode config path
	 */
	public function getConfigPath() {
		return __DIR__ . '/config/module.ini';
	}
}
