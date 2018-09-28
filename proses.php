<!DOCTYPE html>
<html lang="en">
<body>
	<form action="#" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				Hobi : <br/>
				<input type="checkbox" name="hobi[]" value="berenang">Berenang<br/>
				<input type="checkbox" name="hobi[]" value="hiking">Hiking<br/>
				<input type="checkbox" name="hobi[]" value="diving">Diving<br/>
				<input type="checkbox" name="hobi[]" value="mancing">Mancing<br/>
				<input type="checkbox" name="hobi[]" value="nonton film">Nonton Film<br/><br/>
				<input type="reset" name="delete" value="Delete Hobi"><br/><br/>
			</tr>
			<tr>
				Genre Film Favorit : <br/>
				<input type="checkbox" name="genre[]" value="horor">Horor<br/>
				<input type="checkbox" name="genre[]" value="action">Action<br/>
				<input type="checkbox" name="genre[]" value="anime">Anime<br/>
				<input type="checkbox" name="genre[]" value="thiller">Thiller<br/>
				<input type="checkbox" name="genre[]" value="animasi">Animasi<br/><br/>
				<input type="reset" name="delete" value="Delete Genre"><br/><br/>
			</tr>
			<tr>
				Tujuan Travelling : <br/>
				<input type="checkbox" name="tujuan[]" value="bali">Bali<br/>
				<input type="checkbox" name="tujuan[]" value="raja ampat">Raja Ampat<br/>
				<input type="checkbox" name="tujuan[]" value="pulau derawan">Pulau Derawan<br/>
				<input type="checkbox" name="tujuan[]" value="bangka belitung">Bangka Belitung<br/>
				<input type="checkbox" name="tujuan[]" value="labuan bajo">Labuan Bajo<br/><br/>
				<input type="reset" name="delete" value="Delete Tujuan"><br/><br/>
			</tr>
			<tr>
			    Select image to upload:<br/>
			    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
			    <input type="submit" value="Upload Image" name="submit"><br/><br/>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" value="kirim"/></td>
			</tr>	
		</table>
	</form>
	<hr/>
</body>
</html>

<br/>
<?php 
if (isset($_POST ['kirim'])) {
	$data=$_POST["hobi"];
	foreach ($data as $nilai) {
		echo "Hobi Yang di pilih = ".$nilai."<br/>";
	}
}

if (isset($_POST ['kirim'])) {
	$data1=$_POST["genre"];
	foreach ($data1 as $nilai1) {
		echo "Genre Film Favorit = ".$nilai1."<br/>";
	}
}

if (isset($_POST ['kirim'])) {
	$data2=$_POST["tujuan"];
	foreach ($data2 as $nilai2) {
		echo "Tujuan Travelling Mu = ".$nilai2."<br/>";
	}
}
?>
