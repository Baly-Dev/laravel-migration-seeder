<li class="train">
    <div class="train-item">
        <h4>Company</h4>
        <p>{{$train->company}}</p>
    </div>
    <div class="train-item">
        <h4>Departue Station</h4>
        <p>{{$train->departure_station}}</p>
    </div>
    <div class="train-item">
        <h4>Arrival Station</h4>
        <p>{{$train->arrival_station}}</p>
    </div>
    <div class="train-item">
        <h4>Departure Time</h4>
        <p>{{$train->departure_time}}</p>
    </div>
    <div class="train-item">
        <h4>Arrival Time</h4>
        <p>{{$train->arrival_time}}</p>
    </div>
    <div class="train-item">
        <h4>Code</h4>
        <p>{{$train->code}}</p>
    </div>
    <div class="train-item">
        <h4>Coach</h4>
        <p>{{$train->coach_number}}</p>
    </div>
    <div class="train-item">
        <h4>Delay</h4>
        @if($train->on_time == "1")
            <p class="on-time">On time</p>
        @else
            <p class="delay">Delay</p>
        @endif
    </div>
</li>