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
        <p>
          <pre>
          4. Following are the 2 tables :
          CUSTOMERS Table is as follows.
          +----+----------+-----+-----------+----------+
          | ID | NAME | AGE | ADDRESS | SALARY |
          +----+----------+-----+-----------+----------+
          | 1 | Ramesh | 32 | Ahmedabad | 2000.00 |
          | 2 | Khilan | 25 | Delhi | 1500.00 |
          | 3 | kaushik | 23 | Kota | 2000.00 |
          | 4 | Chaitali | 25 | Mumbai | 6500.00 |
          | 5 | Hardik | 27 | Bhopal | 8500.00 |
          | 6 | Komal | 22 | MP | 4500.00 |
          | 7 | Muffy | 24 | Indore | 10000.00 |
          +----+----------+-----+-----------+----------+
          ORDERS Table is as follows.
          +-----+---------------------+-------------+--------+
          |OID | DATE | CUSTOMER_ID | AMOUNT |
          +-----+---------------------+-------------+--------+
          | 102 | 2009-10-08 00:00:00 | 3 | 3000 |
          | 100 | 2009-10-08 00:00:00 | 3 | 1500 |
          | 101 | 2009-11-20 00:00:00 | 2 | 1560 || 103 | 2008-05-20 00:00:00 | 4 | 2060 | Write a SQL Query to get the
          following result using UNION:
          +------+----------+--------+---------------------+----------+
          | ID | NAME | AMOUNT | DATE |
          +------+----------+--------+---------------------+----------+
          | 1 | Ramesh | NULL | NULL |
          | 2 | Khilan | 1560 | 2009-11-20 00:00:00 |
          | 3 | kaushik | 3000 | 2009-10-08 00:00:00 |
          | 3 | kaushik | 1500 | 2009-10-08 00:00:00 |
          | 4 | Chaitali | 2060 | 2008-05-20 00:00:00 |
          | 5 | Hardik | NULL | NULL |
          | 6 | Komal | NULL | NULL |
          | 7 | Muffy | NULL | NULL |
          +------+----------+--------+---------------------+----------+
        
        </pre></p>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Ans : DB::table('customers')->leftJoin('orders', 'customers.id', '=', 'orders.customer_id')->whereNull('orders.id')->get()</p>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <p>Test : </p>
        <table>
          <tr>
            <th>Id</th>
            <th>name</th>
            <th>Amount</th>
            <th>Date</th>
          </tr>
          @foreach($customers as $customer)
          <tr>
            <td>{{ $customer->id }}</td>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->amount ? : 'NULL' }}</td>
            <td>{{ $customer->date ? : 'NULL' }}</td>
          </tr>
          @endforeach
        </table>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection