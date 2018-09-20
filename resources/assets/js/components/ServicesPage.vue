<template id="services-page">
    <main>
        <div class="container">
            <!--<section>
                <div style="height:100px"></div>
                <h3 class="h3 text-center mb-5">Услуги</h3>
                <div class="row wow fadeIn mb-5 mt-2">
                    <div class="col-lg-6 col-md-5 px-4" v-for="(page) in filteredServices">
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fa fa-check-square fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">{{ page.title }}</h5>
                                <p class="grey-text">{{ page.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>-->
            <section>
                <h2 class="my-4 h3 text-center con-page-title">УСЛУГИ</h2>
                <div class="row features-small wow fadeIn">
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 pl-3 con-text">
                                <h5 class="feature-title font-bold con-title con-title-row-1">РЕМОНТ КОМПЬЮТЕРОВ</h5>
                                <p class="grey-text con-desc con-desc-row-1">Осуществляем ремонт персональных компьютеров на дому с бесплатным выездом специалиста.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-1">От 200 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-desktop fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-1">РЕМОНТ НОУТБУКОВ</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-1">Осуществляем ремонт ноутбуков и нетбуков. Заменим неисправные комплектующие в короткие сроки.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-1">От 500 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-laptop fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-1">РЕМОНТ ПЛАНШЕТОВ</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-1">При наличии у нас необходимого модуля, наш специалист заменит его на дому за несколько минут.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-1">От 500 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-tablet fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-1">РЕМОНТ ТЕЛЕФОНОВ</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-1">Впервые в Иваново мы предоставляем клиентам возможность ремонта сотовых телефонов на дому.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-1">От 700 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-mobile-phone fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 pl-3 con-text">
                                <h5 class="feature-title font-bold con-title con-title-row-2">УСТАНОВКА, НАСТРОЙКА И ОБНОВЛЕНИЕ СИСТЕМЫ</h5>
                                <p class="grey-text con-desc con-desc-row-2">Установка, настройка и обновление операционных систем Windows, Linux, macOS на Вашем устройстве.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-2">От 250 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-download fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-2">УСТАНОВКА, НАСТРОЙКА И ОБНОВЛЕНИЕ ПРОГРАММ</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-2">Установка программного обеспечения на Ваше устройство, настройка и обновление программного обеспечения.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-2">От 270 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-database fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-2">УСТАНОВКА АНТИВИРУСНОЙ ЗАЩИТЫ, ПОИСК ВИРУСОВ</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-2">Установка антивирусного программного обеспечения, поиск вирусов на Вашем устройстве.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-2">От 100 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-shield fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-2">ВОССТАНОВЛЕНИЕ РАБОТОСПОСОБНОСТИ ПК</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-2">Удаление вирусов, баннеров, нежелательных программ с Вашего устройства. Профилактика системы.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-2">От 220 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-unlock fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 pl-3 con-text">
                                <h5 class="feature-title font-bold con-title con-title-row-3">УСТАНОВКА И НАСТРОЙКА ТЕЛЕКОМ-ОБОРУДОВАНИЯ</h5>
                                <p class="grey-text con-desc con-desc-row-3">Подключение Ваших устройств к сети Интернет. Настройка роутера/модема. Настройка сервисов.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-3">От 500 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-server fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-3">ВОССТАНОВЛЕНИЕ УТЕРЯННЫХ (УДАЛЕННЫХ) ДАННЫХ</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-3">Восстановление утерянных данных с жесткого диска, настройка резервного копирования.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-3">От 300 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-save fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-3">ПОМОЩЬ ПРИ ПОКУПКЕ НОВОГО УСТРОЙСТВА</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-3">Консультация специалиста в выборе нового устройства. Помощь со сборкой ПК, ноутбука.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-3">От 200 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-user fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 con-block">
                        <div class="row">
                            <div class="col-10 mb-2 pl-3 con-text">
                                <h5 class="feature-title font-bold mb-1 con-title con-title-row-3">СОЗДАНИЕ И РАСКРУТКА САЙТОВ</h5>
                                <p class="grey-text mt-2 con-desc con-desc-row-3">Создание сайтов на популярных веб-фреймворках. Раскрутка сайтов в поисковых системах.</p>
                                <h5 class="feature-title font-bold con-price con-price-row-3">От 100 руб.</h5>
                            </div>
                            <div class="col-2 mr-1 con-icon-hide blue-background"></div>
                            <div class="col-2 mr-1 con-icon">
                                <i class="fa fa-sitemap fa-2x white-text con-icon-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</template>

<script>
    export default {
        name: "ServicesPage"
    }
</script>
