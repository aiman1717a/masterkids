<template>
    <div class="row contents product-row">
        <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3 item" v-for="product in products" v-bind:key="product.id">
            <item-component :product="product"></item-component>
        </div>
    </div>
</template>

<script>
    import ItemComponent from '../components/ItemComponent.vue';

    export default {
        components:{
            ItemComponent
        },

        data() {
            return {
                products: null
            }
        },
        mounted () {
            console.log('mounted');
            var ref = this;

            const config = {
                headers : {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImVmODdiMjNlODRhZDhiYmRkOTUwZjg5YTg4YjVlN2I1MGM4ODFhZGJhOTZiNWE0OGE5MzFmNmU4Y2U0ZjAyN2JmOWYxNDMzOGZhMGM1YzFmIn0.eyJhdWQiOiIxIiwianRpIjoiZWY4N2IyM2U4NGFkOGJiZGQ5NTBmODlhODhiNWU3YjUwYzg4MWFkYmE5NmI1YTQ4YTkzMWY2ZThjZTRmMDI3YmY5ZjE0MzM4ZmEwYzVjMWYiLCJpYXQiOjE1NzUyOTMyNDYsIm5iZiI6MTU3NTI5MzI0NiwiZXhwIjoxNjM4NDUxNjQ2LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiLCJpbnNlcnQiLCJ1cGRhdGUiLCJkZWxldGUiXX0.KZLWE3QvlKVMXCw3vTu1YPfB4Z0eqBxHusD_3aYdEVP5KwtZu3TpYd3e9SvVLwUyE2EI9Ks5bHhwsOlyVl1QUd-B8cGLPQ9ipLaAYVHbMvL_cO9Zv_gr_QwplETpMWwIyNr0dI3vCOdMykGJKkBQobobFTl5HrWVjppBHZ3TVH8-wNnR018O1PX2ocqWIRQAYES2GiP9GPUL8VDfd4bb9C7xnYDBtIBwok_Mphs8WovP5jO_v_7pkxWNzzJACQ_pFmxaIsxgSGxyj6NMfrNaLHocBgmC7cOTsMbQk26JcySj_X3ebB02IlcqXuwT6E9FpynIAfGzWc-W1YAioKTvMk4hJcbcoDQ46oR76gJrCzRLBa15RE3iazcc-Wf6ai8JVucVoW_1lWk1fYF-AevRmv96ZtdoiffreO-1pNUqzIo2DipIvYwLsTpuIcSmMh_7NYGjptzFKIaIrhQ40WwpLNL2KnJ3Hm3QTNHLGap9ccX6OLXPgMhkN5SmEf8gUNqI_SlgtLd7bNjVwdbDlkvHeqrR0gc01AiqejqIKT1gblALYQmMEPTFEm_7itA18wIaS79E4pDPGlUISkawOK1qBE89gkcNkCb0qg4xV3NJx4OTaaG8kCdNkxDsjg4QsKtxncy9oXJ0cBpVkueH9DS1FYQqUN1qmtVuF4spu_XlYtk',
                }
            };

            Axios.get('http://api.aimanapi.test/masterkids/v1/listings?limit=4', config)
                .then(function (response) {
                    ref.products = response.data.data;
                    console.log(response.data.data)
                })
                .catch(function (error) {
                    // ref.products = null;
                    console.log(error);
                })
                .finally(function () {

                });

            // Axios.get('http://masterkids.test/getproducts')
            //     .then(function (response) {
            //         // this.products = response
            //         ref.products = response.data.data;
            //         console.log(response.data.data)
            //     })
            //     .catch(function (error) {
            //         ref.products = null;
            //         console.log(error);
            //     })
            //     .finally(function () {
            //
            //     });
        }
    }
</script>
