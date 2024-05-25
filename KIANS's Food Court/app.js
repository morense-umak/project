window.addEventListener('load', updateCart);
let iconCart = document.querySelector('.icon-cart');
let closeCart = document.querySelector('.close');
let body = document.querySelector('body');
let addToCartButtons = document.querySelectorAll('.addCart');
// let cartCount = document.querySelector('.icon-cart span');
let listOrder = document.querySelector('.listorder');
let checkoutButton = document.querySelector('.checkout');


let cart = JSON.parse(localStorage.getItem('cart')) || {};
let products = [
    {id: 1, name: "SHAWARMA PITA SOLO", price: 65.00, img: "s1.png"},
    {id: 2, name: "SHAWARMA PITA ", price: 119.00, img: "s2.png"},
    {id: 3, name: "SHAWARMA RICE SOLO", price: 70, img: "s3.png"},
    {id: 4, name: "CANTON GUISADO", price: 149, img: "s4.png"},
    {id: 5, name: "PANSIT BIHON", price: 129, img: "s5.png"},
    {id: 6, name: "SOTANGHON GUISADO", price: 169, img: "s6.png"},
    {id: 7, name: "SIOMAI", price: 33, img: "s7.jpg"},
    {id: 8, name: "SIOMAI WITH RICE (CHICKEN)", price: 49, img: "s8.jpg"},
    {id: 9, name: "SIOMAI WITH RICE (JAPANESE)", price: 65, img: "s9.jpg"},
    {id: 10, name: "SIOMAI WITH RICE (BEEF)", price: 55, img: "s10.jpg"},
    {id: 11, name: "REGULAR FOOTLONG", price: 42, img: "s11.jpg"},
    {id: 12, name: "HOTDOG SANDWICH OVERLOAD", price: 45, img: "s12.jpg"},
    {id: 13, name: "FOOTLONG B1T1", price: 80, img: "s13.jpg"},
    {id: 14, name: "REGULAR BURGER B1T1", price: 35, img: "s14.jpg"},
    {id: 15, name: "SIZZLING CHICKEN", price: 119, img: "s15.png"},
    {id: 16, name: "SIZZLING TAPA", price: 119, img: "s16.png"},
    {id: 17, name: "SIZZLING HUNGARIAN", price: 119, img: "s17.png"},
    {id: 18, name: "SIZZLING LIEMPO", price: 119, img: "s18.png"},
    {id: 19, name: "SIZZLING BURGER STEAK", price: 119, img: "s19.png"},
    {id: 20, name: "SIZZLING TOFU", price: 115, img: "s20.png"},
    {id: 21, name: "SIZZLING SISIG", price: 159, img: "s21.png"},
    {id: 22, name: "SIZZLING HOTDOG", price: 99, img: "s22.png"},
    {id: 23, name: "SIZZLING LECHON KAWALI", price: 159, img: "s23.png"},
    {id: 24, name: "PAPAITAN", price: 149, img: "s24.png"}, 
    {id: 25, name: "NACHOS", price: 69, img: "s25.jpg"},
    {id: 26, name: "PANSIT MIX", price: 169, img: "s26.jpg"},
    {id: 27, name: "QUARTER POUNDER", price: 65, img: "s27.jpg"},
    {id: 28, name: "SHAWARMA RICE BUDGET MEAL", price: 39, img: "s28.jpg"},
    {id: 15, name: "SIZZLING CHICKEN", price: 119, img: "s15.png"},
    {id: 16, name: "SIZZLING TAPA", price: 119, img: "s16.png"},
    {id: 17, name: "SIZZLING HUNGARIAN", price: 119, img: "s17.png"},
    {id: 18, name: "SIZZLING LIEMPO", price: 119, img: "s18.png"},
    {id: 19, name: "SIZZLING BURGER STEAK", price: 119, img: "s19.png"},
    {id: 20, name: "SIZZLING TOFU", price: 115, img: "s20.png"},
    {id: 21, name: "SIZZLING SISIG", price: 159, img: "s21.png"},
    {id: 22, name: "SIZZLING HOTDOG", price: 99, img: "s22.png"},
    {id: 23, name: "SIZZLING LECHON KAWALI", price: 159, img: "s23.png"},
    {id: 24, name: "PAPAITAN", price: 149, img: "s24.png"},
    {id: 1, name: "SHAWARMA PITA SOLO", price: 65.00, img: "s1.png"},
    {id: 2, name: "SHAWARMA PITA ", price: 119.00, img: "s2.png"},
    {id: 3, name: "SHAWARMA RICE SOLO", price: 70, img: "s3.png"},
    {id: 25, name: "NACHOS", price: 69, img: "s25.jpg"},
    {id: 4, name: "CANTON GUISADO", price: 149, img: "s4.png"},
    {id: 5, name: "PANSIT BIHON", price: 129, img: "s5.png"},
    {id: 6, name: "SOTANGHON GUISADO", price: 169, img: "s6.png"},
    {id: 26, name: "PANSIT MIX", price: 169, img: "s26.jpg"},
    {id: 7, name: "SIOMAI", price: 33, img: "s7.jpg"},
    {id: 8, name: "SIOMAI WITH RICE (CHICKEN)", price: 49, img: "s8.jpg"},
    {id: 9, name: "SIOMAI WITH RICE (JAPANESE)", price: 65, img: "s9.jpg"},
    {id: 10, name: "SIOMAI WITH RICE (BEEF)", price: 55, img: "s10.jpg"},
    {id: 11, name: "REGULAR FOOTLONG", price: 42, img: "s11.jpg"}
];

iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
});

closeCart.addEventListener('click', () => {
    body.classList.toggle('showCart');
});

addToCartButtons.forEach((button, index) => {
    button.addEventListener('click', () => {
        addToCart(index);
    });
});

checkoutButton.addEventListener('click', checkout);


function addToCart(index) {
    let product = products[index];
    if (cart[product.id]) {
        cart[product.id].quantity += 1;
    } else {
        cart[product.id] = { ...product, quantity: 1 };
    }
    updateCart();
}

function updateCart() {
    // cartCount.textContent = Object.keys(cart).reduce((sum, key) => sum + cart[key].quantity, 0);
    listOrder.innerHTML = '';
    for (let key in cart) {
        let item = cart[key];
        let itemElement = document.createElement('div');
        itemElement.classList.add('item');
        itemElement.innerHTML = `
            <div class="image">
                <img src="${item.img}" alt="">
            </div>
            <div class="name">
                ${item.name}
            </div>
            <div class="totalprice">
                P${item.price * item.quantity}
            </div>
            <div class="quantity">
                <span class="minus" onclick="changeQuantity(${item.id}, ${item.quantity - 1})">-</span>
                <span>${item.quantity}</span>
                <span class="plus" onclick="changeQuantity(${item.id}, ${item.quantity + 1})">+</span>
            </div>
        `;
        listOrder.appendChild(itemElement);
    }

    // Save updated cart data back to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
}


function changeQuantity(id, quantity) {
    if (quantity == 0) {
        delete cart[id];
    } else {
        cart[id].quantity = quantity;
    }
    updateCart();
}

function checkout() {
    if (Object.keys(cart).length === 0) {
        alert('Your cart is empty.');
        return;
    }

    // Calculate total payment and delivery fee
    let totalPayment = calculateTotalPayment();
    console.log(`Total Payment: ${totalPayment}`);  

    let deliveryFee = calculateDeliveryFee(totalPayment);
    console.log(`Delivery Fee: ${deliveryFee}`);  

    let finalTotal = totalPayment + deliveryFee;

    // // Display total payment and delivery fee
    // alert(`Total Payment: P${totalPayment.toFixed(2)}\nDelivery Fee: P${deliveryFee.toFixed(2)}\nFinal Total: P${finalTotal.toFixed(2)}`);

    // // Prompt for payment method
    // let paymentMethod = prompt("Please select a payment method (Gcash or Cash on Delivery):");
    // if (!paymentMethod) {
    //     alert("Please select a payment method.");
    //     return;
    // }

    let name, address, referenceNumber;

    // if (paymentMethod.toLowerCase() === "gcash") {
    //     // For "Gcash", prompt for name, address, and reference number separately
    //     name = prompt("Please enter your Name:");
    //     if (!name) {
    //         alert("Name is required.");
    //         return;
    //     }

    //     address = prompt("Please enter your Address:");
    //     if (!address) {
    //         alert("Address is required.");
    //         return;
    //     }

    //     referenceNumber = prompt("Please enter your Reference Number:");
    //     if (!referenceNumber) {
    //         alert("Reference Number is required.");
    //         return;
    //     }

    //     // Display order details
    //     displayOrderDetails(totalPayment, deliveryFee, finalTotal, paymentMethod, name.trim(), address.trim(), referenceNumber.trim());
    // } else if (paymentMethod.toLowerCase() === "cash on delivery") {
    //     // For "Cash on Delivery", prompt for name and address separately
    //     name = prompt("Please enter your Name:");
    //     if (!name) {
    //         alert("Name is required.");
    //         return;
    //     }

    //     address = prompt("Please enter your Address:");
    //     if (!address) {
    //         alert("Address is required.");
    //         return;
    //     }

    //     // Display order details
    //     displayOrderDetails(totalPayment, deliveryFee, finalTotal, paymentMethod, name.trim(), address.trim(), "");
    // } else {
    //     alert("Invalid payment method. Please select either 'Gcash' or 'Cash on Delivery'.");
    // }
}

function calculateTotalPayment() {
    let total = 0;
    for (let key in cart) {
        let item = cart[key];
        total += item.price * item.quantity;
    }
    return total;
}

function calculateDeliveryFee(totalPayment) {
    if (totalPayment < 100) {
        return 10;
    } else if (totalPayment >= 100 && totalPayment <= 200) {
        return 5;
    } else {
        return 0;
    }
}
function displayOrderDetails(totalPayment, deliveryFee, finalTotal, paymentMethod, name, address, referenceNumber) {
    let orderDetails = 'Your order:\n';
    for (let key in cart) {
        let item = cart[key];
        orderDetails += `${item.name} x ${item.quantity} - P${(item.price * item.quantity).toFixed(2)}\n`;
    }
    orderDetails += `\nTotal Payment: ${totalPayment.toFixed(2)}\n`;
    orderDetails += `Delivery Fee: P${deliveryFee.toFixed(2)}\n`;
    orderDetails += `Final Total: P${finalTotal.toFixed(2)}\n\n`;
    orderDetails += `Payment Method: ${paymentMethod}\n`;
    orderDetails += `Name: ${name}\n`;
    orderDetails += `Address: ${address}\n`;
    if (referenceNumber) {
        orderDetails += `Reference Number: ${referenceNumber}`;
    }

    alert(orderDetails);
    alert('Your order is being process, Thank you for Ordering');
}
