<?php

namespace App\Modules\News\View\Components;

use App\Modules\News\Responses\ProjectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;
use App\Modules\News\Repositories\ProjectRepositoryInterface;
use App\Modules\News\Models\Project;

class ProjectsList extends Component
{
    public function __construct(
        public ProjectRepositoryInterface $projectRepository,
    )
    {
    }

    /**
     * @param Collection<int, Project> $collection
     * @return array
     */
    protected function group(Collection $collection): array
    {
        $primaryItem = null;
        $items = [];
        $flag = false;
        foreach ($collection as $item) {
            $response = ProjectResponse::toArray($item);
            if ($item->isPrimary && !$flag) {
                $primaryItem = $response;
                $flag = true;
                continue;
            }
            $items[] = $response;
        }
        return [$primaryItem, $items];
    }

    public function render(): View
    {
        /** @var Collection<int, Project> $collection */
        $collection = $this->projectRepository->find();
        [$primaryItem, $items] = $this->group($collection);
        return view('components.project-list.index', [
            'primaryItem' => $primaryItem,
            'items' => $items,
        ]);
    }
}
