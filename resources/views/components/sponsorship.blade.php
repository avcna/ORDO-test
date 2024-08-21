@vite('resources/sass/sponsorship.scss')

@php
    $items = [
        [
            'logo' => '', 
            'member-tier' => 'Seedling Scout', 
            'min-seeds' => '5', 
            'min-buy' => '75K', 
            'benefit' => 'Badge', 
            'donors' => '4,900'
        ],
        [
            'logo' => '', 
            'member-tier' => 'Sapling Savior', 
            'min-seeds' => '10', 
            'min-buy' => '150K', 
            'benefit' => 'Badge + Pin', 
            'donors' => '4,300'
        ],
        [
            'logo' => '', 
            'member-tier' => 'Free Titan', 
            'min-seeds' => '20', 
            'min-buy' => '300K', 
            'benefit' => 'Badge + Pin', 
            'donors' => '15,000'
        ],
        [
            'logo' => '', 
            'member-tier' => 'Mangrove Master', 
            'min-seeds' => '50', 
            'min-buy' => '750K', 
            'benefit' => 'Badge + Pin + Badge', 
            'donors' => '5,000'
        ],
        [
            'logo' => '', 
            'member-tier' => 'Guardin Of The Grove', 
            'min-seeds' => '100', 
            'min-buy' => '1,500K', 
            'benefit' => 'Badge + Pin + Bag', 
            'donors' => '300'
        ],
        [
            'logo' => '', 
            'member-tier' => 'Mangrove Maven', 
            'min-seeds' => '200', 
            'min-buy' => '3,000K', 
            'benefit' => 'Badge + Pin + Bag', 
            'donors' => '10'
        ]
    ];

    $corporate = [
        ['benefit'=>'Price', 'trail'=>'15 Million IDR', 'green'=>'30 Million IDR', 'vanguard'=>'45 Million IDR'],
        ['benefit'=>'CO2 Sequestration', 'trail'=>'22,5 ton/year', 'green'=>'45 ton/year', 'vanguard'=>'67,5 ton/year'],
        ['benefit'=>'Number of Trees', 'trail'=>'1000 Trees', 'green'=>'2000 Trees', 'vanguard'=>'3000 Trees'],
        ['benefit'=>'Logo on JCI Banner', 'trail'=>true, 'green'=>true, 'vanguard'=>true],
        ['benefit'=>'Logo on Communal Stainless Plate', 'trail'=>true, 'green'=>true, 'vanguard'=>true],
        ['benefit'=>'Considered as Main Sponsor', 'trail'=>true, 'green'=>true, 'vanguard'=>true],
        ['benefit'=>'Dedicated Stainless Plate', 'trail'=>false, 'green'=>true, 'vanguard'=>true],
        ['benefit'=>'Report Update on Planted Trees', 'trail'=>false, 'green'=>true, 'vanguard'=>true],
        ['benefit'=>'Logo on Event Clothings', 'trail'=>false, 'green'=>false, 'vanguard'=>true]
        ];

@endphp

<section class="sponsor-section" id="sponsor">
    <h3 class="title-sponsor">Sponsorship Packages</h3>
     <center><p class="desc-sponsor">Our sponsorship package offers branding, promotional opportunities, and visibility at our event, ideal for enhancing company presence and community engagement.</p></center>

    <h4>Personal Sponsorship Package</h4>
    
        <table>
            <thead>
                <tr>
                    <th>Membership Tier</th>
                    <th>Min. Seeds</th>
                    <th>Min. Buy</th>
                    <th>Benefits</th>
                    <th>Donors</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{$item['member-tier']}}</td>
                    <td>{{$item['min-seeds']}} Seeds</td>
                    <td>{{$item['min-buy']}}</td>
                    <td>{{$item['benefit']}}</td>
                    <td>{{$item['donors']}}</td>
                    <td><button class="mission-support-btn">Support Our Mission
                        <img src="{{ asset('assets/arrow-right.svg') }}" alt=""></button></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <h4>Corporate Sponsorship Package</h4>
        <table>
            <thead>
                <tr>
                    <th>Benefits</th>
                    <th>Eco Trailblazers</th>
                    <th>Green Innovators</th>
                    <th>Eco Vanguard</th>
            </tr>
        </thead>
        <tbody>
            @foreach($corporate as $item)
            <tr>
                <td>{{$item['benefit']}}</td>
                <td>
                    @if($item['trail']=== true)
                        <img src="{{asset('assets/sponsor/checklist.svg')}}" alt="">
                    @elseif($item['trail']=== false)
                    <span></span>
                    @else
                     {{$item['trail']}}
                    @endif
                   
                </td>
                <td>
                    @if($item['green'] === true)
                        <img src="{{ asset('assets/sponsor/checklist.svg') }}" alt="Green">
                    @elseif($item['green'] === false)
                        <span></span>
                    @else
                        {{ $item['green'] }}
                    @endif
                </td>
                <td>
                    @if($item['vanguard'] === true)
                        <img src="{{ asset('assets/sponsor/checklist.svg') }}" alt="Vanguard">
                    @elseif($item['vanguard'] === false)
                        <span></span>
                    @else
                        {{ $item['vanguard'] }}
                    @endif
                </td>
            </tr>
            @endforeach
            <tr>
                <td class="bg-blue righ">Make a Donation</td>
                <td class="bg-blue righ"><button class="mission-support-btn donation-btn">Support Our Mission
                    <img src="{{ asset('assets/arrow-blue.svg') }}" alt=""></button></td>
                <td class="bg-blue righ"><button class="mission-support-btn donation-btn">Support Our Mission
                    <img src="{{ asset('assets/arrow-blue.svg') }}" alt=""></button></td>
                <td class="bg-blue"><button class="mission-support-btn donation-btn">Support Our Mission
                    <img src="{{ asset('assets/arrow-blue.svg') }}" alt=""></button></td>
            </tr>
        </tbody>
        </table>
</section>
