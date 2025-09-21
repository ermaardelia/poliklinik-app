<x-layouts.app title="Detail Riwayat Pasien">
  <div class="container-fluid px-4 mt-4">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <h1 class="d-flex justify-content-between align-items-center mb-4">
          <a href="{{ route('riwayat-pasien.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
          </a>
          Detail Riwayat Pasien
        </h1>

        <div class="card mb-3">
          <div class="card-header">
            <h5 class="mb-0">Informasi Pasien</h5>
          </div>
          <div class="card-body">
            <p><strong>Nama Pasien:</strong> {{ $periksa->daftarPoli->pasien->nama }}</p>
            <p><strong>No. Antrian:</strong> {{ $periksa->daftarPoli->no_antrian }}</p>
            <p><strong>Keluhan:</strong> {{ $periksa->daftarPoli->keluhan }}</p>
            <p><strong>Poli:</strong> {{ $periksa->daftarPoli->jadwalPeriksa->dokter->poli->nama_poli }}</p>
            <p><strong>Dokter:</strong> {{ $periksa->daftarPoli->jadwalPeriksa->dokter->nama_dokter }}</p>
            <p><strong>Tanggal Periksa:</strong> {{ \Carbon\Carbon::parse($periksa->tgl_periksa)->format('d/m/Y H:i') }}</p>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header">
            <h5 class="mb-0">Catatan Dokter</h5>
          </div>
          <div class="card-body">
            <p>{{ $periksa->catatan ?: 'Tidak ada catatan' }}</p>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header">
            <h5 class="mb-0">Obat yang Diresepkan</h5>
          </div>
          <div class="card-body">
            @if($periksa->detailPeriksas && $periksa->detailPeriksas->count() > 0)
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Obat</th>
                    <th>Kemasan</th>
                    <th>Harga</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($periksa->detailPeriksas as $index => $detail)
                    <tr>
                      <td>{{ $index + 1 }}</td>
                      <td>{{ $detail->obat->nama_obat }}</td>
                      <td>{{ $detail->obat->kemasan }}</td>
                      <td>Rp {{ number_format($detail->obat->harga, 0, ',', '.') }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            @else
              <p class="text-muted">Tidak ada obat yang diresepkan</p>
            @endif
          </div>
        </div>

        <div class="card">
          <div class="card-body text-center">
            <h5>Total Biaya</h5>
            <h3 class="text-primary">Rp {{ number_format($periksa->biaya_periksa, 0, ',', '.') }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>
