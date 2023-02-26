@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/nav-user.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
@endsection

@include('partials.nav-user')

@section('container')
    <!-- Main Content -->
    <div class="container">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-5">
                    <h4>Daftar Aduan</h4>
                    <p>Kumpulan Pengaduan yang anda Laporkan</p>
                </div>
            </div>
        </section>
    </div>
    <!-- Data Tables -->
    <div class="container">
        <a type="button" class="btn bg-ur-orange" data-bs-toggle="modal" data-bs-target="#addPgdModal">Tambah
            Pengaduan</a>
        <div class="mt-3 mb-3">
            <table id="example" class="table table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>Id Pengaduan</th>
                        <th>Judul Pengaduan</th>
                        <th>Tanggal dan Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#001</td>
                        <td>YA begitulah</td>
                        <td>28/02/2023 13:00</td>
                        <td>Belum Diproses</td>
                        <td>
                            <a href="/dtl-pgd-user" class="btn bg-ur-red px-2" title="Detail Pengaduan"><span
                                    class="material-symbols-outlined"> info </span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tambah Pengaduan Modal -->
    <div class="modal fade" id="addPgdModal" tabindex="-1" aria-labelledby="addPgdModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pengaduan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <form action="#" class="">
                            <div class="form-group">
                                <label for="judul_pengaduan">Judul Pengaduan</label>
                                <input type="text" id="judul_pengaduan" name="judul_pengaduan" class="form-control"
                                    required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="jenis_pengaduan">Jenis Pengaduan</label>
                                <input type="text" id="jenis_pengaduan" name="jenis-pengaduan" class="form-control"
                                    required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="isi_pengaduan">Isi Pengaduan</label>
                                <input type="text" id="isi_pengaduan" name="isi_pengaduan" class="form-control"
                                    required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="foto">Gambar Pendukung</label>
                                <input type="file" id="foto" name="foto" class="form-control"
                                    accept="image/png, image/jpg" />
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn bg-ur-orange w-100">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Tambah Pengaduan Modal -->
    <!-- End of Data Tables -->
    <!-- End of Main Content -->
@endsection
