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
  <link href='style.css' rel="stylesheet" type="text/css">

</head>

<body>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="post">

    <div class="title">
      <h1>I can’t Chill While I’m Working</h1>
    </div>

    <div class="description">
      <p>
        Maybe sometimes I can, but what about most of the time. And then what.
Is it naive to see work as ‘fun’?
      </p>

      <a href="http://networkcultures.org/entreprecariat/work-ethic-dystopia/">Silvio Lorusso, A Work Ethic Dystopia</a>
    </div>

    <div class="inspiration">
      <h1 class="icon plus">+</h1>

      <div class="swiper-container">

          <!-- Swiper API: http://idangero.us/swiper/api/#.WMLMQxLhBE4 -->

          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="img/fridge.jpg" /></div>
              <div class="swiper-slide"><img src="img/netflix-culture.png" /></div>

          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

          <!-- If we need scrollbar -->
          <!-- <div class="swiper-scrollbar"></div> -->
      </div>

    </div>

    <div class="result">
      <h1 class="icon equals">=</h1>
      <img src="img/fridge.jpg"/>
    </div>

  </div>



<?php endwhile; ?>

<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Not Found</h1>
	</div>

<?php endif; ?>

  <script src='app.min.js'></script>

</body>

</html>
