@extends('layouts.default')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Ubah Transaksi - {{$item->uuid}}</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('transaction.update',$item->id)}} " method="post" class="form-horizontal">
            @method('PUT')
            @csrf
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Nama Pemesan</label></div>
                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{old('name') ? old('name') : $item->name }} ">
                    @error('name') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Email</label></div>
                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="email"  class="form-control @error('email') is-invalid @enderror" value="{{old('email') ? old('email') : $item->email }}">
                    @error('email') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">No. Hp</label></div>
                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="number"  class="form-control @error('number') is-invalid @enderror" value="{{old('number') ? old('number') : $item->number }} ">
                    @error('number') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Alamat Pemesan Produk</label></div>
                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="address"  class="form-control @error('address') is-invalid @enderror" value="{{old('address') ? old('address') : $item->address }}">
                    @error('address') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-md btn-block">
                Simpan
            </button>

        </form>
    </div>
</div>

@endsection
