<?php include("inc/head.php"); ?>
<?php include("inc/header.php"); ?>
 
<!-- Sidr menu -->
<script>
$(document).ready(function() {
    $('#right-menu').sidr({
      name: 'sidr-right',
      side: 'right'
    });
});
</script>

<div id="sidr-right">
  <!-- Your content -->
  <ul>
    <li><a href="#">List 1</a></li>
    <li class="active"><a href="#">List 2</a></li>
    <li><a href="#">List 3</a></li>
  </ul>
</div>
	
<div class="container">
	
	<div class="row">
		<div class="col-1 main-video">
			<div class="video-holder">
				<iframe src="//player.vimeo.com/video/65307140?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<div id="picture-in-picture" class="h-p">
					<div class="video-holder-sm">
						<iframe src="//player.vimeo.com/video/65307140?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div><!-- /.col-1 -->
	</div><!-- /.row -->
	
	<div class="row">
		<div class="col-2">
			Test content II. <span class="h-t">Hidden tablet.</span>
		</div><!-- /.col-2 -->
		<div class="col-2">
			Test content III. <span class="h-d">Hidden desktop.</span>
		</div><!-- /.col-2 -->
	</div><!-- /.row -->
	
	<div class="row">
		<div class="col-3">
			Test content IV.
		</div><!-- /.col-3 -->
		<div class="col-3">
			Test content V.
		</div><!-- /.col-3 -->
		<div class="col-3">
			Test content VI.
		</div><!-- /.col-3 -->
	</div><!-- /.row -->
	
	<div class="row">
		<div class="col-4">
		    Lorem ipsum.
		</div><!-- /.col-4 -->
		<div class="col-4">
			Lorem ipsum.
		</div><!-- /.col-4 -->
		<div class="col-4">
			Lorem ipsum.
		</div><!-- /.col-4 -->
		<div class="col-4">
			Lorem ipsum.
		</div><!-- /.col-4 -->
	</div><!-- /.row -->
	
	<div class="row">
		<div class="col-4">
			Test content VII.
		</div><!-- /.col-4 -->
		<div class="col-4">
			Test content VIII.
		</div><!-- /.col-4 -->
		<div class="col-4">
			Test content IX.
		</div><!-- /.col-4 -->
		<div class="col-4">
			Test content X.
		</div><!-- /.col-4 -->
	</div><!-- /.row -->
	
</div><!--!/.container -->
<?php include("inc/footer.php"); ?>