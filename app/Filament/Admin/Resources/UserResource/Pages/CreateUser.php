<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Enums\Role;
use App\Filament\Admin\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected static ?string $title = 'Tambah pengguna';
}
