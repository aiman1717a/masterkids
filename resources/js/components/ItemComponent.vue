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

<style lang="scss">
    @import "./../../sass/imports/my_variables";
    @import "./../../sass/imports/my_functions";

    //Product Card
    .product{
        position: relative;
        background: white;
        overflow: hidden;
        &:hover{
            box-shadow: 0px 0px 20px 2px getColor(card-hover);
            z-index: 1;
            .overlay{
                opacity: 1;
            }
            img{
                transition: all getAnimationSpeed(zoom-in) ease;
                transform: scale(1.1, 1.1);
            }
        }
        &:not(:hover){
            img{
                transition: all getAnimationSpeed(zoom-out) ease;
            }
        }

        &-thumbnail{
            border: 20px solid transparent;
            img{
                width: 100%;
                object-fit: cover;
                object-position: center center;
            }
            .overlay{
                position: absolute;
                top: 7px;
                left: 7px;
                padding: 5px;

                transition: opacity getAnimationSpeed(icons) ease-in;
                opacity: 0;
                a{
                    display: block;
                    padding: 5px;
                }
                .material-icons{
                    border-radius: 3px;

                    color: getColor(light-text) !important;
                    background-color: getColor(card-icon-bg);
                    padding: 10px;
                    transition: all .2s;
                    font-size: calc(18px + 0.01vw);
                    &:hover{
                        background-color: getColor(card-icon-hover);
                        font-size: calc(18px + 0.50vw);
                    }
                }
            }
        }


        &-content {
            width: 100%;
            padding: .5rem 1rem;
            transition: all .2s ease;

            a {
                text-decoration: none !important;
                color: #202927;
            }

            & .product-title {
                font-size: 1rem;
                font-weight: 500;
                text-align: center;
                color: getColor(card-name);
                // line-height: padding 1px;
            }

            & .product-price {
                font-size: 1rem;
                font-weight: 800;
                letter-spacing: 1px;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                text-align: center;
                color: getColor(card-price);
            }
        }
    }
</style>
