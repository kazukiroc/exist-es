@extends('dashboard.layouts.app')

@section('content')
<section class="bg-indigo-50">
    @if (session()->has('success'))
    <div id="alert-3" class="fixed right-0 flex p-4 mb-4 text-blue-900 rounded-lg bg-blue-200" role="alert">
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
    @if (session()->has('failed'))
    <div id="alert-3" class="fixed right-0 flex p-4 mb-4 text-red-900 rounded-lg bg-red-200" role="alert">
        <ion-icon name="information-circle" class="w-5 h-5"></ion-icon>
        <span class="sr-only">Info</span>
        <div class="ml-3 text-sm font-medium">
            {{ session('failed') }}
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-200 text-red-900 rounded-lg p-1.5 hover:bg-red-200 inline-flex h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <ion-icon name="close" class="w-5 h-5"></ion-icon>
        </button>
    </div>
    @endif
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="mb-6">
            <img class="h-16" src="assets/exist.png" alt="Exist Logo">
        </div>
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Sign in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" placeholder="Enter your email address" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full p-2.5" required="">
                    </div>
                    <button type="submit" class="w-full text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-indigo-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                    <p class="text-sm font-light text-gray-500">
                        Don’t have an account yet? <a href="/register" class="font-medium text-indigo-600 hover:underline">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
@endsection
