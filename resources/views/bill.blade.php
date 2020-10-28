
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>


    <style>

        table.table.table-dark {
            margin-top: 40px !important;
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
    </style>
    <meta charset="UTF-8">
    <title>Bill</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
                    <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
                </li>
                <li class="nav-item px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="products.html">Contact</a>
                </li>
            </ul>

        </div>
    </div>
    <div class="col-md-2 float-right">
        <form action="/searchCu" method="GET">
            {{csrf_field()}}
            <div class="input-group">
                <input type="search" name="searchBar" placeholder="Buyer Name" class="form-control">
                <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
            </div>
        </form>
</nav><br>


    <div class = "container">
        <div class = "text-center">
            <h1> Bill</h1>
            <div class="row">
                <div class= "col-md-12">

                    @foreach($errors->all() as $error)

                        <div class = "alert alert-danger" role="alert">
                          {{$error}}

                        </div>

                    @endforeach


                <form method="post" action="/bill" >
                    {{csrf_field()}}


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Date &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;

                    <input type = "date" class="form-control" name="date" placeholder="" required><br>

                    </div>
                    <br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Price  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type = "text" class="form-control" name="price" placeholder="Price" required><br>

                    </div>
                    <br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Discount  &nbsp; &nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type = "text" class="form-control" name="discount"placeholder="Discount"required><br>

                    </div>
                    <br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Total  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type = "text" class="form-control" name="total" placeholder="Total"required><br>

                    </div>
                    <br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Quantity  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type = "text" class="form-control" name="quantity"placeholder="Quantity"required><br>

                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Description &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type = "text" class="form-control" name="description"placeholder="Description"><br>

                    </div>
                    <br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Customer Name  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type = "text" class="form-control" name="customerName"placeholder="Customer Name"><br>
                    </div>
                    <br>


                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Salesperson &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type = "text" class="form-control" name="salesperson" placeholder="Salesperson"><br>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        Item No &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                    <input type = "text" class="form-control" name="ItemNo" placeholder="Item Number"><br>
                    </div>
                    <br>

                    <input type="submit" class="btn btn-primary" value="Add">
                    <input type="button" class="btn btn-warning" value="Clear" onclick="window.location.reload()">
                </form>
                    <table class="table table-dark">
                    <th>Bill ID</th>
                    <th>Date</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Total</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Customer Name</th>
                    <th>Salesperson</th>
                    <th>Item No</th>
                        <th>Detele</th>
                        <th>Edit</th>


                        @foreach($bill as $billing)
                    <tr>
                        <td>{{$billing->id}}</td>
                        <td>{{$billing->date}}</td>
                        <td>{{$billing->price}}</td>
                        <td>{{$billing->discount}}</td>
                        <td>{{$billing->total}}</td>
                        <td>{{$billing->quantity}}</td>
                        <td>{{$billing->description}}</td>
                        <td>{{$billing->customer_name}}</td>
                        <td>{{$billing->Salesperson}}</td>
                        <td>{{$billing->ItemNo}}</td>
                        <td>
                            <a href="/deleteBill/{{$billing->id}}" class="btn btn-warning">Delete
                            </a>

                        </td>
                        <td><a href="/updateBill/{{$billing->id}}" class="btn btn-success">Edit</a>
                        </td>
                    </tr>
                        @endforeach

                    </table>
                </div>



            </div>
        </div>
    </div>



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

</body>
</html>

