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
    <div class="nav h-auto bg-grizzly-red sticky top-0 z-50">
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

    <div class="flex flex-col space-y-4">
        <!--section 1-->
        <div class="fade h-screen flex flex-col items-center justify-center p-4" id="toFade">
            <div>
                <h2 class="text-center p-4 h-1/2">
                    You’re about to embark on an <br> exclusive, eventually the world <br>class community.
                </h2>
            </div>
            <div>
                <button class="redBtn text-white"> YES! START NOW </button>
            </div>
        </div>

        <div class="fade h-screen flex items-center justify-center p-4">
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
            <div class="flex flex-col px-4">
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
                <div class="flex items-baseline space-x-4 mt-16 p-4">
                    <div class="btns">
                        <img class="h-32" src="img/leftBtn.svg">
                    </div>
                    <div class="carousel mt-4 flex space-x-2 items-center px-4">

                        <div class="grid grid-cols-12 gap-4">
                            <?php
                           for ($i=1; $i<4; $i++){ ?>

                            <div class="col-span-4">
                                <div class="flex space-x-2">
                                    <div class="avatar w-48">
                                        <img class="h-10" src="img/avatar.png">
                                    </div>
                                    <div class="content flex flex-col">
                                        <h5>Wade Warren</h5>
                                        <span class="small opacity-75 mb-4">@Wade Warren . 2 days ago</span>
                                        <small>Sociis amet etiam elementum amet enim ac tristique a. Nullam
                                            tempus
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
                        <img class="h-32" src="img/rightBtn.svg">
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <div class="h-screen flex justify-center p-4 px-32 relative space-x-8">
            <img class="h-60 absolute right-0 top-0" src="img/ripple.png">
            <div class="w-1/2 space-y-8 break-auto">
                <h2>Outcomes</h2>
                <div class="flex items-center space-x-2">
                    <img class="h-8" src="img/bullet.svg">
                    <span class="text-20"> AchieveLongTermMonstrousGoals </span>
                </div>
                <div class="flex items-center space-x-2 break-all">
                    <img class="h-8" src="img/bullet.svg">
                    <span class="text-20"> PeaceofMindKnowingYouHaveCriticalAdvantageover99.999%ofStudents</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img class="h-8" src="img/bullet.svg">
                    <span class="text-20"> Free Time to Pursue Passions/Hobbies/ HighSchool</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img class="h-8" src="img/bullet.svg">
                    <span class="text-20"> Developer Insane Laser Focus</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img class="h-8" src="img/bullet.svg">
                    <span class="text-20"> Permanent Change in Thinking and Life Skills</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img class="h-8" src="img/bullet.svg">
                    <span class="text-20"> Eliminate Stress and Conquer Mental Health</span>
                </div>

            </div>
            <div class="w-1/2 flex flex-col z-20 ">
                <img class="ml-16 w-96 rounded-sm" src="img/outcomesImage.png">
                <div class="flex">
                    <img class="h-16" src="img/quote.svg">
                    <div class="flex flex-col items-baseline space-y-4">
                        <span class="text-20 opacity-50 mt-8">Aliquam quis tincidunt lectus, vitae aliquam metus. Donec
                            congue
                            euismod orci non varius. Ut convallis a mi in suscipit</span>
                        <img class="h-1 items-end" src="img/lines.svg">
                    </div>

                </div>

            </div>
        </div>
        <!---->
        <div class="h-screen flex flex-col p-4 px-16 space-x-8 space-y-32">
            <div class="text-center">
                <h2><span>Your Grizzly Elite</span><span class="text-orange"> Training Includes</span></h2>
            </div>
            <div class="flex justify-center">
                <div class="w-1/2 flex flex-col z-20 ">
                    <img class="mr-16 w-full rounded-sm" src="img/mock.png">
                </div>
                <div class="w-1/2 space-y-8 break-auto">
                    <div class="flex items-center space-x-2">
                        <img class="h-8" src="img/bullet.svg">
                        <span class="text-20"> Lifetime access with no additional fees or subscriptions </span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="h-8" src="img/bullet.svg">
                        <span class="text-20">12 high-octane video training modules digitally accessible from anywhere
                            24/0/365.</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="h-8" src="img/bullet.svg">
                        <span class="text-20">Perfectly paced with one module, under 90 minutes, delivered per week,
                            consumed on your schedule.</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="h-8" src="img/bullet.svg">
                        <span class="text-20"> Just enough time in between each module to see
                            concrete results before the next.</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="h-8" src="img/bullet.svg">
                        <span class="text-20">Surprise bonus gifts and video mentoring sessions.</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="h-8" src="img/bullet.svg">
                        <span class="text-20"> Complete follow-along progressive downloadable manuals,
                            worksheets, diagnostics, assessments, and action guides.</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <img class="h-8" src="img/bullet.svg">
                        <span class="text-20">Proprietary tools, work methods, and operating systems.</span>
                    </div>

                </div>
            </div>
        </div>
</body>

<script src="script.js"></script>

</html>