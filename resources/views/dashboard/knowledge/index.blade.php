@extends('dashboard.layouts.main')

@section('content')
@if (session()->has('success'))
<div id="alert-3" class="fixed z-50 right-0 flex p-4 mb-4 text-blue-900 rounded-lg bg-blue-200" role="alert">
    <ion-icon name="information-circle" class="w-5 h-5"></ion-icon>
    <span class="sr-only">Info</span>
    <div class="ml-3 text-sm font-medium">
        {{ session('success') }}
    </div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-200 text-blue-900 rounded-lg p-1.5 hover:bg-blue-200 inline-flex h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
        <span class="sr-only">Close</span>
        <ion-icon name="close" class="w-5 h-5"></ion-icon>
    </button>
</div>
@endif
<div class="p-12 sm:ml-64">
    <section class="bg-white mt-20 shadow-md rounded-lg overflow-hidden">
        <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
                <div>
                    <h5 class="mr-3 font-semibold">Basis Pengetahuan</h5>
                    <p class="text-gray-500">Kelola semua data yang ada atau tambah baru</p>
                </div>
                <div class="flex gap-4">
                    <div class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <ion-icon name="search" class="w-5 h-5 text-gray-500"></ion-icon>
                            </div>
                            <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2" placeholder="Search">
                        </div>
                    </div>
                    <a href="/knowledge/create" type="button"
                        class="px-4 py-2 text-sm font-medium text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300">
                        Tambah Data
                    </a>
                </div>
              </div>
            <div class="overflow-x-auto h-96">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3">#</th>
                            <th scope="col" class="px-4 py-3">Minat Bakat</th>
                            <th scope="col" class="px-4 py-3">Kategori Kecerdasan</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody id="exist">
                        @foreach ($knowledge as $know)
                        <tr class="border-b">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">{{ $loop->iteration }}</th>
                            <td class="px-4 py-3">{{ $know->ciri }}</td>
                            <td class="px-4 py-3">{{ $know->jenis }}</td>
                            <td class="px-4 py-3">
                                <div class="flex justify-end gap-2">
                                    <a href="/knowledge/{{ $know->id }}/edit" type="button" class="font-medium text-blue-600 hover:underline">Ubah</a>
                                    <form action="/knowledge/{{ $know->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="font-medium text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#exist tr").filter(function() {
                $(this).toggle($(this).text()
                .toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>

@endsection
