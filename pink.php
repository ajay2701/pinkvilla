<!doctype html>
<html lang="en-US" class="has-lab-nav-bottom lab-theme-light">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Pink</title>
    <link rel="stylesheet" type="text/css" href="pink.css">
</head>
<body>
<div class="container">

	<div class="wrapper">
	  		
	  
	<div class="pinkdivsinline">

        <?php 
            $domain_name = 'https://pinkvilla.com/';
            $data = file_get_contents('https://cdn.pinkvilla.com/feed/fashion-section.json');
            $data = json_decode($data);

            usort($data, function($a, $b) {
                return $a->viewCount > $b->viewCount ? -1 : 1; 
            });                                                                                                                  
        ?>


        <?php 
            foreach ($data as $key => $value) { ?>
                <div class="item">
                    <a href='<?php echo $domain_name.$value->path; ?>'><img class="lazy" data-src='<?php echo $value->imageUrl; ?>' alt='<?php echo $value->title; ?>' title='<?php echo $value->title; ?>' width='<?php echo $value->image->width; ?>' height='<?php echo $value->image->height; ?>' /></a>
                    <div class="_descriptions">
                        <p>
                            <a href="<?php echo $domain_name.$value->path; ?>"><?php echo $value->title; ?></a>
                        </p>
                    </div>
                </div>

        <?php } ?>
        

	</div>
</div>	
	</div>
                    
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.lazy.min.js"></script>
    <script type="text/javascript">
            $(function() {
        $('.lazy').lazy();
    });

    </script>

</body>
</html>