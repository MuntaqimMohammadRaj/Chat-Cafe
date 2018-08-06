

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/chatcafe.png">

        <title>ChatCafe</title>

        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
       

        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body>

        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About</h4>
                            <p class="text-muted">
                                Chatcafe is a unique chatting platform.Where chatting is easy, Create a cafe and share the url with friends and pour messages... 
                            </p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                        <form action="search.php" method="post">
                            <input type="text" class="form-control "  name="searchCafe" id="searchCafe" onkeyup="mySearch()" placeholder="Search your Cafe here..." required><br>

<button class="btn btn-outline-secondary " name="search" id="search" >Search</button></form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="index.php" class="navbar-brand d-flex align-items-center">
                        <img src="img/chatcafe.png" alt="ChatCafe" style="width:30px; height:30px;">
                        <strong>
                            <b>Chat</b>Cafe</strong>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarHeader"
                        aria-controls="navbarHeader"
                        aria-expanded="false"
                        aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>
        <!-- end of header -->

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light backimg">


        

            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 font-weight-normal">
                    <b>Chat</b>Cafe</h1>
                <p class="lead font-weight-normal">Chat with your friends without concern about
                    chat log. Now you can freely chat with your friends using our free platform.</p>
                <form action="claim.php" method="POST">

                    <input

            
                        type="text"
                       
                        name="cafe"
                        id="cafe"
                        onkeyup="myCafe()"
                        placeholder="Enter your cafe name!"
                        style="padding:5px;margin-bottom:5px;border:1px solid #6c757d; border-radius:5px;" required><br>
                    <button class="btn btn-outline-secondary" href="#">Create Cafe</button>
                </form>

            </div>

          
        </div>

        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
            <div
                class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
                <div class="my-3 py-3">
                    <h2 class="display-5">Now chatting is more easy & fancy here</h2>
                    <p class="lead">Create cafe do share the url &  drink messages as much as you can with your friends.</p>
                </div>
                <div
                    class="bg-light box-shadow mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
            <div
                class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
                <div class="my-3 p-3">
                    <h2 class="display-5">ChatCafe is a unique instant chatting platform</h2>
                    <p class="lead">create cafe for connecting together</p>
                </div>
                <div
                    class="bg-dark box-shadow mx-auto"
                    style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
            </div>
        </div>

        <!-- end of mid-part -->


<!-- footer part -->
        <footer class="container py-3 bg-dark">
            <div class="row">
                <div class="col-12 col-md col-sm">
                    <div class="text-center">
                        <img
                            src="img/chatcafe.png"
                            class="rounded"
                            alt="ChatCafe"
                            style="width:50px; height:50px"></div>
                    <br>

                    <large class="d-block mb-3 text-muted text-center">&copy; All right reserved by
                        <b>Chat</b>Cafe</large>
                </div>

            </div>
        </footer>







        <!-- Bootstrap core JavaScript
        ================================================== -->
        <script src="js/jquery3.js"></script>
       <script src="js/bootstrap.min.js"></script>
        <script>
                //uppercase the claim field
               function myCafe() {
                var x = document.getElementById("cafe");
                 x.value = x.value.toUpperCase() ;
                }


                //uppercase the search field
               function mySearch() {
                var x = document.getElementById("searchCafe");
                 x.value = x.value.toUpperCase()  ;
                }

        
        </script>

        

    </body>
</html>