<!DOCTYPE html>
<html>
<head>
    <title>Tambah Proyek</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Proyek</h2>
        <form action="<?php echo site_url('proyek/tambah'); ?>" method="post">
            <div class="form-group">
                <label for="nama_proyek">Nama Proyek</label>
                <input type="text" class="form-control" id="nama_proyek" name="nama_proyek" required>
            </div>
            <div class="form-group">
                <label for="customer">Customer</label>
                <input type="text" class="form-control" id="customer" name="customer" required>
            </div>
            <div class="form-group">
                <label for="tgl_mulai">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" required>
            </div>
            <div class="form-group">
                <label for="tgl_selesai">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" required>
            </div>
            <div class="form-group">
                <label for="pimpinan_proyek">Pimpinan Proyek</label>
                <input type="text" class="form-control" id="pimpinan_proyek" name="pimpinan_proyek" required>
            </div>
            <div class="form-group">
                <label for="lokasi_id">Lokasi</label>
                <select class="form-control" id="lokasi_id" name="lokasi_id" required>
                    <?php foreach ($lokasi as $item): ?>
                        <option value="<?php echo $item['id']; ?>"><?php echo $item['nama_lokasi']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>
