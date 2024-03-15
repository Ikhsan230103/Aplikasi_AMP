<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Makanan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Edit Data Makanan</h2><br>
        <form action="<?= base_url('makanan/update') ?>" method="post">
            <input type="hidden" name="id" value="<?= $data_makanan['id'] ?>">
            <div class="mb-3">
                <label for="nama">Jenis Makanan:</label>
                <input type="text" class="form-control" id="jenis_makanan" name="jenis_makanan" value="<?= $data_makanan['jenis_makanan'] ?>">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">Close</button>
        </form>
    </div>

</body>