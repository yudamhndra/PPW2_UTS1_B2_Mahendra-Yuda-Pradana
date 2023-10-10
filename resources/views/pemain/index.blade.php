@extends('layout.app')

@section('content')
    @include('pemain.header_pemain')
    <div class="container">
            <h1 class="text-center">Daftar Barang</h1>
            <div class="table-responsive mx-auto">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Pemain</th>
                            <th>Nomor Punggung</th>
                            <th>Posisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pemain as $pemain)
                        <tr>
                            <td>{{ $pemain->nama_pemain }}</td>
                            <td>{{ $pemain->no_punggung }}</td>
                            <td>{{ $pemain->posisi}}</td>
                            <td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <p></p>

            </div>
        </div>