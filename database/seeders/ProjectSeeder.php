<?php

namespace Database\Seeders;

use App\Core\ORM\Picture;
use App\Modules\News\ORM\Project;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Core\Seeders\AppSeeder;
use Exception;

class ProjectSeeder extends AppSeeder
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

        foreach ($result["items"] as $item) {
            $orm = Project::query()
                ->where('code', '=', $item['code'])
                ->first();

            if (empty($orm)) {
                $orm = new Project();
            }

            $orm->code = $item['code'];
            $orm->name = $item['name'];
            $orm->is_primary = (bool)$item['is_primary'];

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
