<?php

namespace App\Modules\General\View\Components;

use App\Modules\General\Enums\BannerType;
use App\Modules\General\Repositories\BannerRepositoryInterface;
use App\Modules\General\Model\Banner as BannerModel;
use App\Modules\General\Responses\BannerResponse;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    /**
     * @param BannerRepositoryInterface $bannerRepository
     * @param string $type
     */
    public function __construct(
        public BannerRepositoryInterface $bannerRepository,
        public string $type = BannerType::main->value
    )
    {
    }

    /**
     * @param string $type
     * @return BannerType
     */
    protected function convertBannerType(string $type): BannerType
    {
        return match ($type) {
            BannerType::contacts->value => BannerType::contacts,
            BannerType::footer->value => BannerType::footer,
            default => BannerType::main,
        };
    }

    /**
     * @return View|string
     */
    public function render(): View|string
    {
        /** @var BannerModel|null $banner */
        $banner = $this->bannerRepository->findByCode($this->type);
        if (empty($banner)) {
            return '';
        }
        $response['item'] = BannerResponse::toArray($banner);
        $bannerType = $this->convertBannerType($this->type);
        return match ($bannerType) {
            BannerType::contacts => view('components.banner.contacts', $response),
            BannerType::footer => view('components.banner.footer', $response),
            default => view('components.banner.home', $response),
        };
    }
}
