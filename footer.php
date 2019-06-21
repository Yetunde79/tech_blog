</div><!-- end of col-9 -->
</div><!-- /.row -->

</div><!-- end container fluid -->
</main> <!-- end of main -->

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
            <a href="<?php echo get_option('github'); ?>" target="_blank">Github</a>
        </li>
        <li>
            <a href="<?php echo get_option('linkedin'); ?>" target="_blank">LinkedIn</a>
        </li>
        <li>
            <a href="<?php echo get_option('twitter'); ?>" target="_blank">Twitter</a>
        </li>
        <li>
            <a href="<?php echo get_option('medium'); ?>" target="_blank">Medium</a>
        </li>
        <li>
            <a href="../privacy.php" class="privacy" target="_blank">Privacy Policy</a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="/index.php">HOME</a>
        </li>
        <li>
            <a href="/about.php">ABOUT</a>
        </li>
        <li>
            <a href="/blog">BLOG</a>
        </li>
        <li>
            <a href="/contact.php">CONTACT</a>
        </li>    
        <li>
            <a href="/resume.pdf" target="_blank">RESUME</a>
        </li>
    </ul>
</div>
<p class="name"> &copy; Yetunde Sola-Adebayo</p>
  <p class="back">
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