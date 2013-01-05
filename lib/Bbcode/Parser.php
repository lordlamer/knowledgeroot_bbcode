<?php

class Bbcode_Parser extends Knowledgeroot_Content_Parser_Abstract {
	public function parse($content) {
		// init bbcode
		$bbcode = Zend_Markup::factory('Bbcode');

		// parse and return content
		if($content != '')
			return $bbcode->render($content);
		else
			return '';
	}
}