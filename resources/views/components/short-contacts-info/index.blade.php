@php
    use App\Modules\Contacts\Enums\ContactTypes;

    if (empty($contacts)) {
        return;
    }
@endphp
<ul class="footer-contacts">
    @foreach($contacts as $item)
        @switch($item['type'])
            @case(ContactTypes::phone->value)
                @php
                    $label = empty($item['label']) ? $item['value'] : $item['label'];
                @endphp
                <li class="footer-contacts__element footer-contacts__element_tel">
                    <a href="tel:{{ $item['value'] }}" title="{{ $label }}">
                        {{ $label }}
                    </a>
                </li>
                @break
            @case(ContactTypes::email->value)
                @php
                    $label = empty($item['label']) ? $item['value'] : $item['label'];
                @endphp
                <li class="footer-contacts__element footer-contacts__element_mail">
                    <a href="mailto:{{ $item['value'] }}" title="{{ $label }}">
                        {{ $label }}
                    </a>
                </li>
                @break
            @default
                <li class="footer-contacts__element">
                    <span>{{ $item['value'] }}</span>
                </li>
                @break
        @endswitch
    @endforeach
</ul>
