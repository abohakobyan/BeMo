<!DOCTYPE html>
<head>
<script type="text/javascript" src="{{ URL::asset('ckeditor/ckeditor.js')}}" ></script>

@section('title', 'Edit Page')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<h3>Edit Page</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            {!! Form::open(array('route'=>['pages.update', $page->id], 'method'=>'PUT')) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', $page->title, array('class'=>'form-control')) }}
        <br/>
            {{ Form::label('contentlabel', 'Content:') }}
             {{ Form::textarea('content', $page->content, array('id'=>'editor1')) }}

            {!! Form::submit('Update Page', array('class'=> 'btn btn-success btn-lg btn-block')) !!}
            {!! Form::close() !!}
        </div>
    </div>
    {{-- <script type="text/javascript">
        CKEDITOR.replace('editor1');
    </script> --}}
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor1' ) )
            .catch( error => {
                console.error( error );
            } );



</script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
