<!DOCTYPE html>
<html lang="en">
	<head>
	<link href="themes/default_t/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
		<meta name="description" content="<?=wCMS::page('description')?>">
		<meta name="keywords" content="<?=wCMS::page('keywords')?>">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
	<?=wCMS::css()?>
	<script type="text/javascript" src="themes/default_t/js/queryLoader.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
	<script type="text/javascript">$(document).ready(function(){
$(window).scroll(function () {if ($(this).scrollTop() > 0) {$('#scroller').fadeIn();} else {$('#scroller').fadeOut();}});
$('#scroller').click(function () {$('body,html').animate({scrollTop: 0}, 400); return false;});
});</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	
	<body>
		<?=wCMS::alerts()?>
		<?=wCMS::settings()?>

		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>

					<a href="./"><h3><?=wCMS::get('config','siteTitle')?><span class="navbar" id="logo"></h3></a>

					</a>
				</div>

				<div class="collapse navbar-collapse" id="menu-collapse">
					<ul class="nav navbar-nav navbar-right">
						<?=wCMS::menu()?>

					</ul>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center padding40">
					<?=wCMS::page('content')?>

				</div>
			</div>
		</div>

		<div class="container-fluid blueBackground whiteFont">
			<div class="row">
				<div class="col-lg-12 text-center padding40">
					<?=wCMS::block('subside')?>
<br>


				</div>
			</div>
		</div>

		<footer class="container-fluid">
			<div class="text-right padding20">
				<?=wCMS::footer()?>

			</div>
		</footer>

		<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<?=wCMS::js()?>

<div id="scroller" class="b-top" style="display: none;"><span class="b-top-but"><p style="color:#000">_[TOP]_</p></span></div>


<script>
QueryLoader.selectorPreload = "body";
QueryLoader.init();
</script>
<div style="position: fixed; top: 0px; left: 0px; width: 1423px; height: 649px; display: none;" class="QOverlay">
<div style="overflow: hidden; position: relative; top: 0px; width: 100%; display: block; height: 500px;" class="QLoader"></div>
</div>
	</body>
</html>
