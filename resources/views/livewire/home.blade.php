<div class="max-w-[1024px] mx-auto w-full py-[3rem]">
    <h1 class="text-4xl font-semibold text-center">{{ __('Nieuws') }}</h1>
    <div class="grid grid-cols-2 gap-[3rem] mt-[3rem]">
        @foreach ($news as $item)
            <a href="{{ route('news.show', ['news' => $item]) }}" class="shadow-sm">
                <img src="{{ $item->image }}" alt="{{ $item->title }}" class="w-full aspect-video object-cover">
                <div class="bg-white px-[1.5rem] py-[1rem] min-h-[6rem]">
                    <h3 class="text-xl font-semibold">{{ $item->title }}</h3>
                </div>
            </a>
        @endforeach
    </div>
</div>
