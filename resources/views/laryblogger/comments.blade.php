{{-- @foreach ($comments as $comment) --}}
<div class="max-w-7xl mx-auto p-6 lg:p-8">
	<div class="mt-16">
	    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
   
		 {{-- #TODO: place username beneath comment title --}}
		 @foreach ($commentss as $comment)
		 <a class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
		     <h4>your name goes here</h4>
		     <p>{{$comment['content']}}</p>
		 </a>
		 @endforeach
	    </div>
	</div>
   </div>