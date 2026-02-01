<footer class="main-footer">
  <div class="main-container">

    <div class="main-footer__upper">

      <!-- LEFT: SOCIALS -->
      <div class="main-footer__row main-footer__row-1">
        <h2 class="heading heading-sm main-footer__heading-sm">
          <span>Social</span>
        </h2>

        <div class="main-footer__social-cont">
          <?php if (is_active_sidebar('footer-socials')) : ?>
            <?php dynamic_sidebar('footer-socials'); ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- RIGHT: INFO -->
      <div class="main-footer__row main-footer__row-2">
        <h4 class="heading heading-sm text-lt">
          <?php bloginfo('name'); ?>
        </h4>

        <p class="main-footer__short-desc">
          <?php bloginfo('description'); ?>
        </p>
      </div>

    </div>

    <div class="main-footer__lower">
      &copy; <?php echo date('Y'); ?>. Made by
        Bora Efe    
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
