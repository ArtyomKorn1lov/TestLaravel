<div class="contacts__section">
    <div class="contacts__image"></div>

    @if(!empty($contacts['address']))
        <div class="contacts__adress">
            <h4 class="small-header uppercase-text">ADDRESS</h4>
            @foreach($contacts['address'] as $item)
                <p class="regular-text">
                    {{ $item['value'] }}
                </p>
            @endforeach
        </div>
    @endif

    @if(!empty($contacts['phones']))
        <div class="contacts__phones contact-phones">
            <h4 class="contact-phones__title small-header uppercase-text">Phone</h4>
            <ul class="contact-phones__elements c-phones">
                @foreach($contacts['phones'] as $item)
                    @php
                        $label = empty($item['label']) ? $item['value'] : $item['label'];
                    @endphp
                    <li class="c-phones__element">
                        <div class="c-phones__icon contacts-service-icon"></div>
                        <a class="c-phones__link" href="tel:{{ $item['value'] }}" title="{{ $label }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(!empty($contacts['services']))
        <div class="contact__services contact-services">
            <h4 class="contact-services__title small-header uppercase-text">Online service</h4>
            <ul class="contact-services__elements online-services">
                @foreach($contacts['services'] as $item)
                    @php
                        $label = empty($item['label']) ? $item['value'] : $item['label'];
                        $value = $item['type'] === App\Modules\Contacts\Enums\ContactTypes::email->value ? 'mailto:'.$item['value'] : $item['value'];
                    @endphp
                    <li class="online-services__element">
                        <div class="online-services__icon_site contacts-service-icon"></div>
                        <a class="online-services__link" href="{{ $value }}" title="{{ $label }}" target="_blank">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
