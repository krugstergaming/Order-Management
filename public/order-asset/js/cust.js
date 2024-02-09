const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const four = document.querySelector(".four");
const five = document.querySelector(".five");

one.onclick = function() {
    one.classList.add("active");
    two.classList.remove("active");
    three.classList.remove("active");
    four.classList.remove("active");
    five.classList.remove("active");
}

two.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.remove("active");
    four.classList.remove("active");
    five.classList.remove("active");
}
three.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.remove("active");
    five.classList.remove("active");
}
four.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.remove("active");
}
five.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.add("active");
}

// SWITCH TAB IN FORMS

// document.addEventListener('DOMContentLoaded', function() {
//     var customerTabLink = document.getElementById('customerTab');
//     var shippingTabLink = document.getElementById('shippingTab');
//     var customerSection = document.getElementById('customerSection');
//     var shippingSection = document.getElementById('shippingSection');

//     if (customerTabLink && shippingTabLink && customerSection && shippingSection) {
//         customerTabLink.addEventListener('click', function() {
//             customerSection.style.display = 'block';
//             shippingSection.style.display = 'none';
//         });

//         shippingTabLink.addEventListener('click', function() {
//             customerSection.style.display = 'none';
//             shippingSection.style.display = 'block';
//         });
//     }
// });
