@if (Auth::user()->is_bad($book->id))
        {{-- バッド解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['evaluations.remove_bad', $book->id], 'method' => 'delete']) !!}
            <button type="submit" class="btn bad_btn"><i class="fas fa-thumbs-down"></i>低評価<span class="badge badge-secondary">{{ $book->badCounts() }}</span></button>
        {!! Form::close() !!}

@else
        {{-- バッドボタンのフォーム --}}
        {!! Form::open(['route' => ['evaluations.add_bad', $book->id], 'method' => 'post']) !!}
            <button type="submit" class="btn bad_btn"><i class="far fa-thumbs-down"></i>低評価<span class="badge badge-secondary">{{ $book->badCounts() }}</span></button>
        {!! Form::close() !!}
@endif