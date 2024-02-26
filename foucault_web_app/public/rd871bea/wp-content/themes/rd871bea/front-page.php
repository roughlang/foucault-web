<?php
  include("inc/common.php");
  // var_dump(env('APP_ENV'));
  include("inc/head.php");
?>

<?php include('inc/nav_header.php'); ?>

<main class="main">
  <div class="container breadcrumbs">
    <div class="row">
      <ul>
        <li class="ancor"><a href="/">Home</a></li>
        <li class="breadcrumbs-end"><a href="<?php echo '/'.$directory_name; ?>"><?php echo WP_BLOG_TITLE; ?></a></li>
      </ul>
    </div>
  </div>

  <div class="container article mt30">
    <div class="row">
      <div class="column-main col-md-8 col-lg-9 col-xl-7">
        <h2 class="title"><?php echo WP_BLOG_TITLE; ?></h2>
      
      <div class="content mt50">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
          <div class="item mb30 clearfix" id="item-<?php the_ID(); ?>">
            <h3 class="mb20">
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>

            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('thumbnail', array('class' => 'eyecatch float-start')); ?>
              </a>
            <?php else : ?>
              <a href="<?php the_permalink(); ?>">
              <?php
                $files = get_children("post_parent=$id&amp;post_type=attachment&amp;post_mime_type=image");
                if (empty($files)) {
                  // nothing
                } else {
                  $keys = array_keys($files);
                  $lastkeys = array_pop($keys);
                  $num=$lastkeys;
                  $thumb=wp_get_attachment_image_src($num,'medium');
                  echo '<img class="float-start" src="' . $thumb[0] . '" alt="' . $post->post_title . 'の画像">';
                }
              ?>
              </a>
            <?php endif ; ?>

            <div class="description">
            <?php
              if (!empty(get_the_excerpt())) {
                $description = get_the_excerpt();
              } else {
                $description = get_the_content();
              }
              
              $description = preg_replace("/　/","",$description);
              $description = trim($description);
              $description = strip_tags($description);
              $description = mb_substr($description,0,400)."...";

              echo $description;
            ?>
            <div class="date d-flex justify-content-end mr10"><?php echo get_the_date('Y-m-d (D)'); ?></div>
            <div class="meta">
              <div class="tags">
                <?php the_tags("",""); ?>
              </div>
              <?php the_category("",""); ?>

            </div>


            <?php // echo get_the_ID(); ?>
            <?php // echo wp_get_attachment_url( get_the_ID() ); ?>
            <?php echo wp_get_attachment_image_url( get_the_ID(), 'thumbnail'); ?>

            <?php
              // $files = get_children("post_parent=$id&amp;post_type=attachment&amp;post_mime_type=image");
              // if (empty($files)) {
              //   // nothing
              // } else {
	            //   $keys = array_keys($files);
              //   $lastkeys = array_pop($keys);
              //   $num=$lastkeys;
              //   $thumb=wp_get_attachment_image_src($num,'medium');
		          //   echo '<img src="' . $thumb[0] . '" width="' . $thumb[1] . '" height="' . $thumb[2] . '" alt="' . $post->post_title . 'の画像">';
              // }
            ?>
          </div>
        </div>
        <?php endwhile; ?>  
        <?php else: ?>
        <?php endif; ?>
      </div>
      <div class="page-nav mt50 mb50">
        <?php
          $args = array(
              'mid_size' => 1,
              'prev_text' => '前',
              'next_text' => '次',
              'screen_reader_text' => ' ',
          );
          the_posts_pagination($args);
        ?>
      </div>
    </div><!-- col -->

    <div class="column-sub col-md-4 col-lg-3 col-xl-3">
      <div class="widget mb30">
        <?php include('inc/search_widget.php'); ?>
        <?php if ( is_active_sidebar('main-sidebar') ) : ?>
          <ul class="menu">
            <?php dynamic_sidebar('main-sidebar'); ?>
          </ul>
        <?php endif; ?>
        <div class="posts-count">
          <span class="posts-count-attr">published: </span>
        <?php echo count_published_posts(); ?>
        </div>
      </div>
    </div><!-- sub -->

    <div class="column-sub2 d-none d-xl-block col-xl-2">
      <?php include('inc/right_banner.php'); ?>
    </div>
  </div>
</div>

<?php include('inc/footer.php'); ?>


