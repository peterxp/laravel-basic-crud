@extends('template/master')
@section('content')
<?php foreach($news as $new):?>
    {{ Form::open(array('url'=>'news/update/'.$new->id, 'id'=>'form_news', 'class'=>'form_news')) }}
        {{ Form::hidden('id', $new->id)}}

        {{ Form::label('title', 'Title:') }}
        {{ Form::text('title', $new->title) }}
        <br/>
        {{ Form::label('description', 'Description:') }}
        {{ Form::textarea('description', $new->description) }}
        <br/>

        {{ Form::submit('Submit') }}

    {{ Form::close()}}
<?php endforeach;?>

    <br/>
    <br/>
@stop