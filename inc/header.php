<!-- Overlay -->
<div id="overlay"></div>

<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-1">
				<span style="float:left;"><img class="top-logo" src="img/img-trans.png" width="1" height="1" /></span>
				<span style="float:right;">
					<ul class="h-p h-t">
						<li><a href="#home"><i class="icon-th"></i> Home</a></li>
						<li><a href="#profile"><i class="icon-group"></i> Profile</a></li>
						<li><a id="right-menu" href="#right-menu"><i class="icon-cogs"></i> Account</a></li>
						<li><a href="#login"><i class="icon-signin"></i> Login</a></li>
					</ul>
					<ul class="h-d">
						<li><a href="#home"><i class="icon-th"></i></a></li>
						<li><a href="#profile"><i class="icon-group"></i></a></li>
						<li><a href="#account"><i class="icon-cogs"></i></a></li>
						<li><a href="#login"><i class="icon-signin"></i><span id="login-text"> Login</span></a></li>
					</ul>
				</span>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</header>
<!-- !Body -->
<body>

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
    <li class="active"><a href="/light"><i class="icon-double-angle-right"></i> Account option</a></li>
    <li><a href="/light"><i class="icon-double-angle-right"></i> Account option</a></li>
    <li><a href="/light"><i class="icon-double-angle-right"></i> Account option</a></li>
    <li><a href="/light"><i class="icon-double-angle-right"></i> Account option</a></li>
    <li><a href="/light"><i class="icon-double-angle-right"></i> Account option</a></li>
    <li><a href="/light"><i class="icon-double-angle-right"></i> Account option</a></li>
    <li><a href="/light"><i class="icon-double-angle-right"></i> Account option</a></li>
  </ul>
</div>