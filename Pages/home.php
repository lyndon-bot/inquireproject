
<?php

include "../Functions/links.php";
include "../Functions/query.php";


$U_id = $_SESSION['U_id'];
$get = fetch(query("select * from users where U_id = '$U_id'"));
$_SESSION['Job_Title'] = $get['Job_Title']; 
$_SESSION['Company_N'] = $get['Company_N'];
$_SESSION['Company_E'] = $get['Company_E']; 
$_SESSION['Profile_Descrip'] = $get['Profile_Descrip'];

?>


<style>
@import "bootstrap/bootstrap-flex";

@media (min-width:34em) {
    .card-deck > .card
    {
        width: 29%;
        flex-wrap: wrap;
        flex: initial; 
    }
}


/* control image height */
.card-img-top-250 {
    max-height: 250px;
    overflow:hidden;
}

/* smoother transitions */
.carousel-inner>.carousel-item.next.left,
.carousel-inner>.carousel-item.prev.right
{
    transition: all 1s ease;
}

</style>

<script type="text/javascript">
	
(function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
})(jQuery);

</script>

<body id="body" style="width:95%; margin-left: auto; margin-right:auto;"> 

<section class="container p-t-3">
    <div class="row">
        <div class="col-lg-12">
            <h1>Bootstrap 4 Card Deck Slider</h1>
        </div>
    </div>
</section>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-md-right lead">
                <a class="btn btn-secondary-outline prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
                <a class="btn btn-secondary-outline next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2">
        <div class="row m-t-0">
            <div class="col-md-12">
                <div class="carousel-inner">
                <div class="card-deck carousel-item active">
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="http://i.imgur.com/EW5FgJM.png" alt="Carousel 1">
                        </div>
                        <div class="card-block p-t-2">
                            <h6 class="small text-wide p-b-2">Insight</h6>
                            <h2>
                            <a href="">Why Stuff Happens Every Year.</a>
                        </h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="http://i.imgur.com/Hw7sWGU.png" alt="Carousel 2">
                        </div>
                        <div class="card-block p-t-2">
                            <h6 class="small text-wide p-b-2">Development</h6>
                            <h2>
                            <a href="">How to Make Every Line Count.</a>
                        </h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="http://i.imgur.com/g27lAMl.png" alt="Carousel 3">
                        </div>
                        <div class="card-block p-t-2">
                            <h6 class="small text-wide p-b-2">Design</h6>
                            <h2>
                            <a href="">Responsive is Essential.</a>
                        </h2>
                        </div>
                    </div>
                </div>
                <div class="card-deck carousel-item">
                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="//visualhunt.com/photos/l/1/office-student-work-study.jpg" alt="Carousel 4">
                        </div>
                        <div class="card-block p-t-2">
                            <h6 class="small text-wide p-b-2">Another</h6>
                            <h2>
                            <a href="">Tagline or Call-to-action.</a>
                        </h2>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="//visualhunt.com/photos/l/1/working-woman-technology-computer.jpg" alt="Carousel 5">
                        </div>
                        <div class="card-block p-t-2">
                            <h6 class="small text-wide p-b-2"><span class="pull-xs-right">12.04</span> Category 1</h6>
                            <h2>
                            <a href="">This is a Blog Title.</a>
                        </h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-img-top card-img-top-250">
                            <img class="img-fluid" src="//visualhunt.com/photos/l/1/people-office-team-collaboration.jpg" alt="Carousel 6">
                        </div>
                        <div class="card-block p-t-2">
                            <h6 class="small text-wide p-b-2">Category 3</h6>
                            <h2>
                            <a href="">Catchy Title of a Blog Post.</a>
                        </h2>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php 
//include "../Functions/footer.php";
?>