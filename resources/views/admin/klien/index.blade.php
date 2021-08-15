@extends('admin.home')
@section('content')
<div class="card-body">
            @if(Session::has('pesan'))
            <div class="alert alert-success">
                {{Session::get('pesan')}}</div>
            @endif
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>no</th>
                    <th>Foto</th>
                    <th>Keterangan</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($klien as $data)
            <tr>
                <td>{{++$no}}</td>
                <td><img src="{{ asset('thumb/'.$data->foto) }}" style="width: 100px"></td>
                <td>{{ $data->keterangan }} </td>
                <td>{{ $data->created_at }} </td>
                <td>{{ $data->updated_at }} </td>
                <td><form action="{{ route('klien.destroy', $data->id) }}" method="POST">@csrf
                    <a href="{{ route('klien.edit', $data->id) }}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i> Edit </a>
                        <button class="btn btn-danger" onClick="return confirm('Yakin Mau Dihapus?')">
                            <i class="fa fa-times"></i>Hapus</button>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        <div style="float: right">{{$klien->links()}}</div>
        </div>
        </div>
@endsection