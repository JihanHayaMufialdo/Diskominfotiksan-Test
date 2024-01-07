@extends('layout.dashboard')

<style>
    .action-icons a {
        margin-right: 0.5rem;
    }

    @media (min-width: 768px) {
        #default-search {
            width: 50%;
        }

        #search-button {
            right: calc(50% + 1rem);
        }
    }
</style>

@section('main')
    {{-- Button --}}
    <div class="flex justify-end">
        <a type="button" href="{{route('prodi.create')}}"
            class="active:outline-none text-white bg-blue-700 hover:bg-blue-800 active:ring-4 active:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:active:ring-blue-800">
            Tambah
        </a>
    </div>

    {{-- Table --}}
    <div class="mt-5 mb-5 relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="mb-3">
            @if (session('error'))
            <x-alert.error message="{{session('error')}}"/>
            @endif
            @if (session('success'))
            <x-alert.success message="{{session('success')}}"/>
            @endif
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            No
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Kode
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Program Studi
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Jurusan
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @forelse ($prodi as $prodi)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$i++}}
                    </th>
                    <td class="px-6 py-4">
                        {{$prodi->kode_prodi}}
                    </td>
                    <td class="px-6 py-4">
                        {{$prodi->nama_prodi}}
                    </td>
                    <td class="px-6 py-4">
                        {{$prodi->jurusan}}
                    </td>
                    <td class="px-6 py-4 flex items-center action-icons">
                        <a href="{{route('prodi.edit', $prodi->id)}}" class="">
                            <span class="iconify hover:text-neutral-300" data-width="25" data-icon="tabler:edit"></span>
                        </a>
                        <form action="{{route('prodi.destroy', $prodi->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mt-3.5" onclick="return confirm('Anda yakin ingin menghapus data {{$prodi->nama_prodi}} ?')">
                                <span class="iconify hover:text-neutral-300" data-width="25" data-icon="mdi:delete-outline"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5">Tidak Ada Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
