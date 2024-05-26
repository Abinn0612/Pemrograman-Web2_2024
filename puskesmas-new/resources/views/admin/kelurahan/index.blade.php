<x-layout>
    <x-slot name="page_name">Halaman Kelurahan</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-success">
                <td>Id</td>
                <td>Nama</td>
                <td>kecamatan</td>
            </tr>
            @foreach ($kelurahans as $kelurahan)
            <tr>
                <td>{{ $kelurahan->id }}</td>
                <td>{{ $kelurahan->nama}}</td>
                <td>{{ $kelurahan->kecamatan}}</td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>