<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('pesan')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
</div>
        @endif
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
                        <a href="{{ url('admin2/kelurahan/show', $kelurahan->id) }}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Lihat</a>
                        <a href="{{ url('admin2/kelurahan/edit', $kelurahan->id) }}" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                        <form class="forms-sample d-inline" action="{{ url('admin2/kelurahan/destroy', $kelurahan->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah yakin ingin menghapus {{$kelurahan->nama}}?')"><i class="far fa-trash-alt"></i> Hapus</button>
                        </form>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>