<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
    <a href="{{ url('admin2/pasien/create') }}" class="btn btn-primary">+ Tambah Pasien</a>
        <table class="table table-bordered">
            <tr class="table-secondary">
                <td>Id</td>
                <td>Kode Pasien</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Gender</td>
                <td>Email</td>
                <td>Nama Kelurahan</td>
                <td>Aksi</td>
            </tr>
            @foreach ($pasiens as $pasien)
            <tr>
                <td>{{ $pasien->id }}</td>
                <td>{{ $pasien->kode}}</td>
                <td>{{ $pasien->nama}}</td>
                <td>{{ $pasien->tgl_lahir}}</td>
                <td>{{ $pasien->gender}}</td>
                <td>{{ $pasien->email}}</td>
                <td>{{ $pasien->kelurahan_nama}}</td>
                <td>
                    <a href="{{ url('admin2/pasien/show', $pasien->id) }}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i>Lihat</a>
                    <a href="#" class="btn btn-warning btn-sm"><i class="far fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>