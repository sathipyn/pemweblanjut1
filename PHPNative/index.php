<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Konversi Nilai</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label>Masukkan Nilai Partisipasi:</label>
                <input type="text" name="partisipasi" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Masukkan Nilai Tugas:</label>
                <input type="text" name="tugas" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Masukkan Nilai UTS:</label>
                <input type="text" name="uts" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Masukkan Nilai UAS:</label>
                <input type="text" name="uas" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Konversi</button>
        </form>
        <br>
        <?php
        if(isset($_POST['submit'])){
            include 'Nilai.php';
            include 'KonversiNilai.php';

            $nilai = new Nilai($_POST['partisipasi'], $_POST['tugas'], $_POST['uts'], $_POST['uas']);
            $na = $nilai->hitungNA();
            $nh = KonversiNilai::konversi($na);

            echo "<div class='alert alert-success'>Nilai Akhir: $na <br> Nilai Huruf: $nh</div>";
        }
        ?>
    </div>
</body>
</html>
