<div class="container py-8 ">

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        
        @foreach ($events as $event)  

        <div class="container mx-auto px-4">
            <div class="w-full max-w-md mx-auto bg-white shadow-md rounded-md px-6 py-4 my-6">
                <div class="sm:flex sm:justify-between">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full" src="https://lh3.googleusercontent.com/a-/AOh14Gi0DgItGDTATTFV6lPiVrqtja6RZ_qrY91zg42o-g" alt="">
                        <div class="ml-2">
                            <h3 class="text-lg text-gray-800 font-medium">
                                {{$event->user->name}}</h3>
                            <span class="text-gray-600">
                                {{$event->user->email}}</span>
                        </div>
                    </div>
                    <div class="mt-2 sm:mt-0">
                        <button class="flex items-center text-white bg-blue-600 rounded px-2 py-1 hover:bg-blue-500 focus:outline-none focus:shadow-outline">
                            <span class="ml-1 text-sm">Asistir</span> 
                        </button>
                    </div>
                </div>

                <div class="flex justify-between items-center mt-4 row">
                    <div class="col">
                        <h4 class="text-gray-600 text-sm">{{$event->title}}</h4> 
                    </div> 
                </div>
                
                <div class="mt-3">
                    <h4 class="text-gray-600 text-sm">User Score</h4>
                    <span class="mt-2 text-xl font-medium text-gray-800">21%</span>
                </div>
                <div class="mt-4">
                    <h4 class="text-sm text-gray-600">45 Followers</h4>
                    <div class="flex items-center overflow-hidden mt-2">
                        <img class="inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                </div>
                <div class="mt-4">
                    <h4 class="text-sm text-gray-600">250 Following</h4>
                    <div class="flex items-center overflow-hidden mt-2">
                        <img class="inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1510520434124-5bc7e642b61d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80" alt="">
                        <img class="-ml-2 inline-block h-6 w-6 rounded-full text-white border-2 border-white object-cover object-center" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="">
                    </div>
                </div>
                <a class="block mt-4 text-blue-400 hover:underline" href="#">3 Collections</a>
            </div>
        </div>
        @endforeach

    </div>

</div>
