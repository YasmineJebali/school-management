<?PHP
class course
{   private $title;
    private $subjects;
    private $content;
    private $file;
    

    function __construct($title,$subjects,$content,$file)
    {   $this->title = $title; 
        $this->subjects = $subjects;
		$this->content = $content;
        $this->file = $file;
    }
    // getter 
    function gettitle()
    {
        return $this->title;
    }
    function getsubjects()
    {
        return $this->subjects;
    }
    function getcontent()
    {
        return $this->content;
    }
    function getfile()
    {
        return $this->file;
    }
    // setter 
     function settitle($title)
    {
        return $this->title= $title;
    }
    function setsubjects($subjects)
    {
        return $this->subjects= $subjects;
    }
    function setcontent($content)
    {
        return $this->content= $content;
    }
    function setfile($file)
    {
        return $this->file= $file;
    }
}
  ?>