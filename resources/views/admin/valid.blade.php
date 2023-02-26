@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav-admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endsection

@include('partials.nav-adm')

@section('container')
    <!-- Main Content -->
    <div class="container">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-5">
                    <h4>Validasi Akun</h4>
                    <p>Kumpulan akun yang butuh di validasi</p>
                </div>
            </div>
        </section>
    </div>
    <!-- Data Tables -->
    <div class="container">
        <div class="mt-3 mb-3">
            <table id="example" class="table table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>NIK</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alras Garfield Smith</td>
                        <td>alrastorr</td>
                        <td>302029189</td>
                        <td>2141228</td>
                        <td class="d-flex justify-content-center">
                            <a href="" class="btn bg-ur-orange py-1" title="Validasi" data-bs-toggle="modal"
                                data-bs-target="#validModal"><span class="material-symbols-outlined"> done </span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Data Tables -->
    <!-- Validation Modal -->
    <div class="modal fade" id="validModal" tabindex="-1" aria-labelledby="validModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body mx-auto d-block">
                    <img src="../img/validation.png" alt="" style="width: 250px" class="mx-auto d-block" />
                    <h3 class="mt-3 text-center">Yakin ingin validasi?</h3>
                    <div class="logout-button mt-3 d-flex justify-content-center">
                        <a type="button" class="btn bg-ur-orange btn-dark border-0 me-2" data-bs-dismiss="modal">Tidak,
                            kembali</a>
                        <a type="button" class="btn bg-ur-red btn-dark border-0">Iya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Validation Modal -->
    <!-- End of Main Content -->
@endsection
