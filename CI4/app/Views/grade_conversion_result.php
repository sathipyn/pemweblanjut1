<!DOCTYPE html>
<html>
<head>
    <title>Hasil Konversi Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Hasil Konversi Nilai</h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nilai Akhir (NA)</th>
                            <th>Nilai Huruf (NH)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $na ?></td>
                            <td><?= $nh ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="<?= base_url('GradeConversionController') ?>" class="btn btn-primary">Kembali</a>
    </div>
</body>
</html>
