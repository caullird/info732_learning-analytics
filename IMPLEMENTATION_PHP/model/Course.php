<?php

class Course extends Model {

	protected $_idcourse;
	protected $_title_course;
    protected $_description_course;
    protected $_day_course;
    protected $_timebegin_course;
    protected $_timeend_course;
    protected $_idteacher;
    protected $_idclassroom;
    protected $_idpeoplegroup;
    protected $_idmodule;
    protected $_idtypecourse;

	public function __toString() {
		return get_class($this).": ".$this->title_course;
	}
}


