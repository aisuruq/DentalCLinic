
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <title>Family Clinic</title>
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/main_page.css">
    <link rel="stylesheet" href="/css/clinic_services.css">
    <link rel="stylesheet" href="/css/aboutUs.css">
    <link rel="stylesheet" href="/css/doctors.css">
    <link rel="stylesheet" href="/css/formSignup.css">
    <link rel="stylesheet" href="/css/comments.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/media1640.css">   
    <link rel="stylesheet" href="/css/media1440.css">
    <link rel="stylesheet" href="/css/media1024.css">
    <link rel="stylesheet" href="/css/media768.css">
    <link rel="stylesheet" href="/css/media425.css">
</head>
<body>
    <svg width="0" height="0"> 
        <defs>
        <path id="heart" d="M100 34.976c0 8.434-3.635 16.019-9.423 21.274h0.048l-31.25 31.25c-3.125 3.125-6.25 6.25-9.375 6.25s-6.25-3.125-9.375-6.25l-31.202-31.25c-5.788-5.255-9.423-12.84-9.423-21.274 0-15.865 12.861-28.726 28.726-28.726 8.434 0 16.019 3.635 21.274 9.423 5.255-5.788 12.84-9.423 21.274-9.423 15.865 0 28.726 12.861 28.726 28.726z" 
        transform="translate(2, 2) scale(.95)"/>
        <linearGradient id="stripes" 
                    x1="0" y1="0" x2="100%" y2="0%">
          <stop stop-color="hsl(45,100%,65%)" offset="0"/>
          <stop stop-color="hsl(320,100%,65%)" offset="50%"/>
          <stop stop-color="hsl(200,100%,60%)" offset="100%"/>  
    </linearGradient>
    
    <linearGradient id="stripes2" x1="0" y1="0"     
                    x2="0" y2="100%">
          <stop stop-color="rgba(0,0,0,.2)"/>
          <stop stop-color="rgba(0,0,0,.02)" offset="90"/>
    </linearGradient>
    </defs>
    </svg>
        <header id="header">
            <div class="header_menu">
                <div id="logo"></div>
                <div class="main_menu">
                    <a href="#" class="main_menuLink">ГЛАВНАЯ</a>
                    <a href="#clinic_services" class="main_menuLink">УСЛУГИ</a>
                    <a href="#aboutUs" class="main_menuLink">О КЛИНИКЕ</a>
                    <div class="dropdown">
                        <a href="#" class="main_menuLink dropdown_link">ВРАЧИ <span>&#9660;</span></a>
                        <div class="dropdown_content">
                            <a href="#doctor1" class="dropdown_item top">Астафьев Александр</a>
                            <a href="#doctor2" class="dropdown_item">Климова Мария</a>
                            <a href="#doctor3" class="dropdown_item bottom">Владимир Смирнов</a>
                        </div>
                    </div>
                    <a href="#comments" class="main_menuLink">ОТЗЫВЫ</a>
                </div>

                <div class="tel_header">
                    <div id="iconTel"></div>
                    <a class="tel" href="tel:+79114651093">+7(911)465-10-93</a>
                </div>
                <div class="login_header">
                        <span></span>
                        Вход 
                        <span></span>
                </div>
                <div class="burger">
                    <span></span>
                </div>
            </div>
        </header>
        <main>
        <dialog id="modalDialogWindow"></dialog>
            <div id="modalWindow">
                
                <div id="closeModal"></div>
                <div class="modalButtons">
                    <div id="avtorPhp">
                        <span></span>
                        Авторизация
                        <span></span>
                    </div>
                    <div id="regPhp">
                        <span></span>
                        Регистрация
                        <span></span>
                    </div>
                </div>

                   
                    <form method="POST" action="" class="avtorizacia">
                    <div class="closeForm"></div>
                    <input type="text" name="login_avtor" id="login_avtor" oninput="checkLoginAvtor()" placeholder="Логин">
                    <span id="loginAvailability"></span>
                    <input type="password" name="pass_avtor" id="pass_avtor"  placeholder="Пароль">
                    <span id="passwordAvailability"></span> 
                    <input type="button" value="Отправить" name="submit_avtor" id="submit_avtor">
                    </form>
                    <form method="POST" action="" class="registracia">
                    <div class="closeForm"></div>
                    <input type="text" name="login" oninput="checkUsername()" id="login" placeholder="Логин">
                    <span id="usernameAvailability"></span>
                    <input type="password" name="pass" placeholder="Пароль">
                    <input type="password" name="confirm_password" placeholder="Подтвердите пароль">
                    <input type="text" name="nameReg" id="nameReg" placeholder="Имя">
                    
                    <input type="text" name="surname" placeholder="Фамилия">
               
                    <input type="text" name="lastname" placeholder="Отчество">
               
                    <input type="text" name="email" id="email" oninput="checkEmail()" placeholder="Почта">
                    <span id="emailAvailability"></span>
                    <input type="button" value="Отправить" name="submit" id="submit">
                    </form>
            </div>
            <section id="main_page">
                <div class="mainPage">
                    <div class="main_page_text">
                        <h1>Стоматологическая клиника 
                        <svg width="200px" height="50px">
              
                        <text x="52%" y="95%"  text-anchor="middle"  >
                        FAMILY
                        </text>
                        </svg>
                         в Калининграде.<br> С заботой о вашей улыбке!</h1>
                        <div id="timer">
                            <div class="timer_block">
                                <span id="days"></span>
                                <p>дней</p>
                            </div>
                            <div class="timer_block">
                                <span id="hours"></span>
                                <p>часов</p>
                            </div>
                            <div class="timer_block">
                                <span id="minutes"></span>
                                <p>минут</p>
                            </div>
                            <div class="timer_block">
                                <span id="seconds"></span>
                                <p>секунд</p>
                            </div>
                        </div>
                        <p>Успейте записаться на прием и получите чистку в подарок!</p>
                        <div class="main_page_button"> 
                            <div id="signUp">
                                <span></span>
                                Записаться
                                <span></span>
                            </div>
                            <div id="review">
                                <span></span>
                                Ознакомиться
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div id="tooth"><div class="chto"></div></div>
                </div>    
            </section>

            <section id="clinic_services">
            <div class="clinicSevices">
                <h2 id="clinicSevicesh2">Услуги клиники</h2>
                    <div class="clinic_services_blocks">
                    <div class="clinic_services_block pink pink-shadow">
                        <div class="clinic_services_text">
                            <div class="clinic_services_icons" id="icon_dentist"></div>
                            <h4>Диагностика+гигиена</h4>
                            <h3>от 2000 рублей</h3>
                        </div>
                        <div class="clinic_services--hover">
                            <h4>Диагностика+гигиена</h4>
                            <p>Комплексная оценка состояния полости рта с использованием современных методов обследования и профессиональная чистка зубов для поддержания здоровья полости рта.</p>
                        </div>
                    </div>
                    <div class="clinic_services_block yellow yellow-shadow">
                        <div class="clinic_services_text">
                            <div class="clinic_services_icons" id="icon_deleteTooth"></div>
                            <h4>Удаление зубов</h4>
                            <h3>от 4000 рублей</h3>
                        </div>
                        <div class="clinic_services--hover">
                            <h4>Удаление зубов</h4>
                            <p>Процедура, в ходе которой удаляются поврежденные, больные или ненужные зубы с последующим обеспечением пациента необходимым послеоперационным уходом.</p>
                        </div>
                    </div>

                    <div class="clinic_services_block green green-shadow">
                        <div class="clinic_services_text">
                            <div class="clinic_services_icons" id="icon_implantTooth"></div>
                            <h4>Имплантация зубов</h4>
                            <h3>от 20000 рублей</h3>
                        </div>
                        <div class="clinic_services--hover">
                            <h4>Имплантация зубов</h4>
                            <p>Процедура восстановления зубного ряда путем установки искусственных корней с последующим креплением зубных протезов для восстановления функции и внешнего вида улыбки.</p>
                        </div>
                    </div>

                    <div class="clinic_services_block blue blue-shadow">
                        <div class="clinic_services_text">
                            <div class="clinic_services_icons" id="icon_breketi"></div>
                            <h4>Установка брекетов</h4>
                            <h3>от 27000 рублей</h3>
                        </div>
                        <div class="clinic_services--hover">
                            <h4>Установка брекетов</h4>
                            <p>Метод коррекции прикуса, основанный на установке металлических или прозрачных конструкций на зубы для выправления их положения и улучшения выравнивания зубного ряда.</p>
                        </div>
                    </div>

                    <a id="toothAppearClinicServices" class="toothAppear" href="tel:+7911461093"></a>
                </div>
            </div>
            </section>

            <section id="aboutUs">
                <div class="about__us">
                    <h2>О клинике</h2>
                    <div class="container_about_us">
                    <div class="text_aboutUs">
                        <p class="text_aboutUs1">
                            <span>FAMILY</span> - это не просто клиника, это место, где каждый пациент чувствует себя как часть большой дружной семьи. Наши современные и комфортабельные помещения созданы для вашего уюта и безопасности.  Мы используем передовые технологии и подходы, чтобы обеспечить вам высококачественное стоматологическое обслуживание.
                        </p>
                    </div>
                    <div class="content_img">
                        <img src="/images/DentalRoom.png" id="DentalRoom">
                        <div id="familyClinic">
                            FAMILY CLINIC
                        </div>
                        <div id="Decoration"></div>
                        <div id="mainPictureAbout"></div>
                    </div> 
                    <div class="container_quality">
                        <div class="quality yellow yellow-shadow">
                            <div class="icon icons--dasharray-anim">  
                                <svg viewbox="0 0 100 100">
                                  <use xlink:href="#heart">
                                </svg>  
                            </div>  
                            <p>Дешевые цены</p>
                        </div>
                        <div class="quality green green-shadow">
                           
                            <div class="icon icons--dasharray-anim toothquality">  
                                <svg id="toothquality" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M9.19807 4.45825C8.55418 4.22291 7.94427 4 7 4C5 4 4 6 4 8.5C4 10.0985 4.40885 11.0838 4.83441 12.1093C5.0744 12.6877 5.31971 13.2788 5.5 14C5.649 14.596 5.7092 15.4584 5.77321 16.3755C5.92401 18.536 6.096 21 7.5 21C8.39898 21 8.79286 19.5857 9.22652 18.0286C9.75765 16.1214 10.3485 14 12 14C13.6515 14 14.2423 16.1214 14.7735 18.0286C15.2071 19.5857 15.601 21 16.5 21C17.904 21 18.076 18.536 18.2268 16.3755C18.2908 15.4584 18.351 14.596 18.5 14C18.6803 13.2788 18.9256 12.6877 19.1656 12.1093C19.5912 11.0838 20 10.0985 20 8.5C20 6 19 4 17 4C16.0557 4 15.4458 4.22291 14.8019 4.45825C14.082 4.72136 13.3197 5 12 5C10.6803 5 9.91796 4.72136 9.19807 4.45825Z" stroke="#454545" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                            </div>  
                            <p>Безболезненное лечение</p>
                        </div>
                        <div class="quality blue blue-shadow">
                            <div class="icon icons--dasharray-anim okey">  
                                <svg id="okey" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.a{fill:none;stroke-width:1.5;stroke:#454545;stroke-linecap:round;stroke-linejoin:round;}</style></defs><line class="a" x1="11.5" y1="14.21" x2="36.5" y2="14.21"></line><line class="a" x1="11.5" y1="20.74" x2="15.78" y2="20.74"></line><line class="a" x1="11.5" y1="27.26" x2="15.78" y2="27.26"></line><line class="a" x1="11.5" y1="33.79" x2="15.78" y2="33.79"></line><line class="a" x1="33.24" y1="20.74" x2="36.5" y2="20.74"></line><line class="a" x1="32.22" y1="27.26" x2="36.5" y2="27.26"></line><line class="a" x1="32.22" y1="33.79" x2="36.5" y2="33.79"></line><line class="a" x1="20.51" y1="33.79" x2="27.49" y2="33.79"></line><polyline class="a" points="19.66 22.93 24 27.26 30.67 20.6"></polyline><circle class="a" cx="24" cy="24" r="21.5"></circle></g></svg>

                            </div>  
                            <p>Расширенная гарантия</p>
                        </div>
                    </div>
                    <a id="toothAppearAboutUs" class="toothAppear" href="tel:+7911461093"></a>
                </div>
            </section>

            <section id="doctors">
                <a id="doctor1"></a>
                <a id="doctor2"></a>
                <a id="doctor3"></a>
                <div class="doctors_mainBlock">
                    <h2>Наши специалисты</h2>
                    <div class="slide-container swiper">
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">

                                <div class="doctors_block swiper-slide">
                                    <div class="content_doctors_block">
                                        <div class="photo "id="stomatolog1"></div>
                                        <div class="doctors_block_text">
                                            <h3>Астафьев Александр Петрович</h3>
                                            <div class="DoctorstextBackground">
                                            <p>Доктор Александр Петров - врач-хирург с большим опытом в стоматологической практике. Обладая высокой квалификацией в области хирургии челюстно-лицевой области.</p>
                                            <span class="DoctorsformPodrobnee" id="form_signupDrop">Подробнее</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctors_block_text--hover">
                                            <h4>Астафьев Александр Петрович</h4>
                                            <p>обладает богатым опытом в области челюстно-лицевой хирургии, успешно выполнив более 500 операций. Его достижения включают сложные реконструктивные вмешательства и успешное лечение травм. Его главное достоинство – профессионализм, понимание индивидуальных потребностей пациентов и высокий уровень заботы о них.</p>
                                            <span class="DoctorsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="doctors_block swiper-slide">
                                    <div class="content_doctors_block">
                                        <div class="photo "id="stomatolog2"></div>
                                        <div class="doctors_block_text">
                                            <h3>Климова Мария Сидорова</h3>
                                            <div class="DoctorstextBackground">
                                            <p>Доктор Мария Сидорова - стоматолог-терапевт с огромным опытом работы с пациентами всех возрастов. Обладает высокой квалификацией и лечит кариес.</p>
                                            <span class="DoctorsformPodrobnee">Подробнее</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctors_block_text--hover">
                                        <h4>Климова Мария Сидорова</h4>
                                        <p>обладает 10-летним опытом работы в стоматологии. Она успешно лечила кариес и другие заболевания у тысяч пациентов всех возрастов. Ее достижения включают разработку программ профилактики стоматологических заболеваний и участие в благотворительных мероприятиях. Ее главное достоинство – понимание индивидуальных потребностей пациентов и доброжелательное отношение к каждому.</p>
                                        <span class="DoctorsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="doctors_block swiper-slide">
                                    <div class="content_doctors_block">
                                        <div class="photo "id="stomatolog3"></div>
                                        <div class="doctors_block_text">
                                            <h3>Владимир Смирнов Дмитриевич</h3>
                                            <div class="DoctorstextBackground">
                                            <p>Доктор Владимир Смирнов – врач-стоматолог с богатым опытом в области терапевтической стоматологии. Он обладает высокой квалификацией в лечении кариеса.</p>
                                            <span class="DoctorsformPodrobnee">Подробнее</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctors_block_text--hover">
                                        <h4>Владимир Смирнов Дмитриевич</h4>
                                        <p>имеет 20-летний опыт в терапевтической стоматологии. Он успешно лечил более 1000 случаев кариеса и других заболеваний зубов. Его достижения включают разработку инновационных методик лечения и обучение студентов стоматологического факультета. Его главное достоинство – мастерство в применении современных методов лечения и внимательное отношение к каждому пациенту.</p>
                                        <span class="DoctorsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="doctors_block swiper-slide">
                                    <div class="content_doctors_block">
                                        <div class="photo "id="stomatolog4"></div>
                                        <div class="doctors_block_text">
                                            <h3>Максим Шевченко Андреевич</h3>
                                            <div class="DoctorstextBackground">
                                            <p>Опытный стоматолог с европейским шармом. Профессионал в терапевтической стоматологии. Обеспечивает качественное и безболезненное лечение с улыбкой</p>
                                            <span class="DoctorsformPodrobnee">Подробнее</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctors_block_text--hover">
                                        <h4>Максим Шевченко Андреевич</h4>
                                        <p>Опытный врач со стажем работы 8 лет. Он обладает сертификатами по эстетической и терапевтической стоматологии, а также имеет обширный опыт в лечении различных заболеваний зубов. Его особенности – индивидуальный подход к каждому пациенту, способность создавать комфортную атмосферу в кабинете и профессионализм в лечении.</p>
                                        <span class="DoctorsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="doctors_block swiper-slide">
                                    <div class="content_doctors_block">
                                        <div class="photo "id="stomatolog5"></div>
                                        <div class="doctors_block_text">
                                            <h3>Алексей Попов Станиславович</h3>
                                            <div class="DoctorstextBackground">
                                            <p>Доктор с добрым сердцем и улыбкой. Специализируется на терапии и имплантации зубов. Внимательный к потребностям каждого пациента.</p>
                                            <span class="DoctorsformPodrobnee">Подробнее</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctors_block_text--hover">
                                        <h4>Алексей Попов Станиславович</h4>
                                        <p>Стаж работы 10 лет. Один из ведущих специалистов в области имплантации зубов. ЕОн успешно провел более ста имплантаций и реконструкций челюсти, приобретя признание и доверие среди своих пациентов. Достоинства: мастерство, заботливость, высокий профессионализм.</p>
                                        <span class="DoctorsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="doctors_block swiper-slide">
                                    <div class="content_doctors_block">
                                        <div class="photo "id="stomatolog6"></div>
                                        <div class="doctors_block_text">
                                            <h3>Ли Юн Су</h3>
                                            <div class="DoctorstextBackground">
                                            <p>Молодой стоматолог с огромным энтузиазмом и профессионализмом. Специализируется на эстетической стоматологии. Открыта к инновациям и заботлива к каждому пациенту.</p>
                                            <span class="DoctorsformPodrobnee">Подробнее</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="doctors_block_text--hover">
                                        <h4>Ли Юн Су</h4>
                                        <p>Молодой специалист с 5-летним стажем. Она стала признанным лидером среди новичков в стоматологической области благодаря своему уникальному подходу к пациентам и превосходным навыкам в лечении кариеса и эстетической стоматологии. Ее навыки в эстетической стоматологии и лечении кариеса принесли множество благодарных пациентов. Достоинства: энтузиазм, профессионализм, тщательность.</p>
                                        <span class="DoctorsformBack">Назад</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-button-next swiper-navBtn"></div>
                        <div class="swiper-button-prev swiper-navBtn"></div>
                    </div>
                    <a id="toothAppearDoctors" class="toothAppear" href="tel:+7911461093"></a>
                </div>
            </section>


            <section id="form_signup">
            
                <div class="formSignup">
                <dialog id="dialogWindow"></dialog>
                    <div class="container_form_signup">
                    <h2>Запишитесь на <strong><span>п</span><span>р</span><span>и</span><span>е</span><span>м</span></strong></h2>
                    <p>Заполните форму и мы свяжимся с вами для консутльтации.</p>
                    <form class="formSignup_buttons"  id="signup_form" method="POST" action="formSignUp.php">
                        <div class="formSignUpBlock">
                            <input type="text" placeholder="Ваше имя" id="name" name="name" autocomplete="off">
                            <div id="formSignupName"  class="error-message" ></div>
                        </div>
                        <div class="formSignUpBlock">
                            <input type="tel" placeholder="Ваш телефон" id="telephone" name="telephone" autocomplete="off">
                            <div id="formSignupTelephone"  class="error-message"></div>
                        </div>
                        <!-- <div class="disabledsignUp"> -->
                            <input type="button" value="Записаться на прием" id="signUp_form" name="signUp" disabled>
                        <!-- </div> -->
                    </form>
                    </div>
                </div>
            </section>


            <section id="comments">
                <div class="comments">
                    <h2>Отзывы клиентов</h2>  <a id="toothAppearComments" class="toothAppear" href="tel:+7911461093"></a>
                    <div class="container_comments">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="comments_block swiper-slide">
                                    <div class="content_comments_block_front">
                                        <img src="/images/girlBlue.png" alt="comments_img">
                                        <div class="comments_block_text">
                                            <h3>Морозова Настя</h3>
                                            <h4>
                                                <strong>Врач:</strong>  Астафьев Александр Петрович
                                            </h4>
                                            <p>
                                                Спасибо стоматологической клинике "Family" за невероятно теплый и профессиональный прием! <span class="CommentsformPodrobnee">читать полностью</span>
                                            </p>
                                        <div class="comments_block_data">
                                            <div class="data_comments">14.01.2024 14:13</div>
                                                <div id="commentsLike">
                                                    <span class="countLike">9</span>
                                                        <div class="heartComments">  
                                                            <svg viewbox="0 0 100 100">
                                                        <use xlink:href="#heart">
                                                    </svg>  
                                                </div>  
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="comments_block_behind">
                                            <h3>Морозова Настя</h3>
                                            <p>Я хочу выразить огромную благодарность стоматологической клинике 'Family' за теплый и профессиональный прием. Очень приятно было общаться с персоналом. После визита в клинику я почувствовала, что моя улыбка настоящая, благодаря профессионализму и заботе ваших специалистов.</p>
                                            <span class="CommentsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="comments_block swiper-slide">
                                    <div class="content_comments_block_front">
                                        <img src="/images/girlPink.png" alt="comments_img">
                                        <div class="comments_block_text">
                                            <h3>Королева Милла</h3>
                                            <h4>
                                                <strong>Врач:</strong>  Климова Мария Сидорова
                                            </h4>
                                            <p>
                                            Хочу выразить благодарность клинике “Family” за заботу о здоровье моей дочери! У вас прекрасная команда врачей. <span class="CommentsformPodrobnee">читать полностью</span>
                                            </p>
                                        <div class="comments_block_data">
                                            <div class="data_comments">12.01.2024 12:55</div>
                                                <div id="commentsLike">
                                                    <span class="countLike">5</span>
                                                        <div class="heartComments">  
                                                            <svg viewbox="0 0 100 100">
                                                        <use xlink:href="#heart">
                                                    </svg>  
                                                </div>  
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="comments_block_behind">
                                            <h3>Королева Милла</h3>
                                            <p>Большое спасибо клинике 'Family' за заботу о здоровье моей дочери! Ваша команда врачей не только профессионально оказывает медицинскую помощь, но и создает уютную и доверительную атмосферу, что делает посещение клиники приятным и безопасным для ребенка.</p>
                                            <span class="CommentsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="comments_block swiper-slide">
                                    <div class="content_comments_block_front">
                                        <img src="/images/grandYellow.jpeg" alt="comments_img">
                                        <div class="comments_block_text">
                                            <h3>Иван Соколов</h3>
                                            <h4>
                                                <strong>Врач:</strong>  Астафьев Александр Петрович
                                            </h4>
                                            <p>
                                            Выражаю искреннюю благодарность медицинской клинике 'Family' за профессионализм и заботу о моем здоровье!  <span class="CommentsformPodrobnee">читать полностью</span>
                                            </p>
                                        <div class="comments_block_data">
                                            <div class="data_comments">02.03.2024 18:10</div>
                                                <div id="commentsLike">
                                                    <span class="countLike">4</span>
                                                        <div class="heartComments">  
                                                            <svg viewbox="0 0 100 100">
                                                        <use xlink:href="#heart">
                                                    </svg>  
                                                </div>  
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="comments_block_behind">
                                            <h3>Иван Соколов</h3>
                                            <p>Выражаю искреннюю благодарность медицинской клинике 'Family' за профессионализм и заботу о моем здоровье! Врачи вашей клиники показали высочайший уровень компетенции и внимания к моим потребностям. Благодаря вам я чувствую себя намного лучше. Спасибо за вашу помощь!</p>
                                            <span class="CommentsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="comments_block swiper-slide">
                                    <div class="content_comments_block_front">
                                        <img src="/images/girlGreen.jpeg" alt="comments_img">
                                        <div class="comments_block_text">
                                            <h3>Анна Козлова</h3>
                                            <h4>
                                                <strong>Врач:</strong>  Астафьев Александр Петрович
                                            </h4>
                                            <p>
                                            Хочу выразить благодарность клинике'Family' за отличное обслуживание и заботу о моем здоровье! <span class="CommentsformPodrobnee">читать полностью</span>
                                            </p>
                                        <div class="comments_block_data">
                                            <div class="data_comments">22.02.2024 20:45</div>
                                                <div id="commentsLike">
                                                    <span class="countLike">3</span>
                                                        <div class="heartComments">  
                                                            <svg viewbox="0 0 100 100">
                                                        <use xlink:href="#heart">
                                                    </svg>  
                                                </div>  
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="comments_block_behind">
                                            <h3>Анна Козлова</h3>
                                            <p>Хочу выразить благодарность медицинскому центру 'Family' за отличное обслуживание и заботу о моем здоровье! Я пришла сюда с определенными проблемами и получила помощь на которую рассчитывала. Благодаря вам я снова чувствую себя здоровой и полной сил. Спасибо вам огромное!</p>
                                            <span class="CommentsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="comments_block swiper-slide">
                                    <div class="content_comments_block_front">
                                        <img src="/images/babyGrey.jpeg" alt="comments_img">
                                        <div class="comments_block_text">
                                            <h3>Наталья Ли</h3>
                                            <h4>
                                                <strong>Врач:</strong>  Астафьев Александр Петрович
                                            </h4>
                                            <p>
                                            Я, мать Томаса Ли, хотела бы выразить глубокую признательность клинике 'Family' за их заботу к моему сыну. <span class="CommentsformPodrobnee">читать полностью</span>
                                            </p>
                                        <div class="comments_block_data">
                                            <div class="data_comments">05.04.2024 09:10</div>
                                                <div id="commentsLike">
                                                    <span class="countLike">4</span>
                                                        <div class="heartComments">  
                                                            <svg viewbox="0 0 100 100">
                                                        <use xlink:href="#heart">
                                                    </svg>  
                                                </div>  
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="comments_block_behind">
                                            <h3>Наталья Ли</h3>
                                            <p>Я, мать Томаса Ли, хотела бы выразить глубокую признательность медицинской клинике 'Family' за их заботу и внимание к моему сыну. Ваша клиника продемонстрировала высокий уровень профессионализма и эмпатии. Спасибо за ваше внимание к мелочам и за вашу помощь!</p>
                                            <span class="CommentsformBack">Назад</span>
                                    </div>
                                </div>

                                <div class="comments_block swiper-slide">
                                    <div class="content_comments_block_front">
                                        <img src="/images/manGreen.jpeg" alt="comments_img">
                                        <div class="comments_block_text">
                                            <h3>Максим Николаев</h3>
                                            <h4>
                                                <strong>Врач:</strong>  Астафьев Александр Петрович
                                            </h4>
                                            <p>
                                                Большое спасибо клиники 'Family' за отличное обслуживание! За качественную медицинскую помощь. <span class="CommentsformPodrobnee">читать полностью</span>
                                            </p>
                                        <div class="comments_block_data">
                                            <div class="data_comments">07.01.2024 16:23</div>
                                                <div id="commentsLike">
                                                    <span class="countLike">8</span>
                                                        <div class="heartComments">  
                                                            <svg viewbox="0 0 100 100">
                                                        <use xlink:href="#heart">
                                                    </svg>  
                                                </div>  
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="comments_block_behind">
                                            <h3>Максим Николаев</h3>
                                            <p>Большое спасибо медицинскому центру 'Family' за отличное обслуживание! Я получил качественную медицинскую помощь и чувствую себя намного лучше благодаря вашей команде врачей. Высокий профессионализм и дружелюбное отношение создали положительное впечетления. Буду рекомендовать!</p>
                                            <span class="CommentsformBack">Назад</span>
                                    </div>
                                </div>

                            
                            </div>
                            <div class="swiper-scrollbar"></div>
                         </div>
                         
                    </div>
                </div>
            </section>
        </main>


        <footer>
            <section id="footer">
            <div class="footer_drop">
                <div class="dropdown_footer">
                    <h3 class="dropdown-heading" data-target="dropdown-menu1">Сайт<div class="strekaDropdown" id="strekaDropdown1"></div></h3>
                        <ul class="dropdown-menu1">
                            <li><a href="#aboutUs" class="dropdown_link">О клинике</a></li>
                            <li><a href="#clinic_services" class="dropdown_link">Услуги</a></li>
                            <li><a href="#doctors" class="dropdown_link">Врачи</a></li>
                            <li><a href="#comments" class="dropdown_link">Отзывы</a></li>
                        </ul>
                </div>
                <div class="dropdown_footer">
                    <h3 class="dropdown-heading" data-target="dropdown-menu2">О нас<div class="strekaDropdown" id="strekaDropdown2"></div></h3>
                        <ul class="dropdown-menu2">
                            <li><strong>Телефон:</strong> 8 (911) 465-10-93</li>
                            <li><strong>Адрес:</strong> г. Калининград ул. Горького 12</li>
                            <li><strong>Почта: </strong>familyClinic@gmail.com</li>
                            <li style="height: 80px;">
                            09:00 - 20:00 (пн-чт)<br>
                            10:00 - 18:00 (пт-вс)
                            </li>
                        </ul>
                </div>
            </div>
                <div class="footer_logo">
                    <div id="logo"></div>
                    <p>©2024 FAMILY CLINIC</p>
                </div>
                <div class="footer_menu">
                    <div class="footer_links">
                        <a href="#aboutUs" class="footer_link">О клинике</a>
                        <a href="#clinic_services" class="footer_link">Услуги</a>
                        <a href="#doctors" class="footer_link">Врачи</a>
                        <a href="#comments" class="footer_link">Отзывы</a>
                    </div>
                    <div class="footer_socials">
                        <a class="social__icon youtube" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank">
                            <i class="fab fa-youtube"></i>
                          </a>
                          <a class="social__icon vk" href="https://vk.com/halkkakaxa" target="_blank">
                            <i class="fab fa-vk"></i>
                          </a>
                          <a class="social__icon telegram" href="https://t.me/familyyClinic" target="_blank">
                            <i class="fab fa-telegram"></i>
                          </a>
                    </div>
                </div>
                <div id="toothUp"></div>
                <div class="footer_panels">
                    <a id="telFooter" href="tel:+79114651093">8 (911) 465-10-93</a>
                    <a class="adress" href="https://www.google.ru/maps/place/%D1%83%D0%BB.+%D0%93%D0%BE%D1%80%D1%8C%D0%BA%D0%BE%D0%B3%D0%BE,+12,+%D0%9A%D0%B0%D0%BB%D0%B8%D0%BD%D0%B8%D0%BD%D0%B3%D1%80%D0%B0%D0%B4,+%D0%9A%D0%B0%D0%BB%D0%B8%D0%BD%D0%B8%D0%BD%D0%B3%D1%80%D0%B0%D0%B4%D1%81%D0%BA%D0%B0%D1%8F+%D0%BE%D0%B1%D0%BB.,+236029/@54.7242011,20.5070721,17z/data=!3m1!4b1!4m6!3m5!1s0x46e315fde26f0169:0x67c9500996ac6dcf!8m2!3d54.724198!4d20.509647!16s%2Fg%2F11cscxdmwq?hl=ru&entry=ttu" target="_blank">г. Калининград ул. Горького 12</a>
                    <a class="email" href="mailto:familyClinic@gmail.com">familyClinic@gmail.com</a>
                </div>
                <div class="footer_timesButton">
                    <p>
                        09:00 - 20:00 (пн-чт)<br>
                        10:00 - 18:00 (пт-вс)
                    </p>
                    <div class="button_footer">
                        <span></span>
                        Заказать звонок
                        <span></span>
                    </div>
                </div>
                <div id="name768"></div>
            
            </section>
        </footer>
      
        <script src="/js/swiper-bundle.min.js"></script>
        <script src="/js/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="/js/scriptJquery.js"></script>
        <script src="/js/script.js"></script>

</body>
</html>


