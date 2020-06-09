
<!DOCTYPE html>
<html lang=ru-RU>
    <head>
        <meta charset=UTF-8>
        <title>ЗАЛОГОВЫЙ БИЛЕТ</title>
        <link rel="stylesheet" href="css/style.css">
	</head>
	<body onload="window.print();">
    <div class="newPage1">
                    <div class="rko">
	
                        <p class="p101"> Приложение 1 </br>
                        к приказу Министра Финансов </br>
                             Республики Казахстан	</br>
                      от 20 декабря 2012 года №562</br>
                                                  </br>
                                          Форма КО-2</br></p>
                  
                        <p class="f101"> г.<?= $region;?>, <?= $adresslombard;?></p>
                  
                        <table class="Too">
                            <tr>
                                <td class="o101">ТОО "АКТИВ ЛОМБАРД"</td>
                            </tr>
                            <tr>
                                <td class="o1010">Организация (индивидуальный предприниматель)</td>
                           </tr>
                  
                        </table>
                        <table  class="line01">
                            <tr></tr>
                        </table>
                  
                  
                        <table class="row01">
                            <tr>
                              <td class="iin201">ИИН/БИН</td><td class="iin01">110840013121</td>
                            </tr>
                        </table>
                        
                      <table class="DT01">
                            <tr class="nm101">
                                <td class="nmdoc01">Номер документа</td>
                                <td class="dts01">Дата составления</td>
                            </tr>
                            <tr>
                                <td class="zb01"><?=$data_lost['nomerzb'];?></td>
  			                    <td class="data01"><?= date("d.m.Y", strtotime($data_lost['reg_data']));?></td>
                            </tr>
                        </table>
                  
                       <p class="order01">РАСХОДНЫЙ КАССОВЫЙ ОРДЕР</p>
                  
                       <table class="T101">
                           <tr class="H101">
                               <td  class="debet01">Дебет</td>
                               <td class="kredit01"rowspan="2">Кредит</td>
                               <td class="summa01" rowspan="2">Сумма, в тенге</td>
                               <td class="kod01" rowspan="2">Код целевого </br>назначения</td>
                           </tr>
                           <tr class="H201">
                               <td class="kredit01">Корреспондирующий счет</td>
                           </tr>
                           <tr class="H301">
                               <td class="debet201">1110</td>
                               <td class="kredit201">1110</td>
                               <td class="summa201"><?=$data_lost['summa_vydachy'];?></td>
                               <td class="kod201"></td>
                           </tr>
                       </table>
                    <div class="vydat">
                       <table class="T201">
                       <tr class="H401">
                               <td class="pr01">Выдать</td>
                               <td class="kl01" colspan="5"><?=$data_lost['fio'];?></td>
                       </tr>
                        <tr class="H401">
                               <td class="pr01">Основание</td>
                               <td class="kl01"colspan="5">Выдача микрокредита</td>
                       </tr>
                  
                       <tr class="H401">
                               <td class="pr01">Прилагаемые документы</td>
                               <td class="kl01"colspan="5">Залоговый билет №<?=$data_lost['nomerzb'];?> от <?= date("d.m.Y", strtotime($data_lost['reg_data']));?></td>
                       </tr>
                  
                       <tr class="H401">
                               <td class="pr01">Сумма</td>
                               <td class="kl01"colspan="5"></td>
                       </tr>
                       <tr class="H402">
                               <td class="pr01"></td>
                               <td class="prop"colspan="5">(прописью)</td>
                       </tr>
                      <tr class="H401">
                               <td class="ruc">Руководитель</td>
                               <td class="dolzhnost01">Директор</td>
                               <td class="slesh01">/</td>
                               <td class="Fio"><?=$fioeo;?></td>
                       </tr>
                       <tr class="H402">
                               <td class="pp01"></td>
                               <td class="dolzhnost101">(должность)</td>
                               <td class="podpis01">(подпись)</td>
                               <td class="Fio01">(расшифровка подписи)</td>
                       </tr>
                      <tr class="H401">
                               <td class="ruc" colspan="2">Главный бухгалтер или уполномоченное лицо</td>
                               <td class="slesh01">/</td>
                               <td class="Fio">Не предусмотрено</td>
                       </tr>
                       <tr class="H402">
                               <td class="pp01" colspan="2"></td>
                               <td class="podpis01">(подпись)</td>
                               <td class="Fio01">(расшифровка подписи)</td>
                       </tr>
                       </table>
                       <table class="T202">
                      <tr class="H401">
                               <td class="pol">Получил</td>
                               <td class="dt02"><?= date("d.m.Y", strtotime($data_lost['reg_data']));?></td>
                               <td class="slesh02"></td>
                               <td class="slesh02">/</td>
                               <td class="Fio02" colspan="4"><?=$data_lost['fio'];?></td>
                       </tr>
                       <tr class="H402">
                               <td class="pp01"></td>
                               <td class="pp01"></td>
                               <td class="podpis01">(подпись)</td>
                               <td class="slesh03"></td>
                               <td class="Fio01">(фамилия, имя, отчество)</td>
                       </tr>
                       </table>
                  
                       <table class="T203">
                       <tr class="H401">
                               <td class="ud">по паспорту/уд.уличности</td>
                               <td class="nomer">№<?=$data_lost['numberdocs'];?></td>
                               <td class="dtv">от <?= date("d.m.Y", strtotime($data_lost['date_vyd']));?> </td>
                               <td class="organ"><?=$data_lost['kemvydan'];?></td>
                               <td class="organ"></td>
                               <td class="organ"></td>
                       </tr>
                       <tr class="H402">
                               <td colspan="7" class="naim">(наименование, номер, дата и место выдачи документа, удостоверяющего личность получателя)</td>
                       </tr></table>
                       <table class="T204">
                       <tr class="H401">
                               <td class="pol01" colspan="2">Выдал кассир-приемщик</td>
                               <td class="slesh02"></td>
                               <td class="slesh02">/</td>
                               <td class="Fio03" colspan="6"></td>
                       </tr>
                       <tr class="H402">
                               <td class="pp01"></td>
                               <td class="pp01"></td>
                               <td class="podpis01">(подпись)</td>
                               <td class="slesh03"></td>
                               <td class="Fio04"colspan="5">(фамилия, имя, отчество)</td>
                       </tr>
                       </table>
                    </div>
                  </div> 
                  </div> 
	</body>         
</html>