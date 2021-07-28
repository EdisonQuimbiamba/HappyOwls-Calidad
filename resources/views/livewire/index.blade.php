<div class="container py-8 ">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6">
        @foreach ($events as $event)
            <div class="container mx-auto px-4 d-flex align-items-stretch">
                <div class="w-full max-w-md mx-auto bg-white shadow-md rounded-md px-6 py-4 my-6">
                    <div class="sm:flex sm:justify-between">
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}" />
                            <div class="ml-2">
                                <h3 class="text-lg text-gray-800 font-medium">
                                    {{ Str::limit($event->user->name, 25) }}</h3>
                                <span class="text-gray-600">{{ $event->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-4 row">
                        <div class="col">
                            <h4 class="mt-2 text-xl font-medium text-black text-break">
                                {{ Str::limit($event->title, 70) }}</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-6 pt-2">
                            <p class="text-gray-400 text-sm text-break">{{ Str::limit($event->body, 150) }}</p>
                        </div>
                        <div class="col col-lg-6 image-wrapper flex justify-center">
                            @if ($event->image)
                                <img class="w-full h-full"
                                    src="{{ asset("storage/".$event->image->url) }}" alt="{{$event->title}}">
                            @else
                                <img class="w-full h-full"
                                    src="https://picsum.photos/300/300" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div> 
        @endforeach
    </div>
</div>
