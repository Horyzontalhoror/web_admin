@extends('admin.layout.base')
@section('title', 'Data Siswa')
@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DataTables HTML example</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />

    <link href="https://cdn.datatables.net/v/dt/dt-2.2.2/b-3.2.2/b-html5-3.2.2/datatables.min.css" rel="stylesheet" integrity="sha384-xc+mx6CwXMJKx+Q/7SmWU+vHNsSQlvU7aZCa9HioarNpa2+II/zFLn9UJKLmlg5r" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-2.2.2/b-3.2.2/b-html5-3.2.2/datatables.min.js" integrity="sha384-cqJtsA8RyeiLrVZ0f/bvhKm784nBWBjnWVs3K14WlWnusVUqgTOf94n0VLFhjhCW" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles.css" />
    <script src="script.js"></script>
  </head>
  <body>
    <div id="app">
      <h1>DataTables HTML example</h1>
      <p>
        This example shows DataTables loaded via <code>script</code>
        tags and Ajax loading object based data.
      </p>

      <table id="myTable" class="display">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Extn.</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Extn.</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </body>
</html>


@endsection
