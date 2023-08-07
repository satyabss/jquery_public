<!doctype html>
<html lang="en">

<head>

    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="mybootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

</head>

<body>


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="productdetail">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
 
    <!-- <section class="sec1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>jhkhkhkhkhkhk</h1>
                    <h1>jh</h1>
                </div>
            </div>
        </div>

    </section> -->
    <section>
        <div class="container-fluid">
            <div class="row" id="productlist">
            </div>
        </div>
    </section>

    <section class="sec2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="a1.jpg" class="card-img-top" alt="..." width="100%">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Anand</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-icon">
                                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                        <a href="https://wa.me/9876543210"><i class="fab fa-whatsapp"></i></a>
                                        <a href="https://in.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>

                                </div>
                            </div>
                            <p class="card-text">Some quick example text to build on the card <span>title and make up the bulk of the card's content.</span></p>
                            <a href="#" class="toggletext btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="a1.jpg" class="card-img-top" alt="..." width="100%">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Pankaj</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="toggletext btn btn-primary">Show More</a>
                                </div>
                            </div>
                            <p class="card-text">Some quick example text to build on the card <span>title and make up the bulk of the card's content.</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="a1.jpg" class="card-img-top" alt="..." width="100%">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Sourav</h5>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="toggletext btn btn-primary">Show More</a>
                                </div>
                            </div>
                            <p class="card-text">Some quick example text to build on the card <span>title and make up the bulk of the card's content.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">CSS Types</h5>
                            <a href="#" class="card-link">View Types</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row y">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Inline</h5>
                            <a href="#" class="card-link">View Types</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row y">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Internal</h5>
                            <a href="#" class="card-link">View Types</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row y">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">External</h5>
                            <a href="#" class="card-link">View Types</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <button>Start Animation</button>
    <div style="background:#98bf21;height:100px;width:100px;"></div>


    <section class="sec4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="#">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" pattern="[A-Za-z]{5}" title="only text with 5 charecters">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{3,}$" title="text@text.atlest minimum 3 charecter word">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" min="2" max="5" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dateInput">DOB</label>
                            <input type="date" class="form-control" min="2020-01-01" max="2020-12-31">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>








    <h1>All Carts</h1>
    <ul id="cartList">
        <!-- Cart items will be appended here -->
    </ul>














    <script src="myjquery.js" type="text/javascript"></script>
    <script src="mybootstrap.js" type="text/javascript"></script>
    <script src="myjqueryscripts.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {


            // Make the AJAX GET request
            $.ajax({
                url: 'https://fakestoreapi.com/carts',
                type: "GET",
                dataType: "json",
                success: function(data) {
                    console.log(data);
                    // Process the response data
                    if (data && data.length > 0) {
                        // Assuming the API response is an array of carts
                        data.forEach(function(cart) {
                            // Assuming each cart has an 'id' property
                            const cartId = cart.id;
                            // Assuming each cart has a 'userId' property
                            const userId = cart.userId;
                            const date = cart.date;
                            const products = cart.products;

                            // Append cart information to the cartList element
                            $("#cartList").append(`<li class="card col-md-9">Cart ID: ${cartId}, User ID: ${userId}, Date : ${date}, products : ${products}</li>`);

                        });
                    } else {
                        // No carts found
                        $("#cartList").append("<li>No carts found.</li>");
                    }
                },
                error: function(xhr, status, error) {
                    // Handle errors here
                    $("#cartList").append(`<li>Error: ${error}</li>`);
                }
            });
            $("li").on({
                mouseenter: function() {
                    $(this).css("background-color", "lightgray");
                },
                mouseleave: function() {
                    $(this).css("background-color", "lightblue");
                },
                click: function() {
                    $(this).css("background-color", "yellow");
                }
            });
        });
    </script>

</body>

</html>