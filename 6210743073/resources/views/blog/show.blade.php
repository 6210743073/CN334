@extends('layouts.app')
@section('content')
<article class="px-4 py-24 mx-auto max-w-7xl">
    <div class="w-full mx-auto mb-12 text-left md:w-3/4 lg:w-1/2">
        <img src="{{ asset('images/' . $post->image_path) }}" class="shadow-lg object-cover w-full h-64 bg-center rounded-lg" alt="Kutty" />
        <p class="mt-6 mb-2 text-xs font-semibold tracking-wider uppercase text-primary">Development</p>
        <h1 class="mb-3 text-3xl font-bold leading-tight text-gray-900 md:text-4xl" itemprop="headline" title="Rise of Tailwind - A Utility First CSS Framework">
            {{$post->title}}
        </h1>
        <a class="flex items-center text-gray-700" href="#">
            <div class="avatar"><img class=" w-10 h-10 rounded-full" src="https://res.cloudinary.com/jobfindder/image/upload/v1645196111/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%B3%E0%B8%95%E0%B8%B1%E0%B8%A7_dqwgmz.jpg" alt="Photo" /></div>
            <div class="ml-2">
                <p class="text-sm font-semibold text-gray-800">{{ $post->user->name }}</p>
                <p class="text-sm text-gray-500">{{ date('jS M Y',strtotime($post->updated_at)) }}</p>
            </div>
        </a>
    </div>

    <div class="w-full mx-auto prose md:w-3/4 lg:w-1/2">
        <p>
            {{$post->description}}
        </p>
    </div>
</article>
@endsection