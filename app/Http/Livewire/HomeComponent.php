<?php

namespace App\Http\Livewire;
use App\Models\HomeSlider;
use App\Models\Product;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;

class HomeComponent extends Component
{
    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $latestproducts = Product::orderBy('created_at','DESC')->get()->take(8);

        if (Auth::check()) {
            Cart::instance('cart')->restore(Auth::user()->email);
        }
        return view('livewire.home-component',['sliders'=> $sliders,'latestproducts'=>$latestproducts])->layout('layouts.base');
    }
}
