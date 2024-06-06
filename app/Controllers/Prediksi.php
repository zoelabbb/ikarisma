<?php

namespace App\Controllers;

class Prediksi extends BaseController
{
    public function index()
    {
        return view('prediksi');
    }

    public function predict()
    {
        $age = $this->request->getPost('age');
        $height = $this->request->getPost('height');
        $weight = $this->request->getPost('weight');

        // Load the model
        $model = file_get_contents(APPPATH . '../python_scripts/model.pkl');
        $model = unserialize($model);

        // Make a prediction
        $input = [$age, $height, $weight];
        $ukuran = $model->predict([$input]);

        // Return the view with prediction result
        return view('prediksi', ['ukuran' => $ukuran[0]]);
    }
}
