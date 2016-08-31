<?php

namespace AbstractÅlectronicDevice;

class AbstractÅlectronicDevice {
	
	protected $flag = false;
	
	public function start() {
		return $this->flag = true;
	}
	
	public function stop() {
		return $this->flag = false;
	}
	
	public function isStarted() {
		return $this->flag;
	}
}