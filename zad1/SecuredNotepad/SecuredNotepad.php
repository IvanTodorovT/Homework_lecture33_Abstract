<?php

namespace SecuredNotepad;

require_once 'readline.php';

use AbstractNotepad\AbstractNotepad;

class SecuredNotepad extends AbstractNotepad {
	public $password;
	public $pages = [ ];
	public function __construct($pages, $password) {
		
		
		$this->pages = $pages;
		$this->password = $password;

		$password = $_GET;
		$_GET ['password'] = $this->password;
	}
	
	public function addText($text, $page) {
		$input = readline ( "Enter password: " );
		
		if ($input == $this->password) {
			$page->setText ( $page->getText () . $text );
			echo "Done!" . PHP_EOL.PHP_EOL;
			echo $page->review ();
		} else {
			echo "Wrong password!";
		}
	}
	
	public function addTextOver($text, $page) {
		$page->setText ( $text );
		
		$input = readline ( "Enter password: " );
		
		if ($input == $this->password) {
			$page->setText ( $text );
			echo "Done!" . PHP_EOL.PHP_EOL;
			echo $page->review ();
		} else {
			echo "Wrong password!";
		}
	}
	
	public function deleteText($page) {
		$input = readline ( "Enter password: " );
		
		if ($input == $this->password) {
			$page->deleteText ();
			echo "Done!" . PHP_EOL.PHP_EOL;
			echo $page->review ();
		} else {
			echo "Wrong password!";
		}
	}
	
	public function review() {
		$input = readline ( "Enter password: " );
		
		if ($input == $this->password) {
			echo "Done!" . PHP_EOL.PHP_EOL;
			foreach ( $this->pages as $page ) {
				echo $page->review (), PHP_EOL . PHP_EOL;
			}
		} else {
			echo "Wrong password!";
		}
	}
}