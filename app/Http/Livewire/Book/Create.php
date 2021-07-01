<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Book;

class Create extends Component
{
	public $serial_number;
    public $title;
    public $description;

    public function render() {
        return view('livewire.book.create');
    }

    public function store() {
        $this->validate([
            'serial_number'=>'required',
            'title'=>'required'
        ]);

        $book = Book::create([
            'serial_number'=>$this->serial_number,
            'title'=>$this->title,
            'description'=>$this->description
        ]);

        session()->flash('message', 'Data Buku Berhasil Ditambahkan');
        return redirect()->route('book.index');
    }
}