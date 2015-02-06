<?php 
// No direct access
defined('_JEXEC') or die; ?>
<!-- Carousel
================================================== -->
<div id="jCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
	<div class="item active">
	  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
	  <div class="container">
		<div class="carousel-caption">
		  <?php echo $captionOne; ?>
		</div>
	  </div>
	</div>
	<div class="item">
	  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
	  <div class="container">
		<div class="carousel-caption">
			<?php echo $captionTwo; ?>
		</div>
	  </div>
	</div>
	<div class="item">
	  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
	  <div class="container">
		<div class="carousel-caption">
			<?php echo $captionThree; ?>
		</div>
	  </div>
	</div>
  </div>
  <a class="left carousel-control" href="#jCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#jCarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
  </a>
</div><!-- /.carousel -->



