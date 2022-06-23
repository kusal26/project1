<?php
class Connection{
    
   public $servername = "localhost";
   public $username = "root";
   public $password = "";
  public $dbname = "demo";
    public function __construct(){
          session_start();
    }

    public function getConnection(){
     
      //create connection with data base

$conn = new mysqli($this->servername, $this->username,$this->password, $this->dbname);

//checking connection 

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

return $conn;
    }



    public function insert($sql){
        if ($this->getConnection()->query($sql) === TRUE) {
            return true;
          } else {
           return false;
          }
    }

    

    public function getLoggedIn($username, $pw){
        $sql = "select *from user";
      $result = $this->getConnection()->query($sql);

if ($result->num_rows > 0) {
$crendtial= true;
  while($row = $result->fetch_assoc()) {
   if($username == $row['username'] && $pw==$row['password']){
       $crendtial= true;
        $_SESSION['userName'] = $row['name'];
        $_SESSION['invalidCredential']="";
        header("location: home.php");
   }else{
        $crendtial = false;
       $_SESSION['invalidCredential']="Invalid Credential";
   }
  
  }

  if(!$crendtial){
    echo "Invalid Credential";
}

} else {
  echo "Invalid Credential";
}
    }

    public function getSingUp($username,$email,$pw){
        $sql = "insert into user(username,password,name)values('$email','$pw','$username')";
        if($this->insert($sql)){
            header("location: login.php");
        }
    }
}