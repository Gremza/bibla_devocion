<div class="footer">
    <div class="container">
    <div class="col-lg-3 col-xm-12">
    <?php dynamic_sidebar( 'footer1' ); ?>
    </div>
       <div class="col-lg-3 col-xm-12">
    <?php dynamic_sidebar( 'footer2' ); ?>
    </div>
       <div class="col-lg-3 col-xm-12">
    <?php dynamic_sidebar( 'footer3' ); ?>
    </div>
    <div class="col-lg-3 col-xm-12">
    <?php dynamic_sidebar( 'footer4' ); ?>
    </div>
    </div>
</div>
<div class="subfooter">
	<div class="container">
    <div class="col-lg-10 col-xm-10 left_subfooter">
		<?php dynamic_sidebar( 'left_subfooter' ); ?>
	</div>
	<div class="col-lg-2 col-xm-2 right_subfooter">
		<?php dynamic_sidebar( 'right_subfooter' ); echo do_shortcode('[gremza]');  ?> 
	</div>
    </div>	
</div>
<a href="#0" class="cd-top"><i class="fa fa-arrow-up"></i></a>
<?php wp_footer(); ?>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("headbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
</body>
</html>