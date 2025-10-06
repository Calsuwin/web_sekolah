@extends('layouts.app')

@section('title', 'Identitas Sekolah')
<style>
    <style>.card {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    table td {
        vertical-align: top;
        padding: 0.4rem 0;
    }
</style>
@section('content')
    <section style="margin-top: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4 mb-4">
                    <h3 class="fw-semibold">
                        Identitas
                        <br>
                        <span style="color: #4c76ad">
                            Sekolah
                        </span>
                    </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center my-4">
                    <img src="{{ asset('storage/images/smk.png') }}"nlt="" class="img-fluid" width="150">
                </div>
                <div class="col-md-12 text-center mb-4">
                    <div class="card shadow-sm border-3 rounded-4" style="background-color: #ffffff;">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-borderless" style="font-size: 1rem;">
                                        <tbody>
                                            <tr>
                                                <td class="fw-semibold" style="width: 30%;">Nama Sekolah</td>
                                                <td style="width: 5%;">:</td>
                                                <td>SMK Negeri 4 Kota Tasikmalaya</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">NPSN</td>
                                                <td>:</td>
                                                <td>20276063</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Alamat</td>
                                                <td>:</td>
                                                <td>Jl Depok RT 02 RW 05, Kelurahan Sukamenak, Kecamatan Purbaratu, Kota
                                                    Tasikmalaya, Provinsi Jawa Barat</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Telp/Faks</td>
                                                <td>:</td>
                                                <td>(0265) 7528981</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Email</td>
                                                <td>:</td>
                                                <td>info@smkn4-tsm.sch.id</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Tahun Berdiri/Beroperasi</td>
                                                <td>:</td>
                                                <td>2010</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Nomor SK Pendirian</td>
                                                <td>:</td>
                                                <td>420/9/SK-BPPT/2012</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Tanggal SK Pendirian</td>
                                                <td>:</td>
                                                <td>06 Februari 2012</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-semibold">Kepemilikan</td>
                                                <td>:</td>
                                                <td>Pemerintah Daerah</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
