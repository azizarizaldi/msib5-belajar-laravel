@extends("layouts.app")

@section('main-content')
<div class="container mt-3">
    <section class="card text-center mdb-ad pt-3 pt-lg-5 pb-lg-4 px-4" id="mdb-sarv">
        <h5>Halo kawan! Selamat datang di website Belajar Laravel 👋👋👋</h5>
        <p class="mt-2 text-muted">
             Website ini dibuat dalam rangka <b>memenuhi tugas Belajar Laravel</b> studi independen sebagai fullstack developer di <a href="https://gits.id/" class="text-decoration-none">GITS.id.</a>
        </p>

        <hr/>
        <h6>Powered By:</h5>
        <div class="row mb-lg-0 mb-5">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <a href="https://gits.id/" target="_blank" class="text-decoration-none text-black">
                <div class="bg-image hover-overlay ripple rounded-6 p-4">

                    <img src="assets/images/gits-logo.png"
                        height="35px" class="mb-3" alt="MDB Standard - Bootstrap 5">

                    <p class="mb-2 fw-bold">
                        gits.id
                    </p>

                    <p class="mb-0">
                        <small class="text-muted">
                            Full Stack Web Developer
                        </small>
                    </p>
                </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <a href="https://kampusmerdeka.kemdikbud.go.id/" target="_blank" class="text-decoration-none text-black">
                    <div class="bg-image hover-overlay ripple rounded-6 p-4">

                        <img src="assets/images/kampus-merdeka-logo.png"
                            height="35px" class="mb-3" alt="MDB Standard - Bootstrap 5">

                        <p class="mb-2 fw-bold">
                            Kampus Merdeka
                        </p>

                        <p class="mb-0">
                            <small class="text-muted">
                                Studi Independen
                            </small>
                        </p>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <a href="https://sttbandung.ac.id/" target="_blank" class="text-decoration-none text-black">
                    <div class="bg-image hover-overlay ripple rounded-6 p-4">

                        <img src="assets/images/sttbandung-logo-long.png"
                            height="35px" class="mb-3" alt="MDB Standard - Bootstrap 5">

                        <p class="mb-2 fw-bold">
                            Sekolah Tinggi Teknologi Bandung
                        </p>

                        <p class="mb-0">
                            <small class="text-muted">
                                Teknik Informatika
                            </small>
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection