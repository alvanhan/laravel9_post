@extends('app')
@section('title', 'Post Page')
@section('content')
    <div class="overflow-x-hidden bg-gray-100 h-screen">
        <div class="px-6 py-8">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h1 class="text-xl font-bold md:text-2xl">
                            <span class="text-blue-800">Nusa</span> <span class="text-blue-400">Post</span>
                        </h1>
                        <div>
                            <a href="{{ route('post.create') }}"
                                class="px-4 py-1 text-sm font-bold text-white bg-blue-500 rounded-md hover:bg-blue-600">
                                + Postingan
                            </a>
                        </div>
                    </div>



                    @if ($posts->isEmpty())
                        <p class="text-2xl font-bold text-gray-500 text-center">Postingan Belum tersedia ..
                        </p>
                    @else
                        @foreach ($posts as $post)
                            <div class="mt-6">
                                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                                    <div class="flex items-center justify-between">
                                        <span
                                            class="font-light text-gray-600">{{ $post->created_at->diffForHumans() }}</span>
                                        <div>
                                            <a href="{{ route('post.edit', $post->id) }}"
                                                class="px-4 py-s2 text-sm font-bold text-white bg-orange-400 rounded-md hover:bg-orange-500">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <form action="{{ route('post.delete', $post->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-4 py-s2 mx-1 text-sm font-bold text-white bg-red-600 rounded-md hover:bg-red-700">
                                                    <i class="fas fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="mt-2"><a href="#"
                                            class="text-2xl font-bold text-gray-700 hover:underline">{{ $post->title }}</a>
                                        <p class="mt-2 text-gray-600">
                                            {{-- {{ Str::limit($post->content, 200, '...') }} --}}
                                            {{ $post->content }}
                                        </p>
                                    </div>
                                    <div class="flex items-center justify-between mt-4">
                                        {{-- <a
                                            href="{{ route('post.show', $post->id) }}"
                                            class="text-blue-500 hover:underline">
                                            Baca selengkapnya
                                        </a> --}}
                                        <div>
                                            <h1 class="font-bold text-gray-700 hover:underline">{{ $post->author->name }}
                                            </h1>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif



                    <div class="mt-8">
                    </div>
                </div>
                <div class="hidden w-4/12 -mx-8 lg:block">
                    <div class="px-8">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Pengarang</h1>
                        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">

                            @foreach ($top_authors as $key => $top)
                                <ul class="-mx-4 my-2">
                                    <li class="flex items-center"><a href="#"
                                            class="mx-1 font-bold text-gray-700 hover:underline">{{ $key + 1 }}.
                                            {{ $top->name }}</a>
                                        <span class="text-sm font-light text-gray-700">
                                            Total postingan : {{ $top->post_count }}
                                            Posts</span>
                                        </p>
                                    </li>
                                </ul>
                            @endforeach

                        </div>
                    </div>
                    {{-- <div class="px-8 mt-10">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
                        <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
                            <ul>
                                <li><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        AWS</a></li>
                                <li class="mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        Laravel</a></li>
                                <li class="mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- Vue</a>
                                </li>
                                <li class="mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        Design</a></li>
                                <li class="flex items-center mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                                        Django</a></li>
                                <li class="flex items-center mt-2"><a href="#"
                                        class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- PHP</a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="px-8 mt-10">
                        <h1 class="mb-4 text-xl font-bold text-gray-700">Postingan terbaru</h1>

                        @if (!$post_latest)
                            <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
                                <span href="#" class="text-lg font-medium text-gray-700 hover:underline">Postingan
                                    belum tersedia saat ini</span>
                            </div>
                        @else
                            <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">
                                <div class="mt-4"><a href="#"
                                        class="text-lg font-medium text-gray-700 hover:underline">{{ $post_latest->title }}</a>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <div class="flex items-center"><a href="#"
                                            class="mx-3 text-sm text-gray-700 hover:underline">{{ $post_latest->author->name }}</a>
                                    </div>
                                    <span
                                        class="text-sm font-light text-gray-600">{{ $post_latest->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        @endif



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
