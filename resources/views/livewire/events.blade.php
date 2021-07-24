<div>

    <div class="flex items-center justify-center mt-4">
        <x-jet-button id="btn">{{trans('lang.want_pub?')}}</x-jet-button>
    </div> 
       
    <div id="form"  class="invisible w-screen flex flex-col sm:justify-center pt-6 container sm:pt-0 bg-gray-100 mt-3">
        <div class="bg-white shadow p-3 mb-5 bg-body rounded-md">
            {!! Form::open(['route' => 'dashboard.events.store', 'autocomplete' => 'off', 'files' => true]) !!}
                @csrf
    
                <div>
                    <x-jet-input placeholder="{{trans('lang.titleEvent')}}" class="block mt-1 w-full" id="title" type="text" name="title" required autofocus />
                </div>
                <form runat="server">
                    <div class="mt-2 row">
                        <div class="col col-lg-4">
                            <div class="image-wrapper flex justify-center">
                                <img id="imageEvent" class="max-h-50 items-center bg-cover" src="#" alt="{{trans('lang.ImgEvent')}}" />
                            </div>
                        </div>
                        <div class="col">
                            <textarea  name="bodyEvent" id="bodyEvent" class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" rows="5" required placeholder="Descripción del evento"></textarea>
                        </div>
                    </div>

                    <div class="w-full pt-2"> 
                        <input accept="image/*" type='file' id="imgEventInp" required/>
                    </div>

                    <div class="flex items-center justify-end">
                        {!! Form::submit('publicar', ['class' => 'mt-4 ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) !!}
                    </div>
                
                {!! Form::close() !!}
        </div>
    </div>

<script>
    let btn = document.querySelector("#btn");
    let form = document.querySelector("#form");

    btn.onclick = () => {
        if(form.classList.contains("invisible")){
            form.classList.remove("invisible")
            form.classList.toggle("visible")
        }else{
            form.classList.toggle("invisible")
        }        
    }
    imgEventInp.onchange = evt => {
        const [file] = imgEventInp.files
        if (file) {
            imageEvent.src = URL.createObjectURL(file)
        }
    }

</script>
    
</div>