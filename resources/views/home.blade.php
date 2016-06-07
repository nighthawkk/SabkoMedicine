@extends('layouts.app')

@section('content')
    <head>
        <style>
            .button {
                border-radius: 4px;
                background-color: #f4511e;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 28px;
                padding: 20px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
            }

            .button span {
                cursor: pointer;
                display: block;
                position: relative;
                transition: 0.5s;
            }

            .button span:after {
                content: '>>';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
            }

            .button:hover span {
                padding-right: 25px;
            }

            .button:hover span:after {
                opacity: 1;
                right: 0;
            }
        </style>
    </head>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">
                   <center> <button class="button"><span><a href="/donate" style="color: white;  display: block; text-decoration: none">DONATE</a></span></button></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
