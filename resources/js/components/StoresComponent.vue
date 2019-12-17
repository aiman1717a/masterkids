<template>
    <div class="section-store container">
        <div class="row">
            <div class="col">
                <div class="title-area">
                    <h3 class="title">Our Stores</h3>
                    <div class="title-border"></div>
                </div>
            </div>
        </div>
        <div v-for="store in stores" v-bind:key="store.id">
            <store-component :store="store"></store-component>
            <hr>
        </div>
    </div>
</template>
<script>
    import StoreComponent from '../components/StoreComponent.vue';

    export default {
        components:{
            StoreComponent
        },
        data() {
            return {
                stores: [
                    {
                        id: 1,
                        name: 'Master Kids 1',
                        address1: 'Hillaaly Magu',
                        address2: 'Male',
                        mapslink: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4732.141763094588!2d73.50327016871732!3d4.172957540840954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b3f7e53dfadd505%3A0xcc6872f662354d46!2sMaster%20Kids!5e0!3m2!1sen!2smv!4v1572240313969!5m2!1sen!2smv'
                    },
                    {
                        id: 2,
                        name: 'Master Kids 2',
                        address1: 'Hirudhu Magu',
                        address2: 'Hulhumale',
                        mapslink: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.240668518525!2d73.51036169822058!3d4.173031849526583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b3f7e5600e68e81%3A0x7b18ae50079071cf!2sPet%20Master%202!5e0!3m2!1sen!2smv!4v1571915789028!5m2!1sen!2smv'
                    }
                ]
            }
        },
    }
</script>
