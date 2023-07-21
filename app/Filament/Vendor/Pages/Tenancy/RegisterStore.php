<?php

namespace App\Filament\Vendor\Pages\Tenancy;

use App\Models\Store;
use Faker\Provider\ar_EG\Text;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
use Illuminate\Database\Eloquent\Model;

class RegisterStore extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Create Store';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Store name')
            ]);
    }

    protected function handleRegistration(array $data): Store
    {
        return auth()->user()->stores()->create($data);
    }
}
