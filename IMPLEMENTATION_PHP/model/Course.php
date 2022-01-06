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

    public static function get_next_course(){
        $current_time_date = date('Y-m-d');
        $current_time_hour = date('H:m');
        //TODO DODOD
        var_dump($current_time_date);
        $sql = "select * from course where DATEDIFF(".$current_time_date.",day_course) > 0";
        $st = db()->prepare($sql);
		$st->execute();
		$list = array();
		while($row = $st->fetch(PDO::FETCH_ASSOC)) {
			$list[] = new Course($row["idcourse"]);
		}
        echo count($list);
        var_dump($list);

    }
    
}


