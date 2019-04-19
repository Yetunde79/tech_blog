</div><!-- /.container -->

<footer class="blog-footer">
  
  <?php
  if (!has_custom_logo()) {
  ?>
    <h1 class="logo"><?php bloginfo('name'); ?></h1>
  <?php
  } else{ ?>
    <div class="logo">
     <?php echo the_custom_logo() ?>
  </div>
  <?php } ?>
        

<div class="list">
    <ul>
        <li>
            <a href="https://github.com/Yetunde79" target="_blank">Github</a>
        </li>
        <li>
            <a href="https://www.linkedin.com/in/yetundeadebayo/" target="_blank">LinkedIn</a>
        </li>
        <li>
            <a href="https://twitter.com/yetunde_sola?lang=en" target="_blank">Twitter</a>
        </li>
        <li>
            <a href="https://medium.com/@ysolaadebayo" target="_blank">Medium</a>
        </li>
        <li>
            <a href="privacy.php" class="privacy" target="_blank">Privacy Policy</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="index.php">HOME</a>
        </li>
        <li>
            <a href="about.php">ABOUT</a>
        </li>
        <li>
            <a href="contact.php">CONTACT</a>
        </li>
        <li>
            <a href="/">BLOG</a>
        </li>
        <li>
            <a href="resume.pdf" target="_blank">RESUME</a>
        </li>
    </ul>
</div>
<p class="name"> &copy; Yetunde Sola-Adebayo</p>
  <p>
    <a href="#">Back to the top</a>
  </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<?php wp_footer(); ?>
</body>
</html>