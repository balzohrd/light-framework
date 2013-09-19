<?php include("inc/head.php"); ?>
<?php include("inc/header.php"); ?>

<!-- 3D card -->
<section class="card-container">
  <div id="card" class="">
    <figure class="front">
        <div class="flip"><i class="icon-repeat icon-flip-horizontal"></i></div>
        1
    </figure>
    <figure class="back">
        <div class="flip"><i class="icon-repeat icon-flip-horizontal"></i></div>
        2
    </figure>
  </div>
</section>

<div class="container">
	
	<div class="row">
    	<div class="col-1">
        	<a href="#" id="test">Show 3D overlay</a>
    	</div>
	</div>
	
	<!-- Sortable, searchable list -->
	<div class="row">
    	<div class="col-1 list">
        	<ul class="sortable-list">
            	<li>
            	    <div class="left">Name:</div>
            	     <div class="right"><i class="icon-sort-by-attributes"></i></div>
            	    <div class="clearfix"></div>
                </li>
            	<li>
                	<div class="left">
                	    <div class="item-text">Los Angeles Lakers</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <div class="item-text">Miami Heat</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <div class="item-text">Denver Nuggets</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <div class="item-text">Dallas Mavericks</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
        	</ul>
    	</div>
	</div>
	
	<!-- Video chat 
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
    	</div>
	</div><!-- /.row -->
	
	<!-- Calendar -->
	<div class="row">
    	<div class="col-1 calendar">
        	<?php
                include("inc/calendar.php");
                 $dateComponents = getdate();
                 $month = $dateComponents['mon']; 			     
                 $year = $dateComponents['year'];
                 echo build_calendar($month,$year,$dateArray);
            ?>
    	</div>
	</div>
	
	<!-- Lists -->
	<div class="row">
    	<div class="col-1 list">
        	<ul class="picture-list">
            	<li>
            	    <div class="left">Select Player:</div>
            	    <div class="clearfix"></div>
                </li>
            	<li>
                	<div class="left">
                	    <img src="img/austin.jpg">
                	    <div class="item-text">Kobe Bryant</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <img src="img/austin.jpg">
                	    <div class="item-text">Pau Gasol</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <img src="img/austin.jpg">
                	    <div class="item-text">Steve Nash</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <img src="img/austin.jpg">
                	    <div class="item-text">Nick Young</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
        	</ul>
    	</div>
	</div>
	
	<div class="row">
		<div class="col-2 list">
			<ul class="plain-list">
            	<li>
            	    <div class="left">Select Team:</div>
            	    <div class="clearfix"></div>
                </li>
            	<li>
                	<div class="left">
                	    <div class="item-text">Los Angeles Lakers</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <div class="item-text">Miami Heat</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <div class="item-text">Denver Nuggets</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
            	<li>
                	<div class="left">
                	    <div class="item-text">Dallas Mavericks</div>
                    </div>
            	    <div class="right"><i class="icon-angle-right"></i></div>
            	    <div class="clearfix"></div>
            	</li>
        	</ul>
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