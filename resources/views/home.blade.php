<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- --------- CSS ---------- -->
    <link rel="stylesheet" href="{{asset('css/style_dashboard.css') }}">

    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">

    <title>Beranda</title>
</head>
<style>
body{
        background-image: url(img/kebun.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100%;
        height: 100%;
        background-attachment: fixed;

    }
</style>
<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
            
        </div>
        <div id="nav-logo">
            <a href='/loginguru' style='color:black'>
                <img src="{{ asset('img/guruhal.png') }}" alt="Logo" class="logo-img">
            </a>
        </div>
      </nav>


    <!-- -------------- MAIN ---------------- -->
    <main class="wrapper">
       <!-- -------------- FEATURED BOX ---------------- -->
       <section class="featured-box" id="beranda">
          <div class="featured-text">
            <div class="featured-text-card">
                <span>MEDIA PEMBELAJARAN INTERAKTIF</span>
            </div>
            <div class="featured-name">
                <p>Materi <span class="typedText"></span></p>
            </div>
            <div class="featured-text-info">
                <p>MATEMATIKA  |   Untuk SMP Kelas VII
                </p>
            </div>
            
          </div>
          <div class="featured-image">
            <div class="image">
                <img src="{{ asset('img/dashboard.png') }}" alt="avatar">
            </div>
          </div>

       </section>
       
       <!-- -------------- PROJECT BOX ---------------- -->

       <section class="section" id="menu">
            <div class="top-header">
                <h1>Menu</h1>
            </div>
            <div class="project-container">
                <div class="project-box" data-url="/informasi" onclick="redirectToPage(this)">
                    <i class="uil uil-info-circle"></i>
                    <h3>Informasi</h3>
                </div>
                <div class="project-box" data-url="#" onclick="redirectToPage(this)">
                    <i class="uil uil-book-alt"></i>
                    <h3>Materi</h3>
                </div>
                <div class="project-box" data-url="/tujuan" onclick="redirectToPage(this)">
                    <i class="uil uil-lightbulb-alt"></i>
                    <h3>CP & ATP</h3>
                </div>
            </div>
        </section>


    </main>


    <!-- --------------- FOOTER --------------- -->
    <footer>       
        <div class="bottom-footer">
            <p>Siti Sarah @2024 Media Pembelajaran Interaktif Materi Kesebangunan</p>
        </div>
    </footer>

    </div>



    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

       <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="{{ asset('js/dashboard.js') }}"></script>

    

</body>
</html>
