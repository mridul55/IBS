   <?php 
   $filepath = realpath(dirname(__FILE__));
   include_once $filepath."/../lib/Database.php"?>
   <?php include_once $filepath."/../helpers/Format.php";
   define ('SITE_ROOT', realpath(dirname(__FILE__)));
   ?>
   <?php 

   class Register
   {
    public $db;
    public $fm;
    public function __construct(){
      $this->db = new Database();
      $this->fm = new Format();
    }  

     public function AddMember($data,$file){
         $full_name_bangla = $this->fm->validation($data['full_name_bangla']);
          // die($full_name_bangla);
         $full_name_english       = $this->fm->validation($data['full_name_english']);
         $present_address     = $this->fm->validation($data['present_address']);
         $permanent_address        = $this->fm->validation($data['permanent_address']);
         $cell_number       = $this->fm->validation($data['cell_number']);
         $email             = $this->fm->validation($data['email']);
         $password          = $this->fm->validation($data['password']);
         $occupation        = $this->fm->validation($data['occupation']);
         $designation       = $this->fm->validation($data['designation']);
         $office_name       = $this->fm->validation($data['office_name']);
         $name_of_degree     = $this->fm->validation($data['name_of_degree']);
         $topic_of_research   = $this->fm->validation($data['topic_of_research']);
         $session        = $this->fm->validation($data['session']);
         $awarded        = $this->fm->validation($data['awarded']);
         $name_of_superviser        = $this->fm->validation($data['name_of_superviser']);
         $crest        = $this->fm->validation($data['crest']);
         $recived_awarde        = $this->fm->validation($data['recived_awarde']);
         $number_of_publication        = $this->fm->validation($data['number_of_publication']);
         $number_of_article        = $this->fm->validation($data['number_of_article']);
         $list_of_publication        = $this->fm->validation($data['list_of_publication']);
         $list_of_books        = $this->fm->validation($data['list_of_books']);
         $checkboxlist        = $this->fm->validation($data['checkboxlist']);
         $spouse_name        = $this->fm->validation($data['spouse_name']);
         $number_of_children        = $this->fm->validation($data['number_of_children']);
         
         $number_of_driver        = $this->fm->validation($data['number_of_driver']);
         $total_to_be_paid        = $this->fm->validation($data['total_to_be_paid']);
         $payment_type        = $this->fm->validation($data['payment_type']);
         
         $ref_id        = $this->fm->validation($data['ref_id']);

         $name = $data['mytext'];
         $child_name = implode(",", $name);
         $status =0;
         $parmition_status=0;

         $full_name_bangla   = mysqli_real_escape_string($this->db->link, $data['full_name_bangla']);
         $full_name_english         = mysqli_real_escape_string($this->db->link, $data['full_name_english']);
         $present_address       = mysqli_real_escape_string($this->db->link, $data['present_address']);
         $permanent_address          = mysqli_real_escape_string($this->db->link, $data['permanent_address']);
         $cell_number         = mysqli_real_escape_string($this->db->link, $data['cell_number']);
         $email          = mysqli_real_escape_string($this->db->link, $data['email']);
         $password     =mysqli_real_escape_string($this->db->link, md5($password));
         $occupation          = mysqli_real_escape_string($this->db->link, $data['occupation']);
         $designation          = mysqli_real_escape_string($this->db->link, $data['designation']);
         $office_name          = mysqli_real_escape_string($this->db->link, $data['office_name']);
         $name_of_degree          = mysqli_real_escape_string($this->db->link, $data['name_of_degree']);
         $topic_of_research          = mysqli_real_escape_string($this->db->link, $data['topic_of_research']);
         $session          = mysqli_real_escape_string($this->db->link, $data['session']);
         $awarded          = mysqli_real_escape_string($this->db->link, $data['awarded']);
         $name_of_superviser          = mysqli_real_escape_string($this->db->link, $data['name_of_superviser']);
         $crest          = mysqli_real_escape_string($this->db->link, $data['crest']);
         $recived_awarde          = mysqli_real_escape_string($this->db->link, $data['recived_awarde']);
         $number_of_publication          = mysqli_real_escape_string($this->db->link, $data['number_of_publication']);
         $number_of_article          = mysqli_real_escape_string($this->db->link, $data['number_of_article']);
         $list_of_publication          = mysqli_real_escape_string($this->db->link, $data['list_of_publication']);
         $list_of_books          = mysqli_real_escape_string($this->db->link, $data['list_of_books']);
         $checkboxlist          = mysqli_real_escape_string($this->db->link, $data['checkboxlist']);
         $spouse_name          = mysqli_real_escape_string($this->db->link, $data['spouse_name']);
         $number_of_children          = mysqli_real_escape_string($this->db->link, $data['number_of_children']);
         $child_name          = mysqli_real_escape_string($this->db->link, $child_name);
         $number_of_driver          = mysqli_real_escape_string($this->db->link, $data['number_of_driver']);
         $total_to_be_paid          = mysqli_real_escape_string($this->db->link, $data['total_to_be_paid']);
         $payment_type          = mysqli_real_escape_string($this->db->link, $data['payment_type']);
         $ref_id          = mysqli_real_escape_string($this->db->link, $data['ref_id']);

         $invalid_email = $this->checkemail($email);
           

         $permited =array('jpg','jpeg','png','gif');
         $file_name=$file['user_profile_picture']['name'];
         $file_size=$file['user_profile_picture']['size'];
         $file_temp=$file['user_profile_picture']['tmp_name'];


         $div=explode('.', $file_name);
         $file_ext=strtolower(end($div));
         $unique_image=substr(md5(time()),0,10).'.'.$file_ext;
         $uploaded_image="upload/".$unique_image;


           if ($full_name_bangla == "" || $full_name_english == "" || $present_address == "" || $permanent_address == ""
            || $cell_number == ""  || $email == "" || $password == "" || $occupation == ""|| $designation == "" || $office_name == "" || $name_of_degree == "" || $topic_of_research == "" || $session == "" || $awarded == "" || $name_of_superviser == "" || $crest == "" || $recived_awarde == "" || $number_of_publication == "" || $number_of_article == "" || $list_of_publication == "" || $list_of_books == "" || $checkboxlist == "" || $spouse_name == ""|| $number_of_children == "" || $child_name == "" || $number_of_driver == "" || $total_to_be_paid == "" || $payment_type == "" || $ref_id == ""   ) {
             die(json_encode(['email'=>'error','message'=>'Field Must Be Not Empty']));

       } else if($file_size>1048567){
        die(json_encode(['email'=>'error','message'=>'Image size should be less then 1MB!']));
      }else if($invalid_email){
        die(json_encode(['email'=>'error','message'=>'Email Already Exits.']));
      }elseif (in_array($file_ext,$permited) == false){
        $msg = "<span class='error'>YOu can Uploaded only:-".implode(',',$permited)."</span>"; 
        die(json_encode(['email'=>'error','message'=>$msg]));
      } else {
        move_uploaded_file($file_temp, SITE_ROOT."/../".$uploaded_image);
        $query="INSERT INTO registration (full_name_bangla,full_name_english,present_address,permanent_address,cell_number,email,password,occupation,designation,office_name,name_of_degree,topic_of_research,session,awarded,name_of_superviser,crest,recived_awarde,number_of_publication,number_of_article,list_of_publication,list_of_books,checkboxlist,spouse_name,number_of_children,mytext,number_of_driver,total_to_be_paid,payment_type,ref_id,user_profile_picture,status,parmition_status)
        VALUES
        ('$full_name_bangla','$full_name_english','$present_address','$permanent_address','$cell_number','$email','$password','$occupation','$designation','$office_name','$name_of_degree','$topic_of_research','$session','$awarded','$name_of_superviser','$crest','$recived_awarde','$number_of_publication','$number_of_article','$list_of_publication','$list_of_books','$checkboxlist','$spouse_name','$number_of_children','$child_name','$number_of_driver','$total_to_be_paid','$payment_type','$ref_id','$uploaded_image','$status','$parmition_status')";

        $inserted_rows=$this->db->insert($query);


         if ($inserted_rows) {
         die(json_encode(['email'=>'success','message'=>'Member Inserted Successfully']));
       } 
     }

   }

       public function editinfo($id)
       {
         $query = "Select * from registration where id='$id'";
         $data = $this->db->select($query);
         $result = $data->fetch_object();
         return $result;
       }


              public function UpdateMember($data,$file,$id){
                  $full_name_bangla = $this->fm->validation($data['full_name_bangla']);
                   // die($full_name_bangla);
                  $full_name_english       = $this->fm->validation($data['full_name_english']);
                  $present_address     = $this->fm->validation($data['present_address']);
                  $permanent_address        = $this->fm->validation($data['permanent_address']);
                  $cell_number       = $this->fm->validation($data['cell_number']);
                  $email             = $this->fm->validation($data['email']);
                  $occupation        = $this->fm->validation($data['occupation']);
                  $designation       = $this->fm->validation($data['designation']);
                  $office_name       = $this->fm->validation($data['office_name']);
                  $name_of_degree     = $this->fm->validation($data['name_of_degree']);
                  $topic_of_research   = $this->fm->validation($data['topic_of_research']);
                  $session        = $this->fm->validation($data['session']);
                  $name_of_superviser        = $this->fm->validation($data['name_of_superviser']);
                  $crest        = $this->fm->validation($data['crest']);
                  $recived_awarde        = $this->fm->validation($data['recived_awarde']);
                  $number_of_publication        = $this->fm->validation($data['number_of_publication']);
                  $number_of_article        = $this->fm->validation($data['number_of_article']);
                  $list_of_publication        = $this->fm->validation($data['list_of_publication']);
                  $list_of_books        = $this->fm->validation($data['list_of_books']);

                  $full_name_bangla   = mysqli_real_escape_string($this->db->link, $data['full_name_bangla']);
                  $full_name_english         = mysqli_real_escape_string($this->db->link, $data['full_name_english']);
                  $present_address       = mysqli_real_escape_string($this->db->link, $data['present_address']);
                  $permanent_address          = mysqli_real_escape_string($this->db->link, $data['permanent_address']);
                  $cell_number         = mysqli_real_escape_string($this->db->link, $data['cell_number']);
                  $email          = mysqli_real_escape_string($this->db->link, $data['email']);

                  $occupation          = mysqli_real_escape_string($this->db->link, $data['occupation']);
                  $designation          = mysqli_real_escape_string($this->db->link, $data['designation']);
                  $office_name          = mysqli_real_escape_string($this->db->link, $data['office_name']);
                  $name_of_degree          = mysqli_real_escape_string($this->db->link, $data['name_of_degree']);
                  $topic_of_research          = mysqli_real_escape_string($this->db->link, $data['topic_of_research']);
                  $session          = mysqli_real_escape_string($this->db->link, $data['session']);
                  $name_of_superviser          = mysqli_real_escape_string($this->db->link, $data['name_of_superviser']);
                  $crest          = mysqli_real_escape_string($this->db->link, $data['crest']);
                  $recived_awarde          = mysqli_real_escape_string($this->db->link, $data['recived_awarde']);
                  $number_of_publication          = mysqli_real_escape_string($this->db->link, $data['number_of_publication']);
                  $number_of_article          = mysqli_real_escape_string($this->db->link, $data['number_of_article']);
                  $list_of_publication          = mysqli_real_escape_string($this->db->link, $data['list_of_publication']);
                  $list_of_books          = mysqli_real_escape_string($this->db->link, $data['list_of_books']);
                  

                  $permited =array('jpg','jpeg','png','gif');
                  $file_name=$file['user_profile_picture']['name'];
                  $file_size=$file['user_profile_picture']['size'];
                  $file_temp=$file['user_profile_picture']['tmp_name'];


                  $div=explode('.', $file_name);
                  $file_ext=strtolower(end($div));
                  $unique_image=substr(md5(time()),0,10).'.'.$file_ext;
                  $uploaded_image="upload/".$unique_image;


                    if ($full_name_bangla == "" || $full_name_english == "" || $present_address == "" || $permanent_address == ""
                     || $cell_number == ""  || $email == "" ||  $occupation == ""|| $designation == "" || $office_name == "" || $name_of_degree == "" || $topic_of_research == "" || $session == ""  || $name_of_superviser == "" || $crest == "" || $recived_awarde == "" || $number_of_publication == "" || $number_of_article == "" || $list_of_publication == "" || $list_of_books == ""  ) {
                      die(json_encode(['email'=>'error','message'=>'Field Must Be Not Empty']));

                } else if($file_size>1048567){
                 die(json_encode(['email'=>'error','message'=>'Image size should be less then 1MB!']));
               } elseif (in_array($file_ext,$permited) == false){
                 $msg = "<span class='error'>YOu can Uploaded only:-".implode(',',$permited)."</span>"; 
                 die(json_encode(['email'=>'error','message'=>$msg]));
               } else {
                 move_uploaded_file($file_temp, SITE_ROOT."/../".$uploaded_image);
                 $query="UPDATE registration SET
                   full_name_bangla = '$full_name_bangla',
                   full_name_english = '$full_name_english',
                   present_address = '$present_address',
                   permanent_address = '$permanent_address',
                   cell_number = '$cell_number',
                   email = '$email',
                   occupation = '$occupation',
                   designation = '$designation',
                   office_name = '$office_name',
                   name_of_degree = '$name_of_degree',
                   topic_of_research = '$topic_of_research',
                   session  =  '$session',
                   name_of_superviser = '$name_of_superviser',
                   crest = '$crest',
                   recived_awarde = '$recived_awarde',
                   number_of_publication = '$number_of_publication',
                   number_of_article = '$number_of_article',
                   list_of_publication = '$list_of_publication',
                   list_of_books = '$list_of_books',
                   user_profile_picture = '$uploaded_image'
                   where  id   = '$id'";
             $update_rows=$this->db->update($query);
                  if ($update_rows) {
                  die(json_encode(['email'=>'success','message'=>'Member Updated Successfully']));
                } 
              }

            }

    public function checkemail($email){
      $query ="SELECT * from registration where email='$email'";
      $result = $this->db->select($query);
      return $result;
    }

      public function MemberList(){
      $query = " SELECT * from registration where status=1";
      $member = $this->db->select($query);
      return $member;
    }
  }

  ?>
