@if (Auth::user()->is_good($book->id))
        {{-- グッド解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['evaluations.remove_good', $book->id], 'method' => 'delete']) !!}
            {!! Form::button('<i class="fas fa-thumbs-up"></i>', ['class' => "btn",'type' => 'submit']) !!}
        {!! Form::close() !!}

@else
        {{-- グッドボタンのフォーム --}}
        {!! Form::open(['route' => ['evaluations.add_good', $book->id], 'method' => 'post']) !!}
            {!! Form::button('<i class="far fa-thumbs-up"></i>', ['class' => "btn",'type' => 'submit']) !!}
        {!! Form::close() !!}
@endif