<?php

declare(strict_types=1);

namespace Foxsun\Admin\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class AuthComponent extends Component
{
    public string $email = '';
    public string $password = '';
    private int $loginAttemptsCount = 3;
    private int $minutesOfBlockingIp = 15;

    public function render()
    {
        return view('foxsun::components.auth-form');
    }

    public function submit()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if(!$this->validateAttemptsCount()) {
            $this->dispatch('attempts-reached');
            return 0;
        }

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->clearAttemptsCount();

            return redirect('/admin');
        }

        $this->decreaseAttemptsCount();

        $this->dispatch('invalid-credentials',
            ['attempts' => $this->getAttemptsCount()]
        );

        return 0;
    }

    private function validateAttemptsCount(): bool
    {
        if($this->getAttemptsCount() <= 0) {
            return false;
        }
        return true;
    }

    private function getAttemptsCount()
    {
        $cacheId = $this->getAttemptsCountCacheIdentification();
        $attempts = 0;

        if(Cache::has($cacheId)) {
            $attempts = Cache::get($cacheId);
        } else {
            $cacheTime = now()->addMinutes($this->minutesOfBlockingIp);

            Cache::put($cacheId, $this->loginAttemptsCount, $cacheTime);

            $attempts = $this->loginAttemptsCount;
        }

        return $attempts;
    }

    private function clearAttemptsCount(): void
    {
        Cache::forget($this->getAttemptsCountCacheIdentification());
    }

    private function decreaseAttemptsCount(): void
    {
        $cacheTime = now()->addMinutes($this->minutesOfBlockingIp);
        $attemptsCount = $this->getAttemptsCount();

        Cache::put($this->getAttemptsCountCacheIdentification(), --$attemptsCount, $cacheTime);
    }

    private function getAttemptsCountCacheIdentification(): string
    {
        $ip = str_replace('.', '_', request()->ip());
        return '_ip_' . $ip;
    }
}
