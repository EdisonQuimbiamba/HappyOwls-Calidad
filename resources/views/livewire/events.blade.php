<div>

    <div class="flex items-center justify-center mt-4">
        <x-jet-button data-bs-toggle="modal" data-bs-target="#CrearEvento" id="btn">{{ trans('lang.want_pub?') }}
        </x-jet-button>
    </div>

    @if (count($errors) > 0)
        <script>
            $(document).ready(function() {
                $('#CrearEvento').modal('show');
            });
        </script>
    @endif

    <div class="modal fade" id="CrearEvento" tabindex="-1" aria-hidden="true" aria-labelledby="modalTitle">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="text-lg">{{ trans('lang.created_event') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {!! Form::open(['route' => 'dashboard.events.store', 'autocomplete' => 'off', 'files' => true, 'method' => 'post']) !!}
                <div class="modal-body">
                    @csrf
                    {{-- Input oculto --}}
                    {!! Form::hidden('user_id', auth()->user()->id) !!}
                    <div class="mb-3">
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="{{ trans('lang.titleEvent') }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="body" name="body"
                            placeholder="{{ trans('lang.desp_event') }}" rows="5"></textarea>
                        @error('body')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col col-lg-4 image-wrapper flex justify-center">
                            <img id="imageEvent" class="max-h-50 items-center bg-cover" src="" />
                        </div>
                        <div class="col col-lg-4 pt-2">
                            <input accept="image/*" type='file' id="imgEventInp" name="file" />
                            @error('file')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition"
                        data-bs-dismiss="modal">{{ trans('auth.cancel') }}</button>
                    <x-jet-button>{{ trans('lang.post_event') }}</x-jet-button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    @livewire('index')

    <script>
        /* Este scrip es para mostrar la imagen seleccionada en la etiqueta img */
        imgEventInp.onchange = evt => {
            const [file] = imgEventInp.files
            if (file) {
                imageEvent.src = URL.createObjectURL(file)
            }
        }
    </script>
</div>
