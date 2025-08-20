<?php

declare(strict_types=1);

namespace Foxsun\Admin\Components\Widgets;

class CpuUsageComponent
{
    private function getCpuUsageLinux(int $interval = 1): array
    {
        $stat1 = file_get_contents('/proc/stat');
        sleep($interval);
        $stat2 = file_get_contents('/proc/stat');

        $cpu1 = preg_split('/\s+/', trim(explode("\n", $stat1)[0]));
        $cpu2 = preg_split('/\s+/', trim(explode("\n", $stat2)[0]));

        // user, nice, system, idle, iowait, irq, softirq, steal
        $diff = [];
        for ($i = 1; $i < count($cpu1); $i++) {
            $diff[$i] = $cpu2[$i] - $cpu1[$i];
        }

        $idle = $diff[4];
        $total = array_sum($diff);

        $usage = ($total - $idle) / $total * 100;

        $cores = (int)shell_exec("nproc");
        return [
            'cores' => $cores,
            'max' => $cores * 100,   // максимально допустимая загрузка
            'current' => round($usage, 2),  // загрузка %
            'available' => round(100 - $usage, 2)
        ];
    }
}
