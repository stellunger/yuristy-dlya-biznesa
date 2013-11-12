<style>
.slide * {
position:absolute;
top: -10000px;
left: -10000px;
}
</style>
<div class="jumbotron" style="">
    <div class="slider hidden-xs" style="margin:0px auto;"> 

      <div id="slide2" class="slide">
        <div class="h1wrap" style="width: 100%; text-align: center;" data-position="180,0" data-out="fade" data-in="fade" data-delay="100">
            <h1><span style="color:#fff; font-weight:100;">Комплексный подход.</span> <span style="color:#d6941e;">Большой опыт.</span></h1>
            <p style="width: 100%; text-align: center;" data-position="140,0" data-out="fade" style="color: #fff; opacity: .5; white-space: nowrap;" data-delay="20" data-in="left">Наши клиенты чувствуют себя в безопасности и уверены в решении своих вопросов.</p>
        </div>
        <p style="width: 100%; text-align: center;" data-position="230,0" data-out="fade" style="color: #fff; opacity: .5; white-space: nowrap;" data-delay="20" data-in="left">Наши клиенты чувствуют себя в безопасности и уверены в решении своих вопросов.</p>
        <div data-delay="200"></div>
      </div>

  </div>
  <div class="clearfix"></div>
</div>

<div class="container">

    <h2 class="section-title">Наши услуги</h2>
    <div class="row">

        <div class="col-md-4 feature">
            <img src="images/lawsuits.jpg" class="img-responsive">
            <h3>Коммерческие споры</h3>
            <p>Споры по всем видам договоров: поставки, купли-продажи, подряда,
            оказания услуг, перевозки, хранения, аренды и другим.</p>
            <a href="<?php echo base_url(); ?>kommercheskie-spory" type="button" class="btn btn-success"><b>Коммерческие споры >></b></a>
        </div>

        <div class="col-md-4 feature">
            <img src="images/guidance.jpg" class="img-responsive">
            <h3>Сопровождение бизнеса</h3>
            <p>Юридическое абонентское обслуживание предприятия на постоянной основе.
            Гибкая система оплаты.</p>
            <a href="<?php echo base_url(); ?>soprovogdenie-biznesa" type="button" class="btn btn-success"><b>Сопровождение бизнеса >></b></a>
        </div>

        <div class="col-md-4 feature">
            <img src="images/partners.jpg" class="img-responsive">
            <h3>Проверка контрагентов</h3>
            <p>Не только формальная проверка - также проверяем судебную
            историю контрагента, кредитную историю руководителей и др.</p>
            <a href="<?php echo base_url(); ?>proverka-kontragentov" type="button" class="btn btn-success"><b>Проверка контрагентов >></b></a>
        </div>  

    </div>

    <hr /><br /><br />

    <div class="row">

        <div class="col-md-4 feature">
            <img src="images/bankruptcy.jpg" class="img-responsive">
            <h3>Банкротство</h3>
            <p>Не подходим к работе формально. Оказываем максимально качественные услуги.
            Имеем достаточный опыт.</p>
            <a href="<?php echo base_url(); ?>bankrotstvo" type="button" class="btn btn-success"><b>Банкротство >></b></a>
        </div>
    
        <div class="col-md-4 feature">
            <img src="images/business.jpg" class="img-responsive">
            <h3>Купля-продажа бизнеса</h3>
            <p>Комплексное сопровождение сделок по купле-продаже бизнеса на всех этапах.
            Работаем быстро и качественно.</p>
            <a href="<?php echo base_url(); ?>kuplya-prodaga-biznesa" type="button" class="btn btn-success"><b>Купля-продажа бизнеса >></b></a>
        </div>    
            
        <div class="col-md-4 feature">
            <img src="images/tax.jpg" class="img-responsive">
            <h3>Снижение земельного налога</h3>
            <p>Поможем снизить платежи на землю в 3, 5 или 10 раз. Представительство
            ваших интересов в Арбитражном суде.</p>
            <a href="<?php echo base_url(); ?>snigenie-zemelnogo-naloga" type="button" class="btn btn-success"><b>Снижение земельного налога >></b></a>
        </div>

    </div>

    <?php echo $contact_us; ?>
    
</div>