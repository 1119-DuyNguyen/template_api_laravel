<?php

namespace App\Livewire;

use App\Models\RecyclePlace;
use App\Models\Role;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridColumns;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;

final class RecyclePlaceTable extends PowerGridComponent
{
    use WithExport;

    public function setUp(): array
    {
        //        $this->showCheckBox();

        return [
            //            Exportable::make('export')
            //                ->striped()
            //                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()
                ->showSearchInput()
                ->withoutLoading(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];
    }

    public function datasource(): Builder
    {
        return RecyclePlace::query();
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function addColumns(): PowerGridColumns
    {
        return PowerGrid::columns()
            ->addColumn('name')
            ->addColumn('contact')
            ->addColumn('action', function ($query) {
                if ($query->id != 1) {
                    $editBtn = "<a href='" . route(
                            'web.recycle-places.edit',
                            $query->id
                        ) . "' class='btn btn-primary'><i class='far fa-edit'></i></a>";
                    $deleteBtn = "<a href='" . route(
                            'web.recycle-places.destroy',
                            $query->id
                        ) . "' class='btn btn-danger ml-2 delete-item'><i class='far fa-trash-alt'></i></a>";

                    return $editBtn . $deleteBtn;
                }
            })
            ->addColumn(
                'created_at_formatted',
                fn($model) => Carbon::parse($model->created_at)->format('d/m/Y H:i:s')
            );
    }

    public function columns(): array
    {
        return [
            Column::make('Nơi tái chế', 'name')
                ->sortable()
                ->searchable(),
            Column::make('Liên hệ', 'contact'),

            Column::make('Ngày Tạo', 'created_at_formatted', 'created_at')
                ->sortable(),

            Column::make('Thao Tác', 'action')
        ];
    }

    //    public function filters(): array
    //    {
    //        return [
    //            Filter::datetimepicker('created_at'),
    //        ];
    //    }


    /*
    public function actionRules($row): array
    {
       return [
            // Hide button edit for ID 1
            Rule::button('edit')
                ->when(fn($row) => $row->id === 1)
                ->hide(),
        ];
    }
    */
}
