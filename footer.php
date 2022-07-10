<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

</div> <!-- #primary-->
</div> <!--#primary-wrapp-->
<div id="footer">
         <div id="f_middle">
            <ul class="list visible-md visible-lg">
               <li>
                  <a data-target="#sale_system" data-toggle="modal" title="Система скидок" href="javascript:PopUpShow1()"><span class="sale_system hover-shadow"></span>Система скидок</a>
               </li>
               <li>
                  <a title="Новости" href="javascript:PopUpShow3()"><span class="news hover-shadow"></span>Гарантия на товар</a>
               </li>
               <li>
                  <a data-target="#delivery" data-toggle="modal" title="Доставка и оплата" href="javascript:PopUpShow2()"><span class="delivery hover-shadow" ></span>Доставка и оплата</a>
               </li>
               <li>
                  <a href="mailto:kultpara@kultpara.com.ua" title="Написать"><span class="email hover-shadow"></span>kultpara@kultpara.com.ua</a>
               </li>
               <li>
                  <a data-target="#pay_info" data-toggle="modal" title="Безопасность онлайн" href="javascript:PopUpShow4()"><span class="opt hover-shadow"></span>Безопасность онлайн</a>
               </li>
               <li>
                  <a href="callto:+380960616279" title="Набрать"><span class="phone hover-shadow"></span>+(380)96061-6279</a>
               </li>
            </ul>
			
			<ul class="list xs">
               <li>
                  <a href="callto:+380960616279" title="Набрать"><span class="phone hover-shadow"></span>+(380)96061-6279</a>
               </li>
			                  <li>
                  <a href="mailto:kultpara@kultpara.com.ua" title="Написать"><span class="email hover-shadow"></span>kultpara@kultpara.com.ua</a>
               </li>
			    <li>
                  <a title="Новости" href="javascript:PopUpShow3()"><span class="news hover-shadow"></span>Гарантия на товар</a>
               </li>
			</ul>
            <div class="bottle">
               <div class="vk buzz" title="Мы в вконтакте">
                  <a href="https://vk.com/kult_para_ukraine" aria-label="VK" target="_blank">
					<i class="fa fa-vk" aria-hidden="true"></i>
				  </a>
               </div>
               <div class="fb buzz" title="Мы на фейсбуке">
                  <a href="https://www.facebook.com/kultpara/" aria-label="FB"target="_blank">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				  </a>
               </div>
               <div class="inst buzz" title="Мы в инстаграме">
                  <a href="https://www.instagram.com/kultparavapeshop/" aria-label="Instagram" target="_blank">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				  </a>
               </div>
               <div class="tg buzz" title="Мы в телеграме">
                  <a href="https://t.me/kultpara" aria-label="Telegram" target="_blank">
					<i class="fa fa-telegram" aria-hidden="true"></i>
				  </a>
               </div>
            </div>
            <div class="pay_subscribe">
              <div class="pay_system visible-md visible-lg">
                  <p>Принимаем к оплате:</p>
                  <div class="mastercard"></div>
                  <div class="maestro"></div>
                  <div class="paypal"></div>
                  <div class="visa"></div>
               </div> 
            </div>
            <div class="copyright visible-md visible-lg">
               <p>kultpara@kultpara.com.ua</p>
            </div>
         </div>
      </div>
	  

		<!-- </div> --><!-- .site-info -->
	<!-- </footer> --><!-- .site-footer -->

<!-- </div>24.17 --><!-- .site -->

<!-- <script>
$(document).ready(function() {

// Открытие корзины при наведении
$('.cart-punkt').hover(function() {
   $('.widget_shopping_cart').toggleClass('open');
   });

});
</script> -->




<?php wp_footer(); ?>
        
   <div class="modal fade in pop1" id="delivery" role="dialog" style="display: none;">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <a href="javascript:PopUpHide1()"><button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"><i class="fa fa-close"></i></button></a>
               <h4 class="modal-title"><span></span>СИСТЕМА СКИДОК</h4>
            </div>
            <div class="modal-body">
               <p>
                  <b>
                  </b>
               </p>
               <p style="text-align: center;">
                  В Kultpara Club действует накопительная система скидок 3%,5% 7%,10%.<br>
                  При покупке Вы получаете наш купон с наименованием 3%.
               </p>
            </div>
         </div>
        </div>
       <a href="javascript:PopUpHide()">Hide popup</a>
   </div>
   
   <div class="modal fade in pop2" id="delivery" role="dialog" style="display: none;">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <a href="javascript:PopUpHide2()"><button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"><i class="fa fa-close"></i></button></a>
               <h4 class="modal-title"><span></span>ДОСТАВКА И ОПЛАТА</h4>
            </div>
            <div class="modal-body">
               <p>
                  <b>
                  </b>
               </p>
               <p style="text-align: center;"><b>
                  Отправка товара производиться Новой Почтой
                  </b>
               </p>
               <b>
                  <p style="text-align: center;">
                     Мы находимся по адресу:&nbsp;
                  </p>
                  <p style="text-align: center;">
                     г.Одесса Люфсдорская дорога 140/1
                  </p>
                  <p style="text-align: center;">
                     Режим работы:
                  </p>
                  <p style="text-align: center;">
                     ПН - ПТ с 11:00 до 22:00
                  </p>
                  <p style="text-align: center;">
                     СБ - ВС с 12:00 до 22:00
                  </p>
                  <p style="text-align: center;">
                     Телефоны: <br>+380935753403 лайф<br>+380960616279 киевстар
                  </p>
                  <p style="text-align: center;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.7582727780673!2d30.72437481516936!3d46.413848177595874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6336ff7e679cd%3A0xd218aef31379b2ac!2z0JvRjtGB0YLQtNC-0YDRhNGB0YzQutCwINC00L7RgNC-0LPQsCwgMTQwLCDQntC00LXRgdCwLCDQntC00LXRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LA!5e0!3m2!1sru!2sde!4v1497621613018" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </p>
            
               <p style="text-align: center;">
                  <br>
               </p>
               <p></p>
            </div>
         </div>
        </div>
       <a href="javascript:PopUpHide()">Hide popup</a>
   </div>

   <div class="modal fade in pop3" id="delivery" role="dialog" style="display: none;">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <a href="javascript:PopUpHide3()"><button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"><i class="fa fa-close"></i></button></a>
               <h4 class="modal-title"><span></span>ГАРАНТИЯ</h4>
            </div>
            <div class="modal-body">
               <p>
                  <b>
                  </b>
               </p>
               <p style="text-align: center;">
                  <b>На все устройства от 6 до 12 мес. в зависимости от условий производителей продукции, гарантия распространяется на заводской брак, при соблюдении условий эксплуатации.</b>
               </p>
            </div>
         </div>
        </div>
       <a href="javascript:PopUpHide()">Hide popup</a>
   </div>
       
   <div class="modal fade in pop4" id="delivery" role="dialog" style="display: none;">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <a href="javascript:PopUpHide4()"><button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"><i class="fa fa-close"></i></button></a>
               <h4 class="modal-title"><span></span>БЕЗОПАСТНОСТЬ ОНЛАИН</h4>
            </div>
            <div class="modal-body">
               <p>
                  <b>
                  </b>
               </p>
               <p style="text-align: center;">
                  <b>Защита ваших транзакций</b>
               </p>
               <b>
                  <p style="text-align: center;">Наш сайт подключён к системе безопасных электронных платежей ПриватБанка, которая позволяет оплачивать наши услуги по любым картам Visa и MasterCard, выпущенных любыми зарубежными банками. Система безопасных электронных платежей реализована на самом современном стандарте безопасности - 3D Secure, который обеспечит максимальную безопасность Ваших платежей в Интернет.</p>

                  <p style="text-align: center;">Технология 3D Secure является частью глобальных программ Visa "Verified by Visa" и MasterCard «MAsterCardSecureCode», целью которых является предоставление и обеспечение безопасных и надежных методов оплаты товаров и услуг в глобальной сети Интернет.</p>

                  <p style="text-align: center;">Более 15 миллионов держателей карт Visa по всему миру являются активными пользователями услуги Verified by Visa при совершении покупок в Интернете. Сегодня стандарт 3-D Secure Систему поддерживают более 40 тысяч Интернет-магазинов и более 15 тысяч банков по всему миру.</p>

                  <p style="text-align: center;">Заботясь о предоставлении нашим клиентам наиболее прогрессивных элементов онлайн-безопасности, мы внедрили этот стандарт и на нашем сайте. Оплата по картам Visa и MasterCard теперь максимально безопасны!</p>\
               </b>
            </div>
         </div>
        </div>
   </div>
  
   <div class="modal fade in pop5" id="delivery" role="dialog" style="display: none;">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <a href="javascript:PopUpHide5()"><button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"><i class="fa fa-close"></i></button></a>
                  <h4 class="modal-title"><!-- <span></span> -->KULTPARA</h4>
               </div>
               <div class="modal-body">
                  <p>
                     <b>
                     </b>
                  </p>
                  <p style="text-align: center;"><b>
                     Наше местополежение
                     </b>
                  </p>
                  <b>
                  <p style="text-align: center;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2750.7582727780673!2d30.72437481516936!3d46.413848177595874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6336ff7e679cd%3A0xd218aef31379b2ac!2z0JvRjtGB0YLQtNC-0YDRhNGB0YzQutCwINC00L7RgNC-0LPQsCwgMTQwLCDQntC00LXRgdCwLCDQntC00LXRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwg0KPQutGA0LDQuNC90LA!5e0!3m2!1sru!2sde!4v1497621613018" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
                  </p>
                  <p>
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2749.211873623775!2d30.74755681559061!3d46.44449877912482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c633ebd4adf497%3A0x1201b4dd26f7001a!2sMarshala%20Hovorova%20St%2C%2010%2C%20Odesa%2C%20Odes&#39;ka%20oblast%2C%2065000!5e0!3m2!1sen!2sua!4v1652529905438!5m2!1sen!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </p>
               </div>
         </div>
      </div>
   </div> 
   
      <div class="modal fade in pop6" id="delivery" role="dialog" style="display: none;">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <a href="javascript:PopUpHide6()"><button type="button" class="close glyphicon glyphicon-remove" data-dismiss="modal"><i class="fa fa-close"></i></button></a>
               <h4 class="modal-title"><span></span>ТЕЛЕФОНЫ</h4>
            </div>
            <div class="modal-body">
               <p>
                  <b>
                  </b>
               </p>
               <p style="text-align: center;"><b>Киевстав</b></p>
			   <p style="text-align: center;"><a href="callto:+380960616279" style="color:black">+(380)96061-6279</a></p>
			   <p style="text-align: center;"><b>Лайф</b></p>
			   <p style="text-align: center;"><a href="callto:+380935753403" style="color:black">+(380)93575-3403</a></p>

            </div>
         </div>
        </div>
       <a href="javascript:PopUpHide()">Hide popup</a>
   </div>
   
<script>
    $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        // PopUpHide1();
        // PopUpHide2();
        // PopUpHide3();
        // PopUpHide4();
        // PopUpHide5();
    });
/*1*/
    //Функция отображения PopUp система скидок
    function PopUpShow1(){
        $(".pop1").css({"display":"block"});
        $(".pop1").show();
    }
    //Функция скрытия PopUp система скидок
    function PopUpHide1(){
        $(".pop1").hide();
    }
/*2*/
   //доставка и оплата
    function PopUpShow2(){
     $(".pop2").css({"display":"block"});
        $(".pop2").show();
    }
    //Функция скрытия PopUp доставка и оплата
    function PopUpHide2(){
        $(".pop2").hide();
    }
/*3*/
   // безопастность онлаин
    function PopUpShow3(){
   $(".pop3").css({"display":"block"});
        $(".pop3").show();
    }
    //Функция скрытия PopUp безопастность онлаин
    function PopUpHide3(){
        $(".pop3").hide();
    }  
/*4*/
   //гарантия на товар
    function PopUpShow4(){
      $(".pop4").css({"display":"block"});
        $(".pop4").show();
    }
    //Функция скрытия PopUp гарантия на товар
    function PopUpHide4(){
        $(".pop4").hide();
    }      
/*5*/
   //наше место положение
    function PopUpShow5(){
      $(".pop5").css({"display":"block"});      
        $(".pop5").show();
    }
    //Функция скрытия PopUp наше место положение
    function PopUpHide5(){
        $(".pop5").hide();
    } 
/*6*/
   //наше место положение
    function PopUpShow6(){
      $(".pop6").css({"display":"block"});      
        $(".pop6").show();
    }
    //Функция скрытия PopUp наше место положение
    function PopUpHide6(){
        $(".pop6").hide();
    } 	
</script>
		<script src="/wp-content/themes/twentyfifteen/js/scroll-startstop.events.jquery.js"></script>
		<div style="display:none;" class="nav_up" id="nav_up"></div>
		<div style="display:none;" class="nav_down" id="nav_down"></div>
        
		<script>
			$(function() {
				var $elem = $('#primary');
				
				$('#nav_up').fadeIn('slow');
				$('#nav_down').fadeIn('slow');  
				
				$(window).bind('scrollstart', function(){
					$('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
				});
				$(window).bind('scrollstop', function(){
					$('#nav_up,#nav_down').stop().animate({'opacity':'1'});
				});
				
				$('#nav_down').click(
					function (e) {
						$('html, body').animate({scrollTop: $elem.height()}, 800);
					}
				);
				$('#nav_up').click(
					function (e) {
						$('html, body').animate({scrollTop: '0px'}, 800);
					}
				);
            });
        </script>
		
<!--end buttons-->
<div class="widgets_blocks">
	<a class="widgets" href="/отзывы/" style="background:black url(/wp-content/themes/twentyfifteen/image/kult_why/icons_widgets.png) -166px -336px no-repeat">Отзывы</a>
	<a class="widgets" href="/%d0%bd%d0%b0%d1%88%d0%b8-%d0%b4%d0%be%d1%81%d1%82%d0%be%d0%b8%d0%bd%d1%81%d1%82%d0%b2%d0%b0/" style="background: black url(/wp-content/themes/twentyfifteen/image/kult_why/icons_widgets.png) -390px -434px no-repeat">Почему мы?</a>
	<a class="widgets" href="https://www.youtube.com/channel/UCPyph8IiUySlJ-6gIjRxNcQ" style="background:black url(/wp-content/themes/twentyfifteen/image/kult_why/icons_widgets.png) -53px -333px no-repeat">Youtube</a>
</div>

<style>
.widgets_blocks {
	position: fixed;
	bottom: 10px;
	width: 60px;
	height: 265px;
}

.widgets {
   padding: 7px;
   background-color: white;
   border: 1px solid #CCC;
   width: 100%;
   height: 80px;
   opacity: 1;
   left: 30px;
   cursor: pointer;
   -moz-border-radius: 3px 3px 3px 3px;
   -webkit-border-top-left-radius: 3px;
   -webkit-border-top-right-radius: 3px;
   -khtml-border-top-left-radius: 3px;
   -khtml-border-top-right-radius: 3px;
   filter: progid:DXImageTransform.Microsoft.Alpha(opacity=70);
	
	margin-bottom: 10px;
   margin-left: 10px;
	display: block;
	font-size: 10px;
	word-wrap: break-word;
	padding-top: 80%;
	text-align: center;
	color: white;
}
</style>
</body>

</html>
