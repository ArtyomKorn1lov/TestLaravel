<?php

namespace App\Modules\News\View\Components;

use App\Modules\News\Models\News;
use App\Modules\News\Repositories\NewsRepositoryInterface;
use App\Modules\News\Responses\NewsResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class NewsList extends Component
{
    public function __construct(
        public NewsRepositoryInterface $newsRepository
    )
    {
    }

    /**
     * @param Collection<int, News> $collection
     * @return array
     */
    protected function convertToArray(Collection $collection): array
    {
        return $collection->map(fn(News $item) => NewsResponse::toArray($item))->toArray();
    }

    /**
     * @return View
     * @throws \Throwable
     */
    public function render(): View
    {
        /** @var Collection<int, News> $collection */
        $collection = $this->newsRepository->find();
        return view('components.news-list.index', [
            'items' => $this->convertToArray($collection),
        ]);
    }
}
