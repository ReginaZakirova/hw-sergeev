<?php
    include('header.php');

    $date1 = strtotime(date('d-m-Y'));
    $date2 = strtotime("29-06-1993");
    $days = floor(($date1 - $date2) / (60 * 60 * 24));
?>
            <div class="foto_bar ">
                    <div class="foto">
                        <img src="images/php.png" alt="">
                    </div>
            </div>
            <div class="right_bar">
                        <div class="fio">
                                <h3>Сергеев Владимир Алексеевич</h3>
                                <div class="date_now">
                                    Текущая дата: <?=date('d-m-Y')?>
                                    День рождения: 29-06-1993<br>
                                    Жив дней: <?=$days?>
                                </div>
                            <div class="line"></div>
                        </div>

                        <div class="info">
                                <h4>О себе:</h4>
                            <?php
                            $stroka = 'Проходил обучение в Магнитогорском Индустриальном колледже по профессии "Программное обеспечение вычислительной техники и автоматизированных систем".
                                Работал веб-программистом в ООО "Логика", занимался техподдержкой сайтов и разработкой сайтов на CMS Bitrix.
                                После работал в ОВД. В данный момент хочу вернуться в программирование.';
                            $arr = explode(' ',$stroka);
                            $stroka = str_replace($arr[0],"<span class='green'>".$arr[0]."</span>",$stroka);
                            echo $stroka;
                            ?>

                        </div>
                        <div class="like">
                                <h4>Про занятия:</h4>
                            <?php
                            $stroka = 'Занятия отличные, для новичков не плохой старт. И очень жаль что отстуствует обучение по Bootstrap, JQuery, JS, хотя бы элементарное обучение AJAX, но понимаю что в такой короткий срок изучить их не получится.';
                            $arr = explode(' ',$stroka);
                            $i=0;
                            foreach ($arr as $value){
                                if($i%2==0){
                                    $str = $str."<span class='green'>".$arr[$i]."</span> ";
                                }else{
                                    $str = $str."<span class='red'>".$arr[$i]."</span> ";
                                }
                                $i++;
                            }
                            echo $str;
                            ?>
                                </div>
                <div class="line"></div>
            </div>
            <div class="clear"></div>
        <br>
            <div class="line"></div>
            <div class="open_container" id="open_container">Открыть картинки FLEX/GRID</div>
            <div class="open" style="display: none">
                <h3 align="center">Блоки картинок на FlexBox</h3>
                <br>
                <h4 align="center">Вариант 1</h4>
                <div class="flex_image">
                    <div class="flex_container">
                        <div class="capture"><img src="images/belka.png" alt=""></div>
                        <div class="write">Это просто рыжая белка</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/slon.png" alt=""></div>
                        <div class="write">Большой ушастый слон</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/sobaka.png" alt=""></div>
                        <div class="write">Собака улыбака домашняя</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/medved.png" alt=""></div>
                        <div class="write">Медведь бурый одна штука</div>
                    </div>
                </div>
                <br>
                <h4 align="center">Вариант 2</h4>
                <div class="flex_image dop_flex">
                    <div class="flex_container">
                        <div class="capture"><img src="images/belka.png" alt=""></div>
                        <div class="write">Это просто рыжая белка</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/slon.png" alt=""></div>
                        <div class="write">Большой ушастый слон</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/sobaka.png" alt=""></div>
                        <div class="write">Собака улыбака домашняя</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/medved.png" alt=""></div>
                        <div class="write">Медведь бурый одна штука</div>
                    </div>
                </div>
                <div class="line"></div>
                <br>
                <div class="line"></div>
                <h3 align="center">Блоки картинок на GRID</h3>
                <br>
                <h4 align="center">Вариант 1</h4>
                <div class="grid">
                    <div class="flex_container">
                        <div class="capture"><img src="images/belka.png" alt=""></div>
                        <div class="write">Это просто рыжая белка</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/slon.png" alt=""></div>
                        <div class="write">Большой ушастый слон</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/sobaka.png" alt=""></div>
                        <div class="write">Собака улыбака домашняя</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/medved.png" alt=""></div>
                        <div class="write">Медведь бурый одна штука</div>
                    </div>
                </div>
                <br>
                <h4 align="center">Вариант 2</h4>
                <div class="grid dop_grid">
                    <div class="flex_container">
                        <div class="capture"><img src="images/belka.png" alt=""></div>
                        <div class="write">Это просто рыжая белка</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/slon.png" alt=""></div>
                        <div class="write">Большой ушастый слон</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/sobaka.png" alt=""></div>
                        <div class="write">Собака улыбака домашняя</div>
                    </div>
                    <div class="flex_container">
                        <div class="capture"><img src="images/medved.png" alt=""></div>
                        <div class="write">Медведь бурый одна штука</div>
                    </div>
                </div>

            </div>
            <div class="line"></div>
<?php
include('footer.php');
?>