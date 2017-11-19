@extends('master')

@section('title')
    Upload Document Perjanjian
    @endsection
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Upload Dokument Perjanjian</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <form>
                        <div class="form-group">
                            <label for="dokumen">Upload Dokumen</label>
                            <input type="file" id="dokumen" class="form-control-file" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">Upload dokument perjanjian dengan format docx atau pdf</small>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection