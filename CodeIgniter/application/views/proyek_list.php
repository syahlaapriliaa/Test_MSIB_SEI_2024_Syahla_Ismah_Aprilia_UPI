<!DOCTYPE html>
<html>
<head>
    <title>Daftar Proyek</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .button-group {
            display: flex;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Daftar Proyek</h2>
        <div class="button-group mb-3">
            <a href="<?php echo site_url('lokasi/tambah'); ?>" class="btn btn-success">Tambah Lokasi</a>
            <a href="<?php echo site_url('proyek/tambah'); ?>" class="btn btn-primary">Tambah Proyek</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Proyek</th>
                    <th>Customer</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Pimpinan Proyek</th>
                    <th>Lokasi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($proyek as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['nama_proyek']; ?></td>
                        <td><?php echo $item['customer']; ?></td>
                        <td><?php echo $item['tgl_mulai']; ?></td>
                        <td><?php echo $item['tgl_selesai']; ?></td>
                        <td><?php echo $item['pimpinan_proyek']; ?></td>
                        <td><?php echo $item['nama_lokasi']; ?></td>
                        <td>
                            <a href="<?php echo site_url('proyek/edit/'.$item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('proyek/hapus/'.$item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
