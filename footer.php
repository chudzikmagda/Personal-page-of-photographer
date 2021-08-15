	
	
<footer>
	<nav>
		<ul>
			<li><a href="https://www.facebook.com/chudzikmagda" target="_blank" rel="noopener noreferrer">Facebook</a></li>
			<li><a href="https://instagram.com/chudzikmagda" target="_blank" rel="noopener noreferrer">Instagram</a></li>
			<li><a href="https://www.linkedin.com/in/magdalena-chudzik/" target="_blank" rel="noopener noreferrer">Linkedin</a></li>
			<li><a href="https://www.behance.net/magdachudzik" target="_blank" rel="noopener noreferrer">Behance</a></li>
		</ul>
	</nav>
</footer>

<!--go to the top btn-->
<button class="scroll-top" title="Go to top">
	<i class="icon-arrow1-up"></i>
</button>

<!--widgets area-->
<?php 
  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) :  
  endif;?>
  
<?php wp_footer(); ?>

<!-- AOS animation -->
<script>
  AOS.init({
  duration: 1200,
  })
</script>

</body>
</html>