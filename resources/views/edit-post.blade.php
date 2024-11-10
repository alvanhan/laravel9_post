@extends('app')
@section('title', 'Home Page')
@section('content')
    <main class="w-screen h-screen flex justify-center items-center bg-white">
        <div class="max-w-7xl bg-gray-200 text-black">
            <form class="w-full p-4 rounded shadow-md" action="{{route('post.update' , $post->id)}}" method="post">
                @csrf
                <h1 class="text-xl font-bold md:text-2xl mb-4">
                    <a href="{{route('post.list')}}"><span class="text-blue-800">Nusa</span> <span class="text-blue-400">Post</span></a>
                </h1>
                <h2 class="text-xl mb-4 tracking-wider font-lighter text-black">Edit Postingan</h2>
                <p class="text-black mb-4">Silahkan isi form di bawah ini untuk membuat postingan.</p>
                <div class="grid grid-cols-1 gap-4">

                    <div class="mb-4">
                        <label for="author" class="block text-black mb-2">Pengarang / Author *</label>
                        <select id="author" name="author_id"
                            class="w-full px-3 py-2 bg-white rounded-sm border border-black focus:outline-none border-solid focus:border-dashed"
                            required>
                            <option value="" disabled selected>Pilih Pengarang</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}" {{ $post->author_id == $author->id ? "selected" : "" }} >{{ $author->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="title" class="block text-black mb-2">Judul / Title *</label>
                        <input type="text" id="title" name="title" value="{{ $post->title }}"
                            class="w-full px-3 py-2 bg-white rounded-sm border border-black focus:outline-none border-solid focus:border-dashed"
                            placeholder="Masukkan Judul Postingan" required>
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block text-black mb-2">Isi Postingan *</label>
                        <textarea id="content" name="content"
                            class="w-full px-3 py-2 bg-white rounded-sm border border-black focus:outline-none border-solid focus:border-dashed resize-none"
                            placeholder="Tulis isi postingan Anda" required>{{ $post->content }}</textarea>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="py-4 px-6 bg-blue-800 text-white rounded-sm hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600">
                        Ubah Postingan →
                    </button>
                </div>
            </form>
        </div>
    </main>

@endsection
