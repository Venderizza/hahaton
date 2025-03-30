<?php

namespace App\Services;

use App\Models\Call;
use App\Models\Lead;

class LeadService
{
    public static function getCountByType(int $type): int{

        return Lead::query()->where('status_id',$type)->count();
    }



    public static function calcPercentGrow(int $type): int {

        $currentCount = self::getCountByType($type);

        $previousCount = Lead::query()
            ->where('status_id', $type)
            ->where('created_at', '<', now()->subMonth()) // Предполагается, что у вас есть поле created_at
            ->count();

        if ($previousCount === 0) {
            return 0;
        }


        $percentGrow = (($currentCount - $previousCount) / $previousCount) * 100;

        return (int) round($percentGrow);
    }
}
