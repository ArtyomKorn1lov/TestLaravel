<?php

namespace App\Core\Services;

interface JsonServiceInterface
{
    /**
     * @param string $path
     * @return array
     * @throws \Throwable
     */
    public function read(string $path): array;

    /**
     * @param string $path
     * @param array $data
     * @return void
     * @throws \Throwable
     */
    public function write(string $path, array $data): void;
}
