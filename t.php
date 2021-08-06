<?php 
require("private/initialize.php");
$users=find_group_users("5998036171628159910610bbfa6e92eb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.theme.default.min.css">
    <script language="JavaScript" type="text/javascript" src="assets/js/jquery.min.js"></script>
    
</head>
<body>

<div class="owl-carousel  mojoman owl-theme" style="width: 300px;">
    <?php 
        while($data=mysqli_fetch_assoc($users)){
    ?>
    <div class="item">
            <img src="assets/images/avatar/<?php echo $data['avatar'];?>" >
            <h4 class="text-center" style="text-align:center;font-size: 10px;"><?php echo $data["username"];?></h4>
        </div>
        <?php } ?>
    </div>


</body>
<script>
    $(document).ready(function () {

        var owl = $('.owl-carousel.mojoman');
        owl.owlCarousel({
            animateOut: 'slideOutDown',
            stagePadding: 40,
            items: 3,
            loop: true,
            margin: 10,
            dots: false

        });
        owl.on('mousewheel', '.owl-stage', function (e) {
            if (e.deltaY > 0) {
                owl.trigger('next.owl');
            } else {
                owl.trigger('prev.owl');
            }
            e.preventDefault();
        });


    });

</script>


<script src="assets/js/jquery.mousewheel.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
</body>
</html>