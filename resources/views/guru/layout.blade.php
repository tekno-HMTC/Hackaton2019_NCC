<!DOCTYPE html>
<html lang="en">
	<head>
		@include('guru.shared.partials.meta')
		<title>@yield('title')</title>
		@include('guru.shared.partials.css')
		@yield('unique-css')
	</head>
	<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
		@include('guru.shared.partials.navbar')
		<div class="app-body">
			@include('guru.shared.partials.sidebar')
			<main class="main">
				@yield('breadcrumb')
				@yield('content')
			</main>
		</div>
		@include('guru.shared.partials.footer')
		@include('guru.shared.partials.js')
		@yield('unique-js')
	</body>
</html>
