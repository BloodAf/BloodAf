@extends('layouts.master')

@section('content')
	<section id="main">
		<div class="main">
			<h1><i class="fa fa-heartbeat"></i> Blood.af</h1>
			<p>Save lives by donating blood for those near to you</p>
			<hr>
			<div class="row">
				<div class="col-md-6 col-md-offset-3 btn-group">
					<a href="javascript:void(0)" class="btn btn-inverse col-md-4 goto-searchfordonors"><i class="fa fa-search"></i> &nbsp; Search for Donors</a>
					<a href="/signup" class="btn btn-inverse col-md-4" style="border-left: 1px solid white;"><i class="fa fa-heart"></i> &nbsp; Donate Blood</a>
					<a href="javascript:void(0)" class="btn btn-inverse col-md-4" style="border-left: 1px solid white;"><i class="fa fa-share-alt"></i> &nbsp; Share with others</a>
				</div>
			</div>
		</div>
	</section>
	<section id="searchfordonors">
		<div class="row">
			<div class="searchfordonors col-md-6 col-md-offset-3">
				<h3>Search for Blood Donors</h3>
				{!! Form::open() !!}

				{!! Form::close() !!}

				<form>
					<select class="form-control select select-inverse select-block mbl">
					  <optgroup label="RH+ Positive">
					    <option value="0">My Profile</option>
					    <option value="1">My Friends</option>
					  </optgroup>
					  <optgroup label="RH- Negative">
					    <option value="0">My Profile</option>
					    <option value="1">My Friends</option>
					  </optgroup>
					</select>
					<select multiple="multiple" class="form-control multiselect multiselect-info">
					  <option value="0">1</option>
					  <option value="1" selected>2</option>
					  <option value="2" selected>3</option>
					  <option value="3" selected>4</option>
					  <option value="4">5</option>
					</select>
				</form>

				
			</div>
		</div>
	</section>
@stop