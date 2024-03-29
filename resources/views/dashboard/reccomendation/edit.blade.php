@extends('dashboard.layouts.main')

@section('content')
    <div class="p-12 sm:ml-64">
        <section class="bg-white mt-20 shadow-md rounded-lg max-w-md">
            <form action="/dashboard/expert/rekomendasi/{{ $intelligence->id }}" method="POST" class="relative bg-white rounded-lg shadow">
                @method('put')
                @csrf
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Ubah Data
                    </h3>
                    <a href="{{route('rekomendasi.index')}}" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center">
                        <ion-icon name="arrow-back" class="w-5 h-5" fill="currentColor"></ion-icon>
                    </a>
                </div>
                <div class="p-6 space-y-4">
{{--                    <div>--}}
{{--                        <label for="kode" class="block mb-2 text-sm font-medium text-gray-900">Kode</label>--}}
{{--                        <input type="text" name="kode" id="kode" class="bg-gray-100 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" disabled required value="{{ old('kode', $intelligences->kode) }}">--}}
{{--                    </div>--}}
                    <div>
                        <label for="jenis" class="block mb-2 text-sm font-medium text-gray-900">Kategori Kecerdasan</label>
                        <input type="text" name="jenis" id="jenis" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" required readonly value="{{ old('jenis', $intelligence->jenis) }}">
                    </div>
                                    <div>
                                        <label for="prodi" class="block mb-2 text-sm font-medium text-gray-900">Program Studi</label>
                                        <select data-te-select-init multiple name="prodi[]" id="prodi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" required>
                                            @foreach ($studies as $study)
                                                <option value="{{ $study->id }}" {{in_array($study->id, $reccomendations->where('id_intelligence', $intelligence->id)->pluck('id_study')->toArray()) ? 'selected' : ''}}>{{ $study->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                </div>
                <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                </div>
            </form>
        </section>
    </div>
    <script>
        import { Select, initTE } from "tw-elements";
        initTE({ Select });
    </script>
@endsection
