<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sdelka</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .itc-slider__item {
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
            height: 250px;
            margin-right: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgba(255,255,255, 0.8);
            font-size: 7rem;
        }
    </style>
</head>
<body>
<header>
    <div class="header_container">
        <div class="logo">
            <a href="{{route('main')}}">
                <img src="{{asset('/images/logo.png')}}" alt="">
            </a>
        </div>
        <nav>
            <ul class="navbar">
                <li><a href="#main" class="active">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Наши преимущества</a></li>
                <li><a href="#">Вакансии</a></li>
                <li><a href="#">Прайс</a></li>
                <li><a href="#">Предложения</a></li>
                <li><a href="#">Агенты</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Связь с нами</a></li>
            </ul>
        </nav>
    </div>
</header>
<main class="container-sm flex-wrap">

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3500">

                <section id="main" style="margin-bottom: 120px;">
                    <div class="main_container">
                        <div class="content">
                            <div class="main_text">
                                <h4>- Перемены к лучшему!</h4>
                                <h3>ТОП 3 ЛУЧШИХ СПЕЦИАЛИСТОВ ПО НЕДВИЖИМОСТИ</h3>
                                <p>Лучшие агенты которые помогут найти для вас подхлдящую недвижимость в кратчайшие сроки!</p>
                                @foreach($buttons->where('slider_id', 1) as $button)
                                    <a href="">{{$button->button_name}}</a>
                                @endforeach
                            </div>
                            <div class="main_img">
                                <img src="{{asset('/images/main_image.png')}}" alt="" height="100%">
                            </div>
                        </div>
                    </div>
                </section>


            </div>
            <div class="carousel-item" data-bs-interval="3500">

                <section id="main">
                    <div class="main_container">
                        <div class="content">
                            <div class="main_text">
                                <h3>ПРОФЕССИОНАЛЬНЫЕ РИЭЛТОРСКИЕ УСЛУГИ ПО АСТАНЕ</h3>
                                <p>Найдем покупателей за 14 дней и продадим Вашу квартиру на 10% дороже рынка</p>
                                @foreach($buttons->where('slider_id', 2) as $button)
                                    <a href="">{{$button->button_name}}</a>
                                @endforeach
                            </div>
                            <div class="main_img">
                                <img src="{{asset('/images/main_image.png')}}" alt="" height="100%">
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <section id="about">
        <div class="about_container">
            <div class="content">
                <div class="about_img">
                    <img src="{{asset('/images/about.png')}}" alt="" height="100%">
                </div>
                <div class="about_text">
                    <h3>О Нас</h3>
                    <p>Мы успешно работает на рынке недвижимости с 2017 года.
                        За это время мы зарекомендовали себя как надежное, успешное и современное агентство недвижимости.
                        Мы каждый день улучшаем наш сервис, получая обратную связь от клиентов и партнеров.
                        Наша цель - в недалекой перспективе стать агентством недвижимости №1 в сервисе и заботе о клиенте!</p>
                    <a href="#">Получить консультацию</a>
                </div>
            </div>
        </div>
    </section>

    <section id="about_nums">
        <div class="about_nums_container">
            <div class="content">
                <div class="title">
                    Немного о нас</br>в цифрах
                </div>
                <div class="description">
                    <div>
                        <p class="first">2017</p>
                        <p class="second">Год выхода<br/>на рынок</p>
                    </div>
                    <div>
                        <p class="first">10+</p>
                        <p class="second">Опыта работы<br/>наших сотрудников</p>
                    </div>
                    <div>
                        <p class="first">98%</p>
                        <p class="second">Клиентов остались<br/>довольны нашими<br/>услугами</p>
                    </div>
                    <div>
                        <p class="first">70+</p>
                        <p class="second">Специалистов<br/>в команде</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="advantages">
        <div class="advantages_container">
            <div class="content">
                <div class="title">
                    <h3>Наши Преимущества</h3>
                    <p>Почему вам нужно выбрать именно нас?</p>
                </div>
                <div class="cards">
                    <div class="card-1 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-1.png')}}" alt="">
                            <h3>Никаких переплат</h3>
                            <p>Оплата по факту завершения сделки</p>
                        </div>
                    </div>
                    <div class="card-2 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-2.png')}}" alt="">
                            <h3>Проверка документов</h3>
                            <p>Правовой анализ документов на недвижимость</p>
                        </div>
                    </div>
                    <div class="card-1 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-3.png')}}" alt="">
                            <h3>Оценка</h3>
                            <p>Экспресс оценка недвижимости</p>
                        </div>
                    </div>
                    <div class="card-1 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-4.png')}}" alt="">
                            <h3>Профессиональная съемка</h3>
                            <p>Профессиональная фото видеосъёмка</p>
                        </div>
                    </div>
                    <div class="card-2 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-5.png')}}" alt="">
                            <h3>Коммуникабельность</h3>
                            <p>Взаимодействуем со всеми агентствами в городе</p>
                        </div>
                    </div>
                    <div class="card-1 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-6.png')}}" alt="">
                            <h3>Подбор недвижимости</h3>
                            <p>Точечный подбор недвижимости</p>
                        </div>
                    </div>
                    <div class="card-1 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-7.png')}}" alt="">
                            <h3>Технические задачи</h3>
                            <p>Бесплатное оформление задатков, и организация сделок</p>
                        </div>
                    </div>
                    <div class="card-2 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-8.png')}}" alt="">
                            <h3>Коммуникабельность</h3>
                            <p>Взаимодействуем со всеми агентствами в городе</p>
                        </div>
                    </div>
                    <div class="card-1 flex-item">
                        <div class="wrapper">
                            <img src="{{asset('/images/benefits-icon-9.png')}}" alt="">
                            <h3>Технические задачи</h3>
                            <p>Бесплатное оформление задатков, и организация сделок</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="partners">
        <div class="partners_container">
            <div class="content">
                <h3>Наши партнеры</h3>
                <h4>Государственные органы</h4>
                <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                    <div class="itc-slider__wrapper">
                        <div class="itc-slider__items">
                            @foreach($partners->where('role', 'Государственные органы') as $partner)
                                <div class="itc-slider__item">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($partner->logo)}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button class="itc-slider__btn itc-slider__btn_prev"></button>
                    <button class="itc-slider__btn itc-slider__btn_next"></button>
                </div>
                <h4>Застройщики</h4>
                <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                    <div class="itc-slider__wrapper">
                        <div class="itc-slider__items">
                            @foreach($partners->where('role', 'Застройщики') as $partner)
                                <div class="itc-slider__item">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($partner->logo)}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button class="itc-slider__btn itc-slider__btn_prev"></button>
                    <button class="itc-slider__btn itc-slider__btn_next"></button>
                </div>
                <h4>Банки</h4>
                <div class="itc-slider" data-slider="itc-slider" data-loop="false" data-autoplay="false">
                    <div class="itc-slider__wrapper">
                        <div class="itc-slider__items">
                            @foreach($partners->where('role', 'Банки') as $partner)
                                <div class="itc-slider__item">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($partner->logo)}}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button class="itc-slider__btn itc-slider__btn_prev"></button>
                    <button class="itc-slider__btn itc-slider__btn_next"></button>
                </div>
            </div>
        </div>
    </section>

    <section id="best_estate">
        <div class="best_estate_container">
            <div class="content">
                <img src="{{asset('/images/best_estate.png')}}" alt="" style="border-radius: 16px;" height="100%" width="auto">
                <div class="description">
                    <h3>Мы поможем Вам найти лучшие объекты недвижимости</h3>
                    <p>Мы просеиваем и обрабатываем десятки и сотни объявлений о продаже, избавляя вас от необходимости тратить время впустую на просмотр заведомо несуществующих вариантов или тех, где есть «подводные камни».</p>
                    <a href="">Связаться</a>
                </div>
            </div>
        </div>
    </section>

    <section id="appartment">
        <div class="appartment_container">
            <div class="content">
                <div class="first_type">
                    <div class="wrapper">
                        <h4>Квартиры на
                            вторичном рынке</h4>
                        <p>Приобретение жилья на вторичном рынке предлагает больше возможностей в плане выбора квартиры в понравившемся районе, в удобной доступности к месту работы.</p>
                        <div class="apparts_numbers">
                            <img src="{{asset('/images/check.png')}}" alt="">
                            <div class="description">
                                <div>до 40.000.000 тенге</div>
                                <div class="description_second">400.000 тенге</div>
                            </div>
                        </div>
                        <div class="apparts_numbers">
                            <img src="{{asset('/images/check.png')}}" alt="">
                            <div class="description">
                                <div>до 40.000.000 тенге</div>
                                <div class="description_second">1% от стоимости недвижимости</div>
                            </div>
                        </div>
                        <a href="" class="btn_appartment">Выбрать</a>
                    </div>
                </div>
                <div class="second_type">
                    <div class="wrapper">
                        <h4>Коммерческая недвижимости
                            на вторичном рынке, частные
                            дома, земельные участки</h4>
                        <p>Благоустройство. В большинстве случаев близлежащая территория окончательно благоустроена, на ней не ведутся строительные и монтажные работы.</p>
                        <div class="apparts_numbers">
                            <img src="{{asset('/images/check-light.png')}}" alt="">
                            <div class="description">
                                <div>До 20 000 000 тенге</div>
                                <div class="description_second">400 000 тенге</div>
                            </div>
                        </div>
                        <div class="apparts_numbers">
                            <img src="{{asset('/images/check-light.png')}}" alt="">
                            <div class="description">
                                <div>От 20 000 000 тенге</div>
                                <div class="description_second">2% от стоимости недвижимости</div>
                            </div>
                        </div>
                        <a href="" class="btn_appartment">Выбрать</a>
                    </div>
                </div>
                <div class="first_type">
                    <div class="wrapper">
                        <h4>Аренда недвижимости</h4>
                        <p>Аренда не предполагает передачу объекта недвижимости в собственность. При аренде объекта недвижимости арендодатель обязуется предоставить арендатору объект недвижимости за арендную плату во временное владение и пользование или только во временное пользование.</p>
                        <div class="apparts_numbers">
                            <img src="{{asset('/images/check.png')}}" alt="">
                            <div class="description">
                                <div>До 100 000 тенге</div>
                                <div class="description_second">30 000 тенге</div>
                            </div>
                        </div>
                        <div class="apparts_numbers">
                            <img src="{{asset('/images/check.png')}}" alt="">
                            <div class="description">
                                <div>От 100 000 тенге</div>
                                <div class="description_second">30% от стоимости недвижимости</div>
                            </div>
                        </div>
                        <a href="" class="btn_appartment">Выбрать</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hot_offers">
        <div class="hot_offers_container">
            <div class="content">
                <h3>Горячие Предложения</h3>
                <div class="cards">
                    @foreach($apartments as $apartment)
                        <div class="card">
                            <div class="for_sale_wrapper">
                                @if($apartment->type == 'arenda')
                                    <div class="for_arenda">
                                        В аренду
                                    </div>
                                @elseif($apartment->type == 'sale')
                                    <div class="for_sale">
                                        Продается
                                    </div>
                                @endif
                            </div>
                            <img src="{{\Illuminate\Support\Facades\Storage::url($apartment->image)}}" style="width: 18rem;">
                            <div class="info">
                                <h4>{{$apartment->title}}</h4>
                                <h5>{{$apartment->description}}</h5>
                                <p>{{$apartment->salary}}</p>
                                <a href="{{$apartment->link}}">Подробнее</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$apartments->links(null, [], 'hot_offers')}}
            </div>
        </div>
    </section>

    <section id="team">
        <div class="team_container">
            <div class="content">
                <h3>Специалисты По Недвижимости</h3>
                <div class="cards">
                    @foreach($consumers as $consumer)
                        <div class="card">
                            <div class="img_wrapper">
                                <img src="{{Storage::url($consumer->avatar)}}" alt="">
                            </div>
                            <h4>{{$consumer->name}}</h4>
                            <div class="phone">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.894 22.239C12.876 22.239 9.325 20.637 6.343 17.657C1.585 12.898 0.343003 6.68601 3.515 3.51401C4.452 2.57801 5.592 2.00801 6.907 1.81801L7.667 1.70801L10.464 8.23001L7.667 9.62801C8.315 10.856 9.297 12.125 10.586 13.414C11.815 14.643 13.083 15.618 14.356 16.31L15.67 13.737L22.153 14.663L22.191 15.49C22.286 17.549 21.696 19.276 20.485 20.486C19.301 21.67 17.692 22.239 15.894 22.239ZM6.461 3.97201C5.886 4.16501 5.372 4.48601 4.929 4.93001C2.629 7.22901 3.925 12.41 7.757 16.243C11.591 20.076 16.771 21.369 19.071 19.071C19.837 18.305 20.113 17.295 20.181 16.401L16.814 15.92L16.168 17.214C15.924 17.702 15.503 18.061 14.982 18.224C14.461 18.389 13.883 18.33 13.399 18.067C11.959 17.284 10.536 16.194 9.171 14.829C7.741 13.399 6.642 11.97 5.903 10.581C5.646 10.096 5.597 9.54201 5.763 9.02001C5.929 8.50101 6.288 8.08201 6.775 7.83801L7.881 7.28501L6.461 3.97201Z" fill="#123763"/>
                                </svg>
                                +{{$consumer->phone}}
                            </div>
                            <div class="position">
                                <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <rect width="28" height="28" fill="url(#pattern0)"/>
                                    <defs>
                                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                            <use xlink:href="#image0_1_1238" transform="scale(0.00195312)"/>
                                        </pattern>
                                        <image id="image0_1_1238" width="512" height="512" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAACXBIWXMAAA3XAAAN1wFCKJt4AAAE7mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNy4yLWMwMDAgNzkuNTY2ZWJjNSwgMjAyMi8wNS8wOS0wNzoyMjoyOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0RXZ0PSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VFdmVudCMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIDIzLjQgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMy0wMS0xM1QwNDoyNDo0NyswNjowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjMtMDEtMTNUMDQ6Mjk6MjcrMDY6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMDEtMTNUMDQ6Mjk6MjcrMDY6MDAiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjc1N2ZlYWU0LTYzYWYtMjg0MS1hNmYzLTEzNDA0NWJkYjkwNCIgeG1wTU06RG9jdW1lbnRJRD0i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"/>
                                    </defs>
                                </svg>
                                {{$consumer->role}}
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$consumers->links(null, [], 'team')}}
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="blog_container">
            <div class="content">
                <div class="title">
                    <h3>Новости недвижимости</h3>
                    <a href="">Больше новостей</a>
                </div>
                <div class="cards">
                    <div class="card">
                        <div class="img_wrapper">
                            <img src="{{asset('images/blog_placeholder.png')}}" alt="">
                        </div>
                        <div class="blog_wrapper">
                            <div class="blog_content">
                                <h4>Отбасы банк продлил срок приёма заявок на компенсацию по вкладам</h4>
                                <p>С 10 часов утра 12 января подать заявку вкладчики смогут тремя способами.</p>
                                <a href="">Читать дальше</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="insta_reels">
        <div class="content">
            <h3>Следите за нами в instagram</h3>
            <div class="reels">
                <div class="inst_container">
                    @foreach($instagramReels as $instagramReel)
                        <div class="inst_wrapper">
                            <div class="reel">
                                {!! $instagramReel->instagram_reels !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="mt-4">
            {{$instagramReels->links(null, [], 'insta_reels')}}
        </div>
    </section>

    <section id="hire">
        <div class="hire_container">
            <div class="content">
                <h4>Стань агентом недвижимостии начни зарабатывать уже сейчас</h4>
                <p>Скорее присоединяйтесь к нашему дружелюбному и профессиональному коллективу<br/>
                    и получи шанс стать финансово независимым</p>
                <a href="">Оставить заявку</a>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="contact_container">
            <h4>Свяжитесь с нами!</h4>
            <p>Заполните форму ниже, чтобы связаться с нами</p>
            <form action="{{route('contact-form')}}" method="post">
                @csrf
                <div class="name">
                    <div class="item">
                        <label for="fname">Имя</label><br/>
                        <input type="text" id="fname" name="name" placeholder="Введите здесь свое имя">
                    </div>

                    <div class="item">
                        <label for="sname">Фамилия</label><br/>
                        <input type="text" id="sname" name="last_name" placeholder="Введите здесь свою фамилию">
                    </div>
                </div>
                <div class="email">
                    <label for="email">Email</label><br/>
                    <input type="email" id="email" name="email" placeholder="Введите свой адрес электронной почты здесь">
                </div>
                <div class="message">
                    <label for="message">Сообщение</label><br/>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Пишите свое сообщения здесь"></textarea>
                </div>
                <button type="submit">Отправить</button>
            </form>
        </div>
    </section>

    <section id="map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0c6a1ac2be9b04afd944e7cd37cc98d3e7f26a011f718942162367d0690f1672&amp;source=constructor" width="100%" height="700" frameborder="0"></iframe>
    </section>

    <section id="our_office">
        <div class="our_office_container">
            <h4>Наш офис</h4>
            <p>Место где мы стараемся для вас, так же ждем вас.<br>Совершаем самые безопасные сделки!</p>
            <div class="cards">
                <div class="card">
                    <div class="img_wrapper">
                        <img src="{{asset('images/our_office_placeholder.png')}}" alt="">
                        <div class="hover_wrapper">
                            <div class="hoverEffect">
                                <div class="team_show">
                                    <a href="">Посмотреть<br>на карте</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text_wrapper">
                        <div class="text">
                            <p>Г.Астана</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img_wrapper">
                        <img src="{{asset('images/our_office_placeholder.png')}}" alt="">
                        <div class="hover_wrapper">
                            <div class="hoverEffect">
                                <div class="team_show">
                                    <a href="">Посмотреть<br>на карте</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img_wrapper">
                        <img src="{{asset('images/our_office_placeholder.png')}}" alt="">
                        <div class="hover_wrapper">
                            <div class="hoverEffect">
                                <div class="team_show">
                                    <a href="">Посмотреть<br>на карте</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text_wrapper">
                        <div class="text">
                            <p>Кенесары 12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="footer_container">
        <h3>@2022 Butter Fly Agency. All rights reserved.</h3>
    </div>
</footer>
</body>
</html>
