@extends('layouts.main')

@section('content')
<div class="p-12 sm:ml-64">
    <section class="bg-white mt-20 shadow-md rounded-lg max-w-md">
        <form action="/study/{{ $studies->id }}" method="POST" class="relative bg-white rounded-lg shadow">
            @method('put')
            @csrf
            <div class="flex items-start justify-between p-4 border-b rounded-t">
                <h3 class="text-xl font-semibold text-gray-900">
                    Ubah Data
                </h3>
                <a href="/study" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                    <ion-icon name="arrow-back" class="w-5 h-5" fill="currentColor"></ion-icon>
                </a>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Program Studi</label>
                    <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" required value="{{ old('nama', $studies->nama) }}">
                </div>
                <div>
                    <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900">Keterangan</label>
                    <input type="text" name="keterangan" id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" required value="{{ old('keterangan', $studies->keterangan) }}">
                </div>
            </div>
            <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
            </div>
        </form>
    </section>
</div>
@endsection