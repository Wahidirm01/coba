
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Jawaban Kuis Siswa</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://kit.fontawesome.com/2a1b285329.js" 
	crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" 
  integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" 
  crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <link href="css/style.css" rel="stylesheet">

  <style>
    .table {
        margin-top: 20px;
        width: 100%;
        text-align: center;
    }
    .tulis{
        font-weight: bold;
    }
    .benar{
        background-color: green !important;
        color: white;
    }
    .salah{
        background-color: red !important;
        color: white;
    }
        @media(max-width: 1000px) {
        .card{
            width: fit-content;
        }
        
    }
</style>

</head>

<body>

  <!--tampilan header-->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <span class="d-none d-lg-block"><i class="fa-solid fa-chalkboard-user"></i> Halaman Guru</span>
      </a>
    </div>
  </header>

  <!-- tampilan sidebar-->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">    
        <li class="nav-item">
          <a class='nav-link ' href='/loginguru'>
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span>LOGOUT</span>
          </a>
        </li>

        <ul class="sidebar-nav" id="sidebar-nav">    
            <li class="nav-item">
              <a class='nav-link ' href='/nilaisiswa'>
                <i class="fa-solid fa-database"></i>
                <span>Nilai Siswa</span>
              </a>
            </li>

            <ul class="sidebar-nav" id="sidebar-nav">    
                <li class="nav-item">
                  <a class='nav-link ' href='/kuissiswa'>
                    <i class="fa-solid fa-database"></i>
                    <span style="color: rgb(9, 112, 21);">Jawaban Kuis Siswa</span>
                  </a>
                </li>

                <ul class="sidebar-nav" id="sidebar-nav">    
                    <li class="nav-item">
                      <a class='nav-link ' href='/evaluasisiswa'>
                        <i class="fa-solid fa-database"></i>
                        <span>Jawaban Evaluasi Siswa</span>
                      </a>
                    </li>
  </aside>

  <main id="main" class="main">
    <section class="section dashboard">
    <div id="layoutSidenav">
            <main>
                <div class="containter-fluid layanan pt-5 pb-5">
                    <div class="content-card">
                    <div class="container text-center">
                        <h1 class="display-3" id="layanan"></h1>
                        <div class="row p-2" style="margin-left: 1%;">
                            <center>
                                    <h1 class="mt-3">Hasil Jawaban Siswa</h1><br>
                                    <div class="col-lg-9 mt-2 d-inline-flex">
                                        <label for="kelas" class=" mt-1">Jawaban:</label>&nbsp;&nbsp;
                                        <select class="form-select mb-1" style="width: 50%;"  name="kuis" id="kuis">
                                            <option value="kuis1/">Kuis 1</option>
                                            <option value="kuis2/">Kuis 2</option>
                                        </select>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="kelas" class=" mt-1">Kelas:</label>&nbsp;&nbsp;
                                        <select class="form-select mb-1" style="width: 50%;" name="kelas" id="kelas">
                                            <option value="0">Pilih Kelas</option>
                                            <option value="1">VII A</option>
                                            <option value="2">VII B</option>
                                        </select> 
                                        &nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-primary me-2" style="width: 20%;" onclick="readlah()"><i class="fa-sharp fa-solid fa-magnifying-glass"></i> Search</a> &nbsp;
                                        <a class="btn btn-primary download" style="width: 25%;"><i class="fa-sharp fa-solid fa-download"></i> Download</a>
                                    </div>
                                </center>
                                                <br>
                                                <table id="table_wrapper" class="table table-responsive table-bordered table table-light">
                                                    <thead>
                                                        <tr>
                                                            <th class="ukr1" colspan="" rowspan="2">Nama</th>
                                                            <th class="ukr3" colspan="" rowspan="2">Skor</th>
                                                            <th class="ukr0" colspan="10">Jawaban</th>
                                                        </tr>
                                                        <tr>
<!--                           
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">1</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalToggledua" role="button">2</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalToggletiga" role="button">3</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalToggleempat" role="button">4</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalTogglelima" role="button">5</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalToggleenam" role="button">6</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalToggletujuh" role="button">7</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalToggledelapan" role="button">8</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalTogglesembilan" role="button">9</a></th>
                                                            <th><a class="btn btn-sm btn-primary" data-bs-toggle="modal" href="#exampleModalTogglesepuluh" role="button">10</a></th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody class="disini"></tbody>
                                                </table>

                        </div>
                    </div>
                </main>
            </div>
        </div>
          
    </section>

  </main>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous"></script>
  <script src="../new media 2/js/modul.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<script src="js/jawabankuis_siswa.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"></script>


<script>
  $(document).ready(function () {
    $('table_wrapper').DataTable();
});
</script>

</body>
</html>