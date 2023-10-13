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
                    You’ve been accepted to Grizzly Elite </h3>
                <h1 class="text-center border-b-4 border-orange">
                    March 1st
                </h1>
                <div><button class="orangeBtn text-white font-bold">START NOW </button></div>
            </div>
        </div>

        <div class="h-auto flex justify-center p-4 pb-32">
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
                <!--testimonials-->
                <div class="flex items-baseline space-x-4 mt-16">
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
                                        <img class="h-14" src="img/avatar.png">
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
        <div class="h-auto flex justify-center p-4 px-32 relative space-x-8 pb-32">
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
                        <span class="text-20 opacity-75 mt-8">Aliquam quis tincidunt lectus, vitae aliquam metus. Donec
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
            <div class="flex justify-center pb-32">
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
        <div class="h-100 flex flex-col px-16 p-4 pt-16 pb-32 space-x-8 space-y-16 bg-white relative">
            <img class="pick h-auto" src="img/pick.svg">
            <img class="pentagon h-auto" src="img/pentagon.svg">
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
                <img class="w-56" src="img/sealLogo.png">
            </div>

            <div class="text-center p-16">
                <h2><span>Why Don’t Other Educational Experts <span class="text-orange">Guarantee</span> Success?
                        Well,
                        <span class="text-orange">We Can</span>. <br> And We Will.</span></h2>
            </div>
            <div class="flex justify-center items-center space-x-20">
                <div class="w-1/2 space-y-8 break-auto">
                    <div class="flex flex-col space-y-2">
                        <span class="text-20">I (Joaquin), personally guarantee your success. </span>
                        <br>
                        <span class="text-20">Grizzly guarantees to 10 fold your goals, motivation, and productivity.
                            But talk is cheap. So, to back this up, I’m offering two separate guarantees. </span>
                    </div>
                </div>
                <div class="w-1/2 flex flex-col z-20 ">
                    <img class="mr-16 w-full rounded-sm" src="img/chair.png">
                </div>
            </div>
            <div class="flex space-x-8">
                <div>
                    <img class="bg-orange rounded-lg max-w-sm" src="img/check.png">
                </div>
                <div class="flex flex-col">
                    <h3 class="font-bold">30-Day Club a Grizzly Guarantee</h3>
                    <br>
                    <span class="text-20 opacity-75">
                        If after the first 30 days of training you don’t see at least a 5x return on your investment (if
                        your productivity has not increased by AT LEAST 500%) you can ‘club the grizzly’—i.e., withdraw
                        from the training, return your Grizzly Elite training books, and get 100% of your money back.
                    </span>
                    <br>
                    <span class="text-20 opacity-75">
                        I’m making such a bold guarantee because I’m extremely confident that what Grizzly Elite has to
                        offer is the real deal, and that you’ll wholeheartedly agree
                    </span>
                </div>
            </div>
            <div class="flex space-x-8">
                <div>
                    <img class="bg-orange rounded-lg max-w-sm" src="img/check.png">
                </div>
                <div class="flex flex-col">
                    <h3 class="font-bold">6-Month 10X Grizzly Domination Guarantee</h3>
                    <br>
                    <span class="text-20 opacity-75">
                        Based on our track record and utterly unfair resources, we’re so confident of your success that
                        if you are, in the worst case, not on track to achieve 10x your wow factor (with less stress)
                        and are not getting straight 4.0 grades across the board after six months of working with us
                        (given that you’ve applied each step/strategy and followed all the content), we’ll give you free
                        1:1 training until you’re on track to achieve your goals (we benefit by getting a spectacular
                        turnaround new Grizzly success story).
                    </span>
                    <br>
                    <span class="text-20 opacity-75">
                        No questions asked.
                    </span>
                    <br>
                    <span class="text-20 opacity-75">
                        We challenge you to test this guarantee. Take advantage of our insane offer! When you do, you’ll
                        realize that it’s impossible to avoid success when applying our strategies.
                    </span>
                </div>

            </div>
            <div><button class="orangeBtn text-white font-bold">Apply Now</button></div>
        </div>
        <!---->
        <div>
            <!--testimonials-->
            <div class="px-4 pb-32">
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
                                        <img class="h-12" src="img/avatar.png">
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
    </div>
    <div class="h-100 flex flex-col px-16 p-4 pt-16 pb-32 space-x-8 space-y-16 bg-white relative text-black">
        <img class="pick h-auto" src="img/pick.svg">
        <div class="text-center">
            <h2><span class="text-black">Let's Begin Your</span><span class="text-orange">
                    Training</span></h2>
        </div>
        <div class="text-black flex items-center justify-center">
            <form class="flex space-x-8">
                <input class="inputField p-1" type="text" placeholder="Name*" required>
                <input class="inputField p-1" type="email" placeholder="Email*" required>
                <input type="submit" value="JOIN NOW" class="orangeBtn text-white">
            </form>
        </div>
        <div class="flex space-x-16 items-center justify-center py-16">
            <div class="solidBox flex flex-col p-6 border-1 rounded-lg max-w-xs text-center items-center">
                <span class="text-26 font-bold">TRY FOR 30 DAYS</span>
                <h6 class="px-8 py-4">And receive LUDICROUS LEADERSHIP as an additional gift</h6>
                <h3 class="px-2 py-2 font-bold"><span class="text-orange pr-2">$5</span><span>Activation</span></h3>
                <h6 class="px-8 py-2">No commitment. Cancel anytime during 30 day open access period </h6>
                <div class="py-3"><button class="orangeBtn text-white font-bold">30 Day Free </button></div>
            </div>

            <div class="dashedBox flex flex-col p-6 border-1 rounded-lg max-w-xs text-center items-center relative">
                <span class="text-26 font-bold p-2 px-6 border-1 solidBox secondBox">JOIN TODAY</span>
                <h6 class="px-8 py-4">And receive LUDICROUS LEADERSHIP as an additional gift</h6>
                <h3 class="px-2 py-4 font-bold"><span class="text-orange pr-2">$495</span><span>Today</span></h3>
                <h6 class="px-8 py-2">Then 3 additional monthly installments of $495 </h6>
                <div class="py-3"><button class="orangeBtn text-white font-bold">Start Now </button></div>
            </div>

            <div class="solidBox flex flex-col p-6 border-1 rounded-lg max-w-xs text-center items-center">
                <span class="text-26 font-bold">JOIN TODAY</span>
                <h6 class="px-8 py-4">And receive LUDICROUS LEADERSHIP as an additional gift</h6>
                <h3 class="px-2 py-4 font-bold"><span class="text-orange pr-2">$495</span><span>Today</span></h3>
                <h6 class="px-8 py-2">Then 3 additional monthly installments of $495 </h6>
                <div class="py-3"><button class="orangeBtn text-white font-bold">Get Access </button></div>
            </div>
        </div>
    </div>
    <div class="h-100 flex flex-col px-16 p-4 pt-16 pb-32 space-x-8 space-y-16 bg-white text-black items-center">
        <h2 class="px-2 py-2 font-bold">Payment</h2>

        <div class="box flex flex-col max-w-auto p-4 space-y-4 p-8">
            <h3 class="px-2 py-2 font-bold text-left">Payment Details</h3>
            <form class="flex flex-col space-y-4">
                <div class="flex space-x-2">
                    <div class="relative">
                        <input type="text" class="w-48 pt-10 px-2 box " placeholder="card">
                        <img class="h-10 absolute card" src="img/card.png">
                    </div>
                    <div class="relative">
                        <input type="text" class="w-48 pt-10 px-2 box" placeholder="iDEAL">
                        <img class="h-8 absolute card" src="img/ideal.png">
                    </div>
                    <div class="relative">
                        <input type="text" class="w-48 pt-10 px-2 box " placeholder="KLARNA ">
                        <img class="h-8 absolute card" src="img/klarna.png">
                    </div>

                    <div class="relative">
                        <input type="text" class="w-4 pt-10 px-2 box">
                        <div class="flex flex-col space-y-2 justify-between absolute card">
                            <img class="h-2 mt-2" src="img/ellipsis.svg">
                            <img class="h-2" src="img/ellipsis.svg">
                            <img class="h-2" src="img/ellipsis.svg">
                        </div>
                    </div>

                </div>


                <div class="flex flex-col space-y-2 relative w-full">
                    <label>Card Number</label>
                    <input type="text" class="w-full py-5 px-2 box" placeholder="4512 4584 1423 4785 ">
                    <div class="flex space-x-2 absolute creditCard">
                        <img class="h-8  card" src="img/visa.png">
                        <img class="h-8  card" src="img/Mastercard.png">
                        <img class="h-8  card" src="img/AMEX.png">
                        <img class="h-8  card" src="img/discover.svg">
                    </div>
                </div>
                <div class="flex space-x-2">
                    <div class="flex flex-col space-y-2 w-1/2">
                        <label>Expiration Date</label>
                        <input type="text" class="w-full py-5 px-2 box " placeholder="MM/YY">
                    </div>
                    <div class="flex flex-col space-y-2 relative w-1/2">
                        <label>Security Code</label>
                        <input type="text" class="w-full py-5 px-2 box" placeholder="CVV">
                        <img class="h-10 absolute creditCard" src="img/card.png">
                    </div>
                </div>
                <div class="flex py-4">
                    <button class="orangeBtn text-white font-bold">PAY NOW </button>
                </div>

            </form>

        </div>

    </div>
    <!---->

    <div class="h-100 flex flex-col p-4 px-16 pt-16 pb-16 space-x-8 space-y-16 items-center">
        <div class="text-center p-16">
            <h2><span>Join an Elite </span> <span class="text-orange">Community</span><span>of Winners</span></h2>
        </div>
        <div class="flex justify-center items-center space-x-20">
            <div class="w-1/2 flex flex-col z-20 relative">
                <img class="mr-16 w-full rounded-sm " src="img/face1.png">
                <img class="mr-16 h-24 rounded-sm absolute playButton" src="img/playOrange.png">
            </div>
            <div class="w-1/2 space-y-8 break-auto">
                <div class="flex space-x-2">
                    <div class="avatar w-48">
                        <img class="h-14" src="img/sam.png">
                    </div>
                    <div class="content flex flex-col space-y-2">
                        <h5>Sam Purcell</h5>
                        <span class="small opacity-50 mb-4">Grade 11 Student</span>
                        <div class="text-center flex space-x-2">
                            <img class="h-4" src="img/starSmall.png">
                            <img class="h-4" src="img/starSmall.png">
                            <img class="h-4" src="img/starSmall.png">
                            <img class="h-4" src="img/starSmall.png">
                            <img class="h-4" src="img/starSmallHalf.png">
                        </div>
                        <small>"Grizzly Elite made me realize that I had this huge chasm of untapped potential. It was
                            not just a minor improvement but a complete change of how I thought and performed. Grizzly
                            Elite taught me how to differentiate what actually gives me the best results to succeed in
                            my future.
                            As an end result, I overachieved 5,000 times my initial goal with Grizzly Elite."</small>



                        <!---->
                    </div>
                </div>
            </div>

        </div>

        <div class="flex justify-center items-center space-x-20">
            <div class="w-1/2 space-y-8 break-auto">
                <div class="flex space-x-2">
                    <div class="avatar w-48">
                        <img class="h-14" src="img/nash.png">
                    </div>
                    <div class="content flex flex-col space-y-2">
                        <h5>Nahshon Weissberg</h5>
                        <span class="small opacity-50 mb-4">Grade 10 Student</span>
                        <div class="text-center flex space-x-2">
                            <img class="h-4" src="img/starSmall.png">
                            <img class="h-4" src="img/starSmall.png">
                            <img class="h-4" src="img/starSmall.png">
                            <img class="h-4" src="img/starSmall.png">
                            <img class="h-4" src="img/starSmallHalf.png">
                        </div>
                        <small>"Participating in Joaquin Revello's Grizzly Elite program is the best decision I have
                            ever made.
                            In just the first couple of sessions with Joaquin, I've been able to increase my
                            productivity 10 fold. I know what I'm getting is legit, and everything he gives is value. In
                            fact, i'd go as far as to say that every session with him is worth more than the price of
                            the entire course itself! The way I work now, school has basically become a side
                            project.""</small>
                        <!---->
                    </div>
                </div>
            </div>
            <div class="w-1/2 flex flex-col z-20 relative">
                <img class="mr-16 w-full rounded-sm " src="img/nashVid.png">
                <img class="mr-16 h-24 rounded-sm absolute playButton" src="img/playRed.svg">
            </div>
        </div>

        <div class="flex justify-center items-center space-x-20">
            <div class="w-1/2 space-y-8 break-auto px-8">
                <div class="flex space-x-2">
                    <div class="avatar w-48">
                        <img class="h-14" src="img/face2.png">
                    </div>
                    <div class="content flex flex-col space-y-2">
                        <span class="text-16 font-bold">"Joaquin is an inspiration and has helped me with my studies. I
                            feel more
                            productive
                            overall."</span>
                        <span class="small opacity-50 mb-4">Anderson Putra Irawan - Grade 11 Student</span>
                    </div>
                </div>
            </div>
            <div class="w-1/2 space-y-8 break-auto px-8">
                <div class="flex space-x-2">
                    <div class="avatar w-48">
                        <img class="h-14" src="img/face3.png">
                    </div>
                    <div class="content flex flex-col space-y-2">
                        <span class="text-16 font-bold">"Grizzly Elite makes great content which helped me a lot in
                            studying. Would absolutely recommend Joaquin as he gives great useful advice."/span>
                            <span class="small opacity-50 mb-4">Shunsuke Tsutsui - Grade 10 Student</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-100 flex flex-col p-4 pb-32 space-x-8 space-y-16 items-center text-white">
        <div class="text-center p-16 flex flex-col">
            <span class="text-26">Gloria Mariwa</span>
            <span class="text-16 opacity-50">Grade 11 Student</span>
            <br>
            <span class="text-16">
                "Joaquin really helped me a lot! My goal was to succeed in the WSC academic competition. In my first
                year of the competition, I left the regional round ashamed of barely qualifying for the global rounds.
                This was before I found Joaquin's [productivity] training and resources.
                <br><br>
                The next year I took part in the competition once again and, using Joaquin's resources and having his
                support, I managed to get 10 gold medals [10X results]: holding the record of most medals received
                during the competition in my school. I remember leaving the competition with tons of pride after the
                positive change I made in a year's time with help from Joaquin! Till today I'm proud of my achievement
                and I thank Joaquin for all his help!"
            </span>

        </div>
        <!---->

        <div class="h-100 flex flex-col p-4 px-16 space-x-8 space-y-16 items-center">

            <div class="text-center p-16">
                <h2><span>What other</span> <span class="text-orange">Counselors</span><span> Say about this
                        Opportunity</span></h2>
            </div>
            <div class="flex justify-center items-center space-x-20">
                <div class="w-1/2 flex flex-col z-20 ">
                    <img class="mr-16 w-full rounded-sm" src="img/bibi.png">
                </div>
                <div class="w-1/2 space-y-8 break-auto">
                    <div class="flex flex-col space-y-2">
                        <h3 class="font-bold">Meet Bibi</h3>
                        <span class="text-16">At my request, Joaquin Revello, hosted a virtual presentation for my
                            current students in January of 2022. He is a wonderful results-oriented public speaker and
                            hearing his tips and personal experiences, which eventually led to his success in gaining
                            admission to his top choice university, were eye-opening for my students. These included
                            novel frameworks, strategies, and concepts.</span>
                        <br>
                        <span class="text-16">In any given year, I work with a handful of students targeting elite
                            institutions, including Ivy League universities. While ambitious, I still felt some were not
                            fully living up to their potential. After Joaquin’s presentation, the change in the mindset
                            and attitude of the students who attended his event was evident in their progress. The
                            feedback I received from parents and students has been extraordinarily positive. The
                            difference he has made is evidence of his genuine interest in the power of productivity and
                            how modifications in attitude and work ethic can change lives. I wholeheartedly endorse
                            Joaquin, knowing the value that he brings to the young people he sets out to inspire.
                        </span>
                    </div>
                </div>
            </div>

        </div>
        <!--testimonials-->
        <div class="flex items-baseline space-x-4 mt-16">
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
                                <img class="h-14" src="img/avatar.png">
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
    <div class="h-100 flex flex-col p-4 px-16 pt-16 pb-16 space-x-8 space-y-16 items-center">
        <div class="text-center p-16">
            <h2><span>Your Student's Parents Will</span> <span class="text-orange">Thank You!</span>
        </div>
        <div class="flex justify-center items-center space-x-20">
            <div class="w-1/2 flex flex-col z-20 relative">
                <img class="mr-16 w-full rounded-sm " src="img/chinese.png">
                <img class="mr-16 h-24 rounded-sm absolute playButton" src="img/playRed.svg">
            </div>
            <div class="w-1/2 space-y-8 break-auto">
                <div class="flex space-x-2">
                    <div class="content flex flex-col space-y-2 items-baseline">
                        <img class=" h-10 rounded-sm " src="img/quote.svg">
                        <h4 class="font-bold">There’s now a fire in them. Their eyes are sparkling.</h4>

                        <small>My name is Mye, and I am a mother of four. My kids are now happy. Like truly joyful. As
                            high schoolers! You don’t see that anywhere. They just transformed into different human
                            beings in just a few weeks. My husband even noticed the change and wondered what had
                            happened to them. The Grizzly Elite program has, undoubtedly, been the best decision we’ve
                            ever made. I now go to sleep in peace as I know they are in good hands.</small>



                        <!---->
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="h-100 flex flex-col p-4 px-16 pt-16 pb-32 space-x-8 space-y-16 items-center bg-white text-black">
        <div class="text-center p-32">
            <h2><span>30 Day Access To The OFA Challenge </span> <span class="text-orange">Facebook Group</span></h2>
        </div>
        <div class="flex justify-center items-center space-x-20">
            <div class="w-1/2 flex flex-col z-20 relative">
                <img class="mr-16 w-full rounded-sm " src="img/video3.png">
                <img class="mr-16 h-24 rounded-sm absolute playButton" src="img/playRed.svg">
            </div>
            <div class="w-1/2 space-y-8 break-auto">
                <div class="flex space-x-2">
                    <div class="content flex flex-col space-y-2 items-baseline">
                        <!-- <img class=" h-10 rounded-sm " src="img/quote.svg"> -->
                        <span class="text-20">Tincidunt lectus amet scelerisque sollicitudin duis. Metus vel semper
                            risus volutpat
                            dolor turpis. Amet tortor arcu duis nec scelerisque enim vitae vitae. Porttitor risus enim
                            malesuada.</span>
                        <div class="flex">
                            <img class=" h-6 rounded-sm " src="img/diamond.svg">

                            <span class="text-20">A pellentesque ipsum mi a volutpat felis. Libero ultricies fringilla
                                ut leo risus non
                                morbi. Ridiculus pretium magna.</span>
                        </div>
                        <div class="flex">
                            <img class=" h-6 rounded-sm " src="img/diamond.svg">

                            <span class="text-20">A pellentesque ipsum mi a volutpat felis. Libero ultricies fringilla
                                ut leo risus non
                                morbi. Ridiculus pretium magna.</span>
                        </div>
                        <span class="text-20">Tincidunt lectus amet scelerisque sollicitudin duis. Metus vel semper
                            risus volutpat
                            dolor turpis. Amet tortor arcu duis nec scelerisque enim vitae vitae. Porttitor risus enim
                            malesuada.</span>
                        <!---->
                    </div>

                </div>
            </div>

        </div>
        <!---->
        <div class="flex flex-col justify-center items-center p-4 h-auto w-full">
            <div class="text-center p-16">
                <h2><span>Frequently Asked</span> <span class="text-orange">Questions</span>
            </div>
            <div class="bg-white w-3/4">
                <details class="box m-2 p-2">
                    <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none">Integer interdum
                        orci nulla at varius</summary>
                    <p class="pt-1 pb-3 px-4">Sagittis cursus tempus arcu interdum lacinia enim elit adipiscing.
                        Praesent mattis aliquam id leo id. Eu tempus tincidunt et iaculis. Odio morbi quis congue..</p>
                </details>

                <details class="box m-2 p-2">
                    <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none">Integer interdum
                        orci nulla at varius</summary>
                    <p class="pt-1 pb-3 px-4">Sagittis cursus tempus arcu interdum lacinia enim elit adipiscing.
                        Praesent mattis aliquam id leo id. Eu tempus tincidunt et iaculis. Odio morbi quis congue..</p>
                </details>

                <details class="box m-2 p-2">
                    <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none">Integer interdum
                        orci nulla at varius</summary>
                    <p class="pt-1 pb-3 px-4">Sagittis cursus tempus arcu interdum lacinia enim elit adipiscing.
                        Praesent mattis aliquam id leo id. Eu tempus tincidunt et iaculis. Odio morbi quis congue..</p>
                </details>

                <details class="box m-2 p-2">
                    <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none">Integer interdum
                        orci nulla at varius</summary>
                    <p class="pt-1 pb-3 px-4">Sagittis cursus tempus arcu interdum lacinia enim elit adipiscing.
                        Praesent mattis aliquam id leo id. Eu tempus tincidunt et iaculis. Odio morbi quis congue..</p>
                </details>

                <details class="box m-2 p-2">
                    <summary class="question py-3 px-4 cursor-pointer select-none w-full outline-none">Integer interdum
                        orci nulla at varius</summary>
                    <p class="pt-1 pb-3 px-4">Sagittis cursus tempus arcu interdum lacinia enim elit adipiscing.
                        Praesent mattis aliquam id leo id. Eu tempus tincidunt et iaculis. Odio morbi quis congue..</p>
                </details>

            </div>
        </div>
    </div>
    <!--footer-->
    <div class="h-100 flex flex-col relative">
        <img class="absolute curve w-full" src="img/curve.png">
        <img src="img/footer.png">
    </div>



</body>

<script src=" script.js"></script>

</html>