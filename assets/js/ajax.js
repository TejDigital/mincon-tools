$(document).ready(function () {
  $(".form-click").on("submit", "form.form_ID", function (e) {
    e.preventDefault();
    var form = $(this);
    var formData = form.serialize();
    $.ajax({
      type: "POST",
      url: "././admin/my_cart.php",
      data: formData,
      success: function (response) {
        console.log(response);
        if (response == "Product added to the cart") {
          // $("#count").text(parseInt($("#count").text()) + 1);
          Swal.fire({
            position: "top-center",
            icon: 'success',
            text: response,
            showConfirmButton: false,
            showClass: {
              popup: "animate__animated animate__fadeInDown",
            },
            hideClass: {
              popup: "animate__animated animate__fadeOutUp",
            },
            customClass: {
              icon: 'custom-icon-color', 
            },
            width: 600,
            color: "#fff",
            background: "#EBAB56",
            backdrop: `  
                        rgba(40, 39, 19,0.4)
                        left top
                        no-repeat`,
            timer: 2500,

          });

        }
        if(response == "Product already in the cart"){
          Swal.fire({
            position: "top-center",
            icon: 'warning',
            text: response,
            showConfirmButton: false,
            showClass: {
              popup: "animate__animated animate__fadeInDown",
            },
            hideClass: {
              popup: "animate__animated animate__fadeOutUp",
            },
            width: 600,
            color: "#fff",
            background: "#EBAB56",
            backdrop: `  
                        rgba(40, 39, 19,0.4)
                        left top
                        no-repeat`,
            timer: 2500,
          });
        }
        
      },
      error: function (response) {
        alert("Something went wrong");
        console.log(response);
      },
    });
  });
});

function getDATA() {
  $("#added").html("");
  var productIds = []; // Create an empty array to store product IDs.

  $.ajax({
    type: "GET",
    url: "././admin/fetch_cart_data.php",
    success: function (data) {
      var itemCount = 0;
      $.each(data, function (key, value) {
        $("#added").append(`
          <div class='cart_box mb-2'>
            <input type='hidden' value="${value["cart_product_id"]}" name="cart_id${value["cart_product_id"]}" class='cart_id'>
            <div class="img">
              <img src="./admin/products_images/${value["cart_product_image"]}" alt="">
            </div>
            <div class="text">
              <p class="product-name">${value["cart_product_name"]}</p>
              <p class="category-name">${value["cart_product_cat_name"]}</p>
            </div>
            <div class="btn1">
              <p class="delete_cart" >Delete</p>
            </div>
          </div>
        `);
        productIds.push(value["cart_product_id"]); // Add the product ID to the array.
        itemCount++;
        $("#count_cart").text(itemCount);
      });

      // Join the product IDs into a comma-separated string and set it as the value of #cart_count.
      $("#cart_count").val(productIds.join(", "));
    },
    error: function (data) {
      console.log("Error fetching data: " + JSON.stringify(data));
    },
  });
}

$(document).on("click", ".delete_cart", function () {
  var id = $(this).closest(".cart_box").find(".cart_id").val();
  var $clickedButton = $(this);
  $.ajax({
    type: "POST",
    url: "././admin/my_cart.php",
    data: { id: id },
    success: function (response) {
      console.log(response);
      if (response === "Cart item deleted") {
        if ($("#count").text() > 0) {
          $("#count").text(parseInt($("#count").text()) - 1);
        }
        $clickedButton.closest(".cart_box").remove();
        $("#count_cart").text(parseInt($("#count_cart").text()) - 1);
      }
      Swal.fire({
        position: "top-center",
        icon: 'success',
        text: response,
        showConfirmButton: false,
        showClass: {
          popup: "animate__animated animate__fadeInDown",
        },
        hideClass: {
          popup: "animate__animated animate__fadeOutUp",
        },
        customClass: {
          icon: 'custom-icon-color', 
        },
        width: 600,
        color: "#fff",
        background: "#EBAB56",
        backdrop: `  
                    rgba(40, 39, 19,0.4)
                    left top
                    no-repeat`,
        timer: 2500,

      });
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Get the input element by its ID
  var referrerInput = document.getElementById("referrer");

  // Set the value of the input field to the current location
  referrerInput.value = window.location.href;
});

// $(document).ready(function () {
//   $(".view-details").on("click", function (e) {
//       e.preventDefault();

//       var productId = $(this).data("product-id");

//       // Send an AJAX request to fetch product details
//       $.ajax({
//           type: "GET",
//           url: "./cart_detail.php", // This page
//           data: { id: productId },
//           success: function (response) {
//               // Display the product details on the page
//               $('#remove_sec').remove();
//               $("#product-details-container").html(response);
//           },
//           error: function (xhr, status, error) {
//               console.error(xhr.responseText);
//           }
//       });
//   });
// });

// $(document).ready(function () {
//   $('.form_data_cart').on("submit", "form#form_cart", function (e) {
//     e.preventDefault();
//     var form_cart = $(this);
//     var form_Data = form_cart.serialize();

//     var referrer = $('.referrer').val(window.location.href);

//     console.log(form_Data);
//     $.ajax({
//       type: "POST",
//       url: "././admin/enquire_code.php",
//       data: form_Data,
//       success: function (response) {
//         console.log(response);
//         alert(response);

//         form_cart[0].reset();
//         window.location.href = "././index.php";

//         // window.location.href = referrer;
//       },
//     });
//   });
// });

// var data = sessionStorage.getItem("form_ID");
// if (data != null) {
//   Array(data).push(form_ID);
//   sessionStorage.setItem("form_ID", JSON.stringify(from_data));
// } else {
//   from_data.push(data);
//   sessionStorage.setItem("form_ID", JSON.stringify(form_ID));
// }

// $(".box").on("click", ".delete", function (e) {
//   e.preventDefault();
//   var productName = $(this).data("product-name");
//   $.ajax({
//     type: "POST",
//     url: "././admin/remove_from_cart.php", // Create a separate PHP file for removing items
//     data: { product_name: productName },
//     success: function (response) {
//       // Check the response message and update the cart display
//       if (response === "Item removed from the cart") {
//         $("#count").text(parseInt($("#count").text()) - 1);
//       }
//       alert(response);
//     },
//     error: function (response) {
//       alert("Something went wrong");
//       console.log(response);
//     },
//   });
// });
