<?php

$cafename=$_GET['cafename'];

include("db.php");

$sql="select * from cafes where cafename='$cafename'";
$result= mysqli_query($conn, $sql);

if($result)
{
    if(mysqli_num_rows($result)==0)
    {
        $msg="Cafe doesn't exist!. Create new One.";
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location="http://localhost/chatCaffe";';
        echo '</script>';
    }
}

else {
    echo "Error".mysqli_connect_error();
}






?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/chatcafe.png">

        <title>ChatCafe</title>

        <!-- Bootstrap core CSS -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.css">

        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    

        <script>

         //uppercase the name field
 function myFunction() {
     var x = document.getElementById("setname");
     x.value = x.value.toUpperCase();
 }



  //uppercase the search field
  function mySearch() {
                var x = document.getElementById("searchCafe");
                 x.value = x.value.toUpperCase();
                }


//disabled the name field after submission

function  nameD()
{
    var x=document.getElementById("setname").value;
    if( x !="")
    {
        document.getElementById("setname").disabled=true;
    }
}





</script>

    </head>
    <body>
        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About</h4>
                            <p class="text-muted">
                                Chatcafe is a unique chatting platform.Where chatting is easy, Create a cafe and
                                share the url with friends and pour messages...
                            </p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">

                            <form action="search.php" method="post">
                                <input
                                    type="text"
                                    class="form-control "
                                    name="searchCafe"
                                    id="searchCafe"
                                    onkeyup="mySearch()"
                                    placeholder="Search your Cafe here..." required><br>

                                <button class="btn btn-outline-secondary " name="search" id="search">Search</button>
                            </form>

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

        <div class="container">

            <div class=" chatfield ">
                <h5 style="color:#343a40;  ">Cafe Name -
                    <?php echo $cafename ?></h5>
            </div>
            <br>

            <div class="chatpart">
                <div class="anyclass" id="data">
                    
                  
                
                </div>
            </div>

            <div class="chatfield">
          <form action="" method="post" >
                <input
                    type="text"
                    class="form-control "
                    name="setname"
                    id="setname"
                    onkeyup="myFunction()"
                
                    placeholder="Set your name here.."><br>

                <input
                    type="text"
                    class="form-control "
                    name="usermsg"
                    id="usermsg"
                  
                    placeholder="Type your message here..." ><br>

                <button class="btn btn-outline-secondary " name="submitmsg" id="submitmsg"     onclick="nameD()">Send</button>
                </form>
                
            </div>

        </div>

        <br>

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

 
<!-- core JavaScript
================================================== -->
<script src="js/jquery3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.1/emojionearea.min.js"></script>

   

<script>
    //initialize emojiarea
    $("#usermsg").emojioneArea({pickerPosition: "top"});

   

  

    //check new msg in every 1 sec

    setInterval(runFunction, 1000);
    function runFunction() {
        var message=$('.anyclass');
        $.post("htcont.php", {
            room: '<?php echo $cafename ?>'
        }, function (data) {
            document
                .getElementsByClassName('anyclass')[0]
                .innerHTML = data;
                message.scrollTop(message[0].scrollHeight);
        });
    }
  
 


    // enter key submit functionality
    var input = document.getElementById("usermsg");

    input.addEventListener("keyup", function (event) {

        event.preventDefault();

        if (event.keyCode === 13) {

            document
                .getElementById("submitmsg")
                .click();
        }
    });

    //message sending function with ajax
   
    $("#submitmsg").click(function () {
        var clientmsg = $('#usermsg').val();
        var clientname = $('#setname').val();
        if(clientmsg!="" && clientname!=""){
        $.post("postmsg.php", {
            text: clientmsg,
            room: '<?php echo $cafename ?>',
            ip: clientname
        }, function (data) {
            document
                .getElementsByClassName('anyclass')[0]
                .innerHTML = data;
              
        });


   

// making field empty after submit
        var emoji = $("#usermsg").emojioneArea();
         emoji[0]
            .emojioneArea
            .setText('');

    }
    else{
            alert("Please fill all the field!");
    }
    
    return false;
    });
    


</script>

</body>
</html>