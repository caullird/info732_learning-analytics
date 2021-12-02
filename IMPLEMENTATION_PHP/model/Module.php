<?php

class Module extends Model {

	protected $_idmodule;
	protected $_title_module;
	protected $_description_module;
    protected $_gradecoefficient_module;
    protected $_idinternaluser;	


	public function __toString() {
		return get_class($this).": ".$this->title_module;
	}
}


