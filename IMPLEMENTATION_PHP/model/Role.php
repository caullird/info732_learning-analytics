<?php

class Role extends Model {

	protected $_idrole;
	protected $_designation_role;


	public function __toString() {
		return get_class($this).": ".$this->name_role;
	}
}


