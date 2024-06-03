<x-layout>
    <x-slot name="page_name">Halaman Pasien/Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-secondary">
                <th>No</th>
                <th>Id Pasien</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Tmp_Lahir</th>
                <th>Tgl_lahir</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nama Kelurahan</th>
            </tr>
            <tr>
                <td>1</td>
                <td>{{$pasien->id}}</td>
                <td>{{$pasien->kode}}</td>
                <td>{{$pasien->nama}}</td>
                <td>{{$pasien->tmp_lahir}}</td>
                <td>{{$pasien->tgl_lahir}}</td>
                <td>{{$pasien->gender}}</td>
                <td>{{$pasien->email}}</td>
                <td>{{$pasien->alamat}}</td>
                <td>{{$pasien->kelurahan_nama}}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>