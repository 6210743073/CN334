@extends('layouts.app')
@section('content')
@if (session()->has('message'))
<div>
    <div class="flex m-10 w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex items-center justify-center w-12 bg-green-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
            </svg>
        </div>
        <div class="px-4 py-2 -mx-3F">
            <div class="mx-3">
                <span class="font-semibold text-green-500 dark:text-green-400">Success</span>
                <p class="text-sm text-gray-600 dark:text-gray-200">{{session()->get('message')}}</p>
            </div>
        </div>
    </div>
</div>
@endif
<div class="bg-gray-100 dark:bg-gray-900 text-center lg:py-12 lg:flex lg:justify-center " style="background-image: url(https://images.unsplash.com/photo-1642944267662-dacacac1132c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=342&q=80);">
    <div class="title">
        <p class="text-4xl font-extrabold text-white mb-4">
            WORK EXPERIENCE
        </p>
        <p class="text-2xl uppercase font-blod text-white">
            fail fast fail forward
        </p>
    </div>
</div>
@foreach($posts->chunk(3) as $chunk)
<div>
    <div class="w-full bg-white p-12">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12">
            @foreach($chunk as $post)
            <div class="overflow-hidden shadow-lg rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
                <a class="w-full block h-full">
                    <img alt="blog photo" src="{{ asset('images/' . $post->image_path) }}" class="max-h-40 w-full object-cover" />
                    <div class="bg-white dark:bg-gray-800 w-full p-4">
                        <a href="/blog/{{ $post->slug }}" class="text-blue-500 dark:text-white text-xl font-bold mb-2">
                            {{$post->title}}
                        </a>
                        <p class="text-grey-400 dark:text-gray-300 font-light text-md truncate">
                            {{$post->description}}
                        </p>
                        <div class="flex items-center mt-4">
                            <a href="#" class="block relative">
                                <img alt="profil" src="https://res.cloudinary.com/jobfindder/image/upload/v1645196111/%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%B3%E0%B8%95%E0%B8%B1%E0%B8%A7_dqwgmz.jpg" class="mx-auto object-cover rounded-full h-1/3 w-10 " />
                            </a>
                            <div class="flex flex-col justify-between ml-4 text-sm">
                                <p class="text-gray-800 dark:text-white">
                                    {{ $post->user->name }}
                                </p>
                                <p class="text-gray-400 dark:text-gray-300">
                                    {{ date('jS M Y',strtotime($post->updated_at)) }}
                                </p>

                            </div>
                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                            <span class="place-self-end ml-28 ">
                                <a href="/blog/{{ $post->slug }}/edit" class="text-blue-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                    </svg></a>
                            </span>
                            <span class="place-self-end ">
                                <form action="/blog/{{ $post->slug }}" method="POST" class="flex text-red-500 items-center justify-center">@csrf @method('delete')<button type="submit"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </span>
                            @endif
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endforeach
@endsection