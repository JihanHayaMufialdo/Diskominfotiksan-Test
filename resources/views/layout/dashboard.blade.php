@extends('layout.app')

@section('content')
    <div class="flex flex-col sm:flex-row">
        <x-sidebar.sidebar/>

        <div class="flex-1 p-4 sm:ml-64">
            {{-- <x-navbar.navbar title_page="{{$title_page}}" /> --}}

            <div class="p-4 border-2 border-gray-200 rounded-lg dark:border-gray-700 mt-5 shadow">
                @yield('main')
            </div>
        </div>
    </div>
@endsection
