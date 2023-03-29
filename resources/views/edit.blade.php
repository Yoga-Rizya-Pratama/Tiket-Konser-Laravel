@extends('layouts/app')

@section('content')
    <div class="flex items-center justify-center ">
       <div class="bg-slate-700 p-3 w-[30rem]">
        <h3 class="text-white uppercase mb-6">Edit Data</h3>
           @if ($data)
            <form action="{{route('editProses', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="md:flex md:flex-col mb-3">
                    <label for="name" class="text-white font-medium">Nama Anda</label>
                    <input value="{{$data->nama_pemesan}}" type="text" placeholder="masukan nama anda" class="bg-transparent outline-none py-3 border-b-[0.5px] border-blue-500 placeholder:text-xs text-md text-white placeholder:text-white" name="nama_pemesan" required>
                </div>
                 <div class="md:flex md:flex-col mb-3">
                    <label for="name" class="text-white font-medium">Nomor Hp</label>
                    <input value="{{$data->nomor_telepon_pemesan}}" type="number" placeholder="masukan nomor hp anda" class="bg-transparent outline-none py-3 border-b-[0.5px] border-blue-500 placeholder:text-xs text-md text-white placeholder:text-white" name="nomor_hp"  required>
                </div>
                 <div class="md:flex md:flex-col mb-3">
                    <label for="name" class="text-white font-medium">Email Anda</label>
                    <input value="{{$data->alamat_email_pemesan}}" type="email" placeholder="masukan email anda" class="bg-transparent outline-none py-3 border-b-[0.5px] border-blue-500 placeholder:text-xs text-md text-white placeholder:text-white" name="email_pemesan"  required>
                </div>
                 <div class="md:flex md:flex-col mb-3">
                    <label for="name" class="text-white font-medium">Jumlah Tiket</label>
                    <input value="{{$data->jumlah_tiket}}" type="number" placeholder="jumlah tiket" class="bg-transparent outline-none py-3 border-b-[0.5px] border-blue-500 placeholder:text-xs text-md text-white placeholder:text-white" name="jumlah_tiket"  required>
                </div>
                  <button class="bg-orange-500 py-3 w-full md:mt-6 text-md" id="btn_produk">Edit</button>
            </form>

           @endif
       </div>
    </div>
@stop
