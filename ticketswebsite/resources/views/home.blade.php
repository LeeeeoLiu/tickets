@extends('layouts.app')

@section('content')
<div id="title" style="text-align: center;">
    <div style="padding: 5px; font-size: 16px;">客机信息表</div>
</div>
<hr>
<div id="content">
    <ul>
        @foreach ($airplanes as $airplane)
        <li style="margin: 50px 0;">
            <div class="airplane_No">
                <a href="{{ url('airplane/'.$airplane->airplane_No) }}">
                    <h4>{{ $airplane->airplane_No }}</h4>
                </a>
            </div>
            <div class="airplane_Name">
                <p>{{ $airplane->airplane_Name }}</p>
            </div>

            <div class="airline_No">
                <a href="{{ url('airplane/'.$airplane->airline_No) }}">
                    <h4>{{ $airplane->airline_No }}</h4>
                </a>
            </div>

            <div class="airplane_DOQ">
                <p>{{ $airplane->airplane_DOQ }}</p>
            </div>

            <div class="airplane_Departure_City">
                <p>{{ $airplane->airplane_Departure_City }}</p>
            </div>
            <div class="airplane_Arrival_City">
                <p>{{ $airplane->airplane_Arrival_City }}</p>
            </div>
            <div class="airplane_Departure_Time">
                <p>{{ $airplane->airplane_Departure_Time }}</p>
            </div>
            <div class="airplane_Arrival_Time">
                <p>{{ $airplane->airplane_Arrival_Time }}</p>
            </div>
            <div class="airplane_FirstClass_Num">
                <p>{{ $airplane->airplane_FirstClass_Num }}</p>
            </div>
            <div class="airplane_BusinessClass_Num">
                <p>{{ $airplane->airplane_BusinessClass_Num }}</p>
            </div>
            <div class="airplane_EconomyClass_Num">
                <p>{{ $airplane->airplane_EconomyClass_Num }}</p>
            </div>
            <div class="airplane_note">
                <p>{{ $airplane->airplane_note }}</p>
            </div>



        </li>
        @endforeach
    </ul>
</div>
@endsection


