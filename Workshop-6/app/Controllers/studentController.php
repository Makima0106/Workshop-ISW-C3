<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\CarrerModel;

class StudentController extends BaseController
{
    public function index()
    {
        $model = new StudentModel();
        $data['students'] = $model->findAll();
        return view('students/studentsView', $data);
    }

    public function create()
    {
        $model = new CarrerModel();
        $data['carrers'] = $model->findAll();
        return view('students/create', $data);
    }

    public function store()
    {
        $model = new StudentModel();

        $model->save([
            'first_name'  => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'id_carrer' => $this->request->getPost('id_carrer'),
        ]);

        return redirect()->to('/students');
    }

    public function edit($id)
    {
        $studentModel = new StudentModel();
        $carrerModel = new CarrerModel();
        $data['student'] = $studentModel->find($id);
        $data['carrers'] = $carrerModel->findAll();
        return view('students/edit', $data);
    }

    public function update($id)
    {
        $model = new StudentModel();

        $model->update($id, [
            'first_name'  => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'id_carrer' => $this->request->getPost('id_carrer'),
        ]);

        return redirect()->to('/students');
    }

    public function delete($id)
    {
        $model = new StudentModel();
        $model->delete($id);
        return redirect()->to('/students');
    }
}