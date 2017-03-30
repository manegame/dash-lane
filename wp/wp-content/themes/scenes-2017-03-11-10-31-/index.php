<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta name="theme-color" content="#FF00FF">

  <!-- generate favicons: http://www.favicomatic.com/ -->
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="favicon/apple-touch-icon-152x152.png" />
  <link rel="icon" type="image/png" href="favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16" />
  <link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
  <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
  <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

  <title>Scenes</title>

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@spatiebar" />
  <meta name="twitter:creator" content="@spatiebar" />

  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:description" content="" />

  <!-- <link href='fonts/.css' rel="stylesheet" type="text/css"> -->
  <link href='wp-content/themes/scenes-2017-03-11-10-31-/style.css' rel="stylesheet" type="text/css">

</head>

<body>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="post">

    <?php $post_id = get_the_ID(); ?>

    <div>
      <p>
        <!-- <?php wp_list_post_revisions(); ?> -->
        <?php $revisions = wp_get_post_revisions($post_id); ?>
        <?php
        // wp_is_post_revision($post_id);
        // the_modified_date();
        // echo get_post_modified_time('l j F Y h:i:s A');
        // print_r($revisions);
        foreach ($revisions as $revision) {
          echo wp_post_revision_title_expanded( $revision , false);
        }
        ?>
      </p>
    </div>

    <div class="title">
      <h1><?php the_title() ?></h1>
    </div>

    <div class="description">
      <p>
        <?php the_content() ?>
      </p>
    </div>

    <div class="inspiration">
      <h1 class="icon plus">+</h1>

      <?php
      // check if the repeater field has rows of data
      if( have_rows('inspiration') ):
      ?>

      <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
          <!-- Slides -->
          <?php
       	  // loop through the rows of data
            while ( have_rows('inspiration') ) : the_row();
            $image = get_sub_field('image');
          ?>
            <div class='swiper-slide'>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
          <?php
          endwhile;
          ?>
        </div>

        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>


    <?php
    else :
    // no rows found
    endif;
    ?>

    </div>

    <div class="result">
      <h1 class="icon equals">=</h1>

      <?php
      // check if the repeater field has rows of data
      if( have_rows('result') ):
      ?>

      <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
          <!-- Slides -->
          <?php
          // loop through the rows of data
            while ( have_rows('result') ) : the_row();
            $image = get_sub_field('image');
          ?>
            <div class='swiper-slide'>
              <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
          <?php
          endwhile;
          ?>
        </div>

        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>


    <?php
    else :
    // no rows found
    endif;
    ?>

    </div>

  </div>



<?php endwhile; ?>

<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Not Found</h1>
	</div>

<?php endif; ?>

  <script src='wp-content/themes/scenes-2017-03-11-10-31-/app.min.js'></script>

</body>

</html>
