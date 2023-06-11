@extends ( "layouts.app" )

@section ( "title-page" )
    Laravel Comics | Home
@endsection

@section ( "content" )

    <div class="container">
        <div class="row">
            @foreach( $comics as $elem )
                <div class="col-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $elem['thumb'] }}" alt="" srcset="">
                        <div class="card-body">
                            <h4 class="card-title">{{ $elem["series"] }}</h4>
                            <span class="card-text">{{ $elem["price"] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection