<?php
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- production only  -->
    <base href="https://drim.io">

    <link rel="preload" href="/assets/css/app.css" as="style">
    <link rel="preload" href="/assets/js/app.js" as="script">

    <meta http-equiv="Cache-Control" content="max-age=31536000">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">

    <link rel="canonical" href="https://drim.io">
    <link rel="shortcut icon" href="/assets/images/levon.png" type="image/x-icon">

    <title>Levon |> Web Developer</title>
    <meta name="description" content="Levon |> Web Developer |> Creating Unique Fine Things That Live On The Internet">
    <meta name="author" content="Levon">
    <meta property="og:title" content="Levon |> Web Developer">
    <meta property="og:description" content="Creating Unique Fine Things That Live On The Internet">
    <meta property="og:image" content="/assets/images/levon.png">
    <meta property="og:url" content="https://drim.io">
    <meta name="twitter:card" content="summary_large_image">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=mona+sans:300,400,700|aref-ruqaa-ink:400,700&display=swap" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/levon.png">

    <link href="/assets/css/app.css?v=<?php echo VERSION; ?>" rel="stylesheet">

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
                    "Software Engineering",
                    "Frontend Development",
                    "Backend Development",
                    "Web Development"
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
                        "name": "Project-based Development",
                        "description": "Custom web development projects with one-time payment",
                        "availability": "https://schema.org/InStock",
                        "priceSpecification": {
                            "@type": "PriceSpecification",
                            "priceCurrency": "EUR",
                            "description": "Price varies based on project scope"
                        }
                    }
                ]
            }
        ]
    }
    </script>
</head>
