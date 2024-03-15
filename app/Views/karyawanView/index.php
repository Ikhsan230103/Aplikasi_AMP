<!-- app/Views/list_berobat.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Karyawan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>List Karyawan</h2><br>
        <a href="<?= base_url('create') ?>" class="btn btn-success btn-sm">Add New</a><br><br>
        <table class="table table-striped">
            <tr class="table-success">
                <th>ID Karyawan</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jenis Kelamin</th>
                <th>Olahraga Favorit</th>
                <th>Makanan Favorit</th>
                <th>Action</th>
            </tr>
            <?php foreach ($all_data_karyawan as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['umur'] ?></td>
                    <td><?= $row['jenis_kelamin'] ?></td>
                    <td><?= $row['olahraga_favorit'] ?></td>
                    <td><?= $row['makanan_favorit'] ?></td>
                    <td>
                        <a href="/edit/<?= $row["id"] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/delete/<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>