<?php

namespace AbstractNotepad;

use Page\Page;

abstract class AbstractNotepad {
	
	public function addText($text, Page $page) {
		$page->setText ( $page->getText () . $text );
	}
	
	public function addTextOver($text, $page) {
		$page->setText ( $text );
	}
	
	public function deleteText($page) {
		$page->deleteText ();
	}
	
	public function review() {
		foreach ( $this->pages as $page ) {
			echo $page->review (), PHP_EOL . PHP_EOL;
		}
	}
	
	public function searchWord($word) {
		foreach ( $this->pages as $page ) {
			if ($page->searchWord ( $word )) {
				return true;
				// return "IMA".PHP_EOL;
			}
		}
		return false;
		// return"NQMA";
	}
	
	public function printAllPagesWithDigits() {
		foreach ( $this->pages as $page ) {
			if ($page->containsDigits ()) {
				echo $page->review () . PHP_EOL;
			}
		}
	}
}
