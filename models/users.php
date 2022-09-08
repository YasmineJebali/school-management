<?PHP
class users
{   private $first_name;
    private $last_name;
    private $email;
    private $password;
    private $profile_picture;
    private $user_role;




    function __construct($first_name,$last_name,$email,$password,$profile_picture,$user_role)
    {   $this->first_name = $first_name; 
        $this->last_name = $last_name;
		$this->email = $email;
        $this->password = $password;
        $this->profile_picture = $profile_picture;
        $this->user_role = $user_role;



    }
    // getter 
    function getfirst_name()
    {
        return $this->first_name;
    }
    function getlast_name()
    {
        return $this->last_name;
    }
    function getemail()
    {
        return $this->email;
    }
    function getpassword()
    {
        return $this->password;
    }
    function getprofile_picture()
    {
        return $this->profile_picture;
    }
    function getuser_picture()
    {
        return $this->user_picture;
    }
    // setter 
     function setfirst_name($first_name)
    {
        return $this->first_name= $first_name;
    }
    function setlast_name($last_name)
    {
        return $this->last_name= $last_name;
    }
   
    function setemail($email)
    {
        return $this->email= $email;
    }
    function setpassword($password)
    {
        return $this->password= $password;
    }
    
    function profile_picture($profile_picture)
    {
        return $this->profile_picture= $profile_picture;
    }
    function user_role($user_role)
    {
        return $this->user_role= $user_role;
    }
}
  ?>