<template>
    <div class="product">
        <div class="product-thumbnail">
            <a href="#">
                <img v-bind:src="'http://api.aimanapi.test/storage/images/'+product.image" class="embed-responsive-item" alt="Not Found">
            </a>
            <div class="overlay">
                <a href="#">
                    <i class="material-icons">
                        search
                    </i>
                </a>

                <a href="#">
                    <i class="material-icons">
                        favorite_border
                    </i>
                </a>
                <a href="#">
                    <i class="material-icons">
                        add_shopping_cart
                    </i>
                </a>
            </div>
        </div>
        <div class="product-content">
            <a href="#">
                <div class="product-title" v-text="product.name">

                </div>
                <div class="product-price" v-text="product.price">

                </div>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            product: {
                type: Object,
                required: false
            }
        },
        mounted () {
            console.log('itemcomponent');
        }
    }
</script>
