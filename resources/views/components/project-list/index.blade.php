@php
    if (empty($primaryItem) && empty($items)) {
        return;
    }
@endphp
<div class="our-finished-project" id="fineshedProjects">
    <h3 class="medium-header">Our Finished Project</h3>
    <p class="regular-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    @if(!empty($primaryItem))
        <a class="our-finished-project__block" href="#" title="{{ $primaryItem['name'] }}">
            @if(!empty($primaryItem['picture']))
                <img
                    class="our-finished-project__image"
                    src="{{ asset('storage/' . $primaryItem['picture']) }}"
                    alt="{{ $primaryItem['name'] }}"
                />
            @endif
            <span class="our-finished-project__text">
                {{ $primaryItem['name'] }}
            </span>
        </a>
    @endif
    @if(!empty($items))
        <div class="our-finished-project__group">
            @foreach($items as $item)
                <a
                    class="our-finished-project__block our-finished-project__block_small"
                    href="#"
                    title="{{ $item['name'] }}"
                >
                    @if(!empty($item['picture']))
                        <img
                            class="our-finished-project__image"
                            src="{{ asset('storage/' . $item['picture']) }}"
                            alt="{{ $item['name'] }}"
                        />
                    @endif
                    <span class="our-finished-project__text our-finished-project__text_left">
                        {{ $item['name'] }}
                    </span>
                </a>
            @endforeach
        </div>
    @endif
</div>
