<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Client extends Model
{
    protected $fillable = [
        'client_name',
        'company_type',
        'address',
        'phone',
        'email',
        'start_date',
        'end_date'
    ];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function getStatusAttribute()
    {
        if (!$this->end_date) {
            return 'Aktif';
        }

        $today = Carbon::today();
        $endDate = Carbon::parse($this->end_date);

        if ($endDate->isPast()) {
            return 'Expired';
        }

        $remainingDays = $today->diffInDays($endDate, false);

        if ($remainingDays <= 30 && $remainingDays >= 0) {
            return 'Akan Expired';
        }

        return 'Aktif';
    }

    public function getRemainingDaysAttribute()
    {
        if (!$this->end_date) {
            return 0;
        }

        return Carbon::today()->diffInDays(
            Carbon::parse($this->end_date),
            false
        );
    }

    public function getStatusBadgeClassAttribute()
    {
        return match ($this->status) {
            'Aktif' => 'success',
            'Akan Expired' => 'warning',
            'Expired' => 'danger',
            default => 'secondary',
        };
    }
}