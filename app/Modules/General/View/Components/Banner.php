<?php

namespace App\Modules\General\View\Components;

use App\Modules\General\Enums\BannerType;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Banner extends Component
{
    public function __construct(
        public string $type = BannerType::home->value
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
            default => BannerType::home,
        };
    }

    /**
     * @return View
     */
    public function render(): View
    {
        $bannerType = $this->convertBannerType($this->type);
        return match ($bannerType) {
            BannerType::contacts => view('components.banner.contacts'),
            BannerType::footer => view('components.banner.footer'),
            default => view('components.banner.home'),
        };
    }
}
