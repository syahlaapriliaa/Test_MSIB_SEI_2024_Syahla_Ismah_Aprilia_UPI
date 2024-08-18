<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Proyek Baru</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Proyek Baru</h1>
        <form action="<?php echo base_url('proyek/store'); ?>" method="post">
            <div class="mb-3">
                <label for="nama_proyek" class="form-label">Nama Proyek</label>
                <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" required>
            </div>
            <div class="mb-3">
                <label for="customer" class="form-label">Customer</label>
                <input type="text" class="form-control" id="customer" name="customer" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
            </div>
            <div class="mb-3">
                <label for="pimpinan_proyek" class="form-label">Pimpinan Proyek</label>
                <input type="text" class="form-control" id="pimpinan_proyek" name="pimpinan_proyek" required>
            </div>
            <div class="mb-3">
                <label for="lokasi_id" class="form-label">Lokasi</label>
                <select class="form-control" id="lokasi_id" name="lokasi_id" required>
                    <?php foreach ($lokasi as $l) { ?>
                        <option value="<?php echo $l->id; ?>"><?php echo $l->nama_lokasi; ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
