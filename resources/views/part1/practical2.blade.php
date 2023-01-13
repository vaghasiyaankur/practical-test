@extends('layout.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Part 1 /Practical 2</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <p>2. Write SQL Query to Count the total posts where more than 2 comments
exist..</p>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Ans : Post::withCount('post_comments')->having('post_comments_count', '>', 2)->get();</p>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Test : </p>
        <table>
          <tr>
            <th>Id</th>
            <th>Post</th>
            <th>Comment</th>
          </tr>
          @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->name }}</td>
            <td>
              @foreach ($post->post_comments as $comment)
                  <p>{{ $comment->comment}}</p>
              @endforeach
            </td>
          </tr>
          @endforeach
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection