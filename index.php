<?php
include("admin/Class/function.php");

$obj=new Blog();
$getData= $obj->display_category();



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


        <?php include_once("incl/blog-post.php"); ?>

        <?php include_once("incl/sidebar.php"); ?>

      </div>
    </div>
  </section>

  <?php include_once("incl/footer.php"); ?>


  <?php include_once("incl/script.php"); ?>