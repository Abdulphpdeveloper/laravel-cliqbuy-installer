@extends('vendor.installer.layouts.master')

@section('title', trans('messages.install.settings.title'))
@section('container')
{!! Form::open(['url'=>route('LaravelInstaller::database'),'method'=>'post']) !!}

<div class="buttons">
    <button class="button" type="submit">
        {{ trans('messages.install.next') }}
    </button>
</div>
{!! Form::close() !!}
@stop
