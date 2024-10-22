@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="assets/css/cuser.css">

<div class="card">
    <form action="{{ route('user.update',$user['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value = "{{ old('nama', $user->nama) }}">
        @foreach($errors->get('nama') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="npm">NPM :</label>
        <input type="text" id="npm" name="npm" value = "{{ old('nama', $user->npm) }}">
        @foreach($errors->get('npm') as $msg)
        <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}"
             {{ $kelasItem-> id == $user->kelas_id ? 'selected' : '' }}>
             {{ $kelasItem-> nama_kelas}}
            </option>
            @endforeach
        </select>
        <label for="foto">Foto : </label>
        <input type="file" id="foto" name="foto"><br><br>
        @if($user->foto)
        <img src="{{ asset('storage/uploads/' . $user->foto) }}" class="card-img-top" alt="">
        @endif
        <br>
        <button type="submit">Submit</button><br>
        
    </form>
</div>
@endsection