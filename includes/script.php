<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a1abbb321b.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<script src="./assets/js/main.js"></script>
<script src="./assets/js/ajax.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    //   Swal.fire({
    //      position: 'top',
    //      icon: '',
    //      text: "",
    //      showConfirmButton: false,
    //      showClass: {
    //         popup: 'animate__animated animate__fadeInDown'
    //      },
    //      hideClass: {
    //         popup: 'animate__animated animate__fadeOutUp'
    //      },
    //      width: 600,
    //      color: '#716add',
    //      background: '#fff',
    //      backdrop: `
    //                  rgba(0,0,123,0.4)
    //                  left top
    //                  no-repeat`,
    //      timer: 2500
    //   });
</script>
<!-- <script src="js/fancybox.min.js"></script> -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script>
    $(document).ready(function() {
        $('#product_category').on('change', function(e) {
            e.preventDefault();
            var values = $(this).val().split(',');
            var categoryId = values[0];
            var lang_id = values[1];

            // console.log(categoryId)
            // console.log(lang_id)

            // Clear the product dropdown
            $('#product').html('<option value="">Select Product</option>');

            if (categoryId !== "" && lang_id !== "") {
                $.ajax({
                    type: 'POST', 
                    url: './admin/product_code_ajax.php', 
                    data: {
                        category_id: categoryId,
                        lang_id: lang_id
                    },
                    success: function(response) {
                        // Populate the product dropdown with the received data
                        // console.log(response);
                        $('#product').append(response);
                    }
                });
            }
        });
    });
</script>
<script>
    const change = src => {
        document.getElementById('main').src = src
    }
</script>
<script>
    $(function() {
        $('.popup').magnificPopup({
            // disableOn: 700,
            type: 'iframe',
            // mainClass: 'mfp-fade',
            // removalDelay: 160,
            // preloader: false,
            // fixedContentPos: false
        });
    });
</script>
<script>
    //  function fetchData() {
    //             $.ajax({
    //                 type: "GET",
    //                 url: "./admin/cart_count.php",
    //                 dataType: "json",
    //                 success: function (response) {
    //                     $("#count_item").text(response.count);
    //                 },
    //                 error: function () {
    //                     console.error("Error fetching data");
    //                 }
    //             });
    //         }
</script>

<script>
    function changeLanguage(element) {
        var languageSelect = $(element).data('value');
        var url_product_id = $('#url_product_id').val();
        var url_blog_id = $('#url_blog_id').val();
        var url_cat_id = $('#url_cat_id').val();
        var url_auth = $('#auth').val();
        var keybord = $('#keybord').val();


    // // Get the current scroll position
    // var scrollPosition = $(window).scrollTop();

    
    var newURL = window.location.pathname + '?lang=' + languageSelect + '&product_id=' + url_product_id + '&blog_id=' + url_blog_id + '&blog_cat_id=' + url_cat_id +'&auth=' + url_auth + '&keybord=' + keybord;
        // alert(languageSelect);
        
        // // Update the URL without reloading the page (HTML5 History API)
        // window.history.pushState({
        //     scrollPosition: scrollPosition
        // }, '', newURL);

        // // Scroll back to the previous position after updating the URL
        // $(window).scrollTop(scrollPosition);

        window.location.href = newURL;


    }
</script>

</body>

</html>