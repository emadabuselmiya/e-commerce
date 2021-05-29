<?php

namespace App\Http\Livewire\Admin;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.admin-home-slider-component', [
            'sliders' => $sliders,
        ])->layout('layouts.base');
    }

    public function deleteSlide($id)
    {
        $slide = HomeSlider::findOrFail($id);
        $slide->delete();
        session()->flash('message', 'Slider has been Deleted successfully!');
    }
}
