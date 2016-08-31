<?php

namespace SimpleNotepad;

use AbstractNotepad\AbstractNotepad;
use Page\Page;

class SimpleNotepad extends AbstractNotepad {
	protected $pages = [ ];
	
	public function __construct($pages) {
		$this->pages = $pages;
	}
	
}
