<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
   
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GreenGraspumzi : Richiesta accettata!</title>
    <meta property="og:title" content="GreenGraspumzi : Richiesta accettata!" />
    <meta property="og:image" content="logodesign.svg" />
    
    <meta property="og:description" content="GreenGraspumzi : Richiesta accettata!" />
    <meta name="description" content="GreenGraspumzi : Richiesta accettata!" />
    <meta name="twitter:title" content="GreenGraspumzi : Richiesta accettata!">
    <meta name="twitter:image:src" content="logodesign.svg"/>
    <link rel="stylesheet" href="components/styles/bootstrap.css" />
    <link rel="stylesheet" href="components/styles/button.css" />
    <link rel="stylesheet" href="components/styles/icons.css" />
    <link rel="stylesheet" href="components/styles/slick.css" />
    <link rel="stylesheet" href="components/styles/slick-theme.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    

    <link rel="shortcut icon" href="logodesign.svg" type="image/x-icon" />
    <script src="components/code/jquery.min.js"></script>
    <script src="components/code/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet" />
    


    <style>
       body{
           direction: ltr;
           font-family: 'Saira Condensed', sans-serif;
           font-size: 17px;
           margin: 0;
           padding: 0px;
       }



*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
img, video{
    max-width: 100%;
}
ul, nav{

    list-style: none;
}
a
{  text-decoration: none;
    cursor: pointer;
    opacity: 0.9;
 }

h1{
    color: #FFD700;
    text-align: center;
    padding-bottom: 20px;
}
h3 {
    color: #FFD700;
    text-align: center;
    font-size: 35px;
    font-weight: bold;
}
.features h3 {
    color: #fff;
}
.contact h3 {
    color: #fff;
}
.paddingStyle {
padding-top: 65px;
padding-bottom: 65px;
}

section p ul {
	padding: 0 20px;
}
.navig a {
    font-size: 18px;
}
ul.grid{
	width: 100%;
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
}

.stats--block{
      display: flex;
      gap: 20px;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      text-align: center;
  }
  .stat--block__item{
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 13px;
  }
  .stat--block__item i{
      font-size: 35px;
  }
  .stat--block__item h3{
      font-size: 16px;
      margin: 0px;
  }
  .stat--block__item div{
      font-size: 34px;
      font-weight: 600;
  }


ul {
    margin: 0;
    padding: 0;
}
header {
    background: #FFD700;
    opacity: 1;
    padding: 28px;
}
.boxs {
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.boxs p {
    color: inherit;
}
.boxs a {
    color: inherit;
}
.logtip-box {
    display: flex;
    align-items: center;
    justify-content: center;
    align-items: center;
}
.logtip-box img {
    height: 50px;
}
.logtip-box p {
    font-size: 20px;
    padding: 5px;
}
.navig {
    display: flex;
}
.navig a {
    padding: 5px;
}
.navig a:hover{
	opacity: 1;
    color: #c4b6b6;
    border-bottom: solid 2px #c4b6b6;
}

.slid img {
    height: 60%;
    object-fit: cover;
    background-position: center;
}
.slid-p {
    background-color: background: rgba(255,255,255,0.5); color: #222;;
    border: 2px solid background: rgba(255,255,255,0.5); color: #222;;
    border-radius: 20px;
    opacity: 0.8;
}

.slid p {
    color: white;
    opacity: 1;
    padding: 5px;
    font-size: 30px;
}
.main {
    display: flex;
    gap: 28px;
}
.main-content {
    padding: 0px 36px;
}
.main-content  p{
    color: #333;
}
.main-content  li {
    color: #333;
}
.stats--boxing{
    padding-top: 36px;
}
.titlePadding{
    padding-bottom: 36px;
    margin-bottom: 0px;
}

.content-img1 {
    height: 165px;
    border-radius: 10px;
    float: left;
    margin: 0px 13px 13px 13px;
}

.forma {
    background: #FFD700;
    opacity: 0.8;
    border-radius: 20px;
    padding: 36px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    max-height: 100%;
    height: 100%;
    margin-top: 30px;
}
.forma a {
    color: #000000;
}
.forma-icon {
    font-size: 200px;
    text-align: center;
    color: white;
    padding-bottom: 30px;
}
.form-text {
     text-align: center;
     font-size: 24px;
}
.mb-3 {
    color: inherit;
}
.coment {
    height: 100px;
}
.btn {
    background: #001E6C;
    margin: 0 auto;
    display: block;
    width: 100%;
    border: solid 2px #001E6C;
    color: #c4b6b6;
}
.btn:hover {
    background: #c4b6b6;
    border: solid 2px #c4b6b6;
    color: #001E6C;
}
.icon i {
    font-size: 34px;
    color: #c4b6b6;
}
.icon {
    flex-direction: column;
    display: flex;
    align-items: center;
}
.icon a {
    word-break: break-all;
}
.our-work{
	background-color: #fff;
}
.our-work p{
	text-align: center;
    font-size: 24px;
    padding: 13px;
}
.reviewsp {
    text-align: center;
    padding-bottom: 25px;
}

.features{
	background: #FFD700;
    opacity: 1;
}
.features p {
    text-align: center;
    font-size: 24px;
}

.reviews {
	text-align: center;
	font-size: 22px;
    font-weight: 300;
    line-height: 1.5;
}

.contact{
	background: #FFD700;
    opacity: 1;
    padding: 13px;
}

.contact p{
    font-size: 24px;
}
.cont i {
    padding: 5px;
}
.cont {
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 40%;
    gap: 13px;
}
.karta {
    width: 60%;
}

.conter {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-template-areas:
    'job1 job2'
    'job3 job4';
    gap: 22px;
}
.job1 {
    grid-area: job1;
}
.job2 {
    grid-area: job2;
}
.job3 {
    grid-area: job3;
}
.job4 {
    grid-area: job4;
}
.conter img {
    height: 200px;
}
.linev {
    width: 50px;
    padding: 2px;
    margin-top: 10px;
    background: #830910;
}
.vidgyk {
    display: flex;
    margin: 10px;
    box-shadow: 3px 0px 7px 0px rgb(0 0 0 / 19%);
    border-top: solid #FFD700;
    border-bottom: solid #FFD700;
    border-width: 2px;
    flex-direction: column;
    gap:13px;
    align-items: center;
}
.slider__wrapper{
    direction: ltr;
}
.name {
    font-size: 34px;
    color: black;
    text-align: start;
    font-weight: bold;
}
.textvidgyk {
    font-size: 20px;
    text-align: start;
    color: rgb(128,128,128);
}

.vidgyk img {
    height: 200px;
    width: 180px;
}

.cont {
    display: flex;
}
.mb-_form {
    display: flex;
    flex-direction: column;
    gap: 13px;
}
.slider--box{
    position: relative;
}
.contentHead{
    position: absolute;
    top: 50%;
    left: 10%;
    transform: translate(-10%, -50%);
    width: 50%;
    font-size: 35px;
    padding: 36px;
}
.input-user_element__item{
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.textarea-user_element__item{
    width: 100%;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    padding: 0.375rem 0.75rem;
}
.hr {
    height: 3px;
}
    .slider__items {
      counter-reset: slide;
      direction: ltr;
    }

    .slider__item {
      overflow: hidden;
      position: relative;
      counter-increment: slide;
      height: 320px;
    }

    .slider__item::after {
      content: counter(slide);
      position: absolute;
      top: 10px;
      right: 20px;
      color: #fff;
      font-style: italic;
      font-size: 32px;
      font-weight: bold;
    }

    .slider img {
      display: inline-block;
      height: auto;
      max-width: 100%;
      border-radius: 50%;

    }

    .slider__item {
        background-color: white;

    }
    .slider__item_inner {
      position: absolute;
      left: 8%;
      right: 8%;
      top: 36px;
      bottom: 36px;
      overflow: hidden;
      color: #fff;
      text-align: center;
      display: flex;
      flex-direction: column;
      gap: 22px;
      align-items: center;
      direction: ltr;
    }

    .slider__item_img {
      flex: 0 0 100px;
      max-width: 100px;
    }

    .slider__item_testimonial {
      flex: 1 0 0;
      display: flex;
      flex-direction: column;
      text-align: center;

    }

   .slider__item_name {
        font-size: 18px;
        margin-bottom: 8px;
        color:  #000000;
        text-align: start;
        padding-top: 10px;
        font-weight: bold;
    }

    .slider__item_text {
      font-size: 16px;
      color: rgba(113, 113, 113);
      text-align: start;
    }

    .gallery {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    grid-template-rows: repeat(5, 5vw);
    grid-gap: 1.5rem;
    }
    .gallery__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    }
    .gallery__item--1 {
    grid-column-start: 1;
    grid-column-end: 3;
    grid-row-start: 1;
    grid-row-end: 3;
    }
    .gallery__item--2 {
    grid-column-start: 3;
    grid-column-end: 5;
    grid-row-start: 1;
    grid-row-end: 3;
    }
    .gallery__item--3 {
    grid-column-start: 5;
    grid-column-end: 9;
    grid-row-start: 1;
    grid-row-end: 6;
    }
    .gallery__item--4 {
    grid-column-start: 1;
    grid-column-end: 5;
    grid-row-start: 3;
    grid-row-end: 6;
    }

    #section-4 .container{
        gap: 36px;
    }
    .slick-dots li button:before {
    font-family: none;
    font-size: 50px;
    line-height: 20px;
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    content: '-';
    text-align: center;
    opacity: .25;
    color:  white;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.slick-dots li.slick-active button:before {
    opacity: .75;
    color: white;
}
.price--box{
    margin-top: 22px;
    font-size: 24px;
    font-weight: 600;
}
.contentHead a{
    display: flex;
    margin-top: 28px;
    padding: 21px;
    justify-content: center;
    text-align: center;
    align-items: center;
}
.linki {
    display: flex;
    justify-content: center;
    align-items: center;
}

.contentHead {
    background-color: #FFD700cc
}
.slid-p {
    background-color: #8d9aba80
}

       #cookie-footerxy--overlay{
           display: none;
           justify-content: space-between;
           align-items: center;
           position: fixed;
           bottom: 22px;
           left: 50%;
           width: 1232px;
           max-width: 90%;
           transform: translateX(-50%);
           padding: 22px;
           background-color:  #44000D;
           border-radius: 10px;
           box-shadow: 2px 3px 10px rgba(0, 0, 0, 0.6);
           gap: 22px;
           z-index: 999999;
       }
       #cookie-footerxy--overlay button{
           max-width: 200px;
           width: 100%;
       }

       #cookie-footerxy--overlay p{
           margin: 0;
           font-size: 15px;
           color: #fff;
       }


       @media (min-width: 576px){
           #cookie-footerxy--overlay.show{
               display: flex;
           }
       }

       @media (max-width: 575px){
           #cookie-footerxy--overlay.show{
               display: flex;
               flex-direction: column;
           }
           button{
               width: 100%;
           }
           .contentHead {
            height: 100%;
            padding: 10px;
            font-size: 16px !important;
           }
           .boxs {
            gap: 10px;
           }
       }
    </style>
    <link rel="stylesheet" href="components/styles/media-query.css?12113" />
    
  </head>

  <body>
    
    <header class="header">
        <div class="boxs flex-row">
            <div class="logtip-box">
                <img src="logodesign.svg" alt="logo" />
                <p>GreenGraspumzi</p>
            </div>
            <nav>
                <ul class="navig">
                    <li><a href="./#section-1">Casa</a></li>
                    <li><a href="./#section-2">Come agiamo: comprendere il nostro approccio al settore immobiliare</a></li>
                    <li><a href="./#section-3">Recensioni</a></li>
                    <li><a href="./#section-4">Chi Siamo</a></li>
                      
                </ul>
            </nav>
        </div>
    </header>
    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-promo-groupcd{
		margin: 0px;
		padding: 0px;
		font-family: 'Inconsolata', sans-serif;
		width: 100%;
		font-size: 17px;
		padding: 315px 0px;
	}
	.bodyClass1-promo-groupcd{
		background: #ffffff;
		color: #ffffff;
	}
	.bodyClass2-promo-groupcd{
		background: #fff;
		color: #fff;
	}
	.bodyClass3-promo-groupcd{
		background: #fff;
		color: #111;
	}
	.wrapage-block-promo-groupcd{
		background-size: 100%;
		width: 100%;
	}
	.box_main-promo-groupcd{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-promo-groupcd h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-promo-groupcd p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-promo-groupcd{
		text-align: center;
	}
	.mainBlock-promo-groupcd ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-promo-groupcd ul>li span{
		font-weight: bold;
	}
	.mainBlock-promo-groupcd{
		max-width: 816px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-promo-groupcd .cBlock-promo-groupcd{
		text-align: center;
	}

	.bodyClass3-promo-groupcd .mainBlock-promo-groupcd{
		background: none;
		border-top: 2px dotted #dbf6e9;
		border-bottom: 2px dotted #dbf6e9;
	}
	.bodyClass2-promo-groupcd .mainBlock-promo-groupcd{
		background: #000000;
		color: #fff !important;
		box-shadow: 0px 0px 0px #000000;
	}
	.bodyClass2-promo-groupcd .mainBlock-promo-groupcd p{
		color: #fff !important;
	}
	.bodyClass1-promo-groupcd .mainBlock-promo-groupcd{
		background: #FE5E5C;
		color: #ffffff;
		border-left: 2px solid #310B0B;
	}
	.bodyClass1-promo-groupcd .mainBlock-promo-groupcd p{
		color: #ffffff !important;
	}
	.order-promo-groupcd{
		font-size: 18px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-promo-groupcd p{
			padding: 0px 15px;
		  }
		  .box_main-promo-groupcd h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-promo-groupcd{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-promo-groupcd{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-promo-groupcd" id="mainWrapp-promo-groupcd">


	<div class="wrapage-block-promo-groupcd">
		<div class="box_main-promo-groupcd">
			<div class="mainBlock-promo-groupcd">
				<p>Siamo davvero grati per il vostro impegno e per la fiducia che avete riposto in noi. Il tuo supporto consente al nostro team dedicato di migliorare continuamente il calibro delle nostre offerte.</p>
<p>Ricordate che le vostre intuizioni, i vostri feedback e i vostri suggerimenti sono preziosi per la nostra crescita ed evoluzione. Se hai qualcosa in mente o se hai bisogno di assistenza, non esitare a contattarci. Il nostro impegno è quello di essere prontamente disponibili ad assistervi.</p>
<p class="cBlock-promo-groupcd">Grazie di cuore e calorosi auguri!</p>
			</div>
		</div>
	</div>


</div>



    <section id="section-5" class="contact paddingStyle">
        <div  class="container paddingStyle">
         
        </div>
        <div class="linki container">
            <a style="color: #c4b6b6;"  href="privacy.html" target="_blank">Informativa sulla privacy</a>
        </div>
        <div class="linki container">
            <a style="color: #c4b6b6;"  href="serviceTerms.html" target="_blank">Termini e condizioni</a>
        </div>
        <div class="linki container">
           <a style="color: #c4b6b6;" href="disclaimer.html" target="_blank">Disconoscimento</a>
        </div>
    </section>


    
    <script type="text/javascript" src="components/code/slick.js"></script>
    <script type="text/javascript" src="components/code/lightbox.js"></script>

    <script >
        let sliderHeight = $('.slider__item_inner').height();
        $('.slider__item').css('height',sliderHeight+100+'px');

        if($('.main').hasClass('flex-column') || $('.main').hasClass('flex-column-reverse')){
            $('.cont').css('width','100%');
            $('.karta').css('width','100%');
            $('.icon').css({'flex-direction':'column','align-items':'center'});
        }
        if($('.vidgyk').css('flex-direction') == 'row-reverse'){
            $('.vidgyk').css('justify-content','space-between');
        }
        if($('.vidgyk').css('flex-direction') == 'column'){
            $('.name, .textvidgyk').css('text-align','center');
            $('.linev').css('margin','10px auto');
            $('.vidgyk img').css({'height':'335px','width':'100%','object-fit':'cover'});
        }
        $('.fnbox').each(function() {
            $(this).attr('href', $(this).children('img').attr('src'));
        });

        let countNumber = 1;


        $('.slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: countNumber,
        slidesToScroll: 1,
        arrows: false,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                arrows: false,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                arrows: false,
                slidesToScroll: 1
            }
            }
        ]
        });

        if($('.headBox .row').hasClass('flex-column')){
        $('.logtip--box').css('justify-content','center');
        $('.headBox h3').css('text-align','center');
        }

        let mheiStyle = $('.content-img1').prop('naturalHeight');
        let mwidStyle = $('.content-img1').prop('naturalWidth');

        if(mheiStyle == mwidStyle){
            if(mwidStyle > 600){
                $('.content-img1').css({'width':'50%','height':'auto'});
            }
        }
        if(mheiStyle > mwidStyle){
            if(mheiStyle < 2500 && mheiStyle > 700){
                $('.content-img1').css({'width':'25%','height':'auto'});
            }
            if(mheiStyle < 700 && mheiStyle > 500){
                $('.content-img1"').css({'width':'50%','height':'auto'});
            }
        }
        if(mheiStyle < mwidStyle){
            if(mwidStyle < 600){
                $('.content-img1').css({'width':'500px','height':'auto'});
            }
        }

        $('.slick-dots li button').css('color','rgba(255 255 255)');

        let sections = $('section'),
        nav = $('nav'),
        nav_height = nav.outerHeight();
        $(window).on('scroll', function () {
            $('nav a').removeClass('active');
            let cur_pos = $(this).scrollTop();
            sections.each(function() {
                let top = $(this).offset().top - nav_height - 180,
                bottom = top + $(this).outerHeight();
                if (cur_pos >= top && cur_pos <= bottom) {
                    nav.find('a').removeClass('active');
                    sections.removeClass('active');
                    $(this).addClass('active');
                    nav.find('a[href="#'+$(this).attr('id')+'"]').addClass('active');
                }
            });
        });
        nav.find('a').on('click', function () {
            let $el = $(this),
            id = $el.attr('href');
            $('html, body').animate({
                scrollTop: $(id).offset().top - nav_height
            }, 600);
            return false;
        });

        document.addEventListener('DOMContentLoaded', function() {
            const header = document.querySelector('header');
            const contentHead = document.querySelectorAll('.contentHead');
            const forma = document.querySelector('.forma');
            const formText = document.querySelectorAll('.form-text');
            const contact = document.querySelector('.contact');
            const footerLinks = document.querySelectorAll('.foote, a.foote');

            function changeTextColorBasedOnBgColor(element, textElements) {
                const bgColor = window.getComputedStyle(element).backgroundColor;
                if (tinycolor(bgColor).isLight()) {
                    element.style.color = '#222';
                    textElements.forEach(el => el.style.color = '#222');
                } else {
                    element.style.color = '#fff';
                    textElements.forEach(el => el.style.color = '#fff');
                }
            }

            if (header) changeTextColorBasedOnBgColor(header, [...contentHead]);
            if (forma) changeTextColorBasedOnBgColor(forma, [...formText]);
            if (contact) changeTextColorBasedOnBgColor(contact, [...footerLinks]);
        });



</script>

    

</body>
</html>
