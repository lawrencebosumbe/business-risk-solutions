@extends('layouts.home_header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                <h3 class="panel-title text-center">Please Read Carefully</h3>
                <p class="text-center">You must accept these steps to enter the workspace</p>
                </div>

                <div class="card-body">
                    <!--
                    <object width="100%" height="720">
                        <embed src="{{ asset('images/brs-terms.pdf') }}"
                        allowfullscreen="true" width="980" height="720">       
                        </embed>   
                    </object>
                    -->
                    @if(!empty($terms))
                    <object width="100%" height="720">
                        @foreach($terms as $term)
                        <embed src="/public/uploads/terms/{{ $term->terms }}"
                        allowfullscreen="true" width="980" height="720">       
                        </embed> 
                        @endforeach
                    </object>
                    @endif
                </div>

                <div class="card-footer">
                    <div class="panel-footer">
                <p>Click here to accept the terms</p>
                <input type="checkbox" name="terms" id="terms" /> <button type="button" id="agree" class="btn btn-primary" onClick="redirect()" style="margin-left: 15px">Agree</button>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
