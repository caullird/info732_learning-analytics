<?php

class Teacher extends Model {

	protected $_idteacher;
	protected $_num_box;

	public function __toString() {
		return get_class($this).": ".$this->num_box;
	}
}


