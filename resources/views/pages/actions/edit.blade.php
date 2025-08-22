@extends('foxsun::master')
@section('content')
    @include('foxsun::pages.dashboard-header', ['subtitle' => 'Редактирование записи'])
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards row-cols-1 row-cols-md-12">
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#tab-home" class="nav-link active" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><g fill="#d1d5db"><path d="M15 6V4h-3v2H8V4H5v2H4c-.6 0-1 .4-1 1v8h14V7c0-.6-.4-1-1-1h-1z"/></svg>
                                        <span class="ms-1">Редакция</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tab-seo" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><g fill="#d1d5db"><path fill="none" d="M0 0h20v20H0z"/><path d="M18.15 5.94c.46 1.62.38 3.22-.02 4.48-.42 1.28-1.26 2.18-2.3 2.48-.16.06-.26.06-.4.06-.06.02-.12.02-.18.02-.06.02-.14.02-.22.02h-6.8l2.22 5.5c.02.14-.06.26-.14.34-.08.1-.24.16-.34.16H6.95c-.1 0-.26-.06-.34-.16-.08-.08-.16-.2-.14-.34l-1-5.5H4.25l-.02-.02c-.5.06-1.08-.18-1.54-.62s-.88-1.08-1.06-1.88c-.24-.8-.2-1.56-.02-2.2.18-.62.58-1.08 1.06-1.3l.02-.02 9-5.4c.1-.06.18-.1.24-.16.06-.04.14-.08.24-.12.16-.08.28-.12.5-.18 1.04-.3 2.24.1 3.22.98s1.84 2.24 2.26 3.86zm-2.58 5.98h-.02c.4-.1.74-.34 1.04-.7.58-.7.86-1.76.86-3.04 0-.64-.1-1.3-.28-1.98-.34-1.36-1.02-2.5-1.78-3.24s-1.68-1.1-2.46-.88c-.82.22-1.4.96-1.7 2-.32 1.04-.28 2.36.06 3.72.38 1.36 1 2.5 1.8 3.24.78.74 1.62 1.1 2.48.88zm-2.54-7.08c.22-.04.42-.02.62.04.38.16.76.48 1.02 1s.42 1.2.42 1.78c0 .3-.04.56-.12.8-.18.48-.44.84-.86.94-.34.1-.8-.06-1.14-.4s-.64-.86-.78-1.5c-.18-.62-.12-1.24.02-1.72s.48-.84.82-.94z"/></svg>
                                        <span class="ms-1">SEO</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tab-analytics" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"><g fill="#d1d5db"><path fill="none" d="M0 0h20v20H0z"/><path d="M18 18V2h-4v16h4zm-6 0V7H8v11h4zm-6 0v-8H2v8h4z"/></svg>
                                        <span class="ms-1">Аналитика</span>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tab-cache" class="nav-link" data-bs-toggle="tab" aria-selected="true" role="tab">
                                        <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" viewBox="0 0 20 20"><g fill="#d1d5db"><path fill="none" d="M0 0h20v20H0z"/><path d="M15.5 16H15c-.1-2.5-.6-4.4-3.3-6 2.6-1.6 3.2-3.5 3.3-6h.5c.6 0 1-.4 1-1s-.4-1-1-1h-11c-.6 0-1 .4-1 1s.4 1 1 1H5c.1 2.5.6 4.4 3.3 6-2.6 1.6-3.2 3.5-3.3 6h-.5c-.6 0-1 .4-1 1s.4 1 1 1h11c.6 0 1-.4 1-1s-.4-1-1-1z"/></svg>
                                        <span class="ms-1">Кэширование</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-home" role="tabpanel">
                                    <div class="mt-2">

                                        <div class="col-12">
                                            <div class="">
                                                <div class="card-header">
                                                    <ul class="nav nav-tabs card-header-tabs" data-bs-toggle="tabs" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <a href="#tabs-home-3" class="nav-link active ps-5 pe-5" data-bs-toggle="tab" aria-selected="true" role="tab"><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" id="flag-icons-ru" viewBox="0 0 640 480">
                                                                    <path fill="#fff" d="M0 0h640v160H0z"/>
                                                                    <path fill="#0039a6" d="M0 160h640v160H0z"/>
                                                                    <path fill="#d52b1e" d="M0 320h640v160H0z"/>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a href="#tabs-profile-3" class="nav-link ps-5 pe-5" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" id="flag-icons-ua" viewBox="0 0 640 480">
                                                                    <g fill-rule="evenodd" stroke-width="1pt">
                                                                        <path fill="gold" d="M0 0h640v480H0z"/>
                                                                        <path fill="#0057b8" d="M0 0h640v240H0z"/>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active show" id="tabs-home-3" role="tabpanel">
                                                            <h4>Home tab</h4>
                                                            <div>
                                                                Cursus turpis vestibulum, dui in pharetra vulputate id sed non turpis ultricies fringilla at sed facilisis lacus pellentesque purus
                                                                nibh
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tabs-profile-3" role="tabpanel">
                                                            <h4>Profile tab</h4>
                                                            <div>
                                                                Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam, sem nunc amet, pellentesque id egestas velit sed
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- MAIN FORM PAGE -->
                                        <livewire:edit-crud-form :model="$model" :controller="$controller" />
                                        <!-- END MAIN FORM PAGE -->

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-seo" role="tabpanel">
                                    <h3>Информация</h3>
                                    <div>
                                        SEO - это получение органического трафика к вам на сайт прямо из поисковых систем с помощью поисковых фраз и запросов, ключевых слов. Ровно на этой странице как раз и происходит подготовка страницы к будущей SEO-индексации поисковыми роботами и поднятия вашего сайта в поисковой выдаче.
                                        <div class="card mt-3">
                                            <div class="card-body bg-teal-lt">
                                                <h3>Как это работает:</h3>
                                                <p>
                                                    Первое на что обращают свое внимание поисковые системы это заголовок &lt;h1&gt; и &lt;title&gt;. Это - <b>80% успеха.</b> Второе не менее важное - &lt;meta description=""&gt; и тег &lt;p&gt; прямо под заголовком h1. Это остальные 20% успеха. Все остальное мелочи. Не менее важные, но мусорные, на фоне этих двух групп.
                                                    <br><br>
                                                    Грамотно выбранные заголовки и описания трендовыми словами (смотрите Google Trends) подготовят вашу страницу к успеху в виде громадного наплыва посетителей, а регулярность постинга сыграет вам на руку. Наша система (Foxsun) позаботилась о том, чтобы снабдись вас всеми необходимыми инструментами для этого. Кэш увеличит быстродействие сайта и его скорость загрузки, а автопостинг позволит не заморачиваться с ботами и чужими подписками. Все из коробки.
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <h3 class="mt-5 mb-2">Группа самого важного.</h3>
                                        <div class="mt-3">
                                            <label class="form-label">Title заголовок <span class="form-label-description">0/60</span></label>
                                            <p class="text-muted m-0">Начать лучше релевантно, бренд сдвинуть в конец.</p>
                                            <p class="text-muted m-0 mb-2">Желательно уложиться в 50-60 символов.</p>
                                            <input type="text" class="form-control" placeholder="Title заголовок">
                                        </div>
                                        <div class="mt-3">
                                            <label class="form-label">H1 заголовок <span class="text-muted ms-2">Отключено!</span> <span class="form-label-description">0/70</span></label>
                                            <p class="text-muted m-0">По умолчанию берется из вкладки "Редакция".</p>
                                            <p class="text-muted mb-2">Желательно уложиться в 70-80 символов.</p>
                                            <input type="text" class="form-control" placeholder="H1 заголовок" disabled>
                                        </div>
                                        <div class="mt-3">
                                            <label class="form-label">H1 описание</label>
                                            <p class="text-muted m-0">Здесь делаем описанием страницы длинным, но с фокусом на ключевую фразу. Чем <b>чаще</b> она будет встречаться, тем <b>лучше</b>.</p>
                                            <p class="text-muted mb-2">Подсказка: ключевая фраза всегда находится в title. Просто в точности расставляем ее здесь несколько раз и ваш SEO будет идеален.</p>
                                            <div class="mb-3">
                                                <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Описание страницы"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <h3 class="mt-5 mb-2">Группа менее важного.</h3>
                                        <div class="mt-3">
                                            <label class="form-label">Meta описание <span class="form-label-description">0/170</span></label>
                                            <p class="text-muted mb-2">Желательно уложиться в 160-170 символов.</p>
                                            <input type="text" class="form-control" placeholder="Meta заголовок">
                                        </div>
                                        <div class="mt-3">
                                            <label class="form-label">Meta ключевые слова</label>
                                            <p class="text-muted m-0">Просто перечисляем ключевые слова страницы.</p>
                                            <p class="text-muted mb-2">Google сейчас это делает самостоятельно по блок "группа самого важного", так что это мусорный тег.</p>
                                            <input type="text" class="form-control" placeholder="Meta ключевые слова">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-analytics" role="tabpanel">
                                    <h3>Аналитика</h3>
                                    <div>
                                        Аналитика страницы необходима для извлечения статистики, например по количеству посетителей за день, источника откуда пришли эти посетители, и многое-многое другое. В частности данный раздел необходим маркетологам.
                                        <div class="card mt-3">
                                            <div class="card-body bg-teal-lt">
                                                <h3>Как это работает:</h3>
                                                <p>
                                                    Базовая аналитика не требует подключения сторонних аналитических сервисов, таких как например Google Analytics, и позволят вручную отслеживать любые данные которые позволяет отслеживать наша система. В будущем вы всегда можете расшириться самостоятельно подключив сторонний сервис, однако наших методов и инструментов должно быть достаточно для покрытия базовых потребностей сайта в анализе входящего трафика. Мы вычленили самое важное и убрали ненужное, вам остается лишь настроить анализ соответствующим вам образом и получить данные прямо на странице поста.
                                                    <br><br>
                                                    Вообще, есть минимум 3 места где можно отследить аналитику, где-то менее полно, где то более. Полная статистика по конкретному посту всегда будет доступна здесь. Сгруппированная статистика по всем постам будет доступна виджетом в админке на главной странице. И менее подробная статистика но тоже наглядная будет прямо на странице поста от роли администратора, пользователям безусловно такая статистика доступна не будет.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- ACTIVE USERS STATISTIC: DESKTOP, MOBILE, TABLET, TV BY DAY-->
                                        <!-- REFERALS SOURCES: GOOGLE, FB, INSTA, SOCIAL BY DAY-->
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-cache" role="tabpanel">
                                    <h3>Информация</h3>
                                    <div>
                                        <p>Кэширование страницы необходимо для ускорения загрузки сайта и поднятия его в выдаче поисковых систем.</p>
                                        <p>По умолчанию ваши страницы кэшируются на 8 часов что вполне достаточно для регулярного обновления данных.</p>
                                        <div class="card">
                                            <div class="card-body bg-teal-lt">
                                                <h3>Как это работает:</h3>
                                                <p>
                                                    Вы пубилкуете запись, она кэшируется. Далее пользователь заходя на эту страницу видит моментальную загрузку закэшированной версии. То есть система отдает ему статичный HTML без динамики и серверных данных в реальном времени, он получает версию последнего кэша.
                                                    <br><br>
                                                    Внимание! Если вы обновили запись, то изменения НЕ вступят в силу и пользователи ничего не увидят. То есть технически данные изменились, база данных обновлена, но физически на стороне клиента изменений никаких зафисировано не будет абсолютно никаких.
                                                    <br><br>
                                                    Что делать? Как увидеть изменения? Для этого вы должно либо подождать пока пройдет 8 часов (или сколько задано) и система автоматически почистит кэш закэшируя новые , свежие данные, либо вручную зайти в эту вкладку и нажать на кнопку очисти кэша данной страницы.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="mt-4">Настройки</h3>
                                    <div>
                                        <div>
                                            <label class="row">
                                                <span class="col">Кэширование для данной страницы включено</span>
                                                <span class="col-auto">
                                                    <label class="form-check form-check-single form-switch">
                                                        <input class="form-check-input" type="checkbox" checked="">
                                                    </label>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mt-4">
                                            <span class="col">Как часто сбрасывать кэш данной страницы?</span>
                                            <div class="col-3">
                                                <select name="user[month]" class="form-select">
                                                    <option value="">Каждые 5 минут (очень часто!)</option>
                                                    <option value="">Каждые 15 минут (очень часто!)</option>
                                                    <option value="">Каждые 30 минут (очень часто!)</option>
                                                    <option value="">Каждый час (достаточно часто)</option>
                                                    <option value="1">Каждые 2 часа (приемлимо)</option>
                                                    <option value="1" selected>Каждые 8 часов</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="#" class="text-danger fw-bold">Сбросить кэш для данной странциы</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Публикация</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="space-y">
                                            <div>
                                                <label class="form-label">Конечная ссылка</label>
                                                <input type="email" placeholder="Введите конечную ссылку" class="form-control" value="/posts/test-of-my-post-123">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="" class="ms-2 btn-4 w-25">Удалить</a>
                                                <a href="#" class="btn btn-primary btn-4 w-50" id="publish-btn">
                                                    Опубликовать
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Категория</h3>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="space-y">
                                            <div>
                                                <label class="form-label">Выбери категорию записи</label>
                                                <select class="form-select">
                                                    <option>Option 1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="subheader">SEO Оценка</div>
                                    <div id="chart-active-users-3" class="position-relative" style="min-height: 130px;">
                                        <div id="seo-chart" class="d-flex justify-content-center apexcharts-canvas apexcharts-theme-" style="width: 268px; height: 130px;"></div>
                                    </div>
                                    <div class="fs-3 fw-bold text-center mt-4">78/100</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const gapPercent = 0.32;                 // 32% пустого низа
        const gapDeg = 360 * gapPercent;         // ~79.2°
        const halfSpan = 180 - gapDeg / 2;       // ~140.4°

        var options = {
            series: [78],
            chart: {
                type: 'radialBar',
                height: 180,
                width: 220,
                sparkline: { enabled: true }
            },
            plotOptions: {
                radialBar: {
                    startAngle: -halfSpan,             // ~ -140.4
                    endAngle: halfSpan,                // ~ +140.4
                    hollow: {
                        size: '58%'                      // толще дуга
                    },
                    track: {
                        background: 'rgba(242,242,242,0.85)',
                        strokeWidth: '100%',
                        margin: 0
                    },
                    dataLabels: {
                        name: { show: false },
                        value: {
                            fontSize: '28px',
                            fontWeight: 600,
                            offsetY: 8,
                            formatter: v => Math.round(v) + '%'
                        }
                    }
                }
            },
            stroke: {
                lineCap: 'butt'                      // квадратные края
            },
            colors: ['var(--tblr-primary)'],
            legend: { show: false }
        };

        new ApexCharts(document.querySelector('#seo-chart'), options).render();

    </script>
    <script>
        document.getElementById('publish-btn').addEventListener('click', () => {
            document.getElementById('edit-crud-form').requestSubmit();
        });
    </script>
    @include('foxsun::pages.dashboard-footer')
@endsection
