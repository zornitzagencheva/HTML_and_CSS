<?php require_once('phpimage.php');
	header("Content-Type: text/html; charset=charset=utf-8");
	error_reporting(0);
	
	
	
	mysql_select_db($database_phpimage, $phpimage);
	$cat = $_GET['cat'];
	$qur = "select * from project_posts WHERE category='Събития' order by post_id DESC";
	mysql_query("SET CHARACTER SET utf8");
	mysql_query("SET NAMES utf8");
	$res = mysql_query($qur, $phpimage);
	$r2s = mysql_query($qur, $phpimage);
	
?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<link rel="stylesheet" type="text/css" href="media-query.css" />

	</head>
	<body>		
		<div id="fb-root"></div>
			<script>(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/bg_BG/sdk.js#xfbml=1&version=v2.0";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
		<header>
			<table>
				<tr>
					<img src="codeBurner.png" class="headLogo"/> 
					<input type="text" placeholder="Search..." id="searchBox"/>
				</tr>
				<tr id="nav">
					<td onclick="location.href='index.php'">Начало</td>					
					<td onclick="location.href='pictures.php'">Картинки</td>
					<td onclick="location.href='jokes.php'">Вицове</td>
					<td onclick="location.href='videos.php'">Клипчета</td>
					<td onclick="location.href='team.php'">Тийм билдинг</td>
					<td onclick="location.href='events.php'">Събития</td>
					<td onclick="location.href='http://softuni.bg'">SoftUni</td>
				</tr>
			</table>
		</header>
		
		<div id="contentHolder">
			<div class="postsContainer">

				<?php while($row=mysql_fetch_array($res)) { ?>
					<div class="postPicture">
						<h1 class="postTitle"><?php echo $row['title'] ?></h1>
						<img src="<?php echo $row['image'] ?>" class="picture"/>
						<p class="postDescription"><?php echo $row['content'] ?></p>
						<div style="display:inline-block; margin-top:-8px;" class="rw-ui-container rw-urid-<?php
						    echo  $row['post_id'] 
						?>"></div>
						<p class="postInfo" style="display:inline-block;"> От: <span><?php echo $row['date'] ?></span> &nbsp;&nbsp;&nbsp; Автор: <span><?php echo $row['autor'] ?></span> </p>
					</div>
				<?php } ?>



				
			</div>		

			<aside>


				<div class="aboutUs">
					<h1 class="followUsOn">За нас:</h1>
					<p id="forUs">
						Ние сме сайт предлагащ многобройни картинки, видеота, вицове, teamwork идеи и информиращ за всякакви събития свързани в програмирането и информационните технологии.  
					</p>	
					<h1 class="followUsOn"></h1>
					<div class="fb-like-box" style="margin-left:6px;" data-href="https://www.facebook.com/codeburnertw" data-width="360" data-height="280" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>				
				</div>

				<div class="socialNetworks">
					<h1 class="followUsOn">Последвайте ни и на:</h1>

					<div class="socialIcons">
						<img class="social" src="social/fb.png" />
						<img class="social" src="social/git.png" />
						<img class="social" src="social/twitter.png" />
						<img class="social" src="social/instagram.png" />
						<img class="social" src="social/linkedin.png" />
						<img class="social" src="social/skype.png" />
					</div>					
				</div>

			</aside>
		</div>
		<script type="text/javascript" src="votes-widget.js"></script>
	</body>
</html>