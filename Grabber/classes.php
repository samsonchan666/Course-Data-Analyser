<?php

/**
 * A class for course data.
 * @var $code -             String, i.e. COMP2021
 * @var $name -             String, i.e. Unix and Script Programming
 * @var $credit -           Integer, i.e. 3
 * @var $prereq -           String, i.e. COMP 1002 OR COMP 1004 [Need to be further processed with logical separation]
 * @var $exclude -          Array of String, i.e. [COMP1021, COMP1239]
 * @var $attrib -           Array of String, i.e. [SSC - H, SA]
 * @var $pre_code -         String, i.e. COMP111
 * @var $descript -         String, i.e. blah blah blah
 * @var $sections -         Array of #Section
 * @var $need_match -       Boolean, whether the course need to match lab/tut/lec or not
 */
class Course{

    function __construct(){
    }

    public $code = "COMP2021";
    public $name = "Unix and Script Programming";
    public $credit = 3;
    public $prereq = array();
    public $exclude = array();
    public $attrib = array();
    public $pre_code = "NIL";
    public $descript = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
         velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
          non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
    public $sections = array();
    public $need_match = true;

    function __toString(){
        return "Code: $this->code<br>Name: $this->name<br>Credit: $this->credit<br>Prereq: $this->prereq<br>
                Exclude: $this->exclude<br>Attrib: $this->attrib<br>Pre Code: $this->pre_code<br>
                Descript: $this->descript<br>Sections :$this->sections<br>Need Match: $this->need_match<br>";
    }

    function print_out(){
        echo "Code: $this->code<br>Name: $this->name<br>Credit: $this->credit<br>";
        echo "Prereq: ".count($this->prereq)."<br>";
        foreach($this->prereq as $item){
            echo $item."<br>";
        }
        echo "Exclude: ".count($this->exclude)."<br>";
        foreach($this->exclude as $item){
            echo $item."<br>";
        }
        echo "Attribute: ".count($this->attrib)."<br>";
        foreach($this->attrib as $item){
            echo $item."<br>";
        }
        echo "Pre Code: $this->pre_code<br>Descript: $this->descript<br>Need Match: $this->need_match<br>";
        echo "Sections: ".count($this->sections)."<br>";
        foreach($this->sections as $item){
            echo $item."<br>";
        }
        echo "<br>";
    }
}

/**
 * A class for section data.
 * @var $id -               Integer, i.e. 1737
 * @var $nature -           String, i.e. L(lecture)/LA(Lab)/T(Tutorial)
 * @var $date_time -        String, i.e. We 09:00AM - 10:50AM
 * @var $room -             String, i.e. Rm 5620, Lift 31-32
 * @var $instructor -       String, i.e. CHENG, Ho Kei
 * @var $quota -            Integer
 * @var $enroll -           Integer
 * @var $wait -             Integer
 * @var $match_id -         Integer, like 0/1/2/3 to identity matching between L/LA/T
 */
class Section{
    function __construct(){
    }

    public $id = 1234;
    public $nature = "L";
    public $date_time = 'NIL';
    public $room = 'NIL';
    public $instructor = 'NIL';
    public $quota = 89;
    public $enroll = 12;
    public $wait = 34;
    public $match_id = 0;
    //$avail = $quota - $enroll - $wait

    function print_out(){
        echo "ID: $this->id<br>Nature: $this->nature<br>Date and Time: $this->date_time<br>
              Room: $this->room<br>Instructor: $this->instructor<br>Quota: $this->quota<br>
              Enroll: $this->enroll<br>Wait: $this->wait<br>Match ID: $this->match_id<br>";
    }
}

?>