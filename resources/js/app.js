/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { distanceAndSkiddingToXY } = require('@popperjs/core/lib/modifiers/offset');
const { defaultsDeep } = require('lodash');

//  import Vue from 'vue';
require('./bootstrap');

window.Vue = require('vue').default;


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('test-component', require('./components/TestComponent.vue').default);
Vue.component('cart-component', require('./components/CartComponent.vue').default);
Vue.component('products-component', require('./components/ProductsComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// import ProductComponent from './components/ProductComponent';
// import CartComponent from './components/CartComponent';

const app = new Vue({
    el: '#app',
    props: {
	},

	data: {
		brand: '&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;',
		appName: 'Coffee Products',
		products:[],
		product_media: [],
		product_discounts: [],
		product_has_discounts: [],
		product_categoies: [],
		product_has_categories: [],
		product_stocks: [],
		allproducts: [],
        product_filter: 'all',
		filters :'all',
		shoppingCart: [],
		totalPrice: 0,
		totalQuantity: 0,
		productstorage: [],
	},

	created() {

		this.productstorage = this.allporducts;

		this.totalPrice = localStorage.getItem('totalPrice') !== null ? parseInt(localStorage.getItem('totalPrice')) : 0;
		this.totalQuantity = localStorage.getItem('totalQuantity') !== null ? parseInt(localStorage.getItem('totalQuantity')) : 0;

		localStorage.getItem('totalQuantity');
		localStorage.getItem('totalPrice');
	},

	computed: {
		title() {
			return this.brand + " " + this.appName
		},
		cart() {
			return  this.allproducts.filter(product => product.quantity > 0)
		},
	},

	methods: {

		        /**
         * Adds a new product to the cart or changes the amount of an 
         *  existing product in the cart
         * @param product (object)
         * @returns void
         */

        loadProduct(){
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

        loadProductCategorie(){
            axios.get('/api/product_categories')
            .then((response) =>{
                this.product_categories = response.data.data;
            })
            .catch(function(error){
                console.log(error);
            });
        },

        loadProductHasCategorie(){
            axios.get('/api/product_has_categories')
            .then((response) =>{
                this.product_has_categories = response.data.data;
            })
            .catch(function(error){
                console.log(error);
            });
        },

		loadProductStock(){
			axios.get('/api/product_stocks')
			.then((response) =>{
				this.product_stocks = response.data.data;
			})
			.catch(function(error){
				console.log(error);
			});
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


		sale30() {
			this.allproducts.forEach(product => {
				if (product.onSale30) {
					product.newPrice30 = product.price - (product.price * 30 / 100)
				} else {
					product.price = product.price
				}
			})
		},

		sale50() {
			this.allproducts.forEach(product => {
				if (product.onSale50) {
					product.newPrice50 = product.price - (product.price * 50 / 100)
				} else {
					product.price = product.price
				}
			})
		},




		// sale30() {
		// 	this.products.forEach(product => {
		// 		this.product_has_discounts.forEach(hasdiscount=>{
		// 			if(product.id == hasdiscount.product_id && hasdiscount.discount_id == 1){
		// 				product.newPrice30 = product.price - (product.price * 30 / 100)
		// 			} else {
		// 				product.price = product.price
		// 			}
		// 		})
		// 	})
		// },

		// sale50() {
		// 	this.products.forEach(product => {
		// 		this.product_has_discounts.forEach(hasdiscount=>{
		// 			if(product.id == hasdiscount.product_id && hasdiscount.discount_id == 2){
		// 				product.newPrice50 = product.price - (product.price * 50 / 100)
		// 			} else {
		// 				product.price = product.price
		// 			}
		// 		})
		// 	})
		// },

		addToCart(product, updateType) {
			// this.allproducts.forEach(element => {
			// 	if(element.id == product.id){
			// 		if(updateType ==='substract'){
			// 			if(element.quantity !== 0){
			// 				this.totalQuantity--;

			// 				element.quantity--;
			// 				element.stock++;

			// 				this.shoppingCart =this.cart;
			// 				localStorage.removeItem('shoppingCart');
			// 				localStorage.totalQuantity = this.totalQuantity
			// 				localStorage.totalPrice = this.totalPrice
			// 			}
			// 			else{
			// 				element.quantity++;
			// 				element.stock--;
			// 				this.totalQuantity++;
			// 				this.shoppingCart = this.cart;
			// 				localStorage.setItem('totalQuantity', this.totalQuantity)
			// 				localStorage.setItem('totalPrice', this.totalPrice)
	
			// 			}
			// 		}
			// 	}
			// });
			for (let i = 0; i < this.allproducts.length; i++) {

				if (this.allproducts[i].id == product.id) {
					if (updateType === 'substract') {
						if (this.allproducts[i].quantity !== 0) {

							this.totalQuantity--

							this.allproducts[i].quantity--
							this.allproducts[i].stock++;

							if (this.allproducts[i].onsale30) {
								this.totalPrice -= this.allproducts[i]*30/100
							} else if (this.allproducts[i].onsale50) {
								this.totalPrice -= this.allproducts[i]*50/100
							} else {
								this.totalPrice -= this.allproducts[i].price
							}
							this.shoppingCart = this.cart;

							localStorage.removeItem('shoppingCart');
							localStorage.totalQuantity = this.totalQuantity
							localStorage.totalPrice = this.totalPrice
						}
					} else {
						this.allproducts[i].quantity++
						this.allproducts[i].stock--;
						this.totalQuantity++;
						this.shoppingCart = this.cart

						if (this.allporducts[i].onsale30) {
							this.totalPrice += this.allproducts[i].newPrice30
						} else if (this.allproducts[i].onsale50) {
							this.totalPrice += this.allproducts[i].newPrice50
						} else {
							this.totalPrice += this.allproducts[i].price
						}

						localStorage.setItem('totalQuantity', this.totalQuantity)
						localStorage.setItem('totalPrice', this.totalPrice)
					}
				}
			}
		},

		// addToCart(product, updateType) {
		// 	// console.log("It's working");
		// 	for (let i = 0; i < this.products.length; i++) {
		// 		for (let j = 0; j < this.product_stocks.length; j++){
		// 			if(this.product[i].id == this.product_stocks[j].id == product.id){
		// 				if (updateType == 'substract') {
		// 					if (this.product_stocks[j].quantity !== 0) {

		// 						this.totalQuantity--

		// 						this.product_stocks[j].quantity--
		// 						this.product_stocks[j].stock++;
		// 						for (let k = 0; k < this.product_has_discounts.length; k++){
		// 							if(this.product_has_discounts[k].id == this.product[i].id){
		// 								if (this.product_has_discounts[k].discount_id == 1) {
		// 									this.totalPrice -= this.products[i].price*30/100
		// 								} else if (this.product_has_discounts[k].discount_id == 2) {
		// 									this.totalPrice -= this.products[i].price*50/100
		// 								} else if (this.product_has_categories[k].discount_id == 3) {
		// 									this.totalPrice -= this.products[i].price
		// 								}
		// 							}
		// 						}
		// 						this.shoppingCart = this.cart
		// 						localStorage.removeItem('shoppingCart');
		// 						localStorage.totalQuantity = this.totalQuantity
		// 						localStorage.totalPrice = this.totalPrice
		// 					}
		// 				} else {
		// 					this.product_stocks[k].quantity++
		// 					this.products_stocks[k].stock--;
		// 					this.totalQuantity++;
		// 					this.shoppingCart = this.cart

		// 					for (let k = 0; k < this.product_has_discounts.length; k++){
		// 						if(this.product_has_discounts[k].id == this.product[i].id){
		// 							if (this.products_has_discounts[k].discount_id == 1) {
		// 								this.totalPrice += this.products[i].price *30/100
		// 							} else if (this.product_has_discount[k].discount_id == 2) {
		// 								this.totalPrice += this.products[i].price*50/100
		// 							} else if (this.product_has_discount[k].discount_id == 3) {
		// 								this.totalPrice += this.products[i].price
		// 							}

		// 							localStorage.setItem('totalQuantity', this.totalQuantity)
		// 							localStorage.setItem('totalPrice', this.totalPrice)
		// 						}
		// 					}
		// 				}
		// 			}
		// 		}
		// 	}
		// },


		removeAll() {
			// console.log('Here is working also ;)');
			this.shoppingCart.length = this.cart.length = 0
			this.totalPrice = 0
			this.totalQuantity = 0

			localStorage.removeItem('totalQuantity');
			localStorage.removeItem('totalPrice');
			localStorage.removeItem('shoppingCart');

			for (let k = 0; k < this.product_stocks.length; k++) {
				if (this.product_stocks[k].quantity != 0) {
					this.product_stocks[k].stock += this.product_stocks[k].quantity
					this.product_stocks[k].quantity = 0
				}
			}
		},

	// 	removeItem(index) {
	// 		// console.log('hello');
	// 		this.totalQuantity -= this.shoppingCart[index].quantity
	// 		for (let i = 0; i < this.products.length; i++){
	// 			for (let j = 0; j < this.product_discounts.length; j++){
	// 				if(this.product_discounts[j].product_id == this.shoppingCart[index].product_id == this.products[i].id){
	// 					if (this.product_discounts[j].discount_id == 1) {
	// 						this.totalPrice -= this.products[i].price*30/100 * this.shoppingCart[index].quantity
	// 					} else if (this.product_discounts[j].discount_id == 2) {
	// 						this.totalPrice -= this.products[i].price*50/100 * this.shoppingCart[index].quantity
	// 					} else if(this.product_discounts[i].discount_id == 3) {
	// 						this.totalPrice -= this.products[i].price * this.shoppingCart[index].quantity
	// 					}

	// 					this.shoppingCart[index].stock += this.shoppingCart[index].quantity
	// 					this.shoppingCart[index].quantity = 0
	// 					this.shoppingCart.splice(index, 1)

	// 					localStorage.totalQuantity = this.totalQuantity
	// 					localStorage.totalPrice = this.totalPrice
	// 	}}
	// }

		},
		
		filter(){
			if(this.product_filter == 'all') {
				this.products = this.products;
			}
			if(this.product_filter == 'machines') {
				this.product_categoies.forEach(element1 => {
					if(element1.name == 'machines'){
						this.products.forEach(product => {
							if(this.element1.id == product.id){
								this.machines.push(product);
								this.products = this.machines;
							}
						})
					};
				})
			}
			// if(this.product_filter == 'beans') {
			// 	this.product_categoies.forEach(element2 => {
			// 		if(element2.name == 'beans'){
			// 			this.beans = this.products.filter(product2 => product2.id == element2.id )
			// 		};
			// 	})
			// }

			// if(this.product_filter == 'cups') {
			// 	this.product_categoies.forEach(element3 => {
			// 		if(element3.name == 'cups'){
			// 			this.cups = this.products.filter(product3 => product3.id == element3.id )
			// 		};
			// 	})
			// }
	},

	mounted() {


		if (localStorage.shoppingCart) {	
			this.shoppingCart = JSON.parse(localStorage.shoppingCart);
		}
		this.product_stocks.forEach(productStock => {
			this.shoppingCart.forEach(cartItem => {
				if (productStock.product_id == cartItem.product_id) {
					productStock.quantity = cartItem.quantity
					productStock.stock = cartItem.stock
				}
			})
		})


		this.$on('update-cart', (product, updateType) => {
			this.addToCart(product, updateType)
		})

		this.$on('remove', () => {
			this.removeAll()
		})

		this.$on('remove-product', (index) => {
			this.removeItem(index)
		})

		this.loadProduct();
		this.loadProductMedia();
		this.loadProductDiscount();
		this.loadProductHasDiscount();
		this.loadProductCategorie();
		this.loadProductHasCategorie();
		this.loadProductStock();
		this.loadAllproduct();

	},
	// components:{
	// 	ProductComponent,
	// 	CartComponent
	// },

	watch: {

		shoppingCart: {
			handler(newUpdate) {
				localStorage.shoppingCart = JSON.stringify(newUpdate);
			},
			deep: true
		},
    },
	
});
Vue.config.devtools = true
Vue.config.productionTip = false
