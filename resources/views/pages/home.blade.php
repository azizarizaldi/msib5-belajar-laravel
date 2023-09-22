@extends("layouts.app")

@section('main-content')
<div class="container mt-3">
    <div class="card">
        <div class="card-body">
            <h5 class="text-center">Selamat datang {{$data['name']}} 👋</h5>
        </div>
    </div>
</div>
@endsection