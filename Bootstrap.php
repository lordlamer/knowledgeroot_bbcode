<?php

/**
 * module bootstrap
 */
class BbcodeBootstrap extends Knowledgeroot_Module_Bootstrap_Abstract {
    public function _initBbcode() {
	$parser = new Bbcode_Parser();

	Knowledgeroot_Registry::set('Knowledgeroot_Content_Parser', $parser);
    }
}
