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
</head>

<body>
    <!-- The Whole Displayed is Made Using A 3 COlumns Grid Alignment Each Named Section one , Section two , section 3 -->

    <section class="container-fluid">
        <section class="row vh-100">

            <!-- Contact List  Section   -----SECTION ONE
            ------------------------------------------------------------------------------------------------------------- -->
            <section class=" col col-sm-4 col-md-3 p-0 d-none d-sm-inline-block bg-secondary contacts">
                <nav class="navbar navbar-dark bg-dark d-inline-block ">
                    <button class="navbar-toggler" onclick="openNav()">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <!-- Side Menue  -->
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
                        <li class="list-group-item list-group-item-action  py-3" href="#"><i
                                class="fas fa-users mr-1"></i> New
                            Group</li>
                        <li class="list-group-item list-group-item-action  py-3" href="#"><i
                                class="fas fa-users mr-1"></i> Contacts
                        </li>
                        <li class="list-group-item list-group-item-action  py-3" href="#"><i
                                class="fas fa-users mr-1"></i> Calls
                        </li>
                        <li class="list-group-item list-group-item-action  py-3" href="#"><i
                                class="fas fa-users mr-1"></i> Settings
                        </li>
                        <li class="list-group-item list-group-item-action  py-3" href="#"><i
                                class="fas fa-users mr-1"></i>Night
                            Mode</li>
                    </ul>
                </div><!-- Side Menue -->
                <script>
                    function openNav() {
                        document.getElementById("mySidepanel").style.width = "350px";
                    }

                    function closeNav() {
                        document.getElementById("mySidepanel").style.width = "0px";
                    }
                </script>

                <!-- Search Form above the contact -->
                <div class="form-outline d-inline-block">
                    <input type="search" id="form1" class="form-control my-2 mx-auto" placeholder="Search "
                        aria-label="Search" />
                </div>


                <!-- Contact List Groups  -->
                <div class="list-group contacts" style="height: 80vh; overflow: scroll;">

                    <!-- Starting Of Contact List group-->
                    <a class="list-group-item text-white d-none active" identifier="dd-0" href="#">
                        <div class="media">
                            <span class="online-status"></span>
                            <img src="images/thumbnail-1.jpg" alt="user" width="60" class="rounded-pill">
                            <div class="media-body ml-1">
                                <div class="d-flex align-items-end justify-content-between mb-1">
                                    <h6 class="mb-0 text-truncate text-nowrap">Ilunga gisa </h6>
                                    <small class="small font-weight-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                            <path
                                                d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                        </svg> 09:20
                                    </small>
                                </div>
                                <p class="font-italic mb-0 w-75 small text-nowrap text-truncate ">Lorem ipsum, dore sit
                                    ... </p>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->


                    <!-- Starting Of Contact List group-->
                    <a class="list-group-item text-white" identifier="dd-1" href="#">
                        <div class="media">
                            <span class="online-status"></span>
                            <img src="images/thumbnail-1.jpg" alt="user" width="60" class="rounded-pill">
                            <div class="media-body ml-1">
                                <div class="d-flex align-items-end justify-content-between mb-1">
                                    <h6 class="mb-0 text-truncate text-nowrap">Monkeyman</h6>
                                    <small class="small font-weight-bold"> <svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="16" fill="currentColor" class="bi bi-check-all"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                        </svg> 09:20</small>
                                </div>
                                <p class="font-italic mb-0w-75 small text-nowrap text-truncate ">Lorem ipsum, dore sit
                                    ... </p>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->


                    <!-- Starting Of Contact List group-->
                    <a class="list-group-item  text-white" identifier="dd-2" href="#">
                        <div class="media">
                            <img src="images/chess.jpeg" alt="user" width="60" class="rounded-pill">
                            <div class="media-body ml-1">
                                <div class="d-flex align-items-end justify-content-between mb-1">
                                    <h6 class="mb-0 text-truncate text-nowrap">CST Chess Clus</h6>
                                    <span class="badge badge-warning badge-pill">10,099</span>
                                </div>
                                <p class="font-italic mb-0w-75 small text-nowrap text-truncate ">Lorem ipsum, dore sit
                                    ... </p>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->


                    <!-- Starting Of Contact List group  Evariste -->

                    <a class="list-group-item text-white " identifier="dd-3" href="#">
                        <div class="media">
                            <span class="online-status"></span>

                            <img src="images/evariste.jpg" alt="user" width="60" class="rounded-pill">

                            <div class="media-body ml-1">
                                <div class="d-flex align-items-end justify-content-between mb-1">
                                    <h6 class="mb-0 text-truncate text-nowrap">Tuyisenge Evariste</h6>
                                    <small class="small font-weight-bold"><i class="fas fa-check"></i> 12:03</small>
                                </div>
                                <p class="font-italic mb-0w-75 small text-nowrap text-truncate ">Nonese , how am i
                                    ge....</p>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->



                    <!-- Starting Of Contact List group-->
                    <a class="list-group-item  text-white " identifier="dd-4" href="#">
                        <div class="media">

                            <img src="images/ange.jpg" alt="user" width="60" class="rounded-pill">
                            <div class="media-body ml-1">
                                <div class="d-flex align-items-end justify-content-between mb-1">
                                    <h6 class="mb-0 text-truncate text-nowrap">Uberewe Ange</h6>
                                    <small class="small font-weight-bold"><i class="fas fa-check"></i> 12:03</small>
                                </div>
                                <p class="font-italic mb-0w-75 small text-nowrap text-truncate ">Lorem ipsum, dore sit
                                    ... </p>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->



                    <!-- Starting of contact list group -->
                    <a class="list-group-item  text-white " identifier="dd-5" href="#">
                        <div class="media">
                            <img src="images/thumbnail-3.jpg" alt="user" width="60" class="rounded-pill">
                            <div class="media-body ml-1">
                                <div class="d-flex align-items-end justify-content-between mb-1">
                                    <h6 class="mb-0 text-truncate text-nowrap">Iyamuremye Alice</h6>
                                    <small class="small font-weight-bold"><i class="fas fa-check"></i> 12:03</small>
                                </div>
                                <p class="font-italic mb-0w-75 small text-nowrap text-truncate ">Lorem ipsum, dore sit
                                    ... </p>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->



                    <!-- Starting of contact list group -->
                    <a class="list-group-item  text-white " identifier="dd-6" href="#">
                        <div class="media">
                            <img src="images/asum.jpg" alt="user" width="60" class="rounded-pill">
                            <div class="media-body ml-1">
                                <div class="d-flex align-items-end justify-content-between mb-1">
                                    <h6 class="mb-0 text-truncate text-nowrap">Assoumpta</h6>
                                    <small class="small font-weight-bold"><i class="fas fa-check"></i> 12:03</small>
                                </div>
                                <p class="font-italic mb-0w-75 small text-nowrap text-truncate ">Lorem ipsum, dore sit
                                    ... </p>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->



                    <!-- Starting of contact list group -->
                    <a class="list-group-item  text-white " identifier="dd-7" href="#">
                        <div class="media">
                            <img src="images/thumbnail-1.jpg" alt="user" width="60" class="rounded-pill">
                            <div class="media-body ml-1">
                                <div class="d-flex align-items-end justify-content-between mb-1">
                                    <h6 class="mb-0 text-truncate text-nowrap">Mutabazi Dany</h6>
                                    <small class="small font-weight-bold"><i class="fas fa-check"></i> 12:03</small>
                                </div>
                                <p class="font-italic mb-0w-75 small text-nowrap text-truncate ">Lorem ipsum, dore sit
                                    ... </p>
                            </div>
                        </div>
                    </a> <!-- --------------End of Contact list group-->

                </div>


                <div class="d-flex justify-content-around  align-items-stretch settings">
                    <div><a href="#"><i class="fas fa-users mr-1"></i>Groups</a></div>
                    <div><a href="#"><i class="fas fa-cogs mr-1"></i>Settings</a></div>
                    <div><a href="#"><i class="fas fa-plus mr-1"></i>Contact</a></div>
                </div>

            </section> <!-- Contact Section End ---------------------------------------->


            <!-- Chat Content Section  ----- Section TWO 
            ------------------------------------------------------------------------------------------- -->
            <section class="col p-0 col-sm-8 col-md-9 col-lg-7 d-none d-inline-block bg-dark  message_section">

                <!-- Text To be Displayed When A used First Lend On the Site ANd Havent Selected Any Contact -->
                <div class="container-fluid text-center message dd-0" style="padding:240px 0px;">
                    <h2 class=" text-light align-content-center">please Select a contact</h2>
                </div>

                <!-- Conversation Section , Each Havind a class dd-x ,which relates them to each user 
                    Aka Each User has a dd-x class too  -->

                <div class="container-fluid message d-none dd-1">
                    <ul class="clearfix list-unstyled" role="tooltip">

                        <li class="me">
                            <div>Hey dude, I’m bored. Tell me a good joke Please.</div>
                            <span class="deltime  ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>
                                13:34
                            </span>
                        </li><br>

                        <li class="">
                            <div>sure.</div>
                            <span class="deltime"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>12:34</span>
                        </li><br>

                        <li class="">
                            <div>How do you keep an idiot in suspense?</div>
                            <span class="deltime"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>12:34</span>
                        </li><br>

                        <li class="me">
                            <div class="reply">
                                <span>Jason Doe </span>
                                <p> How do you keep... </p>
                            </div>
                            <div>I don't Know , How ? </div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>
                        <li class="me">
                            <div> I’m waiting for your answer</div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>
                        <li class="me">
                            <div> Helloooooooooooooo</div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>
                        <li class="me">
                            <div> Why Don't You answer?? <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-emoji-angry-fill text-warking" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.053 4.276a.5.5 0 0 1 .67-.223l2 1a.5.5 0 0 1 .166.76c.071.206.111.44.111.687C7 7.328 6.552 8 6 8s-1-.672-1-1.5c0-.408.109-.778.285-1.049l-1.009-.504a.5.5 0 0 1-.223-.67zm.232 8.157a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 1 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5 0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5z" />
                                </svg></div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>
                    </ul>
                </div>
                <!-- ---------------------------  -->



                <div class="container-fluid message d-none dd-2">
                    <ul class="clearfix list-unstyled" role="tooltip">

                        <li class="">
                            <div style=" color:brown;">
                                <span>Ilunga Gisa </span>
                            </div>
                            <div>Guys , i Got a really Cool Riddle for you . Find the one move checkmate if you can ,
                                white to move </div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li><br>
                        <li class="">
                            <div style="color:brown;">
                                <span>Ilunga Gisa </span>
                            </div>
                            <div>
                                <a data-toggle="modal" href="#dd-2"><img src="images/pzl.jpeg" width="100%"> </a>
                            </div>
                            <span class="deltime"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>12:34</span>
                        </li><br>


                        <li class="me">
                            <div> Come on , this one is Really Easy ! </div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>
                        <li class="me">
                            <div> Queen To e7 , and the match is over ! </div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>





                    </ul>
                </div>


                <!-- ---------------------------  -->

                <div class="container-fluid message d-none dd-3">
                    <ul class="clearfix list-unstyled" role="tooltip">

                        <li class="me">
                            <div>Hello Man , Bimezute ? </div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>13:34</span>
                        </li><br><br>

                        <li class="me">
                            <div>Finished My Portrait Already C man.</div>
                            <span class="deltime"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>12:34</span>
                        </li><br><br>

                        <li class="">
                            <div>Yego Man , done kabisa! let me show you </div>
                            <span class="deltime"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>12:34</span>
                        </li><br>
                        <li class="">

                            <div>
                                <!-- Link To the Modal -->
                                <a data-toggle="modal" href="#dd-3"><img src="images/evapic.png" width="100%"> </a>
                            </div>
                            <span class="deltime"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>12:34</span>
                        </li><br>


                        <li class="me">
                            <div> Damn man , You are really Good ! </div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>
                        <li class="me">
                            <div> 10/10 kabisa ! no difference , people can actually tell that it's me !</div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>
                        <li class="me">
                            <div> Nonese , how am i getting the picture ? <svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor"
                                    class="bi bi-emoji-angry-fill text-danger" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM4.053 4.276a.5.5 0 0 1 .67-.223l2 1a.5.5 0 0 1 .166.76c.071.206.111.44.111.687C7 7.328 6.552 8 6 8s-1-.672-1-1.5c0-.408.109-.778.285-1.049l-1.009-.504a.5.5 0 0 1-.223-.67zm.232 8.157a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 1 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5 0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5z" />
                                </svg></div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg>13:34</span>
                        </li>





                    </ul>
                </div>

                <!-- ---------------------------  -->
                <div class="container-fluid message d-none dd-4">
                    <ul class="clearfix list-unstyled" role="tooltip">

                        <li class="me">
                            <div>How Was it in the 19s When it comes to shopping ?.</div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>13:34</span>
                        </li><br>
                        <li class="me">
                            <div>I am pretty sure Things were tough that time right ? </div>
                            <span class="deltime  "> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>13:34</span>
                        </li><br>

                        <li class="">
                            <div>Well, When I was your age, I used to go to the market with two Hundred and bring home
                                soap, rice, milk, bread, face powder etc.</div>
                            <span class="deltime"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>12:34</span>
                        </li><br>

                        <li class="">
                            <div>nowadays it is difficult. There are CCTV cameras everywhere.</div>
                            <span class="deltime"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                                </svg></i>12:34</span>
                        </li><br>


                    </ul>
                </div>
                <!-- ---------------------------  -->
                <div class="container text-light">
                    <div class="row reply align-items-center">
                        <div class="col-1 col-sm-1 col-xs-1 reply-emojis">
                            <i class="fa fa-smile-o fa-2x"></i>
                        </div>
                        <div class="col-7 col-sm-9 col-xs-9 reply-main">
                            <textarea class="form-control" rows="1" id="comment"></textarea>
                        </div>
                        <div class="col-1 col-sm-1 col-xs-1 reply-recording">
                            <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="col-1 col-sm-1   col-xs-1 reply-send">
                            <i class="fa fa-send fa-2x" aria-hidden="true"></i>
                        </div>
                    </div>

                </div>


            </section><!-- Chat Section End ---------------------------------------->






            <!-- Chat Description start  Section Three
                  ----------------------------------------------------------------------------------->
            <section class=" col col-lg-2 d-none text-light d-lg-inline-block bg-secondary ">
                <div class="contactdtls d-none dd-0">
                    <img src="images/evariste.jpg">
                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>
                <div class="contactdtls d-none dd-1">
                    <a data-toggle="modal" href="#ddp-1"><img src="images/thumbnail-1.jpg"></a>
                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>

                <div class="contactdtls d-none dd-2">
                    <a data-toggle="modal" href="#ddp-2"><img src="images/chess.jpeg"></a>
                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>

                <div class="contactdtls d-none dd-3">

                    <a data-toggle="modal" href="#ddp-3"><img src="images/evariste.jpg"></a>

                    <div class="calicn text-light text-center row justify-content-around">
                        <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                            </svg></div>
                        <div class="col"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                            </svg></div>
                    </div>

                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user
                            </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>

                <div class="contactdtls d-none dd-4">
                    <a data-toggle="modal" href="#ddp-4"><img src="images/ange.jpg"></a>
                    <hr>
                    <ul class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                        </svg>
                        <li><span>Mobile</span>
                            <p>+250782123211</p>
                        </li>
                        <li><span>Bio</span>
                            <p>One Love for everyone</p>
                        </li>
                        <li><span>Username</span>
                            <p>@evariste32</p>
                        </li>
                        <hr>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-bell-slash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M5.164 14H15c-1.5-1-2-5.902-2-7 0-.264-.02-.523-.06-.776L5.164 14zm6.288-10.617A4.988 4.988 0 0 0 8.995 2.1a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 7c0 .898-.335 4.342-1.278 6.113l9.73-9.73zM10 15a2 2 0 1 1-4 0h4zm-9.375.625a.53.53 0 0 0 .75.75l14.75-14.75a.53.53 0 0 0-.75-.75L.625 15.625z" />
                            </svg><br>
                            <p>Notification &nbsp; &nbsp;&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="23"
                                    height="23" fill="currentColor" class="bi bi-volume-mute-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06zm7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0z" />
                                </svg></p>

                        </li>
                        <li>

                            <p style="color: red; text-shadow: 1px 1px 1px rgb(29, 29, 29);"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg> Block user </p>

                        </li>
                    </ul>
                    <div>

                    </div>
                </div>

                <!-- Modals Of All Images -->
                <div>



                    <!-- Profile Modal dd-1 Start-->
                    <div class="modal fade" id="ddp-1">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close btn" data-dismiss="modal">&times;</button>
                                </div> <!-- Modal Header-->
                                <div class="modal-body text-center">
                                    <img src="images/thumbnail-1.jpg" class="img-fluid">
                                </div><!-- Modal body-->
                            </div>
                            <!--Modal content-->
                        </div>
                        <!--Modal Dialog-->
                    </div> <!-- Image Modal  End-->


                    <!-- Profile Modal dd-2 Start-->
                    <div class="modal fade" id="ddp-2">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close btn" data-dismiss="modal">&times;</button>
                                </div> <!-- Modal Header-->
                                <div class="modal-body text-center">
                                    <img src="images/chess.jpeg" class="img-fluid">
                                </div><!-- Modal body-->
                            </div>
                            <!--Modal content-->
                        </div>
                        <!--Modal Dialog-->
                    </div> <!-- Image Modal  End-->


                    <!-- Profile Modal dd-3 Start-->
                    <div class="modal fade" id="ddp-3">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close btn" data-dismiss="modal">&times;</button>
                                </div> <!-- Modal Header-->
                                <div class="modal-body text-center">
                                    <img src="images/evariste.jpg" class="img-fluid">
                                </div><!-- Modal body-->
                            </div>
                            <!--Modal content-->
                        </div>
                        <!--Modal Dialog-->
                    </div> <!-- Image Modal  End-->

                    <!-- Profile Modal dd-4 Start-->
                    <div class="modal fade" id="ddp-4">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close btn" data-dismiss="modal">&times;</button>
                                </div> <!-- Modal Header-->
                                <div class="modal-body text-center">
                                    <img src="images/ange.jpg" class="img-fluid">
                                </div><!-- Modal body-->
                            </div>
                            <!--Modal content-->
                        </div>
                        <!--Modal Dialog-->
                    </div> <!-- Image Modal  End-->


                    <!-- Image Modal dd-3 Start-->
                    <div class="modal fade text-dark" id="dd-3">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">@evariste32</h4>
                                    <button class="close btn" data-dismiss="modal">&times;</button>
                                </div> <!-- Modal Header-->
                                <div class="modal-body">
                                    <img src="images/evapic.png" class="img-fluid">
                                </div><!-- Modal body-->
                                <div class="modal-footer">
                                    <span class="">Date: june-22-21 12:32</span>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                        Close</button>
                                </div> <!-- Modal Header-->
                            </div>
                            <!--Modal content-->
                        </div>
                        <!--Modal Dialog-->
                    </div> <!-- Image Modal  End-->


                    <!-- Image Modal dd-3 Start-->
                    <div class="modal text-dark fade" id="dd-2">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">@Ilunga Gisa</h4>
                                    <button class="close btn" data-dismiss="modal">&times;</button>
                                </div> <!-- Modal Header-->
                                <div class="modal-body">
                                    <img src="images/pzl.jpeg" class="img-fluid">
                                </div><!-- Modal body-->
                                <div class="modal-footer">
                                    <span class="">Date: june-22-21 12:32</span>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                                        Close</button>
                                </div> <!-- Modal Header-->
                            </div>
                            <!--Modal content-->
                        </div>
                        <!--Modal Dialog-->
                    </div> <!-- Image Modal  End-->

                </div>
                <!-- Image Modal End-->

            </section><!-- Chat Description   End ---------------------------------------->




        </section><!-- Row Section End Section End ---------------------------------------->
    </section><!-- Container Section  End ---------------------------------------->
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>

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