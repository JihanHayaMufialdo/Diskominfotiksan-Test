@extends('layout.dashboard')

@section('main')
    <form action="{{route('dosen.update',$dosen->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="nip" class="block mb-2 text-sm font-medium text-gray-700">
                NIP
            </label>
            <input type="text" id="nip" name="nip"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('nip') border-red-500 @enderror" placeholder="Masukkan NIP dosen" value="{{old('nip') ?? $dosen->nip}}">
        </div>
        @error('nip')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-700">
                Nama
            </label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('nama') border-red-500 @enderror" placeholder="Masukkan nama dosen" value="{{old('nama') ?? $dosen->nama}}">
        </div>
        @error('nama')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="kode_prodi" class="block mb-2 text-sm font-medium text-gray-700">
                Kode Prodi
            </label>
            <select id="dropdownSelect" name="kode_prodi"
                class="bg-gray-50 border border-gray-300 text-gray-900 active:ring-4 active:outline-none active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center bg-gray-50
                @error('kode_prodi') border-red-500 @enderror">
                <option value="{{ (old('kode_prodi') ?? $dosen->kode_prodi) ? '' : 'selected' }}">Pilih prodi</option>
                @foreach ($prodi as $prodi)
                    <option value="{{ $prodi->id }}" {{ (old('kode_prodi') ?? $dosen->kode_prodi) == $prodi->id ? 'selected' : '' }}>{{ $prodi->kode_prodi}} - {{$prodi->nama_prodi}}</option>
                @endforeach
            </select>
        </div>
        @error('kode_prodi')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="flex justify-end space-x-3 mt-5">
            <button type="submit"
                class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                Tambah
            </button>
            <a href="{{route('dosen.index')}}"
                class="active:outline-none text-white bg-gray-100 hover:bg-gray-200 active:ring-4 active:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:active:ring-gray-800">
                Kembali
            </a>
        </div>
    </form>
@endsection
