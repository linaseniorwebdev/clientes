<!-- BEGIN::Main Wrapper -->
<div class="horizontal-main-wrapper">
	<!-- BEGIN::Main Header Area -->
	<div class="mainheader-area">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-3">
					<div class="logo">
						<a href="<?php echo base_url('member') ?>"><img src="public/assets/images/icon/logo.png" alt="logo"></a>
					</div>
				</div>
				<!-- Profile Info & Task Notification -->
				<div class="col-md-9 clearfix text-right">
					<div class="d-md-inline-block d-block mr-md-4">
						<ul class="notification-area">
							<li id="full-view"><i class="ti-fullscreen"></i></li>
							<li id="full-view-exit"><i class="ti-zoom-out"></i></li>
							<li class="dropdown">
								<i class="ti-bell dropdown-toggle" data-toggle="dropdown">
									<span>2</span>
								</i>
								<div class="dropdown-menu bell-notify-box notify-box">
									<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
									<div class="nofity-list">
										<a href="#" class="notify-item">
											<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
											<div class="notify-text">
												<p>You have Changed Your Password</p>
												<span>Just Now</span>
											</div>
										</a>
										<a href="#" class="notify-item">
											<div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
											<div class="notify-text">
												<p>New Commetns On Post</p>
												<span>30 Seconds ago</span>
											</div>
										</a>
										<a href="#" class="notify-item">
											<div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
											<div class="notify-text">
												<p>Some special like you</p>
												<span>Just Now</span>
											</div>
										</a>
										<a href="#" class="notify-item">
											<div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
											<div class="notify-text">
												<p>New Commetns On Post</p>
												<span>30 Seconds ago</span>
											</div>
										</a>
										<a href="#" class="notify-item">
											<div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
											<div class="notify-text">
												<p>Some special like you</p>
												<span>Just Now</span>
											</div>
										</a>
										<a href="#" class="notify-item">
											<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
											<div class="notify-text">
												<p>You have Changed Your Password</p>
												<span>Just Now</span>
											</div>
										</a>
										<a href="#" class="notify-item">
											<div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
											<div class="notify-text">
												<p>You have Changed Your Password</p>
												<span>Just Now</span>
											</div>
										</a>
									</div>
								</div>
							</li>
							<li class="dropdown">
								<i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
								<div class="dropdown-menu notify-box nt-enveloper-box">
									<span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
									<div class="nofity-list">
										<a href="#" class="notify-item">
											<div class="notify-thumb">
												<img src="public/assets/images/author/author-img1.jpg" alt="image">
											</div>
											<div class="notify-text">
												<p>Aglae Mayer</p>
												<span class="msg">Hey I am waiting for you...</span>
												<span>3:15 PM</span>
											</div>
										</a>
									</div>
								</div>
							</li>
							<li class="settings-btn">
								<i class="ti-settings"></i>
							</li>
						</ul>
					</div>
					<div class="clearfix d-md-inline-block d-block">
						<div class="user-profile m-0">
							<img class="avatar user-thumb" src="public/assets/images/author/avatar.png" alt="avatar">
							<h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $user['First'] . ' ' . $user['Last']; ?> <i class="fa fa-angle-down"></i></h4>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Settings</a>
								<a class="dropdown-item" href="<?php echo base_url('member/signout') ?>">Log Out</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END::Main Header Area -->

	<!-- BEGIN::Header Menu Area -->
	<div class="header-area header-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-9  d-none d-lg-block">
					<div class="horizontal-menu">
						<nav>
							<ul id="nav_menu">
								<li <?php if ($com === 'index') echo 'class="active"'; ?>><a href="<?php if ($com === 'index') echo 'javascript:void(0)'; else echo base_url('member'); ?>"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
								<li <?php if ($com === 'request') echo 'class="active"'; ?>>
									<a href="javascript:void(0)"><i class="ti-comment-alt"></i><span>Solicitudes</span></a>
									<ul class="submenu">
										<li <?php if ($com === 'request' && $sub === 'submit') echo 'class="active"'; ?>><a href="<?php if ($com === 'request' && $sub === 'submit') echo 'javascript:void(0)'; else echo base_url('member/request/submit'); ?>">Enviar Solicitud</a></li>
										<li <?php if ($com === 'request' && $sub === 'accepted') echo 'class="active"'; ?>><a href="<?php if ($com === 'request' && $sub === 'accepted') echo 'javascript:void(0)'; else echo base_url('member/request/accepted'); ?>">Solicitudes Aceptadas</a></li>
										<li <?php if ($com === 'request' && $sub === 'rejected') echo 'class="active"'; ?>><a href="<?php if ($com === 'request' && $sub === 'rejected') echo 'javascript:void(0)'; else echo base_url('member/request/rejected'); ?>">Solicitudes Rechazadas</a></li>
									</ul>
								</li>
								<li <?php if ($com === 'task') echo 'class="active"'; ?>>
									<a href="javascript:void(0)"><i class="ti-timer"></i><span>Tareas</span></a>
									<ul class="submenu">
										<li <?php if ($com === 'task' && $sub === 'create') echo 'class="active"'; ?>><a href="<?php if ($com === 'task' && $sub === 'create') echo 'javascript:void(0)'; else echo base_url('member/task/create'); ?>">Crear una tarea</a></li>
										<li <?php if ($com === 'task' && $sub === 'mine') echo 'class="active"'; ?>><a href="<?php if ($com === 'task' && $sub === 'mine') echo 'javascript:void(0)'; else echo base_url('member/task/mine'); ?>">Tareas Solicitadas</a></li>
										<li <?php if ($com === 'task' && $sub === 'todo') echo 'class="active"'; ?>><a href="<?php if ($com === 'task' && $sub === 'todo') echo 'javascript:void(0)'; else echo base_url('member/task/todo'); ?>">Tareas a Realizar</a></li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- Mobile Menu -->
				<div class="col-12 d-block d-lg-none">
					<div id="mobile_menu"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END::Header Menu Area -->
