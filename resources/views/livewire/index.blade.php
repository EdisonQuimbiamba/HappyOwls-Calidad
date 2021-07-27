<div class="container py-8 ">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">        
        @foreach ($events as $event)  
        <div class="container mx-auto px-4 d-flex align-items-stretch">
            <div class="w-full max-w-md mx-auto bg-white shadow-md rounded-md px-6 py-4 my-6">
                <div class="sm:flex sm:justify-between">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" alt="">
                        <div class="ml-2">
                            <h3 class="text-lg text-gray-800 font-medium">
                                {{Str::limit($event->user->name, 25)}}</h3>
                            <span class="text-gray-600">{{$event->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center mt-4 row">
                    <div class="col">
                        <h4 class="mt-2 text-xl font-medium text-black text-break">{{Str::limit($event->title, 70)}}</h4> 
                    </div> 
                </div>                
                <div class="mt-3"> 
                    <p class="text-gray-400 text-sm text-break">{{ Str::limit($event->body, 150) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
