@extends('layouts.app')
@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-col">
        <div class="lg:w-4/6 mx-auto">
            <div class="rounded-lg h-4/5 overflow-hidden">
                <img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('images/' . $post->image_path) }}">
            </div>
            <div class="flex flex-col sm:flex-row mt-10">
                <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                    <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
                        <img class="w-full h-full rounded-full object-fill" src="https://res.cloudinary.com/jobfindder/image/upload/v1645196111/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%B3%E0%B8%95%E0%B8%B1%E0%B8%A7_dqwgmz.jpg" alt="Avatar of Author">
                    </div>
                    <div class="flex flex-col items-center text-center justify-center">
                        <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">{{ $post->user->name }}</h2>
                        <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                        <p class="text-xl font-bold text-black">{{$post->title}}</p>
                    </div>
                </div>
                <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                    <p class="leading-relaxed text-lg mb-4">{{$post->description}}</p>
                    <a class="text-indigo-500 inline-flex items-center">{{ date('jS M Y',strtotime($post->updated_at)) }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection