@extends('layouts.main')
@section('content')
    <main role="main">
        <div id="resume">
            <div class="container">
                <h1 class="text-center py-4"><a href="{{asset('/storage/cv.pdf')}}" download>Resume</a></h1>
                <h2 class="text-center"><b>Cojocaru Ion</b></h2>
                <p class="text-center"><strong>cojocaru.ion.88@gmail.com</strong><br />
                    <table class="table table-bordered">
                        <tr>
                            <td><h3>Personal Summary</h3></td>
                            <td>
                                New challenges make one's life more interesting - this is my main belief. I enjoy taking on new challenges, solving interesting problems and getting a perfect result. I am new to software development, but it is my favorite hobby so far. I've been learning algorithms and solving different problems for more than 15 years. Now I want to evolve my hobby into a career. I am currently working on a small project as a freelancer, as well as doing other small apps for my portfolio. Right now I would like to join a company where others encourage me, respect me and help me develop myself as a person and as a developer, a company where my knowledge matters.
                            </td>
                        </tr>
                        <tr>
                            <td><h3>Education</h3></td>
                            <td>
                <p><strong>Mihail Berezovschi Lyceum, Chisinau</strong> (bachelor's degree) – <em>1995 - 2007</em></p>
                <p><strong>Technical University of Moldova</strong> (masters's degree) – <em>2007 - 2013</em></p>
                </td>
                </tr>

                <tr>
                    <td><h3>Work Experience</h3></td>
                    <td>
                        <p><strong>TSO dispatcher – </strong><em><a href="http://moldelectrica.md/ro/">SE Moldelectrica</a><br />
                                August 2011 – December 2020</em></p>
                        <p><strong>TSO shift supervisor – </strong><em><a href="http://moldelectrica.md/ro/">SE Moldelectrica</a><br />
                                January 2021 – present</em></p>
                        <ul>
                            <li>Full responsibility of subordinate staff.</li>
                            <li>Maintain power balance and inter-system energy exchange within operational hour.</li>
                            <li>Read charts, meters, and gauges to monitor voltage and electricity flows.</li>
                            <li>Check equipment and indicators to detect evidence of operating problems.</li>
                            <li>
                                Respond to emergencies, such as transformer or transmission line failures, and route current around affected areas.</li>
                            <li>Direct personnel engaged in controlling or operating distribution equipment or machinery.</li>
                            <li>Implement energy schedules, including real-time transmission reservations or schedules.</li>
                            <li>Track conditions that could affect power needs, such as changes in the weather, and adjust equipment to meet any anticipated changes.</li>
                            <li>Disturbance handling and remedial action.</li>
                            <li>Enhance secure functioning of the power system.</li>
                        </ul>
                        <p><strong>Full-stack developer – </strong><em>Freelance<br />
                                December 2019 – present</em></p>
                        <ul>
                            <li>Program, test and debug web applications.</li>
                            <li>Design, develop, test and deploy web applications.</li>
                            <li>Code pages, files, test, debug and deploy.</li>
                            <li>Assist and support in the upkeep and maintenance of web sites.</li>
                            <li>Fix bugs, troubleshoot and resolve problems.</li>
                        </ul>
                        <p><strong>Back-end developer – </strong><em><a href="https://blueline.md/">Blueline SRL</a><br />
                                September 2020 – present</em></p>
                        <ul>
                            <li>Worked with other developers on several projects for companies admin-side panels.</li>
                            <li>Implemented new features and services to support client applications.</li>
                            <li>Estimated effort for development tasks.</li>
                            <li>Helped to develop and maintain applications.</li>
                            <li>Integrated user-facing elements developed by front-end developers with server side logic.</li>
                            <li>Maintained and evolved in class back-end infrastructure.</li>
                            <li>Contribute to design and development of Backend and API’s.</li>
                        </ul>
                    </td>
                </tr>

                <tr>
                    <td><h3>Technical Skills</h3></td>
                    <td>
                        PHP, Python, JavaScript, SQL, HTML5, CSS3, MATLAB, Windows, GitHub, Apache, PgAdmin 4, PhpMyAdmin, Bootstrap, Microsoft Office, Chrome Developer Tools
                    </td>

                </tr>

                <tr>
                    <td><h3>Relevant works</h3></td>
                    <td>
                        <ul>
                            <li><a href="https://books-500.herokuapp.com/login">books-50</a> - A book review site, under CS50W</li>
                            <li><a href="http://vam.md/">VAM</a> - Freelance project under mentorship</li>
                            <li><a href="https://task-manager-500.herokuapp.com/">Tasks lists</a> - a simple app with full CRUD for a tasks list</li>
                        </ul>
                    </td>

                </tr>

                <tr>
                    <td><h3>Completed courses</h3></td>
                    <td>
                        <p>
                            <strong>CS50x (Harvard) – </strong>Mar 2020<br />
                            <strong>PHP Laravel for beginners (Udemy) – </strong>Mar 2020<br />
                            <strong>Symfony level 1 (SymfonyCasts) – </strong>Mar 2020<br />
                        </p>
                    </td>
                </tr>

                </table>
            </div>
        </div>
    </main>
@endsection
