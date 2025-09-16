<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Services\ImageService;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::get();
        return view('admin.pages.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.pages.slider.create');
    }

    public function store(SliderRequest $request, ImageService $imageService)
    {
        Slider::create([
            'image' => $imageService->upload($request->image, 'slider'),
            'status' => $request->status
        ]);
        return redirect(route('admin.slider.index'));
    }

    public function delete(Slider $slider, ImageService $imageService)
    {
        $imageService->delete($slider->image);
        $slider->delete();
        return back();
    }

    public function edit(Slider $slider)
    {
        return view('admin.pages.slider.edit', compact('slider'));
    }

    public function update(SliderRequest $request, Slider $slider, ImageService $imageService)
    {
        $slider->update([
            'image' => (!isset($request->image)) ?: $imageService->upload($request->image, 'slider', $slider->getRawOriginal('image')),
            'status' => $request->status
        ]);
        return redirect(route('admin.slider.index'));
    }
}
