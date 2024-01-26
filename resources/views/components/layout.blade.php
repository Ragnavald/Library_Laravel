<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css">
    <link rel="icon" href="/images/logo.png">
    <link rel='stylesheet' type='text/css' media='screen' href="{{asset('/css/app.css')}}">
    <script src='main.js'></script>
    <title>{{$title}}</title>
</head>
<body class="bg-success p-2 bg-opacity-75">
{{$slot}}
</body>
</html>
