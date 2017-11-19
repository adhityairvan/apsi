@extends('master')

@section('body')
    <style>
        .bs-example  div[class^="col"] {
            border: 1px solid white;
            background: #f5f5f5;
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
        }
    </style>
    <div class="container bs-example">
        <!-- Bootstrap Grid -->

        <div class="row">
            <div class="col-md-12"><h1>Review Tenaga Kerja</h1></div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="http://static.news.lewatmana.com/nikwil1dpn.jpg" class="img-thumbnail" alt="Sample image" style="width:200px">
                <div class="row">
                    <div class="col-md-4">Nama :</div>

                </div>
                <div class="row">
                    <div class="col-md-4">Umur :</div>
                </div>
                <div class="row">
                    <div class="col-md-4">Domisili :</div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-12">
                    <label for="rating">Rating Kerja</label>
                    <form>
                        <div class="form-group">

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ratingkerja" id="rk1" value="1"> 1
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ratingkerja" id="rk2" value="2"> 2
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ratingkerja" id="rk3" value="3"> 3
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ratingkerja" id="rk4" value="4"> 4
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="ratingkerja" id="rk5" value="5"> 5
                                </label>
                            </div>
                        </div>
                        <label for="rating">Kepuasan</label>

                        <div class="form-group">

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="kepuasan" id="k1" value="1"> 1
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="kepuasan" id="k2" value="2"> 2
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="kepuasan" id="k3" value="3"> 3
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="kepuasan" id="k4" value="4"> 4
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="kepuasan" id="k5" value="5"> 5
                                </label>
                            </div>

                        <div class="form-group">
                            <label for="review">Review</label>
                            <textarea class="form-control" id="reviewtenagakerja" rows="3" placeholder="Review"></textarea>
                        </div>

                        <button class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>

        </div>


    </div>
@endsection