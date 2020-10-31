{!! Form::open(['route' => 'comments.store']) !!}
    <div class="form-group">
        {!! Form::hidden('book_id', $book->id) !!}
        {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '4']) !!}
        {!! Form::submit('投稿する', ['class' => 'btn btn-primary btn-block']) !!}
    </div>
{!! Form::close() !!}