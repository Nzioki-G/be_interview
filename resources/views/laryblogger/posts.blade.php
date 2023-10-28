@extends('laryblogger/borrowed')

@section('all_pages')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <h1 style = "
    display: flex;
    top: 20%;
    font-weight: 600;
	font-size: 35px;
    padding: 10px;
    margin: auto;"
>{{$heading}}</h1>

    <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

            {{-- Each blog title links to content --}}
            @foreach ($blogs as $blog)
            <a href="/laryblogger/{{$blog['id']}}" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                {{$blog['title']}}
            </a>
            @endforeach
        </div>
    </div>
    <br>
    <div style="

        ">
        {{-- naviagate to next pages --}}
        {{$blogs->links()}}
        <br><br>
    </div>
</div>


@endsection