<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EventsResource\Pages;

class EventsResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('pamflet')
                    ->label('Pamflet')
                    ->image()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->label('Nama Kegiatan')
                    ->required(),
                Forms\Components\DatePicker::make('date')
                    ->label('Tanggal Kegiatan')
                    ->required(),
                Forms\Components\TextInput::make('price')
                    ->label('Biaya')
                    ->numeric()
                    ->nullable(),
                Forms\Components\TextInput::make('link_info')
                    ->label('Link Informasi')
                    ->url()
                    ->nullable(),
                Forms\Components\TextInput::make('link_reg')
                    ->label('Link Registrasi')
                    ->url()
                    ->nullable(),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('pamflet')
                    ->label('Pamflet')
                    ->searchable()
                    ->extraAttributes(['class' => 'cursor-pointer'])
                    ->action(
                        Tables\Actions\Action::make('view')
                            ->label('')
                            ->modalHeading('Pamflet')
                            ->modalContent(fn ($record) => new HtmlString('<img src="' . asset('storage/' . $record->pamflet) . '" style="width:100%">'))
                            ->modalSubmitAction(false)
                    ),
                Tables\Columns\TextColumn::make('title')
                    ->label('Nama Kegiatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('Tanggal Kegiatan')
                    ->date(),
                Tables\Columns\TextColumn::make('price')
                    ->label('Biaya')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('link_info')
                    ->label('Link Informasi')
                    ->url(fn ($record) => $record->link_info),
                Tables\Columns\TextColumn::make('link_reg')
                    ->label('Link Registrasi')
                    ->url(fn ($record) => $record->link_reg),
            ])
            ->filters([
                // Add filters if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvents::route('/create'),
            'edit' => Pages\EditEvents::route('/{record}/edit'),
        ];
    }
}
