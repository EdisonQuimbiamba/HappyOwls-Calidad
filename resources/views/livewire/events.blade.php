<div>

    <div class="flex items-center justify-center mt-4">
        <x-jet-button id="btn">{{ trans('lang.want_pub?') }}</x-jet-button>
    </div>

    <div id="form" class="hidden container flex-col sm:justify-center py-8 sm:pt-0 bg-transparent mt-3">
        <div class="bg-white shadow p-3 mb-5 rounded-md">
            {!! Form::open(['route' => 'dashboard.events.store', 'autocomplete' => 'off', 'files' => true, 'method' => 'post']) !!}
            @csrf

            <div>
                {!! Form::text('title', null, ['class' => 'form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm', 'placeholder' => 'Título del evento', 'autocomplete' => 'off']) !!}
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="mt-2 row">
                <div class="col col-lg-4">
                    <div class="image-wrapper flex justify-center">
                        <img id="imageEvent" class="max-h-50 items-center bg-cover" src="" />
                    </div>
                </div>
                <div class="col">
                    <textarea name="body" id="body"
                        class="w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        rows="9" placeholder="{{ trans('lang.desp_event') }}"></textarea>
                    @error('body')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-4 pt-2">
                    <input accept="image/*" type='file' id="imgEventInp" name="file" />
                    @error('file')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- Input oculto --}}
            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="flex items-center justify-end">
                {!! Form::submit('publicar', ['class' => 'mt-4 ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) !!}
                <button type="reset"
                    class="mt-4 ml-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                    id="cancelar"> Cancelar</button>
            </div>

            {!! Form::close() !!}
        </div>
    </div>

    @livewire('index')

    <script>
        let btn = document.querySelector("#btn");
        let form = document.querySelector("#form");
        let cancelar = document.querySelector("#cancelar");

        cancelar.onclick = () => {
            OpenOrClose()
        }

        btn.onclick = () => {
            OpenOrClose()
        }
        imgEventInp.onchange = evt => {
            const [file] = imgEventInp.files
            if (file) {
                imageEvent.src = URL.createObjectURL(file)
            }
        }

        function OpenOrClose() {
            if (form.classList.contains("hidden")) {
                form.classList.remove("hidden")
                form.classList.toggle("visible")
            } else {
                form.classList.toggle("hidden")
            }
        }

        /*Función para cerrar el formulario de crear un evento con la tecla ESC*/

        $(document).on('keydown', function(event) {
            if (event.key == "Escape" && form.classList.contains("visible")) {
                form.classList.remove("visible")
                form.classList.toggle("hidden")
            }
        });
    </script>
</div>
