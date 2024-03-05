<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use MoonShine\Fields\ID;
use App\Models\ArElement;

use MoonShine\Fields\File;
use MoonShine\Fields\Text;
use MoonShine\Fields\Image;
use MoonShine\Decorations\Block;
use MoonShine\Resources\ModelResource;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends ModelResource<ArElement>
 */
class ArElementResource extends ModelResource
{
    protected string $model = ArElement::class;

    protected string $title = 'AR Элементы';

    protected string $column = 'name';

    public function fields(): array
    {
        return [
            Block::make([
                ID::make()->sortable(),
                Text::make('Имя','name'),
                Image::make('Изображение', 'img')->accept("image/jpeg"),
                File::make('Звук','sound')->accept("audio/mp3")
            ]),
        ];
    }

    public function rules(Model $item): array
    {
        return [];
    }
}
