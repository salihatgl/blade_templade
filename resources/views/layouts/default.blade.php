<!DOCTYPE html>
<html lang="en">

<head>
    <title>LAYOUT</title>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>import cookie from 'cookiejs';</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css" />
</head>

<body>

    <div id="header">
        @include('includes.header')
        <!--header kısmının bulunduğu dosyayı dahil eder -->
    </div>
    <div id="main">
        @yield('content')
        <!--içerik eklemmek için@sections ile kullanılır -->
    </div>
    <div id="footer">
        @include('includes.footer') <!-- footerkısmının bulunduğu dosyayı dahil eder -->
    </div>

</body>

</html>