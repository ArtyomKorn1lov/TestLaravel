<?php

namespace Database\Seeders;

use App\Core\ORM\Link;
use App\Core\ORM\Picture;
use App\Modules\News\ORM\News;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Core\Seeders\AppSeeder;
use Exception;

class NewsSeeder extends AppSeeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     * @throws FileNotFoundException
     * @throws Exception
     */
    public function run(): void
    {
        $result = $this->readContentData(self::class);

        foreach ($result['items'] as $item) {
            $orm = News::query()
                ->where('code', $item['code'])
                ->first();

            if (empty($orm)) {
                $orm = new News();
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
