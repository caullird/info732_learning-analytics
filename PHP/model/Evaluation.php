<?php

class Evaluation extends Model {

	protected $_idevaluation;
    protected $_title_evaluation;
	protected $_mark_evaluation;
    protected $_comment_evaluation;
    protected $_idteacher;
    protected $_idstudent;
    protected $_idmodule;

	public function __toString() {
		return get_class($this).": ".$this->title_evaluation;
	}
}


