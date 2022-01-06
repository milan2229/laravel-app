@extends('layouts.helloapp')

@section('title', 'Show')

@section('menubar')
@parent
詳細ページ
@endsection

@section('content')
@if($items != null)
@foreach($items as $item)
<table width="400px">
  <tr>
    <th width="50px">id: </th>
    <td width="50px">{{ $item->id }}</td>
  </tr>
  <tr>
    <th width="50px">name: </th>
    <td width="50px">{{ $item->name }}</td>
  </tr>
  <!-- <tr>
    <th width="50px">mail:</th>
    <td></td>{{ $item->mail }}
  </tr>
  <tr>
    <th width="50px">age:</th>
    <td></td>{{ $item->Field4 }}
  </tr> -->
</table>
@endforeach
@endif
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection