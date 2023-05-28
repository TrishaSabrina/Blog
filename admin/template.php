
<?php

include("Class/function.php");

$obj=new Blog();
session_start();

$id=$_SESSION['adminID'];
if($id==null){
header("location:index.php");
}


if(isset($_GET['adminlogout'])){
    if($_GET['adminlogout']=='logout'){
        $obj->admin_logout();
        
    }
}

?>


<?php 
include_once("inc/head.php");

?>
    <body class="sb-nav-fixed">
      <?php include_once('inc/topnavbar.php') ; ?>
      <div id="layoutSidenav">
       
     <?php  include_once("inc/sidenav.php") ; ?>
            <div id="layoutSidenav_content">
                <main>
                   <div class="container-fluid">
               

                   <?php  
                   
                   if(isset($view)){

                    if($view == "dashboard"){
                        include("view/dashview.php");
                    }
                    elseif($view=="category"){
                        include("view/addcatview.php");
                    }
                    elseif($view=="add_post"){
                        include("view/addpostview.php");
                    }
                    elseif($view=="mcat"){
                        include("view/mancatview.php");
                    }

                    elseif($view=="mpost"){
                        include("view/manpostview.php");
                    }

                    elseif($view=="catedit"){
                        include("view/editview.php");
                    }

                    elseif($view=="edit_image"){
                        include("view/editimgview.php");
                    }
                   
                    elseif($view=="edit_post"){
                        include("view/editpostview.php");
                    }

                   }
                   
                   ?>

                   </div>
                </main>
         <?php  include_once("inc/mainfooter.php") ?>
            </div>
        </div>
        <?php  include_once("inc/footer.php"); ?>
    </body>
</html>
