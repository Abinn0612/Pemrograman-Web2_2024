<x-layout>
    <x-slot name="page_name">Halaman Pasien</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-secondary">
                <td>Id</td>
                <td>Kode Pasien</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
                <td>Gender</td>
                <td>Email</td>
                <td>Nama Kelurahan</td>
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
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>