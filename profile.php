<?php
/*
Template Name: Profil
*/

get_header();
get_header('min'); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>

<section id="aboutMe" class="sectionProfile">
  <div class="content">
      <?php the_field('about_me');?>
  </div>
</section>

<?php if( get_field('skills_content') == 'oui' ) :?>
<section id="skills" class="sectionProfile">
  <div class="content">
      <?php the_field('skills');?>

      <div class="flex">
        <ul class="skills professional">
          <h4>Professionnelles</h4>
      <?php
        $args = (array(
          'post_type'     => 'skills',
          'order' => 'ASC'
        ));

        $skills_post = new WP_Query( $args );
        while ( $skills_post->have_posts() ) : $skills_post->the_post();?>

          <?php if( get_field('skill_categorie') == 'professional' ) :?>

            <li class="skillsItem">
                <span class="skillsName"><?php the_title(); ?></span>
                <span class="skillsDegree"><?php the_field('skill_degree');?>%</span>
                <div class="skillsBar"><span style="width:<?php the_field('skill_degree');?>%;"></span></div>
                <p><?php the_field('skill_description');?></p>
            </li>

          <?php endif; ?>

      <?php endwhile; wp_reset_query(); ?>
      </ul>

      <ul class="skills personal">
        <h4>Personnelles</h4>
      <?php
        $args = (array(
          'post_type'     => 'skills',
          'order' => 'ASC'
        ));

        $skills_post = new WP_Query( $args );
        while ( $skills_post->have_posts() ) : $skills_post->the_post();?>

          <?php if( get_field('skill_categorie') == 'personal' ) :?>

            <li class="skillsItem">
                <span class="skillsName"><?php the_title(); ?></span>
                <span class="skillsDegree"><?php the_field('skill_degree');?>%</span>
                <div class="skillsBar"><span style="width:<?php the_field('skill_degree');?>%;"></span></div>
                <p><?php the_field('skill_description');?></p>
            </li>

          <?php endif; ?>

      <?php endwhile; wp_reset_query(); ?>
      </ul>

      <ul class="skills language">
        <h4>Langues</h4>
      <?php
        $args = (array(
          'post_type'     => 'skills',
          'order' => 'ASC'
        ));

        $skills_post = new WP_Query( $args );
        while ( $skills_post->have_posts() ) : $skills_post->the_post();?>

          <?php if( get_field('skill_categorie') == 'language' ) :?>

            <li class="skillsItem">
                <span class="skillsName"><?php the_title(); ?></span>
                <span class="skillsDegree"><?php the_field('skill_degree');?>%</span>
                <div class="skillsBar"><span style="width:<?php the_field('skill_degree');?>%;"></span></div>
                <p><?php the_field('skill_description');?></p>
            </li>

          <?php endif; ?>

      <?php endwhile; wp_reset_query(); ?>
      </ul>

      </div>


      </div>
</section>
<?php endif; ?>


<?php if( get_field('timeline') == 'oui' ) :?>
<section class="sectionProfile">
  <div class="content">
      <?php the_field('parcours');?>
      <ul class="timeline">
          <?php
            $args = (array(
              'post_type'     => 'event',
              'order' => 'DSC'
            ));

            $timeline_post = new WP_Query( $args );
            while ( $timeline_post->have_posts() ) : $timeline_post->the_post();?>
            <li class="timelinePost">
              <div class="spot" style="background-color:<?php the_field('event_color');?>;">
                  <i class="fas fa-<?php the_field('event_icon');?>"></i>
              </div>

              <div class="timelineContent">
                  <h3><?php the_title(); ?></h3>
                  <span>
                    <?php the_field('event_date');?>
                    <?php if( get_field('event_enddate') ):?>
                      - <?php the_field('event_enddate'); ?>
                    <?php endif; ?>
                  </span>
                  <img src="<?php the_field('event_image');?>" alt="timeline" style="object-fit: <?php the_field('event_image_crop');?>;">
                  <p><?php the_field('event_content');?></p>
              </div>
            </li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>
      </div>
</section>
<?php endif; ?>

<?php if( get_field('hobbies_content') == 'oui' ) :?>
<section id="hobbies" class="sectionProfile">
  <div class="content">
      <?php the_field('hobbies');?>
      <ul class="flex">
          <?php
            $args = (array(
              'post_type'     => 'hobbies',
              'order' => 'DSC'
            ));

            $hobbie_post = new WP_Query( $args );
            while ( $hobbie_post->have_posts() ) : $hobbie_post->the_post();?>
            <li style="background-image:url('<?php the_field('hobbie_image');?>');">
              <h4><?php the_title(); ?></h4>
              <p><?php the_field('hobbie_description');?></p>
            </li>
            <?php endwhile; wp_reset_query(); ?>
        </ul>
      </div>
</section>
<?php endif; ?>


<?php } // end while
} // end if
?>

<?php get_footer(); ?>
