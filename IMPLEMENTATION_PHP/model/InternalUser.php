<?php

class InternalUser extends Model {

	protected $_idinternaluser;
	protected $_name_user;
	protected $_forname_user;
  	protected $_email;
  	protected $_password;
  	protected $_username;
	protected $_picture;
 	protected $_admin;
	protected $_deleted; 
	

	public function __toString() {
		return get_class($this).": ".$this->name_user;
	}


}


