<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use App\Models\Employee;
use Filament\Actions;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Resources\Pages\ListRecords;

class ListEmployees extends ListRecords
{
    protected static string $resource = EmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    public function getTabs(): array
    {
        return[
           // // 'All' => Tab::make(),
           // // 'This week' =>   Tab::make()
           // // ->modifyQueryUsing(fn(Builder $query) => $query->where('date_hired' , '>' , now()->subWeek()))
           // // ->badge(Employee::query()->where('date_hired' , '>' , now()->subWeek())->count()),
           // // 'This Month' => Tab::make()
           // // ->modifyQueryUsing(fn(Builder $query) => $query->where('date_hired' , '>' , now()->subMonth()))
           // // ->badge(Employee::query()->where('date_hired' , '>' , now()->subWeek())->count()),
           // // 'This Year' => Tab::make()
           // // ->modifyQueryUsing(fn(Builder $query) => $query->where('date_hired' , '>' , now()->subYear()))
           // // ->badge(Employee::query()->where('date_hired' , '>' , now()->subWeek())->count()),

        ];
    }
}
