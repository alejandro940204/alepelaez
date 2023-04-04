<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alepelaez
 */

?>

	


<footer class="text-center text-lg-start" style="background-color: #F8F9FA;">
  <div class="container d-flex justify-content-center py-5">
	<button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: darkgray;">
	  <i class="fab fa-facebook-f"></i>
	</button>
	<button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: darkgray;">
	  <i class="fab fa-youtube"></i>
	</button>
	<button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: darkgray;">
	  <i class="fab fa-instagram"></i>
	</button>
	<button type="button" class="btn btn-primary btn-lg btn-floating mx-2" style="background-color: darkgray;">
	  <i class="fab fa-twitter"></i>
	</button>
  </div>

  <!-- Copyright -->
  <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	© 2023 Copyright:
	<a class="text-white" href="https://mdbootstrap.com/">Alejandro Pelaez</a>
  </div>
  <!-- Copyright -->
</footer>


	
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri() ?>js/main.js"></script>
</body>
</html>
