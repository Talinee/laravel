@extends('layouts.main')
@section('title','Multipilcation Table Form')
@section ('content')
    <form action="{{route('mul-result')}}" method="POST">
        @csrf
    <style>
        table{
            border-collapse: collapse;
        }
        table{
            margin-left: 465px;
            margin-right: 100px;
        }
    </style>
    <table>
            <label>
                <td><b>N</b></td><td><b id="color1">::</b></td>
                    <td><select name="n">
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select></td>
            </label>
            <br/>
                <tr>
                <td></td><td></td><td align="center"><button type="submit">Submit</button></td>
                </tr>
        </table>
    </form>
    @endsection


@endsection