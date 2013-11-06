@extends('template/master')
@section('content')
    {{ Form::open(array('url'=>'news/store', 'id'=>'form_news', 'class'=>'form_news')) }}
        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title') }}
        <br/>
        {{ Form::label('description', 'Description:') }}
        {{ Form::textarea('description') }}
        <br/>

        {{ Form::submit('Submit') }}

    {{ Form::close()}}
    <br/>
    <br/>
@stop