<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class SliderController extends Controller
{
    public function getSlider()
    {
        $slider = Slider::first();
        return view('admin.backend.slider.get_slider', [
            'slider' => $slider
        ]);
    }

}
