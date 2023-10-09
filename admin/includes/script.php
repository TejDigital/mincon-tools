<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="lib/chart/chart.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script src="tinymce/js/tinymce/my_tiny.js"></script>
<!-- <script src="./ckeditor5/ckeditor.js"></script> -->
<!-- <script src="./ckeditor/ckeditor.js"></script> -->
<!-- <script src="./ckfinder/ckfinder.js"></script> -->
<!-- <script src="./ckfinder/config.js"></script> -->
<script>
    // ClassicEditor
	// 	.create( document.querySelector( '.textarea' ), {
	// 		toolbar: [ 'heading', '|', 'bold', 'italic', 'link','imageUpload' , 'mediaEmbed','|', 'undo', 'redo' ],
    //         ckfinder: {
    //             uploadUrl: '/ckfinder/core/connector/connector.php?command=QuickUpload&type=Files&responseType=json'
    //         },
    //         // toolbar: [  'heading', '|', 'bold', 'italic', '|', 'imageUpload','undo', 'redo' ]

    // })
	// 	.then( editor => {
	// 		window.editor = editor;
	// 	} )
	// 	.catch( err => {
	// 		console.error( err.stack );
	// 	} );
    // CKEDITOR.replace( 'des_msg', {
    // extraPlugins: 'easyimage',
    // cloudServices_tokenUrl: 'https://example.com/cs-token-endpoint',
    // cloudServices_uploadUrl: 'https://your-organization-id.cke-cs.com/easyimage/upload/'
// } );


</script>
<!-- <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> -->

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
       function changeLang(){
        var languageSelect = $('.lanChange').val();
       var newURL = window.location.pathname + '?lang=' + languageSelect ;
        window.location.href = newURL;
    }
</script>

</body>

</html>