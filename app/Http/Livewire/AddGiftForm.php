<?php

namespace App\Http\Livewire;

use App\Models\Gift;
use Livewire\Component;

class AddGiftForm extends Component
{
    public $added = false;
    public $newGift;
    public $gifts = [];

    protected $rules = [
        'newGift' => 'required|min:6',
    ];

    public function mount()
    {
        $this->gifts = Gift::all()->pluck('name', 'id')->toArray();
    }

    public function saveGift()
    {
        $this->validate();

        Gift::updateOrCreate(['name' => $this->newGift]);

        $this->added = true;

        $this->newGift = '';

        $this->gifts = Gift::all()->pluck('name', 'id')->toArray();
    }

    public function saveEntry()
    {
        // $entry = Entry::create([
        //     'evidence' => $this->evidence,
        // ]);

        // $entry->gifts->attach($this->gifts);
    }

    public function render()
    {
        return view('livewire.add-gift-form');
    }
}
