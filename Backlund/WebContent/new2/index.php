<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Backlund.dk</title>
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/index.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
</head>
<body>

	<div class="container-fluid" style="padding-left: 0px">
		<div class="row">
			<div class="col-md-12">

				<!-- facebook -->
				<div id="fb-root"></div>
				<script>
					(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id))
							return;
						js = d.createElement(s);
						js.id = id;
						js.src = "//connect.facebook.net/da_DK/sdk.js#xfbml=1&version=v2.8";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<!-- end facebook -->
				
				<!-- Side Menu -->
				<div class="nav-side-menu" id="nav-side-menu">
					<?php include 'sidemenuDAN.php';?>
				</div>
				<!-- end sidemenu -->
				<!-- Main container -->
				<div class="maincontainer" id="maincontainer">
				<?php
				$pages = explode(',' , $_GET['page']);
				$page = $pages[count($pages)-1];
				if ($page==null || $page=='') {$page='home';};
				include $page . '.html' ;
				?>
				</div>
				<div class="bottomcontainer">Last modified: 15.03.2017
					<a href="mailto:backlund@backlund.dk">backlund@backlund.dk</a> +45 60931453 Holmebjerg 21, DK-2950 Vedbæk
					Danmark
				</div>
			</div>
		</div>
	</div>
</body>
</html>