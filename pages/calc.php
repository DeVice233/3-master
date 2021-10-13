
<h2>Донатик :3 (Желательно в теңге ت)</h2>
<form action="/calc" method="post">
    <div class="mb-3">
        <label class="from-label">Введите исходное значение</label>
        <input type="text" class="form-control" name="a">
        <select class="form-select" name="action">
            <option value="Доллары">Доллары</option>
            <option value="Рубли">Рубли</option>
            <option value="Грiвнi">Грiвнi</option>
            <option value="Тенге">Тенге</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="from-label">Искомое</label>
        <br>
        <?php
//        require_once('includes/function.php');
        echo calc();
        ?>
        <select class="form-select" name="choose">
            <option value="Доллары">Доллары</option>
            <option value="Рубли">Рубли</option>
            <option value="Грiвнi">Грiвнi</option>
            <option value="Тенге">Тенге</option>
        </select>
    </div>


        <button type="submit" class="btn btn-primary" style="max-height:40px; margin-top: 10px;" name="btnCalc">Подсчитать</button>
        <button type="button" class="btn btn-primary" style="max-height:40px; margin-top: 10px;" >Задонатить</button>

</form>