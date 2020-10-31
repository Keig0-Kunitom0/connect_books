@if (Auth::user()->is_favorite($favorite->id))
        {{-- お気に入り解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.unfavorite', $favorite->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り解除', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}

@else
        {{-- お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['favorites.favorite', $favorite->id], 'method' => 'post']) !!}
            {!! Form::submit('お気に入り', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
@endif