@vite('resources/sass/event.scss')
@vite('resources/js/app.js')


@php
    $items = [
        "date" => "26/04/2024",
        "time" => "08:00 - 11:00 WIB",
        "description" => "Join the impactful journey of planting mangroves, where you'll learn, collaborate with locals, earn recognition, and share your story through media coverage",
        "rundown" => [
            [
                "number" => "01", 
                "description" => "Introducing the beauty of mangroves on a journey to the planting site."
            ],
            [
                "number" => "02", 
                "description" => "Working together with local farmers while planting each mangrove"
            ],
            [
                "number" => "03", 
                "description" => "Exploring the wonders of mangrove ecotourism, an educational adventure."
            ],
            [
                "number" => "04", 
                "description" => "Receive a plaque & badge, a mark of honor for every tree you plant."
            ],
            [
                "number" => "05", 
                "description" => "Coverage & documentation by news media, share your story of change!"
            ]
        ]
    ];
@endphp

<section class="event-section" id="#event">
    <h3 class="title-event">Event Summary</h3>
    <center><p class="sum-event">We give you a brief overview of the event to give you a glimpse of what we're doing 
    in the Green Haven Project, download the detailed PDF to see how you can get involved.</p></center>
    
    <div class="schedule">
        <div class="text-schedule">
            <p class="date-schedule">{{ $items['date'] }}</p>
            <p class="time-schedule">{{ $items['time'] }}</p>
            <p class="desc-schedule">{{ $items['description'] }}</p>
            
            <button type="button" class="btn-schedule">View Event Details</button>
        </div>
        <div class="carousel">
           <!-- Swiper -->
           <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{asset('assets/event/docs/first.svg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/event/docs/docs1.jpg')}}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{asset('assets/event/docs/dosc2.jpg')}}" alt="">
                </div>
             
            </div>
            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    </div>

    <div class="rundown">
        @foreach($items['rundown'] as $item)
            <div class="rundown-box">
                <h4>{{ $item['number'] }}</h4>
                <p>{{ $item['description'] }}</p>
            </div>
        @endforeach
    </div>
</section>
