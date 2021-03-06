<?php

/* =================================================================================*\
  |* This file is part of InMaFSS                                                    *|
  |* InMaFSS - INformation MAnagement for School Systems - Keep yourself up to date! *|
  |* ############################################################################### *|
  |* Copyright (C) flx5                                                              *|
  |* E-Mail: me@flx5.com                                                             *|
  |* ############################################################################### *|
  |* InMaFSS is free software; you can redistribute it and/or modify                 *|
  |* it under the terms of the GNU Affero General Public License as published by     *|
  |* the Free Software Foundation; either version 3 of the License,                  *|
  |* or (at your option) any later version.                                          *|
  |* ############################################################################### *|
  |* InMaFSS is distributed in the hope that it will be useful,                      *|
  |* but WITHOUT ANY WARRANTY; without even the implied warranty of                  *|
  |* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                            *|
  |* See the GNU Affero General Public License for more details.                     *|
  |* ############################################################################### *|
  |* You should have received a copy of the GNU Affero General Public License        *|
  |* along with InMaFSS; if not, see http://www.gnu.org/licenses/.                   *|
  \*================================================================================= */


$info = Array();
$info['language'] = 'Deutsch';
$info['lang.short'] = 'de';
$info['date.format'] = 'd.m.Y';

$loc = Array();
switch ($key) {

    case 'install':
        $loc['title'] = 'Installer';
        $loc['next'] = 'Weiter';
        $loc['back'] = 'Zur&uumlck';
        $loc['dbtype'] = 'Datenbanktyp';
        $loc['dbhost'] = 'Host';
        $loc['database'] = 'Datenbank';
        $loc['username'] = 'Nutername';
        $loc['password'] = 'Passwort';
        $loc['config.saved'] = 'Konfigurationsdatei gespeichert';
        $loc['config.rights'] = 'Die Konfigurationsdatei konnte nicht gespeichert werden.<br>Bitte kopieren sie den folgenden Text in die Datei ./inc/config.php';
        $loc['db.settings'] = 'Datenbank Einstellungen';
        $loc['name.of.school'] = 'Name der Schule';
        $loc['db.connect.err'] = 'Datenbankserver nicht erreichbar';
        $loc['db.select.err'] = 'Konnte Datenbank nicht ausw&auml;hlen';
        $loc['db.set.up'] = 'Datenbank eingerichtet';
        $loc['welcome'] = 'Herzlich Willkommen bei MyVertretungsplan';
        $loc['firstpage'] = 'Dies ist ihre erste Seite. Sie k&ouml;nnen nun weitere Seiten anlegen, den Vertetungsplan importieren oder Ticker schreiben. <br><br> Sie k&ouml;nnen auch die API nutzen um den Vertretungsplan automatisch importieren zu lassen. <br><br><a href="./manage/">Zum Adminbereich</a>';
        $loc['create.admin'] = 'Es ist Zeit den Administrator Account zu erstellen.';
        $loc['acc.created'] = 'Das Account wurde erstellt.';
        $loc['finished'] = 'Die Installation ist abgeschlossen.';
        $loc['finish'] = 'Abschlie&szlig;en';
        $loc['license'] = 'Lizenz';
        $loc['accept'] = 'Akzeptieren';
        break;

    case 'home':
        $loc['title'] = 'Home';
        $loc['empty'] = 'Derzeit steht kein Inhalt zur Verf&uuml;gung!';
        $loc['page'] = 'Seite';
        $loc['last.update'] = 'Stand: %update% Uhr';
        $loc['teacher.short'] = 'Lkr.';
        $loc['lesson.short'] = 'Std.';
        $loc['room'] = 'Raum';
        $loc['grade'] = 'Klasse';
        $loc['replaced.by'] = 'vertreten durch';
        $loc['comment'] = 'Bemerkung';
        $loc['info'] = 'Info';
        $loc['absent.t'] = 'Abwesende Lehrkr&auml;fte';
        $loc['absent.g'] = 'Abwesende Klassen';
        $loc['supervision'] = 'Aufsichten';
        $loc['entire.school'] = 'Gesamte Schule';
        $loc['subs'] = 'Vertretungen';
        $loc['na.rooms'] = 'Nicht verf&uuml;gbare R&auml;ume';
        $loc['cache.warning'] = 'ACHTUNG: DIES IST EINE ZWISCHENGESPEICHERTE ANSICHT';
        break;

    case 'errors':
        $loc['too.small'] = 'FEHLER: Ihr Bildschirm ist zu klein!';
        $loc['no.js'] = 'FEHLER: Ihr Browser unterst&uuml;tzt kein JavaScript.';
        $loc['no.js.desc'] = 'Bitte aktivieren sie JavaScript, um diese Seite nutzen zu k&ouml;nnen.';
        $loc['no.cookies'] = 'FEHLER: Ihr Browser unterst&uuml;tzt keine Cookies.';
        $loc['no.cookies.desc'] = 'Bitte aktivieren sie Cookies, um diese Seite nutzen zu k&ouml;nnen.';
        break;

    case 'admin':
        $loc['title'] = 'Administrator';
        $loc['login'] = 'Login';
        $loc['username'] = 'Nutzername';
        $loc['password'] = 'Passwort';
        $loc['wrong'] = 'Der Nutzername/das Passwort stimmt nicht.';
        $loc['welcome'] = 'Willkommen, %username%';
        $loc['back.to.home'] = 'Zur&uuml;ck zur Hauptseite';
        $loc['logout'] = 'Abmelden';
        break;

    case 'database':
        $loc['error'] = 'Database Error';
        $loc['connection.error'] = 'Konnte nicht zur Datenbank verbinden!';
        $loc['database.not.found'] = 'Datenbank nicht gefunden!';
        break;

    case 'ticker':
        $loc['title'] = 'Ticker';
        $loc['no.ticker'] = 'Derzeit sind keine Ticker vorhanden';
        $loc['save'] = 'Speichern';
        $loc['add'] = 'Hinzuf&uuml;gen';
        $loc['delete'] = 'L&ouml;schen';
        $loc['id'] = 'ID';
        $loc['text'] = 'Text';
        $loc['from'] = 'Von';
        $loc['until'] = 'Bis';
        $loc['options'] = 'Optionen';
        $loc['content.empty'] = 'Inhalt darf nicht leer sein!';
        $loc['err.startdate'] = 'Das Startdatum ist nicht korrekt!';
        $loc['err.enddate'] = 'Das Enddatum ist nicht korrekt!';
        $loc['err.end.before.start'] = 'Anfangsdatum darf nicht sp&auml;ter/gleich sein als das Enddatum';
        $loc['del.rly'] = 'Den Ticker der ID %id% wirklich l&ouml;schen?';
        $loc['abort'] = 'Abbrechen';
        $loc['deleted'] = 'Der Ticker mit der ID %id% wurde gel&ouml;scht.';
        $loc['ordernum'] = 'Ordnung';
        $loc['order.string'] = 'Ordnungsnummer muss numerisch sein.';
        break;

    case 'updates':
        $loc['title'] = 'Updates';
        $loc['current.version'] = 'Aktuelle Version';
        $loc['no.updates'] = 'Keine Updates';
        $loc['update.to.version'] = 'Updaten auf Version';
        $loc['missed.updates'] = 'Sie haben die folgenden Updates verpasst';
        break;

    case 'menu':
        $loc['home'] = 'Home';
        $loc['ticker'] = 'Ticker';
        $loc['pages'] = 'Seiten';
        $loc['users'] = 'Nutzer';
        $loc['import'] = 'Importieren';
        $loc['api'] = 'API';
        $loc['settings'] = 'Einstellungen';
        break;

    case 'info':
        $loc['no.plan'] = 'Kein Vertretungsplan';
        $loc['replacements'] = 'Vertretung(en)';
        $loc['today'] = 'Heute';
        $loc['next.day'] = 'N&auml;chster Schultag';
        $loc['no.page'] = 'Keine Seite';
        $loc['pages'] = 'Seite(n)';
        break;

    case 'import':
        $loc['title'] = 'Importieren';
        $loc['file.upload'] = 'W&auml;hlen sie die Datei zum Import';
        $loc['success'] = 'Import erfolgreich abgeschlossen!';
        $loc['upload'] = 'Hochladen';
        break;

    case 'pages':
        $loc['title'] = 'Seiten';
        $loc['page'] = 'Seite';
        $loc['caption'] = '&Uuml;berschrift';
        $loc['shown'] = 'Angezeigt';
        $loc['from'] = 'Von';
        $loc['until'] = 'Bis';
        $loc['id'] = 'ID';
        $loc['del.rly'] = 'Die Seite mit der ID %id% wirklich l&ouml;schen?';
        $loc['delete'] = 'L&ouml;schen';
        $loc['abort'] = 'Abbrechen';
        $loc['deleted'] = 'Die Seite mit der ID %id% wurde gel&ouml;scht.';
        $loc['edit'] = 'Bearbeiten';
        $loc['content'] = 'Inhalt';
        $loc['caption.empty'] = '&Uuml;berschrift darf nicht leer sein!';
        $loc['content.empty'] = 'Inhalt darf nicht leer sein!';
        $loc['err.startdate'] = 'Das Startdatum ist nicht korrekt!';
        $loc['err.enddate'] = 'Das Enddatum ist nicht korrekt!';
        $loc['err.end.before.start'] = 'Anfangsdatum darf nicht sp&auml;ter/gleich sein als das Enddatum';
        $loc['save'] = 'Speichern';
        $loc['show.at'] = 'Anzeige bei';
        $loc['pupils'] = 'Sch&uuml;ler';
        $loc['teachers'] = 'Lehrer';
        break;

    case 'users':
        $loc['id'] = 'ID';
        $loc['title'] = 'Nutzer';
        $loc['name'] = 'Name';
        $loc['edit'] = 'Bearbeiten';
        $loc['delete'] = 'L&ouml;schen';
        $loc['save'] = 'Speichern';
        $loc['saved'] = 'Gespeichert';
        $loc['new.password'] = 'Neues Passwort';
        $loc['name.too.short'] = 'Der Nutzername muss mindestens 3 Zeichen haben.';
        $loc['pw.too.short'] = 'Das Passwort muss mindestens 5 Zeichen haben.';
        $loc['del.self'] = 'Der eigene Nutzer kann nicht gel&ouml;scht werden!';
        break;

    case 'settings':
        $loc['title'] = 'Einstellungen';
        $loc['settings.name'] = 'Einstellungsname';
        $loc['value'] = 'Wert';
        $loc['save'] = 'Speichern';
        $loc['saved'] = 'Speichern erfolgreich';
        $loc['no.settings.found'] = 'Etwas lief schief: Es konnten keine Einstellungen gefunden werden! Bitte installieren sie das System neu!';
       
        $loc['schoolname'] = 'Name der Schule';
        $loc['system'] = 'Vertretungsplansystem';
        $loc['lang'] = 'Sprache';
        $loc['auto_addition'] = 'Markiere &Auml;nderungen automatisch farbig';
        $loc['time_for_next_page'] = 'Zeit bis zur n&auml;chsten Seite';
        $loc['teacher_time_for_next_page'] = 'Zeit bis zur n&auml;chsten Seite bei Lehrern';
        $loc['use_ftp'] = 'Nutze FTP?';
        $loc['ftp_server'] = 'FTP Server (normalerweise localhost)';
        $loc['ftp_user'] = 'FTP Nutzer';
        $loc['ftp_password'] = 'FTP Passwort';
        $loc['ftp_path'] = 'Pfad zu InMaFSS auf dem FTP Server';
        $loc['useMarquee'] = 'Nutze den Marquee Befehl und nicht das Bl&auml;ttern beim Ticker <br>(HTML Standard unterstützt Marquee offiziell NICHT!)';
        break;
    
    case 'date':
        $loc['january'] = 'Januar';
        $loc['february'] = 'Februar';
        $loc['march'] = 'M&auml;rz';
        $loc['april'] = 'April';
        $loc['may'] = 'Mai';
        $loc['june'] = 'Juni';
        $loc['july'] = 'Juli';
        $loc['august'] = 'August';
        $loc['september'] = 'September';
        $loc['october'] = 'Oktober';
        $loc['november'] = 'November';
        $loc['december'] = 'Dezember';

        $loc['monday'] = 'Montag';
        $loc['tuesday'] = 'Dienstag';
        $loc['wednesday'] = 'Mittwoch';
        $loc['thursday'] = 'Donnerstag';
        $loc['friday'] = 'Freitag';
        $loc['saturday'] = 'Samstag';
        $loc['sunday'] = 'Sonntag';

        $loc['mo'] = 'Mo';
        $loc['tu'] = 'Di';
        $loc['we'] = 'Mi';
        $loc['th'] = 'Do';
        $loc['fr'] = 'Fr';
        $loc['sa'] = 'Sa';
        $loc['su'] = 'So';

        $loc['prev.month'] = 'Vorheriger Monat';
        $loc['next.month'] = 'N&auml;chster Monat';

        $loc['prev.year'] = 'Vorheriges Jahr';
        $loc['next.year'] = 'N&auml;chstes Jahr';
        break;

    case 'api':
        $loc['title'] = 'API Management';
        $loc['id'] = 'ID';
        $loc['name'] = 'Name';
        $loc['key'] = 'API Schl&uuml;ssel';
        $loc['edit'] = 'Bearbeiten';
        $loc['delete'] = 'L&ouml;schen';
        $loc['save'] = 'Speichern';
        $loc['name.too.short'] = 'Der Name ist zu kurz!';
        $loc['api.too.short'] = 'Der API Key ist zu kurz!';
        
        $loc['permissions'] = 'Rechte';
        $loc['replacements_all'] = 'Alle Vertretungen anzeigen (Sch&uuml;ler)';
        $loc['replacements'] = 'Eigene Vertretungen anzeigen (Sch&uuml;ler)';
        $loc['plan_update'] = 'Plan aktualisieren';
        $loc['teacher_sub'] = 'Lehrervertretungsplan anzeigen';
        $loc['ticker'] = 'Ticker anzeigen';
        $loc['other'] = 'Andere Daten (Pausenaufsicht, Abwesenheit, etc.) anzeigen';

        $loc['saved'] = 'Erfolgreich gespeichert.';
        $loc['del.rly'] = 'Den API-Key mit der ID %id% wirklich l&ouml;schen?';
        $loc['abort'] = 'Abbrechen';
        $loc['deleted'] = 'Der API-Key mit der ID %id% wurde gel&ouml;scht.';
        $loc['not.found'] = 'Der API-Key existiert nicht.';     
        break;
}
?>