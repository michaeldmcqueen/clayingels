<div class="site-wrapper">
  <header class="site-header" role="banner">
      <div class="logo">
        <a href="/" title="Clay Ingels Home">
          <img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'clayingels'); ?>/assets/images/logos/logo.png" alt="Clay Ingels">
        </a>
      </div>
      <?php print render($page['header']); ?>
    <div class="hamburger-menu"><a href="#menu-original"><div class="bar"></div></a></div>
  </header>

  <?php if ($page['preface']): ?>
    <div class="preface cleafix">
        <?php print render($page['preface']); ?>
      </div>
  <?php endif; ?>

  <main id="content" class="<?php if(empty ($page['preface']) ): ?>no-preface<?php endif; ?> ">
      <?php if ($page['help']): ?>
          <?php print render($page['help']); ?>
      <?php endif; ?>

      
      <?php if ($page['content']): ?>
          <?php print render($page['content']); ?>
      <?php endif; ?>

      <?php if ($page['sidebar_second']): ?>
        <aside class="sidebar-second" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>

      <?php if ($page['postscript']): ?>
        <div class="postscript">
          <?php print render($page['postscript']); ?>
        </div>
      <?php endif; ?>
      
  </main>

  <footer>
    <?php if ($page['footer']): ?>
        <div class="footer-left">
          <img src="<?php print $GLOBALS['base_url'] . '/' . drupal_get_path('theme', 'clayingels'); ?>/assets/images/logos/logo-sq.png" alt="Clay Ingels">
        </div>
        <div class="footer-right">
          <p class="copyright">Copyright © 2016 Clay Ingels. All rights reserved.</p>
          <p class=""><a href="/privacy-policy">Privacy Policy</a> <a href="/terms-and-conditions">Terms & Conditions</a></p>
        </div>
    <?php endif; ?>
  </footer>
</div>