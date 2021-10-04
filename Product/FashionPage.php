
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<?php
include_once('ProductSearch.php');
    $product = new ProductSearch();
    $res=$product->catSearch('clothing');
    while($row=mysqli_fetch_array($res)){
        echo <<<HTML
            <main>
            <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative; width: 20%; display: inline-block;">
                <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
                    <div class="col">
                        <div class="card h-100 shadow-sm"> <img src= $row[2] class="card-img-top" alt="...">
                            <div class="card-body">
                                <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">$row[1]</span> <span class="float-end price-hp">Rs. $row[3]</span> </div>
                                <h5 class="card-title">$row[4]</h5>
                                <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            </main>
        HTML;
    }
