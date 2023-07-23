@component('layouts.front')
    @slot('h1')
        Galerie photo
    @endslot
    <section class="info-event">
        <h2 class="p-3">Lorem ipsum dolor sit amet.</h2>
        <h3 class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque nam sed facilis voluptatem sunt similique.</h3>
        </section> 
    <section class="o-photo-gallery ">
        <div class="container">
            <h3>Découvrez notre chorale</h3>
            <div class="photos" data-bss-baguettebox="">
                @foreach($images as $image)
                <div class="photo">
                    <a href="{{ $image->path }}"><img class="img-fluid" src="{{ $image->thumbpath }}" alt=""></a>
                </div>
                @endforeach
            </div>
            <div class="mt-3">
                {{ $images->onEachSide(0)->links() }}
            </div>
        </div>
    </section>
@endcomponent
