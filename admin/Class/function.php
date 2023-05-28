<?php

class Blog{

    private $conn;

    public function __construct(){

        //database host, database user, database pass, database name.

        $dbhost= 'localhost';
        $dbuser='root';
        $dbpass='';
        $dbname='blogpr';

        $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if(!$this->conn){
            die( "Databse Connection Error!!");
        }
    }

    public function admin_login($data){

        $email=$data['admin_email'];
        $password=md5($data['admin_password']);
        $query= "SELECT * FROM admin_info WHERE admin_email='$email' &&  password= '$password'";

        if(mysqli_query($this->conn, $query)){
            $info= mysqli_query($this->conn, $query);

           if($info){
            header("location:dashboard.php");
            $admin_data=mysqli_fetch_assoc($info);

             session_start();
            $_SESSION['adminID']=$admin_data['id'];
            $_SESSION['name']=$admin_data['admin_name'];

           }



        }

    }


    public function admin_logout(){

        unset($_SESSION['adminID']);

        unset($_SESSION['name']);

        header("location:index.php");
    }


    public function add_category($data){

  $cat_name=$data['cat_name'];
  $cat_des=$data['cat_des'];

  
  $query ="INSERT INTO category(cat_name, cat_des) VALUES('$cat_name', '$cat_des')";

  if(mysqli_query($this->conn, $query)){

    return "Category Added Successfully!";
  }

    }

 public function display_category(){

    $query="SELECT * FROM  category";
    if(mysqli_query($this->conn, $query)){
        $cat=mysqli_query($this->conn, $query);
        return $cat;
    }
    
 }

 public function delete_category($id){

 $query="DELETE FROM category WHERE cat_id=$id";

 if(mysqli_query($this->conn, $query)){

    return "Deleted Successfully!";
 }
 }



 public function display_data_by_id($id){

    $query="SELECT * FROM category WHERE cat_id=$id";

    if(mysqli_query($this->conn, $query)){

      $return_data= mysqli_query($this->conn, $query);
      $aret=mysqli_fetch_assoc($return_data);
      return $aret;
      
    }
}

public function update_data($data){
    $id=$data['id'];
    $name2=$data['cat_namey'];
    $name3=$data['cat_desy'];
   

    $query="UPDATE category SET cat_name='$name2', cat_des='$name3' WHERE cat_id=$id";

    if(mysqli_query($this->conn, $query)){
      

       return "Information Updated Successfully!!";
    }

   }


   public function add_post($data){
   
    $post =$data['post_title'];
    $post_content= $data['post_content'];
    $image= $_FILES['post_image']['name'];
    $temp_image=$_FILES['post_image']['tmp_name'];

    $cat=$data['post_category'];

    $summery= $data['post_summery'];

    $post_tag=$data['post_tag'];

    $status =$data['post_status'];


    $query="INSERT INTO posts(post_title,post_content,post_image, 
    
    post_category, post_author, post_date,
    
     post_comment_count,post_summery,post_tag,post_status) VALUES('$post', '$post_content', '$image',
     
     $cat, 'Admin', now(), 3, '$summery', '$post_tag', $status)";

     if(mysqli_query($this->conn,$query)){
      move_uploaded_file($temp_image, '../upload/' . $image);

      return "Post Added Successfully!";
     }
   }


   public function display_post(){

    $query= "SELECT * FROM post_with_cat";
    if(mysqli_query($this->conn, $query)){
      $postinfo=mysqli_query($this->conn, $query);

      return $postinfo;
    }
   }



   public function display_post_public(){

    $query= "SELECT * FROM post_with_cat WHERE post_status=1";
    if(mysqli_query($this->conn, $query)){
      $postinfo=mysqli_query($this->conn, $query);

      return $postinfo;
    }
   }

   public function edit_image($data){

    $id=$data['edit_id'];

    $image=$_FILES['change_image']['name'];
    $tmp_img=$_FILES['change_image']['tmp_name'];

    $query="UPDATE posts SET post_image='$image' WHERE post_id =$id";

    if(mysqli_query($this->conn, $query)){

      move_uploaded_file($tmp_img, '../upload/' . $image);

     return "Thumbnail Updated Successfully!!";

    }



   }

   public function get_post_info($id){

    $query="SELECT * FROM post_with_cat WHERE post_id=$id";
    if(mysqli_query($this->conn, $query)){

      $info=mysqli_query($this->conn, $query);
      $post= mysqli_fetch_assoc($info);
      return $post;
    }

   }

   public function update_post($data){

    $id= $data['editp_id'];
    $title=$data['edit_post'];
    $content= $data['edit_cont'];

    $query="UPDATE posts SET post_title='$title', post_content= '$content' WHERE post_id=$id";
    

    if(mysqli_query($this->conn,$query)){
      return "Post updated Successfully!";
    }
   }
}

?>