@extends('layouts.default')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Tambah Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('product.store')}} " method="post" class="form-horizontal">
            @method('POST')
            @csrf
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Nama Produk</label></div>
                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{old('name')}} ">
                    @error('name') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Tipe</label></div>
                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="type"  class="form-control @error('type') is-invalid @enderror" value="{{old('type')}} ">
                    @error('type') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Deskripsi Produk</label></div>
                <div class="col-12 col-md-9"><input type="text" id="hf-email" name="description"  class="form-control @error('description') is-invalid @enderror" value="{{old('description')}} ">
                    @error('description') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Harga Produk</label></div>
                <div class="col-12 col-md-9"><input type="number" id="hf-email" name="price"  class="form-control @error('price') is-invalid @enderror" value="{{old('price')}} ">
                    @error('price') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Quantity</label></div>
                <div class="col-12 col-md-9"><input type="number" id="hf-email" name="quantity"  class="form-control @error('quantity') is-invalid @enderror" value="{{old('quantity')}} ">
                    @error('quantity') <div class="text-muted"> {{$message}} </div>
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
