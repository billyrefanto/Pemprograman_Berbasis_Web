<?php
if (isset($_POST["action"])) {
	if ($_POST["action"] == "insert") {
		// ===========================================================================
		// PENILAIAN 
		// dengan menggunakan $_POST silahkan anda menangkap informasi
		// 1. title dan simpan ke variable title
		// 2. description dan simpan ke variable description
		// 3. cover dan simpan ke variable coverName engkap dengan format tanggal dan nama file
		// 4. lengkapi juga cover name dan lokasi file dalam variabel coverTempName dan ocverLocation

		// ===========================================================================
		// Silahkan tulis kode disini untuk melakukan perintah di atas
		$title = $_POST['title'];
		$description = $_POST['description'];
		$coverName = date('Ymd-His') . $_FILES['cover']['name'];
		$coverTempName = $_FILES['cover']['tmp_name'];
		$coverLocation = './img/' . $coverName;

		if (move_uploaded_file($coverTempName, $coverLocation)) {
			if (file_exists("./database/post.json")) {
				$fileData = file_get_contents('./database/post.json');
				$getData = json_decode($fileData, true);
				$newData = array(
					'title' => "$title",
					'description' => "$description",
					'cover' => "$coverName"
				);
				array_push($getData, $newData);
				$fileData = fopen("./database/post.json", "w") or die("404");
				fwrite($fileData, json_encode($getData, JSON_PRETTY_PRINT));
				fclose($fileData);
				echo "200";
			} else {
				$fileData = fopen("./database/post.json", "w") or die("404");
				$newData = array(
					'title' => "$title",
					'description' => "$description",
					'cover' => "$coverName"
				);
				fwrite($fileData, json_encode(array($newData)));
				fclose($fileData);
				echo "200";
			}
		} else {
			echo "404";
		}
	}

	// ==== > VIEW SYSTEM
	if ($_POST["action"] == "select") {
		if (!file_exists("./database/post.json")) {
			echo "404";
		} else {
			$fileData = file_get_contents('./database/post.json');
			$getData = json_decode($fileData, true);
			foreach ($getData as $viewData) {
				// ===========================================================================
				// PENILAIAN TEST JURNAL
				// untuk menangkap nilai dari file json, anda cukup memanfaatkan variable $viewData
				// lalu kemudian tampilkan informasi di deskripsi dibawah ini
				// 1. tampilkan cover
				// 2. tampilkan title
				// 3. tampilkan description dengan panjang karakter dari 0 - 256 karakter
				// ===========================================================================
?>
				<div class="w3-card">
					<!-- 
								// TAMPILKAN COVER, TITLE, DESCRIPTION disini 
							-->
					<div style="display:flex; justify-content: space-around; border-bottom: 1px solid grey; padding: 25px">
						<img src="../server/img/<?= $viewData['cover'] ?>" alt="img" style="max-width: 50%; margin-right: 50px">
						<h1 style="color: red"><?= $viewData['title'] ?></h1>
					</div>
					<p style="padding: 25px"><?= $viewData['description'] ?></p>
				</div>
<?php
			}
		}
	}
}
?>