<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Verse;
use DragonCode\Contracts\Http\Builder;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Filters\DateFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;
use Rappasoft\LaravelLivewireTables\Views\Filters\TextFilter;

class VerseTable extends DataTableComponent
{
    protected $model = Verse::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('id', 'asc');
        $this->setSingleSortingDisabled();
        $this->setBulkActions([
            'deleteSelected' => 'Eliminar',
        ]);
    }

    // public function filters(): array
    // {
    //     return [
    //         TextFilter::make('Content')
    //             ->config([
    //                 'placeholder' => 'Search Name',
    //                 'maxlength' => '25',
    //             ])
    //     ];
    // }

    public function columns(): array
    {
        return [
            Column::make("id", "id")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Libro", "book.name")
                ->sortable()
                ->searchable(),
            Column::make("Capitulo", "chapter")
                ->sortable()
                ->searchable(),
            Column::make("Versículo", "verse")
                ->sortable()
                ->searchable(),
            BooleanColumn::make("Url post", "url_post")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            // Column::make("Texto", "content")
            //     ->sortable()
            //     ->searchable()
            //     ->collapseOnTablet(),
            Column::make("Creado", "created_at")
                ->sortable()
                ->format(fn ($value) => $value->format('d/m/Y'))
                ->collapseOnTablet(),
            Column::make("Acciones", "id")
                ->format(fn ($value) => view('tenancy.verses.partials.actions', [
                    'verse' => $value
                ]))
                ->collapseOnTablet(),
        ];
    }

    public function filters(): array
    {
        return [
            DateFilter::make('Desde')
                ->filter(function ($query, $value) {
                    $query->whereDate('verses.created_at', '>=', $value);
                }),
            DateFilter::make('Hasta')
                ->filter(function ($query, $value) {
                    $query->whereDate('verses.created_at', '<=', $value);
                }),
            TextFilter::make('Libro')
                ->filter(function ($query, $value) {
                    $query->where('name', 'like', '%' . $value . '%');
                }),
            TextFilter::make('Capitulo')
                ->filter(function ($query, $value) {
                    $query->where('chapter', 'like', '%' . $value . '%');
                }),
            TextFilter::make('Versículo')
                ->filter(function ($query, $value) {
                    $query->where('verse', 'like', '%' . $value . '%');
                })
        ];
    }

    public function deleteSelected()
    {
        $verses = Verse::whereIn('id', $this->getSelected())->delete();
        $this->clearSelected();
    }
}
