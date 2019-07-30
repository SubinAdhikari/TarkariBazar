<?php
//  include '../../app/call.php';
//  session_start();
// if(checkAdminLogin()){
// 	redirect('index.php');
// } 
// else{
// 	redirect('loginPage.php');
// }
?>	
	
	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="../home.php"><img src="../layouts/logo.png" alt="HameroTarkariBazar" width="50%"></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				
			<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				
			</ul>

			

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/images/flags/gb.png" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="../assets/images/flags/de.png" alt=""> Deutsch</a></li>
						<li><a class="ukrainian"><img src="../assets/images/flags/ua.png" alt=""> Українська</a></li>
						<li><a class="english"><img src="../assets/images/flags/gb.png" alt=""> English</a></li>
						<li><a class="espana"><img src="../assets/images/flags/es.png" alt=""> España</a></li>
						<li><a class="russian"><img src="../assets/images/flags/ru.png" alt=""> Русский</a></li>
					</ul>
				</li>

				 

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/images/user.png" alt="">
						<span><?php echo $_SESSION['user']['email']?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="../myprofile.php"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="../myorder.php"><i class="icon-coins"></i> My Order</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="../Userlogout.php"><i class="icon-switch2"></i>Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->