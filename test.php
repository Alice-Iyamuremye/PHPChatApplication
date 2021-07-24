<?php 
function generate_uid(){
    return uniqid(rand().time());
}
// echo generate_uid()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- <script src="https://kit.fontawesome.com/116d420389.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Bootstrap</title>
    <style>
    </style>
</head>

<body>


    
          <div class="custom-control custom-switch">
              <input class="custom-control-input" id="wkns" type="checkbox"> 
              <label class="custom-control-label" for="wkns">Weakness</label>
          </div>
           

    
 
 

    <?php
        function convert_timestamp_to_time($timestamp){
            $date=date("d F Y H:i:s",  $timestamp);
            return $date;
        } 

        // echo convert_to_time(1627031425);
        echo convert_timestamp_to_time(1627031425);
    ?>
    <div id="mySidepanel" class="sidepanel">
        <div class="closeside">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>

        </div>

        <div class="tophead">
            <div> <img src="images/ange.jpg"></div>
            <div class="myselfinfo">
                <h3>Username</h3>
                <h5>+250783305114</h5>
            </div>
        </div>


        <ul class="list-group mb-4">
            <li class="list-group-item list-group-item-action  py-3" href="#"><i class="fas fa-users mr-1"></i> New
                Group</li>
            <li class="list-group-item list-group-item-action  py-3" href="#"><i class="fas fa-users mr-1"></i> Contacts
            </li>
            <li class="list-group-item list-group-item-action  py-3" href="#"><i class="fas fa-users mr-1"></i> Calls
            </li>
            <li class="list-group-item list-group-item-action  py-3" href="#"><i class="fas fa-users mr-1"></i> Settings
            </li>
            <li class="list-group-item list-group-item-action  py-3" href="#"><i class="fas fa-users mr-1"></i>Night
                Mode</li>
        </ul>
    </div>

    <nav class="navbar navbar-light d-inline-block ">
        <button class="navbar-toggler" onclick="openNav()">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>






    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "300px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>




    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>

        $("#sidebar").toggleClass("collapsed");
        $("#content").toggleClass("col-md-12 col-md-9");

        // Select All Contact to add an event on them
        let contactlist = document.querySelectorAll(".contacts a");

        // Loop Through The List and Add Click events
        for (const item of contactlist) {
            item.addEventListener("click", () => {
                // Get the current Selected (has a class of active) at first it's dd-0
                let CurrentContact = document.querySelector(".contacts .active");

                let currentcontactid = CurrentContact.getAttribute("identifier");
                let selectedContact = item.getAttribute("identifier");

                // Check if the current seected contact is not equal to the one being selected
                // Then display none to the previous one and display the selected one
                if (currentcontactid !== selectedContact) {

                    let toremove = document.querySelector(".message." + currentcontactid);
                    toremove.classList.add("d-none");

                    document.querySelector(".contactdtls." + currentcontactid).classList.add("d-none");

                    let toadd = document.querySelector(".message." + selectedContact).classList.remove("d-none");
                    document.querySelector(".contactdtls." + selectedContact).classList.remove("d-none");

                    CurrentContact.classList.remove("active");
                    item.classList.add("active");
                }
                console.log(currentcontactid + " => " + selectedContact);
                console.log("button Was clicked")
            }, false)

        }


    </script>
</body>

</html>