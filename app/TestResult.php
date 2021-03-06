<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TestResult extends Pivot
{
    protected $dates = ['started_at'];

    public function getPercentageAttribute() {
        return round($this['points'] * 100 / $this['max_points'], 2);
    }
}
