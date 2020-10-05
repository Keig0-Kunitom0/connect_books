<div id="app">
  <search-modelbox @hogehoge="search"></search-modelbox>
  <!--結果一覧の表示のコンポーネント -->
  <search-result :search-text="searchText"></search-result>
</div>

<div class="header-right1 d-flex align-items-center">
<!-- Search Box -->
    <div class="search d-none d-md-block">
        <ul class="d-flex align-items-center">
            <li class="mr-15">
                <div class="nav-search search-switch">
                    <i class="ti-search"></i>
                </div>
            </li>
        </ul>
    </div>
</div>

<script src="{{ mix('js/search.js') }}"></script>
