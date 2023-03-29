@extends('layouts.app')

@section('content')
<div class="container">
@include('logout')
    <div class="">
        <div class="w-[20rem]">
            <form action="{{route('checkIn')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-2">
                    <label class="text-cyan-500 font-medium" for="konser_id">CHECK IN</label>
                    <input class="outline-none p-2 border-[1px] border-cyan-300 rounded-sm" type="text" name="check_in" placeholder="masukan konser id">
                </div>
                <button class="bg-cyan-500 p-2 rounded-sm text-white hover:bg-cyan-300 duration-200 mt-3 w-full">Check In</button>
            </form>
        </div>
    </div>
    @if($data)
    <h3 class="text-xl font-semibold text-orange-300 mb-3 mt-6">Laporan Pemesanan Tiket</h3>
    <hr>
       <table class="table table-striped">
        <thead class="">
            <tr>
                <th>No</th>
                <th>Konser ID</th>
                <th>Nama Pemesan</th>
                <th>No Hp</th>
                <th>Alamat Email</th>
                <th>Jumlah Tiket</th>
                <th>Total Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($data as $pemesan)
                    <td>{{$loop->iteration}}</td>
                    <td>{{$pemesan->tiket_id}}</td>
                    <td>{{$pemesan->nama_pemesan}}</td>
                    <td>{{$pemesan->nomor_telepon_pemesan}}</td>
                    <td>{{$pemesan->alamat_email_pemesan}}</td>
                    <td>{{$pemesan->jumlah_tiket}}</td>
                    <td>{{$pemesan->total_harga}}</td>
                    <td>@if ($pemesan->is_check_in)
                        Check In
                        @else
                        Belum Check In
                    @endif</td>
                    <td>
                        <a href="{{route('editPemesanan', $pemesan->id)}}" class="text-orange-300 font-bold text-md mr-3">Edit</a>
                        <a href="{{route('deleteData', $pemesan->id)}}" class="text-red-600 font-bold text-md">Hapus</a>
                    </td>
                @endforeach
            </tr>
        </tbody>
       </table>
    @endif
</div>
@endsection
