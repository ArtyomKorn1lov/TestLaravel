<?php

namespace App\Modules\Contacts\Repositories\Mappers;

use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use App\Modules\Contacts\ORM\Contact as ContactOrm;
use App\Modules\Contacts\Models\Contact;

class ContactMapper
{
    /**
     * @param EloquentCollection<int, ContactOrm> $ormCollection
     * @return Collection<int, Contact>
     */
    public static function ormCollectionToModelList(EloquentCollection $ormCollection): Collection
    {
        /** @var Collection<int, Contact> $collection */
        $collection = new Collection();
        if ($ormCollection->isEmpty()) {
            return $collection;
        }
        foreach ($ormCollection as $item) {
            $collection->push(self::ormToModel($item));
        }
        return $collection;
    }

    /**
     * @param ContactOrm $orm
     * @return Contact
     */
    public static function ormToModel(ContactOrm $orm): Contact
    {
        return new Contact(
            id: $orm->id,
            code: $orm->code,
            type: $orm->type,
            value: $orm->value,
            showFooter: $orm->show_footer ?? false,
            label: $orm->label ?? '',
        );
    }
}
