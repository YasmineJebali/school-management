<?PHP
class quizz
{   private $id_courses;
    private $difficulty_level;
    private $summary;
    private $quizz_status;


    function __construct($id_courses,$difficulty_level,$summary,$quizz_status)
    {   $this->id_courses = $id_courses; 
        $this->difficulty_level = $difficulty_level;
		$this->summary = $summary;
        $this->quizz_status = $quizz_status;
    }
    // getter 
    function getid_courses()
    {
        return $this->id_courses;
    }
    function getdifficulty_level()
    {
        return $this->difficulty_level;
    }
    function getsummary()
    {
        return $this->summary;
    }
    function getquizz_status()
    {
        return $this->quizz_status;
    }
    // setter 
     function setid_courses($id_courses)
    {
        return $this->id_courses= $id_courses;
    }
    function setdifficulty_level($difficulty_level)
    {
        return $this->difficulty_level= $difficulty_level;
    }
    function setsummary($summary)
    {
        return $this->summary= $summary;
    }
    function setquizz_status($quizz_status)
    {
        return $this->quizz_status= $quizz_status;
    }
}
  ?>