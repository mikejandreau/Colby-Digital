<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Colby_V1
 */

?>

	</div><!-- #content -->


  <footer id="colophon" class="site-footer py-5">
    <div class="container">
      <p class="copyright m-0 text-center text-white">Copyright &copy; <span id="year"><script>document.getElementById("year").innerHTML = new Date().getFullYear();</script></span> Colby Libraries</p>
      <a id="scrollUpButton" class="scrollup js-scroll-trigger" href="#page-top"><svg class="scrollup-chevron" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg></a>
    </div>
  </footer>
  
</div><!-- #page -->

</div><!-- close page-overlay -->

<?php wp_footer(); ?>

</body>
</html>
