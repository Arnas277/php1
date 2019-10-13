##### **Kviečiamos keturios funkcijos vienodais pavadinimais, turinčios skirtingus namespace:**

<b>*calculateHomeWorkSum(3, 2.2, '1');</b> <i>//root namespace;</i><br>
Funkcija gražino 6.2 nes, nei funkcijoje, nei kviesdami ją nenurodėme duomenų tipų.<br>
Todėl funkcija prie trijų pridėjo 2.2 ir kadangi funkcijoje naudojau array_sum(); funkciją, ji automatiškai pakeitė '1' į integer tipo.<br>

<b>*calculateHomeWorkSum(3, 2.2, '1');</b> <i>//Nfq\Akademija\NotTyped namespace;</i><br>
Funkcija gražino 6, nes aprašant funkcija už skliaustelių buvo nurodyta ': int' tai reiškia, kad gražintas funkcijos rezultatas visada bus integer tipo.<br>

<b>*calculateHomeWorkSum(3, 2.2, '1');</b> <i>//Nfq\Akademija\Soft namespace;</i><br>
Funkcija gražino 6, nes aprašant funkciją buvo nurodyta, kad priimami kintamieji būtų tik integer tipo ir kad funkcija gražintų tik integer tipo atsakymą.<br>

<b>*calculateHomeWorkSum(3, 2.2, '1');</b> <i>//Nfq\Akademija\Strict namespace su declare(strict_type=1) direktyva;</i><br>
Funkcija gražino 6, nors ir aprašant funkciją jos faile buvo nurodyta declare(strict_type=1); direktyva.<br>
strict_type veikia tik tame faile kuriame buvo aprašyta. Šiuo atveju kviečiant funkciją iš kito failo klaidos funkcija nemes(nors ir buvo tikėtasi prieš pradedant daryti namų darbus).<br>
O toliau kaip ir prieš tai buvusioje funkcijoje buvo aprašoma, kad funkcija priims integer tipo duomenis ir gražins integer tipo atsakymą, todėl gražino 6.

