<?php
include("admin/Class/function.php");

$obj=new Blog();
$getData= $obj->display_category();

if(isset($_GET['view'])){
    if($_GET['view']= 'postview'){
        $id=$_GET['id'];

      $singP=  $obj->get_post_info($id);
    }
}

?>




<?php
include_once("incl/head.php");

?>

<body>

  <?php include_once("incl/pre.php"); ?>
  <?php include_once("incl/header.php"); ?>

  <!-- Page Content -->
  <?php include_once("incl/banner.php"); ?>

  <?php include_once("incl/cta.php"); ?>


  <section class="blog-posts">
    <div class="container">
      <div class="row">
       <div class="col-lg-8">

       
       <img src="upload/<?php echo $singP['post_image'];?>" alt="" class="img-fluid">
       <h2><?php echo $singP['post_title'];?></h2>
       <p><?php echo $singP['post_content'];?> </p>

      
       </div>
      

        <?php include_once("incl/sidebar.php"); ?>

      </div>
    </div>
  </section>

  <?php include_once("incl/footer.php"); ?>


  <?php include_once("incl/script.php"); ?>