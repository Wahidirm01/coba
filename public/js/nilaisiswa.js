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
  

let idnya = [];


let kuisnya = document.getElementById('kuis');


let tmp = document.querySelector('.lokasi');
tmp.innerHTML = "";
kelasnya = document.getElementById('kelas');
sekolah = document.getElementById('sekolah');
let kelasfix = '';
let sekolahfix = '';

let cek11 = 0;
// datahasil = kuisnya.value;


function cari() {
    datahasil = kuisnya.value;
    console.log(datahasil);
    var task = firebase.database().ref(datahasil);

    tmp.innerHTML = "";
    if (kelasnya.value == "1") {
        kelasfix = "VII A";
    } else if (kelasnya.value == "2") {
        kelasfix = "VII B";
    }

    if (kelasfix != '') {
        task.orderByChild("nama").on("child_added", function (data) {
            // task.on("child_added", function (data) {
            var taskvalue = data.val();
           
            if (kelasfix == taskvalue.kelas) {
                tmp.innerHTML += `<tr>
                            <td class="ukr1">${taskvalue.nama}</td>
                            <td class="ukr3">${taskvalue.kelas}</td>
                            <td class="ukr1">${taskvalue.sekolah}</td>
                            <td class="ukr3">${taskvalue.nilai}</td>
                            <td class="ukr2">${taskvalue.hari}</td>
                            <td class="ukr2">${taskvalue.jam}</td>
                            <td class="hps" onclick ="hapus(${taskvalue.id})"><button type="button" class="btn btn-outline-danger"><i class="fa-sharp fa-solid fa-user-minus"></i> Hapus</button></td>
                        </tr>`;
                idnya.push(taskvalue.id);
            }

            if (cek11 == 0) {
                let ssps = document.querySelector('.center');
                ssps.innerHTML += '';
                ssps.innerHTML += `<button type="button" class="btn btn-danger deleted"><i class="fas fa-user-minus"></i>&nbsp;&nbsp;Hapus Semua Data</button>`;
                cek11 += 1;

                let klikkkk = document.querySelector('.deleted');
                klikkkk.addEventListener('click', function () {
                    hapussemua(idnya);
                })
            }

        });
    } else {
        alert('Tentukan filter pencarian');
    }

}

window.onload = function () {
    kelasnya = document.getElementById('kelas');
    // sekolah = document.getElementById('sekolah');
    kuis = document.getElementById('kuis');
    kelasnya.value = value = "0";
    // sekolah.value = value = "0";
    // kuis.value = value = "kuis1/";
}

function hapus(id) {
    var yakin = confirm("Apakah kamu yakin ingin menghapus data ini?");
    if (yakin) {
        deletetask(id);
    } else {

    }
}

function deletetask(id) {
    var task = firebase.database().ref(datahasil + id);
    task.remove();
    tmp.innerHTML = "";
    cari();
}

function hapussemua(id) {
    var yakin = confirm("Apakah kamu yakin ingin menghapus semua data?");
    if (yakin) {
        deletesemua(id);
    } else {

    }
}

function deletesemua(id) {
    var task = firebase.database().ref(datahasil+id);
    task.remove();

    tmp.innerHTML = "";
    cari();
}

let download = document.querySelector('.download');
download.addEventListener('click', function () {
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('example');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'exported_table_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
})