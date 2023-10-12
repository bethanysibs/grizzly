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
        <div class="h-100 flex flex-col p-4 px-16 space-x-8 space-y-16">
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
        <!---->
        <div class="h-100 flex flex-col px-16 p-4 pt-16 pb-32 space-x-8 space-y-16 bg-white">
            <div class="text-center">
                <h2><span class="text-black">Counselor Exclusive</span><span class="text-orange">
                        Bonuses</span></h2>
            </div>
            <div class="flex flex-col justify-center items-center px-32 space-y-8">
                <div class="box flex items-center max-w-3xl px-8 py-4 rounded-md   space-x-8">
                    <div class="w-1/4">
                        <img class="h-16" src="img/habits.png">
                    </div>
                    <div class="w-3/4">
                        <h4 class="font-bold">
                            <span class="text-orange">Ivy League</span><span class="text-black font-bold">
                                Accountability</span>
                        </h4>
                        <span class="text-20 text-black">Quis duis velit augue cum nisi volutpat. Metus nunc rutrum
                            adipiscing dui
                            pulvinar rutrum massa egestas iaculis. Mauris mauris mattis cursus</span>
                    </div>

                </div>
                <div class="box flex items-center max-w-3xl px-8 py-4 rounded-md   space-x-8">
                    <div class="w-1/4">
                        <img class="h-16" src="img/habits.png">
                    </div>
                    <div class="w-3/4">
                        <h4 class="font-bold">
                            <span class="text-orange">10 Ivy League</span><span class="text-black font-bold">
                                Full Common App</span>
                        </h4>
                        <span class="text-20 text-black">At semper dolor orci facilisis magna. Vulputate quis ut nec
                            sapien a pulvinar blandit arcu. In pharetra feugiat senectus ipsum sit id amet
                            fermentum.</span>
                    </div>

                </div>
                <div class="box flex items-center max-w-3xl px-8 py-4 rounded-md   space-x-8">
                    <div class="w-1/4">
                        <img class="h-16" src="img/habits.png">
                    </div>
                    <div class="w-3/4">
                        <h4 class="font-bold">
                            <span class="text-orange">IB/AP Math </span><span class="text-black font-bold">
                                + Physics Training + Question Bank</span>
                        </h4>
                        <span class="text-20 text-black">At semper dolor orci facilisis magna. Vulputate quis ut nec
                            sapien a pulvinar blandit arcu. In pharetra feugiat senectus ipsum sit id amet
                            fermentum.</span>
                    </div>
                </div>
                <div class="box flex items-center max-w-3xl px-8 py-4 rounded-md   space-x-8">
                    <div class="w-1/4">
                        <img class="h-16" src="img/habits.png">
                    </div>
                    <div class="w-3/4">
                        <h4 class="font-bold">
                            <span class="text-orange">Delegation</span><span class="text-black font-bold">
                                Package</span>
                        </h4>
                        <span class="text-20 text-black">Posuere nascetur ullamcorper eu eget sed at elit. Imperdiet
                            dictum velit in ullamcorper. Congue velit a eu dolor nullam eu scelerisque aliquet.
                            Consequat.</span>
                    </div>
                </div>
                <div class="box flex items-center max-w-3xl px-8 py-4 rounded-md   space-x-8">
                    <div class="w-1/4">
                        <img class="h-16" src="img/habits.png">
                    </div>
                    <div class="w-3/4">
                        <h4 class="font-bold">
                            <span class="text-orange">Tabula +</span><span class="text-black font-bold">
                                Achievement Software</span>
                        </h4>
                        <span class="text-20 text-black">Lobortis a egestas proin elit orci maecenas. Tellus auctor quam
                            sed facilisi imperdiet et cras neque. Eu diam sed duis lacus. Bibendum iaculis
                            commodo.</span>
                    </div>
                </div>
            </div>
        </div>
        <!---->

        <div class="h-100 flex flex-col p-4 px-16 space-x-8 space-y-16 items-center relative">
            <div class="sealLogo">
                <img class="w-48" src="img/sealLogo.png">
            </div>

            <div class="text-center">
                <h2><span>Why Don’t Other Educational Experts <br> <span class="text-orange">Guarantee</span> Success?
                        Well,
                        <span class="text-orange">We Can</span>. <br> And We Will.</span></h2>
            </div>
            <div class="flex justify-center items-center space-x-20">
                <div class="w-1/2 space-y-8 break-auto">
                    <div class="flex flex-col items-center space-x-2">
                        <span class="text-20"> I (Joaquin), personally guarantee your success. </span>
                        <br>
                        <span class="text-20"> Grizzly guarantees to 10 fold your goals, motivation, and productivity.
                            But talk is cheap. So, to back this up, I’m offering two separate guarantees. </span>
                    </div>
                </div>
                <div class="w-1/2 flex flex-col z-20 ">
                    <img class="mr-16 w-full rounded-sm" src="img/chair.png">
                </div>
            </div>
        </div>
        <!---->
</body>

<script src="script.js"></script>

</html>