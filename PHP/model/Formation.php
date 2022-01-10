<?php

class Formation extends Model {

	protected $_idformation;
	protected $_name_formation;

	public function __toString() {
		return get_class($this).": ".$this->name_formation;
	}
}

