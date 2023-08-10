<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head') <!--head kısmının bulunduğu dosyayı dahil eder -->
    </head>
    <body>
        <div id="header">
            @include('includes.header') <!--header kısmının bulunduğu dosyayı dahil eder -->
        </div>
        <div id="main">
            @yield('content')       <!--içerik eklemmek için@sections ile kullanılır -->
        </div>
         <div id="footer">
            @include('includes.footer') footerkısmının bulunduğu dosyayı dahil eder 
        </div>
    
    </body>
</html>