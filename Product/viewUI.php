<?php 
class viewUI{
    public function getUI($row){
        return <<<HTML
            <div class="container mt-5 mb-5">
                    <link rel="stylesheet" href="product.css">
                    <link rel="stylesheet" href="../bootstrap.css">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-6 border-end">
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="main_image"> <img src="$row[2]" id="main_product_image" width="350"> </div>
                                    <div class="thumbnail_images">
                                        <ul id="thumbnail">
                                            <li><img onclick="changeImage(this)" src="$row[2]" width="70"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 right-side">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3>$row[1]</h3> <span class="heart"><i class='bx bx-heart'></i></span>
                                    </div>
                                    <div class="mt-2 pr-3 content">
                                        <p>$row[4]</p>
                                    </div>
                                    <h3>Rs.$row[3]</h3>
                                   
                                    
                                    <div class="buttons d-flex flex-row mt-5 gap-3"> <button class="btn btn-outline-dark">Buy Now</button> <button class="btn btn-dark">Add to Cart</button> </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>

        HTML;
    }
}