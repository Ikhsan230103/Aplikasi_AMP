<?php

namespace App\Controllers;

use App\Models\karyawanModel;
use App\Models\olahragaModel;

class olahragaController extends BaseController
{
    public function index()
    {
        $model = new olahragaModel();
        $all_data_olahraga = $model->findAll();

        return view('olahragaView/index', ['all_data_olahraga' => $all_data_olahraga]);
    }

    public function addNew()
    {
        return view('olahragaView/create');
    }

    public function addNew_save()
    {
        $model = new olahragaModel();
        $data =
            [
                'id' => $this->request->getPost('id'),
                'jenis_olahraga' => $this->request->getPost('jenis_olahraga'),
            ];

        $model->insert($data);
        return redirect()->to(base_url('/olahraga'));
    }

    public function edit($id)
    {
        $model = new olahragaModel();
        $data_olahraga = $model->find($id);
        return view('olahragaView/edit', ['data_olahraga' => $data_olahraga]);
    }

    public function update()
    {
        // Validasi input jika diperlukan

        // Ambil data dari form
        $data = [
            'jenis_olahraga' => $this->request->getPost('jenis_olahraga'),
        ];

        // Update data kontak ke database
        $model = new olahragaModel();
        $model->where("id", $this->request->getPost('id'))->set($data)->update();


        // Redirect kembali ke halaman kontak
        return redirect()->to(base_url('/olahraga'));
    }

    public function delete($id)
    {
        $model = new olahragaModel();
        $model->where("id", $id)->delete();

        return redirect()->to(base_url('/olahraga'));
    }
}
