<?php
require_once('enhanced_CS.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>STEMMING</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="flexsearch" style="margin: auto">
	<div class="flexsearch--wrapper">
		<h3>PENCARIAN KATA DASAR DENGAN ALGORITMA NAZIEF DAN ANDRIANI</h3>
		<form class="flexsearch--form" method="post" action="">
		<div class="flexsearch--input-wrapper">
		<input class="flexsearch--input" style="text-align: center;" type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>" autocomplete="off">
		</div>
		<div class="flexsearch--input-wrapper">
			<h2>Hasil Stemm</h2>
			<p id="container" class="flexsearch--input" style="margin: auto; margin-top: 20px;  padding-top: 10px;"></p>
		</div>
		<!-- <input class="btnForm flexsearch--submit" type="submit" name="submit" value="&#10140;"/> -->
		</form>
	</div>
</div>
</body>
<script>
var kata = document.getElementById('kata');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

kata.addEventListener('keyup', function () {

  // console.log(kata.value);
  // buat objek ajax
  var xhr = new XMLHttpRequest();

  // // cek kesiapan ajax
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  }

  xhr.open('GET', 'ajax/katadasar.php?kata=' + kata.value, true);
  xhr.send();
})
</script>
</html>