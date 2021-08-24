<div>

<label>Captcha</label>

<span id="captcha-info" class="info"></span><br/>

<input type="text" name="captcha" id="captcha" class="demoInputBox"><br>

</div>

<div>

<img id="captcha_code" src="captcha.php" />

<button name="submit" class="btnRefresh" onClick="refreshCaptcha();">Refresh Captcha</button>
    <script>
        if(!$("#captcha").val()) {
            $("#captcha-info").html("(required)");
            $("#captcha").css('background-color','#FFFFDF');
            valid = false;
        }
    </script>
    <script>
        function refreshCaptcha() {
        $("#captcha_code").attr('src','captcha.php');
        }
    </script>
    <?php
        session_start();
        $random_alpha = md5(rand());
        $captcha_code = substr($random_alpha, 0, 6);
        $_SESSION["captcha_code"] = $captcha_code;
        $target_layer = imagecreatetruecolor(70,30);
        $captcha_background = imagecolorallocate($target_layer, 255, 160, 119);
        imagefill($target_layer,0,0,$captcha_background);
        $captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);
        imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
        header("Content-type: image/jpeg");
        imagejpeg($target_layer);
    ?>
</div>