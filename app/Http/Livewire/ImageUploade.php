<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ImageUploade extends Component
{
    use WithFileUploads;

    public $image = [];

    public function save()
    {
        $this->validate([
            'image.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->image as $image) {
            $image->store('public');
            // $image->storeAs('public', $image->getClientOriginalName());
        }
    }


    public function render()
    {
        return view('livewire.image-uploade', [
            'Images' => collect(Storage::files('public'))
                ->filter(function ($file) {
                    return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['png', 'jpg', 'jpeg', 'gif', 'webp']);
                })
                ->map(function ($file) {
                    return Storage::url($file);
                })
        ]);
    }
}
