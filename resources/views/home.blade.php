@extends('layouts.app')

<style>
    .form-copy {
        height: 60px;
        margin: 0px;
        width: 100%;
        padding: 0 14px;
        border: solid 1px #bfbfbf;
        background: #f9f9f9;
        border-radius: 5px;
    }

    input#code:focus {
        outline: none !important;
    }
</style>

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        <input class="form-copy" id="text-copy" value="HALLOW10">

                        <button class="btn btn-primary" onclick="copyText()">Copy
                        </button>
                        <a class="btn btn-info" href="https://www.floweradvisor.com.ph/flowersphilippines"
                            role="button">someone’s day</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




<script type="application/javascript">
  function copyText() {  
    var copyText = document.getElementById("text-copy");  
    copyText.select();  
    document.execCommand("copy");
}
</script>
