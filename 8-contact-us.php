<?php include "template/header.php" ?>
    <a class="up-line" href="javascript:history.back();">
        <div class="container">
            <div class="text">подробнее</div>
        </div>
    </a>
<?php include "template/slider.php" ?>
<div class="container">
    <div class="contact-us clearfix">
        <h2>Адрес:</h2>
        <p>Украина, г. Киев,</p>
        <p>ул.Ярославов Вал, 36-38</p>
        <h2>Контактные телефоны:</h2>
        <p>+ 38 (044)</p>
        <p>+ 38 (067) 402-62-62</p>
        <p>+ 38 (044)  (факс)</p>
        <h2>Контактный E-mail:</h2>
        <p>Sasha.sivun@yandex.ua</p>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d635.0837423570857!2d30.507311512968077!3d50.45348676446088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce5dcb6877cd%3A0xe4fc83e358de3b60!2z0LLRg9C7LiDQr9GA0L7RgdC70LDQstGW0LIg0JLQsNC7LCAzNiwg0JrQuNGX0LI!5e0!3m2!1suk!2sua!4v1458737506779" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <form class="clearfix" action="#">
            <label for="fio">* Контактное лицо</label>
            <input required type="text" id="fio">
            <label for="organization">Организация</label>
            <input type="text" id="organization">
            <label for="telephone">Контактный телефон</label>
            <input type="tel" id="telephone">
            <label for="email">* E-mail</label>
            <input required type="email" id="email">
            <label for="subject">Тема</label>
            <input type="text">
            <label for="question">Ваш вопрос или заказ</label>
            <textarea id="question"></textarea>
            <input type="submit" value="Отправить">
        </form>
    </div>

</div>



<?php include "template/footer.php" ?>
