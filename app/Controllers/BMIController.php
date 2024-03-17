<?php

namespace App\Controllers;
use App\Models\BmiModel; // นำเข้า BmiModel

class BmiController extends BaseController
{
    public function calculateBmi()
    {
        $model = new BmiModel();

        $weight = $this->request->getVar('weight');
        $height = $this->request->getVar('height');

        $bmi = $model->calculateBmi($weight, $height);
        $interpretation = $model->interpretBmi($bmi);

        // ส่งข้อมูลไปยัง view แทนที่จะ echo ออกมา
        return view('show_bmi', [
            'bmi' => $bmi,
            'interpretation' => $interpretation
        ]);
    }
}


?>