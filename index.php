
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Animation Republic</title>
   <link rel="shortcut icon" href="assets/images/ar-nav-logo.svg">

   <!-- Bootstrap core CSS -->

   <link href="assets/css/cssloader.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="assets/fa/css/font-awesome.min.css">
   <link href="style.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="style.css" title="ori"/>
   <link rel="stylesheet" type="text/css" href="assets/css/colors/dark4/dark4.css"/>
   <!-- Color -->
   <link rel="stylesheet" type="text/css" href="assets/css/demo/color-picker.css">
   <link rel="stylesheet" type="text/css" href="assets/css/colors/dark4/blue.css" title="blue"/>
   <link rel="stylesheet" type="text/css" href="assets/css/colors/dark4/yellow.css" title="yellow"/>
   <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
   <link rel="stylesheet" type="text/css" href="assets/css/daneden-animate.css">

</head>

<body data-spy="scroll" data-offset='90'>
   <!-- Color Picker -->
   <!-- <div id="color-picker">
   <h3>CHANGE SKIN <a href="#"><i class="fa fa-cogs"></i></a></h3>
   <div id="options">
   <ul class="colors thumbs">
   <li><a href="#" class="ori" onclick="setActiveStyleSheet('ori'); return false;"></a></li>
   <li><a href="#" class="yellow" onclick="setActiveStyleSheet('yellow'); return false;"></a></li>
   <li><a href="#" class="blue" onclick="setActiveStyleSheet('blue'); return false;"></a></li>
</ul>
</div>
</div>	 -->


<table class="doc-loader">
   <tr>
      <td>
         <div class="mapPreLoading">
            <span class="l-1"></span>
            <span class="l-2"></span>
            <span class="l-3"></span>
            <span class="l-4"></span>
            <span class="l-5"></span>
            <span class="l-6"></span>
         </div>
      </td>
   </tr>
</table>

<div class="scroll-contain">
   <div class="scroll">

      <?php require_once '_sections/1_home.php' ?>

      <?php require_once '_includes/header.php'; ?>

      <?php require_once '_sections/2_about.php' ?>

      <?php require_once '_sections/3_services.php' ?>

      <?php require_once '_sections/6_work.php' ?>

      <?php require_once '_sections/7_contact.php' ?>

      <?php require_once '_includes/footer.php' ?>
   </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/vide/libs/jquery/dist/jquery.min.js"><\/script>')</script>
<script type="text/javascript" src="assets/vide/src/jquery.vide.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="assets/js/parallax/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="assets/js/nav/sscr.js"></script>
<script type="text/javascript" src="assets/js/nav/jquery.sticky.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="assets/js/appear.js"></script>
<script type="text/javascript" src="assets/js/flexslider/jquery.flexslider.js"></script>
<script type="text/javascript" src="assets/js/filterable/jquery.quicksand.js"></script>
<script type="text/javascript" src="assets/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="assets/js/gmap/jquery.gmap.min.js"></script>
<script type="text/javascript" src="assets/js/gmap/map.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="assets/js/demo/styleswitcher.js"></script>
<script type="text/javascript" src="assets/js/demo/color-picker.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript">
$('#ajax-form').submit(function(e) {
   e.preventDefault();
   if($('#name').val() && $('.email').val() !== '' && $('.message').val() !== '') {
      $.ajax({
         type: 'POST',
         url: 'https://mandrillapp.com/api/1.0/messages/send.json',
         data: {
            'key': 'gdvHcJE91JQo1xDxlO7y7Q',
            'message': {
               'from_email': 'ahmadnauroz@gmail.com',
               'to': [
                  {
                     'email': 'ahmadnauroz@gmail.com',
                     'name': 'Nauroz Ahmad',
                     'type': 'to'
                  }
               ],
               'autotext': 'true',
               'subject': 'AR contacted.',
               'html': '<strong>From: </strong>' + $('#name').val() + '<br />' +
               '<strong>Email: </strong>' + $('.email').val() + '<br />' +
               '<strong>Message: </strong>' + $('.message').val()
            }
         }
      }).done(function() {
         // console.log(response); // if you're into that sorta th
         $('.form-messages').text('You made contact! We\'ll get to you shortly.');
         $('.form-messages').css('display', 'block');
         $('.email').val('');
         $('.message').val('');
         $('.name').val('');
      });
   } else {
      $('.form-messages').text('Please fill all the fields.');
      $('.form-messages').css('display', 'block');
   }
});
</script>
</body>
</html>
