@extends('layout.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Part 1 /Practical 1</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <p>1. You have 10 data in posts table (starting with ID 1,2,3, and so on), write a
          SQL query to show data
          with ID -> 4,5,6,7 and 8 without using 'where' clause.</p>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Ans : Post::having('id', '>', 3)->having('id', '<', 9)->get();</p>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Test : </p>
        <table>
          <tr>
            <th>Id</th>
            <th>Post</th>
          </tr>
          @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->name }}</td>
          </tr>
          @endforeach
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection