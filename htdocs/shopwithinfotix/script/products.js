var p=null;
const productsEl = document.getElementById('products');
const cartBtnEl = document.getElementById('cartBtn');

let cartArr;
let productsArr = [];

// loads previous cart arr
function getCartArr(){
    const temp = localStorage.getItem('cartArr');
    const temp2 = JSON.parse(temp);
    if (temp2 === null || temp2 === undefined) {
        cartArr = [];
        localStorage.setItem('cartArr', JSON.stringify(cartArr));
    } else {
        cartArr = temp2;
    }
}

function displayProductsDOM(produc){
/*
var p='{"data":[{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/mobilephone_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/mobilephone_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/mobilephone_600.png","_id":"5fffae6e83fde83c1b4eaca7","product_name":"Risk-free Mobile Phone","product_type":"Mobile Phone","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":59,"product_color":"blue","product_price":293,"product_material":"Metal","product_ratings":2,"product_sales":720},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/computertable_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/computertable_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/computertable_600.png","_id":"5fffae7083fde83c1b4eacad","product_name":"Magic Computer Table","product_type":"Computer Table","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":103,"product_color":"indigo","product_price":260,"product_material":"Concrete","product_ratings":1,"product_sales":1393},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/laptop_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/laptop_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/laptop_600.png","_id":"5fffae7283fde83c1b4eacb3","product_name":"Plain Laptop","product_type":"Laptop","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":23,"product_color":"maroon","product_price":240,"product_material":"Frozen","product_ratings":0,"product_sales":1343},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/desktop_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/desktop_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/desktop_600.png","_id":"5fffae7383fde83c1b4eacb9","product_name":"Ergonomic Desktop","product_type":"Desktop","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":85,"product_color":"azure","product_price":808,"product_material":"Fresh","product_ratings":4,"product_sales":1096},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/securitycamera_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/securitycamera_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/securitycamera_600.png","_id":"5fffae7583fde83c1b4eacbf","product_name":"Pristine Security Camera","product_type":"Security Camera","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":144,"product_color":"pink","product_price":487,"product_material":"Metal","product_ratings":1,"product_sales":57},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/actioncamera_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/actioncamera_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/actioncamera_600.png","_id":"5fffae7783fde83c1b4eacc5","product_name":"Intelligent Action Camera","product_type":"Action Camera","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":22,"product_color":"tan","product_price":351,"product_material":"Concrete","product_ratings":0,"product_sales":305},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/gamingconsole_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/gamingconsole_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/gamingconsole_600.png","_id":"5fffae7883fde83c1b4eaccb","product_name":"Staple Gaming Console","product_type":"Gaming Console","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":53,"product_color":"magenta","product_price":5,"product_material":"Wooden","product_ratings":2,"product_sales":190},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/phonecharger_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/phonecharger_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/phonecharger_600.png","_id":"5fffae7a83fde83c1b4eacd1","product_name":"Powerful Phone Charger","product_type":"Phone Charger","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":102,"product_color":"orchid","product_price":309,"product_material":"Steel","product_ratings":0,"product_sales":336},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/drone_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/drone_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/drone_600.png","_id":"5fffae7c83fde83c1b4eacd7","product_name":"Unbranded Drone","product_type":"Drone","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":21,"product_color":"orange","product_price":528,"product_material":"Frozen","product_ratings":1,"product_sales":338},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/earphone_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/earphone_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/earphone_600.png","_id":"5fffae7d83fde83c1b4eacdd","product_name":"Safe and effective Earphone","product_type":"Earphone","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":122,"product_color":"fuchsia","product_price":536,"product_material":"Concrete","product_ratings":0,"product_sales":970},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/headset_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/headset_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/headset_600.png","_id":"5fffae7f83fde83c1b4eace3","product_name":"Fresh Headset","product_type":"Headset","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":72,"product_color":"pink","product_price":426,"product_material":"Soft","product_ratings":2,"product_sales":912},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/bluetoothspeaker_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/bluetoothspeaker_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/bluetoothspeaker_600.png","_id":"5fffae8183fde83c1b4eace9","product_name":"Promise Bluetooth Speaker","product_type":"Bluetooth Speaker","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":26,"product_color":"pink","product_price":48,"product_material":"Steel","product_ratings":1,"product_sales":400},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/smartwatch_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/smartwatch_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/smartwatch_600.png","_id":"5fffae8283fde83c1b4eacef","product_name":"Simple Smart Watch","product_type":"Smart Watch","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":121,"product_color":"pink","product_price":285,"product_material":"Concrete","product_ratings":2,"product_sales":794},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/basicphone_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/basicphone_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/basicphone_600.png","_id":"5fffae8483fde83c1b4eacf5","product_name":"Old-fashioned Basic Phone","product_type":"Basic Phone","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":53,"product_color":"turquoise","product_price":471,"product_material":"Steel","product_ratings":1,"product_sales":574},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/nintendoswitch_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/nintendoswitch_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/nintendoswitch_600.png","_id":"5fffae8683fde83c1b4eacfb","product_name":"Licensed Nintendo Switch","product_type":"Nintendo Switch","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":71,"product_color":"lavender","product_price":766,"product_material":"Concrete","product_ratings":5,"product_sales":101},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/powerbank_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/powerbank_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/powerbank_600.png","_id":"5fffae8783fde83c1b4ead01","product_name":"Limited Power Bank","product_type":"Power Bank","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":107,"product_color":"orchid","product_price":710,"product_material":"Fresh","product_ratings":1,"product_sales":303},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/gameboy_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/gameboy_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/gameboy_600.png","_id":"5fffae8983fde83c1b4ead07","product_name":"Authentic Gameboy","product_type":"Gameboy","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":51,"product_color":"turquoise","product_price":214,"product_material":"Soft","product_ratings":2,"product_sales":649},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/appliances/vacuumcleaner_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/appliances/vacuumcleaner_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/appliances/vacuumcleaner_600.png","_id":"5fffae8b83fde83c1b4ead0d","product_name":"Intelligent Vacuum Cleaner","product_type":"Vacuum Cleaner","product_department":"Appliances","product_departmentId":"appliances","product_stock":28,"product_color":"red","product_price":264,"product_material":"Plastic","product_ratings":2,"product_sales":1384},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/appliances/washingmachine_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/appliances/washingmachine_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/appliances/washingmachine_600.png","_id":"5fffae8c83fde83c1b4ead13","product_name":"Handmade Washing Machine","product_type":"Washing Machine","product_department":"Appliances","product_departmentId":"appliances","product_stock":23,"product_color":"pink","product_price":96,"product_material":"Granite","product_ratings":3,"product_sales":588},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/appliances/dryer_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/appliances/dryer_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/appliances/dryer_600.png","_id":"5fffae8e83fde83c1b4ead19","product_name":"Amazing Dryer","product_type":"Dryer","product_department":"Appliances","product_departmentId":"appliances","product_stock":39,"product_color":"orange","product_price":454,"product_material":"Soft","product_ratings":1,"product_sales":530}]}';
*/

$.ajax({
        url: 'getItems.php',
        method: "GET",
        success(res){
            p = res;
        	var products = JSON.parse(p);
        	productsArr=products.data;
        	productsEl.innerHTML = products.data.map(product=>{
        	
        	return '<div class="product">'+
        	'<div class="product-info">'+
        	'<img src="'+product.product_image+'" alt="product-image" height="200" width="200">'+
        	'<h4>'+product.product_name+'</h4>'+
        	'<h5>Price: ₹'+product.product_price+'</h5>'+
        	' <h5>Rating: '+product.product_ratings+'</h5>'+
        	' <button id="'+product._id+'" class="addBtn">add to cart</button>'+
        	'</div></div>'
        	
        	
        	
        	}).join('');
        	
        	// add to cart button clicked
        	$(".addBtn").on('click', addToCart);
        },
        error(err){
        alert(err);
        
        }
    });




}

// checks if item is already present in the cart
function isItemInCart(currId){
    for (const product of cartArr){
        if (currId === product._id){
            product['qty'] += 1;
            alert('You have added '+product['qty']+' '+product['name']+' successfully to your cart');
            
            return true;
        }
    }
    return false;
}

// add to cart function
function addToCart(e){
    //cartArr.push(this.id);
    const currId = this.id;

    let item = {};

    // check if item is already in cart
    if(!isItemInCart(currId)){
        for(const product of productsArr){
            if (product._id === currId){
                // console.log(cartArr);
                item['name'] = product.product_name;
                alert('You have added 1 '+item['name']+' successfully to your cart');
                item['price'] = product.product_price;
                item['img'] = product.product_image;
                item['_id'] = product._id;
                item['qty'] = 1;
                cartArr.push(item);
            }
        }
    }
}

// display cart
function displayCart(){
    // console.log(cartArr);
    saveCartToLocal();
    window.location.href = "./cart.html";
}

// save user cart to local storage
function saveCartToLocal(){
    localStorage.setItem('cartArr', JSON.stringify(cartArr));
}

cartBtnEl.addEventListener('click', displayCart);


function modify()
{
 
// var p='{"data":[{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/mobilephone_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/mobilephone_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/mobilephone_600.png","_id":"5fffae6e83fde83c1b4eaca7","product_name":"Risk-free Mobile Phone","product_type":"Mobile Phone","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":59,"product_color":"blue","product_price":293,"product_material":"Metal","product_ratings":2,"product_sales":720},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/computertable_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/computertable_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/computertable_600.png","_id":"5fffae7083fde83c1b4eacad","product_name":"Magic Computer Table","product_type":"Computer Table","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":103,"product_color":"indigo","product_price":260,"product_material":"Concrete","product_ratings":1,"product_sales":1393},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/laptop_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/laptop_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/laptop_600.png","_id":"5fffae7283fde83c1b4eacb3","product_name":"Plain Laptop","product_type":"Laptop","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":23,"product_color":"maroon","product_price":240,"product_material":"Frozen","product_ratings":0,"product_sales":1343},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/desktop_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/desktop_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/desktop_600.png","_id":"5fffae7383fde83c1b4eacb9","product_name":"Ergonomic Desktop","product_type":"Desktop","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":85,"product_color":"azure","product_price":808,"product_material":"Fresh","product_ratings":4,"product_sales":1096},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/securitycamera_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/securitycamera_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/securitycamera_600.png","_id":"5fffae7583fde83c1b4eacbf","product_name":"Pristine Security Camera","product_type":"Security Camera","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":144,"product_color":"pink","product_price":487,"product_material":"Metal","product_ratings":1,"product_sales":57},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/actioncamera_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/actioncamera_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/actioncamera_600.png","_id":"5fffae7783fde83c1b4eacc5","product_name":"Intelligent Action Camera","product_type":"Action Camera","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":22,"product_color":"tan","product_price":351,"product_material":"Concrete","product_ratings":0,"product_sales":305},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/gamingconsole_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/gamingconsole_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/gamingconsole_600.png","_id":"5fffae7883fde83c1b4eaccb","product_name":"Staple Gaming Console","product_type":"Gaming Console","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":53,"product_color":"magenta","product_price":5,"product_material":"Wooden","product_ratings":2,"product_sales":190},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/phonecharger_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/phonecharger_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/phonecharger_600.png","_id":"5fffae7a83fde83c1b4eacd1","product_name":"Powerful Phone Charger","product_type":"Phone Charger","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":102,"product_color":"orchid","product_price":309,"product_material":"Steel","product_ratings":0,"product_sales":336},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/drone_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/drone_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/drone_600.png","_id":"5fffae7c83fde83c1b4eacd7","product_name":"Unbranded Drone","product_type":"Drone","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":21,"product_color":"orange","product_price":528,"product_material":"Frozen","product_ratings":1,"product_sales":338},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/earphone_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/earphone_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/earphone_600.png","_id":"5fffae7d83fde83c1b4eacdd","product_name":"Safe and effective Earphone","product_type":"Earphone","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":122,"product_color":"fuchsia","product_price":536,"product_material":"Concrete","product_ratings":0,"product_sales":970},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/headset_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/headset_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/headset_600.png","_id":"5fffae7f83fde83c1b4eace3","product_name":"Fresh Headset","product_type":"Headset","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":72,"product_color":"pink","product_price":426,"product_material":"Soft","product_ratings":2,"product_sales":912},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/bluetoothspeaker_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/bluetoothspeaker_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/bluetoothspeaker_600.png","_id":"5fffae8183fde83c1b4eace9","product_name":"Promise Bluetooth Speaker","product_type":"Bluetooth Speaker","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":26,"product_color":"pink","product_price":48,"product_material":"Steel","product_ratings":1,"product_sales":400},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/smartwatch_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/smartwatch_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/smartwatch_600.png","_id":"5fffae8283fde83c1b4eacef","product_name":"Simple Smart Watch","product_type":"Smart Watch","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":121,"product_color":"pink","product_price":285,"product_material":"Concrete","product_ratings":2,"product_sales":794},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/basicphone_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/basicphone_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/basicphone_600.png","_id":"5fffae8483fde83c1b4eacf5","product_name":"Old-fashioned Basic Phone","product_type":"Basic Phone","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":53,"product_color":"turquoise","product_price":471,"product_material":"Steel","product_ratings":1,"product_sales":574},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/nintendoswitch_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/nintendoswitch_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/nintendoswitch_600.png","_id":"5fffae8683fde83c1b4eacfb","product_name":"Licensed Nintendo Switch","product_type":"Nintendo Switch","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":71,"product_color":"lavender","product_price":766,"product_material":"Concrete","product_ratings":5,"product_sales":101},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/powerbank_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/powerbank_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/powerbank_600.png","_id":"5fffae8783fde83c1b4ead01","product_name":"Limited Power Bank","product_type":"Power Bank","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":107,"product_color":"orchid","product_price":710,"product_material":"Fresh","product_ratings":1,"product_sales":303},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/gadgets/gameboy_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/gadgets/gameboy_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/gadgets/gameboy_600.png","_id":"5fffae8983fde83c1b4ead07","product_name":"Authentic Gameboy","product_type":"Gameboy","product_department":"Gadgets","product_departmentId":"gadgets","product_stock":51,"product_color":"turquoise","product_price":214,"product_material":"Soft","product_ratings":2,"product_sales":649},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/appliances/vacuumcleaner_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/appliances/vacuumcleaner_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/appliances/vacuumcleaner_600.png","_id":"5fffae8b83fde83c1b4ead0d","product_name":"Intelligent Vacuum Cleaner","product_type":"Vacuum Cleaner","product_department":"Appliances","product_departmentId":"appliances","product_stock":28,"product_color":"red","product_price":264,"product_material":"Plastic","product_ratings":2,"product_sales":1384},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/appliances/washingmachine_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/appliances/washingmachine_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/appliances/washingmachine_600.png","_id":"5fffae8c83fde83c1b4ead13","product_name":"Handmade Washing Machine","product_type":"Washing Machine","product_department":"Appliances","product_departmentId":"appliances","product_stock":23,"product_color":"pink","product_price":96,"product_material":"Granite","product_ratings":3,"product_sales":588},{"product_image_sm":"https://dummyproducts-api.herokuapp.com/appliances/dryer_150.png","product_image_md":"https://dummyproducts-api.herokuapp.com/appliances/dryer_300.png","product_image_lg":"https://dummyproducts-api.herokuapp.com/appliances/dryer_600.png","_id":"5fffae8e83fde83c1b4ead19","product_name":"Amazing Dryer","product_type":"Dryer","product_department":"Appliances","product_departmentId":"appliances","product_stock":39,"product_color":"orange","product_price":454,"product_material":"Soft","product_ratings":1,"product_sales":530}]}';
 
 var products = JSON.parse(p);
 productsArr=products.data;
 productsEl.innerHTML = products.data.map(product=>{
    if(product.product_name.includes(document.getElementById('search').value))
    {
   return '<div class="product">'+
   '<div class="product-info">'+
   '<img src="'+product.product_image+'" alt="product-image" height="200" width="200">'+
   '<h4>'+product.product_name+'</h4>'+
   '<h5>Price: ₹'+product.product_price+'</h5>'+
   ' <h5>Rating: '+product.product_ratings+'</h5>'+
   ' <button id="'+product._id+'" class="addBtn">add to cart</button>'+
   '</div></div>'
    }
     
     
     
    }).join('');
    $(".addBtn").on('click', addToCart);
}


//loadProducts();
displayProductsDOM("");
getCartArr();