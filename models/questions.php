<?PHP
class questions
{   private $id_quizz;
    private $question_summary;
    private $correct_answer;
    private $option1;
    private $option2;
    private $option3;

    function __construct($id_quizz,$question_summary,$correct_answer,$option1,$option2,$option3)
    {   $this->id_quizz = $id_quizz; 
        $this->question_summary = $question_summary;
		$this->correct_answer = $correct_answer;
        $this->option1 = $option1;
        $this->option2 = $option2;
        $this->option3 = $option3;
    }
    // getter 
    function getid_quizz()
    {
        return $this->id_quizz;
    }
    function getquestion_summary()
    {
        return $this->question_summary;
    }
    function getcorrect_answer()
    {
        return $this->correct_answer;
    }
    function getoption1()
    {
        return $this->option1;
    }
    function getoption2()
    {
        return $this->option2;
    }
    function getoption3()
    {
        return $this->option3;
    }
    // setter 
     function setid_quizz($nom_prod)
    {
        return $this->id_quizz= $id_quizz;
    }
    function setquestion_summary($question_summary)
    {
        return $this->question_summary= $question_summary;
    }
    function setcorrect_answer($correct_answer)
    {
        return $this->$correct_answer= $correct_answer;
    }
    function setoption1($option1)
    {
        return $this->option1= $option1;
    }
    function setoption2($option1)
    {
        return $this->option2= $option2;
    }
    function setoption3($option3)
    {
        return $this->option3= $option3;
    }
}
  ?>