<?php

class ModuleUnit extends Model {

	protected $_idmoduleunit;
	protected $_idmodule;
	protected $_ideducationalunit;


	public function __toString() {
		return get_class($this);
	}
}


