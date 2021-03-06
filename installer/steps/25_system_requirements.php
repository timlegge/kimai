<script type="text/javascript" charset="utf-8">current = 25;</script>

<?php
if ($_REQUEST['lang'] == "de") {
    ?>
    <h2>Systemanforderungen</h2>
    Die folgenden Punkte m&uuml;ssen erf&uuml;llt sein:<br/>
    <div class="sp_phpversion fail">mindestens PHP Version 5.5</div>
    <div class="sp_mysql">Die <b>MySQLi</b> Erweiterung f&uuml;r PHP muss aktiviert sein</div>
    <div class="sp_iconv">Die <b>iconv</b> Erweiterung f&uuml;r PHP muss aktiviert sein</div>
    <div class="sp_dom">Die <b>DOM</b> Erweiterung f&uuml;r PHP muss aktiviert sein</div>
    <br/><br/>
    Damit der PDF Export zuverl&auml;ssig funktioniert m&uuml;ssen folgende Punkte erf&uuml;llt sein:<br/>
    <div class="sp_memory">Das Skript muss mind. 20MB an Speicher nutzen k&ouml;nnen</div>
    <div class="note gray">Siehe memory_limit in der php.ini Datei</div>
    <br/><br/>
    <button class="sp-button" onclick='check_system_requirements();'>Anforderungen jetzt pr&uuml;fen</button>
    <button onclick="system_requirements_proceed(); return false;" class="invisible proceed">Fortfahren</button>
    <?php
} elseif ($_REQUEST['lang'] == "bg") {
    ?>
    <h2>Изисквания към системата</h2>
    Следните точни трябва да са изпълнени:<br/>
    <div class="sp_phpversion fail">Версия на PHP най-малко 5.5</div>
    <div class="sp_mysql"><b>MySQLi</b> разширението за PHP трябва да е активирано</div>
    <div class="sp_iconv"><b>iconv</b> разширението за PHP трябва да е активирано</div>
    <div class="sp_dom"><b>DOM</b> разширението за PHP трябва да е активирано</div>
    <br/><br/>
    За да можете да ползвате безпроблемно експорта в PDF формат трябва да са изпълнени следните условия:<br/>
    <div class="sp_memory">Скриптът трябва да може да ползва най-малко 20MБ работна памет</div>
    <div class="note gray">виж "memory_limit" във файла php.ini </div>
    <br/><br/>
    <button class="sp-button" onclick='check_system_requirements();'>Провери изискванията</button>
    <button onclick="system_requirements_proceed(); return false;" class="invisible proceed">Продължи</button>
    <?php
} else {
    ?>
    <h2>System Requirements</h2>
    The following conditions must be met:<br/>
    <div class="sp_phpversion fail">at least PHP version 5.5</div>
    <div class="sp_mysql">The <b>MySQLi</b> extension for PHP has to be loaded</div>
    <div class="sp_iconv">The <b>iconv</b> extension for PHP has to be loaded</div>
    <div class="sp_dom">The <b>DOM</b> extension for PHP has to be loaded</div>
    <br/><br/>
    For PDF export the following requirement must be met:<br/>
    <div class="sp_memory">Allowed memory usage should be at least 20MB</div>
    <div class="note gray">See memory_limit in php.ini file</div>
    <br/><br/>
    <button class="sp-button" onclick='check_system_requirements();'>Check requirements now</button>
    <button onclick="system_requirements_proceed(); return false;" class="invisible proceed">Proceed</button>
    <?php
}
?>
<script type="text/javascript" charset="utf-8">check_system_requirements();</script>
