@extends("layouts.app")

@section('main-content')

<div class="container mt-3">
    <div class="row mb-5">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://media.licdn.com/dms/image/C5103AQG2IwoBY8e9xw/profile-displayphoto-shrink_800_800/0/1560235600867?e=2147483647&v=beta&t=1_axvEGhAKss6ApcfaOG2B-UGBreSf0uw2-JtELuzW8" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3">{{$data['name']}}</h5>
                    <p class="text-muted mb-1">{{$data['desc_one']}}</p>
                    <p class="text-muted mb-4">{{$data['desc_two']}}</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="{{$data['whatsapp_url']}}" target="_blank" type="button" class="btn btn-success ms-1" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
                            </svg>
                            Kirim pesan
                        </a>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                            <p class="mb-0"><a href="{{$data['github_url']}}" class='text-decoration-none' target="_blank">{{$data['github_name']}}</a></p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                            <p class="mb-0"><a href="{{$data['twitter_url']}}" class='text-decoration-none' target="_blank">{{$data['twitter_name']}}</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mb-5">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nama Lengkap</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 fw-bold">{{$data['name']}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 fw-bold">{{$data['email']}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Asal Universitas</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 fw-bold">{{$data['university']}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Jurusan</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 fw-bold">{{$data['major']}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Alamat</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 fw-bold">{{$data['address']}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Mentor</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0 fw-bold">{{$data['mentor']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection