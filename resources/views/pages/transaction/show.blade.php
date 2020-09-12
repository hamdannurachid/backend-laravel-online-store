<table class="table table-bordered">
    <tr>
        <td>Nama</td>
        <td>{{$item->name}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$item->email}}</td>
    </tr>
    <tr>
        <td>No Hp</td>
        <td>{{$item->number}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>{{$item->address}}</td>
    </tr>
    <tr>
        <td>Total Transaksi</td>
        <td>Rp. {{$item->transaction_total}}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>{{$item->transaction_status}}</td>
    </tr>
    <tr>
        <td>Pembelian Produk</td>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <th>Nama</th>
                    <th>Tipe </th>
                    <th>Harga</th>
                </tr>
                @foreach ($item->detail as $d)
                    <tr>
                        <td>{{ $d->product->name }} </td>
                        <td>{{ $d->product->type }} </td>
                        <td>Rp. {{ $d->product->price }} </td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{route('transaction.status',$item->id)}}?status=SUCCESS" class="btn btn-success btn-block">
            <i class="fa fa-check"></i>Set Sukses
        </a>
    </div>
    <div class="col-4">
        <a href="{{route('transaction.status',$item->id)}}?status=FAILED" class="btn btn-warning btn-block">
            <i class="fa fa-times"></i>Set Gagal
        </a>
    </div>
    <div class="col-4">
        <a href="{{route('transaction.status',$item->id)}}?status=PENDING" class="btn btn-info btn-block">
            <i class="fa fa-spinner"></i>Set Tertunda
        </a>
    </div>
</div>
