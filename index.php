<?php get_header(); ?>

<main class="posts-overview">
  <h1>Blog</h1>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post-card">
        <h2><?php the_title(); ?></h2>

        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>

        <?php the_excerpt(); ?>

        <a href="<?php the_permalink(); ?>">Read more</a>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
