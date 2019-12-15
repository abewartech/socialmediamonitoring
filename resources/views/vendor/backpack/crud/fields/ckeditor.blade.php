<!-- CKeditor -->
<div @include('crud::inc.field_wrapper_attributes') >
    <label>{!! $field['label'] !!}</label>
    @include('crud::inc.field_translatable_icon')
    <textarea
    	id="ckeditor-{{ $field['name'] }}"
        name="{{ $field['name'] }}"
        data-init-function="bpFieldInitCKEditorElement"
        @include('crud::inc.field_attributes', ['default_class' => 'form-control'])
    	>{{ old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? '' }}</textarea>

    {{-- HINT --}}
    @if (isset($field['hint']))
        <p class="help-block">{!! $field['hint'] !!}</p>
    @endif
</div>


{{-- ########################################## --}}
{{-- Extra CSS and JS for this particular field --}}
{{-- If a field type is shown multiple times on a form, the CSS and JS will only be loaded once --}}
@if ($crud->fieldTypeNotLoaded($field))
    @php
        $crud->markFieldTypeAsLoaded($field);
    @endphp

    {{-- FIELD CSS - will be loaded in the after_styles section --}}
    @push('crud_fields_styles')
    @endpush

    {{-- FIELD JS - will be loaded in the after_scripts section --}}
    @push('crud_fields_scripts')
        <script src="{{ asset('packages/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('packages/ckeditor/adapters/jquery.js') }}"></script>
        <script>
            function bpFieldInitCKEditorElement(element) {
                // remove any previous CKEditors from right next to the textarea
                element.siblings("[id^='cke_ckeditor']").remove();

                // trigger a new CKEditor
                element.ckeditor({
                    "filebrowserBrowseUrl": "{{ url(config('backpack.base.route_prefix').'/elfinder/ckeditor') }}",
                    "extraPlugins" : '{{ isset($field['extra_plugins']) ? implode(',', $field['extra_plugins']) : 'embed,widget' }}',
                    "embed_provider": '//ckeditor.iframe.ly/api/oembed?url={url}&callback={callback}'
                    @if (isset($field['options']) && count($field['options']))
                        {!! ', '.trim(json_encode($field['options']), "{}") !!}
                    @endif
                });
            }
        </script>
    @endpush

@endif

{{-- End of Extra CSS and JS --}}
{{-- ########################################## --}}
