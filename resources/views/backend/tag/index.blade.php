@extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Tag</h5>
                    <div class="card-body">
                        <center> 
                        <form action="{{route('tag.create')}}">
                            <button type="submit" class="btn btn-md btn-info btn-floating">Tambah Data</button>
                        </form>
                        </center>
                        <br>
                    <table id="bs4-table" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tag</th>
                                <th>Slug</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($tag as $data)
                            <tr>
                                <td>{{ $no++}}</td>
                                <td>{{ $data->nama}}</td>
                                <td>{{ $data->slug}}</td>
                    
                                    <td>
                                    <form action="{{ route('tag.destroy',$data->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{route('tag.edit',$data->id)}}" class="btn btn-md btn-warning btn-floating">Edit</a>
                                        <button type="submit" class="btn btn-md btn-danger btn-floating" data-qt-block="body">Hapus</button>
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