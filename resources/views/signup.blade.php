@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endsection


@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-5 col-sm-7 me-lg-3 mt-3 mb-5">
                <img src="img/logo.png" alt="" class="mx-auto" />
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="login-box col-md-7 col-lg-5 col-sm-8 mb-5">
                <div class="wrap">
                    <div class="login-wrap p-4 p-md-5">
                        <h3 class="mb-3 text-center">Daftar</h3>
                        <form action="#" class="signin-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama Lengkap" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control mt-3" placeholder="NIK" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control mt-3" placeholder="No. Telpon" required />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control mt-3" placeholder="Username" required />
                            </div>
                            <div class="form-group mt-3">
                                <input id="password-field" type="password" class="inputer form-control"
                                    placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <button type="submit"
                                    class="sn-button form-control rounded submit px-3 mt-3">Daftar</button>
                            </div>
                        </form>
                        <p class="text-center mt-3">Sudah Punya Akun? <a data-toggle="tab" href="/">Login!</a></p>
                        <a href="index.html" class="btn bg-ur-orange mx-auto d-block">Kembali ke Halaman Depan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
