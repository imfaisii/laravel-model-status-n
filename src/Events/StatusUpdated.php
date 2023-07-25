<?php

namespace Imfaisii\ModelStatus\Events;

use Illuminate\Database\Eloquent\Model;
use Imfaisii\ModelStatus\Status;

class StatusUpdated
{
    /** @var \Imfaisii\ModelStatus\Status|null */
    public $oldStatus;

    /** @var \Imfaisii\ModelStatus\Status */
    public $newStatus;

    /** @var \Illuminate\Database\Eloquent\Model */
    public $model;

    public function __construct(?Status $oldStatus, Status $newStatus, Model $model)
    {
        $this->oldStatus = $oldStatus;

        $this->newStatus = $newStatus;

        $this->model = $model;
    }
}
