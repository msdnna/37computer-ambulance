<template>
    <div>
        <navigation-component></navigation-component>
        <transition name="slide-fade">
            <router-view></router-view>
        </transition>
    </div>
</template>

<script>
    import NavigationComponent from './NavigationComponent.vue'
    export default {
        components: { NavigationComponent },
        mounted() {
            console.log('Component mounted.');

        }
    }
</script>
