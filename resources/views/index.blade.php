@extends('layout')
@section('content')
    <form method="post" action="/set">
        @csrf
        <h4>Categoria</h4>
        <select class="btn btn-outline-dark" name="category" id="category">
            <option selected> -- </option>
            @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->doctype }}</option>
            @endforeach
        </select>
        <h4>Subcategoria</h4>
        <select class="btn btn-outline-dark" name="subcategory" id="subcategory"><option disabled selected> -- </option></select>
        <div class="form-group">
            <h4>Autores</h4>
            <select class="btn btn-outline-dark" name="authors" id="authors" type="text">
                <option disabled selected> -- </option>
                <option value="1">1 autor</option>
                <option value="2">2 autores</option>
                <option value="3">3 autores</option>
                <option value="4">+ de 3 autores</option>
            </select>
        </div>
        <button class="btn btn-primary">Preencher</button>
    </form>

    <form class="form-inline mt-3" method="post" action="/format">
        @csrf
        @if(!@empty ($authors))
            {!! $namesInput !!}
        @endif
        @if(!@empty ($doc_id))
            {!! $docInput !!}
            <div><button class="btn btn-primary mt-3">Formatar</button></div>
        @endif
    </form>
    @if(!@empty ($reference))
        {!! $reference !!}
    @endif


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function () {
            $('#category').on('change',function(e) {
                var cat_id = e.target.value;
                $.ajax({
                    url:"{{ route('subcat') }}",
                    type:"POST",
                    data: {
                        cat_id: cat_id
                    },
                    success:function (data) {
                        $('#subcategory').empty();
                        $.each(data.subcategories[0].subcategories,function(index,subcategory){
                            $('#subcategory').append('<option value="'+subcategory.id+'">'+subcategory.doctype+'</option>');
                        })
                    }
                })
            });
        });
    </script>
@endsection
