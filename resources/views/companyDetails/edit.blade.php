@extends('jobs.layout')
@section('content1')
    <div class="row justify-content-center w-100">
        <div class="" style="width: 72%">
            <div class="formm">
                <form class="post-form" method="post" enctype="multipart/form-data"
                      action="{{ route('companyDetails.update', $companyDetails->id) }}">
                    @method('PUT')
                    @csrf
                    <h3 class="text-left">Company details</h3>
                    <table class="details-table">
                        <tr>
                            <td>Company Name</td>
                            <td><input type="text" value="{{$companyDetails->name}}" name="name"></td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><input type="text" value="{{$companyDetails->website}}" name="website"></td>
                        </tr>
                        @foreach($companyDetails->tagline as $tagline)

                            <tr>
                                <td>Tagline</td>
                                <td contenteditable="true"><input type="text" value="{{$tagline->tagline}}"
                                                                  name="tagline{{$i++}}"></td>
                            </tr>
                        @endforeach

                        <tr>
                            <td>File</td>
                            <td contenteditable="true">
                                <label class="input-group-text" for="inputGroupFile02">
                                    Choose file...
                                    <input type="file" class="form-control" id="inputGroupFile02" name="file">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>Logo</td>
                            <td contenteditable="true">
                                <label class="input-group-text" for="logo">
                                    Choose file...
                                    <input type="file" class="form-control" id="logo" name="logo">
                                </label>
                            </td>
                        </tr>
                    </table>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark btn-block" id="job-btn">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>

@endsection
