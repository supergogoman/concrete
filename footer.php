<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Concrete
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			Footer Info
		</div>
	</footer>
	<div id="site-base" class="">
		<div class="container">
			<div class="left-col">
				<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?></p>
			</div>
			<div class="right-col">
				<p>Design By</p>
				<a href="https://designsbyjosh.co.uk" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 153 51.27"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M34,10.79H56.87c16.49,0,27.8,9.94,27.8,25.21S73.36,61.2,56.87,61.2H34ZM56.3,51.62c10,0,16.56-6,16.56-15.62S66.31,20.37,56.3,20.37H45.64V51.62Z" transform="translate(0 -10.79)"/><path d="M85.24,54.72l6.48-7.78c2.74,3.67,5.76,5.55,9.36,5.55,4.68,0,7.13-2.81,7.13-8.36v-24H90.5V10.79h29.3v32.7c0,12.45-6.26,18.57-18.14,18.57C94.89,62.06,88.91,59.47,85.24,54.72Z" transform="translate(0 -10.79)"/><circle id="c-left" cx="9.5" cy="24.48" r="9.5"/><circle id="c-right" cx="143.5" cy="24.48" r="9.5"/></g></g></svg>
				</a>
			</div>
		</div>
	</div>
</div>


<?php wp_footer(); ?>
</body>
</html>
