<section class="footer-start">
   <div class="footer">
        <div class="footer-area">
            <div class="widget">
            <img class="pic" src="assets/images/logo.png" alt="">

                <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="social">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>

                </div>
            </div>

            <div class="widget">
                <h3>Payments</h3>
                <ul>
                    <img src="assets/images/e.png" alt="">
                </ul>

            </div>

            <div class="widget">
                <h3>Customer Care
</h3>
                <ul>
                <li><a href="">Return & Refunds</a> </li>
                    <li><a href="">Terms & Conditions</a> </li>
                    <li><a href="">Helpline : 01322810867 </a> </li>
                   
                    <li><a href="">Order Track</a> </li>
                   
                </ul>

            </div>

            <div class="widget">
                <h3>Subscribtion</h3>
                <form class="Subscribtion">
                    <input type="text" name="email" id="email">
                    <button type="submit">Subscribtion</button>
                </form>



            </div>
            
        </div>
        
    </div>
   </section>

    

<!-- footer area end-->

<!-- footer bottom start-->

<section class="bottom-area">
    <div class="footer-bottom">
        <p>© 2022 Copyright Spire Technology Ltd. All Rights Reserved</p>

    </div>
</section>

<!-- footer bottom end-->

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script>
    $('.manu-icon').click(function(event){
        $('.manu').toggleClass('show');
    });

    
  var loadFile = function(event) {
    var output = document.getElementById('profile_image');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

</script>