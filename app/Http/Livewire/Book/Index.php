<?php

namespace App\Http\Livewire\Book;

use Livewire\Component;
use Livewire\WithPagination;
use App\Book;

class Index extends Component
{
	use WithPagination;

    public function render() {
        return view('livewire.book.index', [
            'books' => Book::orderBy('serial_number', 'ASC')->paginate(10) // mengatur pagination
        ]);
    }

    public function destroy($id) {
		$book = Book::find($id);
		if($book) {
			$book->delete();
		}

		session()->flash('message', 'Data Buku Berhasil Dihapus');
		return redirect()->route('book.index');
	}
}