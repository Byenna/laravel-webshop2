
<template>
    <section>
        <div class="products block">
        <!-- <div class="products block" v-for="detailproduct in allproducts" :key="detailproduct.id"> -->
            <img :src="imagePath+allproducts[1].image" class="col-5"  height="700px">
            <div class="col-5" id="detail">
                <h3> {{allproducts[1].name}} </h3>
                <h3> {{allproducts[1].info}} </h3><hr>
                <h4> {{allproducts[1].description}}</h4><hr>

                <h3 v-if="allproducts[1].onsale30"><b>Sale 30%</b>
                    <span class="onSale">{{allproducts[1].price}}$</span><br>
                    <span class="newPrice30"> New Price: <b>{{allproducts[1].price*30/100}}$</b></span>
                </h3>
                <h3 v-else-if="allproducts[1].onsale50"><b>Sale 50%</b>
                    <span class="onSale">{{allproducts[1].price}}$</span><br>
                    <span class="newPrice50"> New Price: <b>{{allproducts[1].price*50/100}}$</b></span>
                </h3>
                <h3 v-else>Price: {{allproducts[1].price}}$</h3>
                <h3 class="soldOut" v-if="allproducts[1].stock===0">Sold Out</h3>
                <h3 class="soldOut" v-else-if="allproducts[1].stock<=5 && allproducts[1].stock>0">Almost Sold Out</h3>
                <h3 v-else-if="allproducts[1].stock>5">In Stock</h3>
                <h3>&#x1F6D2;</h3>
                <h3>
                    <button class="addToCart btn btn-primary" @click="updateCart(allproducts[1])">Order </button>
                </h3>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');
            this.loadAllproduct();

        },
      
        data() {
            return {
                allproducts:[],
                imagePath: '/images/webshop/',
            }
        },
        props:{
            shoppingCart: {
                type: Array,
            },
            totalQuantity: {
                type: Number,
                default: 0,
            },
            totalPrice: {
                type: parseFloat(Number),
                default: 0,
            },

        },
        created() {
            
        },

        methods: {
            remove() {
                this.$root.$emit('remove')
            },
            removeProduct(index) {
                this.$root.$emit('remove-product', index)
            },

            updateCart(product) {
                this.$root.$emit('update-cart', product)
            },

            loadAllproduct(){
                axios.get('/api/allproducts')
                .then((response) =>{
                    this.allproducts = response.data.data;
                })
                .catch(function(error){
                    console.log(error);
                });
            },
        },
    }
</script>
