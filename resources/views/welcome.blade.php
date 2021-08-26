@extends('layouts.app')

@section('content')
<div class="text-box-3">
    <h1>Immunization and vaccination services</h1>
    <p>our purpose is to develop the system of the vaccination centers and connect the parent <br>
        with these centers to ensure following – up the dates for their babies.</p>
    @if (Route::has('login'))
        @auth
            <a class="hero-btn" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>

                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('register') }}" class="hero-btn" > Join Us</a>

        @endif
    @endauth

</div>
@endsection
