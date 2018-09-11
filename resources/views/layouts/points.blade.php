@extends('layouts.app')

@section('content')
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Points Entrance</div>

               <div class="card-body">
                    <form method="POST" id="points" action="{{ url('submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">Enter Points</label>

                            <div class="col-md-6">
                                <input id="poin" type="text" class="form-control{{ $errors->has('points') ? ' is-invalid' : '' }}" name="points" value="{{ old('points') }}" required autofocus  placeholder="Provide Your Points">

                                @if ($errors->has('points'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('points') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Submit') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="js/jquery-min.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/jquery-validate.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
@endsection
