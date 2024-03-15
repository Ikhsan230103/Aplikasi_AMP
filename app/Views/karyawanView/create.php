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
    <div class="container mt-5">
        <div class="card-body">
            <h2>Tambah Karyawan</h2><br>
            <form action="<?= base_url('addNew_save') ?>" method="post">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control" id="name" placeholder="input nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Umur</label>
                    <input type="text" class="form-control" id="umur" placeholder="input umur" name="umur">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Kelamin</label>
                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="pilih" selected disabled>Pilih jenis kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Olahraga Favorit</label>
                    <input type="text" class="form-control" id="olahraga_favorit" placeholder="input olahraga" name="olahraga_favorit">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Makanan Favorit</label>
                    <input type="text" class="form-control" id="makanan_favorit" placeholder="input makanan" name="makanan_favorit">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" onclick="window.history.back()">Close</button>
            </form>
        </div>
    </div>
</body>