

  <?php 

  if(get_field('banner_background_img')): ?>
    <section class="banner " style="background:url('<?php the_field('banner_background_img') ?>')
    ;background-attachment: fixed; background-repeat: no-repeat; background-size:cover; background-position:center">

    <?php endif; ?>
        <?php get_header()?>
      <div class="container">
        <div class="banner__content">
          <h1><?php the_field('banner_title') ?></h1>
          <h2 class="mb--8 text--primary"><?php the_field('banner_intro') ?></h2>
          <p class="mb--8">
            <?php the_field('banner_text') ?>
          </p>
                <a href="<?php the_field('banner_btn_link') ?>" class="btn--transparent"><?php the_field('banner_btn_text') ?></a>
        </div>
        <div class="banner__services py--3">
          <div class="banner__wrapper">

          <?php 

            $args = array(
              'post_type' => 'service',
              'posts_per_page' => -1,
            );
            $newQuery = new WP_Query($args);
            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>

            <?php if(get_field('isactive')): ?>
            <div class="banner__services__items d--flex active">

            <?php else : ?>

            <div class="banner__services__items d--flex">
              
              <?php endif ?>

            <?php 
            
            if(has_post_thumbnail()) :
              the_post_thumbnail();
            endif;

            ?>

              <div class="services__desc">
                <h3 class="text--primary"><?php  the_title() ?></h3>
                <p>
                  <?php the_excerpt() ?>
                </p>
                <a href="<?php the_field('service_btn_link') ?>" class="btn--transparent"><?php the_field('service_btn_text') ?></a>
              </div>
            </div>

            <?php 
            endwhile;
          else:
              echo "No Available Content Yet";
          endif;
          wp_reset_postdata();
          ?>

          </div>
        </div>
      </div>
      <div class="sectionGradient--bottom"></div>
    </section>

 <section class="tours py--10 text--center">
      <div class="container">
        <h2>POPULAR TOURS</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate?
        </p>
        <div class="tours__wrapper py--5">

        <?php 

            $args = array(
                'post_type' => 'tours',
                'post_per_page' => -1,
            );
            $newQuery = new WP_Query($args);

            ?>

            <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post(); ?>
            
          <div class="tours__card">

           <?php 
                if(has_post_thumbnail()) :
                  the_post_thumbnail();
                endif;
              
              ?>
            <div class="tours__card__desc">
              <h4><?php the_title() ?></h4>
              <p><?php the_excerpt() ?></p>
            </div>
          </div>

           <?php 
              endwhile;
            else :
              echo "No Available Content Yet";
            endif;
            wp_reset_postdata();
            
            ?>

        </div>
      </div>
    </section>

        <?php 

  if(get_field('discover_background_image')): ?>

    <section class="watchVideos " style="background:url('<?php the_field('discover_background_image') ?>')
    ;background-attachment: fixed; background-repeat: no-repeat; background-size:cover; background-position:center">

    <?php endif; ?>
          <div class="sectionGradient--top"></div>
      <div class="container">
        <div class="watchVideos__wrapper">
          <div class="watchVideos__content">
            <h2><?php the_field('discover_title') ?></h2>
            <ul class="d--flex align--center">
              <li><i class="fa-regular fa-circle-play"></i></li>
              <a href=""><h5><?php the_field('discover_btn_text') ?></h5></a>
            </ul>
            <p>
              <?php the_field('discover_text') ?>
            </p>
            <a href="<?php the_field('discover_youtube_link') ?>" class="text--primary"><?php the_field('discover_youtube_text') ?></a>
          </div>

          <div class="videos d--flex">
            <iframe
             width="300" height="150" src="<?php the_field('discover_youtube_1') ?>" 
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
          </iframe>
          
            <iframe
             width="300" height="150" src="<?php the_field('discover_youtube_2') ?>"
             title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
             referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
      <div class="sectionGradient--bottom"></div>
    </section>

   <?php get_footer() ?>
