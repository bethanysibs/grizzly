<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grizzly Elite Test Task</title>
    <link rel="stylesheet" href="output.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="bg-black h-full text-white">
    <div class="nav h-auto bg-grizzly-red sticky top-0">
        <nav class="flex justify-between items-center p-2 px-8 justify-center ">
            <div>
                Exclusive Invite Joe
            </div>
            <div>
                <img class="h-10" src="img/logo.png">
            </div>
            <div class="flex space-x-2">
                <!--emoji-->
                <img class="h-6" src="img/timeIcon.png"> <span class="time"></span>
            </div>
        </nav>
    </div>

    <div class="p-4 flex flex-col space-y-4">
        <!--section 1-->
        <div class="fade h-screen flex flex-col items-center justify-center" id="toFade">
            <div>
                <h2 class="text-center p-4 h-1/2">
                    You’re about to embark on an <br> exclusive, eventually the world <br>class community.
                </h2>
            </div>
            <div>
                <button class="redBtn text-white"> YES! START NOW </button>
            </div>
        </div>

        <div class="fade h-screen flex items-center justify-center">
            <div>
                <img class="h-screen" src="img/man.png">
            </div>
            <div class="space-y-4 flex flex-col items-center">
                <h2 class="text-center">
                    Congratulations!
                </h2>
                <h3 class="text-center">
                    You’ve been accept to Grizzly Elite </h3>
                <h1 class="text-center border-b-4 border-orange">
                    March 1st
                </h1>
                <div><button class="orangeBtn text-white">START NOW </button></div>
            </div>
        </div>

        <div class="h-screen flex justify-center p-4">
            <div class="flex flex-col px-8">
                <div class="mt-16 text-center">
                    <div class="text-center justify-center flex space-x-2">

                        <?php
                    for ($i=1; $i<=5; $i++){  ?>

                        <img class="h-20" src="img/star.png">
                        <?php
                    }
                    ?>
                    </div>
                    <span class="flex text-center items-center justify-center">
                        <h2 class="text-orange"> 200+ </h2>
                        <h4>Reviews</h4>
                    </span>
                </div>
                <div class="flex items-baseline space-x-4 mt-16">
                    <div class="btns">
                        <img class="h-24" src="img/leftBtn.svg">
                    </div>
                    <div class="carousel mt-4 flex space-x-2 items-center">

                        <div class="grid grid-cols-12 gap-4">
                            <?php
                           for ($i=1; $i<4; $i++){ ?>

                            <div class="col-span-4">
                                <div class="flex space-x-2">
                                    <div class="avatar w-48">
                                        <img class="h-10" src="img/avatar.png">
                                    </div>
                                    <div class="content">
                                        <h5>Wade Warren</h5>
                                        <span class="small">@Wade Warren . 2 days ago</span>
                                        <small>Sociis amet etiam elementum amet enim ac tristique a. Nullam tempus
                                            adipiscing
                                            enim,
                                            mauris lacus tincidunt eget elit. Id ultrices.</small>
                                        <div>
                                            <div class="text-center flex space-x-2">
                                                <img class="h-4" src="img/starSmall.png">
                                                <img class="h-4" src="img/starSmall.png">
                                                <img class="h-4" src="img/starSmall.png">
                                                <img class="h-4" src="img/starSmall.png">
                                                <img class="h-4" src="img/starSmallHalf.png">
                                            </div>
                                        </div>

                                        <!---->
                                    </div>
                                </div>
                            </div>
                            <?php  }
                            ?>
                        </div>
                    </div>
                    <div class="btns">
                        <img class="h-24" src="img/rightBtn.svg">
                    </div>
                </div>
            </div>
        </div>
</body>

<script src="script.js"></script>

</html>