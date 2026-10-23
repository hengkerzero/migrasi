<x-layout>

    <h1>Ini adalah halaman Film</h1>

    @if ($filmTersedia)
        @foreach ($filmList as $film)
            <h1>{{ $film }}</h1>
        @endforeach    
    @else
        <h1>Film Tidak Tersedia</h1>
    @endif

</x-layout>
