<x-app-layout>

    <div class="max-w-lg mx-auto mt-8 bg-white rounded-xl shadow-md overflow-hidden md:max-w-6xl mb-4">
        <div class="md:flex">
            @if ($event->image)
                <img class="h-full object-cover md:w-7/12" src="{{ asset('storage/' . $event->image->url) }}"
                    alt="{{ $event->title }}">
            @else
                <img class="h-full object-cover md:w-7/12" src="https://picsum.photos/300/300" alt="">
            @endif
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{ trans('lang.event') }}
                </div>
                @if ($event->event_date > $date)
                    <p class="text-red-400 text-xs">{{trans('lang.event_finish')}}</p>
                @else
                    <p class="text-blue-400 text-xs">{{trans('lang.start')}}
                        {{ \Carbon\Carbon::parse($event->event_date)->diffForHumans() }}</p>
                @endif
                <div class="text-xs d-flex justify-content-end text-gray-600">
                    <span class="uppercase mr-1">{{ trans('lang.event_created_by') }}</span>
                    <span> {{ Str::limit($event->user->name, 25) }}</span>
                </div>
                <h2 class="text-xl text-black text-break">{{ $event->title }}</h2>
                <p class="mt-2 text-gray-400 text-break">{{ $event->body }}</p>
            </div>
        </div>
    </div>

</x-app-layout>
