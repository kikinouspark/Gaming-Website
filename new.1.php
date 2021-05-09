<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Gaming Website</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript">

        $(window).on('scroll', function(){
            if($(window).scrollTop()) {
                $('nav').addClass('black');
            }
            else{
                $('nav').removeClass('black');
            }
        })
      
      </script>
</head>
<body>
      <div class="wrapper">
            <header>
                        <slider class="sliding">
                                    <slide><p></p>  </slide>
                                    <slide><p></p>  </slide>
                                    <slide><p></p>  </slide>
                                    <slide><p></p>  </slide>     
                        </slider>
                  <?php 
                        require_once 'component.php';
                        header('Homepage');
                  ?>
            </header>
      </div>
          <footer>
                <div>
                        <p> Hi i am just the footer of this webpage copyright to my creator Laurent Duval.</p>
                </div>
          </footer>   
</body>
</html>