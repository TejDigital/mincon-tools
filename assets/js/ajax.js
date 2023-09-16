// var from_data = [];
$(document).ready(function () {
  $(".form-click").on("click", ".add", function (e) {
    e.preventDefault();
    var form_ID = $(this).closest(".form_ID").serializeArray();
    var id = $(".product_name").val();
    form_ID.push({ name: "id", value: id });
    // console.log(form_ID);
    $.ajax({
      type: "POST",
      url: "././admin/my_cart.php",
      data: form_ID,
      success: function (response) {
        // alert("item Added");
        if (response === "Product added to the cart") {
          $("#count").text(parseInt($("#count").text()) + 1);
        }
        alert(response);
      },
      error: function (response) {
        alert("Something went wrong");
        console.log(response);
      },
    });
  });
});
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
