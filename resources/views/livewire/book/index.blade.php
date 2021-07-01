<div>
    <a href="{{ route('book.create') }}" class="btn btn-md btn-success mb-3">Tambah Buku</a>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No Seri</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->serial_number }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
                <td class="text-center">
                    <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button wire:click="destroy({{ $book->id }})" class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- menampilkan pagination --}}
    {{ $books->links() }}
</div>