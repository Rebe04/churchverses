<?php

namespace App\Observers;

use App\Models\Verse;

class VerseObserver
{
    public function creating(Verse $verse)
    {
        $verse->sort = Verse::max('sort') + 1;
    }
}
