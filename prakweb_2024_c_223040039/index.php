<?php
include 'functions.php';

$bukuList = getBuku();

if (isset($_GET['search'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM buku 
              WHERE judul LIKE '%$keyword%' OR 
                    pengarang LIKE '%$keyword%' OR 
                    penerbit LIKE '%$keyword%' OR 
                    tahun_terbit LIKE '%$keyword%'";
    $bukuList = query($query);
}

if (isset($_GET['genre'])) {
    $genre = $_GET['genre'];
    $query = "SELECT * FROM buku WHERE genre = '$genre'";
    $bukuList = query($query);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <h1>Daftar Buku</h1>
                <p class="lead">Cari dan temukan buku favoritmu di perpustakaan kami</p>
            </div>
        </div>

        <div class="row justify-content-center search-bar">
            <div class="col-md-8">
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Cari Buku.." autofocus autocomplete="off" value="<?php echo isset($keyword) ? $keyword : ''; ?>">
                        <button class="btn btn-primary" name="search" type="submit" id="search-button">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <form action="" method="GET" class="my-3">
            <div class="form-group">
                <label for="genre" class="form-label">Filter berdasarkan Genre:</label>
                <select name="genre" id="genre" class="form-select" onchange="this.form.submit()">
                    <option value="" <?php echo (isset($_GET['genre']) && $_GET['genre'] == '') ? 'selected' : ''; ?>>Semua</option>
                    <option value="fiksi" <?php echo (isset($_GET['genre']) && $_GET['genre'] == 'fiksi') ? 'selected' : ''; ?>>Fiksi</option>
                    <option value="non-fiksi" <?php echo (isset($_GET['genre']) && $_GET['genre'] == 'non-fiksi') ? 'selected' : ''; ?>>Non-Fiksi</option>
                    <option value="novel" <?php echo (isset($_GET['genre']) && $_GET['genre'] == 'novel') ? 'selected' : ''; ?>>Novel</option>
                    <option value="sejarah" <?php echo (isset($_GET['genre']) && $_GET['genre'] == 'sejarah') ? 'selected' : ''; ?>>Sejarah</option>
                </select>
            </div>
        </form>



        <div class="row">
            <?php
            if (!empty($bukuList)) {
                foreach ($bukuList as $buku) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '    <div class="card card-custom">';
                    echo '        <div class="card-body">';
                    echo '            <h5 class="card-title">' . $buku['judul'] . '</h5>';
                    echo '            <p class="card-text">Pengarang: ' . $buku['pengarang'] . '</p>';
                    echo '            <p class="card-text">Penerbit: ' . $buku['penerbit'] . '</p>';
                    echo '            <p class="card-text">Tahun Terbit: ' . $buku['tahun_terbit'] . '</p>';
                    echo '            <p class="card-text">Genre: ' . $buku['genre'] . '</p>';
                    echo '        </div>';
                    echo '    </div>';
                    echo '</div>';
                }
            } else {
                echo '<div class="col-md-12 text-center">';
                echo '<div class="alert alert-warning">Tidak ada buku yang ditemukan</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>