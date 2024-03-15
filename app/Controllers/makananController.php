<?php

namespace App\Controllers;

use App\Models\karyawanModel;
use App\Models\makananModel;
use App\Models\olahragaModel;

class makananController extends BaseController
{
    public function index()
    {
        $model = new makananModel();
        $all_data_makanan = $model->findAll();

        return view('makananView/index', ['all_data_makanan' => $all_data_makanan]);
    }

    public function addNew()
    {
        return view('makananView/create');
    }

    public function addNew_save()
    {
        $model = new makananModel();
        $data =
            [
                'id' => $this->request->getPost('id'),
                'jenis_makanan' => $this->request->getPost('jenis_makanan'),
            ];

        $model->insert($data);
        return redirect()->to(base_url('/makanan'));
    }

    public function edit($id)
    {
        $model = new makananModel();
        $data_makanan = $model->find($id);
        return view('makananView/edit', ['data_makanan' => $data_makanan]);
    }

    public function update()
    {
        // Validasi input jika diperlukan

        // Ambil data dari form
        $data = [
            'jenis_makanan' => $this->request->getPost('jenis_makanan'),
        ];

        // Update data kontak ke database
        $model = new makananModel();
        $model->where("id", $this->request->getPost('id'))->set($data)->update();


        // Redirect kembali ke halaman kontak
        return redirect()->to(base_url('/makanan'));
    }

    public function delete($id)
    {
        $model = new makananModel();
        $model->where("id", $id)->delete();

        return redirect()->to(base_url('/makanan'));
    }
}
