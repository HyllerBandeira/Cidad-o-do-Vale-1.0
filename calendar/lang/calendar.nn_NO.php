<?php 
# nn_NO translation for
# PHP-Calendar, DatePicker Calendar class: http://www.triconsole.com/php/calendar_datepicker.php
# Localized version of PHP-Calendar, DatePicker Calendar class: http://ciprianmp.com/scripts/calendar/
# Version: 3.70
# Language: Norwegian (Nynorsk) / norsk, nynorsk
# Translator: Abraham Straume Bah <abraham.bah@gmail.com>
# Last file update: 29.07.2013

// Class strings localization
define("L_DAYC", "Dag");
define("L_MONTHC", "M�nad");
define("L_YEARC", "�r");
define("L_TODAY", "I dag");
define("L_PREV", "F�rre");
define("L_NEXT", "Neste");
define("L_REF_CAL", "Oppdaterer kalenderen...");
define("L_CHK_VAL", "Sjekk verdien");
define("L_SEL_LANG", "Vel spr�k");
define("L_SEL_ICON", "Vel");
define("L_SEL_DATE", "Vel dato");
define("L_ERR_SEL", "Valet er ikkje gyldig");
define("L_NOT_ALLOWED", "Denne datoen kan ikkje veljast");
define("L_DATE_BEFORE", "Vel ein dato f�rre %s");
define("L_DATE_AFTER", "Vel ein dato etter %s");
define("L_DATE_BETWEEN", "Vel ein dato mellom\\n%s og %s");
define("L_WEEK_HDR", ""); // Optional Short Name for the column header showing the current Week number (W or CW in English - max 2 letters)
define("L_UNSET", "Nullstill");
define("L_CLOSE", "Lukka");
define("L_WARN_2038", "Php versjonen p� denne servaren st�ttar ikkje �r 2038 eller seinare! (<5.3.0)");
define("L_ERR_NOSET", "Feil! Kalenderverdien kan ikkje setjast!");
define("L_VERSION", "Versjon: %s (%s spr�k)");
define("L_POWBY", "Dreven av:"); //or "Based on:", "Supported by"
define("L_HERE", "her");
define("L_UPDATE", "Oppdatering tilgjengeleg %s !");
define("L_DONATE", "Ynskjer du � donera?");
# Keep translated by private!

// Set the first day of the week in your language (0 for Sunday, 1 for Monday)
define("FIRST_DAY", "1");

// Months Long Names
define("L_JAN", "januar");
define("L_FEB", "februar");
define("L_MAR", "mars");
define("L_APR", "april");
define("L_MAY", "mai");
define("L_JUN", "juni");
define("L_JUL", "juli");
define("L_AUG", "august");
define("L_SEP", "september");
define("L_OCT", "oktober");
define("L_NOV", "november");
define("L_DEC", "desember");
// Months Short Names
define("L_S_JAN", "jan");
define("L_S_FEB", "feb");
define("L_S_MAR", "mar");
define("L_S_APR", "apr");
define("L_S_MAY", "mai");
define("L_S_JUN", "jun");
define("L_S_JUL", "jul");
define("L_S_AUG", "aug");
define("L_S_SEP", "sep");
define("L_S_OCT", "okt");
define("L_S_NOV", "nov");
define("L_S_DEC", "des");
// Week days Long Names
define("L_MON", "m�ndag");
define("L_TUE", "tysdag");
define("L_WED", "onsdag");
define("L_THU", "torsdag");
define("L_FRI", "fredag");
define("L_SAT", "laurdag");
define("L_SUN", "sundag");
// Week days Short Names
define("L_S_MON", "m�");
define("L_S_TUE", "ty");
define("L_S_WED", "on");
define("L_S_THU", "to");
define("L_S_FRI", "fr");
define("L_S_SAT", "la");
define("L_S_SUN", "su");

// Windows encoding
define("WIN_DEFAULT", "windows-1252");
define("L_CAL_FORMAT", "%d. %B %Y");
if(!defined("L_LANG") || L_LANG == "L_LANG") define("L_LANG", "nn_NO"); // en_US format of your language

// Set the NN specific date/time format;
if (stristr(PHP_OS,"win")) {
setlocale(LC_ALL, "nn_NO.ISO-8859-1", "nor-nyn.ISO-8859-1", "nor", "nor.ISO-8859-1", "nor-nor.ISO-8859-1", "Norwegian-nynorsk.ISO-8859-1", "Norwegian.ISO-8859-1", "Norwegian", "Norwegian_Norway");
} else {
setlocale(LC_ALL, "nn_NO.ISO-8859-1", "nn_NB.ISO-8859-1", "no_NO.ISO-8859-1", "nor.ISO-8859-1", "nor_nyn.ISO-8859-1", "Norwegian.ISO-8859-1", "Norwegian-nynorsk.ISO-8859-1");
}
?>