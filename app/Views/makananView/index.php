<!-- app/Views/list_berobat.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Food</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>List Jenis Makanan</h2><br>
        <a href="makanan/create" class="btn btn-success btn-sm">Add New</a><br><br>
        <table class="table table-striped">
            <tr class="table-success">
                <th>Id Makanan</th>
                <th>Jenis Makanan</th>
                <th>Action</th>
            </tr>
            <?php foreach ($all_data_makanan as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['jenis_makanan'] ?></td>
                    <td>
                        <a href="makanan/edit/<?= $row["id"] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="makanan/delete/<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>