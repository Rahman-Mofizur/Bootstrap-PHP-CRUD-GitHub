<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-BOOTSTRAP CRUD Operation</title>
    <!-- 
Step-1 Bootstrap CSS-->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- 
Step-5 Modal-->

    <!-- 
Modal from Bootstrap-4-->
    <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- 
Step-6 Pop-Up Form-->


                    <!-- 
            Pop-Up Form Starts here -->
                    <div class="form-group">
                        <label for="completeName">Name</label>
                        <input type="text" class="form-control" id="completeName" placeholder="Enter your Name" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="completeEmail">Email</label>
                        <input type="text" class="form-control" id="completeEmail" placeholder="Enter your Email Address" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="completeMobile">Mobile</label>
                        <input type="text" class="form-control" id="completeMobile" placeholder="Enter your Mobile Number" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="completeAddress">Address</label>
                        <input type="text" class="form-control" id="completeAddress" placeholder="Enter your Present Address" autocomplete="off">
                    </div>
                </div>

                <!-- 
        Pop-Up Buttons -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="adduser()">Submit</button> <!-- Here, adduser() is a JavaScript Function -->

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>



    <!-- 
Step-4 index page-->
    <!-- 
    Main Body starts here... -->
    <div class="container my-5">
        <h1 class="text-center">PHP CRUD Operations using Bootstrap Modal</h1>

        <!-- Button trigger modal from Bootstrap -->
        <button type="button" class="btn btn-dark my-5" data-toggle="modal" data-target="#completeModal">
            Add New Users
        </button>
        <div id="displayDataTable"></div>

    </div>




    <!-- 
Step-3 jQuery cdn (content delivery network)-->


    <!-- JS & jQuery Links -->
    <!-- JQuery cdn 3.6.3  
    Source: https://cdnjs.com/libraries/jquery
CDN- A content delivery network (CDN) refers to a geographically distributed group
    of servers which work together to provide fast delivery of Internet content.
    A CDN allows for the quick transfer of assets needed for loading Internet
    content including HTML pages, javascript files, stylesheets, images, and videos.-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <!-- 
Step-2 Bootstrap JS-->


    <!-- Bootstrap-4 JS 2nd and 3rd scripts
    Source: https://getbootstrap.com/docs/4.0/getting-started/introduction/-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>




    <script>
        // Step-9 Loading Document in index page
        // Whenever the document gets ready, I want to dispplay all my data.
        // If there is any animation in your website and you don't want to load the data before loading the animation, you can use this document loader.
        $(document).ready(function() {
            displayData();
        });


        // Step-8 Display Function
        function displayData() {
            var displayData123 = "true";

            // For displaying data
            $.ajax({
                url: "display.php",
                type: 'post',
                data: {
                    displaySend: displayData123
                },
                success: function(data, status) {
                    // If successful, then run the next code.
                    // Displaying Data through variable.html(data)
                    $('#displayDataTable').html(data); // This .html(data) carries out all the field value as a container.
                    // Suppose you have an apple, an orange and a banana and you are putting them in a container/ box.
                    // And here, the box is the [ .html(data) ]
                }
            });
        }


        // Step-7 Own JavaScript function to read(NOT Fetch) and insert 

        // After [ Submit onclick="adduser()" ]
        function adduser() {
            // Taking values of Pop-Up form's fields through the id variables using jQuery
            var nameAdd = $('#completeName').val(); // Datafield's Value was passed by attibute.
            var emailAdd = $('#completeEmail').val();
            var mobileAdd = $('#completeMobile').val();
            var addressAdd = $('#completeAddress').val();


            // jQuery.ajax()
            // Example: $.ajax({
            //              type: "POST",
            //              url: url,
            //              data: data,
            //              success: success,
            //              dataType: dataType
            //              });
            // AJAX- Asynchronous JavaScript And  
            // Without reloading/ refreshing the page, we can get the data from the server using AJAX.
            // Dollar sign($) is used for jQuery.
            $.ajax({
                url: "insert.php",
                type: 'post',
                data: {
                    nameSend: nameAdd,
                    emailSend: emailAdd,
                    mobileSend: mobileAdd,
                    addressSend: addressAdd
                },
                success: function(data, status) {
                    // Whenever the above function runs successfully,the below code will be run.
                    // Function to display data (used for ensuring successful of passing data)
                    // console.log(status);

                    displayData();
                }
            });


        }
    </script>
</body>

</html>