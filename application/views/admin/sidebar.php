<div class="sidebar-menu">
	<div class="sidebar-header">
		<div class="logo">
			<a href="index.html"><img src="public/assets/images/icon/logo.png" alt="logo"></a>
		</div>
	</div>
	<div class="main-menu">
		<div class="menu-inner">
			<nav>
				<ul class="metismenu" id="menu">
					<li <?php if ($com === 'index') echo 'class="active"'; ?>>
						<a href="<?php if ($com === 'index') echo 'javascript:void(0)'; else echo base_url('admin'); ?>">
							<i class="ti-dashboard"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li <?php if ($com === 'user') echo 'class="active"'; ?>>
						<a href="javascript:void(0)" aria-expanded="true">
							<i class="ti-user"></i>
							<span>Usuarios</span>
						</a>
						<ul class="collapse">
							<li <?php if ($com === 'user' && $sub === 'create') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'user' && $sub === 'create') echo 'javascript:void(0)'; else echo base_url('admin/user/create'); ?>">Agregar usuario</a>
							</li>
							<li <?php if ($com === 'user' && $sub === 'list') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'user' && $sub === 'list') echo 'javascript:void(0)'; else echo base_url('admin/user/list'); ?>">Todos los usuarios</a>
							</li>
						</ul>
					</li>
					<li <?php if ($com === 'customer') echo 'class="active"'; ?>>
						<a href="javascript:void(0)" aria-expanded="true">
							<i class="ti-map-alt"></i>
							<span>Clientes</span>
						</a>
						<ul class="collapse">
							<li <?php if ($com === 'customer' && $sub === 'create') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'customer' && $sub === 'create') echo 'javascript:void(0)'; else echo base_url('admin/customer/create'); ?>">Crear cliente</a>
							</li>
							<li <?php if ($com === 'customer' && $sub === 'search') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'customer' && $sub === 'search') echo 'javascript:void(0)'; else echo base_url('admin/customer/search'); ?>">Buscar cliente</a>
							</li>
							<li <?php if ($com === 'customer' && $sub === 'map') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'customer' && $sub === 'map') echo 'javascript:void(0)'; else echo base_url('admin/customer/map'); ?>">Clientes en el mapa</a>
							</li>
						</ul>
					</li>
					<li <?php if ($com === 'zone') echo 'class="active"'; ?>>
						<a href="javascript:void(0)" aria-expanded="true">
							<i class="ti-flag-alt-2"></i>
							<span>Zonas</span>
						</a>
						<ul class="collapse">
							<li <?php if ($com === 'zone' && $sub === 'create') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'zone' && $sub === 'create') echo 'javascript:void(0)'; else echo base_url('admin/zone/create'); ?>">Crear zonas</a>
							</li>
							<li <?php if ($com === 'zone' && $sub === 'list') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'zone' && $sub === 'list') echo 'javascript:void(0)'; else echo base_url('admin/zone/list'); ?>">Lista de zonas</a>
							</li>
							<li <?php if ($com === 'zone' && $sub === 'assign') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'zone' && $sub === 'assign') echo 'javascript:void(0)'; else echo base_url('admin/zone/assign'); ?>">Asignar zonas</a>
							</li>
							<li <?php if ($com === 'zone' && $sub === 'optimize') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'zone' && $sub === 'optimize') echo 'javascript:void(0)'; else echo base_url('admin/zone/optimize'); ?>">Optimización de rutas</a>
							</li>
						</ul>
					</li>
					<li <?php if ($com === 'task') echo 'class="active"'; ?>>
						<a href="javascript:void(0)" aria-expanded="true">
							<i class="ti-alarm-clock"></i>
							<span>Tareas</span>
						</a>
						<ul class="collapse">
							<li <?php if ($com === 'task' && $sub === 'create') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'task' && $sub === 'create') echo 'javascript:void(0)'; else echo base_url('admin/task/create'); ?>">Crear tareas</a>
							</li>
							<li <?php if ($com === 'task' && $sub === 'list') echo 'class="active"'; ?>>
								<a href="<?php if ($com === 'task' && $sub === 'list') echo 'javascript:void(0)'; else echo base_url('admin/task/list'); ?>">Lista de tareas</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<div class="main-content">