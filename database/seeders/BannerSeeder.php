<?php

namespace Database\Seeders;

use App\Core\ORM\Picture;
use App\Core\ORM\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Core\Seeders\AppSeeder;
use App\Modules\General\ORM\Banner;
use Exception;

class BannerSeeder extends AppSeeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     * @throws Exception
     */
    public function run(): void
    {
        $result = $this->readContentData(self::class);

        foreach ($result['items'] as $item) {
            $orm = Banner::query()
                ->where('code', '=', $item['code'])
                ->first();

            if (empty($orm)) {
                $orm = new Banner();
            }

            $orm->code = $item['code'];
            $orm->name = $item['name'];
            $orm->description = $item['description'];

            if (!empty($item['link'])) {
                $link = new Link();
                $link->url = $item['link'];
                $link->save();
                $orm->link()->associate($link);
            }

            if (!empty($item['picture'])) {
                $fileName = $this->saveResource($item['picture'], self::class);
                $picture = new Picture();
                $picture->src = $fileName;
                $picture->save();
                $orm->picture()->associate($picture);
            }

            $orm->save();
        }
    }
}
