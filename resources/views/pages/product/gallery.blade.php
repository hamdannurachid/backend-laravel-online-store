@extends('layouts.default')

@section('content')

<!--  /Traffic -->
<!-- Orders -->
<div class="orders">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Gallery Product {{ $product->name }} </h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">No.</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Default</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @forelse ($items as $item)
                                <tr>
                                    <td class="serial">{{ $no++ }} </td>
                                    <td>  <span class="name">{{$item->product->name}}</span> </td>
                                    <td><span> <img src="{{ url($item->photo) }}" alt=""> </span></td>
                                    <td>  <span class="name">{{$item->is_default ? 'Ya' : 'Tidak'}}</span> </td>
                                    <td>
                                        <a href="{{route('gallery.show',$item->id)}} " class="btn btn-info btn-sm">
                                            <i class="fa fa-picture-o"></i>
                                        </a>
                                        <a href="{{route('gallery.edit',$item->id)}} " class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{route('gallery.destroy',$item->id)}} " method="post" class="d-inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Data Kosong</td>
                                    </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div> <!-- /.table-stats -->
                </div>
            </div> <!-- /.card -->
        </div>  <!-- /.col-lg-8 -->

    </div>
</div>
@endsection
