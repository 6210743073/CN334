@extends('layouts.app')
@section('content')
<div class="bg-gray-100 p-10">
    @if($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="w-1/5 text-grey-50 bg-red-700 rounded-2xl py-4">
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/blog" method="POST" enctype="multipart/form-data" class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 ">@csrf
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Post</h2>
        <p class="mt-3 text-center text-gray-600 dark:text-gray-400">โพสประสบการ์ณใหม่ๆ</p>
        <div class=" mt-6 w-18 sm:grid-cols-2 md:grid-cols-3 ">
            <label class="inline-flex items-center px-4 py-2 text-xl tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 rounded-full hover:bg-red-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>

                <input type="file" name="image" class="" />
            </label>
        </div>
        <div class="mt-6">
            <div class="items-center -mx-2 md:flex">
                <div class="w-full mx-2">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Title</label>

                    <input name="title" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" type="text">
                </div>
            </div>

            <div class="w-full mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Descripstion</label>
                <textarea name="description" class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40"></textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="px-4 py-2 text-white transition-colors duration-200 transform bg-green-400 rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">Publish post</button>
            </div>
        </div>
    </form>
</div>
@endsection