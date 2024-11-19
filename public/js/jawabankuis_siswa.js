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

  // Initialize Firebase
//   const app = initializeApp(firebaseConfig);
  firebase.initializeApp(firebaseConfig);

  let kmplanId = [];


let kuisnya = document.getElementById('kuis');


let tmp = document.querySelector('.disini');
tmp.innerHTML = "";
kelasnya = document.getElementById('kelas');
// sekolah = document.getElementById('sekolah');
let kelasfix = '';
// let sekolahfix = '';

let cek11 = 0;
kuisfix = kuisnya.value;


function readlah() {
    kuisfix = kuisnya.value;
    console.log(kuisfix);
    var task = firebase.database().ref(kuisfix);

    tmp.innerHTML = "";
    if (kelasnya.value == "1") {
        kelasfix = "VII A";
    } else if (kelasnya.value == "2") {
        kelasfix = "VII B";
    }

    let jwbfixx = [];

    let jwb1 = ["b", "c", "b", "d", "a", "c", "b", "c", "c", "d"]; // jawaban kuis 1
    if (kuisfix == "kuis1/") {
        let hhh = `<tr><td class="table-info  tulis" colspan="2">Kunci Jawaban </td>`;
        for (let i = 0; i < jwb1.length; i++) {
            hhh += `<td class="table-info"> ${jwb1[i]}</td>`;
        }
        hhh += `</tr>`;
        tmp.innerHTML += hhh;
        jwbfixx = jwb1;
    }

    let jwb2 = ["b", "a", "a", "d", "a", "c", "b", "b", "b", "a"]; // jawaban latihan 2
    if (kuisfix == "kuis2/") {
        let hhh = `<tr><td class="table-info  tulis" colspan="2">Kunci Jawaban </td>`;
        for (let i = 0; i < jwb2.length; i++) {
            hhh += `<td class="table-info"> ${jwb2[i]}</td>`;
        }
        hhh += `</tr>`;
        tmp.innerHTML += hhh;
        jwbfixx = jwb2;
    }

    let jwb3 = ["d", "a", "a", "a", "b", "a", "a", "a", "c", "b"]; // jawaban latihan 3
    if (kuisfix == "kuis3/") {
        let hhh = `<tr><td class="table-info  tulis" colspan="2">Kunci Jawaban </td>`;
        for (let i = 0; i < jwb3.length; i++) {
            hhh += `<td class="table-info"> ${jwb3[i]}</td>`;
        }
        hhh += `</tr>`;
        tmp.innerHTML += hhh;
        jwbfixx = jwb3;
    }

    let evaluasi = ["d", "d", "c", "d", "b", "b", "b", "d", "b", "d", "b", "b", "c", "c", "c", "a", "a", "b", "d", "d"]; // jawaban evaluasi
    if (kuisfix == "evaluasi/") {
        let hhh = `<tr><td class="table-info  tulis" colspan="2">Kunci Jawaban </td>`;
        for (let i = 0; i < evaluasi.length; i++) {
            hhh += `<td class="table-info"> ${evaluasi[i]}</td>`;
        }
        hhh += `</tr>`;
        tmp.innerHTML += hhh;
        jwbfixx = evaluasi;
    }

    if (kelasfix != '') {
        task.orderByChild("nama").on("child_added", function (data) {
            // task.on("child_added", function (data) {
            var taskvalue = data.val();

            console.log(taskvalue);

            if (kelasfix == taskvalue.kelas) {
                let mm = '';
                mm = `<tr><td >${taskvalue.nama}</td><td >${taskvalue.nilai}</td>`;
                // console.log(taskvalue.jawabsiswa[0]);


                for (let i = 0; i < jwbfixx.length; i++) {
                    //console.log(taskvalue.jawab[i]);
                    if(typeof taskvalue.jawab[i] === 'undefined'){
                        mm += `<td class="salah">X</td>`;
                    }else{
                        if (taskvalue.jawab[i] == jwbfixx[i]) {
                            mm += `<td class="benar">${taskvalue.jawab[i]}</td>`;
                        } else {
                            mm += `<td class="salah">${taskvalue.jawab[i]}</td>`;                        
                        }
                    }
                }
                mm += `</tr>`;
                tmp.innerHTML += mm;
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

let download = document.querySelector('.download');
download.addEventListener('click', function () {
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_wrapper');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'exported_table_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
})