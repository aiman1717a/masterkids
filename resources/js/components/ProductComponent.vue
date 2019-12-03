<template>
    <div class="row contents product-row">
        <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 item" v-for="product in products" v-bind:key="product.id">
            <div class="product">
                <div class="product-thumbnail">
                    <a href="#">
                        <img v-bind:src="product.link" class="embed-responsive-item" alt="Not Found">
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
                        <div class="product-title" v-text="product.title">

                        </div>
                        <div class="product-price" v-text="product.price">

                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Product',
        props: ['products'],
    }
</script>