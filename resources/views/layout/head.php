<?php
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Preload critical assets -->
	<link rel="preload" href="/assets/css/app.css" as="style">
	<link rel="preload" href="/assets/js/app.js" as="script">
	<link rel="preload" href="/assets/images/me.jpg" as="image">

	<!-- Add cache control -->
	<meta http-equiv="Cache-Control" content="max-age=31536000">

	<!-- Add security headers -->
	<!-- <meta http-equiv="Content-Security-Policy" content="default-src 'self'; img-src 'self' https:; font-src 'self' https://fonts.bunny.net;"> -->
	<!-- <meta http-equiv="X-Content-Type-Options" content="nosniff"> -->
	<meta http-equiv="X-Frame-Options" content="DENY">


	<!-- <base href="https://drim.io"> -->
	<link rel="canonical" href="https://drim.io">
	<link rel="shortcut icon" href="/assets/images/levon.png" type="image/x-icon">

	<title>Levon |> Web Developer</title>
	<meta name="description" content="Levon |> Web Developer |> Creating Unique Fine Things That Live On The Internet">

	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=mona+sans:300,400,700|aref-ruqaa-ink:400,700" rel="stylesheet" />

	<link href="/assets/css/app.css" rel="stylesheet">

	<!-- Add more meta tags for SEO -->
	<meta name="keywords" content="web developer, software engineer, freelance developer">
	<meta name="author" content="Levon">
	<meta property="og:title" content="Levon |> Web Developer">
	<meta property="og:description" content="Creating Unique Fine Things That Live On The Internet">
	<meta property="og:image" content="/assets/images/levon.png">
	<meta property="og:url" content="https://drim.io">
	<meta name="twitter:card" content="summary_large_image">

	<!-- Add favicon variations -->
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">

	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@graph": [
			{
				"@type": "Person",
				"@id": "https://drim.io/#person",
				"name": "Levon",
				"jobTitle": "Web Developer",
				"description": "Creating Unique Fine Things That Live On The Internet",
				"url": "https://drim.io",
				"image": "https://drim.io/assets/images/levon.png",
				"sameAs": [
					"https://github.com/levonium"
				],
				"knowsAbout": [
					"Web Development",
					"Software Engineering",
					"Frontend Development",
					"Backend Development"
				]
			},
			{
				"@type": "WebSite",
				"@id": "https://drim.io/#website",
				"url": "https://drim.io",
				"name": "DRIM.IO",
				"description": "Creating Unique Fine Things That Live On The Internet",
				"publisher": {
					"@id": "https://drim.io/#person"
				}
			},
			{
				"@type": "Service",
				"@id": "https://drim.io/#service",
				"name": "Web Development Services",
				"provider": {
					"@id": "https://drim.io/#person"
				},
				"description": "Professional web development services including subscription-based and one-time payment projects",
				"offers": [
					{
						"@type": "Offer",
						"name": "Monthly Subscription",
						"price": "2400",
						"priceCurrency": "EUR",
						"description": "Monthly web development subscription service"
					},
					{
						"@type": "Offer",
						"name": "One-time Projects",
						"description": "Custom web development projects with one-time payment"
					}
				]
			}
		]
	}
	</script>
</head>
