    <footer>
        <div class="main-contact-form full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="wrapper-main-contact full-width">
                            <div class="cont-contact">
                                <h1>Connect with us</h1>
                                <span class="time-work">Round the clock from 8:00 to 18:00</span>
                                <h3>Address</h3>
                                <div class="address-info">
                                    <span>Gryaznova 4a</span>
                                    <span>Zaporozhye, Ukraine, 69000</span>
                                    <span>(+888) 88-88-888</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="wrapper-main-form full-width">
                            <div class="cont-form">
                                <form method="post" id="mainpage-form">
                                        <input type="text" name="telephone" id="mob-user" placeholder="PHONE" required>
                                        <input type="text" name="firstname" id="name-user" placeholder="NAME" required>
                                        <input type="text" name="lastname" id="lastname-user" placeholder="SURNAME" required>
                                        <textarea name="message-user" id="message-user" placeholder="MESSAGE" required></textarea>
                                        <input type="submit"  class="submit" onclick="validate('error')" value="Contact">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-footer full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="wrapper-pr full-width">
                            <h1>2017 - all rights reserved</h1>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapper-dev full-width">
                            <h3>Developed by : Aleksandr Melent'yev ,</h3>
                            <span>Vitaliy Belyy</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wrapper-design full-width">
                            <h3>Site design : Arkhipov Sergey</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id='scroll'>
            <span><i class="fa fa-angle-up" aria-hidden="true"></i></span>
        </div>
        <?php 
            wp_footer();
        ?>
    </footer>
</body>
</html>