<?php 
# it_IT translation for
# PHP-Calendar, DatePicker Calendar class: http://www.triconsole.com/php/calendar_datepicker.php
# Version: 3.70
# Language: Italian / italiano
# Translator:  Michele Ferro <specialmikius@yahoo.com>
# Last file update: 30.07.2013

// Class strings localization
define("L_DAYC", "Giorno");
define("L_MONTHC", "Mese");
define("L_YEARC", "Anno");
define("L_TODAY", "Oggi");
define("L_PREV", "Indietro");
define("L_NEXT", "Avanti");
define("L_REF_CAL", "Aggiornamento Calendario...");
define("L_CHK_VAL", "Controlla il valore");
define("L_SEL_LANG", "Seleziona la Lingua");
define("L_SEL_ICON", "Selezionare");
define("L_SEL_DATE", "Seleziona la Data");
define("L_ERR_SEL", "La tua selezione non � valida");
define("L_NOT_ALLOWED", "Questa data non � consentita di essere selezionata");
define("L_DATE_BEFORE", "Scegli una data prima %s");
define("L_DATE_AFTER", "Scegli una data dopo %s");
define("L_DATE_BETWEEN", "Scegli una data tra\\n%s e %s");
define("L_WEEK_HDR", ""); // Optional Short Name for the column header showing the current Week number (W or CW in English - max 2 letters)
define("L_UNSET", "Rimuovi");
define("L_CLOSE", "Chiudi");
define("L_WARN_2038", "Questa versione del server php non ha supporto per l'anno 2038 e oltre! (<5.3.0)");
define("L_ERR_NOSET", "Errore! I dati del calendario non possono essere impostati!");
define("L_VERSION", "Versione: %s (%s lingue)");
define("L_POWBY", "Fornito da:"); //or "Basato su:", "Supportato da"
define("L_HERE", "qui");
define("L_UPDATE", "Update disponibile %s !");
define("L_TRANAME", "Michele Ferro");
define("L_TRABY", "Tradotto da %s");
define("L_DONATE", "Vuoi donare?");

// Set the first day of the week in your language (0 for Sunday, 1 for Monday)
define("FIRST_DAY", "1");

// Months Long Names
define("L_JAN", "gennaio");
define("L_FEB", "febbraio");
define("L_MAR", "marzo");
define("L_APR", "aprile");
define("L_MAY", "maggio");
define("L_JUN", "giugno");
define("L_JUL", "luglio");
define("L_AUG", "agosto");
define("L_SEP", "settembre");
define("L_OCT", "ottobre");
define("L_NOV", "novembre");
define("L_DEC", "dicembre");
// Months Short Names
define("L_S_JAN", "gen");
define("L_S_FEB", "feb");
define("L_S_MAR", "mar");
define("L_S_APR", "apr");
define("L_S_MAY", "mag");
define("L_S_JUN", "giu");
define("L_S_JUL", "lug");
define("L_S_AUG", "ago");
define("L_S_SEP", "set");
define("L_S_OCT", "ott");
define("L_S_NOV", "nov");
define("L_S_DEC", "dic");
// Week days Long Names
define("L_MON", "luned�");
define("L_TUE", "marted�");
define("L_WED", "mercoled�");
define("L_THU", "gioved�");
define("L_FRI", "venerd�");
define("L_SAT", "sabato");
define("L_SUN", "domenica");
// Week days Short Names
define("L_S_MON", "lun");
define("L_S_TUE", "mar");
define("L_S_WED", "mer");
define("L_S_THU", "gio");
define("L_S_FRI", "ven");
define("L_S_SAT", "sab");
define("L_S_SUN", "dom");

// Windows encoding
define("WIN_DEFAULT", "windows-1252");
define("L_CAL_FORMAT", "%d %B %Y");
if(!defined("L_LANG") || L_LANG == "L_LANG") define("L_LANG", "it_IT");

// Set the IT specific date/time format
if (stristr(PHP_OS,"win")) {
setlocale(LC_ALL, "ita_ITA.ISO-8859-1", "italian.ISO-8859-1", "italian");
} else {
setlocale(LC_ALL, "it_IT.ISO-8859-1", "ita_ITA.ISO-8859-1", "italian.ISO-8859-1");
}
?>