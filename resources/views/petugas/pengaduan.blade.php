@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav-admin.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endsection

@include('partials.nav-ptg')

@section('container')
    <!-- Main Content -->
    <div class="container">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-5">
                    <h4>Daftar Pengaduan</h4>
                    <p>Kumpulan Pengaduan</p>
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
                        <th>Id Pengaduan</th>
                        <th>Judul Pengaduan</th>
                        <th>Username</th>
                        <th>Tanggal dan Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>YA begitulah</td>
                        <td>arnie.j</td>
                        <td>28/02/2023 13:00</td>
                        <td>Belum Diproses</td>
                        <td>
                            <a href="/dtl-pgd-ptg" class="btn bg-ur-orange px-2" title="Hapus"><span
                                    class="material-symbols-outlined"> info </span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Data Tables -->
    <!-- End of Main Content -->
@endsection
