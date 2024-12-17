<!DOCTYPE html>
<html>

<head>
    <title>{{ $page['props']['seoParams']['appName'] ?? '' }}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.13.1/build/styles/sunburst.min.css">
    @vite('resources/js/app.ts')
    <link rel="stylesheet" href="/css/theme.css">
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>
