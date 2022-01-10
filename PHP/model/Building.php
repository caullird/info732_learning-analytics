<?php

class Building extends Model {

	protected $_idbuilding;
	protected $_name_building;
    protected $_description_building;


	public function __toString() {
		return get_class($this).": ".$this->name_building;
	}
}


