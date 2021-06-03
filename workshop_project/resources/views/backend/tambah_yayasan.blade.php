@extends('backend/layouts.template')
@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Form Tambah Yayasan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="yayasan">Judul</label>
                <input type="text" class="form-control" name="yayasan" id="yayasan" placeholder="Masukkan Nama Yayasan">
            </div>
            <div class="form-group">
                <label for="yayasan">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Yayasan">
            </div>
            <div class="form-group">
                <label for="notelp">No Telp</label>
                <input type="text" class="form-control" name="notelp"  id="notelp" placeholder="Masukkan Nama No Telp">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
@push('js')
<!-- bs-custom-file-input -->
<script src="{{asset('backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
    $(function () {
        bsCustomFileInput.init();
    });
</script>
@endpush