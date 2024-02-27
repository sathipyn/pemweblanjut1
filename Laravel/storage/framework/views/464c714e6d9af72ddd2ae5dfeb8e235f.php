<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Konversi Nilai</h2>
        <form method="post" action="<?php echo e(route('convert')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="partisipasi">Masukkan Nilai Partisipasi:</label>
                <input type="text" class="form-control" id="partisipasi" name="partisipasi" value="<?php echo e(old('partisipasi')); ?>">
            </div>
            <div class="form-group">
                <label for="tugas">Masukkan Nilai Tugas:</label>
                <input type="text" class="form-control" id="tugas" name="tugas" value="<?php echo e(old('tugas')); ?>">
            </div>
            <div class="form-group">
                <label for="uts">Masukkan Nilai UTS:</label>
                <input type="text" class="form-control" id="uts" name="uts" value="<?php echo e(old('uts')); ?>">
            </div>
            <div class="form-group">
                <label for="uas">Masukkan Nilai UAS:</label>
                <input type="text" class="form-control" id="uas" name="uas" value="<?php echo e(old('uas')); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Konversi</button>
        </form>
        <?php if($errors->any()): ?>
            <div class="mt-4">
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\perhitungan_nilai_laravel\resources\views/index.blade.php ENDPATH**/ ?>