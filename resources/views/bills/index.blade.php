<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>Bills</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">

    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>


    <style>



        table.table.table-bordered {
            margin-top: 50px;
        }

        input.btn.btn-primary {
            width: 90px;
        }

        input.btn.btn-warning {
            width: 90px;
        }
        input[type="date"]:not(.has-value):before {
            color: #495057;
            content: attr(placeholder);

        }

        /* isira */

       /* remove if want */
        .col-md-2.float-right {
            display: none;
        }

    </style>
</head>
<body>


<link href="css/business-casual.min.css" rel="stylesheet">
<img src="images/logo.png" alt="logo" width="110" height="100" style="float:left; margin-top:-2.2% ;padding-left:0.5%">
<h1 class="site-heading text-center text-white d-none d-lg-block">
    <!--<span class="site-heading-upper text-primary mb-3">A Free Bootstrap 4 Business Theme</span>-->
    <span class="site-heading-lower" style="color:#e6a756">Ranjith Motors & Auto Parts</span>
</h1>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" >
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ">
                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/menu">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/subBillingMenu">Menu
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
                </li>

                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="/billpdf/pdf">Reports</a>
                </li>
            </ul>

        </div>
    </div>
    <div class="col-md-2 float-right">
        <form action="/searchBills" method="GET">
            {{csrf_field()}}
            <div class="input-group">
                <input type="search" name="searchBills" placeholder="Item Name" class="form-control">
                <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
            </div>
        </form>
</nav>
<br>




@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="clearfix">
                <span class="panel-title">Bills</span>
                <a href="{{route('bills.create')}}" class="btn btn-success pull-right">Create</a>
            </div>
        </div>
        <div id="bt" style="text-align: right;padding-top: 9px;padding-right: 5px;"><a href="{{ url('/billpdf/pdf') }}" class="btn btn-danger">convert into pdf</a></div>
        <div class="panel-body">
            @if($bills->count())
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Invoice No.</th>
                        <th>Grand Total</th>
                        <th>Client</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th colspan="2">Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bills as $bill)
                        <tr>
                            <td>{{$bill->invoice_no}}</td>
                            <td>${{$bill->grand_total}}</td>
                            <td>{{$bill->client}}</td>
                            <td>{{$bill->invoice_date}}</td>
                            <td>{{$bill->due_date}}</td>
                            <td>{{$bill->created_at->diffForHumans()}}</td>
                            <td class="text-right">
                                <a href="{{route('bills.show', $bill)}}" class="btn btn-default btn-sm">View</a>
                                <a href="{{route('bills.edit', $bill)}}" class="btn btn-primary btn-sm">Edit</a>
                                <form class="form-inline" method="post"
                                      action="{{route('bills.destroy', $bill)}}"
                                      onsubmit="return confirm('Are you sure?')"
                                >
                                    <input type="hidden" name="_method" value="delete">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                {!! $bills->render() !!}
            @else

                <div class="invoice-empty">
                    <p class="invoice-empty-title">
                        No Bills were created.
                        <a href="{{route('bills.create')}}">Create Now!</a>
                    </p>
                </div>

            @endif
                <footer class="footer text-faded text-center py-5">
                    <div style = "text-align: left; margin-top:-2.2%; padding-left:0.5%;color:#e6a756">
                        <h3 class="m-0 small"> 2020 Ranjith Motors And Auto Parts</h3>
                        <h3 class="m-0 small"> Colombo Road,</h3>
                        <h3 class="m-0 small"> Dambokka,</h3>
                        <h3 class="m-0 small"> Kurunegala,Srilanka</h3>
                        <h3 class="m-0 small"> 600000</h3>
                    </div>

                    <div class="container" style = "margin-top:-2.5%;color:#e6a756">
                        <p class="m-0 small">&copy; 2020 Ranjith Motors All Rights Reserved</p>
                    </div>

                    <div style = "text-align: right; margin-top:-3.5%; padding-right:1%;color:#e6a756">
                        <h3 class="m-0 small"> +94 372231201</h3>
                        <h3 class="m-0 small"> +94 372222902</h3><br>
                        <h3 class="m-0 small"> E: info@ranjithmotors.com</h3>
                    </div>

                </footer>
        </div>
    </div>
@endsection


