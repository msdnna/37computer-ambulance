<template id="home-page">
    <div>
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.75s">
                        <h1 class="h1-responsive font-weight-bold mt-sm-5 h1-custom-ca">РЕМОНТ КОМПЬЮТЕРОВ В ИВАНОВО. <br/>СКОРАЯ КОМПЬЮТЕРНАЯ ПОМОЩЬ НА ДОМУ. <br/>РЕМОНТ НОУТБУКОВ, ПЛАНШЕТОВ, СОТОВЫХ ТЕЛЕФОНОВ НА ДОМУ. <br/>СОЗДАНИЕ И РАСКРУТКА САЙТОВ.</h1>
                        <hr class="hr-light" style="border: none; color: #1478c8!important; background-image: linear-gradient(90deg, transparent, #1478c8, transparent)!important; height: 1px;">
                        <h6 class="mb-4 h6-custom-ca">Широкий спектр услуг по ремонту компьютеров, ноутбуков, планшетов, сотовых телефонов. Установка и настройка операционных систем, программного обеспечения, защита компьютера. Настройка и конфигурация телекоммуникационного оборудования, доступ в сеть Интернет. Создание и продвижение веб-сайтов в кротчайшие сроки.</h6>
                        <router-link class="btn btn-custom-ca purple-gradient" v-bind:to="{ name: 'ServicesPage' }">Перейти к описанию услуг и прайс-листу</router-link>
                        <router-link class="btn btn-custom-ca aqua-gradient" v-bind:to="{ name: 'ContactsPage' }">Как с нами связаться</router-link>
                    </div>
                    <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.75s">
                        <img src="http://37computer-ambulance.ru/img/ca_banner.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "HomePage"
    }
</script>
