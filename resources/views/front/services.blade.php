@extends('front.layouts.app')

@section('content')
    <div class="contact-bg" style="background-image: url('{{ asset('front-assets/img/Services.jpg') }}');">
        {{-- <h3>Get in Touch with Us</h3> --}}
        <h2>Services</h2>
        <div class="line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="text">We provide Amazing Solutions</p>
    </div>

    <!-- =======  Custom Software ======= -->

    <div class="section-title" style="padding-top: 60px">
        <h2>Software Development</h2>
        <p></p>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('uploads/first_section/service1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <img src="" class="img-fluid" alt="">
                        <div class="col-lg col-md icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
                            <h4 class="title" style="text-align: left"><a href="">
                                    Custom Software Development </a></h4>
                            <p class="description">Is the designing of software applications for a specific user or group of
                                users within an organization. Such software is designed to address their needs precisely as
                                opposed to the more traditional and widespread off-the-shelf software</p>
                        </div>
                        <div class="col-lg col-md icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
                            <h4 class="title" style="text-align: left"><a href="">Development of Tailored
                                    Software</a></h4>
                            <p class="description">In a service that offers the development of a software application that
                                can be since its conceptualization through the operation, such applications can be a new
                                creation or already existing in an organization that desires to provide outsourcing.</p>
                        </div>
                        <div class="col-lg col-md icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
                            <h4 class="title" style="text-align: left"><a href="">
                                    Ensure Software </a></h4>
                            <p class="description">Is a quality assurance service for software applications where the
                                purpose is to identify incidents (defects and requirements) that can compromise the
                                performance of the application in operation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =======  Mobile Application ======= -->

    <div class="section-title">
        <h2>Mobile App Development</h2>
        <p></p>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">

            <div class="row no-gutters">
                <div class="col-lg-12 video-box">
                    <img src="{{ asset('uploads/first_section/service2.png') }}" class="img-service" alt="">
                </div>
            </div>

        </div>
    </div>

    <section id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <p>Mobile application development is a term used to denote the act or process by which application
                            software is developed for handheld devices, such as personal digital assistants, enterprise
                            digital assistants or mobile phones.Mobile application development is the set of processes and
                            procedures involved in writing software for small, wireless computing devices such as Smartphone
                            or tablets. Mobile application development is similar to Web application development and has its
                            roots in more traditional software development. </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <p>One critical difference, however, is that mobile applications (apps) are often written
                            specifically to take advantage of the unique features a particular mobile device offers. For
                            instance, a gaming app might be written to take advantage of the iPhone's accelerator. One way
                            to ensure that applications show optimum performance on a given device is to develop the
                            application (app) natively on that device. This means that at a very low level, the code is
                            written specifically for the processor in a particular device. When an app needs to run on
                            multiple operating systems, however, there is little -- if any -- code that can be reused from
                            the initial development. The application must essentially be rewritten for each specific device.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =======  Web Application Development ======= -->

    <div class="section-title">
        <h2>Web App Development</h2>
        <p></p>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('uploads/first_section/service3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
                        <p>Web Application Development Services by Opus Technology
                            Empower your business with Opus Technology’s Web Application Development services. We design and
                            develop secure, scalable, and high-performance web applications tailored to your unique business
                            needs.
                        </p>
                        <br>
                        <div class="section-title">
                            <ul style="list-style-type: disc; padding-left: 20px; margin: 0; text-align: left;">
                                <li style="font-weight: bold; list-style-type: none; padding-left: 0;">Our Services:</li>
                                <li style="padding-left: 10px;">Custom Web Application Development – Build dynamic,
                                    feature-rich web
                                    applications.
                                </li>
                                <li style="padding-left: 10px;">Scalable & Secure Architecture – Ensure performance,
                                    security, and
                                    reliability.
                                </li>
                                <li style="padding-left: 10px;">Enterprise & Business Solutions – Optimize operations with
                                    industry-specific applications.
                                </li>
                                <li style="padding-left: 10px;">Agile Development & Rapid Deployment – Accelerate
                                    time-to-market
                                    with iterative development.
                                </li>
                                <li style="padding-left: 10px;">Maintenance & Support – Keep your web applications updated
                                    and
                                    secure.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p>
                    From small businesses to large enterprises, we create tailored solutions that enhance efficiency, user
                    experience, and business growth.
                </p>

            </div>


        </div>
    </div>

    <!-- =======  Business Intelligence ======= -->

    <div class="section-title">
        <h2>Business Intelligence</h2>
        <p></p>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">

            <div class="row no-gutters">
                <div class="col-lg-12 video-box">
                    <img src="{{ asset('uploads/first_section/service4.gif') }}" class="img-service" alt="">
                </div>
            </div>
            <div class="section-title">

                <p>Business Intelligence (BI) Services by Opus Technology Unlock data-driven success with Opus Technology’s
                    Business Intelligence (BI) Solutions. Our BI services empower enterprises with actionable insights,
                    helping businesses make informed decisions, optimize operations, and drive growth.
                </p>
                <ul style="list-style-type: disc; padding-left: 20px; margin: 0; text-align: left;">
                    <li style="font-weight: bold; list-style-type: none; padding-left: 0;">Our BI Solutions Include:
                    </li>
                    <li style="padding-left: 10px;">Data Analytics & Visualization – Transform raw data into meaningful
                        insights through interactive dashboards and reports.

                    </li>
                    <li style="padding-left: 10px;">Predictive & Prescriptive Analytics – Leverage AI-powered analytics to
                        forecast trends and optimize business strategies.

                    </li>
                    <li style="padding-left: 10px;">Performance Monitoring & Benchmarking – Track key metrics and compare
                        performance for continuous improvement.

                    </li>
                    <li style="padding-left: 10px;">Data Mining & Process Automation – Extract valuable patterns and
                        automate workflows for better efficiency.

                    </li>
                    <li style="padding-left: 10px;">Market & Competitive Analysis – Gain insights into market trends,
                        customer behavior, and competitive positioning.

                    </li>
                </ul>

                <p>With our advanced BI solutions, businesses can identify new opportunities, enhance decision-making, and
                    gain a competitive edge.</p>
            </div>

        </div>
    </div>

    <!-- ======= Artificial Intelligence (AI) ======= -->

    <div class="section-title">
        <h2>Artificial Intelligence (AI)</h2>
        <p></p>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">

            <div class="row no-gutters">
                <div class="col-lg-12 video-box">
                    <img src="{{ asset('uploads/first_section/service5.gif') }}" class="img-service" alt="">
                </div>
            </div>
            <div class="section-title">
                <p>
                    Unlock the power of Artificial Intelligence with Opus Technology. Our AI services transform your
                    business through intelligent automation, predictive analytics, and machine learning. By harnessing the
                    latest advancements, we enable companies to streamline operations, improve customer engagement, and
                    drive innovation. Whether you're in finance, healthcare, or any other industry, we provide tailored AI
                    solutions to meet your unique needs. Let us help you stay ahead in the digital era with smart, scalable,
                    and efficient AI-driven solutions.

                </p>
            </div>


            <div class="section-title">
                <ul style="list-style-type: disc; padding-left: 20px; margin: 0; text-align: left;">
                    <li style="font-weight: bold; list-style-type: none; padding-left: 0;">Discover the power of AI with
                        Opus Technology:</li>
                    <li style="padding-left: 10px;">Intelligent Automation: Automate your business processes for higher
                        efficiency.</li>
                    <li style="padding-left: 10px;">Predictive Analytics: Make data-driven decisions that anticipate trends
                        and challenges.</li>
                    <li style="padding-left: 10px;">Machine Learning: Enable systems to learn and adapt for improved
                        performance.</li>
                    <li style="padding-left: 10px;">Tailored Solutions: Custom AI solutions to fit your industry and
                        business needs.</li>
                    <li style="padding-left: 10px;">Enhanced Customer Engagement: Improve interactions through personalized
                        AI-driven experiences.</li>
                </ul>
            </div>



        </div>
    </div>

    <!-- =======  Blockchain ======= -->

    <div class="section-title">
        <h2>Blockchain</h2>
        <p></p>
    </div>
    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('uploads/first_section/service6.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <p>Blockchain is a system of recording information in a way that makes it difficult or impossible to
                            change, hack, or cheat the system. A blockchain is essentially a digital ledger of transactions
                            that is duplicated and distributed across the entire network of computer systems on the
                            blockchain. Each block in the chain contains a number of transactions, and every time a new
                            transaction occurs on the blockchain, a record of that transaction is added to every
                            participant’s ledger. The decentralised database managed by multiple participants is known as
                            Distributed Ledger Technology (DLT). Blockchain is a type of DLT in which transactions are
                            recorded with an immutable cryptographic signature called a hash</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =======  Internet of Things ======= -->

    <div class="section-title" style="padding-top: 30px">
        <h2>Internet of Things</h2>
        <p></p>
    </div>
    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <p>The Internet of things, or IoT, is a system of interrelated computing devices, mechanical and
                            digital machines, objects, animals or people that are provided with unique identifiers (UIDs)
                            and the ability to transfer data over a network without requiring human-to-human or
                            human-to-computer interaction. A thing in the internet of things can be a person with a heart
                            monitor implant, a farm animal with a biochip transponder, an automobile that has built-in
                            sensors to alert the driver when tire pressure is low or any other natural or man-made object
                            that can be assigned an IP address and is able to transfer data over a network.</p>
                        <br>
                        <p>Increasingly, organizations in a variety of industries are using IoT to operate more efficiently,
                            better understand customers to deliver enhanced customer service, improve decision-making and
                            increase the value of the business.</p>
                    </div>
                </div>
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('uploads/first_section/service7.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- =======  Outsourcing ======= -->

    <div class="section-title" style="padding-top: 60px">
        <h2>Outsourcing</h2>
        <p></p>
    </div>
    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            <div class="row no-gutters">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('uploads/first_section/service8.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <p>Outsourcing is an agreement in which one company contracts its own internal activity to a
                            different company. It involves the contracting out of a business process (e.g. payroll
                            processing, claims processing) and operational, and/or non-core functions (e.g. manufacturing,
                            facility management, call center support) to another party (see also business process
                            outsourcing). The concept "outsourcing" came from the American Glossary 'outside resourcing' and
                            it dates back to at least 1981. Outsourcing sometimes, though not always, involves transferring
                            employees and assets from one firm to another. Outsourcing is also the practice of handing over
                            control of public services to private enterprise.</p>
                        <br>
                        <p>Financial savings from lower international labor rates can provide a major motivation for
                            outsourcing or offshoring. There can be tremendous savings from lower international labor rates
                            when offshoring.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =======  Process Consulting ======= -->

    <div class="section-title" style="padding-top: 30px">
        <h2>Process Consulting</h2>
        <p></p>
    </div>
    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <p>Process Consultant Part of the field called Human Systems Intervention, process consultation is a
                            philosophy of helping, a general theory and methodology of intervening (Schein, Process
                            Consultations, 1992 revisited).</p>
                        <br>
                        <p>A process consultant is a highly qualified professional that has insights into and understands
                            the psychosocial dynamics of working with various client systems such as whole organizations,
                            groups, and individuals.</p>
                        <br>
                        <p> Given the complex nature of intervening, a process consultant's expertise includes the following
                            (and many other) aspects:</p>
                        <br>
                        <p> &rarr; works concomitantly with groups and individuals (managers/directors) towards a larger
                            change process such as strategic visioning, strategic planning, etc.</p>
                        <br>
                        <p> &rarr; based on the context, selects from a variety of methods, tools and change theories a
                            'facilitative intervention' that will most benefit the client system.</p>
                        <br>
                        <p> &rarr; stays aware of covert organizational processes, group dynamics, and interpersonal issues.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('uploads/first_section/service9.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- =======  Re-engineering & Migration ======= -->

    <div class="section-title" style="padding-top: 60px">
        <h2>Re-engineering & Migration</h2>
        <p></p>
    </div>

    <section class="about-lists">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up">
                    <h4>Re-engineering & Migration</h4>
                    <p>In an ever-changing business environment, every technology is likely to become obsolete sooner or
                        later as more advanced technologies become available. Reengineering and migration enable business
                        enterprises to move ahead of old company legacy systems and leverage on the benefits of
                        state-of-the-art technologies.</p>
                </div>
                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                    <h4>Challenges: Transition Inevitable</h4>
                    <p>Flexibility in the business world is much more than the implementation of advanced technologies or
                        the integration of applications and databases with a Web interface. The transition from an existing
                        system to a new system is a demanding and challenging process. Not only does it imply the
                        convergence of technologies or streamlining of business functions, but also ensures that the synergy
                        enhances the scope for overall growth and progress.</p>
                </div>
                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
                    <h4> Growth Of Your Business</h4>
                    <p>MIND aptly takes advantage of its human assets with a proven track record and experience in
                        cutting-edge software systems. We have never attempted to offer “readymade” solutions to our
                        clients, but have instead altered our offerings to best fit into their value chain. The
                        transformation of legacy and software systems encourages our affiliates to make the most through
                        re-engineering services.</p>
                </div>
                <div class="col-lg-6 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
                    <h4>Solutions</h4>
                    <p>MIND consistently endeavors to help its clients by positioning a new information system as a
                        strategic enabler for the overall growth of an enterprise. We ensure that the migration of
                        technology is not merely a derivative of increasing business needs, but takes place as a measure to
                        enable value addition. The amalgamation of latest technologies and our comprehensive domain
                        knowledge encourages clients to make a difference through superior business performance.</p>
                </div>


            </div>

        </div>
    </section>

    <div id="about" class="about" style="padding-top: 60px">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">

            <div class="row no-gutters">
                <div class="col-lg-12 video-box">
                    <img src="{{ asset('uploads/first_section/service10.png') }}" class="img-service" alt="">
                </div>
            </div>

        </div>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <h5 style="text-align: left"><b>We Re-invent Your Business Solutions</b></h5>
                        <p>&rarr; Evaluation of existing software status </p>
                        <p>&rarr; Identification of technology that best suits your business</p>
                        <p>&rarr; Need-gap analysis and formulation of appropriate strategies</p>
                        <p>&rarr; Deveeloping & Testing</p>
                        <p>&rarr; Deployment of new technology</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                    <div class="section-title">
                        <h5 style="text-align: left"><b>Benefits Of Our Migration And Re-engineering Services</b></h5>
                        <p>&rarr; Elimination of system bottlenecks associated with business performance</p>
                        <p>&rarr; Increased scalability in tandem with the needs of your enterprise</p>
                        <p>&rarr; Ensuring complete utilization of resources</p>
                        <p>&rarr; Superior integration capabilities and improved access to sophisticated data</p>
                        <p>&rarr; Enhanced user interface enabling improved functionalities and workflow management</p>
                    </div>
                </div>

            </div>
        </div>


        <!-- =======  Audit as a Service ======= -->

        <div class="section-title">
            <h2>Cyber Security</h2>
            <p></p>
        </div>
        <div id="about" class="about">
            <div class="container" data-aos="fade-up" style="box-shadow: none;">
                <div class="row no-gutters">
                    <div class="col-lg-6 video-box">
                        <img src="{{ asset('uploads/first_section/service11.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            {{-- <h5 style="text-align: left"><b>Is Your Website Working for You?</b></h5> --}}
                            <p>In today’s digital world, cyber threats are evolving faster than ever. Businesses must stay
                                ahead with robust security solutions to safeguard sensitive data and ensure operational
                                continuity.

                                Cyber threats are increasing, but your business doesn't have to be vulnerable.
                                At Opus Technology, we provide cutting-edge cybersecurity services designed to detect,
                                prevent, and mitigate risks before they impact your business. Furthermore; we provide
                                advanced cybersecurity solutions to protect your critical data, systems, and operations from
                                evolving digital risks.

                            </p>
                            <br>
                            <h5 style="text-align: left"><b>Our Security Services Include:
                                </b></h5>
                            <p>Threat Intelligence & Risk Management – Identify and eliminate vulnerabilities before they
                                become threats.
                            <div>

                                <p>
                                    🔐 End-to-End Data Protection – Secure sensitive data with encryption and access
                                    control.
                                    🌐 Network & Cloud Security – Safeguard your infrastructure against cyber
                                    intrusions.
                                    🚀Incident Response & Recovery – Rapid response to minimize downtime and restore
                                    operations.
                                    ✅ Regulatory Compliance Support – Ensure your business meets industry
                                    security standards.

                                </p>

                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- =======  Digital Marketing ======= -->

        <div class="section-title">
            <h2>Digital Marketing</h2>
            <p></p>
        </div>
        <div id="about" class="about" style="padding-bottom: 60px">
            <div class="container" data-aos="fade-up" style="box-shadow: none;">
                <div class="row no-gutters">
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">

                            <p>Digital marketing has been in existence since the 1990’s, it gained its popularity in the
                                early
                                2000s and is still a growing field and it has shifted the way businesses use technology for
                                marketing their products.Marketing is about creating a connection with your audience at the
                                right place and time and offering value to your customers and society at large.</p>
                            <br>

                            <div>
                                <p>Our services include:</p>
                                <ul style="padding-left: 20px; list-style-type: disc; text-align: left; margin: 0;">
                                    <li style="margin-bottom: 10px;">SEO & SEM – Improve search rankings and visibility.</li>
                                    <li style="margin-bottom: 10px;">Social Media Marketing – Engage and grow your audience.</li>
                                    <li style="margin-bottom: 10px;">Email Marketing – Deliver personalized, high-impact campaigns.</li>
                                    <li style="margin-bottom: 10px;">PPC Advertising – Maximize ROI with targeted ads.</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6 video-box">
                        <img src="{{ asset('uploads/first_section/service12.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="section-title">
                    {{-- <p>By leveraging these strategies, Opus Technology ensures that your business not only reaches a wider
                        audience but also engages them effectively, leading to increased brand loyalty and business growth.
                    </p> --}}
                </div>
            </div>
        </div>
    @endsection
