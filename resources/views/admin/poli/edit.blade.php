
<x-layouts.app title="Edit Pasien">
  <div class="container-fluid px-4 mt-4">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <h1 class="mb-4">Edit Poli</h1>

        <div class="card">
          <div class="card-body">
            <form action="{{ route('poli.update', $poli->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="nama_poli" class="form-label">Nama Poli <span class="text-danger">*</span></label>
                    <input type="text" name="nama_poli" id="nama_poli" class="form-control @error('nama_poli') is-invalid @enderror"
                      value="{{ old('nama_poli', $poli->nama_poli) }}" required>
                    @error('nama_poli')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="keterangan" class="form-label">Keterangan <span class="text-danger">*</span></label>
                    <input type="text" name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror"
                      value="{{ old('keterangan', $poli->keterangan) }}" required>
                    @error('keterangan')
                      <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-save"></i> Update
                </button>
                <a href="{{ route('pasien.index') }}" class="btn btn-secondary">
                  <i class="fas fa-arrow-left"></i> Kembali
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>
