<?php

class TypeCourse extends Model {

	protected $_idtypecourse;
	protected $_type_course;


	public function __toString() {
		return get_class($this).": ".$this->type_course;
	}
}


