@extends('layouts.master')

@section('content')

<div class="row" style="margin-top: 150px;">
	<div class="col-md-4 col-md-offset-4">
		<h3> Sign Up to donate blood</h3>
		<hr>

 {!! Form::open(['url' => 'signup']) !!}
  
  <div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>


  <div class="form-group">
  {!! Form::label('lname', 'Last Name:') !!}
  {!! Form::text('lname', null, ['class' => 'form-control']) !!}
  </div>

   <div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::text('email', 'Example@mail.com', ['class' => 'form-control']) !!}
  </div>

   <div class="form-group">
  {!! Form::label('pass', 'Password:') !!}
  {!! Form::text('pass', null, ['class' => 'form-control']) !!}
  </div>

   <div class="form-group">
  {!! Form::label('cpass', 'Confirm Password:') !!}
  {!! Form::text('cpass', null, ['class' => 'form-control']) !!}
  </div>

  <br>
  <h3>How to find you ?</h3>
  <hr>

   <div class="form-group">
  {!! Form::label('province', 'Province:') !!}
  {!! Form::select('province', $provinces,  null,['class' => 'form-control province']) !!}
  </div>

   <div class="form-group">
  {!! Form::label('distrect', 'District:') !!}
  {!! Form::select('distrect', $districts,  null,['class' => 'form-control districts-select']) !!}

  </div>

   <div class="form-group">
  {!! Form::label('village', 'Village:') !!}
  {!! Form::select('village', ['Under 18', '19 to 30', 'Over 30'], null, ['class' => 'form-control village-select']) !!}
  </div>

   <div class="form-group">
  {!! Form::label('more_add', 'More Address Details:') !!}
  {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
  </div>

   <div class="form-group" id="phone-fields">
  {!! Form::label('phone', 'Phone:') !!}
  {!! Form::text('phone[]', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::button('Add More', array('class' => 'btn btn-sm add-more-phone', 'style' => 'margin-top:-28px')) !!}
  <br>

   <div class="form-group" id="email-fields">
  {!! Form::label('emails', 'Additional Emails:') !!}
  {!! Form::text('email[]', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::button('Add More', array('class' => 'btn btn-sm add-more-email', 'style' => 'margin-top:-28px')) !!}
  <br>



  <div class="form-group">
  {!! Form::submit('Sign Up', ['class' => 'btn btn-block btn-primary form-control']) !!}
  </div>






{!! Form::close() !!}
	</div>

</div>

@stop