<div class="max-w-[1024px] mx-auto w-full pb-[3rem]">
    <img src="{{ $news->image }}" alt="{{ $news->title }}" class="w-full aspect-[3/1] object-cover">
    <h1 class="text-3xl font-semibold mt-[2rem]">{{ $news->title }}</h1>
    <p class="mt-[1rem]">{!! nl2br($news->content) !!}</p>
</div>
