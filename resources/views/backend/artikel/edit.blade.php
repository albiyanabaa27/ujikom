@extends('layouts.admin')
@section('js')
<script src="{{asset('assets/admin/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/admin/select2/dist/js/select2.min.js')}}"></script>
<script>
            $(document).ready(function () {
                $("#tag").select2({
                    placeholder: "Please Select "
                });
            });
</script>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('assets/admin/select2/dist/css/select2.min.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data</div>

                <div class="card-body">
                <form action="{{ route('artikel.update', $artikel->id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">    
                {{ csrf_field()}}

                <div class="form-group"></div>
                <label for="">nama</label>
                <input type="text" class="form-control {{ $errors->has('nama') ? ' is-invalid' : '' }}"  value="{{ $artikel->nama }}" name="nama" required>
                @if ($errors->has('nama'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
                @endif
            </div>

                <div class="form-group"></div>
                <div class="col-md-6"></div>
                <label for="">lokasi</label>
                <input type="text" style="margin-right:30px;" class="form-control {{ $errors->has('lokasi') ? ' is-invalid' : '' }}" value="{{ $artikel->lokasi }}" name="lokasi" required>
                @if ($errors->has('lokasi'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lokasi') }}</strong>
                </span>
                @endif
            </div>
                <div class="form-group">
                    <label for="foto">Foto</label><br>
                    @if (isset($artikel) && $artikel->foto)
                    <p>
                            <img src="{{asset('/img/artikel/'.$artikel->foto.'')}}" 
                            style="margin-top:15px;
                                   margin-bottom:15px;
                                   width:100px;
                                   height:100px;" alt="foto"
                            class="card-img img-fluid mb-4">
                    </p>
                    @endif
                    <div class="custom-file">
                    <input type="file" name="foto" value="{{$artikel->foto}}">    
                    </div>
                    <br>
                </div>
                       
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="">kamar </label>
                            <input type="text" class="form-control {{ $errors->has('kamar') ? ' is-invalid' : '' }}"  value="{{ $artikel->kamar }}" name="kamar" required>
                            @if ($errors->has('kamar'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('kamar') }}</strong>
                            </span>
                            @endif
                            </div>
                            <div class="col-md-4">
                                <label for="">kamar mandi</label>
                            <input type="text" class="form-control {{ $errors->has('kamar_mandi') ? ' is-invalid' : '' }}"  value="{{ $artikel->kamar_mandi }}" name="kamar_mandi" required>
                            @if ($errors->has('kamar_mandi'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('kamar_mandi') }}</strong>
                            </span>
                            @endif
                            </div>
                            <div class="col-md-4">
                                <label for="">harga</label>
                            <input type="text" class="form-control {{ $errors->has('harga') ? ' is-invalid' : '' }}"  value="{{ $artikel->harga }}" name="harga" required>
                            @if ($errors->has('harga'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4" style="margin-top: 20px;">
                                <label for="">bangunan</label>
                            <input type="text" class="form-control {{ $errors->has('bangunan') ? ' is-invalid' : '' }}"  value="{{ $artikel->bangunan }}" name="bangunan" required>
                            @if ($errors->has('bangunan'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bangunan') }}</strong>
                            </span>
                            @endif
                            </div>

                            <div class="col-md-4" style="margin-top: 20px;">
                                <label for="">lahan</label>
                                <input type="text" class="form-control {{ $errors->has('lahan') ? ' is-invalid' : '' }}"  value="{{ $artikel->lahan }}" name="lahan" required>
                                @if ($errors->has('lahan'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lahan') }}</strong>
                                </span>
                                @endif
                            </div>
                                <div class="col-md-4" style="margin-top: 20px;">
                                    <label for="">garasi</label>
                                    <input type="text" class="form-control {{ $errors->has('garasi') ? ' is-invalid' : '' }}"  value="{{ $artikel->garasi }}" name="garasi" required>
                                    @if ($errors->has('garasi'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('garasi') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            
                        </div>

                        <div class="form-group">
                            <label style="margin-top: 20px;" for="">Kategori</label>
                            <select class="form-control {{ $errors->has('id_kategori') ? ' is-invalid' : '' }}" name="id_kategori">
                                @foreach ($kategori as $data)
                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach    
                            </select>
                            @if ($errors->has('id_kategori'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('id_kategori') }}</strong>
                                </span>
                                @endif
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Tag</label>
                            <select id="tag" name="tag[]" class="form-control select2 {{ $errors->has('tag') ? ' is-invalid' : '' }}"  multiple="multiple">
                                @foreach ($tag as $data)
                                    <option value="{{ $data->id }}"> {{ $data->nama}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('tag'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('tag') }}</strong>
                            </span>
                            @endif
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="">detail</label>
                            <textarea name="detail" class="ckeditor"></textarea>
                        </div> --}}
                <div class="form-group">
                    <label for="">detail</label>
                    <textarea name="konten" class="ckeditor">{{$artikel->detail }}</textarea>
                </div>
                <div class="form-group">
                        <button type ="submit" class="btn btn-primary btn-floating" data-qt-block="body">Simpan</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection