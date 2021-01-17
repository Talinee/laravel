@extends('layouts.main')
@section('title','Multipilcation Table Result')
@section ('content')

    <style>;
    table {
        border-collapse: collapse;
    }
    table, th, td {
        margin-left: 465px;
        margin-right: 100px;
    }
    </style>
    <table>
        <tr>
            <td><b>Type</b></td> <td><b id="color1">::</b></td>{{ $nametype }}</td>
        </tr>
        <tr>
            <td><b>Width</b></td> <td><b id="color1">::</b></td>{{ $width }}</td>
        </tr>
        <tr>
            <td><b>Height</b></td> <td><b id="color1">::</b></td>{{ $height }}</td>
        </tr>
        <tr>
            <td><b>Area</b></td> <td><b id="color1">::</b></td>{{ $area }}</td>
        </tr>
    </table>
    @endsection