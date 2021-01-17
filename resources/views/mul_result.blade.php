@extends('layouts.main')
@section('title','Multipilcation Table Result')
@section ('content')

    <style>
        table{
            border-collapse: collapse;
        }
        table, th, td {
            border:1px solid black;
            margin: auto auto;
        }
    </style>
        <div>
            <table>
                <?php
                for ($i=1;$i<=12;$i++)
            {
                echo "<tr>";
                    for ($j=2;$j<=$n;$j++)
                    {
                        echo "<td>";
                        $total = $i * $j;
                        echo "<div id='text1'> $total </div></td>"; 
                    }
                    echo "</tr>";
            }
        ?>
    </table>
</div>
@endsection