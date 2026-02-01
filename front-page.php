<?php get_header(); ?>

<main class="main">

  <!-- HERO SECTION -->
  <section class="home-hero">
    <div class="home-hero__content">
      <h1 class="heading-primary">
        HEY, MY NAME IS <span>Bora Efe</span>
      </h1>

      <div class="home-hero__info">
        <p class="text-primary">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. 
          Hic facilis tempora explicabo quae quod deserunt eius sapiente 
          solutions for complex problems
        </p>
      </div>

      <div class="home-hero__cta">
        <a href="#projects" class="btn btn--bg">
          Blogs
        </a>
      </div>
    </div>

    <!-- SOCIALS (Widget Area) -->
    <?php if (is_active_sidebar('hero-socials')) : ?>
      <div class="home-hero__socials">
        <?php dynamic_sidebar('hero-socials'); ?>
      </div>
    <?php endif; ?>


  </section>
  <!-- ❗ HERO SECTION HIER SLUITEN -->

  <!-- POSTS OVERVIEW -->
  <section class="projects" id="projects">
    <div class="main-container">

      <h2 class="heading-secondary">
        Our Latest Blogs
      </h2>

      <?php
      $posts_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 6
      ]);
      ?>

      <?php if ($posts_query->have_posts()) : ?>
        <div class="projects__content">
          <?php while ($posts_query->have_posts()) : $posts_query->the_post(); ?>
            
            <div class="projects__row">
              <div class="projects__row-content">
                <h3 class="projects__row-content-title">
                  <?php the_title(); ?>
                </h3>

                <p class="projects__row-content-desc">
                  <?php the_excerpt(); ?>
                </p>

                <a href="<?php the_permalink(); ?>" class="btn btn--med btn--theme">
                  Read More
                </a>
              </div>
            </div>

          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p>No posts found.</p>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>
