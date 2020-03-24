<?php

namespace App\Traits;

trait IsAdmin {

    public function isAdmin()
    {
        return in_array($this->id, config('admin.ids'));
    }

}
