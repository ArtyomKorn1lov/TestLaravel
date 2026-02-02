<?php

namespace App\Modules\Contacts\Repositories;

use App\Modules\Contacts\Repositories\Mappers\ContactMapper;
use Illuminate\Support\Collection;
use App\Modules\Contacts\ORM\Contact as ContactOrm;
use App\Modules\Contacts\Models\Contact as Contact;

class ContactsRepository implements ContactsRepositoryInterface
{
    /**
     * @return Collection
     */
    public function find(): Collection
    {
        $ormCollection = ContactOrm::query()
            ->orderBy('id')
            ->get();
        return ContactMapper::ormToModelCollection($ormCollection);
    }

    public function findByFooter(): Collection
    {
        $ormCollection = ContactOrm::query()
            ->orderBy('id')
            ->where('show_footer', '=', true)
            ->get();
        return ContactMapper::ormToModelCollection($ormCollection);
    }
}
