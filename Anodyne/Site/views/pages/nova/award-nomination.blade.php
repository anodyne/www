@extends('layouts.nova')

@section('title')
	Nova Award Nomination
@stop

@section('content')
	<h1>Nova Award Nomination</h1>

	{{ Form::open(['route' => 'nova.send-award-nomination']) }}
		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="form-group{{ ($errors->has('name')) ? ' has-error' : '' }}">
					<label class="control-label">Your Name</label>
					{{ Form::text('name', null, ['class' => 'form-control input-lg']) }}
					{{ $errors->first('name', '<p class="help-block">:message</p>') }}
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="form-group{{ ($errors->has('email')) ? ' has-error' : '' }}">
					<label class="control-label">Your Email Address</label>
					{{ Form::email('email', null, ['class' => 'form-control input-lg']) }}
					{{ $errors->first('email', '<p class="help-block">:message</p>') }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="form-group{{ ($errors->has('award')) ? ' has-error' : '' }}">
					<label class="control-label">Award</label>
					{{ Form::select('award', $awards, null, ['class' => 'form-control input-lg']) }}
					{{ $errors->first('award', '<p class="help-block">:message</p>') }}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-lg-4">
				<div class="form-group{{ ($errors->has('type')) ? ' has-error' : '' }}">
					<label class="control-label">Are you nominating a game or an individual?</label>
					<div class="visible-xs visible-sm">
						<div class="row">
							<div class="col-xs-6">
								<p><a href="#" class="btn btn-lg btn-block btn-default" @click.prevent="setGame">Game</a></p>
							</div>
							<div class="col-xs-6">
								<p><a href="#" class="btn btn-lg btn-block btn-default" @click.prevent="setIndividual">Individual</a></p>
							</div>
						</div>
					</div>
					<div class="visible-md visible-lg">
						<p>
							<a href="#" class="btn btn-lg btn-default" @click.prevent="setGame">Game</a>
							<a href="#" class="btn btn-lg btn-default" @click.prevent="setIndividual">Individual</a>
						</p>
					</div>
					{{ $errors->first('type', '<p class="help-block">:message</p>') }}
				</div>
			</div>
		</div>

		<div class="row" v-show="isGame">
			<div class="col-md-6 col-lg-4">
				<div class="form-group{{ ($errors->has('gameName')) ? ' has-error' : '' }}">
					<label class="control-label">Name of the Game</label>
					{{ Form::text('gameName', null, ['class' => 'form-control input-lg', 'v-model' => 'gameName']) }}
					{{ $errors->first('gameName', '<p class="help-block">:message</p>') }}
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="form-group{{ ($errors->has('gameURL')) ? ' has-error' : '' }}">
					<label class="control-label">URL</label>
					{{ Form::text('gameURL', null, ['class' => 'form-control input-lg', 'v-model' => 'gameURL']) }}
					{{ $errors->first('gameURL', '<p class="help-block">:message</p>') }}
				</div>
			</div>
			<div class="col-md-6 col-lg-4">
				<div class="form-group">
					<label class="control-label">Game Contact</label>
					{{ Form::text('gameEmail', null, ['class' => 'form-control input-lg', 'v-model' => 'gameEmail']) }}
				</div>
			</div>
		</div>

		<div class="row" v-show="isIndividual">
			<div class="col-md-6 col-lg-4">
				<div class="form-group{{ ($errors->has('recipientName')) ? ' has-error' : '' }}">
					<label class="control-label">Recipient Name</label>
					{{ Form::text('recipientName', null, ['class' => 'form-control input-lg', 'v-model' => 'recipientName']) }}
					{{ $errors->first('recipientName', '<p class="help-block">:message</p>') }}
				</div>
			</div>

			<div class="col-md-6 col-lg-4">
				<div class="form-group{{ ($errors->has('recipientEmail')) ? ' has-error' : '' }}">
					<label class="control-label">Recipient Email (if known)</label>
					{{ Form::email('recipientEmail', null, ['class' => 'form-control input-lg', 'v-model' => 'recipientEmail']) }}
					{{ $errors->first('recipientEmail', '<p class="help-block">:message</p>') }}
				</div>
			</div>
		</div>

		<div v-show="isGame || isIndividual">
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label class="control-label">Reason</label>
						{{ Form::textarea('reason', null, ['class' => 'form-control input-lg', 'rows' => 4, 'v-model' => 'reason']) }}
					</div>
				</div>
			</div>

			{{ Form::hidden('type', null, ['v-model' => 'awardType']) }}

			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<div class="visible-xs visible-sm">
							{{ Form::button('Submit Nomination', ['type' => 'submit', 'class' => 'btn btn-lg btn-block btn-primary']) }}
						</div>
						<div class="visible-md visible-lg">
							{{ Form::button('Submit Nomination', ['type' => 'submit', 'class' => 'btn btn-lg btn-primary']) }}
						</div>
					</div>
				</div>
			</div>
		</div>
	{{ Form::close() }}
@stop

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.0/vue.min.js"></script>
	<script>
		Vue.config.delimiters = ['{%', '%}']
		Vue.config.unsafeDelimiters = ['{%!', '!%}']

		var vm = new Vue({
			el: "#app",
			data: {
				isGame: false,
				isIndividual: false,
				awardType: "",
				recipientName: "",
				recipientEmail: "",
				gameName: "",
				gameEmail: "",
				gameURL: "",
				reason: ""
			},
			methods: {
				setGame: function()
				{
					this.resetFields()

					this.isGame = true
					this.isIndividual = false
					this.awardType = "game"
				},
				setIndividual: function()
				{
					this.resetFields()

					this.isGame = false
					this.isIndividual = true
					this.awardType = "individual"
				},
				resetFields: function()
				{
					this.recipientEmail = ""
					this.recipientName = ""
					this.gameName = ""
					this.gameEmail = ""
					this.gameURL = ""
					this.reason = ""
				}
			},
			ready: function()
			{
				if (this.awardType == 'game')
					this.setGame()

				if (this.awardType == 'individual')
					this.setIndividual
			}
		})
	</script>
@stop