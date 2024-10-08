@extends('master')

@section('title', 'Daftar Pemain MU')

@section('content')
    @include('header')
    <table border="1" style="text-align: center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pemain</th>
                <th>Posisi</th>
                <th>Nomor Punggung</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemain as $index => $p)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $p->nama_pemain }}</td>
                    <td>{{ $p->posisi }}</td>
                    <td>{{ $p->no_punggung }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection