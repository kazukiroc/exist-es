@extends('dashboard.layouts.main')

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
                    {{$consul->name}}
                </div>
            </div>
        </section>
        <section class="bg-white mt-20 shadow-md rounded-lg overflow-hidden">
            <form action="/dashboard/user/my-consultation/{{$consul->id}}/simpan-konsultasi" method="POST" class="relative bg-white rounded-lg shadow">
                @method('put')
                @csrf
                <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3">#</th>
                            <th scope="col" class="px-4 py-3">Minat Bakat</th>
                            <th scope="col" class="px-4 py-3">Reaksi Kamu</th>
                        </tr>
                        </thead>
                        <tbody id="exist">
                        @foreach ($consul->characters as $character)
                            <tr class="border-b">
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">{{ $loop->iteration }}</td>
                                <td class="px-4 py-3">{{ $character->ciri }}</td>
                                <td class="px-4 py-3">
                                    <select data-te-select-init name="skor[]" id="skor" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" required>
                                        @if($results->where('id_consul', $consul->id)->where('id_user', auth()->user()->id)->count() > 0)
                                            <option value="1" {{$results->where('id_consul', $consul->id)->where('id_user', auth()->user()->id)->where('id_character', $character->id)->first()->skor == 1 ? 'selected' : ''}}>Sangat Tidak Setuju</option>
                                            <option value="2" {{$results->where('id_consul', $consul->id)->where('id_user', auth()->user()->id)->where('id_character', $character->id)->first()->skor == 2 ? 'selected' : ''}}>Tidak Setuju</option>
                                            <option value="3" {{$results->where('id_consul', $consul->id)->where('id_user', auth()->user()->id)->where('id_character', $character->id)->first()->skor == 3 ? 'selected' : ''}}>Kurang Setuju</option>
                                            <option value="4" {{$results->where('id_consul', $consul->id)->where('id_user', auth()->user()->id)->where('id_character', $character->id)->first()->skor == 4 ? 'selected' : ''}}>Setuju</option>
                                        @else
                                            <option value="1">Sangat Tidak Setuju</option>
                                            <option value="2">Tidak Setuju</option>
                                            <option value="3">Kurang Setuju</option>
                                            <option value="4">Setuju</option>
                                        @endif
                                    </select>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
                <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                </div>
            </form>
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
