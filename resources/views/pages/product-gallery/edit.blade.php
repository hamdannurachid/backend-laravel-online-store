@extends('layouts.default')

@section('content')

<div class="card">
    <div class="card-header">
        <strong>Edit Gallery Produk {{$item->name}} </strong>
    </div>
    <div class="card-body card-block">
        <form action="{{route('gallery.update',$item->id)}} " method="post" class="form-horizontal" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Nama Produk</label></div>
                <div class="col-12 col-md-9">
                    <select class="custom-select  @error('products_id') is-invalid @enderror" required
                        name="products_id">
                        <option disabled selected> {{$item->name}} </option>
                        @foreach ($products as $product)
                        <option value="{{$product->id}} "> {{$product->name}} </option>
                        @endforeach
                    </select>
                    @error('products_id') <div class="text-muted"> {{$message}} </div>
                    @enderror
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Image</label></div>
                <div class="col-12 col-md-9">
                    <div class="custom-file">
                        <input type="file" class="@error('photo') is-invalid @enderror"
                             required name="photo" value="{{old('photo')}}" accept="image/*">
                        {{-- <label class="custom-file-label"></label> --}}
                        @error('photo') <div class="text-muted"> {{$message}} </div>
                        @enderror
                    </div>
                </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Jadikan Default</label>
                    </div>
                    <div class="col-12 col-md-9">

                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="ya" name="is_default"
                                class="custom-control-input @error('is_default') is-invalid @enderror" value="1">
                            <label class="custom-control-label" for="ya">Ya</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="no" name="is_default"
                                class="custom-control-input @error('is_default') is-invalid @enderror" value="0">
                            <label class="custom-control-label" for="no">Tidak</label>
                        </div>

                        @error('is_default') <div class="text-muted"> {{$message}} </div>
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
