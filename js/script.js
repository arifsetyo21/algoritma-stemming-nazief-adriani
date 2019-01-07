var kata = document.getElementById('kata');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

kata.addEventListener('keyup', function () {

  console.log(kata.value);
  // buat objek ajax
  // var xhr = new XMLHttpRequest();

  // // cek kesiapan ajax
  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = xhr.responseText;
  //   }
  // }

  // xhr.open('GET', 'ajax/katadasar.php?kata=' + kata.value, true);
  // xhr.send();
})