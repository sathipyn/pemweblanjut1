<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Konversi Nilai</h2>
        <?php if (session()->get('errors')) : ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php foreach (session()->get('errors') as $error) : ?>
                    <?= esc($error) ?><br>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <form action="<?= base_url('grade/convert') ?>" method="post">
            <div class="mb-3">
                <label for="partisipasi" class="form-label">Masukkan Nilai Partisipasi:</label>
                <input type="text" class="form-control" id="partisipasi" name="partisipasi" required>
            </div>
            <div class="mb-3">
                <label for="tugas" class="form-label">Masukkan Nilai Tugas:</label>
                <input type="text" class="form-control" id="tugas" name="tugas" required>
            </div>
            <div class="mb-3">
                <label for="uts" class="form-label">Masukkan Nilai UTS:</label>
                <input type="text" class="form-control" id="uts" name="uts" required>
            </div>
            <div class="mb-3">
                <label for="uas" class="form-label">Masukkan Nilai UAS:</label>
                <input type="text" class="form-control" id="uas" name="uas" required>
            </div>
            <button type="submit" class="btn btn-primary">Konversi</button>
        </form>
    </div>
</body>
</html>


