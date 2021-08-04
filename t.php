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

<div class="owl-carousel owl-theme">
        <div class="item">
            <h4>1</h4>
        </div>
        <div class="item">
            <h4>2</h4>
        </div>
        <div class="item">
            <h4>3</h4>
        </div>
        <div class="item">
            <h4>4</h4>
        </div>
        <div class="item">
            <h4>5</h4>
        </div>
        <div class="item">
            <h4>6</h4>
        </div>
        <div class="item">
            <h4>7</h4>
        </div>
        <div class="item">
            <h4>8</h4>
        </div>
        <div class="item">
            <h4>9</h4>
        </div>
        <div class="item">
            <h4>10</h4>
        </div>
        <div class="item">
            <h4>11</h4>
        </div>
        <div class="item">
            <h4>12</h4>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {

        var owl = $('.owl-carousel');
        owl.owlCarousel({
            animateOut: 'slideOutDown',
            stagePadding: 40,
            items: 4,
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