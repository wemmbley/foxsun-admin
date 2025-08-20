<!-- Admin Toolbar -->
<div id="my-adminbar" class="adminbar" role="navigation" aria-label="Admin toolbar">
    <div class="adminbar__inner">
        <!-- Бренд -->
        <a class="adminbar__brand" href="/" aria-label="Brand">
            @include('foxsun::brand-logo')
        </a>

        <nav class="adminbar__nav" aria-label="Admin actions">
            <!-- Открыть админку -->
            <a class="adminbar__item" href="/admin" title="Открыть админку">
        <span class="adminbar__icon" aria-hidden="true">
          <!-- dashboard icon -->
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
            <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"/>
          </svg>
        </span>
                <span class="adminbar__label">{{ __('foxsun::frontend-admin-widget.dashboard') }}</span>
            </a>

            <!-- Изменить -->
            <button class="adminbar__item" type="button" data-action="edit" title="Изменить текущую страницу">
        <span class="adminbar__icon" aria-hidden="true">
          <!-- brush icon -->
          <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
            <path d="M7 16c.55 0 1 .45 1 1 0 1.66-1.34 3-3 3S2 18.66 2 17s1.34-3 3-3c.55 0 1 .45 1 1s-.45 1-1 1a1 1 0 100 2 1 1 0 001-1c0-.55.45-1 1-1zm13.71-9.29l-5.42-5.42a1 1 0 00-1.41 0L6 9.17V12h2.83l7.88-7.88 2.59 2.59A1 1 0 0020.71 6.71z"/>
          </svg>
        </span>
                <span class="adminbar__label">{{ __('foxsun::frontend-admin-widget.change') }}</span>
            </button>

            <!-- Новый (дропдаун) -->
            <div class="adminbar__menu" data-menu>
                <button class="adminbar__item" type="button" aria-haspopup="true" aria-expanded="false" title="Создать">
          <span class="adminbar__icon" aria-hidden="true">
            <!-- plus icon -->
            <svg viewBox="0 0 24 24" width="18" height="18" fill="currentColor">
              <path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"/>
            </svg>
          </span>
                    <span class="adminbar__label">{{ __('foxsun::frontend-admin-widget.new.title') }}</span>
                    <span class="adminbar__caret" aria-hidden="true">▾</span>
                </button>
                <ul class="adminbar__dropdown" role="menu">
                    <li role="none"><a role="menuitem" href="/admin/posts/create">{{ __('foxsun::frontend-admin-widget.new.post') }}</a></li>
                    <li role="none"><a role="menuitem" href="/admin/users/create">{{ __('foxsun::frontend-admin-widget.new.user') }}</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<style>
    :root{
        --ab-height: 40px;
        --ab-bg: rgba(20,21,23,0.88);
        --ab-blur: 8px;
        --ab-text: #f3f4f6;
        --ab-muted: #cbd5e1;
        --ab-accent: #22c55e; /* зеленый акцент как просил ранее */
        --ab-border: rgba(255,255,255,0.08);
        --ab-shadow: 0 2px 10px rgba(0,0,0,0.2);
        --ab-radius: 8px;
    }

    /* Сам бар фиксированный и поверх всего */
    .adminbar{
        position: fixed;
        z-index: 99999;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: min(1100px, 96vw);
        height: var(--ab-height);
        pointer-events: none; /* чтобы не блокировать клики вне самого бара */
    }
    .adminbar__inner{
        display: flex;
        align-items: center;
        gap: 12px;
        background: var(--ab-bg);
        backdrop-filter: blur(var(--ab-blur));
        -webkit-backdrop-filter: blur(var(--ab-blur));
        color: var(--ab-text);
        border: 1px solid var(--ab-border);
        border-radius: var(--ab-radius);
        box-shadow: var(--ab-shadow);
        height: 100%;
        padding: 0 10px;
        pointer-events: auto; /* клики внутри бара активны */
    }

    .adminbar__brand{
        display: inline-flex;
        align-items: center;
        gap: 8px;
        text-decoration: none;
        color: var(--ab-text);
        font-weight: 600;
        padding: 0 6px;
        border-radius: 6px;
    }
    .adminbar__brand:hover{ color: white; }
    .adminbar__brand-dot{
        width: 10px; height: 10px; border-radius: 50%;
        background: var(--ab-accent);
        box-shadow: 0 0 8px var(--ab-accent);
    }
    .adminbar__brand-text{ letter-spacing: .2px; }

    .adminbar__nav{
        display: flex; align-items: center; gap: 4px; margin-left: auto;
    }
    .adminbar__item{
        display: inline-flex; align-items: center; gap: 6px;
        height: 28px; padding: 0 10px;
        border: 1px solid transparent;
        border-radius: 6px;
        background: transparent;
        color: var(--ab-muted);
        font: inherit;
        cursor: pointer;
        text-decoration: none;
        transition: background .15s ease, color .15s ease, border-color .15s ease;
    }
    .adminbar__item:hover,
    .adminbar__item:focus{
        color: var(--ab-text);
        background: rgba(255,255,255,0.06);
        border-color: rgba(255,255,255,0.12);
        outline: none;
    }
    .adminbar__icon{ display: inline-flex; }
    .adminbar__label{ font-size: 13px; line-height: 1; }
    .adminbar__caret{ margin-left: 4px; font-size: 11px; opacity: .8; }

    /* Дропдаун */
    .adminbar__menu{ position: relative; }
    .adminbar__dropdown{
        position: absolute; top: calc(100% + 6px); right: 0;
        list-style: none; margin: 0; padding: 6px;
        background: var(--ab-bg);
        border: 1px solid var(--ab-border);
        border-radius: 8px;
        box-shadow: var(--ab-shadow);
        min-width: 190px;
        display: none;
    }
    .adminbar__dropdown a{
        display: block; padding: 8px 10px; border-radius: 6px;
        text-decoration: none; color: var(--ab-text); font-size: 13px;
    }
    .adminbar__dropdown a:hover{ background: rgba(255,255,255,0.06); }

    /* Состояние открытого меню */
    .adminbar__menu.is-open > .adminbar__dropdown{ display: block; }
    .adminbar__menu.is-open > .adminbar__item[aria-expanded]{ color: var(--ab-text); background: rgba(255,255,255,0.06); }

    /* Адаптив */
    @media (max-width: 560px){
        .adminbar__label{ display:none; }
        .adminbar__brand-text{ display:none; }
        .adminbar{ top: 8px; }
    }

    /* Опционально: отступ контента, чтобы бар не перекрывал кликабельные элементы у края страницы */
    body{ padding-top: calc(var(--ab-height) + 20px); }
</style>

<script>
    (function(){
        const root = document.getElementById('my-adminbar');
        if (!root) return;

        // Открытие/закрытие меню "Новый"
        const menu = root.querySelector('[data-menu]');
        const btn  = menu ? menu.querySelector('.adminbar__item[aria-haspopup="true"]') : null;
        const list = menu ? menu.querySelector('.adminbar__dropdown') : null;

        function openMenu(){
            if (!menu) return;
            menu.classList.add('is-open');
            if (btn) btn.setAttribute('aria-expanded', 'true');
            // Клик снаружи — закрываем
            setTimeout(()=>{ document.addEventListener('click', outsideClose); }, 0);
        }
        function closeMenu(){
            if (!menu) return;
            menu.classList.remove('is-open');
            if (btn) btn.setAttribute('aria-expanded', 'false');
            document.removeEventListener('click', outsideClose);
        }
        function outsideClose(e){
            if (!menu.contains(e.target)) closeMenu();
        }

        if (btn){
            // Клик — открыть/закрыть
            btn.addEventListener('click', (e)=>{
                e.stopPropagation();
                menu.classList.toggle('is-open');
                btn.setAttribute('aria-expanded', menu.classList.contains('is-open') ? 'true' : 'false');
                if (menu.classList.contains('is-open')) {
                    document.addEventListener('click', outsideClose);
                } else {
                    document.removeEventListener('click', outsideClose);
                }
            });

            // Hover как в WP (на десктопе)
            let hoverTimer;
            menu.addEventListener('mouseenter', ()=>{
                clearTimeout(hoverTimer);
                openMenu();
            });
            menu.addEventListener('mouseleave', ()=>{
                hoverTimer = setTimeout(closeMenu, 120);
            });
        }

        // Клавиатурная навигация: Esc — закрыть меню
        document.addEventListener('keydown', (e)=>{
            if (e.key === 'Escape') closeMenu();
        });

        // Пример обработчика «Изменить» (подставь свой URL/логика)
        const editBtn = root.querySelector('[data-action="edit"]');
        if (editBtn){
            editBtn.addEventListener('click', ()=>{
                // Например, редактировать текущий ресурс по data-атрибутам или query
                // window.location.href = '/admin/edit?url=' + encodeURIComponent(location.href);
                console.log('Edit clicked for', location.href);
            });
        }
    })();
</script>
