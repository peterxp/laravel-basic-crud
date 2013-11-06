@extends('template/master')
@section('content')
  <br/>
  <?php foreach ($news as $new): ?>
    ID: <?php echo $new->id;?><br/>
    Title: <?php echo $new->title;?><br/>
    Description: <?php echo $new->description;?><br/>
  <?php endforeach;?>
  <br/>
  <button type="button" class="btn btn-default" onclick="javascript:history.go(-1);">Back</button></a>
  <br/>
@stop