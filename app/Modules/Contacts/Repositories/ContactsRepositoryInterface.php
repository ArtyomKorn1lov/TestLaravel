<?php

namespace App\Modules\Contacts\Repositories;

use Illuminate\Support\Collection;
use App\Modules\Contacts\Models\Contact;

interface ContactsRepositoryInterface
{
    /**
     * @return Collection<int, Contact>
     * @throws \Throwable
     */
    public function find(): Collection;

    /**
     * @return Collection<int, Contact>
     * @throws \Throwable
     */
    public function findByFooter(): Collection;
}
