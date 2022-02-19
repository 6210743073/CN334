@extends('layouts.app')
@section('content')
<div class="bg-gray-100 p-10">
    @if (session()->has('message'))
    <div>
        <div class="flex m-10 w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-green-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-green-500 dark:text-green-400">Success</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">{{session()->get('message')}}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data" class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 ">@csrf
        @method('PUT')
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Update Post</h2>
        <p class="mt-3 text-center text-gray-600 dark:text-gray-400">แก้ไข ข้อความต่างๆ</p>
        <div class="mt-6">
            <div class="items-center -mx-2 md:flex">
                <div class="w-full mx-2">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Title</label>

                    <input name="title" value="{{ $post->title }}" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" type="text">
                </div>
            </div>

            <div class="w-full mt-4">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Descripstion</label>
                <textarea name="description" class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">{{ $post->description }}</textarea>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit" class="px-4 py-2 text-white transition-colors duration-200 transform bg-green-400 rounded-md hover:bg-green-600 focus:outline-none focus:bg-gray-600">Update post</button>
            </div>
        </div>
    </form>
</div>
@endsection