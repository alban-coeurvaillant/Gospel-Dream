@component('layouts.front')
    @slot('h1')
        Concerts et reservations
    @endslot
    <section class="infos-event">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque nam sed facilis voluptatem sunt similique.</p>
    </section> 
    @foreach($data as $row)
    <div class="o-calendar-date ">
        <p>{{ ucfirst($row->first()->date->isoFormat('MMMM YYYY')) }}</p>
    </div>
    <div class="o-events mt-3">
        @foreach($row as $event)
        <div class="align-items-center border col d-flex flex-column flex-lg-row o-card-event p-2 mt-2">
            <span class="d-flex w-50 text-uppercase">{{ $event->place }}</span>
            <div class="d-flex m-2 order-first">
                <span class="event-image d-flex d-none mx-2">img</span>
                <span class="event-description d-flex d-none mx-2">{{ $event->description }}</span>
                <span class="day d-flex  mx-2">{{ ucfirst($event->date->isoFormat('dddd')) }}</span>
                <span class="date d-flex mx-2 order-first">{{ $event->date->format('d/m/y') }}</span>
                <span class="time d-flex mx-2">{{ $event->time }}</span>
            </div>
            <span class="d-flex flex-grow-1 justify-content-center">
                <x-button-link  href="{{ route('event.reservation', $event) }}" class="btn h-auto border-0 w-100">{{ __('Book') }}</x-button-link>
            </span>
        </div>
        @endforeach
    </div>
    @endforeach
    <div class="mt-3">
        {{ $events->onEachSide(2)->links() }}
    </div>
@endcomponent
