<?php

namespace Abstract�lectronicDevice;

class Abstract�lectronicDevice {
	
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