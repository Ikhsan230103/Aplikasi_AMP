<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Makanan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="card-body">
            <h2>Tambah Data Jenis Makanan</h2><br>
            <form action="<?= base_url('makanan/addNew_save') ?>" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Makanan</label>
                    <input type="text" class="form-control" id="jenis_makanan" placeholder="input makanan" name="jenis_makanan">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" onclick="window.history.back()">Close</button>
            </form>
        </div>
    </div>
</body>