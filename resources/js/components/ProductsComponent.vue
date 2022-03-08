<template>
    <section class="products block">
        <!-- <div class="card container-fluid col-md-5" v-for="product_image in product_media" :key="product_image.product_id">
            <a :href="imagePath + product_image.file_name">
                <img :src="imagePath+product_image.file_name" class="card-img-top" :alt="product_image.alt" >
            </a>
        </div> -->
        <div class="product_card card container-fluid col-md-5" v-for="product in products" :key="product.id">
            <div v-for="product_image in product_media" :key="product_image.product_id">
                <div v-if="product.id === product_image.product_id">
                    <img :src="imagePath+product_image.file_name" class="card-img-top" :alt="product_image.alt" >
                
                    <h5>{{product.name}}</h5><hr>
                    <p class="card-text">{{product.description}}</p><hr>
                    <p class="card-text">{{product.info}}</p><hr> 
                </div>
            </div>
            <p class="card-text">{{product.price}}$</p>
            <div v-for="product_has_dis in product_has_discounts" :key="product_has_dis.product_id">
                <p v-if="product.id === product_has_dis.product_id && product_has_dis.discount_id === 1">
                    <b>Sale 30%</b> 
                    <span class="onSale">{{product.price}}$</span><br>
                    <span class="newPrice30"> New Price: <b>{{product.price*30/100}}$</b></span>
                </p>
                <p v-else-if="product.id === product_has_dis.product_id && product_has_dis.discount_id === 2">
                    <b>Sale 50%</b>
                    <span class="onSale">{{product.price}}$</span><br>
                    <span class="newPrice50"> New Price: <b>{{product.price*50/100}}$</b></span>
                </p>
            </div>
        </div>

            

    <!-- <div class="card container-fluid col-md-5" v-for="product in products" :key="product.id">
        <a :href="imagePath + product.image">
            <img :src="imagePath+product.image" class="card-img-top" :alt="product.alt" >
        </a>
        <div class="card-body">
            <h5>{{product.name}}</h5><hr>
            <p class="card-text">{{product.description}}</p><hr>
            <p v-if="product.onSale30"><b>Sale 30%</b> 
                <span class="onSale">{{product.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{product.newPrice30}}$</b></span>
            </p>
            <p v-else-if="product.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{product.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{product.newPrice50}}$</b></span>
            </p>
            <p v-else>Price: {{product.price}}$</p>
            <p class="soldOut" v-if="product.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="product.stock<=5 && product.stock>0">Almost Sold Out</p>
            <p v-else-if="product.stock>5">In Stock</p>
            <span>&#x1F6D2;</span>
            <button class="addToCart btn btn-primary" @click="updateCart(product,'substract')"
                :disabled="product.stock === 0 && product.quantity===0"
                :class="{disabledButton: product.stock===0 && product.quantity===0}">-
            </button>
            <span>{{product.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCart(product,'add')"
                :disabled="product.stock === 0" :class="{disabledButton: product.stock === 0}">+
            </button><hr>
            <a :href="'products/' + product.id">
                <button class="btn btn-primary" style="margin-left:4rem">More Details</button>
            </a>
        </div>
    </div> -->
</section>
</template>

<script>

    export default {
       
        props:{
        },

        data() {
            return {
                products:[],
                product_media: [],
                product_discounts: [],
                product_has_discounts: [],
                imagePath: '/images/webshop/',
            }
        },

        mounted() {
            console.log('Component mounted.')
            this.loadProducts();
            this.loadProductMedia();
            this.loadProductDiscount();
            this.loadProductHasDiscount();
        },
         created() {
    },


    methods: {

        loadProducts(){
            axios.get('/api/products')
            .then((response) =>{
                this.products = response.data.data;
            })
            .catch(function(error){
                console.log(error);
            });
        },

        loadProductMedia(){
            axios.get('/api/product_media')
            .then((response) =>{
                this.product_media = response.data.data;
            })
            .catch(function(error){
                console.log(error);
            });
        },

        loadProductDiscount(){
            axios.get('/api/product_discounts')
            .then((response) =>{
                this.product_discounts = response.data.data;
            })
            .catch(function(error){
                console.log(error);
            });
        },
        loadProductHasDiscount(){
            axios.get('/api/product_has_discounts')
            .then((response) =>{
                this.product_has_discounts = response.data.data;
            })
            .catch(function(error){
                console.log(error);
            });
        },



        updateCart(product, updateType) {
            this.$root.$emit('update-cart', product, updateType)
        },
    },

    }
</script>
