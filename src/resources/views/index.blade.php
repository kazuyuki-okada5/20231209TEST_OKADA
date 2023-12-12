@extends('layouts.default')
<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>categry_id</th>
    <th>first_name</th>
    <th>last_name</th>
    <th>gender</th>
    <th>email</th>
    <th>tell</th>
    <th>address</th>
    <th>building</th>
    <th>detail</th>
  </tr>
  @foreach ($authors as $author)
  <tr>
    <td>{{$author->id}}</td>
    <td>{{$author->categry_id}}</td>
    <td>{{$author->first_name}}</td>
    <td>{{$author->last_name}}</td>
    <td>{{$author->gender}}</td>
    <td>{{$author->email}}</td>
    <td>{{$author->tell}}</td>
    <td>{{$author->address}}</td>
    <td>{{$author->building}}</td>
    <td>{{$author->detail}}</td>
  </tr>
  @endforeach
</table>
@endsection
