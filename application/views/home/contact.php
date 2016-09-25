<?php
/**
 * PHP MVC template
 *
 * @package jpFramework
 * @author JP
 * @link http://www.???.com
 * @version 0.3a
 *
 * @copyright 2016
 *
 * Description
 **/

 ?>
<div id="map" style="height:400px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14373.363108731743!2d-80.20286546482552!3d25.759305313653837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b680b32f18ad%3A0x4ad3029ff324f4d5!2sBrickell%2C+Miami%2C+Florida!5e0!3m2!1sit!2sus!4v1466288370599" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="marker-wrapper">
        <div class="marker-icon"></div>
        <div class="marker"></div>
    </div>
    <div id="directions">
        <p>Get directions to our office</p>
        <form>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Write your zip code" />
            </div>
            <button type="submit" class="button button-small">
                <span>Get directions</span>
            </button>
        </form>
    </div>
</div>
<div id="info">
    <div class="container">
        <div class="row">
            <div class="col-md-8 message">
                <h3>Send us a message</h3>
                <p>
                    You can contact us with anything related to React. <br /> We'll get in touch with you as soon as possible.
                </p>
                <form role="form" id="contact-form" method="post">
                    <div class="form-group">
                        <label for="name">Your name</label>
                        <input type="text" name="name" class="form-control" id="name" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" />
                    </div>
                    <div class="form-group">
                        <label for="message">Your message</label>
                        <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                    </div>
                    <div class="submit">
                        <input type="submit" class="button button-small" value="Email us" />
                    </div>
                </form>
            </div>
            <div class="col-md-4 contact">
                <div class="address">
                    <h3>Our Address</h3>
                    <p>
                        <?php echo MY_COMPANY;?>, <br />
						<?php echo MY_ADDRESS1;?>, <br />
						<?php echo MY_ADDRESS2;?>
                    </p>
                </div>
                <div class="phone">
                    <h3>By Phone</h3>
                    <p>
						<?php echo MY_PHONE;?>
                    </p>
                </div>
                <div class="online-support">
                    <strong>Looking for online support?</strong>
                    <p>
                        Talk to us now with our online chat
                    </p>
                </div>
                <div class="social">
                    <a href="#" class="fb"><img src="images/social/fb.png" alt="facebook" /></a>
                    <a href="#" class="tw"><img src="images/social/tw.png" alt="twitter" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
