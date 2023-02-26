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
                    <h4>Daftar Akun</h4>
                    <p>Kumpulan akun yang telah terdaftar</p>
                </div>
            </div>
        </section>
    </div>
    <!-- Data Tables -->
    <div class="container">
        <a type="button" class="btn bg-ur-red" data-bs-toggle="modal" data-bs-target="#addAccModal">Tambah Akun</a>
        <!-- Edit Account Modal -->
        <div class="modal fade" id="addAccModal" tabindex="-1" aria-labelledby="addAccModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Akun</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <form action="#" class="signin-form">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" id="nama" name="nama" class="form-control" required />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="nik">NIK</label>
                                    <input type="text" id="nik" name="nik" class="form-control" />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="notelp">No. Telpon</label>
                                    <input type="text" id="notelp" class="form-control mt-3" name="notelp" />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="username">Username</label>
                                    <input type="text" id="username" name="username" class="form-control" required />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password</label>
                                    <input id="password-field" id="password" name="password" type="password"
                                        class="inputer form-control" required />
                                </div>
                                <div class="form-group mt-3">
                                    <label for="level">Level</label>
                                    <select name="level" id="level" class="form-select">
                                        <option selected disabled>Level</option>
                                        <option value="User">User</option>
                                        <option value="Petugas">Petugas</option>
                                        <option value="Admin">Admin</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn bg-ur-red w-100">Tambah Akun</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Edit Account Modal -->
        <div class="mt-3 mb-3">
            <table id="example" class="table table-bordered" style="width: 100%">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Username</th>
                        <th>NIK</th>
                        <th>No. Telepon</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Arnold James Callahan</td>
                        <td>arnie.j</td>
                        <td>194923921241</td>
                        <td>21242134</td>
                        <td>User</td>
                        <td class="d-flex justify-content-center">
                            <a href="" class="btn bg-ur-orange px-2 me-2" title="Edit" data-bs-toggle="modal"
                                data-bs-target="#editAccModal"><span class="material-symbols-outlined"> edit </span></a>
                            <a href="" class="btn bg-ur-red px-2" title="Hapus" data-bs-toggle="modal"
                                data-bs-target="#verifyModal"><span class="material-symbols-outlined"> delete </span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End of Data Tables -->
    <!-- Edit Account Modal -->
    <div class="modal fade" id="editAccModal" tabindex="-1" aria-labelledby="editAccModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <form action="#" class="signin-form">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" id="nama" name="nama" class="form-control" required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="nik">NIK</label>
                                <input type="text" id="nik" name="nik" class="form-control" />
                            </div>
                            <div class="form-group mt-3">
                                <label for="notelp">No. Telpon</label>
                                <input type="text" id="notelp" class="form-control" name="notelp" />
                            </div>
                            <div class="form-group mt-3">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control" required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="password">Password</label>
                                <input id="password-field" id="password" name="password" type="password"
                                    class="inputer form-control" required />
                            </div>
                            <div class="form-group mt-3">
                                <label for="level">Level</label>
                                <select name="level" id="level" class="form-select">
                                    <option selected disabled>Level</option>
                                    <option value="User">User</option>
                                    <option value="Petugas">Petugas</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn bg-ur-red w-100">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Edit Account Modal -->
    <!-- Validation Modal -->
    <div class="modal fade" id="verifyModal" tabindex="-1" aria-labelledby="verifyModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body mx-auto d-block">
                    <img src="../img/validation.png" alt="" style="width: 250px" class="mx-auto d-block" />
                    <h3 class="mt-3 text-center">Yakin?</h3>
                    <div class="logout-button mt-3 d-flex justify-content-center">
                        <a type="button" class="btn bg-ur-orange btn-dark border-0 me-2" data-bs-dismiss="modal">Tidak,
                            kembali</a>
                        <a type="button" class="btn bg-ur-red btn-dark border-0">Iya, saya yakin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Validation Modal -->
    <!-- End of Main Content -->
@endsection
