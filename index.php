<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Master Github</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../fontawesome-free-5.7.2-web/fontawesome-free-5.7.2-web/css/all.min.css">
</head>

<body>
	
	<header id="header">
			<nav class="clearfix">
				<div class="container">
					<a href="#home">home</a>
					<a href="#basic_git">basic commands</a>
					<a href="#git_flow">git flow</a>
				</div><!--container-->
			</nav>
	</header>
	
	
	<section id="hero" class="clearfix">
		<div class="container">
			<h1>master git hub</h1>
			<i class="fab fa-github-alt"></i>
		
		</div><!--container-->
	
	</section>
	
	
	<section id="basic_git" class="clearfix">
		<div class="container">
			<h2>basic commands</h2>
			
			<h3>to initialize a git repository use the comamnd: <br><span class="commands">git init</span></h3>
			<div class="command_img">
				<img src="img/git_init.PNG" alt="">
			</div><!--command_img-->
			
			<hr class="command_divide">
			
			<h3>to push you local repository to github.com use the command: <br><span class="commands">git remote add origin https://github.com/[your accountname]/[repository name]</span></h3>
			
			<div class="command_img">
				<img src="img/git_push.PNG" alt="">
			</div><!--command_img-->
			
			<hr class="command_divide">
			
			
			<h3>to add the local files to github.com use the command: <br><span class="commands">git add [file name] or git add . [all files]</span></h3>
			
			<div class="command_img">
				<img src="img/git_add.PNG" alt="">
			</div><!--command_img-->
			
			<hr class="command_divide">		
			
			
			<h3>to show modified files in working directory, staged for your next commit use the command: <br><span class="commands">git status</span></h3>
			
			<div class="command_img">
				<img src="img/git_status.PNG" alt="">
			</div><!--command_img-->
			
			<hr class="command_divide">	
			
			
			<h3>to commit your staged content as a new commit snapshot use the command: <br><span class="commands">git commit -m "commit message"</span></h3>
			
			<div class="command_img">
				<img src="img/git_commit.PNG" alt="">
			</div><!--command_img-->
			
			<hr class="command_divide">		
			
			<h3>to Transmit local branch commits to the remote repository branchuse the command: <br><span class="commands">git push -u origin master</span></h3>
			
			<div class="command_img">
				<img src="img/git_push_origin.PNG" alt="">
			</div><!--command_img-->
			
			<hr class="command_divide">		
			
		</div><!--container-->
	</section>
	
	<script src="../fontawesome-free-5.7.2-web/fontawesome-free-5.7.2-web/js/all.min.js"></script>
</body>
</html>