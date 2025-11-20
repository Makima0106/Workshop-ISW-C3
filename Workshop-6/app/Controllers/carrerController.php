<?php

namespace App\Controllers;

use App\Models\CarrerModel;

class CarrerController extends BaseController
{
    public function index()
    {
        $model = new CarrerModel();
        $data['carrers'] = $model->findAll();
        return view('carrers/carrersView', $data);
    }

    public function create()
    {
        return view('carrers/create');
    }

    public function store()
    {
        $model = new CarrerModel();

        $model->save([
            'code'  => $this->request->getPost('code'),
            'name'  => $this->request->getPost('name'),
        ]);

        return redirect()->to('/carrers');
    }

    public function edit($id)
    {
        $model = new CarrerModel();
        $data['carrer'] = $model->find($id);
        return view('carrers/edit', $data);
    }

    public function update($id)
    {
        $model = new CarrerModel();

        $model->update($id, [
            'code'  => $this->request->getPost('code'),
            'name'  => $this->request->getPost('name'),
        ]);

        return redirect()->to('/carrers');
    }

    public function delete($id)
    {
        $model = new CarrerModel();
        $model->delete($id);
        return redirect()->to('/carrers');
    }
}