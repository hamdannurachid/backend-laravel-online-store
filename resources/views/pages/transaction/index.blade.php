@extends('layouts.default')

@section('content')

<!--  /Traffic -->
<!-- Orders -->
<div class="orders">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="box-title">Daftar Transaksi</h4>
                </div>
                <div class="card-body--">
                    <div class="table-stats order-table ov-h">
                        <table class="table ">
                            <thead>
                                <tr>
                                    <th class="serial">No.</th>
                                    <th>ID Order</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Number</th>
                                    <th>Transaction Total</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @forelse ($items as $item)
                                <tr>
                                    <td class="serial">{{ $no++ }} </td>
                                    <td>{{$item->uuid}} </td>
                                    <td>{{$item->name}} </td>
                                    <td>{{ $item->email }} </td>
                                    <td>{{ $item->number }} </td>
                                    <td>{{ $item->transaction_total }} </td>
                                    <td>
                                        @if ($item->transaction_status == 'PENDING')
                                        <span class="badge badge-info">
                                        @elseif ($item->transaction_status == 'SUCCESS')
                                        <span class="badge badge-success">
                                        @elseif($item->transaction_status == 'FAILED')
                                        <span class="badge badge-warning">
                                        @else
                                        <span>
                                        @endif
                                        {{ $item->transaction_status }}
                                        </span>
                                    </td>
                                    <td>
                                        @if ($item->transaction_status == 'PENDING')
                                        <a href="{{ route('transaction.status', $item->id)}}?status=SUCCESS" class="btn btn-sm btn-success" title="Sukses">
                                        <i class="fa fa-check"></i>
                                        </a>
                                        <a href="{{ route('transaction.status', $item->id)}}?status=FAILED" class="btn btn-sm btn-warning" title="Gagal">
                                        <i class="fa fa-times"></i>
                                        </a>
                                        @endif
                                        <a href="#myModal" data-remote="{{ route('transaction.show',$item->id) }}" data-toggle="modal" data-title="Detail Transaksi {{ $item->uuid }}" data-target="#myModal" class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i>
                                        </a>
                                       <a href="{{route('transaction.edit',$item->id)}} " class="btn btn-primary btn-sm">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <form action="{{route('transaction.destroy',$item->id)}} " method="post" class="d-inline">
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
