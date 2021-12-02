<?php

class EducationalUnit extends Model {

	protected $_ideducationalunit;
	protected $_title_educationalunit;
	protected $_description_educationalunit;	


	public function __toString() {
		return get_class($this).": ".$this->title_educationalunit;
	}
}


