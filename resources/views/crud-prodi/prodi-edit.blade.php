@extends('layout.dashboard')

@section('main')
    <form action="{{route('prodi.update',$prodi->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="kode_prodi" class="block mb-2 text-sm font-medium text-gray-700">
                Kode
            </label>
            <input type="text" id="kode_prodi" name="kode_prodi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('kode') border-red-500 @enderror" placeholder="Masukkan kode program studi" value="{{old('kode') ?? $prodi->kode_prodi}}">
        </div>
        @error('kode_prodi')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="nama_prodi" class="block mb-2 text-sm font-medium text-gray-700">
                Program Studi
            </label>
            <input type="text" id="nama_prodi" name="nama_prodi"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('prodi') border-red-500 @enderror" placeholder="Masukkan nama program studi" value="{{old('prodi') ?? $prodi->nama_prodi}}">
        </div>
        @error('nama_prodi')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="mb-2">
            <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-700">
                Jurusan
            </label>
            <input type="text" id="jurusan" name="jurusan"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500
                @error('jurusan') border-red-500 @enderror" placeholder="Masukkan nama jurusan" value="{{old('jurusan') ?? $prodi->jurusan}}">
        </div>
        @error('jurusan')
        <div class="text-red-500 text-sm mb-2">
            {{$message}}
        </div>
        @enderror
        <div class="flex justify-end space-x-3 mt-5">
            <button type="submit"
                class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
                Simpan
            </button>
            <a href="{{route('prodi.index')}}"
                class="active:outline-none text-white bg-gray-100 hover:bg-gray-200 active:ring-4 active:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:active:ring-gray-800">
                Kembali
            </a>
        </div>
    </form>
@endsection
