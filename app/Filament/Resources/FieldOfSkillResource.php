<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FieldOfSkillResource\Pages;
use App\Filament\Resources\FieldOfSkillResource\RelationManagers;
use App\Models\FieldOfSkill;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FieldOfSkillResource extends Resource
{
    protected static ?string $model = FieldOfSkill::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    protected static ?string $navigationLabel = 'Skills';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')->required(),
                    Textarea::make('description')->required(),
                    TextInput::make('percentage')
                        ->numeric()
                        ->required()
                        ->maxValue(100),
                    FileUpload::make('image')
                        ->disk('public')
                        ->directory('skill-icon')->required(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('percentage')
                    ->label('Persentase')
                    ->formatStateUsing(fn($state) => $state . '%'),
                Tables\Columns\ImageColumn::make('image')
                    ->url(fn($record) => asset('storage/' . $record->image)),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFieldOfSkills::route('/'),
            'create' => Pages\CreateFieldOfSkill::route('/create'),
            'edit' => Pages\EditFieldOfSkill::route('/{record}/edit'),
        ];
    }
}
