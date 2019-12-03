<template>
    <div>
        <div class="row" v-for="store in stores" v-bind:key="store.id">
            <div class="col-12 col-md-4">
                <div class="store-area">
                    <div class="left">
                        <div class="circle" v-text="store.id"></div>
                    </div>
                    <div class="store-address">
                        <h4 class="store-name" v-text="store.name"></h4>
                        <p class="store-location-1" v-text="store.address1"></p>
                        <p class="store-location-2" v-text="store.address2"></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-8">
                <iframe v-bind:src="store.mapslink" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
        <hr>
    </div> 
</template>
<script>
    export default {
        name: 'Store',
        props: ['stores'],
    }
</script>