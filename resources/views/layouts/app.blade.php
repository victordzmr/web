<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8">
		
		<meta name="author" content="@lang('app.author.full_name')">
		<meta name="description" content="@yield('description')">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta property="og:site_name" content="@lang('app.author.full_name')">
		<meta property="og:type" content="@yield('type')">
		<meta property="og:url" content="{{ url()->current() }}?hl={{ App::getLocale() }}">
		<meta property="og:title" content="@yield('title')">
		<meta property="og:description" content="@yield('description')">
		<meta property="og:image" content="@yield('image')">
		<meta property="og:locale" content="{{ App::getLocale() }}">
		@stack('opengraph')
		
		@foreach (array_diff(config('app.locales'), [App::getLocale()]) as $language)
			<link rel="alternate" hreflang="{{ $language }}" href="{{ url()->current() }}?hl={{ $language }}">
			<meta property="og:locale:alternate" content="{{ $language }}">
		@endforeach
		
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		@stack('styles')
		
		<script src="{{ asset('js/app.js') }}"></script>
		@stack('scripts')
		
		<meta name="theme-color" content="@yield('color')">
		<link rel="manifest" href="{{ asset('manifest.json') }}">
		<meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">
		
		<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/apple-touch-icon.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
		<link rel="mask-icon" href="{{ asset('images/icons/safari-pinned-tab.svg') }}" color="#181830">
		<link rel="shortcut icon" href="{{ asset('images/icons/favicon.ico') }}">
	</head>
	<body>
		@yield('body')
		@include('inc.analytics')
	</body>
</html>