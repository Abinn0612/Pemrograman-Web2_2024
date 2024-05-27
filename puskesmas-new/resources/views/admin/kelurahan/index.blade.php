<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
        <a href="{{ url('admin2/kelurahan/create') }}" class="btn btn-primary">+ Tambah Kelurahan</a>
        <table class="table table-bordered">
            <tr class="table-secondary">
                <td>Id</td>
                <td>Nama</td>
                <td>kecamatan</td>
                <th>Aksi</th>
            </tr>
            @foreach ($kelurahans as $kelurahan)
            <tr>
                <td>{{ $kelurahan->id }}</td>
                <td>{{ $kelurahan->nama}}</td>
                <td>{{ $kelurahan->kecamatan}}</td>
                <td>
                        <a href="{{ url('admin2/kelurahan/show', $kelurahan->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <a href="#" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                        <a href="#" class="text-danger"><i class="far fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>