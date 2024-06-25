<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
@foreach($registros as $item)
    <item>
        <placa>{{ $item->Placa }}</placa>
        <modelo>{{ $item->Modelo }}</modelo>
        <cor>{{ $item->Cor }}</cor>
        <cambio>{{ $item->Câmbio }}</cambio>
        <combustivel>{{ $item->Combustível }}</combustivel>
    </item>
@endforeach
</data>

