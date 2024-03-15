<?php

namespace App\Controllers;

use App\Models\karyawanModel;

class karyawanController extends BaseController
{
    public function index()
    {
        $model = new karyawanModel();
        $all_data_karyawan = $model->findAll();

        return view('karyawanView/index', ['all_data_karyawan' => $all_data_karyawan]);
    }

    public function addNew()
    {
        return view('karyawanView/create');
    }

    public function addNew_save()
    {
        $model = new karyawanModel();
        $data =
            [
                'nama' => $this->request->getPost('nama'),
                'umur' => $this->request->getPost('umur'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
                'olahraga_favorit' => $this->request->getPost('olahraga_favorit'),
                'makanan_favorit' => $this->request->getPost('makanan_favorit'),
            ];

        $model->insert($data);
        return redirect()->to(base_url('/'));
    }

    public function edit($id)
    {
        $model = new karyawanModel();
        $data_karyawan = $model->find($id);
        return view('karyawanView/edit', ['data_karyawan' => $data_karyawan]);
    }

    public function update()
    {
        // Validasi input jika diperlukan

        // Ambil data dari form
        $data = [
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'olahraga_favorit' => $this->request->getPost('olahraga_favorit'),
            'makanan_favorit' => $this->request->getPost('makanan_favorit'),
        ];

        // Update data kontak ke database
        $model = new karyawanModel();
        $model->where("id", $this->request->getPost('id'))->set($data)->update();


        // Redirect kembali ke halaman kontak
        return redirect()->to(base_url('/'));
    }

    public function delete($id)
    {
        $model = new karyawanModel();
        $model->where("id", $id)->delete();

        return redirect()->to(base_url('/'));
    }
}
