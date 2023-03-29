@extends('layouts/app')

@section('content')
    <div class="flex items-center justify-center flex-col gap-6 ">
        <div class="border-[2px] border-orange-300 p-3 w-[30rem] rounded-md">
            <h3 class="uppercase font-semibold text-slate-800 mb-3">Info Tiket Anda</h3>
        @if ($data)
        <h3 class="flex justify-between mb-3">Konser ID <span>{{$data->tiket_id}}</span></h3>
        <h3 class="flex justify-between mb-3">Nama Pemesan <span>{{$data->nama_pemesan}}</span></h3>
        <h3 class="flex justify-between mb-3">Jumlah Tiket <span>{{$data->jumlah_tiket}}</span></h3>
        <h3 class="flex justify-between mb-3">Total Harga <span>{{$data->total_harga}}</span></h3>
    @endif
        </div>
        <p class="w-[30rem] italic">
            Catatan : bawa tiket anda dan berikan konser id ke agen x dan lakukan pembayaran untuk dapat menggunakan tiket anda.
        </p>
    </div>
    <div class="flex items-center justify-center ">
         <button class="bg-orange-500 py-3 md:mt-6 text-md w-[30rem] font-medium rounded-md text-white" id="btn_produk">Download Tiket</button>
    </div>
@stop
