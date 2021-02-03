<header class="mb-4">
  
    <nav class="navbar navbar-expand navbar-dark p-4" style="background-color:#9F78FF;">
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/"><h2 style="color:#fff; font-weight: 600;">Connect_Books</h2></a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
               @if (Auth::check())
                    <li class="nav-item">{!! link_to_route('books.get', '書籍検索', [],['class' => 'nav-link']) !!}</li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-item">{!! link_to_route('users.show', 'マイアカウント',['user' => Auth::id()],['class' => 'button']) !!}</li>
                            <li class="dropdown-divider"></il>
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト',[],['class' => 'button']) !!}</li>
                        </ul>
                    </li>
                    <!-- Dropdown -->
                @else
                    {{-- ユーザ登録ページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                    {{-- ログインページへのリンク --}}
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
        