<?php

namespace Database\Seeders;

use App\Core\Seeders\AppSeeder;
use App\Modules\Contacts\Enums\ContactTypes;
use App\Modules\Contacts\ORM\Contact;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactsSeeder extends AppSeeder
{
    use WithoutModelEvents;

    /**
     * @param string $type
     * @return ContactTypes
     */
    private function getType(string $type): ContactTypes
    {
        return match ($type) {
            ContactTypes::address->value => ContactTypes::address,
            ContactTypes::phone->value => ContactTypes::phone,
            ContactTypes::email->value => ContactTypes::email,
            default => ContactTypes::website
        };
    }

    /**
     * Run the database seeds.
     * @throws FileNotFoundException
     */
    public function run(): void
    {
        $result = $this->readContentData(self::class);

        foreach ($result['items'] as $item) {
            $orm = Contact::query()
                ->where('code', $item['code'])
                ->first();

            if (empty($orm)) {
                $orm = new Contact();
            }

            $orm->code = (string)$item['code'];
            $orm->type = $this->getType((string)$item['type']);
            $orm->label = (string)$item['label'];
            $orm->value = (string)$item['value'];
            $orm->show_footer = (bool)$item['show_footer'];

            $orm->save();
        }
    }
}
