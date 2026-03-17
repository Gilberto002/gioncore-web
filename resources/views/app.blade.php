<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>GionCore — Intelligence Engineered</title>
    <meta name="description" content="GionCore es una empresa de desarrollo de software e inteligencia artificial de clase mundial. Transformamos negocios con tecnología de vanguardia." />
    <meta property="og:title" content="GionCore — Intelligence Engineered" />
    <meta property="og:description" content="Desarrollo de software e IA para empresas que quieren liderar." />
    <meta property="og:url" content="https://gioncore.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.cdnfonts.com/css/aileron" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.__GIONCORE__ = {
            projects: @json($projects),
            services: @json($services),
            team: @json($team),
            csrfToken: '{{ csrf_token() }}'
        };
    </script>
</head>
<body>
    <div id="app"></div>
</body>
</html>