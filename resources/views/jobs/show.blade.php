@extends('layout')
@section('content')
    <div class="show-job">
        <div class="card-description">
            <h3>Job Description</h3>
            <p id="description">
                {!! $job->description !!}
            </p>
            <a href="#" class="apply-btn">Apply Job</a>
        </div>
        <div>
            <div>
                <h3>Job Location</h3>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe height="250" id="gmap_canvas"
                                src="https://maps.google.com/maps?q={{$address}}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe
                    </div>
                </div>
            </div>
            <div>
                <h3>Share this job</h3>
                <div class="card-body">
                    <div class="copy-text">
                        <input type="text" class="text" value="{{url()->current()}}"/>
                        <button><i class="bi bi-clipboard"></i></button>
                    </div>
                </div>


                <div class="social-btn-sp">
                    {!! $shareButtons !!}
                </div>
            </div>
        </div>

    </div>
    <script>
        let copyText = document.querySelector(".copy-text");
        copyText.querySelector("button").addEventListener("click", function () {
            let input = copyText.querySelector("input.text");
            input.select();
            document.execCommand("copy");
        });
    </script>
@endsection

