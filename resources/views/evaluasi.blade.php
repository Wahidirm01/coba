<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Evaluasi</title>
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

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    h1 {color:#53ed9b}
    
    .card-header {
        background-color: #2CD3E1;
        color: black;
    }

    hr {color: #000000;}

    button.soall{
        margin-bottom: 5px;
        color :#001D3D;
        width:50px;
        font-size: 13px;
    }

    .aktif  {background-color: #1b263b;}

    .belum{
        background-color: red;
    }

    .sudah{
        background-color: #16e350;
    }

    body{
        background-image: url(img/bg.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: 100%;
        height: 100%;
        background-attachment: fixed;

    }
    </style>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
<script>
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyD-eQjb93hJT_ITukVQPyBAJA36ziiO5OI",
  authDomain: "sarah-4da40.firebaseapp.com",
  databaseURL: "https://sarah-4da40-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "sarah-4da40",
  storageBucket: "sarah-4da40.appspot.com",
  messagingSenderId: "851442974603",
  appId: "1:851442974603:web:61d509914c2d8807db398e",
  measurementId: "G-P0SVG0JEQ9"
};
    firebase.initializeApp(firebaseConfig);
    let database = firebase.database();

    function lanjutsoal(){
    
    let cek = 0;

    let isi_nama = document.getElementById('nama');
    let isi_kelas = document.getElementById('kelas');
    let isi_sekolah = document.getElementById('sekolah');

    if(isi_nama.value != ""){
        //alert("Lengkapi dulu identitas kamu");
        isi_nama.classList.remove("belumterisi");
        isi_nama = isi_nama.value;
        cek = cek + 1;
    } else {
        isi_nama.classList.add("belumterisi");
    }
    
    let kelasinput = "";
    if(isi_kelas.value == "0"){
        //alert("Lengkapi dulu identitas kamu");
        isi_kelas.classList.add("belumterisi");
    } else {
        if(isi_kelas.value == "VIIA"){
            kelasinput = "VII A";
            cek = cek + 1;
        }if(isi_kelas.value == "VIIB"){
            kelasinput = "VII B";
            cek = cek + 1;
        }
        isi_kelas.classList.remove("belumterisi");
    }

    let sekolahinput = "";
    if(isi_sekolah.value == "0"){
        //alert("Lengkapi dulu identitas kamu");
        isi_sekolah.classList.add("belumterisi");
    } else {
        if(isi_sekolah.value == "1"){
            sekolahinput = "SMP Negeri Banjarmasin";
            cek = cek + 1;
        }
        isi_sekolah.classList.remove("belumterisi");
    }

    if (cek == 3){
        localStorage.setItem("nama", isi_nama);
        localStorage.setItem("kelas", kelasinput);
        localStorage.setItem("sekolah", sekolahinput);

        document.getElementById('soaltampiltampil').hidden = false;
        document.getElementById('awalan').hidden = true;
    } else {
        alert("Lengkapi dulu identitas kamu");
    }

    // setting waktu kuis
    countDownDate = new Date().getTime();
           //waktu 30 menit
           // countDownDate += 1801000;
           //waktu 45 menit
           countDownDate += 2700000;
           //waktu 20 menit
           //countDownDate += 1201000;
           // countDownDate += 12000;
           //15 detik
           //countDownDate += 17000;
           var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                    
                // Perhitungan waktu untuk menit dan detik
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                if(minutes < 10){
                        minutes = "0"+minutes;
                }
                if(seconds < 10){
                        seconds = "0"+seconds;
                }
                document.getElementById("gwaktu").innerHTML ="<img src= '' style='width:10%'>";
                document.getElementById("waktutampil").innerHTML = minutes + " : " + seconds;
                
                if (distance < 0) {
                    clearInterval(x);
                    waktuhabis = 1;
                    document.getElementById("waktutampil").innerHTML = "Waktu Selesai";
                }
            }, 1000);

        //let tampilnama = document.getElementById('namatampil');
        // tampilnama.innerHTML = isi_nama;
    
}
    

let kunci = [];
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
                var data=JSON.parse(xhttp.responseText); 
                
                for (let i=0; i<data.length; i++) {
                    let soalNomorr = data[i].no;
                    let soalIsi = data[i].soal;
                    let opsiA = data[i].a;
                    let opsiB = data[i].b;
                    let opsiC = data[i].c;
                    let opsiD = data[i].d;
                    let jwbanbenar = data[i].benar;

                    // console.log(jwbanbenar);
                    let nomorsoaltampil = document.querySelectorAll("#nomornyanih");
                    nomorsoaltampil[i].innerHTML = soalNomorr;

                    let soalTampil = document.querySelectorAll("#soal");
                    soalTampil[i].innerHTML = soalIsi;

                    let a = document.querySelectorAll('#a');
                    a[i].innerHTML = opsiA;
                    
                    let b = document.querySelectorAll('#b');
                    b[i].innerHTML = opsiB;
                    
                    let c = document.querySelectorAll('#c');
                    c[i].innerHTML = opsiC;
                    
                    let d = document.querySelectorAll('#d');
                    d[i].innerHTML = opsiD;

                    // let jwbnbnr = document.querySelectorAll('#benar');
                    // jwbnbnr[i] = jwbanbenar;

                    let benarni = data[i].benar;
                    kunci.push(benarni);

                    // const kunci = [jwbanbenar];
                    // console.log(kunci);
                };
                //console.log(kunci);
            }
    };
    //script import json
    xhttp.open("GET", "evaluasi.json", true);
    xhttp.send();

    function set1(){
        let n1 = document.getElementById("nomor1");
        n1.className = n1.className.replace(" belum"," sudah");
    }

    function set2(){
        let n2 = document.getElementById("nomor2");
        n2.className = n2.className.replace(" belum"," sudah");
    }

    function set3(){
        let n3 = document.getElementById("nomor3");
        n3.className = n3.className.replace(" belum"," sudah");
    }

    function set4(){
        let n4 = document.getElementById("nomor4");
        n4.className = n4.className.replace(" belum"," sudah");
    }

    function set5(){
        let n5 = document.getElementById("nomor5");
        n5.className = n5.className.replace(" belum"," sudah");
    }

    function set6(){
        let n6 = document.getElementById("nomor6");
        n6.className = n6.className.replace(" belum"," sudah");
    }

    function set7(){
        let n7 = document.getElementById("nomor7");
        n7.className = n7.className.replace(" belum"," sudah");
    }

    function set8(){
        let n8 = document.getElementById("nomor8");
        n8.className = n8.className.replace(" belum"," sudah");
    }

    function set9(){
        let n9 = document.getElementById("nomor9");
        n9.className = n9.className.replace(" belum"," sudah");
    }

    function set10(){
        let n10 = document.getElementById("nomor10");
        n10.className = n10.className.replace(" belum"," sudah");
    }

    function set11(){
        let n11 = document.getElementById("nomor11");
        n11.className = n11.className.replace(" belum"," sudah");
    }

    function set12(){
        let n12 = document.getElementById("nomor12");
        n12.className = n12.className.replace(" belum"," sudah");
    }

    function set13(){
        let n13 = document.getElementById("nomor13");
        n13.className = n13.className.replace(" belum"," sudah");
    }

    function set14(){
        let n14 = document.getElementById("nomor14");
        n14.className = n14.className.replace(" belum"," sudah");
    }

    function set15(){
        let n15 = document.getElementById("nomor15");
        n15.className = n15.className.replace(" belum"," sudah");
    }

    function set16(){
        let n16 = document.getElementById("nomor16");
        n16.className = n16.className.replace(" belum"," sudah");
    }

    function set17(){
        let n17 = document.getElementById("nomor17");
        n17.className = n17.className.replace(" belum"," sudah");
    }

    function set18(){
        let n18 = document.getElementById("nomor18");
        n18.className = n18.className.replace(" belum"," sudah");
    }

    function set19(){
        let n19 = document.getElementById("nomor19");
        n19.className = n19.className.replace(" belum"," sudah");
    }

    function set20(){
        let n20 = document.getElementById("nomor20");
        n20.className = n20.className.replace(" belum"," sudah");
    }

    function nomor1(){
        document.getElementById("soal-1").hidden = false;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor2() {
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = false;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor3(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = false;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor4(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = false;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
   function nomor5(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = false;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor6(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = false;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor7(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = false;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor8(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = false;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor9(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = false;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor10(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = false;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor11(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = false;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor12(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = false;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor13(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = false;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor14(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = false;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor15(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = false;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor16(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = false;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor17(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = false;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor18(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = false;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor19(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = false;
        document.getElementById("soal-20").hidden = true;
    }
    function nomor20(){
        document.getElementById("soal-1").hidden = true;
        document.getElementById("soal-2").hidden = true;
        document.getElementById("soal-3").hidden = true;
        document.getElementById("soal-4").hidden = true;
        document.getElementById("soal-5").hidden = true;
        document.getElementById("soal-6").hidden = true;
        document.getElementById("soal-7").hidden = true;
        document.getElementById("soal-8").hidden = true;
        document.getElementById("soal-9").hidden = true;
        document.getElementById("soal-10").hidden = true;
        document.getElementById("soal-11").hidden = true;
        document.getElementById("soal-12").hidden = true;
        document.getElementById("soal-13").hidden = true;
        document.getElementById("soal-14").hidden = true;
        document.getElementById("soal-15").hidden = true;
        document.getElementById("soal-16").hidden = true;
        document.getElementById("soal-17").hidden = true;
        document.getElementById("soal-18").hidden = true;
        document.getElementById("soal-19").hidden = true;
        document.getElementById("soal-20").hidden = false;
    }
</script>
</head>



</head>

<body>
 
  <!--tampilan header-->
  <header id="header" class="header fixed-top d-flex align-items-center">
  </header>

   
  <main id="main" class="main">
    <section class="section dashboard">
      <div class="content-card2">
      <div id="layoutSidenav_content">
        <main>
            <!--Data Diri Siswa-->
            <div class="container-fluid" id="awalan">
                <div class="row">
                    <h1 class="text-center mt-4" style="color:black;"> Evaluasi</h1>
                
                    <div class="col-md-7 mt-2">
                      <div class="card" style="border-radius: 10px; border:5px solid #FFD93D;">
                          <div class="card-header text-center" style="border-bottom-width: 5px; border-bottom-color: #FFD93D; background-color: #2CD3E1; color:black;">
                            <b>Petunjuk Pengerjaan Evaluasi</b>
                          </div>
                          <div class="lh-lg card-body pb-5" style="text-align: justify; font-family:cursive  17px;">
                              <ul>
                                  <li>Bacalah doa sebelum mengerjakan soal </li>
                                  <li>Soal berupa pilihan ganda sebanyak 20 soal</li>
                                  <li>Durasi waktu pengerjaan sebanyak 45 menit</li>
                                  <li>Setelah menjawab semua soal silahkan klik submit agar mengetahui skor dari Evaluasi</li>
                                  <li>isi Biodata diri sebelum mengerjakan soal, kemudian klik mulai kuis untuk memulai</li>
                                </ul>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-5 mt-2">
                      <div class="card" style="border-radius: 10px; border:5px solid #FFD93D;">
                          <div class="card-header text-center" style="border-bottom-width: 5px; border-bottom-color: #FFD93D; background-color: #2CD3E1; color:black;">
                            <b>Biodata Diri Siswa</b>
                          </div>
                          <div class="card-body pb-3" style="text-align: justify; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 17px;">
                            <form>
                              <label for="nama" class="form-label">Nama Lengkap:</label>
                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                              <label for="sekolah" class=" mt-1">Kelas:</label>
                              <select class="form-select mt-1 mb-1" name="kelas" id="kelas">
                                  <option value="0">Pilih Kelas</option>
                                  <option value="VIIA">VII A</option>
                                  <option value="VIIB">VII B</option>
                              </select>
                              <label for="sekolah" class=" mt-1">Sekolah:</label>
                              <select class="form-select mt-1 mb-1" name="sekolah" id="sekolah">
                                  <option value="0">Pilih Sekolah</option>
                                  <option value="1">SMP Negeri Banjarmasin</option>
                              </select>
                              <hr>
                              <div class="text-center">
                                  <!-- <button type="button" class="btn btn-secondary bg-danger" button onclick="location.href='materiAlatUkur.html'" style="width:160px;">Kembali ke Materi</button> -->
                                  <button type="button" class="btn btn-primary bg-success" style="width:160px;" onclick="lanjutsoal()">Mulai Evaluasi</button>
                              </div>
                            </form>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>

            <!--Kuis 1-->
            <div class="container-fluid" id="soaltampiltampil" hidden>
                <div class="row">
                    <div class="col-sm-9">
                        <div class="container mt-2">
                            <div class="card shadow bg-body rounded border-light">
                                <div class="card-header border-light text-center">
                                        <p class="mt-3"><b>Evaluasi</b></p>
                                </div>
                                <div class="card-body">
                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-1">
                                        <div><p><img src="img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set1()">
                                                    <label class="form-check-label cursor" for="jawabansatua">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set1()">
                                                    <label class="form-check-label cursor" for="jawabansatub">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set1()">
                                                    <label class="form-check-label cursor" for="jawabansatuc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set1()">
                                                    <label class="form-check-label cursor" for="jawabansatud">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger text-white float-start"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success text-white float-end" id="lanjut2" onclick="nomor2()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-2" hidden>
                                        <div><p><img src="img/book1.png" style="width:25px;"/> <b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar dibawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.2.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanduaa" name="jawaban2" value="a" onclick="set2()">
                                                    <label class="form-check-label cursor" for="jawabanduaa">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanduab" name="jawaban2" value="b" onclick="set2()">
                                                    <label class="form-check-label cursor" for="jawabanduab">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanduac" name="jawaban2" value="c" onclick="set2()">
                                                    <label class="form-check-label cursor" for="jawabanduac" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanduad" name="jawaban2" value="d" onclick="set2()">
                                                    <label class="form-check-label cursor" for="jawabanduad">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor1()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor3()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-3" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar berikut ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.3.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabantigaa" name="jawaban3" value="a" onclick="set3()">
                                                    <label class="form-check-label cursor" for="jawabantigaa">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabantigab" name="jawaban3" value="b" onclick="set3()">
                                                    <label class="form-check-label cursor" for="jawabantigab">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabantigac" name="jawaban3" value="c" onclick="set3()">
                                                    <label class="form-check-label cursor" for="jawabantigac" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabantigad" name="jawaban3" value="d" onclick="set3()">
                                                    <label class="form-check-label cursor" for="jawabantigad">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor2()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor4()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-4" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar dibawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.4.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanempata" name="jawaban4" value="a" onclick="set4()">
                                                    <label class="form-check-label cursor" for="jawabanempata">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanempatb" name="jawaban4" value="b" onclick="set4()">
                                                    <label class="form-check-label cursor" for="jawabanempatb">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanempatc" name="jawaban4" value="c" onclick="set4()">
                                                    <label class="form-check-label cursor" for="jawabanempatc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanempatd" name="jawaban4" value="d" onclick="set4()">
                                                    <label class="form-check-label cursor" for="jawabanempatd">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor3()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor5()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-5" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar dibawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.5.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanlimaa" name="jawaban5" value="a" onclick="set5()">
                                                    <label class="form-check-label cursor" for="jawabanlimaa">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanlimab" name="jawaban5" value="b" onclick="set5()">
                                                    <label class="form-check-label cursor" for="jawabanlimab">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanlimac" name="jawaban5" value="c" onclick="set5()">
                                                    <label class="form-check-label cursor" for="jawabanlimac" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanlimad" name="jawaban5" value="d" onclick="set5()">
                                                    <label class="form-check-label cursor" for="jawabanlimad">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor4()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor6()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-6" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar dibawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.6.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanenama" name="jawaban6" value="a" onclick="set6()">
                                                    <label class="form-check-label cursor" for="jawabanenama">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanenamb" name="jawaban6" value="b" onclick="set6()">
                                                    <label class="form-check-label cursor" for="jawabanenamb">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanenamc" name="jawaban6" value="c" onclick="set6()">
                                                    <label class="form-check-label cursor" for="jawabanenamc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabanenamd" name="jawaban6" value="d" onclick="set6()">
                                                    <label class="form-check-label cursor" for="jawabanenamd">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor5()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor7()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-7" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar di bawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.7.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabantujuha" name="jawaban7" value="a" onclick="set7()">
                                                    <label class="form-check-label cursor" for="jawabantujuha">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabantujuhb" name="jawaban7" value="b" onclick="set7()">
                                                    <label class="form-check-label cursor" for="jawabantujuhb">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabantujuhc" name="jawaban7" value="c" onclick="set7()">
                                                    <label class="form-check-label cursor" for="jawabantujuhc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabantujuhd" name="jawaban7" value="d" onclick="set7()">
                                                    <label class="form-check-label cursor" for="jawabantujuhd">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor6()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor8()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-8" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar di bawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.8.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabandelapana" name="jawaban8" value="a" onclick="set8()">
                                                    <label class="form-check-label cursor" for="jawabandelapana">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabandelapanb" name="jawaban8" value="b" onclick="set8()">
                                                    <label class="form-check-label cursor" for="jawabandelapanb">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabandelapanc" name="jawaban8" value="c" onclick="set8()">
                                                    <label class="form-check-label cursor" for="jawabandelapanc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabandelapand" name="jawaban8" value="d" onclick="set8()">
                                                    <label class="form-check-label cursor" for="jawabandelapand">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor7()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor9()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-9" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Tentukan besar ∠AOB pada gambar di bawah ini! </p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.9.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansembilana" name="jawaban9" value="a" onclick="set9()">
                                                    <label class="form-check-label cursor" for="jawabansembilana">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansembilanb" name="jawaban9" value="b" onclick="set9()">
                                                    <label class="form-check-label cursor" for="jawabansembilanb">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansembilanc" name="jawaban9" value="c" onclick="set9()">
                                                    <label class="form-check-label cursor" for="jawabansembilanc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansembiland" name="jawaban9" value="d" onclick="set9()">
                                                    <label class="form-check-label cursor" for="jawabansembiland">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor8()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor10()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-10" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Dua pasang garis sejajar membentuk susunan seperti berikut.</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.10.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansepuluha" name="jawaban10" value="a" onclick="set10()">
                                                    <label class="form-check-label cursor" for="jawabansepuluha">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansepuluhb" name="jawaban10" value="b" onclick="set10()">
                                                    <label class="form-check-label cursor" for="jawabansepuluhb">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansepuluhc" name="jawaban10" value="c" onclick="set10()">
                                                    <label class="form-check-label cursor" for="jawabansepuluhc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansepuluhd" name="jawaban10" value="d" onclick="set10()">
                                                    <label class="form-check-label cursor" for="jawabansepuluhd">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger float-start text-white" onclick="nomor9()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success float-end text-white" onclick="nomor11()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                               <!--soal-->
                                               <div class="bag-kuis" id="soal-11" hidden>
                                                <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b></p>
                                                </div>
                                                <div class="soallll scrollkonten">
                                                    <p>
                                                        <span id="soal">
                                                    </p>
                                            <!--Jawaban-->
                                                    <div class="soalsoal" style="margin-left:2%">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set11()">
                                                            <label class="form-check-label cursor" for="jawabansatua">
                                                                <p id="a"><p><img src= "img/L3.11.a.jpg" style="width:200px;"/></p></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set11()">
                                                            <label class="form-check-label cursor" for="jawabansatub">
                                                                <p id="b"><p><img src= "img/L3.11.b.jpg" style="width:200px;"/></p></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set11()">
                                                            <label class="form-check-label cursor" for="jawabansatuc" >
                                                                <p id="c"><p><img src= "img/L3.11.c.jpg" style="width:200px;"/></p></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set11()">
                                                            <label class="form-check-label cursor" for="jawabansatud">
                                                                <p id="d"><p><img src= "img/L3.11.d.jpg" style="width:200px;"/></p></p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-danger text-white float-start" onclick="nomor10()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-success text-white float-end" onclick="nomor12()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-12" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Amati gambar di bawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.12.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set12()">
                                                    <label class="form-check-label cursor" for="jawabansatua">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set12()">
                                                    <label class="form-check-label cursor" for="jawabansatub">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set12()">
                                                    <label class="form-check-label cursor" for="jawabansatuc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set12()">
                                                    <label class="form-check-label cursor" for="jawabansatud">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger text-white float-start" onclick="nomor11()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success text-white float-end" onclick="nomor13()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                               <!--soal-->
                                               <div class="bag-kuis" id="soal-13" hidden>
                                                <div><p><img src= "img/book1.png"style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Amati gambar di bawah ini!</p>
                                                </div>
                                                <div style="text-align: center;">
                                                    <p><img src= "img/L3.13.jpg" style="width:350px;"/></p>
                                                </div>
                                                <div class="soallll scrollkonten">
                                                    <p>
                                                        <span id="soal">
                                                    </p>
                                            <!--Jawaban-->
                                                    <div class="soalsoal" style="margin-left:2%">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set13()">
                                                            <label class="form-check-label cursor" for="jawabansatua">
                                                                <p id="a"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set13()">
                                                            <label class="form-check-label cursor" for="jawabansatub">
                                                                <p id="b"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set13()">
                                                            <label class="form-check-label cursor" for="jawabansatuc" >
                                                                <p id="c"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set13()">
                                                            <label class="form-check-label cursor" for="jawabansatud">
                                                                <p id="d"></p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-danger text-white float-start" onclick="nomor12()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-success text-white float-end"  onclick="nomor14()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-14" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan gambar segitiga ABC di bawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.14.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set14()">
                                                    <label class="form-check-label cursor" for="jawabansatua">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set14()">
                                                    <label class="form-check-label cursor" for="jawabansatub">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set14()">
                                                    <label class="form-check-label cursor" for="jawabansatuc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set14()">
                                                    <label class="form-check-label cursor" for="jawabansatud">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger text-white float-start" onclick="nomor13()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success text-white float-end" onclick="nomor15()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                            <!--soal-->
                                               <div class="bag-kuis" id="soal-15" hidden>
                                                <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Segitiga ABC PQ sejajar AB. Jika PC = 2cm AP= 3 cm CQ= 4cm.</p>
                                                </div>
                                                <div style="text-align: center;">
                                                    <p><img src= "img/L3.15.jpg" style="width:350px;"/></p>
                                                </div>
                                                <div class="soallll scrollkonten">
                                                    <p>
                                                        <span id="soal">
                                                    </p>
                                            <!--Jawaban-->
                                                    <div class="soalsoal" style="margin-left:2%">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set15()">
                                                            <label class="form-check-label cursor" for="jawabansatua">
                                                                <p id="a"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set15()">
                                                            <label class="form-check-label cursor" for="jawabansatub">
                                                                <p id="b"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set15()">
                                                            <label class="form-check-label cursor" for="jawabansatuc" >
                                                                <p id="c"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set15()">
                                                            <label class="form-check-label cursor" for="jawabansatud">
                                                                <p id="d"></p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-danger text-white float-start" onclick="nomor14()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-success text-white float-end"  onclick="nomor16()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                     <!--soal-->
                                    <div class="bag-kuis" id="soal-16" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Amati Gambar di bawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.16.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set16()">
                                                    <label class="form-check-label cursor" for="jawabansatua">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set16()">
                                                    <label class="form-check-label cursor" for="jawabansatub">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set16()">
                                                    <label class="form-check-label cursor" for="jawabansatuc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set16()">
                                                    <label class="form-check-label cursor" for="jawabansatud">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger text-white float-start" onclick="nomor15()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success text-white float-end"  onclick="nomor17()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                            <!--soal-->
                                               <div class="bag-kuis" id="soal-17" hidden>
                                                <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar dibawah ini!</p>
                                                </div>
                                                <div style="text-align: center;">
                                                    <p><img src= "img/L3.17.jpg" style="width:350px;"/></p>
                                                </div>
                                                <div class="soallll scrollkonten">
                                                    <p>
                                                        <span id="soal">
                                                    </p>
                                            <!--Jawaban-->
                                                    <div class="soalsoal" style="margin-left:2%">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set17()">
                                                            <label class="form-check-label cursor" for="jawabansatua">
                                                                <p id="a"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set17()">
                                                            <label class="form-check-label cursor" for="jawabansatub">
                                                                <p id="b"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set17()">
                                                            <label class="form-check-label cursor" for="jawabansatuc" >
                                                                <p id="c"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set17()">
                                                            <label class="form-check-label cursor" for="jawabansatud">
                                                                <p id="d"></p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-danger text-white float-start" onclick="nomor16()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-success text-white float-end"  onclick="nomor18()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-18" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar di bawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                                <p><img src= "img/L3.18.jpg" style="width:350px;"/></p>
                                            </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set18()">
                                                    <label class="form-check-label cursor" for="jawabansatua">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set18()">
                                                    <label class="form-check-label cursor" for="jawabansatub">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set18()">
                                                    <label class="form-check-label cursor" for="jawabansatuc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set18()">
                                                    <label class="form-check-label cursor" for="jawabansatud">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger text-white float-start" onclick="nomor17()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success text-white float-end" onclick="nomor19()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                            <!--soal-->
                                               <div class="bag-kuis" id="soal-19" hidden>
                                                <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar dibawah ini!</p>
                                                </div>
                                                <div style="text-align: center;">
                                                    <p><img src= "img/L3.19.jpg" style="width:350px;"/></p>
                                                </div>
                                                <div class="soallll scrollkonten">
                                                    <p>
                                                        <span id="soal">
                                                    </p>
                                            <!--Jawaban-->
                                                    <div class="soalsoal" style="margin-left:2%">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set19()">
                                                            <label class="form-check-label cursor" for="jawabansatua">
                                                                <p id="a"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set19()">
                                                            <label class="form-check-label cursor" for="jawabansatub">
                                                                <p id="b"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set19()">
                                                            <label class="form-check-label cursor" for="jawabansatuc" >
                                                                <p id="c"></p>
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set19()">
                                                            <label class="form-check-label cursor" for="jawabansatud">
                                                                <p id="d"></p>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-danger text-white float-start" onclick="nomor18()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-success text-white float-end" onclick="nomor20()">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                    <!--soal-->
                                    <div class="bag-kuis" id="soal-20" hidden>
                                        <div><p><img src= "img/book1.png" style="width:25px;"/><b>&nbsp;Nomor&nbsp;<span id="nomornyanih"></span></b><br>Perhatikan Gambar dibawah ini!</p>
                                        </div>
                                        <div style="text-align: center;">
                                            <p><img src= "img/L3.20.jpg" style="width:350px;"/></p>
                                        </div>
                                        <div class="soallll scrollkonten">
                                            <p>
                                                <span id="soal">
                                            </p>
                                    <!--Jawaban-->
                                            <div class="soalsoal" style="margin-left:2%">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatua" name="jawaban1" value="a" onclick="set20()">
                                                    <label class="form-check-label cursor" for="jawabansatua">
                                                        <p id="a"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatub" name="jawaban1" value="b" onclick="set20()">
                                                    <label class="form-check-label cursor" for="jawabansatub">
                                                        <p id="b"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatuc" name="jawaban1" value="c" onclick="set20()">
                                                    <label class="form-check-label cursor" for="jawabansatuc" >
                                                        <p id="c"></p>
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" id="jawabansatud" name="jawaban1" value="d" onclick="set20()">
                                                    <label class="form-check-label cursor" for="jawabansatud">
                                                        <p id="d"></p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <button type="button" class="btn btn-danger text-white float-start" onclick="nomor19()"><i class="fa-sharp fa-solid fa-backward-step"></i> Sebelumnya</button>
                                            </div>
                                            <div class="col-6">
                                                <button type="button" class="btn btn-success text-white float-end disabled">Selanjutnya <i class="fa-sharp fa-solid fa-forward-step"></i></button>
                                            </div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="container mt-2">
                            <div class="timer text-center">
                                <h3>
                                    <span id="gwaktu"><img src= "../assets/pic/timerkuis.png"  style='width:10%'></span> 
                                    <span id="waktutampil">40 : 00</span>
                                </h3>
                                <!-- <h3 id="waktutampil" class="text-center m-2"></h3> -->
                            </div>
                            <div class="card shadow border-light">
                                <div class="card-header border-light text-center"><b>Nomor Soal</b></div>
                                <div class="card-body">
                                <center>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor1" onclick="nomor1()">1</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor2" onclick="nomor2()">2</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor3" onclick="nomor3()">3</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor4" onclick="nomor4()">4</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor5" onclick="nomor5()">5</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor6" onclick="nomor6()">6</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor7" onclick="nomor7()">7</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor8" onclick="nomor8()">8</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor9" onclick="nomor9()">9</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor10" onclick="nomor10()">10</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor11" onclick="nomor11()">11</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor12" onclick="nomor12()">12</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor13" onclick="nomor13()">13</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor14" onclick="nomor14()">14</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor15" onclick="nomor15()">15</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor16" onclick="nomor16()">16</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor17" onclick="nomor17()">17</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor18" onclick="nomor18()">18</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor19" onclick="nomor19()">19</button>
                                    <button type="button" style="color: white;" class="soall btn btn-outline-secondary belum" id="nomor20" onclick="nomor20()">20</button>
                                </center>
                                <br>
                                <p>Keterangan:</p>
                                <p><span class="btn p-1" style="background-color: red; color: white; width: 30%; border: 1px solid rgb(128, 128, 128);">merah </span> = Belum terjawab</p>
                                <p><span class="btn p-1" style="color:white;background-color:#25d24e; width: 30%; border: 1px solid grey;">Hijau </span> = Sudah terjawab</p>  
                                <p><a class="btn p-1" style="color:white; background-color: #25d24e; width: 100%; border-radius: 10px;"  data-bs-toggle="modal" data-bs-target="#exampleModal"><b style="font-weight :100px;font-size: larger;">Selesai</b></a></p>
                                
                            </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

            <!-- Dialog Kuis -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                        Apakah kamu yakin ingin menyelesaikan Evaluasi?
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="selesai()">Ya</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tampilan Hasil Skor -->
            <div class="container-fluid p-2 mt-2" id="bgskor" hidden>
                <center>
                    <div class="col-md-7 mt-3 datakuis">
                    <div class="card" style="border-radius:10px;border:4px solid #FFD93D;">
                        <div class="card-header text-center" style="border-bottom-width: 4px; border-bottom-color: #FFD93D;background-color: #2CD3E1; color:black;">
                          <h5>HASIL EVALUASI</h5>
                        </div>
                        <div class="lh-lg card-body p-5" style="text-align: justify;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 17px;">
                            <table class="table-borderless">
                                <tr>
                                    <td><p>Nama</p></td>
                                    <td><p style="margin-left: 25px;"> : </p></td>
                                    <td><p class="nama" style="margin-left: 15px;"></p></td>
                                </tr>
                                <tr>
                                    <td><p> Sekolah</p></td>
                                    <td><p style="margin-left: 25px;">: </p></td>
                                    <td><p class="sekolah" style="margin-left: 15px;"></p></td>
                                </tr>
                                <tr>
                                    <td><p>Kelas</p></td>
                                    <td><p style="margin-left: 25px;"> : </p></td>
                                    <td><p class="kelas" style="margin-left: 15px;"></p></td>
                                </tr>
                                <tr>
                                    <td><p>Hari, Tanggal</p></td>
                                    <td><p style="margin-left: 25px;"> : </p></td>
                                    <td><p class="haritgl" style="margin-left: 15px;"></p></td>
                                </tr>
                                <tr>
                                    <td><p>Waktu Selesai</p></td>
                                    <td><p style="margin-left: 25px;"> : </p></td>
                                    <td><p class="waktu" style="margin-left: 15px;"></p></td>
                                </tr>
                                <tr>
                                    <td><p>Nilai Evaluasi</p></td>
                                    <td><p style="margin-left: 25px;"> : </p></td>
                                    <td><p class="hasilskor" style="margin-left: 15px;"></p></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                  </div>
            </div>
                        </center>
                        <center>
                            <div id="ulang" class="mt-1" hidden>
                                <p style="font-weight: bold;"> Yah Nilai Kamu masih kurang kamu bisa mengulang evaluasi agar meningkat<img src="../assets/pic/sad.gif" width="3%" height="3%"></img></p>
                                <a class='btn btn-success mt-1' href='/kuis/evaluasi'>Ulang Evaluasi</a>
                            </div>
                            <div id="lulus" hidden>
                                <p style="font-weight: bold;">Yeay! Selamat Nilai kamu sudah memenuhi!<img src="../assets/pic/happy.gif" width="3%" height="3%"></p>
                                <a class='btn btn-success mt-2' href='/'>Selesasi</a>
                            </div>
                        </center>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    let waktuhabis = 0;
                
               
    var d = new Date();
    var t = d.getTime();
    var id = t;

    window.setTimeout("waktu()", 1000);
    
    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()", 1000);
        return (tanggal.getHours() + ":" + tanggal.getMinutes() + ":" + tanggal.getSeconds());
    }
   
    // harinya
    function hari() {
        tanggallengkap = new String();
        namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
        namahari = namahari.split(" ");
        namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
        namabulan = namabulan.split(" ");
        tgl = new Date();
        hari = tgl.getDay();
        tanggal = tgl.getDate();
        bulan = tgl.getMonth();
        tahun = tgl.getFullYear();
        tanggallengkap = namahari[hari] + ", " + tanggal + " " + namabulan[bulan] + " " + tahun;
        return (tanggallengkap);
    }

    // Fungsi Waktu Habis
    var xx = setInterval(function() {
        if(waktuhabis==1){
            clearInterval(xx);
            
        let isi = 0;
        let pilsiswainput = [];
        
        let pilsiswa = document.getElementsByTagName("input");

        for(let x=0; x<pilsiswa.length;x++){
            if(pilsiswa[x].checked) {
                pilsiswainput.push(pilsiswa[x].value);
            } else {

            }
            localStorage.setItem("jwbn", pilsiswainput);
        }    
            
            console.log("no");
            document.getElementById('bgskor').hidden = false;
            document.getElementById('soaltampiltampil').hidden = true;
            //var skorr = document.getElementById('bgskor');
            // skorr.className = skorr.className.replace(" hilang","")
            // document.getElementById('soaltampiltampil').className += " hilang";

                let hasil = 0;
                let benar = 0;
                let salah = kunci.length;
                for (let u = 0; u < pilsiswainput.length; u++) {
                    if(pilsiswainput[u] == kunci[u]){
                        hasil = hasil + 10;
                        benar = benar + 1;
                    } else {
                    hasil = hasil;
                }
            }
            console.log(hasil);
            //nilai disimpan ke local storage
            localStorage.setItem("skor",hasil);
            
            let waktuselesai = waktu();
            let hariselesai = hari();

            let nama = document.querySelector(".nama");
            let namasiswa = localStorage.getItem("nama").toUpperCase();
            nama.innerHTML = namasiswa;

            let kelas = document.querySelector(".kelas");
            let kelassiswa = localStorage.getItem("kelas");
            kelas.innerHTML = kelassiswa;

            let sekolah = document.querySelector(".sekolah");
            let sekolahsiswa = localStorage.getItem("sekolah");
            sekolah.innerHTML = sekolahsiswa;

            let waktuu = document.querySelector('.waktu');
            waktuu.innerHTML = waktuselesai;

            let harii = document.querySelector('.haritgl');
            harii.innerHTML = hariselesai;

            let jwbansiswa = localStorage.getItem("jwbn");

            let hslskor = document.querySelector('.hasilskor');
            let skorsiswa = localStorage.getItem("skor");
            hslskor.innerHTML = skorsiswa;

            if (skorsiswa < 70){
                
                document.getElementById('ulang').hidden = false;
                // var ulangg = document.querySelector('.ket_ulang');
                // ulangg.className = ulangg.className.replace(" hilang","");
                
            } else if (skorsiswa >= 70) {
                document.getElementById('lulus').hidden = false;
                //var materilanjut = document.querySelector('.tmblmatlan');
                //materilanjut.className = materilanjut.className.replace(" hilang"," ");
            }

            createTask(namasiswa, kelassiswa, sekolahsiswa, hariselesai, waktuselesai, pilsiswainput, skorsiswa);
        }
    }, 1000);

   function selesai(){
        let syaratselesai = 0;
        let isi = 0;
        let pilsiswainput = [];
        
        let pilsiswa = document.getElementsByTagName("input");
        let alertnyaa = document.querySelector(".modal");
        let soalnomor = document.querySelectorAll('.soall');

        for(let c=0; c < soalnomor.length; c++){
            if ((soalnomor[c].className.indexOf('belum') == -1)) {
                    syaratselesai = syaratselesai + 1;
            }
        }


        if(syaratselesai != kunci.length){
            alert("Masih ada soal yang belum terjawab, periksa kembali!");
        } else {
                
            for(let x=0; x<pilsiswa.length;x++){
            if(pilsiswa[x].checked) {
                pilsiswainput.push(pilsiswa[x].value);
            } else {

            }
            localStorage.setItem("jwbn", pilsiswainput);
            }    
            
            console.log("yes");

                let hasil = 0;
                let benar = 0;
                let salah = kunci.length;
                for (let u = 0; u < pilsiswainput.length; u++) {
                    if(pilsiswainput[u] == kunci[u]){
                        hasil = hasil + 34;
                        benar = benar + 1;
                    } else {
                    hasil = hasil;
                }
            }
            hasil = hasil - 2;
            console.log(hasil);
            //nilai disimpan ke local storage
            localStorage.setItem("skor",hasil);

            // var skorr = document.getElementById('bgskor');
            // skorr.className = skorr.className.replace(" hilang","");

            document.getElementById('bgskor').hidden = false;
            document.getElementById('soaltampiltampil').hidden = true;

            // document.getElementById('soaltampiltampil').className += " hilang";
            let waktuselesai = waktu();
            let hariselesai = hari();

            let nama = document.querySelector(".nama");
            let namasiswa = localStorage.getItem("nama").toUpperCase();
            nama.innerHTML = namasiswa;

            let kelas = document.querySelector(".kelas");
            let kelassiswa = localStorage.getItem("kelas");
            kelas.innerHTML = kelassiswa;

            let sekolah = document.querySelector(".sekolah");
            let sekolahsiswa = localStorage.getItem("sekolah");
            sekolah.innerHTML = sekolahsiswa;

            let waktuu = document.querySelector('.waktu');
            waktuu.innerHTML = waktuselesai;

            let harii = document.querySelector('.haritgl');
            harii.innerHTML = hariselesai;

            let jwbansiswa = localStorage.getItem("jwbn");

            let hslskor = document.querySelector('.hasilskor');
            let skorsiswa = localStorage.getItem("skor");
            hslskor.innerHTML = skorsiswa;

            if (skorsiswa < 70){
                
                document.getElementById('ulang').hidden = false;
                // var ulangg = document.querySelector('.ket_ulang');
                // ulangg.className = ulangg.className.replace(" hilang","");
                
            } else if (skorsiswa >= 70) {
                document.getElementById('lulus').hidden = false;
                //var materilanjut = document.querySelector('.tmblmatlan');
                //materilanjut.className = materilanjut.className.replace(" hilang"," ");
            }

            createTask(namasiswa, kelassiswa, sekolahsiswa, hariselesai, waktuselesai, pilsiswainput, skorsiswa);
            }

        }

        function createTask(namasiswa, kelassiswa, sekolahsiswa, hariselesai, waktuselesai, jwbansiswa, skorsiswa){
            id += 1;

            var dataevaluasi = {
                id : id,
                nama : namasiswa,
                kelas : kelassiswa,
                sekolah : sekolahsiswa,
                hari : hariselesai,
                jam : waktuselesai,
                jawab  : jwbansiswa,
                nilai : skorsiswa
            }

            var ref = database.ref("evaluasi/" + id);
            ref.set(dataevaluasi);
        }
</script>

      </main>
       

  <!--footer-->
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
  crossorigin="anonymous"></script>
        <!-- script main-->

   <!-- Bootstrap core JavaScript-->
   <script src="../../materi/sistem saraf/assets/vendor/jquery/jquery.min.js"></script>
   <script src="../../materi/sistem saraf/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        
  <script src="../../js/main.js"></script>
</body>

</html>