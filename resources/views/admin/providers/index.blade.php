<div>
hola gera
    <ul>
        @foreach ($providers as $provider)
            <li>{{ $provider->name }} -  {{ $provider->contact_name }} - {{ $provider->contact_phone }}</li>
        @endforeach
    </ul>
</div>
