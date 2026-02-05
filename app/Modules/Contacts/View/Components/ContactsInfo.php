<?php

namespace App\Modules\Contacts\View\Components;

use App\Modules\Contacts\Enums\ContactTypes;
use App\Modules\Contacts\Repositories\ContactsRepositoryInterface;
use App\Modules\Contacts\Models\Contact;
use App\Modules\Contacts\Responses\ContactResponse;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactsInfo extends Component
{
    /**
     * @param ContactsRepositoryInterface $contactsRepository
     */
    public function __construct(
        protected ContactsRepositoryInterface $contactsRepository,
    )
    {
    }

    /**
     * @param Collection<int, Contact> $collection
     * @return array
     */
    protected function group(Collection $collection): array
    {
        $groups = [
            'address' => [],
            'phones' => [],
            'services' => [],
        ];
        foreach ($collection as $item) {
            switch ($item->type) {
                case ContactTypes::website:
                case ContactTypes::email:
                    $groups['services'][] = ContactResponse::toArray($item);
                    break;
                case ContactTypes::phone:
                    $groups['phones'][] = ContactResponse::toArray($item);
                    break;
                case ContactTypes::address:
                    $groups['address'][] = ContactResponse::toArray($item);
                    break;
            }
        }
        return $groups;
    }

    /**
     * @return View
     * @throws \Throwable
     */
    public function render(): View
    {
        /** @var Collection<int, Contact> $collection */
        $collection = $this->contactsRepository->find();
        return view('components.contacts-info.index', [
            'contacts' => $this->group($collection),
        ]);
    }
}
