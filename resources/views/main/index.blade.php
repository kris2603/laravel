@extends('layouts.main')

@section('content')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/heaven.jpg)">
                    <div class="container">
                        <h2>Добро пожаловать <span></span></h2>
                        <p>Бережное и качественное стоматологическое обслуживание. Здесь начинается здоровая улыбка</p>
                        <a href="#about" class="btn-get-started scrollto">Подробнее</a>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </section><!-- End Hero -->

    <main id="main">
       <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>ПОЛУЧИТЕ КАЧЕСТВЕННУ ПОМОЩЬ</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3></h3>
                        <p class="fst-italic">
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Консультации, функциональная диагностика, рентген;</li>
                            <li><i class="bi bi-check-circle"></i> Терапевтическая стоматология (лечение пульпита, кариеса и т.д.)</li>
                            <li><i class="bi bi-check-circle"></i> В Дентамиг используют только материалы высокого качества и высокотехнологичное оборудование</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Услуги ======= -->
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Услуги</h2>
                    <p>Информирую граждан о возможности получения медицинской помощи в рамках программы государственных гарантий бесплатного оказания гражданам медицинской помощи и территориальных программ государственных гарантий бесплатного оказания гражданам медицинской помощи. Статья 79 п.3 ч.1 Федерального закона от 21.11.2011 №323 ФЗ "Об основах охраны здоровья граждан Российской Федерации"
                        Для этого необходимо выбрать стоматологический кабинет, отделения или поликлинику, работающую в системе обязательного медицинского страхования.
                    </p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>КОНСУЛЬТАЦИЯ</h4>
                                    <h4> 200 руб.</h4>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>ЛЕЧЕНИЕ</h4>
                                    <h4> ОТ 1 500 руб.</h4>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>ГИГИЕНА ПОЛОСТИ РТА</h4>
                                    <h4> 2000 руб.</h4>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Консультация</h3>
                                <img src="{{asset('assets/img/imresizer.jpg')}}" alt="" class="img-fluid">
                                <p>Консультация стоматолога — это процедура обследования полости рта, которую проводит специалист при первом обращении пациента в клинику перед началом любого вида лечения. При регулярном посещении консультация стоматолога позволяет выявить заболевания на ранней стадии, вылечить их более щадящими безболезненными методами, предотвратить дальнейшее разрушение зубов.
                                </p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Лечение</h3>
                                <img src="{{asset('assets/img/lt.jpg')}}" alt="" class="img-fluid">
                                <p>Лечение зубов – это врачебные манипуляции по устранению патологических процессов, которые происходят в мягких и твердых тканях зуба. Наиболее частым поводом для лечения зубов является кариес и его последствия, но также существует большая группа некариозных поражений зубов, включающая в себя как наследственные, так и приобретенные патологии.</p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <h3>Гигиена полости рта</h3>
                                <img src="{{asset('assets/img/gig.jpg')}}" alt="" class="img-fluid">
                                <p> Профессиональная ультразвуковая чистка зубов включает в себя:
                                    <br>
                                    - Удаление зубного налета (в том числе от курения и пищевых красителей)
                                    <br>
                                    - Эффективное удаление поддесневого и наддесневого камня с помощью ультразвуковых колебаний
                                    <br>
                                    - Глубокое промывание пародонтальных карманов
                                    <br>
                                    - Полировку поверхности зуба с помощью специальной пасты
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->
        <!-- ======= Pricing Section ======= -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Юридическая документация</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"> <img src="{{asset('assets/img/sert.png')}}" alt="" class="img-fluid"  onclick = 'openImageWindow(this.src);'></div>
                        <h4 class="title">Сертификат специалиста</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"> <img src="{{asset('assets/img/ep.png')}}" alt="" class="img-fluid"  onclick = 'openImageWindow(this.src);'></div>
                        <h4 class="title">Санитарно-эпидемиологическое заключение</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"> <img src="{{asset('assets/img/pril_ep.png')}}" alt="" class="img-fluid"  onclick = 'openImageWindow(this.src);'></div>
                        <h4 class="title">Приложение к санитарно-эпидемиологическому заключению</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"> <img src="{{asset('assets/img/inn.png')}}" alt="" class="img-fluid"  onclick = 'openImageWindow(this.src);'></div>
                        <h4 class="title">ИНН</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"> <img src="{{asset('assets/img/lit.png')}}" alt="" class="img-fluid"  onclick = 'openImageWindow(this.src);'></div>
                        <h4 class="title">Лицензия</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"> <img src="{{asset('assets/img/pr_lit.png')}}" alt="" class="img-fluid"  onclick = 'openImageWindow(this.src);'></div>
                        <h4 class="title">Приложение к лицензии</h4>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"> <img src="{{asset('assets/img/pov.png')}}" alt="" class="img-fluid"  onclick = 'openImageWindow(this.src);'></div>
                        <h4 class="title">Удостоверение о повышении квалификации</h4>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Frequently Asked Questioins Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Телефоны контролирующих организаций</h2>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Роспотребнадзор <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>8(48762) 6-42-06</p>
                            <p>8(48762)6-51-68</p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Министерство здравоохранения и социального развития <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>8(4872) 31-20-33</p>
                        </div>
                    </li>
                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Управление Росздравнадзора по Тульской области <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>8(4872) 25-15-36</p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Отдел лицензирования и контроля качества медицинской деятельности по Тульской области <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>8(4872) 37-75-07</p>
                        </div>
                    </li>
                </ul>

            </div>
        </section><!-- End Frequently Asked Questioins Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2343.498526040822!2d38.3896228771266!3d54.029422123394816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41369b6ca9b34e63%3A0x61b647924627790!2z0YPQuy4g0JvQtdC90LjQvdCwLCAy0JAsINCh0LXQstC10YDQvi3Ql9Cw0LTQvtC90YHQuiwg0KLRg9C70YzRgdC60LDRjyDQvtCx0LsuLCAzMDE3OTA!5e0!3m2!1sru!2sru!4v1699962155070!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


            </div>
        </section><!-- End Contact Section -->
        <script type="text/javascript">
            function openImageWindow(src) {
                var image = new Image();
                image.src = src;
                var width = image.width;
                var height = image.height;
                window.open(src,"Image","width=" + width + ",height=" + height);
            }
        </script>


@endsection

