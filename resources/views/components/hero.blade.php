@vite('resources/sass/hero.scss')

@php
    $data = [
        ['name' => 'Eko Wahyudi', 'tier' => 'Mangrove Maven', 'trees' => 200],
        ['name' => 'Dewi Sartika', 'tier' => 'Mangrove Maven', 'trees' => 330],
        ['name' => 'Budi Hartanto', 'tier' => 'Mangrove Maven', 'trees' => 350],
        ['name' => 'Rina Kartika', 'tier' => 'Guardian of the Grove', 'trees' => 190],
        ['name' => 'Irfan Setiawan', 'tier' => 'Mangrove Master', 'trees' => 80],
        ['name' => 'Agus Prasetyo', 'tier' => 'Guardian of the Grove', 'trees' => 140]
    ];

    usort($data, function($a, $b) {
        return $b['trees'] <=> $a['trees'];
    });
@endphp

<section>
    <div class="wrapper-top">
        <div class="content-1-wrapper">
            <div class="content-1">
                <div class="label">
                    Green Haven Project - Mangrove
                </div>
                <h3>Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h3>
                <div class="mission">
                    <div class="wrapper">
                        <div>
                            <img src="{{ asset('assets/mangrove.svg') }}" alt="">
                            <p><span class="planted-number">5,690</span>/10,000 Pohon</p>
                        </div>
                        <button class="mission-btn">
                            Support Our Mission
                            <img src="{{ asset('assets/arrow-right.svg') }}" alt="">
                        </button>
                    </div>
                    <div>
                        <div class="target">
                            <div class="now"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-hutan">
                <img src="{{ asset('assets/hutan.png') }}" alt="hutan" width="100%">
            </div>
        </div>
        <div class="leaderboard-wrapper">
            <div class="leaderboard-content">
                <h4>Leaderboard</h4>
                <button  id="sortMostDonation">Most Donation</button>
                <button id="recent">Most Recent</button>
                <div class="list-box" id="leaderboardList">
                    @foreach($data as $person)
                        <div class="list" data-trees>
                            <div class="list-info">
                                <div>
                                    @switch($person['tier'])
                                        @case('Guardian of the Grove')
                                            <img src="{{ asset('assets/tier/guardian.svg') }}" alt="tier">
                                            @break

                                        @case('Mangrove Maven')
                                            <img src="{{ asset('assets/tier/mang-mav.svg') }}" alt="tier">
                                            @break

                                        @case('Mangrove Master')
                                            <img src="{{ asset('assets/tier/mang-mas.svg') }}" alt="tier">
                                            @break

                                        @default
                                            <img src="{{ asset('assets/tier/default.svg') }}" alt="tier">
                                    @endswitch
                                </div>
                                <div>
                                    <p class="person-tier">{{ $person['tier'] }}</p>
                                    <p class="person-name">{{ $person['name'] }}</p>
                                </div>
                            </div>
                            <div class="tree-total">
                                <img width="30px" src="{{ asset('assets/mangrove.svg') }}" alt="">
                                <p><span class="number">{{ $person['trees'] }}</span> <span>pohon</span></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="brand-wrapper">
        <img src="{{ asset('assets/brands/jala.svg') }}" alt="">
        <img src="{{ asset('assets/brands/efishery.svg') }}" alt="">
        <img src="{{ asset('assets/brands/azarine.svg') }}" alt="">
        <img src="{{ asset('assets/brands/kompas.svg') }}" alt="">
        <img src="{{ asset('assets/brands/tribun.svg') }}" alt="">
        <img src="{{ asset('assets/brands/jawa.svg') }}" alt="">
    </div>
</section>

<script>
    
    document.getElementById('sortMostDonation').addEventListener('click', function() {
        const listBox = document.getElementById('leaderboardList');
        const lists = Array.from(listBox.getElementsByClassName('list'));

        lists.sort((a, b) => {
            const treesA = parseInt(a.querySelector('.number').textContent);
            const treesB = parseInt(b.querySelector('.number').textContent);
            return treesB - treesA;
        });

        lists.forEach(list => listBox.appendChild(list));
    });
</script>