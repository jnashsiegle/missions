      <div id = "contact" class = "container-fluid"> <!--Contact section -->
        	
			<!--Flash Message -->
			<div class="flash-message">
			@foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if(Session::has('alert-' . $msg))
                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                    @endif
            @endforeach
            </div> <!-- end .flash-message -->
	   		@include('partials.alerts.errors')    

<div class="container desc">
        <div class="row">
                <div class="col-lg-2 col-lg-offset-1"> 
                    <h5>CONTACT ME</h5>
                    </div>
                <div class="col-lg-9">
            {!! Form::open(['action' => 'ContactController@store']) !!}
            {{-- {!! Form::model($contacts, array('route' => array('contact.update', $contacts->id))) !!} --}}
            
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('firstName') ? 'has-error' : '' }}">
            {!! Form::label('First Name:') !!}
            {!! Form::text('firstName', old('firstName'), ['class'=>'form-control', 'placeholder'=>'Enter First Name']) !!}
            <span class="text-danger">{{ $errors->first('firstName') }}</span>
        </div>

        <div class="form-group {{ $errors->has('lastName') ? 'has-error' : '' }}">
            {!! Form::label('Last Name:') !!}
            {!! Form::text('lastName', old('lastName'), ['class'=>'form-control', 'placeholder'=>'Enter Last Name']) !!}
            <span class="text-danger">{{ $errors->first('lastName') }}</span>
        </div>

        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            {!! Form::label('Email:') !!}
            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email Address']) !!}
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>

        <div class="form-group {{ $errors->has('companyName') ? 'has-error' : '' }}">
            {!! Form::label('Name of Organization or Company:') !!}
            {!! Form::text('companyName', old('companyName'), ['class'=>'form-control', 'placeholder'=>'Enter Company Name']) !!}
            <span class="text-danger">{{ $errors->first('companyName') }}</span>
        </div>  
        {{-- One tool to help fight spam --}}
                 <p class="antispam">Leave this empty: <input type="text" name="hello" />
                 </p>

        <div class="form-group {{ $errors->has('note') ? 'has-error' : '' }}">
            {!! Form::label('Message:') !!}
            {!! Form::textarea('note', old('note'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
            <span class="text-danger">{{ $errors->first('note') }}</span>
        </div>
        

        <div class="form-group">
            <input type="submit" class="bttn" name = "submitEmail" value="Send message"> 
        </div>
{{-- </div> --}}<!--end well large-->

    {!! Form::close() !!}

    
	
</div><!--container-fluid-->

