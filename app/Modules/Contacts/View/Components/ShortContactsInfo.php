<?php

namespace App\Modules\Contacts\View\Components;

use App\Modules\Contacts\Models\Contact;
use App\Modules\Contacts\Repositories\ContactsRepositoryInterface;
use App\Modules\Contacts\Responses\ContactResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ShortContactsInfo extends Component
{
    public function __construct(
        protected ContactsRepositoryInterface $contactsRepository
    )
    {
    }

    /**
     * @param Collection $collection
     * @return array
     */
    protected function convertToArray(Collection $collection): array
    {
        return $collection->map(fn(Contact $item) => ContactResponse::toArray($item))->toArray();
    }

    /**
     * @return View
     * @throws \Throwable
     */
    public function render(): View
    {
        /** @var Collection<int, Contact> $collection */
        $collection = $this->contactsRepository->findByFooter();
        return view('components.short-contacts-info.index', [
            'contacts' => $this->convertToArray($collection),
        ]);
    }
}
