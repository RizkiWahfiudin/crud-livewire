<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <input type="hidden" wire:model="bookId">
                <div class="form-group">
                    <label>Nomor Seri</label>
                    <input type="text" wire:model="serial_number" class="form-control @error('serial_number') is-invalid @enderror" placeholder="Masukkan Nomor Seri">
                    @error('serial_number')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" wire:model="title" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Judul Buku">
                    @error('title')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                   <textarea wire:model="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                   @error('description')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>