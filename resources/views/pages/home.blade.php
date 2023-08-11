 @extends('layouts.default') <!--view dosyasını genişletir -->
@section('content')          <!-- yield ile içerik eklemek için kullanılır. -->

<!-- <h4>Laravel custom konfigürasyon</h4> -->
<!-- {{$value = config('app.ayar.deger');}} -->

<div class="container">
        <h6 class="ms-5 mt-5 me-5">Liz Flamhaff Designs</h6>
        <hr style="color: #735e59; height:2px;">
        <img class="ms-5 mb-5 me-5" style="height: 450px; float:left;"
            src="https://productimages.hepsiburada.net/s/79/550/110000021472407.jpg/format:webp" alt="decor">
        <div class="m-5">
            <p style="font-size: 60px; color: #735e59;"> Your <br>Home, <br>Designed.</p>
            <button class="btn btn-white" style="border: 1px solid #735e59;color:#735e59; width:180px">LEARN
                MORE</button>
        </div>
    </div><br><br><br>
    <div class="container-fluid ps-5" style="clear: left; background-color:#eceada; ">
        <div class="text-center">
            <p class="ms-5 mt-5 " style="font-size: 60px; color: #735e59; ">Spaces that <br> make you <br>want to stay
            </p>
            <p style="width:35%; color:#735e59; display:inline-block; " class="ms-5">What's special about your product,
                service, or company? Use this space to highlight the things that
                set you apart from your competition, whether it's a special feature, a unique philosophy, or awards
                and recognition that you have received. Think of this as your elevator pitch to get the reader's
                attention.</p>
        </div>
    </div>
    <div class="container mb-5 mt-5">
        <h1 style="color: #735e59;" class="ms-5">Get to Know Our Team</h1>
        <hr style="color: #735e59; height:2px;">
        <div class="row mt-5 margin-left:auto; margin-right:auto;">
            <div class="col text-center">
                <img src="https://mokymaipro.lt/wp-content/uploads/2020/11/accountant-768x512.jpg" alt="" width="150px"
                    height="150px">
                <p>Liz Flaffham <br>CEO</p>
            </div>
            <div class="col text-center">
                <img src="https://images.pexels.com/photos/7752846/pexels-photo-7752846.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    alt="" width="150px" height="150px">
                <p>Douglas Galveston <br>Creative Director</p>
            </div>
            <div class="col text-center">
                <img src="https://d2qly7vspx2wdt.cloudfront.net/profile_images/e83vVQAiS4Aj6VdTtszV0aHryNBlAZ2O9ycbmBQoJ86PGTzoaR.jpeg"
                    alt="project" width="150px">
                <p>Sacha Dubois <br>Project Coordinator</p>
            </div>
            <div class="col text-center">
                <img src="https://pbs.twimg.com/media/ErSxEV9WMAEyf2v?format=webp&name=900x900" alt="project"
                    width="150px">
                <p>Venice Peeters <br>Designer</p>
            </div>

        </div>
    </div>
    <div class="container-fluid mt-5" style="background-color: #eceada; padding-bottom:75px;">
        <h1 style="color: #735e59;" class="ms-5 pt-5">What We Can Do for You</h1>
        <hr style="color: #735e59; height:2px;">
        <div class="row mt-5 ms-5">
            <div class="col text-center">
                <img src="https://ic-mimar.com/wp-content/uploads/2019/06/apartment-ceiling-chairs-1571460-300x193.jpg"
                    alt="decor">
                <p>Home Staging</p>
            </div>
            <div class="col text-center">
                <img src="https://www.bydekorasyon.com/wp-content/uploads/2011/10/mudo-consept.jpg" width="300px"
                    height="193px" alt="decor">
                <p>Home Design</p>
            </div>
            <div class="col text-center">
                <img src="https://thelucidlab.com.tr/cdn/shop/products/ANI-20-22.02-7.jpg?v=1624887457&width=3000"
                    width="300px" height="193px" alt="decor">
                <p>Furniture Leasing</p>
            </div>
        </div>

    </div>

    <div class="container mt-5" style="padding-bottom:75px;">
        <h1 style="color: #735e59;" class="ms-5 ">What We Do For You</h1>
        <hr style="color: #735e59; height:2px;">
        <div class="row mt-5 ms-5">
            <div class="col">
                <img src="https://www.senozmobilya.com/_next/static/media/landing-image.ac3ff1f4.jpg" width="350px"
                    height="193px" alt="decor">
                <hr style="color: #735e59; height:2px; width:350px;">
                <p><span style="color:#735e59;"><b>Project:</b></span> Takahashi Residence </p>
                <p><span style="color:#735e59;"><b>Year:</b></span> 2024 </p>
                <p><span style="color:#735e59;"><b>Type:</b></span> Residential </p>
            </div>
            <div class="col ">
                <img src="https://cdn.villa-finder.com/cache/fullSize/villas/lotus-beach-villa/lotus-beach-villa-lotusvilla11-5bfb677ed0af5.jpg"
                    width="350px" height="193px" alt="decor">
                <hr style="color: #735e59; height:2px; width: 350px;">
                <p><span style="color:#735e59;"><b>Project:</b></span> Takahashi Residence </p>
                <p><span style="color:#735e59;"><b>Year:</b></span> 2024 </p>
                <p><span style="color:#735e59;"><b>Type:</b></span> Residential </p>
            </div>
            <div class="col ">
                <img src="https://images.pexels.com/photos/7851904/pexels-photo-7851904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                    width="350px" height="193px" alt="decor">
                <hr style="color: #735e59; height:2px; width: 350px;">
                <p><span style="color:#735e59;"><b>Project:</b></span> Takahashi Residence </p>
                <p><span style="color:#735e59;"><b>Year:</b></span> 2024 </p>
                <p><span style="color:#735e59;"><b>Type:</b></span> Residential </p>
            </div>
        </div>

    </div> 
   
     
@stop