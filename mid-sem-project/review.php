<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Feedback</title>
</head>
<body>
    <?
        if(isset($submit)){
            $to = "mwaithaddeus@gmail.com";
            $subject = "Feedback for the Cuts!";
            $body = "A user has entered feedback on the meat!\n";
            $body .= "Their feedback is:\n\n";
            $body .= $feedback;
            mail($to, $subject, $body);
            print("<h2>Thanks for your feedback! Keep Shopping!</h2>");
        } else {
            ?>
                <form action="review.php" method="POST">
                <h2>Please Send us your Feedback</h2>
                <textarea cols=35 rows=15 name="feedback">
                </textarea>
                <br>
                <input type="submit" name="submit" value="Submit">
                </form>
            <?
        }
    ?>
</body>
</html>