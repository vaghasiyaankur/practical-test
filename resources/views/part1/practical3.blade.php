@extends('layout.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Part 1 /Practical 3</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <p>3. Write SQL Query to get information of Student where student is not
          assigned to any class.</p>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Ans : Student::whereDoesntHave('student_assign_class')->get();</p>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Test : </p>
        <table>
          <tr>
            <th>Id</th>
            <th>name</th>
          </tr>
          @foreach($students as $student)
          <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
          </tr>
          @endforeach
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection