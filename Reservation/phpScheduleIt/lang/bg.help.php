﻿<?php
/**
* Български (bg) превод.
* This also serves as the base translation file from which to derive
*  all other translations.
*  
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @translator Владислав Живков <vladi@ucc.uni-sofia.bg>

* @version 01-08-05
* @package Languages
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
///////////////////////////////////////////////////////////
// INSTRUCTIONS
///////////////////////////////////////////////////////////
// This file contains all the help file for phpScheduleit.  Please save the translated
//  file as '2 letter language code'.help.php.  For example, en.help.php.
// 
// To make phpScheduleIt help available in another language, simply translate this
//  file into your language.  If there is no direct translation, please provide the
//  closest translation.
//
// This will be included in the body of the help file.
//
// Please keep the HTML formatting unless you need to change it.  Also, please try
//  to keep the HTML XHTML 1.0 Transitional complaint.
///////////////////////////////////////////////////////////
?>
<div align="center"> 
  <h3><a name="top" id="top"></a>Въведение в phpScheduleIt</h3>
  <p><a href="http://phpscheduleit.sourceforge.net" target="_blank">http://phpscheduleit.sourceforge.net</a></p>
  <table width="100%" border="0" cellspacing="0" cellpadding="5" style="border: solid #CCCCCC 1px">
    <tr> 
      <td bgcolor="#FAFAFA"> 
        <ul>
          <li><b><a href="#getting_started">Начало</a></b></li>
          <ul>
            <li><a href="#registering">Регистриране</a></li>
            <li><a href="#logging_in">Влизане</a></li>
            <li><a href="#language">Избиране на Моя Език</a></li>
            <li><a href="#manage_profile">Смяна на Информация на Профил или Парола</a></li>
            <li><a href="#resetting_password">Смяна на Забравена Парола</a></li>
            <li><a href="#getting_support">Помощ</a></li>
          </ul>
          <li><a href="#my_control_panel"><b>Моя Контролен Панел</b></a></li>
          <ul>
            <li><a href="#quick_links">Моите Бързи Връзки</a></li>
			<li><a href="#my_announcements">Моите Обяви</a></li>
            <li><a href="#my_reservations">Моите Резервации</a></li>
            <li><a href="#my_training">Моите Достъпи</a></li>
			<li><a href="#my_invitations">Моите Покани</a></li>
			<li><a href="#my_participation">Моите Участия в Резервации</a></li>         
          </ul>
          <li><a href="#using_the_scheduler"><b>Използуване на Планировчика</b></a></li>
          <ul>
			<li><a href="#read_only">Версия Само за Четене</a></li>
            <li><a href="#making_a_reservation">Правене на Резервация</a></li>
            <li><a href="#modifying_deleting_a_reservation">Променяне/Изтриване на 
              Резервация</a></li>
            <li><a href="#navigating">Управление на Планировчика</a></li>
          </ul>
        </ul>
		<hr width="95%" size="1" noshade="noshade" />
        <h4><a name="getting_started" id="getting_started"></a>Начало</h4>
        <p>За да използувате phpScheduleIt, Вие първо трябва да се регистрирате. 
          Ако вече сте регистриран, тогава трябва да влезете, преди да използувате
          системата. В началото на всяка страница (с изключение на страниците за 
          регистрация и влизане) ще видите приветствие, днешна дата и няколко връзки
          -- &quot;Излизане&quot; и &quot;Моя Контролен Панел&quot;
          под приветствието и &quot;Помощ&quot под датата.
        </p>
          <p>Ако в приветствието се показва предишен потребител, кликнете &quot; 
          Излизане&quot; , за да изчистите всички бисквитки и <a href="#logging_in">влезте
          </a> като себе си. Кликването върху връзката &quot;Моя Контролен Панел&quot; ще 
          ви препрати в <a href="#my_control_panel">Моя Контролен Панел</a>, Вашата &quot;лична 
          страница&quot; за планировчика.
          Кликването върху връзката &quot;Помощ&quot; ще отвори изскачащ помощен прозорец. Кликването
          върху връзката &quot;Email към Админ&quot; ще отвори ново писмо, адресирано до администратора на
          системата.</p>
          <p><font color="#FF0000">Предупреждение:</font> Ако използвате Norton Personal
            Firewall едновременно с phpScheduleIt, можете да имате проблеми.
            Моля, деактивирайте Norton Personal Firewall, докато използвате phpScheduleIt
            и я активирайте след това.</p>
          <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="registering" id="registering"></a>Регистриране</h5>
        <p>За да се регистрирате, първо отидете на регистрационната страница. Тя може да бъде достигната, 
          чрез линк на началната входна страница. Трябва да попълните всички полета. 
          Регистрираният от Вас email адрес ще бъде вашето потребителско име. Въведената 
          информация може да бъде променена, чрез <a href="#quick_links">смяна 
          на Вашия профил</a>. При избирането на опция &quot;Запазете Моята Оторизация&quot; 
          ще бъдат използвани бисквитки за идентификация, 
          без да е необходимо да влизате всеки път. <i>Вие можете да използувате тази 
          опция, ако сте единственият човек, работещ с планировчика на Вашия компютър.</i> 
          След регистрирането, Вие ще бъдете пренасочен към <a href="#my_control_panel">Моя
          Контролен Панел</a>.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="logging_in" id="logging_in"></a>Влизане</h5>
        <p>За да влезете въведете Вашите email адрес и парола. 
          Вие трябва да се <a href="#registering">регистрирате</a> преди да влезете. 
          При избирането на опция &quot;Запазете Моята Оторизация&quot; ще се използуват 
          бисквитки за Вашата идентификация и няма да е неохбходимо да  
          влизате всеки път. <i>Вие можете да използувате тази 
          опция, ако сте единственият човек, работещ с планировчика на Вашия компютър.</i> След 
          влизането, Вие ще бъдете препратен към <a href="#my_control_panel">Моя 
          Контролен Панел</a>.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="language" id="language"></a>Избиране на Моя Език</h5>
        <p>На входната страница има падащо меню с всички налични езици, включени от
          администратора<a href="#my_control_panel"></a>.
          Изберете предпочитания от Вас език и всички текстове на phpScheduleIt
          ще бъдат преведени. По този начин няма да бъдат преведени текстовете, въведени от
          администратора или от други потребители; ще бъдат преведени само текстовете на приложението.
          Ще трябва да излезете, за да изберете друг език.</p>
        <p align="right"><a href="#top">Нагоре</a></p>        
        <h5><a name="manage_profile" id="manage_profile"></a>Смяна на Информация на Профил или Парола</h5>
        <p>За да промените информацията във Вашия профил (име, email и др.) или Вашата парола, 
          първо влезте в системата. В <a href="#my_control_panel">Моя Контролен 
          Панел</a>, в <a href="#quick_links">Моите Бързи Връзки</a>, кликнете върху &quot; 
          Смяна на Информация на Профил/Парола&quot;. Това ще отвори форма, попълнена с 
          Вашата информация. Редактирайте каквото желаете. Всяко поле, което 
          оставите празно няма да бъде променяно. Ако желаете да промените паролата си, 
          въведете я два пъти. След редактиране на Вашата информация, кликнете върху &quot;Редактиране на Профил&quot; 
          и Вашите промени ще бъдат запазени в базата данни. След това ще бъдете препратен към 
          Моя Контролен Панел.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="resetting_password" id="resetting_password"></a>Смяна на Ваша Забравена Парола</h5>
        <p>Ако сте си забравили паролата си, можете да я смените и новата ще Ви 
          бъде изпратена по email. За да извършите това, идете на входната страница и кликнете 
          върху &quot;Аз Забравих Моята Парола &quot;. 
          Вие ще бъдете прехвърлен към нова страница и помолен да въведете Вашия email адрес. 
          След, като кликнете върху &quot;Смяна на Парола&quot;, ще бъде генерирана нова парола. 
          Тя ще бъде записана в базата данни и изпратена по email на Вас. 
          След получаване на този email, моля copy и paste на Вашата нова парола, 
          <a href="#logging_in">Влизане</a> с нея и евентуално <a href="#manage_profile">смяна на 
          Вашата парола</a>.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="getting_support" id="getting_support"></a>Помощ
          </h5>
        <p>Ако нямате права да използувате определен ресурс, имате въпроси за
          ресурс, резервация или за Вашата потребителска сметка, моля използувайте връзка &quot;Email
          към Админ&quot; 
          от <a href="#quick_links">Моите Бързи Връзки.</a></p>
        <p align="right"><a href="#top">Нагоре</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="my_control_panel" id="my_control_panel"></a>Моя Контролен Панел</h4>
        <p>Контролният Панел е Вашата &quot;лична страница&quot; за планиращата 
          система. Тук Вие можете да преглеждата, променяте или изтривате Вашите резервации. Моя 
          Контролен Панел съдържа връзки към <a href="#using_the_scheduler">Ангажиране на Ресурс</a>, 
          връзка към <a href="#quick_links">Редактиране на Профил</a> и опция за Излизане 
          от Планиращата Система.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="quick_links" id="quick_links"></a>Моите Бързи Връзки</h5>
        <p>Таблицата с Бързи Връзки съдържа полезни връзки.
          Първата, &quot;Ангажиране на Ресурс&quot; ще Ви отведе в разписанието по
          подразбиране. Тук можете да видите разписанията на ресурс, да резервирате ресурси
          и да редактирате Вашите текущи резервации.</p>
        <p>&quot;Моя Календар&quot; ще Ви отведе в календар на резервациите,
          които сте планирал или в които ще участвате. Това може да бъде разгледано
          по ден, седмица или месец.</p>
        <p>&quot;Преглед на Календар на Разписание &amp; Ресурс&quot; ще Ви отведе в
          изглед на календар на резервациите за избран ресурс или за всички ресурси
          на избрано разписание. Ако сте избрали дневен преглед на определен
          ресурс, Вие можете да отпечатате &quot;Разписание&quot; чрез 
          кликване на иконата вдясно до падащото меню.</p>
        <p>&quot;Смяна на Информация на Профил/Парола &quot; ще Ви препрати към
          страница за редактиране на Вашата персонална информация, входен
          email адрес, име, телефонен номер и парола. Всичката информация
          ще бъде попълнена за Вас. Празните или непроменени стойности няма да бъдат променяни.</p>
        <p>&quot;Управление на Моите Email Предпочитания&quot; ще Ви препрати към страница,
          където можете да избирате как и кога с Вас да бъде контактувано.
          По подразбиране, Вие ще получавате HTML email аларми всеки път,
          когато добавите, редактирате или изтриете резервация.</p>
        <p>Последната връзка, &quot;Излизане&quot; ще прекрати текущата Ви сесия
          и ще Ви върне на входната страница.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="my_announcements" id="my_announcements"></a>Мои Обяви</h5>
        <p>Тази таблица ще показва всички важни обяви.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="my_reservations" id="my_reservations"></a>Мои Резервации</h5>
        <p>Таблицата Мои Резервации показва всички Ваши предстоящи резервации, започвайки 
          от днес (по подразбиране). Тази таблица ще показва Дата на резервация, 
          Ресурс, Дата/Време на нейното създаване, Дата/Време на нейната последна промяна, 
          Начално Време и Крайно Време. От тази таблица Вие можете да променяте резервация 
          или да я изтриете, като кликнете върху &quot;Промяна&quot; или &quot;Изтриване&quot;. 
          Всяка от тези опции ще отвори изскачащ прозорец, където можете да потвърдите промените. 
          Кликването върху датата на резервацията ще отвори нов прозорец, където Вие 
          можете да разгледате детайлите на резервацията.</p>
        <p>За да сортирате Вашите резервации по определена колона, кликнете върху &#150; 
          или + връзката в заглавието на колоната.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="my_training" id="my_training"></a>Мои Достъпи</h5>
        <p>Таблицата Моите Достъпи показва всички ресурси, които имате право да използвате.
		  Показват се име на ресурс, неговата локация и телефонен номер на неговия администратор.</p>
        <p>Без регистрация, Вие няма да имате права да използувате ресурси, освен ако администраторът
		  не реши да даде автоматично достъпи.  Администраторът единствен може да Ви даде
		  права да използувате ресурс. Вие нямата права да резервирате ресурс, до 
          който нямате достъпи, но ще можете да разглеждате разписанието и текущите резервации.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="my_invitations" id="my_invitations"></a>Мои Покани</h5>
        <p>Таблица Моите Покани показва всички резервации, за които сте поканен
          и Вие можете да Приемете или Отхвърлите участието в тези резервации.
          Ако приемете, Вие все още имате възможността да прекратите участието си
          по-късно. Ако отхвърлите, Вие не можете да приемете, докато създателят на 
          резервацията не Ви покани отново.</p>
        <p align="right"><a href="#top">Нагоре</a></p>        
        <h5><a name="my_participation" id="my_participation"></a>Моите Участия в Резервации</h5>
        <p>Таблицата Моите Участия в Резервации показва всички резервации, в които Вие
          участвате. Това не са резервациите, които сте създали.
          От тази таблица можете да анулирате участието си в
          избрана резервация. Ако анулирате участието си,
          няма да можете да участвате, одвен ако създателят на резервацията не Ви
          покани отново.</p>
        <p align="right"><a href="#top">Нагоре</a></p>        <p align="right">&nbsp;</p>
        <hr width="95%" size="1" noshade="noshade" />
        <h4><a name="using_the_scheduler" id="using_the_scheduler"></a>Използуване на Планировчика</h4>
        <p>Планировчикът е мястото, където се подготвят всички разписания на ресурси.
          Показва се текущата седмица (по подразбиране 7 дни).
          Тук можете да преглеждате разписанията на ресурсите, да резервирате ресурси и
          да редактирате Вашите текущи резервации. Резервациите ще бъдат оцветени в различни цветове и
          всички ще бъдат показвани, но ще можете да редактирате само <i>Вашите</i> резервации.
          Всички останали резервации ще могат само да бъдат разглеждани.</p>
        <p>Вие можете да сменяте (избирате) разписанията (ако има повече от едно), чрез падащото меню
          в горната част от страницата на всяко разписание.</p>
        <p>Администраторът на системата може да зададе &quot;забранени периоди&quot;,
          или да определи, като недостъпни за админа. Не могат да бъдат правени
          резервации, ако са в противоречие със забранените периоди.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="read_only" id="read_only"></a>Версия Само за Четене</h5>
        <p>Ако не сте регистриран или не сте влезли, можете да преглеждате версията
          само за четене на разписание, като кликнете върху връзка &quot;Разписание Само за Четене&quot;
          на входната страница. Тази версия на разписанието ще покаже всички ресурси и
          резервации, но няма да можете да видите всички детайли за тях
          и няма да можете да направите резервация.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="making_a_reservation" id="making_a_reservation"></a>Правене на
          Резервация</h5>
        <p>За да резервирате ресурс, първо отидете на таблицата за деня, в който
          искате да направите резервация. Кликнете върху името на ресурса. Ще се отвори
          изскачащ прозорец, където можете да изберете начална и крайна дата (ако е разрешено) и
          колко пъти желаете да резервирате избрания ресурс.</p>
        <p>Под избора на времето ще се появи въобщение, информиращо Ви колко продължителна
          може да бъде резервацията за този ресурс. Ако Вашата резервация е
          по-голяма или по-малка от разрешеното време, тя няма да бъде приета.</p>
        <p>Вие можете да изберете да повторите тази резервация. За да повторите
          резервация, изберете дните, в които да се повтаря, след това изберете
          интервала от време. Ще бъде направена резервация за първия избран ден,
          плюс всички избрани дни като повторение.
          Всички дати, на които не може да бъде направена резервация, поради конфликт
          ще бъдат изписани. Ако сте избрали многодневна резервация,
          опцията за повторение няма да бъде достъпна.</p>
        <p>Вие можете да попълните резюме на тази резервация.
          Това резюме ще бъде достъпно на всички потребители за четене.</p>        
        <p>След задаване на коректно начало и край (дни/времена) на резервацията
           и избиране на повторенията (ако желаете), кликнете бутон &quot;Запазване&quot;.
           Ако резервацията не е успешна ще излезе съобщение, информиращо Ви за
           датите, на които не може да бъде направена. Ако не е успешна,
           върнете се обратно и редактирайте исканите времена, за да не се
           припокриват с други текущи резервации. 
           След успешното завършване на резервацията, разписанието
           ще бъде автоматично обновено.</p>
        <p>Вие не можете да резервирате ресурс за минали дати, ресурс,
           за който нямате права за използване или ресурс, който в момента
           не е активен. Тези ресурси се изобразяват е сиво и не могат да бъдат резервирани.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="modifying_deleting_a_reservation" id="modifying_deleting_a_reservation"></a>Промяна/Изтриване 
          на Резервация</h5>
        <p>Има много начини за промяна или изтриване на резервация. Един е от
          <a href="#my_control_panel">Моя
             Контролен Панел</a>, както е описано по-горе. Другият е чрез онлайн
             планировчика. Както беше подчертано преди това, само Вие можете да променяте
             Вашите резервации. Ще бъдат показвани всички резервации, но към тях няма
             да има връзка за редактиране.</p>
        <p>За да редактирате резервация през планировчика, кликнете върху
          резервацията, която искате да промените. Ще се отвори изскачащ прозорец,
          подобен на прозореца за Резервация. Имате 2 възможности;
          да промените началното и крайното време на резервацията,
          или можете да кликнете върху &quot;Изтриване&quot;.
          След като направите всички промени, кликнете върху бутон &quot;Запазване&quot;. 
          Вашите промени ще бъдат проверени за съвместимост с текущите резервации.
          След успешната промяна на резервацията, разписанието ще бъде автоматично обновено.</p>
        <p>За да се промени група от повтарящи се резервации, маркирайте поле
        &quot;Обновяване на всички повтарящи се записи в група?&quot;. Ще бъдат изписани
          всички конфликтни дати.</p>
        <p>Не можете да редактирате резервации за минали дати.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
        <h5><a name="navigating" id="navigating"></a>Навигация</h5>
        <p>Има много начини за достигане до определена дата.</p>
        <p>Придвижване по седмици чрез връзки &quot;Предходна Седмица&quot; и &quot;Следваща Седмица&quot;.</p>
        <p>Преминаване към произволна дата, като се попълни формата на дъното.</p>
        <p>Чрез календар, кликвайки върху връзка &quot;Разглеждане на Месечен Календар&quot;. 
           Намерете желаната дата и кликнете върху нея.</p>
        <p align="right"><a href="#top">Нагоре</a></p>
      </td>
    </tr>
  </table>
</div>