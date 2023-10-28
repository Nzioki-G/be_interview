@extends('laryblogger/borrowed')

@section('all_pages')

<div class="grid grid-cols-1 gap-6 lg:gap-8", style="font-weight: 600; padding: 10px; margin: auto;">
    <div style="
            display: flex;
            top: 10%;
        	font-size: 35px;">
        <h1>{{$blog['title']}}</h1>
    </div>
    <div style="

        ">
        <p>{{$blog['content']}}</p>
    </div>

    <div>
        {{-- #TODO: Each blog title links to comments --}}
        {{-- @foreach ($blog['comment'] as $comment)
        <div>
            <p>{{$comment['content']}}</p>
        </div>
        @endforeach --}}
    </div>
</div>

</div>

{{-- 



<div>
    <article>
    <h3>comments</h3>
    @foreach ($comments as $comment)
    <a class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <h4>your name goes here</h4>
        <p>{{$comment['content']}}</p>
    </a>
    @endforeach
    <div style="
            margin: 5;
            padding: 1;
            width: 100%;
        ">
        {{$comments->links()}}
    </div>
    <form action="/blog/{id}">
        <textarea cols="50"
            rows="4">
        </textarea>
        Make a comment<!--input type="submit" value="submit">-->
    </form>
    </article>
</div>
 --}}
@endsection
