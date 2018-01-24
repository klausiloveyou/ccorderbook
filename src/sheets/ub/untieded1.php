<?php
/**
 * Created by IntelliJ IDEA.
 * User: klausiloveyou
 */
$designerteam = "Unusual Business";
$designer = "Cara Hofmann";
$stylename = "Untieded";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Orderbook [ ] - <?php echo $designerteam;?> - <?php echo $stylename;?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/ccorderbook.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand navbar-light bg-faded">
        <a class="navbar-brand" href="../../index.php">Orderbook</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../overview.php">Overview <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Unusual Business
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../ub/tomorrows_boss.php">Tomorrow&apos;s Boss</a>
                        <a class="dropdown-item active" href="../ub/untieded1.php">Untieded</a>
                        <a class="dropdown-item" href="../ub/vengeance1.php">Vengeance</a>
                        <a class="dropdown-item" href="../ub/laid_back1.php">Laid Back</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Urban Intrinsic
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../ui/paleraca1.php">Paleraca</a>
                        <a class="dropdown-item" href="../ui/neplica1.php">Neplica</a>
                        <a class="dropdown-item" href="../ui/darnytsa.php">Darnytsa</a>
                        <a class="dropdown-item" href="../ui/functia1.php">Functia</a>
                        <a class="dropdown-item" href="../ui/excoria1.php">Excoria</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        The Overlook Hotel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../toh/fear_counting_sheep1.php">Fear Counting Sheep</a>
                        <a class="dropdown-item" href="../toh/dreamwalker1.php">Dreamwalker</a>
                        <a class="dropdown-item" href="../toh/poor_joe_where_are_you_now1.php">Poor Joe where are you now</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Stacked Skin, Smooth Touch
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../ssst/diamond_dog1.php">Diamond Dog</a>
                        <a class="dropdown-item" href="../ssst/touch_liberation1.php">Touch Liberation</a>
                        <a class="dropdown-item" href="../ssst/the_one.php">The One</a>
                        <a class="dropdown-item" href="../ssst/sleepy_oop1.php">Sleepy Oop</a>
                        <a class="dropdown-item" href="../ssst/smooth_operator1.php">Smooth Operator</a>
                    </div>
                </li>
            </ul>
        </div>
        <a class="navbar-right btn btn-default" href="../ub/untieded2.php" aria-label="Next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </a>
    </nav>
</div>
<div class="container sheet">
    <div class="row">
        <div class="col-md-2 text-left">
            <img height="200" src="../../img/unusual_business/untieded.jpg">
        </div>
        <div class="col-md-8 text-center">
            <h1 class="sheet-header">[&nbsp;&nbsp;] chicy cleptomanic</h1>
            <p class="text-left sheet-header-text"><small>Designerteam: <?php echo $designerteam;?></small></p>
            <hr class="sheet-line"/>
            <p class="text-left sheet-header-text"><small>Designer: <?php echo $designer;?></small></p>
            <hr class="sheet-line"/>
            <p class="text-left sheet-header-text"><small>Stylename: <?php echo $stylename;?></small></p>
        </div>
        <div class="col-md-2 text-right">
            <img height="200" src="../../img/barcode.jpg">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="javascript:void(0);" method="post">
                <input type="hidden" name="designerteam" value="<?php echo $designerteam;?>">
                <input type="hidden" name="designer" value="<?php echo $designer;?>">
                <input type="hidden" name="stylename" value="<?php echo $stylename;?>">
                <table class="table table-bordered no-border-left no-border-right">
                    <tr>
                        <td class="vertical-text"></td>
                        <td colspan="5" class="text-center"><img src="../../img/unusual_business/untieded_1.jpg" height="150" alt="Piece 1"/></td>
                        <td colspan="5" class="text-center"><img src="../../img/unusual_business/untieded_2.jpg" height="150" alt="Piece 2"/></td>
                        <td colspan="5" class="text-center"><img src="../../img/unusual_business/untieded_3.jpg" height="150" alt="Piece 3"/></td>
                    </tr>
                    <tr>
                        <td class="text-right">Size</td>
                        <td class="no-border-right no-border-bottom"></td>
                        <td class="no-border-right no-border-bottom no-border-left"></td>
                        <td class="no-border-bottom no-border-left"></td>
                        <td class="text-right">Quantity</td>
                        <td class="no-border-right"></td>
                        <td class="no-border-right no-border-bottom no-border-left"></td>
                        <td class="no-border-right no-border-bottom no-border-left"></td>
                        <td class="no-border-bottom no-border-left"></td>
                        <td class="text-right">Quantity</td>
                        <td class="no-border-right"></td>
                        <td class="no-border-right no-border-bottom no-border-left"></td>
                        <td class="no-border-right no-border-bottom no-border-left"></td>
                        <td class="no-border-bottom no-border-left"></td>
                        <td class="text-right">Quantity</td>
                        <td class="no-border-right"></td>
                    </tr>
                    <tr>
                        <td class="text-right"><b>46</b></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="46_1" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="46_2" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="46_3" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                    </tr>
                    <tr>
                        <td class="text-right"><b>48</b></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="48_1" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="48_2" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="48_3" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                    </tr>
                    <tr>
                        <td class="text-right"><b>50</b></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="50_1" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="50_2" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="50_3" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                    </tr>
                    <tr>
                        <td class="text-right"><b>52</b></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="52_1" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="52_2" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="52_3" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                    </tr>
                    <tr>
                        <td class="text-right"><b>54</b></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="54_1" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="54_2" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="54_3" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                    </tr>
                    <tr>
                        <td class="text-right"><b>56</b></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="56_1" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="56_2" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                        <td class="no-border-top no-border-bottom no-border-right"></td>
                        <td class="no-border-top no-border-bottom no-border-right no-border-left"></td>
                        <td class="no-border-top no-border-bottom no-border-left"></td>
                        <td class="text-right"><input type="number" disabled name="56_3" min="0" max="999" value="0"/></td>
                        <td><input type="checkbox" value=""/></td>
                    </tr>
                    <tr>
                        <td class="no-border-left no-border-right"></td>
                        <td class="no-border-right no-border-top no-border-left"></td>
                        <td class="no-border-right no-border-left no-border-top"></td>
                        <td class="no-border-left no-border-top"></td>
                        <td class="text-right sum-1">0</td>
                        <td class="no-border-right"></td>
                        <td class="no-border-left no-border-top no-border-right"></td>
                        <td class="no-border-left no-border-top no-border-right"></td>
                        <td class="no-border-left no-border-top"></td>
                        <td class="text-right sum-2">0</td>
                        <td class="no-border-right"></td>
                        <td class="no-border-left no-border-top no-border-right"></td>
                        <td class="no-border-left no-border-top no-border-right"></td>
                        <td class="no-border-top no-border-left"></td>
                        <td class="text-right sum-3">0</td>
                        <td class="no-border-right"></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="align-middle">Date: <?php echo gmdate("Y-m-d"); ?></td>
                        <td colspan="6"><input type="text" class="form-control" placeholder="Company" name="company" required></td>
                        <td colspan="7"><input type="email" class="form-control" placeholder="Email" name="email" required></td>
                        <td colspan="1" class="text-center"><button type="submit" class="btn btn-secondary">Order</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS, Popper.js  jQuery-->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("form").submit(function() {
        var str = $(this).serialize();
        $.post("../../order.php", str, function(result) {
            alert("Thanks for your order.\nA copy has been sent to your email address.");
        });
        return(false);
    });

    $("input[type='number']").change(function () {
        calculateSum(this);
    });

    $("input[type='checkbox']").change(function() {
        if ($(this).prop("checked")) {
            $(this).parent().prev().find("input").prop('disabled', false);
        } else {
            $(this).parent().prev().find("input").val("0");
            calculateSum($(this).closest("tr").find("input[type='number']"));
            $(this).parent().prev().find("input").prop('disabled', true);
        }
    });

    function calculateSum (element) {
        var num = $(element).attr("name").slice(-1);
        var sum = 0;
        $.each($("input[type='number'][name$='"+num+"']"), function( index, value ) {
            sum += parseInt(value.value);
        });
        $("td.sum-"+num).text(sum);
    }
</script>
</body>
</html>