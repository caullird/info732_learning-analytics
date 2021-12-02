<?php

class Homework extends Model {

	protected $_idhomework;
	protected $_title_homework;
    protected $_description_homework;
    protected $_deadline;
    protected $_checked;
    protected $_idmodule;
    protected $_idstudent;


	public function __toString() {
		return get_class($this).": ".$this->title_homework;
	}
}

