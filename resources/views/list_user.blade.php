@extends('layouts.app')

@section('content')


<link rel="stylesheet" href="assets/css/luser.css">
<div class="container">
    <h2>Daftar Pengguna</h2>
    <table class="table">
    <a href="{{ route('user.create') }}" class="btn
btn-primary mb-3">Tambah Pengguna Baru</a>

        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->npm }}</td>
                <td>{{ $user->nama_kelas }}</td>
                <td><a href="{{route('users.show',$user->id)}}"class ="btn btn-warning mb-3">Detail</a></td>
                <td><button class="btn btn-primary">Aksi</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection