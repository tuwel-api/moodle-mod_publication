<?php
// This plugin is for Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'mod_publication', language 'de'
 * 
 * @package mod_publication
 * @author Andreas Windbichler
 * @copyright TSC
 */

$string['modulename'] = 'Studierendenordner';
$string['pluginname'] = 'Studierendenordner';
$string['modulename_help'] = 'Der Studierendenordner umfasst folgende Möglichkeiten:

* Teilnehmer/innen können selbstständig Dokumente hochladen. Diese stehen allen weiteren Kursteilnehmer/innen entweder nach Ihrer Prüfung oder sofort zur Verfügung.
* Es besteht die Möglichkeit eine Aufgabe als Grundlage für den Studierendenordner heranzuziehen, wobei Sie entscheiden können welche Dokumente für alle sichtbar sein sollen oder die Entscheidung über die Freigabe an die Teilnehmer/innen selbst weiterleiten.';
$string['modulenameplural'] = 'Studierendenordner';
$string['pluginadministration'] = 'Studierendenordner Administration';
$string['publication:addinstance'] = 'Studierendenordner hinzufügen';
$string['publication:view'] = 'Studierendenordner anzeigen';
$string['publication:upload'] = 'Dateien in den Studierendenordner hochladen';

$string['requiremodintro'] = 'Beschreibung notwendig';
$string['configrequiremodintro'] = 'Deaktivieren Sie diese Option, wenn die Eingabe von Beschreibungen für jede Aktivität nicht verpflichtend sein soll.';
$string['obtainstudentapproval'] = 'Einverständnis einholen';
$string['configobtainstudentapproval'] = 'Daten werden erst nach Einverstädnis des Studierenden für alle sichtbar geschaltet.';
$string['obtainteacherapproval'] = 'ohne Überprüfung';
$string['configobtainteacherapproval'] = 'Dateien von Studierenden werden sofort ohne Überprüfung für alle sichtbar geschaltet.';
$string['maxfiles'] = 'Anzahl hochladbarer Dateien';
$string['configmaxfiles'] = 'Voreinstellung für die Anzahl von Dateien, die pro User im Studierendenordner erlaubt sind.';
$string['maxbytes'] = 'Maximale Dateigröße';
$string['configmaxbytes'] = 'Voreinstellung für die Dateigröße von Dateien im Studierendenordner.';

// mod_form
$string['availability'] = 'Verfügbarkeit';

$string['allowsubmissionsfromdate'] = 'Abgabebeginn';
$string['allowsubmissionsfromdate_help'] = 'Wenn diese Option aktiviert ist, können Lösungen nicht vor diesem Zeitpunkt abgegeben werden. Wenn diese Option deaktiviert ist, ist die Abgabe sofort möglich.';
$string['allowsubmissionsfromdatesummary'] = 'This assignment will accept submissions from <strong>{$a}</strong>';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'The assignment details and submission form will be available from <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Beschreibung immer anzeigen';
$string['alwaysshowdescription_help'] = 'Wenn diese Option deaktiviert ist, wird die Aufgabenbeschreibung für Teilnehmer/innen nur während des Abgabezeitraums angezeigt.';

$string['cutoffdate'] = 'Abgabetermin';
$string['cutoffdate_help'] = 'Zum Abgabetermin wird die Aufgabe fällig. Wenn spätere Abgaben erlaubt sind, wird jede nach diesem Datum eingereichte Abgabe als verspätet markiert. Um eine Abgabe nach einem bestimmten Verspätungsdatum zu verhindern kann ein endgültiges Abgabedatum gesetzt werden.';
$string['cutoffdatevalidation'] = 'Der letzte Abgabetermin muss nach der erstmöglichen Abgabe liegen.';
$string['cutoffdatefromdatevalidation'] = 'Der Abgabetermin muss später als der Abgabebeginn sein.';

$string['duedate'] = 'Letzter Abgabetermin';
$string['duedate_help'] = 'Diese Funktion sperrt die Abgabe von Lösungen ab diesem Termin, sofern keine Terminverlängerung gewährt wird.';
$string['duedatevalidation'] = 'Der letzte Abgabetermin muss nach dem Abgabestart liegen.';

$string['mode'] = 'Modus';
$string['mode_help'] = 'Treffen Sie hier die Entscheidung, ob die Aktivität als “Upload-Platz” für Studierende dienen soll oder Sie eine Aufgabe als Ursprung der Dateien festgelegen wollen.';
$string['modeupload'] = 'Studierende dürfen Dateien hochladen';
$string['modeimport'] = 'Dateien aus Aufgabe importieren';

$string['courseuploadlimit'] = 'Max. Dateigröße Aktivität';
$string['allowedfiletypes'] = 'Erlaubte Dateiendungen (,)';
$string['allowedfiletypes_help'] = 'Hier können Sie die erlaubten Dateiendungen beim Hochladen von Aufgaben setzen, separiert durch Kommas (,). z.B.: txt, jpg.
Wenn jeder Dateityp erlaubt ist, das Feld freilassen. Groß- und Kleinschreibung wird hierbei ignoriert.';
$string['allowedfiletypes_err'] = 'Bitte Eingabe überprüfen! Dateiendungen enthalten ungültige Sonder- oder Trennzeichen';
$string['obtainteacherapproval_help'] = 'Diese Option legt fest, ob Dateien sofort ohne Prüfung sichtbar werden:

* Ja - Einträge werden sofort nach dem Speichern für alle angezeigt
* Nein - Einträge werden von Trainer/innen geprüft und freigegeben';
$string['assignment'] = 'Aufgabe';
$string['obtainstudentapproval_help'] = 'Hier legen Sie fest ob Studierende selbst entscheiden können ob ihre Aufgaben für andere sichtbar sind oder nicht.
Sie können festlegen von welchen Studiernden das Einverständnis eingeholt wird. Erst nach Einverständnis des Studierenden
sind die Dateien auch wirklich sichtbar.';
$string['choose'] = 'bitte auswählen ...';
$string['importfrom_err'] = 'Sie müssen eine Aufgabe auswählen von der Sie importieren möchten.';

// view.php
$string['allowsubmissionsfromdate_upload'] = 'Uploadmöglickeit von';
$string['allowsubmissionsfromdate_import'] = 'Einverständniserklärung von';
$string['cutoffdate_upload'] = 'Uploadmöglichkeit bis';
$string['cutoffdate_upload'] = 'Einverständniserklärung bis';
$string['duedate_upload'] = 'Uploadmöglickeit bis';
$string['duedate_import'] = 'Einverständniserklärung bis';
$string['assignment_notfound'] = 'Die Aufgabe von der Import wird konnte nicht mehr gefunden werden.';
$string['myfiles'] = 'Meine Dateien';
$string['edit_uploads'] = 'Dateien bearbeiten';