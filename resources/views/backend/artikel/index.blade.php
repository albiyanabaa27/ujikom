@extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Artikel</h5>
                <div class="card-body">
                <center> 
                    <form action="{{route('artikel.create')}}">
                            <button type="submit" class="btn btn-md btn-info btn-floating">Tambah Data</button>
                    </form>
                </center>
                        <br>
                    <table id="bs4-table" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="10">No</th>
                                <th width="10">nama</th>
                                <th width="10">lokasi</th>
                                <th width="10">harga</th>
                                {{-- <th width="10">Slug</th> --}}

    
                                <th width="10">kamar</th>
                                <th width="10">kamar mandi</th>
                                <th width="10">bangunan</th>
                                <th width="10">lahan</th>
                                <th width="10">garasi</th>
                                <th width="10">kategori</th>
                                <th width="10">Foto</th>
                                {{-- <th width="10">Tag</th> --}}
                                {{-- <th width="12">detail</th> --}}
                                <th width="10">aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($artikel as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama}}</td>
                                <td>{{ $data->lokasi}}</td>
                                <td>{{ $data->harga}}</td>
                                {{-- <td>{{ $data->slug}}</td> --}}
                               
                                <td>{{ $data->kamar}}</td>
                                <td>{{ $data->kamar_mandi}}</td>
                                <td>{{ $data->bangunan}}</td>
                                <td>{{ $data->lahan}}</td>
                                <td>{{ $data->garasi}}</td>
                                <td>{{ $data->kategori->nama}}</td>
                                <td>
                                    <img src="{{asset('/img/artikel/'.$data->foto.'')}}" 
                                         style="width:100px; height:100px;" alt="foto"
                                         class="card-img img-fluid mb-4">
                                    </td>

                                {{-- <td>
                                        <ol>
                                            @foreach ($data->tag as $tag)
                                                <li>{{ $tag->nama }}</li>
                                            @endforeach
                                        </ol>
                                </td> --}}
                                {{-- <td>{{ $data->detail}}</td> --}}
                               
                                {{-- <td>{{ $data->video}}</td> --}}
                                    <td>
                                    <form action="{{ route('artikel.destroy',$data->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{route('artikel.edit',$data->id)}}" class="btn btn-md btn-warning btn-floating">Edit</a>
                                        <button type="submit" class="btn btn-md btn-danger btn-floating" data-qt-block="body">Hapus</button>
                                        <a href="{{url('/')}}" class="btn btn-md btn-success btn-floating">Lihat</a>
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