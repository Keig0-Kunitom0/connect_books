{!! Form::open(['route' => 'comments.store']) !!}
    <div class="form-group">
        {!! Form::hidden('book_id', $book->id) !!}
        {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '9']) !!}
        <div class="text-right submit_btn_item">
            {!! Form::submit('投稿する', ['class' => 'btn btn-primary submit_btn']) !!}
        </div>
    </div>
{!! Form::close() !!}