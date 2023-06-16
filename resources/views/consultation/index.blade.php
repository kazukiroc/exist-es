@extends('layouts.main')

@section('content')
{{-- @if (session()->has('success'))    
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
@endif --}}
<div class="p-12 sm:ml-64">
    <section class="bg-white mt-20 shadow-md rounded-lg overflow-hidden">
        <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3">#</th>
                            <th scope="col" class="px-4 py-3">Tanggal Konsultasi</th>
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    {{-- <tbody id="exist">
                        @foreach ($characteristics as $characteristic)
                        <tr class="border-b">
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $characteristic->ciri }}</td>
                            <td class="px-4 py-3">
                                <div class="flex">
                                    <div class="flex items-center mr-4">
                                        <input id="inline-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-radio" class="ml-2 text-sm font-medium text-gray-900">Setuju</label>
                                    </div>
                                    <div class="flex items-center mr-4">
                                        <input id="inline-2-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-2-radio" class="ml-2 text-sm font-medium text-gray-900">Kurang Setuju</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked id="inline-checked-radio" type="radio" value="" name="inline-radio-group" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                                        <label for="inline-checked-radio" class="ml-2 text-sm font-medium text-gray-900">Tidak Setuju</label>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </section>
    <section class="bg-white mt-10 shadow-md rounded-lg overflow-hidden">
        <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3">#</th>
                            <th scope="col" class="px-4 py-3">Minat Bakat</th>
                            <th scope="col" class="px-4 py-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="exist">
                        @foreach ($characteristics as $characteristic)
                        <tr class="border-b">
                            <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $characteristic->ciri }}</td>
                            <td class="px-4 py-3">
                                <select data-te-select-init name="pilihan" id="pilihan" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" required>
                                    <option value="1">Tidak Setuju</option>
                                    <option value="2">Kurang Setuju</option>
                                    <option value="3">Setuju</option>
                                </select>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

{{-- <script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#exist tr").filter(function() {
                $(this).toggle($(this).text()
                .toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script> --}}
<script>
    import { Select, initTE } from "tw-elements";
    initTE({ Select });
</script>

@endsection