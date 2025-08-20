<div class="card">
    <div class="card-body">
        <h2 class="pb-2">{{ __('foxsun::widgets.memory.card_title') }}</h2>
        <p class="mb-3">{{ __('foxsun::widgets.memory.title') }} <strong>{{ $this->usedMemory }} </strong>{{ __('foxsun::widgets.memory.of') }} {{ $this->totalMemory }}</p>
        <div class="progress progress-separated mb-3">
            <div class="progress-bar bg-success" role="progressbar"
                 style="width: {{ $this->memoryInfoProgressbar['free'] }}%" aria-label="System"></div>
            <div class="progress-bar bg-danger" role="progressbar"
                 style="width: {{ $this->memoryInfoProgressbar['used'] }}%" aria-label="Shared"></div>
        </div>
        <div class="row">
            <div class="col-auto d-flex align-items-center px-2">
                <span class="legend me-2 bg-success"></span>
                <span>{{ __('foxsun::widgets.memory.free') }}</span>
                <span
                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">{{ $this->freeMemory }}</span>
            </div>
            <div class="col-auto d-flex align-items-center px-2">
                <span class="legend me-2 bg-danger"></span>
                <span>{{ __('foxsun::widgets.memory.used') }}</span>
                <span
                    class="d-none d-md-inline d-lg-none d-xxl-inline ms-2 text-secondary">{{ $this->usedMemory }}</span>
            </div>
        </div>
    </div>
</div>
