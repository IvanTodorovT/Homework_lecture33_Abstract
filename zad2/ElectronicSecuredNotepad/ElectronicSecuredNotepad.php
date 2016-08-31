<?php

namespace ElectronicSecuredNotepad;

require_once 'readline.php';

use AbstractÅlectronicDevice\AbstractÅlectronicDevice;

class ElectronicSecuredNotepad extends AbstractÅlectronicDevice {
	
	public $password;
	public $pages = [ ];
	
	public function __construct($pages, $password) {
		$this->pages = $pages;
		$this->password = $password;
		
		$password = $_GET;
		$_GET ['password'] = $this->password;
	}
	
	public function addTextOver($text, $page) {
		$page->setText ( $text );
		
		$input = readline ( "Enter password: " );
		
		if ($input == $this->password && $this->flag == true) {
			$page->setText ( $text );
			echo "Done!" . PHP_EOL . PHP_EOL;
			echo $page->review ();
		} else {
			echo "Enter correct pass or start() the notepad!";
		}
	}
	
	public function addText($text, $page) {
		$input = readline ( "Enter password: " );
		
		if ($input == $this->password && $this->flag == true) {
			$page->setText ( $page->getText () . $text );
			echo "Done!" . PHP_EOL . PHP_EOL;
			echo $page->review ();
		} else {
			echo "Enter correct pass or start() the notepad!";
		}
	}
	
	public function deleteText($page) {
		$input = readline ( "Enter password: " );
		
		if ($input == $this->password && $this->flag == true) {
			$page->deleteText ();
			echo "Done!" . PHP_EOL . PHP_EOL;
			echo $page->review ();
		} else {
			echo "Enter correct pass or start() the notepad!";
		}
	}
	
	public function review() {
		$input = readline ( "Enter password: " );
		
		if ($input == $this->password && $this->flag == true) {
			echo "Done!" . PHP_EOL . PHP_EOL;
			foreach ( $this->pages as $page ) {
				echo $page->review (), PHP_EOL . PHP_EOL;
			}
		} else {
			echo "Enter correct pass or start() the notepad!";
		}
	}
}