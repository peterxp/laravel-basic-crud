<!-- ฉันจะไปดึง template จาก views/template/master.blade.php มาใช้งานนะเธอ -->
@extends('template/master')

<!-- เริ่มจากตรงนี้เลยนะ จะเรียกฉันว่า ไส้ใน หรือ Dynamic Content ก็ได้จ้า -->
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
  <br/>
@stop
<!-- สิ้นสุดเลยนะเธอ -->