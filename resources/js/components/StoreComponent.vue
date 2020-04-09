<template>
    <div class="row">
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
</template>

<script>
    export default {
        props: {
            store: {
                type: Object,
                required: false
            }
        },
        mounted () {
            console.log('store component mounted');
        }
    }
</script>

<style lang="scss">
    $colors: (
        light-text: #ffffff,
        dark-text: #878787,
        circle: #DB243A,

    );

    @function getColor($color-name){
        @return map-get($colors, $color-name);
    }

    // Store
    .section-store{
        text-align: center;
        .store-area{
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: flex-start;
            .left{
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                .circle{
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    text-align: center;
                    color: getColor(light-text);
                    background-color: getColor(circle);
                    min-height: 50px;
                    min-width: 50px;
                    border-radius: 50%;
                }
            }
            .store-address{
                display: flex;
                flex-direction: column;
                align-items: flex-start;
                min-height: 150px;

                .store-name, .store-location-1, .store-location-2{
                    height: 50px;
                    color: getColor(dark-text);
                    white-space: nowrap;
                    padding: 0px 20px 0px 20px;
                    display: flex;
                    align-items: center;
                    &:hover{
                        animation: all 2s;
                        opacity: 0.5;
                    }
                }
                .store-name{
                    font-weight: 200;
                }
                .store-location-1{
                    font-style: italic;
                }
            }
        }
    }
</style>
