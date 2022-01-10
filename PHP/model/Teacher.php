<?php

class Teacher extends Model {

	protected $_idteacher;
	protected $_num_box;
    protected $_idinternaluser;

	public function __toString() {
		return get_class($this).": ".$this->num_box;
	}
}


