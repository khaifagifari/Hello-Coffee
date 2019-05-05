<footer class="footer">

                        <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link" href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
                        <div class="h4 title text-center">Hello Coffee</div>
                  <div align="center">
                  <table>
                  <tr>
                        <td><div class="h6 title text-center"><a href="<?php echo base_url('About/') ?>">About</a></div></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><div class="h6 title text-center"><a href="<?php echo base_url('FAQ/') ?>">FAQ</a></div></td>
                  </tr>
                  </table>
                  </div>
                  <div class="text-center text-muted">
                  <p>&copy;2017.</p>
                  </div>
            
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script> $(document).ready(function() {
	$(".menu-icon").on("click", function() {
		$("nav ul").toggleClass("showing");
	});
});

      // Scrolling Effect

      $(window).on("scroll", function() {
      	if($(window).scrollTop()) {
      		$('nav').addClass('black');
      	}

      	else {
      		$('nav').removeClass('black');
      	}
      })</script>


</body>
</html>