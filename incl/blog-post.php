<?php 
$po= $obj->display_post_public();

?>


<div class="col-lg-8">
  <div class="all-blog-posts">
    <div class="row">

    <?php while($pos=mysqli_fetch_assoc($po)) { ?>
      <div class="col-lg-12">
        <div class="blog-post">
          <div class="blog-thumb">
            <img  src="upload/<?php echo $pos['post_image']; ?>" alt="">
          </div>
          <div class="down-content">
            <span><?php echo $pos['cat_name']; ?></span>
            <a href="single_post.php?view=postview&&id=<?php echo $pos['post_id'];?>">
              <h4><?php echo $pos['post_title']; ?></h4>
            </a>
            <ul class="post-info">
              <li><a href="#"><?php echo $pos['post_author']; ?></a></li>
              <li><a href="#"><?php echo $pos['post_date']; ?></a></li>
              <li><a href="#"><?php echo $pos['post_comment_count']; ?></a></li>
            </ul>
            <p><?php echo $pos['post_summery']; ?></p>
            <div class="post-options">
              <div class="row">
                <div class="col-6">
                <?php echo $pos['post_tag']; ?>
                </div>
                <div class="col-6">
                  <ul class="post-share">
                    <li><i class="fa fa-share-alt"></i></li>
                    <li><a href="#">Facebook</a>,</li>
                    <li><a href="#"> Twitter</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php } ?>
     
      
    </div>
  </div>
</div>