<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $page->title }} |> DRIM.IO</title>
    <meta name="description" content="{{ $page->description }}">

    <link rel="canonical" href="{{ $page->getUrl() }}">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <link rel="shortcut icon" href="/assets/icons/drim-128.png" type="image/x-icon">
    <link rel="manifest" href="/manifest.json">
	<link rel="apple-touch-icon" href="/assets/icons/drim-152.png">

	<meta property="og:title" content="{{ $page->title }} |> DRIM.IO">
	<meta property="og:description" content="{{ $page->description }}">
    <meta property="og:url" content="{{ $page->getUrl() }}">
	<meta property="og:image" content="{{ $page->thumbnail ?? 'https://drim.io/assets/levon.jpg' }}">

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@levonium">
    <meta name="twitter:creator" content="@levonium">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Drim.io">
	<meta name="theme-color" content="#542727" />
</head>
