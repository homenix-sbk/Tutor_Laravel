<template>
    <v-app>
        <Header />
        <div id="wrapper" class="fade-in">
            <RouterView />
        </div>
        <Footer />
    </v-app>
</template>
<script>
import Header from './components/Header.vue'
import Footer from './components/Footer.vue'

export default {
    components: {
        Header,
        Footer,
    },
}
</script>
