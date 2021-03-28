<?php
             
             if (!empty($_POST['name'])&&!empty($_POST['section'])&&
             !empty($_POST['card_number'])&&!empty($_POST['card_type'])){
                $name = $_POST['name']."\n";
                $section = $_POST['section']."\n";
                $cardnumber = $_POST['cardnumber']."\n";
                $cardtype = $_POST['cardtype']."\n";
  $fp = fopen('suckers.txt', 'a');
  fwrite($fp, $name);
  fwrite($fp, $section);
  fwrite($fp, $cardnumber);
  fwrite($fp, $cardtype);
  
  
  fclose($fp);
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>Buy Your Way to a Better Education!</h1>

    <p>
        The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades
        for money. That's right! All you need to get a 4.0 in this course is cold, hard, cash.
    </p>

    <hr />

    <h2>Give Us Your Money</h2>
    <form action="sucker.php" method="post">
        <dl>
            <dt>Name</dt>
            <dd>
                <?php echo $_POST["name"]?>

            </dd>

            <dt>Section</dt>
            <dd>
                <?php echo $_POST["section"]?>
            </dd>

            <dt>Credit Card</dt>
            <dd>
                <?php echo $_POST["cardnumber"]?>
                <?php echo $_POST["cardtype"]?>
            </dd>
        </dl>

        <div>
            <input type="submit" value="I am a giant sucker." />
        </div>
    </form>
</body>

</html>
<?php
}else{
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <h1>Sorry</h1>

    <p>
        You didn't fill out the form completely. <a href="javascript:history.back()"> Try again?</a>
    </p>


</body>

</html>
<?php
}
?>