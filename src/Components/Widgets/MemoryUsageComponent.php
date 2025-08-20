<?php

declare(strict_types=1);

namespace Foxsun\Admin\Components\Widgets;

use InvalidArgumentException;
use Livewire\Component;

class MemoryUsageComponent extends Component
{
    public array $memoryInfo = [];
    public array $memoryInfoProgressbar = [];
    public string $usedMemory = '';
    public string $freeMemory = '';
    public string $totalMemory = '';

    public function boot()
    {
        $this->memoryInfo = $this->getSystemMemoryInfo();
        $this->memoryInfoProgressbar = $this->getProgressBarPieces([
            'total' => $this->memoryInfo['total'],
            'used' => $this->memoryInfo['used'],
            'free' => $this->memoryInfo['free'],
        ]);
        $this->totalMemory = $this->convert($this->memoryInfo['total']);
        $this->freeMemory = $this->convert($this->memoryInfo['free']);
        $this->usedMemory = $this->convert($this->memoryInfo['used']);
    }

    public function render()
    {
        return view('foxsun::components.widgets.memory-usage');
    }

    # Generated with ChatGPT.
    #
    function getProgressBarPieces(array $numbers): array {
        if (!isset($numbers['total']) || $numbers['total'] <= 0) {
            throw new InvalidArgumentException("Total key is required, and should be greater than 0.");
        }

        $total = $numbers['total'];
        $result = [];
        $keys = array_keys($numbers);

        // total всегда 100
        $result['total'] = 100;

        $pieces = [];
        $sum = 0;
        // сначала считаем все кроме total
        foreach ($numbers as $key => $value) {
            if ($key === 'total') continue;
            $pieces[$key] = ($value / $total) * 100;
        }

        // округляем, но аккуратно
        $rounded = [];
        $i = 0;
        $lastKey = array_key_last($pieces);
        foreach ($pieces as $key => $percent) {
            if ($key === $lastKey) {
                // последний — корректирующий
                $rounded[$key] = 100 - array_sum($rounded);
            } else {
                $rounded[$key] = round($percent);
            }
            $i++;
        }

        // добавляем в результат
        foreach ($rounded as $k => $v) {
            $result[$k] = $v;
        }

        return $result;
    }


    public function convert($size): string
    {
        $unit = ['b','kb','mb','gb','tb','pb'];
        return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
    }

    # Generated with ChatGPT.
    #
    private function getSystemMemoryInfo(): array
    {
        $data = file_get_contents("/proc/meminfo");
        $lines = explode("\n", trim($data));
        $info = [];
        foreach ($lines as $line) {
            if (preg_match('/^(\w+):\s+(\d+)/', $line, $matches)) {
                $info[$matches[1]] = (int) $matches[2]; // в килобайтах
            }
        }
        return [
            'total'     => $info['MemTotal'] * 1024,
            'available' => $info['MemAvailable'] * 1024,
            'free'      => $info['MemFree'] * 1024,
            'used'      => ($info['MemTotal'] - $info['MemAvailable']) * 1024,
        ];
    }
}
