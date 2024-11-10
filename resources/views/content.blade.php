@extends('app')
@section('title', 'Home Page')
@section('content')
    <div class="bg-white h-screen font-sans flex flex-col items-center justify-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 pt-12 lg:pt-0">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left lg:flex lg:items-center">
                    <div class="">
                        <div class="flex flex-col items-center justify-center">
                            <h1
                                class="mt-4 text-4xl tracking-tight font-extrabold text-gray-900 sm:mt-5 sm:leading-none lg:mt-6 lg:text-5xl xl:text-6xl">
                                <p class="sm:block">NusaPost</p><span class="text-zinc-500 md:block">
                                    Tulis Ceritamu di sini.
                                </span>
                                <p class="text-orange-600 md:block">Buat cerita terbaikmu di sini.</p>
                            </h1>
                        </div>
                        <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                            <a href="{{route('post.list')}}"
                                class="inline-flex items-center text-white bg-orange-500 justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2 w-full sm:w-auto">
                                Buat Sekarang</a>
                            <button
                                class="inline-flex hover:ring-gray-400 hover:bg-gray-100 items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 mt-3 w-full sm:mt-0 sm:ml-3 sm:w-auto">
                                Pelajari Lebih Lanjut
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-16 ml-6 sm:mt-24 lg:mt-0 lg:col-span-5">
                    <p class="text-base ml-12 text-gray-600 sm:text-xl lg:text-lg xl:text-xl">
                        NusaPost adalah platform untuk menulis cerita, artikel, dan berbagai macam tulisan lainnya. Dengan
                        NusaPost, kamu bisa menulis cerita terbaikmu dan membagikannya kepada orang lain.
                    </p>
                    <div class="mt-12 ml-8">
                        <div class="grid grid-cols-3 gap-6 sm:gap-6 xl:gap-8">
                            <div class="text-center sm:flex sm:items-center sm:justify-center">
                                <div class="sm:flex-shrink-0">
                                    <div class="flow-root">
                                        <div
                                            class="border w-fit transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 inline-flex items-center justify-center px-3 py-0.5 text-sm font-medium leading-5 text-orange-600 bg-orange-100 rounded-full">
                                            Pengarang Aktif
                                        </div>
                                        <p class="text-4xl font-bold text-gray-900">16K+</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center sm:flex sm:items-center sm:justify-center">
                                <div class="sm:flex-shrink-0">
                                    <div class="flow-root">
                                        <div
                                            class="border w-fit transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent hover:bg-primary/80 inline-flex items-center justify-center px-3 py-0.5 text-sm font-medium leading-5 text-orange-600 bg-orange-100 rounded-full">
                                            Jumlah Cerita
                                        </div>
                                        <p class="text-4xl font-bold ml-4 text-gray-900">28K+</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 flex justify-center space-x-3">
                        <span class="relative flex h-14 w-14 shrink-0 overflow-hidden rounded-full"><img
                                class="aspect-square h-full w-full" alt="User 1"
                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;width=40" /></span><span
                            class="relative flex h-14 w-14 shrink-0 overflow-hidden rounded-full"><img
                                class="aspect-square h-full w-full" alt="User 2"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;width=40" /></span><span
                            class="relative flex h-14 w-14 shrink-0 overflow-hidden rounded-full"><img
                                class="aspect-square h-full w-full" alt="User 3"
                                src="https://images.unsplash.com/photo-1548142813-c348350df52b?q=80&w=1889&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;width=40" /></span><span
                            class="relative flex h-14 w-14 shrink-0 overflow-hidden rounded-full"><img
                                class="aspect-square h-full w-full" alt="User 4"
                                src="https://images.unsplash.com/photo-1544723795-3fb6469f5b39?q=80&w=1889&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&amp;width=40" /></span>
                        <img class="relative flex h-14 w-14 shrink-0 overflow-hidden rounded-full"
                            src="https://images.unsplash.com/photo-1527718641255-324f8e2d0421?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="5">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
