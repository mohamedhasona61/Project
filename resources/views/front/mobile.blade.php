<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsem -->
    <link rel="stylesheet" href="{{asset('front/css/all.min.css')}}">
    <!-- Bootstrab  -->
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css.map')}}">
    <!-- ***************** -->
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/mdb.min.css.map')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <title>Mobile Development</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="{{url('/')}}">
                <p>Researcher Guide</p>
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="{{url('web')}}"> web devolbment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('data')}}">Data since </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('mobile')}}">Mobile App Development</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.udemy.com/courses/development/game-development/">Game Development</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.udemy.com/courses/development/software-engineering/">Software engineering</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('bookshop')}}">bookshop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('aboutus')}}">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('contactus')}}">Contact us</a>
                </li>
                </ul>
                <!-- Left links -->
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-link px-3 me-2">
                        <a href="{{url('login')}}"> Login</a>
                    </button>
                    <button type="button" class="btn btn-primary me-3">
                        <a style="color:white" href="{{url('register')}}">Register</a>
                    </button>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <section style="margin-top: 30px;" class="container-fluid mobile">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div style="margin: auto;">
                        <img src="{{asset('front/img/Future-learn (1).jpg')}}" alt="">
                    </div>
                    <div class="card-body">
                        <a
                            href="https://www.futurelearn.com/courses/creating-a-great-user-experience-for-mobile-apps?utm_source=rakutenmarketing&utm_medium=affiliate&utm_campaign=fl_3791256:Online+Course+Report&utm_content=10:1&utm_term=USNetwork&ranMID=44015&ranEAID=XMuWjHlUEYs&ranSiteID=XMuWjHlUEYs-WsmqMFWKsoqJp95bb2mVUQ">Creating
                            a Great User Experience for Mobile Apps</a>
                        <p class="card-text">Developing an app is one thing, but ensuring it meets the needs of its
                            users is quite another, and that’s what this excellent course on the Future Learn
                            platform is all about. Developed by the University of Leeds Institute of Coding, it’s
                            designed for those who already have some digital skills and want to improve upon them.
                            The learning objectives are straightforward and include:
                            <li> Identifying smartphone features that influence app design </li>
                            <li> Discussing the stages and roles needed to create a mobile app </li>
                            <li> Designing screens and architecture using student’s own smartphones, pen, and paper
                            </li>
                            <li> Learning how visual and interactive features create a good user experience </li>
                            <li> Using apps to solve simple problems </li>
                            <li> Producing and testing clickable prototypes </li>

                            The best free online app development course is taught over two weeks by designer and
                            technologist Tom Armitage. The University of Leeds is offering students a free digital
                            upgrade, which makes this the top offering on our list of free online app development
                            courses. The upgrade means that students will have unlimited access to all articles,
                            videos, quizzes, tests, and peer reviews for the course. Upon successful completion, a
                            free PDF certificate of achievement will be awarded.
                        </p>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Details
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample1" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Pros & Cons
                            </a>

                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <li> Cost: Free </li>
                                <li> Certificate: Yes </li>
                                <li> Time to Complete: Two weeks </li>
                                <li> Curriculum: Introductory to Intermediate </li>
                                <li> User Experience: Excellent </li>
                                <li> Quality of Instruction: Excellent </li>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body">
                                <p> Pros: </p>
                                <li> Free digital upgrade </li>
                                <li> Certification at no charge</li>
                                <li> Taught by an industry expert </li>
                                <p> Cons: </p>
                                <li>None </li>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div style="margin: auto;">
                        <img src="{{asset('front/img/google-flutter-logo-768x384.png')}}" alt="">
                    </div>
                    <div class="card-body">
                        <a href="https://www.appbrewery.co/p/intro-to-flutter"> Introduction to Flutter Development with
                            Dart</a>
                        <p class="card-text">This free online app development course features the first 11 hours of the
                            Complete Flutter Development Bootcamp and is designed to teach students everything they need
                            to know to get started with Flutter. Students will learn how to build high-quality iOS and
                            Android Apps using Dart and will actually build eight complete apps to add to their
                            portfolios.

                            The online course for app development features step-by-step video tutorials that are both
                            engaging and entertaining, and the course is entirely free. As long as you successfully
                            complete at least 90 percent of the lessons, App Brewery will award you with a free
                            downloadable certificate.
                        </p>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Details
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Pros & Cons
                            </a>

                        </p>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body">
                                <li> Cost: Free </li>
                                <li> Certificate: Yes </li>
                                <li> Time to Complete: 11 hours </li>
                                <li> Curriculum: Introductory </li>
                                <li> User Experience: Excellent </li>
                                <li> Quality of Instruction: Excellent </li>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample3">
                            <div class="card card-body">
                                <p> Pros: </p>
                                <li> Lifetime access </li>
                                <li> Suitable for those who are looking for a basic overview of Flutter</li>
                                <li> Free certification </li>
                                <p> Cons: </p>
                                <li>Specific to the Flutter app development platform </li>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div style="margin: auto;">
                        <img src="{{asset('front/img/edX_Logo_R_Black.png')}}" alt="">
                    </div>
                    <div class="card-body">
                        <a
                            href="https://www.edx.org/course/build-your-very-first-ios-app?source=aw&awc=6798_1647302591_2356aa6c6858e3303d5769537c5142bd&utm_source=aw&utm_medium=affiliate_partner&utm_content=text-link&utm_term=787739_Best+Choice+Media">Build
                            Your Very First iOS App</a>
                        <p class="card-text">This Curtin University Course serves as a complete course on creating an
                            iOS
                            app from scratch using Swift version 4. No prior programming experience is required and it
                            is
                            designed for complete beginners. There are seven comprehensive lessons in all, which can be
                            completed in about eight weeks working between 8 to 10 hours each week.

                            By the end of the online app development course, students will have a solid understanding
                            of:
                            <li> Using the Swift programming language </li>
                            <li> Apple developer tools including XCode, Interface Builder, and Documentation Browser
                            </li>
                            <li> The basics of coding and app development
                            </li>
                            <li> How to converse with iOS developers using industry jargon </li>
                            Participants will also learn how to design, develop, and build a simple iOS app and will
                            even be
                            taught the process to submit it to the App Store.
                            This top-rated app development course is free to take in audit mode. Students who want a
                            verification certificate can pay an optional $149, which helps fund free education on a
                            global
                            scale.
                        </p>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Details
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample5" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Pros & Cons
                            </a>

                        </p>
                        <div class="collapse" id="collapseExample4">
                            <div class="card card-body">
                                <li> Cost: Free </li>
                                <li> Certificate: Yes, with a fee </li>
                                <li> Time to Complete: 8 weeks </li>
                                <li> Curriculum: Introductory </li>
                                <li> User Experience: Excellent </li>
                                <li> Quality of Instruction: Excellent </li>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample5">
                            <div class="card card-body">
                                <p> Pros: </p>
                                <li>Completed by over 27,000 students </li>
                                <li>Taught by a senior academic and software engineer</li>
                                <li> Part of a professional certificate in Mobile App Development with Swift </li>
                                <p> Cons: </p>
                                <li>Certification requires a fee </li>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card h-100 ">
                    <div style="margin: auto;">
                        <img src="{{asset('front/img/coursera-logo-full-rgb-768x248.png')}}" alt="">
                    </div>
                    <div class="card-body">
                        <a
                            href="https://www.coursera.org/learn/app-inventor-android?ranMID=40328&ranEAID=XMuWjHlUEYs&ranSiteID=XMuWjHlUEYs-3EBWtc0bsxXC4xwYx7CYrw&siteID=XMuWjHlUEYs-3EBWtc0bsxXC4xwYx7CYrw&utm_content=10&utm_medium=partners&utm_source=linkshare&utm_campaign=XMuWjHlUEYs">Developing
                            Android Apps with App Inventor</a>
                        <p class="card-text">This MOOC from the Hong Kong University of Science and Technology is an
                            excellent choice for beginners interested in using App Inventor. It is taught by expert
                            lecturer
                            Kenneth W T Leung and has been taken by nearly 23,000 students. The free online app
                            development
                            course features 43 video lectures, 75 readings, and 49 quizzes, making it one of the most
                            complete offerings on our list. Students will learn:

                            <li> Introduction to MIT App Inventor</li>
                            <li> Application Coding</li>
                            <li> Programming Basics and Dialog </li>
                            <li> Alarm Clock Application</li>
                            <li> Drawing</li>
                            <li> Filing</li>
                            <li> Device Location</li>
                            <li> Web Browsing </li>
                            The course can be taken in audit mode for free and will take around 25 hours to complete. It
                            is
                            self-paced, with the option to sign up for paid components of the class for an additional
                            fee.
                        </p>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample6" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Details
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample7" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Pros & Cons
                            </a>

                        </p>
                        <div class="collapse" id="collapseExample6">
                            <div class="card card-body">
                                <li> Cost: Free </li>
                                <li> Certificate: Yes, with a fee </li>
                                <li> Time to Complete: 25 hours</li>
                                <li> Curriculum: Introductory </li>
                                <li> User Experience: Excellent </li>
                                <li> Quality of Instruction: Excellent </li>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample7">
                            <div class="card card-body">
                                <p> Pros: </p>
                                <li>Go at your own pace</li>
                                <li>Perfect for those who want a solid foundation in App Inventor</li>
                                <li> Highly rated by over 88% of previous students </li>
                                <p> Cons: </p>
                                <li>Certification is part of the paid program of Coursera</li>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card h-100 ">
                    <div style="margin: auto;">
                        <img src="{{asset('front/img/alison-logo-primary.jpg')}}" alt="">
                    </div>
                    <div class="card-body">
                        <a href="https://alison.com/course/fundamentals-of-computers-and-code-in-ios">iPhone App
                            Development</a>
                        <p class="card-text">This free online course in app development is hosted on Alison and offered
                            through Stanford University. Taken by over 44,000 students, it’s designed to introduce users
                            to
                            all the levels of the Mac OS X including:

                            <li> Core OS Level</li>
                            <li> Core Services Level</li>
                            <li> Media Level</li>
                            <li> Cocoa Touch Level </li>
                            Students will learn how to use Objective-C and will also be shown how to use the built-in
                            accelerometer to develop apps. Those who complete the final assessment with a score of 80 or
                            better can acquire a learner achievement verification at no cost, while students who opt for
                            certification can purchase one at the end of the course in the Alison shop.
                        </p>
                        <p>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample8" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Details
                            </a>
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample9" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                Pros & Cons
                            </a>

                        </p>
                        <div class="collapse" id="collapseExample8">
                            <div class="card card-body">
                                <li> Cost: Free </li>
                                <li> Certificate: Yes, with a fee </li>
                                <li> Time to Complete: 10-15 hours</li>
                                <li> Curriculum: Introductory </li>
                                <li> User Experience: Good </li>
                                <li> Quality of Instruction: Good </li>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample9">
                            <div class="card card-body">
                                <p> Pros: </p>
                                <li>Start whenever and wherever you want</li>
                                <li>Easy signup through Facebook, Google, or email</li>
                                <li> Verified learner records are free </li>
                                <p> Cons: </p>
                                <li>Rated 4.7 stars but no written reviews</li>

                            </div>
                        </div>


                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="card h-100 ">
                    <div style="margin: auto;">
                        <img src="{{asset('front/img/udemy-logo.png')}}" alt="">
                    </div>
                    <div class="card-body">
                    <a href="https://www.udemy.com/course/iosdevelopment/">This Is How You Make iPhone Apps-iOS Development Course</a>
                            <p class="card-text">This four-and-a-half hour course on Udemy is a complete iOS development
                                tutorial that will teach students the whole process of creating apps like those found in
                                the
                                app
                                store. Taught by the APP Dojo, the short course has been taken by over 140,000 students
                                and
                                boasts a 4.5-star rating. There are nine sections and 23 brief lectures.


                                <p> No prior coding experience is necessary, as students will learn to code in Apple’s
                                    Objective-C
                                    programming language during the third lesson. Once you have the hang of it, the
                                    instructor
                                    will
                                    continue to walk you through each step, through product creation and testing. At the
                                    end of
                                    the
                                    free online app development course, you will observe as the APP Dojo submits a final
                                    app to
                                    the
                                    App Store. </p>

                            </p>
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample10"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Details
                                </a>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample11"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Pros & Cons
                                </a>

                            </p>
                            <div class="collapse" id="collapseExample10">
                                <div class="card card-body">
                                    <li> Cost: Free </li>
                                    <li> Certificate: No </li>
                                    <li> Time to Complete: Four hours and thirty minutes</li>
                                    <li> Curriculum: Introductory </li>
                                    <li> User Experience: Good </li>
                                    <li> Quality of Instruction: Good </li>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample11">
                                <div class="card card-body">
                                    <p> Pros: </p>
                                    <li>Learn to create an app in an afternoon</li>
                                    <li>Highly reviewed by students who have completed the course</li>
                                    <li> Excellent introduction for those who want to get their feet wet </li>
                                    <p> Cons: </p>
                                    <li>Certification not offered</li>

                                </div>
                            </div>


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- scrypt -->
    <script src="{{asset('front/js/all.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.bundle.min.js.map')}}"></script>
    <script src="{{asset('front/js/mdb.min.js')}}"></script>
    <script src="{{asset('front/js/mdb.min.js.map')}}"></script>
    <script src="{{asset('front/js/scrypt.js')}}"></script>
</body>

</html>