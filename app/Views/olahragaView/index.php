<!-- app/Views/list_berobat.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Sport</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body>
    <div class="container mt-3">
        <h2>List Jenis Olahraga</h2><br>
        <a href="olahraga/create" class="btn btn-success btn-sm">Add New</a><br><br>
        <table class="table table-striped">
            <tr class="table-success">
                <th>ID Olahraga</th>
                <th>Jenis Olahraga</th>
                <th>Action</th>
            </tr>
            <?php foreach ($all_data_olahraga as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['jenis_olahraga'] ?></td>
                    <td>
                        <a href="olahraga/edit/<?= $row["id"] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="olahraga/delete/<?= $row['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>