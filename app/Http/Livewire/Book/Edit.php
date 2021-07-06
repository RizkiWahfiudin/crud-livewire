<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use App\Book;
use Illuminate\Http\Request;

class Edit extends Component
{
	public $bookId;
	public $serial_number;
    public $title;
    public $description;

    public function render() {
        return view('livewire.book.edit');
    }

    public function mount($id) {
        $book = Book::find($id);
        if($book) {
            $this->bookId = $book->id;
            $this->serial_number = $book->serial_number;
            $this->title = $book->title;
            $this->description = $book->description;
        }
    }

    public function update() {
        $this->validate([
            'serial_number'=>'required',
            'title'=>'required'
        ]);

        if($this->bookId) {
            $book = Book::find($this->bookId);
            if($book) {
                $book->update([
                    'serial_number'=>$this->serial_number,
		            'title'=>$this->title,
		            'description'=>$this->description
                ]);
            }
        }

        session()->flash('message', 'Data Buku Berhasil Diupdate');
        return redirect()->route('book.index');
    }
}