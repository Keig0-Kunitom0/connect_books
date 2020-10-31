@if (count($comments) > 0)
    <ul class="list-unstyled">
        @foreach ($comments as $comment)
            <li class="media mb-3">
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($comment->user->email, ['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div class="name_color">
                        {{-- 投稿の所有者のユーザ詳細ページへのリンク --}}
                        {!! link_to_route('users.show', $comment->user->name, ['user' => $comment->user->id]) !!}
                        <span class="text-muted">posted at {{ $comment->created_at }}</span>
                    </div>
                    <div class="row">
                        {{-- 投稿内容 --}}
                        <p class="mb-0 col-md-6">{!! nl2br(e($comment->comment)) !!}</p>
                        <div class="offset-md-3 col-md-3">
                        @if (Auth::id() == $comment->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        
        {{-- ページネーションのリンク --}}
        {{ $comments->links() }}
    </ul>
@else
    <h4>この本のレビューはありません。</h4>
@endif