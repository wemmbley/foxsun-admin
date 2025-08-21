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
                                    <a href="#tab-home" class="nav-link active" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><!-- Download SVG icon from http://tabler.io/icons/icon/home --><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-2 icon-2"><path d="M5 12l-2 0l9 -9l9 9l-2 0"></path><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path></svg>
                                        Редакция
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tab-seo" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><!-- Download SVG icon from http://tabler.io/icons/icon/user --><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-2 icon-2"><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                                        SEO
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tab-analytics" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><!-- Download SVG icon from http://tabler.io/icons/icon/user --><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-2 icon-2"><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path></svg>
                                        Аналитика
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tab-cache" class="nav-link" data-bs-toggle="tab" aria-selected="true" role="tab"><!-- Download SVG icon from http://tabler.io/icons/icon/activity --><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon me-2 icon-2"><path d="M3 12h4l3 8l4 -16l3 8h4"></path></svg>
                                        Кэширование
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-home" role="tabpanel">
                                    <div class="mt-2">

                                        <!-- MAIN FORM PAGE -->
                                        <form>
                                            <div class="space-y">
                                                <div>
                                                    <label class="form-label"> First Name </label>
                                                    <input type="text" placeholder="Enter first name" class="form-control">
                                                </div>
                                                <div>
                                                    <label class="form-label"> Message </label>
                                                    <textarea placeholder="Enter your message" rows="6" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- END MAIN FORM PAGE -->

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-seo" role="tabpanel">
                                    <h3>Информация</h3>
                                    <div>
                                        SEO - это поулчение органического трафика к вам на сайт прямо из поисковых систем с помощью поисковых фраз и запросов, ключевых слов. Ровно на этой странице как раз и происходит подготовка страницы к будущей SEO-индексации поисковыми роботами и поднятия вашего сайта в поисковой выдаче.
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab-analytics" role="tabpanel">
                                    <h3>Аналитика</h3>
                                    <div>
                                        Аналитика страницы необходима для извлечения статистики, например по количеству посетителей за день, источника откуда пришли эти посетители, и многое-многое другое. В частности данный раздел необходим маркетологам.
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
                                                <a href="#" class="btn btn-primary btn-4 w-50">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('foxsun::pages.dashboard-footer')
@endsection
