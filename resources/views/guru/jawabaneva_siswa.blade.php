<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jawaban Evaluasi Siswa</title>
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
                  <span>Jawaban Kuis Siswa</span>
                </a>
              </li>

              <ul class="sidebar-nav" id="sidebar-nav">    
                  <li class="nav-item">
                    <a class='nav-link ' href='/evaluasisiswa'>
                      <i class="fa-solid fa-database"></i>
                      <span style="color: rgb(9, 112, 21);">Jawaban Evaluasi Siswa</span>
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
                                    <h1 class="mt-3">Jawaban Evaluasi Siswa</h1><br>
                                    <div class="col-lg-9 mt-2 d-inline-flex">
                                        <label for="kelas" class=" mt-1">Jawaban:</label>&nbsp;&nbsp;
                                        <select class="form-select mb-1" style="width: 50%;"  name="kuis" id="kuis">
                                            <option value="evaluasi/">Evaluasi</option>
                                        </select>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <label for="kelas" class=" mt-1">Kelas:</label>&nbsp;&nbsp;
                                        <select class="form-select mb-1" style="width: 50%;" name="kelas" id="kelas">
                                            <option value="0">Pilih Kelas</option>
                                            <option value="1">VII A</option>
                                            <option value="2">VII B</option>
                                        </select> 
                                        &nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-primary me-2" style="width: 10%;" onclick="readlah()"><i class="fa-sharp fa-solid fa-magnifying-glass"></i> Search</a> &nbsp; &nbsp;
                                        <a class="btn btn-primary download" style="width: 25%;"><i class="fa-sharp fa-solid fa-download"></i> Download</a>
                                    </div>
                                </center>
                                                <br>
                                <div class="table-responsive">
                                                <table id="table_wrapper" class="table table-responsive table-bordered table table-light">
                                                    <thead>
                                                        <tr>
                                                            <th class="ukr1" colspan="" rowspan="2">Nama</th>
                                                            <th class="ukr3" colspan="" rowspan="2">Skor</th>
                                                            <th class="ukr0" colspan="20">Kunci Jawaban</th>
                                                        </tr>
                                                      <tr>
                                                        <th>1</th>
                                                        <th>2</th>
                                                        <th>3</th>
                                                        <th>4</th>
                                                        <th>5</th>
                                                        <th>6</th>
                                                        <th>7</th>
                                                        <th>8</th>
                                                        <th>9</th>
                                                        <th>10</th>
                                                        <th>11</th>
                                                        <th>12</th>
                                                        <th>13</th>
                                                        <th>14</th>
                                                        <th>15</th>
                                                        <th>16</th>
                                                        <th>17</th>
                                                        <th>18</th>
                                                        <th>19</th>
                                                        <th>20</th>
                                                      </tr>  

                                                    </thead>
                                                    <tbody class="disini"></tbody>
                                                </table>
                                </div>
                                                <center class="ha">
                                                <div class=" clear"></div>
                                                </center> 
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script>
            // function halkuis(){
            //     document.getElementById("halkuis").hidden = false;
            //     document.getElementById("haleva").hidden = true;
            // }

            // function eva(){
            //     document.getElementById("halkuis").hidden = true;
            //     document.getElementById("haleva").hidden = false;
            // }
        </script>
        <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-database.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script src="js/jawabankuis_siswa.js"></script>
    </body>
</html>
