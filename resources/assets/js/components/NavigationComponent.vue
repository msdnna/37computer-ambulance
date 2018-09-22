<template>
    <nav class="navbar navbar-expand-lg navbar-dark black-filled-color">
        <div class="container">
            <i id="icon" class="site-logo fa fa-ambulance" style="text-shadow: rgb(140, 14, 14) 0 0 0, rgb(148, 15, 15) 1px 1px 0, rgb(155, 15, 15) 2px 2px 0, rgb(163, 16, 16) 3px 3px 0, rgb(170, 17, 17) 4px 4px 0, rgb(178, 18, 18) 5px 5px 0, rgb(185, 19, 19) 6px 6px 0, rgb(193, 19, 19) 7px 7px 0; font-size: 32px; color: rgb(250, 250, 250); height: 50px; width: 50px; line-height: 50px; border-radius: 0; text-align: center; background-color: rgb(200, 20, 20);"></i>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul id="navbar-menu" class="navbar-nav mr-auto">
                    <li class="nav-item"><router-link class="nav-link" active-class="selected-link" exact v-bind:to="{ name: 'HomePage' }">Главная</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" active-class="selected-link" v-bind:to="{ name: 'ServicesPage' }">Услуги и цены</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" active-class="selected-link" v-bind:to="{ name: 'ReviewsPage' }">Отзывы</router-link></li>
                    <li class="nav-item"><router-link class="nav-link" active-class="selected-link" v-bind:to="{ name: 'ContactsPage' }">Контакты</router-link></li>
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item"><a href="#" class="nav-link">+7 (963) 151-44-22</a></li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "NavigationComponent"
    }
</script>
