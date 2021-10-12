@extends('layout')
@section('content')

    <div class="container">
        <div class="event-detail-image">
            <img src="{{ $event->getFirstMediaUrl() }}">
        </div>
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h2>{{ $event->title }}</h2>
                <h5 class="text-muted"> {{ $event->location }} </h5>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">

                    <h4 class="text-primary">{{ $event->StartDateParts['month']}} {{ $event->StartDateParts['day'] }} -
                        {{$event->EndDateParts['month']}} {{$event->EndDateParts['day']}}</h4>
                    <h4 class="text-primary"> {{ $event->StartDateParts['hour']}} - {{ $event->EndDateParts['hour']}}</h4>



                <h4>{{ $event->description }} Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren</h4>
            </div>
        </div>
    </div>


@endsection
