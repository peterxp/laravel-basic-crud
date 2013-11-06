@extends('template/master')

@section('content')
  <a href="{{ URL::route('news.create') }}">
  <br/>
  <button type="button" class="btn btn-default">Add</button></a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Created At</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($news as $new): ?>
      <tr>
        <td><?php echo $new->id; ?></td>
        <td><?php echo $new->title; ?></td>
        <td><?php echo $new->created_at; ?></td>
        <td>
          <a href="{{ URL::route('news.show') }}/<?php echo $new->id;?>">View</a> | 
          <a href="{{ URL::route('news.edit') }}/<?php echo $new->id;?>">Edit</a> |
          <a href="{{ URL::route('news.destroy') }}/<?php echo $new->id;?>" onclick="return confirm('Are you sure want to delete');">Delete</a>
        </td>
      </tr>
        <?php endforeach; ?>
      </tbody>
  </table>
    <?php echo $news->links(); ?>

@stop