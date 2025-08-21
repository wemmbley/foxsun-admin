<!-- PACKAGE DASHICONS: https://app.unpkg.com/@icon/dashicons@0.9.0-alpha.4/files/icons -->
<!-- PACKAGE HEROICONS: https://heroicons.com/ -->
<!-- PACKAGE TABLER: https://tabler.io/icons -->
<aside class="navbar navbar-vertical navbar-end navbar-expand-lg navbar-transparent d-flex flex-column" data-bs-theme="dark">
    @include('foxsun::brand-logo')
    <div class="collapse navbar-collapse w-100" id="sidebar-menu">
        <ul class="navbar-nav pt-lg-3">
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#ffffff"><path fill="none" d="M0 0h20v20H0z"/><path d="M3.76 16h12.48A7.998 7.998 0 0010 3a7.998 7.998 0 00-6.24 13zM10 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM6 6c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm8 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-5.37 5.55L12 7v6c0 1.1-.9 2-2 2s-2-.9-2-2c0-.57.24-1.08.63-1.45zM4 10c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm12 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm-5 3c0-.55-.45-1-1-1s-1 .45-1 1 .45 1 1 1 1-.45 1-1z"/></svg>
                    </span>
                    <span class="nav-link-title">Главная</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/admin/posts/list" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#ffffff"><path fill="none" d="M0 0h20v20H0z"/><path d="M10.44 3.02l1.82-1.82 6.36 6.35-1.83 1.82a2.731 2.731 0 00-3.41.36l-.75.75c-.92.93-1.04 2.35-.35 3.41l-1.83 1.82-2.41-2.41-2.8 2.79c-.42.42-3.38 2.71-3.8 2.29s1.86-3.39 2.28-3.81l2.79-2.79L4.1 9.36l1.83-1.82c1.05.69 2.48.57 3.4-.36l.75-.75c.93-.92 1.05-2.35.36-3.41z"/></svg>
                    </span>
                    <span class="nav-link-title">Записи</span>
                </a>
                <div class="dropdown-menu" data-bs-popper="static">
                    <a class="dropdown-item" href="#">Все записи</a>
                    <a class="dropdown-item" href="#">Добавить запись</a>
                    <a class="dropdown-item" href="#">Категории</a>
                    <a class="dropdown-item" href="#">Метки</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/admin/posts/list" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#ffffff"><path fill="none" d="M0 0h20v20H0z"/><path d="M13 11V4c0-.55-.45-1-1-1h-1.67L9 1H5L3.67 3H2c-.55 0-1 .45-1 1v7c0 .55.45 1 1 1h10c.55 0 1-.45 1-1zM7 4.5a2.5 2.5 0 010 5 2.5 2.5 0 010-5zM14 6h5v10.5a2.5 2.5 0 01-5 0 2.5 2.5 0 013-2.45V9h-3V6zm-4 8.05V13h2v3.5a2.5 2.5 0 01-5 0 2.5 2.5 0 013-2.45z"/></svg>
                    </span>
                    <span class="nav-link-title">Медиафайлы</span>
                </a>
                <div class="dropdown-menu" data-bs-popper="static">
                    <a class="dropdown-item" href="#">Все медиафайлы</a>
                    <a class="dropdown-item" href="#">Доабвить медиа</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/admin/posts/list" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#ffffff"><path fill="none" d="M0 0h20v20H0z"/><path d="M6 15V2h10v13H6zm-1 1h8v2H3V5h2v11z"/></svg>
                    </span>
                    <span class="nav-link-title">Страницы</span>
                </a>
                <div class="dropdown-menu" data-bs-popper="static">
                    <a class="dropdown-item" href="#">Все страницы</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/admin/posts/list" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#ffffff"><path fill="none" d="M0 0h20v20H0z"/><path d="M5 2h9c1.1 0 2 .9 2 2v7c0 1.1-.9 2-2 2h-2l-5 5v-5H5c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2z"/></svg>
                    </span>
                    <span class="nav-link-title">Комментарии</span>
                </a>
                <div class="dropdown-menu" data-bs-popper="static">
                    <a class="dropdown-item" href="#">Все комментарии</a>
                </div>
            </li>
            <li class="nav-item dropdown mt-3">
                <a class="nav-link dropdown-toggle" href="/admin/posts/list" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#ffffff"><path fill="none" d="M0 0h20v20H0z"/><path d="M14.48 11.06L7.41 3.99l1.5-1.5c.5-.56 2.3-.47 3.51.32 1.21.8 1.43 1.28 2.91 2.1 1.18.64 2.45 1.26 4.45.85zm-.71.71L6.7 4.7 4.93 6.47a.996.996 0 000 1.41l1.06 1.06c.39.39.39 1.03 0 1.42-.6.6-1.43 1.11-2.21 1.69-.35.26-.7.53-1.01.84C1.43 14.23.4 16.08 1.4 17.07c.99 1 2.84-.03 4.18-1.36.31-.31.58-.66.85-1.02.57-.78 1.08-1.61 1.69-2.21a.996.996 0 011.41 0l1.06 1.06c.39.39 1.02.39 1.41 0z"/></svg>
                    </span>
                    <span class="nav-link-title">Темы</span>
                </a>
                <div class="dropdown-menu" data-bs-popper="static">
                    <a class="dropdown-item" href="#">Все темы</a>
                </div>
            </li>
            <li class="nav-item mt-3 dropdown">
                <a class="nav-link dropdown-toggle" href="./" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#ffffff"><path fill="none" d="M0 0h20v20H0z"/><path d="M10 9.25c-2.27 0-2.73-3.44-2.73-3.44C7 4.02 7.82 2 9.97 2c2.16 0 2.98 2.02 2.71 3.81 0 0-.41 3.44-2.68 3.44zm0 2.57L12.72 10c2.39 0 4.52 2.33 4.52 4.53v2.49s-3.65 1.13-7.24 1.13c-3.65 0-7.24-1.13-7.24-1.13v-2.49c0-2.25 1.94-4.48 4.47-4.48z"/></svg>
                    </span>
                    <span class="nav-link-title">Пользователи</span>
                </a>
                <div class="dropdown-menu" data-bs-popper="static">
                    <a class="dropdown-item" href="/admin/users/list">Список пользователей</a>
                    <a class="dropdown-item" href="/admin/users/add">Добавить пользователя</a>
                    <a class="dropdown-item" href="/admin/roles/list">Группы пользователей</a>
                </div>
            </li>
            <li class="nav-item mt-3">
                <a class="nav-link" href="./">
                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#ffffff"><path fill="none" d="M0 0h20v20H0z"/><path d="M18 16V4c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v12c0 .55.45 1 1 1h13c.55 0 1-.45 1-1zM8 11h1c.55 0 1 .45 1 1s-.45 1-1 1H8v1.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5V13H6c-.55 0-1-.45-1-1s.45-1 1-1h1V5.5c0-.28.22-.5.5-.5s.5.22.5.5V11zm5-2h-1c-.55 0-1-.45-1-1s.45-1 1-1h1V5.5c0-.28.22-.5.5-.5s.5.22.5.5V7h1c.55 0 1 .45 1 1s-.45 1-1 1h-1v5.5c0 .28-.22.5-.5.5s-.5-.22-.5-.5V9z"/></svg>
                    </span>
                    <span class="nav-link-title">Настройки</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
