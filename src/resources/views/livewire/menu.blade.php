
<div>

    <button wire:click="openModal()" type="button">
        メニュー
    </button>

    @if($showModal)
    <div>
        <div>

            <div>
                <h3>
                    Menu
                </h3>
                <nav>
                    <ul class="header-nav">
                        @if (Auth::check())
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/">Home</a>
                        </li>
                        <li class="header-nav__item">
                            <form class="form" action="/logout" method="post">
                                @csrf
                                <button class="header-nav__button">ログアウト</button>
                            </form>
                        </li>
                        <li class="header-nav__item">
                            <a class="header-nav__link" href="/mypage">マイページ</a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div>
                <button wire:click="closeModal()" type="button">
                    ×
                </button>
            </div>

        </div>
    </div>
    @endif

</div>