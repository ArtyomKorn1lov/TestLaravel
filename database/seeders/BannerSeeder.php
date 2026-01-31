<?php

namespace Database\Seeders;

use App\Core\ORM\Picture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Core\Seeders\AppSeeder;
use App\Modules\General\ORM\Banner;

class BannerSeeder extends AppSeeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $result = $this->readContentData(self::class);

        foreach ($result['items'] as $item) {
            $orm = Banner::query()
                ->where('code', $item['code'])
                ->first();

            if (empty($orm)) {
                $orm = new Banner();
            }

            $orm->code = $item['code'];
            $orm->name = $item['name'];
            $orm->description = $item['description'];

            // TODO исправить
            /*if (!empty($item['picture'])) {
                $fileName = $this->saveResource($item['picture'], self::class);
                $orm->picture = new Picture()::create([
                    'path' => $fileName,
                ]);
            }*/

            $orm->save();
        }
    }
}
