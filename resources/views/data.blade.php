<!-- resources/views/data.blade.php -->

<h1>Fetched Data</h1>

@foreach ($data['data']['results'] as $character)
    NAME: {{ $character['name'] }}
    <img src="{{ $character['thumbnail']['path'] }}.{{ $character['thumbnail']['extension'] }}" />
@endforeach
