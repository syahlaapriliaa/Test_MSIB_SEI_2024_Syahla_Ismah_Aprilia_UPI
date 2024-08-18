<!DOCTYPE html>
<html>
<head>
    <title>Daftar Lokasi</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Lokasi</h2>
        <a href="<?php echo site_url('lokasi/tambah'); ?>" class="btn btn-primary mb-3">Tambah Lokasi</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Lokasi</th>
                    <th>Negara</th>
                    <th>Provinsi</th>
                    <th>Kota</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lokasi as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['nama_lokasi']; ?></td>
                        <td><?php echo $item['negara']; ?></td>
                        <td><?php echo $item['provinsi']; ?></td>
                        <td><?php echo $item['kota']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
