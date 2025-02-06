@props(['employer', 'width' => 90])

{{-- <img src="{{ asset('https://picsum.photos/seed/picsum/200/300') }}" alt="" class="rounded-xl" width="{{ $width }}">
--}}
<img src="{{ asset("https://picsum.photos/200/300?random=2") }}" alt="" class="rounded-xl" width="{{ $width }}">