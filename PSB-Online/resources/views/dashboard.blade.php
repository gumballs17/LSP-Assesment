@extends('layout.main')

@section('container')

<h1 class="mb-5">Welcome, {{ Auth::user()->username }}</h1>

<div class="row">
    <div class="col-lg-4">
        <div class="card-data fashion">
            <div class="row">
                <div class="col-6 d-flex justify-content-center"><i class="bi bi-journal-bookmark"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="card-desc">Kabupaten</div>
                    <div class="card-count">{{ $totalKabupaten }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data category">
            <div class="row">
                <div class="col-6 d-flex justify-content-center"><i class="bi bi-list-task"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="card-desc">Register</div>
                    <div class="card-count">{{ $totalRegistrations }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card-data user">
            <div class="row">
                <div class="col-6 d-flex justify-content-center"><i class="bi bi-people"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                    <div class="card-desc">Users</div>
                    <div class="card-count">{{ $totalUsers }}</div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection