<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Visit;
use Carbon\Carbon;

class BlogChartReader extends ChartWidget
{
    protected static ?string $heading = 'Riwayat Kunjungan 7 Hari Terakhir';
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        // Ambil data kunjungan 7 hari terakhir
        $visits = Visit::selectRaw('DATE(visited_at) as date, COUNT(*) as total')
            ->where('visited_at', '>=', Carbon::now()->subDays(7))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        // Konversi data ke format yang dibutuhkan oleh chart
        $labels = [];
        $data = [];
        foreach ($visits as $visit) {
            $labels[] = $visit->date;
            $data[] = $visit->total;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Jumlah Pengunjung',
                    'data' => $data,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
