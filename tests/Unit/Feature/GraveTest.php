<?php

use App\Filament\Admin\Resources\GraveResource\Pages\ListGraves;
use App\Models\Grave;
use App\Models\User;
use function Pest\Livewire\livewire;

beforeEach(function () {
    $this->actingAs(User::where('role', 'admin')->first());
});

it('can list graves', function () {
    $graves = Grave::limit(10)->get();

    livewire(ListGraves::class)
        ->assertCanSeeTableRecords($graves);
});
