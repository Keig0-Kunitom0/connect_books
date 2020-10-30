@if (Auth::user()->is_bad($book->id))
        {{-- バッド解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['evaluations.remove_bad', $book->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="fas fa-thumbs-down"></i>', ['class' => "btn",'type' => 'submit']) !!}
        {!! Form::close() !!}

@else
        {{-- バッドボタンのフォーム --}}
        {!! Form::open(['route' => ['evaluations.add_bad', $book->id], 'method' => 'post']) !!}
            {!! Form::button('<i class="far fa-thumbs-down"></i>', ['class' => "btn",'type' => 'submit']) !!}
        {!! Form::close() !!}
@endif