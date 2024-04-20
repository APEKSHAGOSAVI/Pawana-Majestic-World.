<div class="container">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">PAWANA</h3><br>
            <p>
            Pawana lakeside Camping is blending the worlds of adventure and exploration
             with sustainable and rural tourism with Camping as main activity. 
             Our travel strategy is made to help rural communities
            </p>
        </div>
        <div class="col-lg-4 p-4">
            
            <h5 class="mb-4 fw-bold">LINKS</h5>

            <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
            <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
            <a href="gallery.php" class="d-inline-block mb-2 text-dark text-decoration-none">Gallery</a> <br>
            <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>
            <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
          
        </div>
      
        <div class="col-lg-4 p-4">
            <h5 class="mb-4 fw-bold">FOLLOW US</h5>

            <a href="https://www.twitter.com/" class="d-inline-block text-dark text-decoration-none " >
                <i class="bi bi-twitter me-1"></i> Twitter
            </a><br>
            <a href="https://www.facebook.com/" class="d-inline-block text-dark text-decoration-none ">
                <i class="bi bi-facebook me-1"></i> Facebook
            </a><br>
            <a href="https://www.instagram.com/" class="d-inline-block text-dark text-decoration-none ">
                <i class="bi bi-instagram me-1"></i> Instagram
            </a><br>
        </div>
    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0 fw-bold">Designed and Developed by .....</h6>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

<script>
    function setActive() {
        let navbar = document.getElementById('nav-bar');
        let a_tags = navbar.getElementsByTagName('a');

        for (i = 0; i < a_tags.length; i++) {
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if (document.location.href.indexOf(file_name) >= 0) {
                a_tags[i].classlist.add('active');
            }
        }
    }
  setActive();
</script>