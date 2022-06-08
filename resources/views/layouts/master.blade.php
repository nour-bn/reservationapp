<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.head')
</head>
<body>
@include('layouts.main-navbar')
<div class="container">
    <!-- nav bar-->

    <!--section1-->
    @include('layouts.main-home')

    <!-- section 2 salle TD-->
    <section class="std" id="salle">

        <!-- détailes de salle 1-->
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 01</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                            <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 02</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 03</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 04</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 05</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 06</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 07</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 08</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 09</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 10</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 11</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 12</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 13</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 14</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 15</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 16</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 17</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 18</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 19</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 20</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 21</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 22</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 23</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 24</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 25</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 26</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 27</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 29</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 30</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 31</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 32</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 34</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 35</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 36</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 37</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone1" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 38</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone2" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 39</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STD <br> 40</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone4" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                         <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>                 -->
    </section>

    <section class="stp" id="stp">
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>STP <br> 01</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                            <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- détailes d'Amphi-->

    <section class="amphi" id="amphi">
        <div class="box-container">
            <div class="box">
                <div class="salle-c1">
                    <div class="salle-c2">
                        <div class="stdnum">
                            <h1>Anphi <br> 01</BR></h1>
                        </div>
                    </div>
                </div>
                <div>
                    <h6 class="text">8H30 - 10H30</h6>
                    <a class="buttone1" href=""></a>
                </div>
                <div>
                    <h6 class="text">10H30 - 12H30</h6>
                    <a class="buttone2" href=""></a>
                </div>


                <div>
                    <h6 class="text">13H30 - 15H30</h6>
                    <a class="buttone4" href=""></a>
                </div>
                <div>
                    <a class="botn" href="#fent">More Details</a>
                    <div id="fent" class="modal">
                        <div class="content">
                            <h1>Hello</h1>
                            <p>Bienvenue sur la fenétre modale!</p>
                            <a href="#" class="close">&times;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Section d'Amphi-->
    <!-- <section class="Amphi" id="Amphi"> -->
    <!-- détailes d'Amphi 1-->
    <!-- <div class="box-container">
        <div class="box">
            <span class="circl"><span class="circ"><p>Amphi</p><p>1</p></span></span>
            <div>
                <h6 class="s1">S01</h6>
                <a class="buttone1" href=""></a>
            </div>
            <div>
                <h6 class="s2">S02</h6>
                <a class="buttone2" href=""></a>
            </div>

             <div>
                <h6 class="s2">S03</h6>
                <a class="buttone3" href=""></a>
            </div>
            <div>
                <h6 class="s2">S04</h6>
                <a class="buttone4" href=""></a>
            </div>
            <div>
                <a class="botn" href=""> Bock & More Details</a>
            </div>
        </div>
    </div>  -->
    <!-- détailes d'Amphi 2-->
    <!-- <div class="box-container">
        <div class="box">
            <span class="circl"><span class="circ"><p>Amphi</p><p>2</p></span></span>
            <div>
                <h6 class="s1">S01</h6>
                <a class="buttone1" href=""></a>
            </div>
            <div>
                <h6 class="s2">S02</h6>
                <a class="buttone2" href=""></a>
            </div>

             <div>
                <h6 class="s2">S03</h6>
                <a class="buttone3" href=""></a>
            </div>
            <div>
                <h6 class="s2">S04</h6>
                <a class="buttone4" href=""></a>
            </div>
            <div>
                <a class="botn" href=""> Bock & More Details</a>
            </div>
        </div>
    </div>  -->
    <!-- </section> -->
    <!-- détailes de salle TP-->
    <!-- <section class="STP" id="STP"> -->
    <!-- détailes de salle 1-->
    <!-- <div class="box-container">
        <div class="box">
            <span class="circle"><span class="circl"><p>STP</p><p>01</p></span></span>
            <div>
                <h6 class="s1">S01</h6>
                <a class="buttone1" href=""></a>
            </div>
            <div>
                <h6 class="s2">S02</h6>
                <a class="buttone2" href=""></a>
            </div>

             <div>
                <h6 class="s2">S03</h6>
                <a class="buttone3" href=""></a>
            </div>
            <div>
                <h6 class="s2">S04</h6>
                <a class="buttone4" href=""></a>
            </div>
            <div>
                <a class="botn" href=""> Bock & More Details</a>
            </div>
        </div>
    </div>  -->
    <!-- détailes de salle 2-->
    <!-- <div class="box-container">
        <div class="box">
            <span class="circle"><span class="circl"><p>STP</p><p>02</p></span></span>
            <div>
                <h6 class="s1">S01</h6>
                <a class="buttone1" href=""></a>
            </div>
            <div>
                <h6 class="s2">S02</h6>
                <a class="buttone2" href=""></a>
            </div>

             <div>
                <h6 class="s2">S03</h6>
                <a class="buttone3" href=""></a>
            </div>
            <div>
                <h6 class="s2">S04</h6>
                <a class="buttone4" href=""></a>
            </div>
            <div>
                <a class="botn" href=""> Bock & More Details</a>
            </div>
        </div>
    </div>  -->
    <!-- </section> -->
    <!-- footer -->

</div>
@include('layouts.footer')
</body>
</html>
