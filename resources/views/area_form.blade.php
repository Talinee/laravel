@extends('layouts.main')
@section('title','Area Form')
@section ('content')
    <form action="{{Route('area_result')}}" method="POST">
        @csrf
    <style>;
        table{
            border-collapse: collapse;
        }
        table , th, td ,footer{
            margin: auto auto;
        }
        </style>
        <table>
            <tr>
                <td><label><b>Type</b></label></td><td><b id="color1">::</b></td>
                <td><input type="radio" name="type" value="1" width=""/>Rectangular
                <input type="radio" name="type" value="0.5" width="5" />Triange</label></td>
            </tr>
            <tr>
                <td><label><b>width</b></label></td>
                <td><b id="color1">::</b></td>
                <td><input type="text" name="width" /></label></td>
            </tr>
            <tr>
                <td><label><b>Height</b></label></td>
                <td><b id="color1">::</b></td>
                <td><input type="text" name="height" /></label></td>
            </tr>
            <tr>
                <td></td><td></td><td align="center"><button type="submit">Submit</button></td>
            </tr>
        </table>
    </form>
    @endsection