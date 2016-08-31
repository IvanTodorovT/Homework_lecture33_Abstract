<?php

namespace Page;

class Page {
	protected $title;
	protected $text;
	
	public function __construct($title, $text) {
		$this->title = $title;
		$this->text = $text;
	}
	
	public function addText($text) {
		$this->setText ( $this->getText () . $text );
	}
	
	public function deleteText() {
		$this->text = "";
	}
	
	public function review() {
		return sprintf ( 'Title: %s
				Text: %s', $this->title, $this->text );
	}
	
	public function getText() {
		return $this->text;
	}
	
	public function setText($text) {
		$this->text = $text;
	}
	
	public function searchWord($word) {
		if (strpos ( $this->text, $word ) !== FALSE) {
			// echo 'Found it';
			return true;
		} else {
			// echo 'Not found.';
			return false;
		}
	}
	
	public function containsDigits() {
		if (preg_match_all ( '!\d+!', $this->text, $matches )) {
			// echo "YES";
			return true;
		} else {
			// echo "NO";
			return false;
		}
	}
}