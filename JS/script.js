
// Update Rates 
var shipping = 15.00;


$(document).ready(function(){

	// Display Navbar & Sticky
    var stickyNavTop = $("nav").offset().top;
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop(); 
        if (scrollTop > stickyNavTop) { 
            $("#navbar-frame").addClass('sticky-top');
        } else {
            $("#navbar-frame").removeClass('sticky-top'); 
        }
    };
    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });
	// -----------------------------------------------------------------

	// Sign In/Up & Forgot - Display Toggle
	$("#forgot-link").click(function(){
		$("#Forgot").show();
		$("#loginPage").hide();
		$("#registerPage").hide();
	});
	$(".signup-link").click(function(){
		$("#registerPage").show();
		$("#loginPage").hide();
		$("#Forgot").hide();
	});
	$("#login-link").click(function(){
		$("#loginPage").show();
		$("#registerPage").hide();
		$("#Forgot").hide();
	});
	// -----------------------------------------------------------------
	
	// LogOut - kill session
    $('#logOutBtn').click(function(){
        xhr.open("GET", "../php/logOutScript.php", true);
        xhr.setRequestHeader('Content-type', 'application/json');
        xhr.onreadystatechange = function(){
             if(xhr.readyState == 4 && xhr.status == 200){
                 window.location.href='../index.php';
             }
        }
        xhr.send();
    });

    // =========================SHOPPING CART===========================
    // Add Item To Cart
	$("#addToCart").click(function(){
		var productID = $('<article class="product"> <header> <!-- Item Picture --> <a href="#""><img src="../Images/Earrings.jpg" alt=""></a> </header> <main class="content"> <h1>Lorem ipsum</h1> Lorem ipsum dolor sit amet, consectetur adipisicing elit. <!-- Remove Item --> <div title="Remove Selected" style="top: 0" class="remove fas fa-trash-alt text-center"></div> <!-- Item Size --> <div class="type small">XXL</div> </main> <footer class="content"> <span class="qt-minus">-</span> <span class="qt">1</span> <span class="qt-plus">+</span> <h2 class="full-price"> 14.99₪ </h2> <h2 class="price"> 14.99₪ </h2> </footer> </article>');
		$("#cart").html(productID);
	});

	// Remove Item From Cart
	$(".remove").click(function(){
		var el = $(this);
		el.parent().parent().addClass("removed");
		window.setTimeout(
			function(){
				el.parent().parent().slideUp('fast', function() { 
					el.parent().parent().remove();
					$("#numOfItems").html($(".product").length);
					if($(".product").length == 0) {
						$("#cart").html('<h3 class="text-center">You have nothing in cart!</h3>');
					}
					changeTotal(); 
				});
			}, 200);
	});
	// -----------------------------------------------------------------

	// Add Quantity
	$(".qt-plus").click(function(){
		$(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);
		$(this).parent().children(".full-price").addClass("added");
		var el = $(this);
		window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
	});
	// -----------------------------------------------------------------

	// Remove Quantity
	$(".qt-minus").click(function(){
		child = $(this).parent().children(".qt");
		if(parseInt(child.html()) > 1) {
			child.html(parseInt(child.html()) - 1);
		}
		$(this).parent().children(".full-price").addClass("minused");
		var el = $(this);
		window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
	});
	// -----------------------------------------------------------------

	window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);

	// Checkout Function
	$(".checkout-btn").click(function(){
		//checkout clicked
	});
	// -----------------------------------------------------------------

	// Update prices when cart loaded
	if ($("#cart").length){ changeTotal(); }
	
	
});

// Update Number Of Items In Cart
window.onload = function(){
    if (document.location.pathname == "/Includes/Cart.php") {
	    $("#numOfItems").html($(".product").length);
    }
};


// Get Prices & Quantity
function changeVal(el) {
	var qt = parseFloat(el.parent().children(".qt").html());
	var price = parseFloat(el.parent().children(".price").html());
	var eq = Math.round(price * qt * 100) / 100;
	el.parent().children(".full-price").html( eq + "₪" );

	changeTotal();      
}

// Calc Prices In Cart ON CHANGE
function changeTotal() {
	var price = 0;
	$(".full-price").each(function(index){
		price += parseFloat($(".full-price").eq(index).html());
	});
	price = Math.round(price * 100) / 100;
	var fullPrice = Math.round((price + shipping) *100) / 100;
	if(price == 0) {
		fullPrice = 0;
	}
	$(".subtotal span").html(price.toFixed(2));
	$(".total span").html(fullPrice.toFixed(2));
	$(".shipping span").html(shipping.toFixed(2));
}

// 	Check "Confirm Password" on SignUp
function validatePassword(){
    var pass = document.getElementById("password1");
    var confirm = document.getElementById("confirm_password");

    if(pass.value == confirm.value){
        confirm.setCustomValidity('');
    }else{
        confirm.setCustomValidity("Passwords do not match!");
    }
}
