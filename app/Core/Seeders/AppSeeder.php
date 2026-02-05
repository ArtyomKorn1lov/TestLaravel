<?php

namespace App\Core\Seeders;

use App\Core\Services\JsonServiceInterface;
use Exception;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\File as FacadesFile;

abstract class AppSeeder extends Seeder
{
    /** @var string */
    protected const string CONTENT_FOLDER_PATH = '/database/seeders/';
    /** @var string */
    protected const string CONTENT_FILE_SUFFIX = '_content';
    /** @var string */
    protected const string RESOURCE_FOLDER_SUFFIX = '_resources';

    /**
     * @param JsonServiceInterface $jsonService
     */
    public function __construct(
        protected JsonServiceInterface $jsonService
    )
    {
    }

    /**
     * @param string $name
     * @param string $contentType
     * @return array
     * @throws FileNotFoundException
     * @throws Exception
     */
    public function readContentData(string $name = self::class, string $contentType = 'json'): array
    {
        if (empty($name)) {
            throw new Exception('Неверное имя seeder\'a ');
        }
        return $this->jsonService->read(
            path: base_path() . self::CONTENT_FOLDER_PATH . class_basename($name) . self::CONTENT_FILE_SUFFIX . '.' . $contentType
        );
    }

    /**
     * @param string $resourceName
     * @param string $name
     * @return string
     * @throws Exception
     */
    public function saveResource(string $resourceName, string $name = self::class,): string
    {
        if (empty($resourceName)) {
            return '';
        }
        $resourcePath =
            base_path()
            . self::CONTENT_FOLDER_PATH
            . class_basename($name)
            . self::RESOURCE_FOLDER_SUFFIX
            . '/' . $resourceName;
        if (!FacadesFile::exists($resourcePath)) {
            throw new Exception('Файла ' . $resourceName . ' по указанному пути ' . $resourcePath . ' не существует');
        }
        return Storage::disk('public')->put('/uploads', new File($resourcePath));
    }
}
