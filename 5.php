<?php

function countChar($text, $word)
{
    echo "<script>alert('Akan diperoleh result: ".substr_count($text, $word)."')</script>";
}


if (!empty($_GET['a']) && !empty($_GET['b'])) {
    countChar($_GET['a'], $_GET['b']);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>5. Menghitung karakter pada String</title>
  </head>
  <body>
    <div class="container" style="padding:100px">
			</form>
			<div class="row justify-content-md-center">
				<div class="col-md-6">
					<form>
						<div class="form-group">
							<label for="a">Text/String</label>
							<input type="text" class="form-control" id="a" placeholder="Masukkan String" name="a">
						</div>
						<div class="form-group">
							<label for="b">Karakter</label>
							<input type="text" class="form-control" id="b" placeholder="Masukkan Karakter" name="b">
						</div>
						<button type="submit" class="btn btn-primary">Hitung</button>
					</form>
				</div>
			</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
