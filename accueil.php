<?php
/*
Template Name: Accueil
*/

get_header(); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>


      <header class="mainHeader">
          <div id="videoHeader">
              <video autoplay muted loop>
              <!-- Source vidéo par défaut -->
              <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/mov/mavideo.mp4" media="(orientation: landscape)">
              <source type="video/webm" src="<?php echo get_template_directory_uri(); ?>/mov/mavideo.webm" media="(orientation: landscape)">
              <!-- Utilisez des sources vidéo carrées pour économiser la bande passante -->
              <source type="video/mp4" src="<?php echo get_template_directory_uri(); ?>/mavideo_carree.mp4" media="(orientation: portrait)">
              <source type="video/webm" src="<?php echo get_template_directory_uri(); ?>/mavideo_carree.webm" media="(orientation: portrait)">
              </video>
              <div class="logo" style="background-image:url('<?php the_field('logo_principal'); ?>')"></div>
          </div>
      </header>

      <section class="halfHeight">
          <div class="content">
            <?php the_field('zone_1');?>
            <div class="gameZone">
                <?php if( get_field('game_zone') == 'oui' ) :?>
                  <h2>Essayes toi à la 3D</h2>
                  <div id="game">
                      <form class="dna">
                          <div class="form-group">
                              <textarea class="form-control" cols="14" rows="16"></textarea>
                          </div>
                          <div class="form-group btn-group-vertical">
                            <ul class="colorPalette">
                              <li id="color1">r</li>
                              <li id="color2">o</li>
                              <li id="color3">y</li>
                              <li id="color4">g</li>
                              <li id="color5">b</li>
                              <li id="color6">p</li>
                              <li id="color7">w</li>
                              <li id="color8">n</li>
                            </ul>
                            <p>Quelques exemples&nbsp;:</p>
                            <a class="btn btn-default btn-block dna__goomba" data-character="goomba">Goomba</a>
                            <a class="btn btn-default btn-block dna__mario" data-character="mario">Mario</a>
                            <a class="btn btn-default btn-block dna__mushroom" data-character="mushroom">Mushroom</a>
                            <a class="btn btn-default btn-block dna__coin" data-character="coin">Coin</a>

                            <a class="btn btn-success btn-block dna__create">Matérialisation</a>
                          </div>
                      </form>

                      <div id="zone3D">
                      </div>
                  </div>
                <?php endif; ?>
            </div>
          </div>
      </section>


      <section id="profil" class="halfHeight">
        <div class="content">
            <?php the_field('zone_2');?>
        </div>
      </section>


      <section id="works" class="halfHeight">
        <div class="content">
            <?php the_field('zone_3');?>
        </div>

        <?php if( get_field('last_works') == 'oui' ) :?>
          <ul class="lastpost content">
          <?php
              $recentPosts = new WP_Query();
              $recentPosts->query('showposts=3');
          ?>

          <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <li>
                <h3><a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a></h3>
                <span>Publié le : <?php the_time('l j F Y'); ?></span>
								<?php if ( has_post_thumbnail() ) {
										the_post_thumbnail('medium', array(
												'alt' => $title,
												'title' => $title)
											);
										}
								?>
                <p><?php the_excerpt(); ?></p>
              </li>
          <?php endwhile; wp_reset_query(); ?>

          </ul>
        <?php endif; ?>
      </section>


      <section id="contact" class="halfHeight">
        <div class="content">
            <?php the_field('zone_4');?>
        </div>
      </section>

    <?php } // end while
    } // end if
    ?>

<?php get_footer(); ?>
