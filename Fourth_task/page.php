<?php
$text = <<<TXT
<p class="big">
    Год основания:<b>1589 г.</b> Волгоград отмечает день города в <b>2-е воскресенье сентября</b>. <br>В <b>2023 году</b> эта дата - <b>10 сентября</b>.
</p>
<p class="float">
    <img src="https://www.calend.ru/img/content_events/i0/961.jpg" alt="Волгоград" width="300" height="200" itemprop="image">
    <span class="caption gray">Скульптура «Родина-мать зовет!» входит в число семи чудес России (Фото: Art Konovalov, по лицензии shutterstock.com)</span>
</p>
<p>
    <i><b>Великая Отечественная война в истории города</b></i></p><p><i>Важнейшей операцией Советской Армии в Великой Отечественной войне стала <a href="https://www.calend.ru/holidays/0/0/1869/">Сталинградская битва</a> (17.07.1942 - 02.02.1943). Целью боевых действий советских войск являлись оборона  Сталинграда и разгром действовавшей на сталинградском направлении группировки противника. Победа советских войск в Сталинградской битве имела решающее значение для победы Советского Союза в Великой Отечественной войне.</i>
</p>
TXT;

preg_match_all("#<[^>]+?>|\S+?(?=(\s|<))#u", $text, $match);//Сохраняем в один массив по порядку html теги и сам текст

$index = 0;
$counter = 0;

foreach ($match[0] as $key => $word) {//Пробегаемся по полученному массиву, проверяя каждый элемент является ли он словом(предварительно избавляемся
    //от html тегов внутри элементов, чтобы не брать их в счет). Дойдя до 29 слова мы сохраняем его индекс в массиве и выходим из цикла
    $word = strip_tags($word);
    if (!preg_match("@^[-:,_=<>%#~`&!;\'\".\?\$\s]+$@", $word) and strlen($word) !== 0) $counter++;
    if ($counter === 29) {
        $index = $key;
        break;
    }
}

$newText = implode(' ', array_slice($match[0], 0, $index + 1)) . '...';//Обьединяем эти 29 слов и все html теги до 29 слова в одну строку
$newText = preg_replace("#(?<=>)\s+\.#", ".", $newText);//Решаем кое какие проблемы с форматированием, там получились лишние пробелы между последним словом в предложении и точкой
$newText = preg_replace_callback("#(<[bi]>)\s+#", function($match) {
    return "$match[1]";
}, $newText);
$newText = preg_replace_callback("#\s+?(</[bi]>)#", function($match) {
    return "$match[1]";
}, $newText);

echo $newText;//Выводим уже новый сокращенный текст, при этом сохранив форматирование