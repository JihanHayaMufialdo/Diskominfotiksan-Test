{{-- <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button> --}}

<aside id="default-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-700">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{route('prodi.index')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-400 group">
                    {{-- <span class="iconify" data-width="25" data-icon="iconamoon:profile-fill"></span> --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">
                        Daftar Program Studi
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('mahasiswa.index')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-400 group">
                    {{-- <span class="iconify" data-width="25" data-icon="ic:round-class"></span> --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">
                        Daftar Mahasiswa
                    </span>
                </a>
            </li>
            <li>
                <a href="{{route('dosen.index')}}"
                    class="flex items-center p-2 text-gray-900 rounded-lg text-white hover:bg-gray-100 dark:hover:bg-gray-400 group">
                    {{-- <span class="iconify" data-width="25" data-icon="mingcute:time-fill"></span> --}}
                    <span class="flex-1 ms-3 whitespace-nowrap">
                        Daftar Dosen
                    </span>
                </a>
            </li>
        </ul>
    </div>

    {{-- <script>
        $(document).ready(function() {

            $('aside ul li a').on('click', function() {

                $('aside ul li a').removeClass('bg-indigo-100');

                $(this).addClass('bg-indigo-100');
            });
        });
    </script> --}}
</aside>
