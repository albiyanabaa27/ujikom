@extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h5 class="card-header">Kategori</h5>
                <div class="card-body">
                <center> 
                    <form action="{{route('kategori.create')}}">
                        <button type="submit" class="btn btn-md btn-info btn-floating">Tambah Data</button>
                    </form>
                </center>
                        <br>
                    <table id="bs4-table" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($kategori as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama}}</td>
                                <td>{{ $data->slug}}</td>
                                    <td>
                                    <form action="{{ route('kategori.destroy',$data->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{route('kategori.edit',$data->id)}}" class="btn btn-md btn-warning btn-floating">Edit</a>
                                        <button type="submit" class="btn btn-md btn-danger btn-floating" data-qt-block="body">Hapus</li></button>
                                    </form> 
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection