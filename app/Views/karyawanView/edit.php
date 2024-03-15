<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Karyawan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Edit Karyawan</h2><br>
        <form action="<?= base_url('update') ?>" method="post">
            <input type="hidden" name="id" value="<?= $data_karyawan['id'] ?>">
            <div class="mb-3">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data_karyawan['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="umur">Umur:</label>
                <input type="text" class="form-control" id="umur" name="umur" value="<?= $data_karyawan['umur'] ?>">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin">Jenis Kelamin:</label>

                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" value="<?= $data_karyawan['jenis_kelamin'] ?>">
                    <option value="pilih" selected disabled>Pilih jenis kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="olahraga_favorit">Olahraga Favorit:</label>
                <input type="text" class="form-control" id="olahraga_favorit" name="olahraga_favorit" value="<?= $data_karyawan['olahraga_favorit'] ?>">
            </div>
            <div class="mb-3">
                <label for="makanan_favorit">Makanan Favorit:</label>
                <input type="text" class="form-control" id="makanan_favorit" name="makanan_favorit" value="<?= $data_karyawan['makanan_favorit'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">Close</button>
        </form>
    </div>

</body>