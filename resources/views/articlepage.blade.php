@extends('navbar.dashboardleftbar')

@section('content')
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
        <div class="text-center bg-light p-4">
            <h2>Articles on CyberAttacks</h2>

        </div>
        <br><br>

        <div class="mb-4" style="text-align: center;">List of available articles: </h2>
            </p>
            <!-- Box with text in the middle for overview
            <div class="text-center bg-light p-4">
                <p>la pariatur. Excepteur sint occa</p>
                <br><br>
                <div class="text-center bg-light p-4">
                    <p>diwjdkj</p>
                </div>
            </div>-->
        </div>
        <div class="container">
            <a href="https://ieeexplore.ieee.org/document/7592703">

                <div class="box">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img style="width: 100%; max-width: 100%;" src="{{ asset('images/article1.jpg') }}" class="img-fluid" alt="MIS">
                        </div>
                        <div class="col-md-8 col-12">
                            <h3>Cyber-Attack Modeling Analysis Techniques: An Overview</h3>
                            <p>H. Al-Mohannadi, Q. Mirza, A. Namanya, I. Awan, A. Cullen and J. Disso, "Cyber-Attack Modeling Analysis Techniques:
                                An Overview," 2016 IEEE 4th International Conference on Future Internet of Things and Cloud Workshops (FiCloudW), Vienna, Austria, 2016, pp. 69-76, doi: 10.1109/W-FiCloud.2016.29.</p>

                           <p>---------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                                <p>This paper aims to analyse various types of existing attack modelling techniques to understand the vulnerability of the network, and the behaviour and goals of the adversary.
                                The ultimate goal is to handle cyber attack in efficient manner using attack modelling techniques.</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="//academic.oup.com/cybersecurity/article/4/1/tyy006/5133288">
                <div class="box">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img style="width: 100%;  max-width: 100%;" src="{{ asset('images/article3.jpg') }}" class="img-fluid" alt="MIS">
                        </div>
                        <div class="col-md-8 col-12">

                            <h3>A taxonomy of cyber-harms: Defining the impacts of cyber-attacks and understanding how they propagate</h3>
                            <p>Ioannis Agrafiotis, Jason R C Nurse, Michael Goldsmith, Sadie Creese, David Upton, A taxonomy of cyber-harms:
                                Defining the impacts of cyber-attacks and understanding how they propagate, Journal of Cybersecurity, Volume 4, Issue 1, 2018, tyy006, https://doi.org/10.1093/cybsec/tyy006.</p>
                            <p>---------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                                <p>Based on an extensive literature survey and on reviewing news articles and databases reporting cyber-incidents, cybercrimes, hacks and other attacks, we identify various
                                    types of harm and create a taxonomy of cyber-harms encountered by organizations. This taxonomy comprises five broad themes: physical or digital harm;
                                    economic harm; psychological harm; reputational harm; and social and societal harm.</p>

                        </div>
                    </div>
                </div>
            </a>
            <a href="https://ieeexplore.ieee.org/abstract/document/4983396">
                <div class="box">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img style="width: 100%; max-width: 100%;" src="{{ asset('images/article2.jpg') }}" class="img-fluid" alt="MIS">
                        </div>
                        <div class="col-md-8 col-12">

                            <h3>Cyberattacks: Why, What, Who, and How</h3>
                            <br>
                            <p>S. Liu and B. Cheng, "Cyberattacks: Why, What, Who, and How," in IT Professional, vol. 11, no. 3, pp. 14-21, May-June 2009, doi: 10.1109/MITP.2009.46.</p>
                            <p>---------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                            <p>As computers, information systems, and networking have become increasingly ubiquitous, cybersecurity has become even more critical for the continuity of basic business operations.
                                This article analyzes the challenges associated with cybersecurity, including attack patterns and trends.</p>

                        </div>
                    </div>
                </div>
            </a>

            <!-- Add more boxes as needed -->
        </div>




        <!--<div class="container">
        <div class="box">
            <img src="{{ asset('images/mis.jpg') }}" alt="MIS">
            <div class="content">
                <h3>jkekkf3jf3od3dko3ko3kfp3kfp3f2</h3>
                <p>Description 1</p>
            </div>
        </div>
        <div class="box">
            <img src="image2.jpg" alt="Image 2">
            <div class="content">
                <h2>Title 2</h2>
                <p>Description 2</p>
            </div>
        </div>
        <div class="box">
            <img src="image2.jpg" alt="Image 2">
            <div class="content">
                <h2>Title 2</h2>
                <p>Description 2</p>
            </div>
        </div>
        <div class="box">
            <img src="image2.jpg" alt="Image 2">
            <div class="content">
                <h2>Title 2</h2>
                <p>Description 2</p>
            </div>
        </div>
         Add more boxes as needed
    </div>-->
    </div>

    @endsection
