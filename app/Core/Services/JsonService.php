<?php

namespace App\Core\Services;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\File;
use Exception;

class JsonService implements JsonServiceInterface
{
    /**
     * @param string $path
     * @return array
     * @throws FileNotFoundException
     * @throws Exception
     */
    public function read(string $path): array
    {
        if (empty($path)) {
            throw new Exception('Файл по пути ' . $path . ' не найден');
        }
        return File::json($path);
    }

    /**
     * @param string $path
     * @param array $data
     * @return void
     */
    public function write(string $path, array $data): void
    {
        // TODO: Implement write() method.
    }
}
