@if (Auth::user()->is_good($book->id))
        {{-- グッド解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['evaluations.remove_good', $book->id], 'method' => 'delete']) !!}
            <button type="submit" class="btn good_btn"><i class="fas fa-thumbs-up"></i>高評価<span class="badge badge-secondary">{{ $book->goodCounts() }}</span></button>
        {!! Form::close() !!}
@else
        {{-- グッドボタンのフォーム --}}
        {!! Form::open(['route' => ['evaluations.add_good', $book->id], 'method' => 'post']) !!}
            <button type="submit" class="btn good_btn"><i class="far fa-thumbs-up"></i>高評価<span class="badge badge-secondary">{{ $book->goodCounts() }}</span></button>
        {!! Form::close() !!}
@endif