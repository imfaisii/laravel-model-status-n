<?php

namespace Imfaisii\ModelStatus;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use App\Models\User;

class Status extends Model
{
    protected $guarded = [];

    protected $table = 'statuses';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function model(): MorphTo
    {
        return $this->morphTo();
    }

    public function __toString(): string
    {
        return $this->name;
    }
}
