 <?php 
 $filepath = realpath(dirname(__FILE__));
 include_once $filepath."/../lib/Session.php";
 include_once $filepath."/../lib/Database.php"; ?>
 <?php include_once $filepath."/../helpers/Format.php";
 define ('SITE_ROOT', realpath(dirname(__FILE__)));

 ?>
 <?php 

  class Login{
  public $db;
  public $fm;
  public function __construct(){
    $this->db = new Database();
    $this->fm = new Format();
  }
  

   public function Adminlogin($email,$password){
          $email=$this->fm->validation($_POST['email']);
          $password=$this->fm->validation(md5($_POST['password'])) ;
          $email=mysqli_real_escape_string($this->db->link,$email);
          $password=mysqli_real_escape_string($this->db->link,$password);
          if ($email == "" || $password == "") {
          $loginmsg= " UserName AND Password Must Not Be empty!";
           return $loginmsg;
          } else { 
          $query="SELECT * FROM registration where email='$email' AND password='$password'";
          $result=$this->db->select($query);
          if ($result != false) {
            $value=mysqli_fetch_array($result);
            $row=mysqli_num_rows($result);
          if ($row>0) {
           Session::set("login",true);
           Session::set("email",$value['email']);
           Session::set("AdminId",$value['id']);
           Session::set("user_name",$value['full_name_english']);
           Session::set("image",$value['user_profile_picture']);
           Session::set("permision",$value['parmition_status']);
           header("Location:admin/index.php");
            } else {
              echo " <span style='color:red;font-size:18px;'>No Result found !! .</span>";
            }
            } else {
              echo " <span style='color:red;font-size:18px;'>email or password not match!! .</span>";
            }
        }
   }

}

