@extends('layout/admin')

@section('judul')
    Data Ditolak | Admin LSP P3 GEOMATIKA
@endsection

@section('sidebar')
    sidebar-mini
@endsection

@section('isi')
    @include('layout/verifikasi')

    <div class="page-header">
        <h4>
            <i class="fas fa-times-circle"></i> Data Registrasi Ditolak
        </h4>
        <!-- /////////////////////////////////// -->
        <!-- BREADCRUMB -->
        <!-- /////////////////////////////////// -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom  bg-danger">
                <li style="color: #f64d4d" class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li style="color: #fff" class="breadcrumb-item active" aria-current="page">Data Registrasi Ditolak</li>
            </ol>
        </nav>
    </div><br>
    <!-- /////////////////////////////////// -->
    <!-- TAMPIL DATA -->
    <!-- /////////////////////////////////// -->
    <div class="card">
        <div class="card-body">
            <div class="row grid-margin">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <div id="order-listing_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="order-listing" class="table dataTable no-footer" role="grid"
                                        aria-describedby="order-listing_info">
                                        <thead>
                                            <tr class="bg-danger text-white" role="row">
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Order #: activate to sort column ascending"
                                                    style="width: 10.4219px;">#</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Actions: activate to sort column ascending"
                                                    style="width: 10.141px;">Actions</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Customer: activate to sort column ascending"
                                                    style="width: 155.75px;">Kode Register</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 807.5469px;">Nama</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 317.5469px;">Skema</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Ship to: activate to sort column ascending"
                                                    style="width: 117.5469px;">Mendaftar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($validasi as $hasil => $asu)
                                                <tr role="row" class="odd">
                                                    <td class="">{{ $loop->iteration }}</td>
                                                    <td class="text-right">
                                                        <button class="btn btn-primary btn-sm dropdown-toggle"
                                                            type="button" id="dropdownMenuSizeButton3"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                        <div class="dropdown-menu"
                                                            aria-labelledby="dropdownMenuSizeButton3">
                                                            <a href="{{ route('validasi.show', $asu->id) }}"><button
                                                                type="submit"
                                                                class="btn btn-info btn-sm btn-block"><i
                                                                    class="fa fa-eye "></i> Detail Data</button></a>
                                                            <button data-toggle="modal"
                                                            data-target="#datareg-{{ $asu->id }}"
                                                            class="btn btn-danger btn-block"><i
                                                                class="fa fa-trash "></i> Hapus</button>
                                                        </div>
                                                    </td>
                                                    <td>{{ $asu->id }}</td>
                                                    <td>{{ $asu->user_name }}</td>
                                                    <td>{{ $asu->skema_name }}</td>
                                                    <td>{{ $asu->created_at->format('d-M-Y') }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <--------------- MODAL HAPUS DATA ---------------> --}}
@foreach ($validasi as $asu)
<div class="modal fade" id="datareg-{{ $asu->id }}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel"><i class="fas fa-trash"></i>
                    {{ $asu->user_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Untuk Menghapus Pendaftaran Ini?
            </div>
            <div class="modal-footer">
                <form action="{{ route('validasi.destroy', $asu->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href=""><button type="submit" class="btn btn-success btn-block"><i
                                class="fa fa-trash "></i> Hapus</button></a>
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
