@component('layouts.front')
    @slot('h1')
        Discographie
    @endslot
    <section>

    <div class="info-dis">
        <h2 class="p-3">Lorem ipsum dolor sit amet.</h2>
        <h3 class="p-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque nam sed facilis voluptatem sunt similique.</h3>
        </div> 
        <div class="discs-group">
            @foreach($discs as $disc)
            <div class="o-disc-info d-flex">
                <div class="align-items-center d-flex disc-image p-2">
                <img class="img-fluid" src="{{ asset($disc->image_path) }}" alt="">
                </div>
                <div class="disc-description p-2">
                    <h3>{{ $disc->title }}</h3>
                    <h4>{{ $disc->subtitle }}</h4>
                    <p>{{ $disc->description }}</p>
                    @if ($disc->url) 
                    <div class="mt-2">
                        <a href="{{ $disc->url }}" target="_blank" class="btn btn-secondary border-0">Découvrer l'album</a>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
            <div class="mt-3">
                {{ $discs->onEachSide(0)->links() }}
            </div>
          </div>
    </section>
@endcomponent
