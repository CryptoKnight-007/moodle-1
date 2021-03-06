<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Automatically generated strings for Moodle installer
 *
 * Do not edit this file manually! It contains just a subset of strings
 * needed during the very first steps of installation. This file was
 * generated automatically by export-installer.php (which is part of AMOS
 * {@link http://docs.moodle.org/dev/Languages/AMOS}) using the
 * list of strings defined in /install/stringnames.txt.
 *
 * @package   installer
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirname'] = 'Katalog/mapp för administration';
$string['availablelangs'] = 'Tillgängliga språkpaket';
$string['chooselanguagehead'] = 'Välj ett språk';
$string['chooselanguagesub'] = 'Vänligen välj ett språk för installationen. Du kommer att ha möjlighet att välja språk för webbplatsen och användarna på en senare skärm.';
$string['clialreadyconfigured'] = 'Filen <em>config.php</em> finns redan. Använd <code>admin/cli/install_database.php</code> för att installera Moodle på denna server.';
$string['clialreadyinstalled'] = 'Filen config.php finns redan. Vänligen använd admin/cli/upgrade.php om Du vill uppgradera Din webbplats.';
$string['cliinstallheader'] = 'Installationsprogram av typ kommandorad {$a} för Moodle ';
$string['databasehost'] = 'Värd för databas';
$string['databasename'] = 'Namn på databas';
$string['databasetypehead'] = 'Välj drivrutin för databasen';
$string['dataroot'] = 'Datakatalog';
$string['dbprefix'] = 'Prefix för tabeller';
$string['dirroot'] = 'Moodle-katalog';
$string['environmenthead'] = 'Undersöker din miljö...';
$string['errorsinenvironment'] = 'Kontrollen av miljön misslyckades';
$string['installation'] = 'Installation';
$string['langdownloaderror'] = 'Språket "{$a}" gick tyvärr inte att ladda ner. Installationen kommer att fullföljas på engelska.';
$string['memorylimithelp'] = '<p>Den aktuella minnesbegränsningen för PHP på din server är  inställt till {$a}.</p>
<p>Detta kan förorsaka att Moodle får minnesproblem senare, särskilt om du har aktiverat många moduler och/eller har många användare.</p>
<p>Vi rekommenderar att du konfigurerar PHP med en högre begränsning, som t ex 16M. Det finns flera sätt att göra detta som du kan pröva med:</p> <ol>
<li>Om du har möjlighet till det så kan du kompilera om PHP med<i>--enable-memory-limit </i>Detta gör det möjligt för Moodle att ställa in minnesbegränsningen själv. </li>
<li>Om du har tillgång till din php.ini-fil så kan du ändra inställningen för <b>memory limit</b> till något i stil med 16M. Om du inte har tillgång själv så kan du kanske be din systemadministratör att göra detta åt dig.</li>
<li>På en del PHP-servrar kan du skapa en .htaccess-fil i Moodle-katalogen som innehåller den här raden: <blockquote>php_value memory_limit 16M</blockquote>.<br />Detta kan dock på en del servrar leda till att <b>inga</b> PHP-sidor fungerar. (Du får Error-sidor istället för de riktiga) så då får du ta bort .htaccess-filen.</li>
</ol>';
$string['paths'] = 'Vägar';
$string['pathserrcreatedataroot'] = 'Datakatalogen ({$a->dataroot}) går inte att skapa med hjälp av installeraren.';
$string['pathshead'] = 'Bekräfta vägar';
$string['pathsrodataroot'] = 'Det går inte att skriva till katalogen för dataroot';
$string['pathsroparentdataroot'] = 'Det går inte att skriva till föräldrakatalogen ({$a->parent}). Det går inte att installera datakatalogen ({$a->dataroot}) med hjälp av installeraren. ';
$string['pathssubdirroot'] = 'Full sökväg till installationen av Moodle.';
$string['pathsunsecuredataroot'] = 'Placeringen av dataroot är inte säker';
$string['pathswrongadmindir'] = 'Katalogen för admin saknas';
$string['phpextension'] = '{$a} PHP tillägg';
$string['phpversion'] = 'PHP-version';
$string['phpversionhelp'] = '<p>Moodle kräver minst PHP-version 5.6.5 eller 7.1 (7.0.x har vissa motorbegränsningar).</p>
<p>Du använder för närvarande version {$a}.</p>
<p>Du måste uppgradera PHP eller flytta till en server med en nyare version av PHP.</p>';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Du ser detta eftersom du framgångsrikt har installerat och börjat använda språkpaketet <strong>{$a->packname} {$a->packversion}</strong> på din dator. Gratulerar!';
$string['welcomep30'] = 'Den här versionen av <strong>{$a->installername}</strong> innehåller program för att skapa en miljö där <strong>Moodle</strong> kommer att fungera, nämligen:';
$string['welcomep40'] = 'I paketet ingår även <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong>.';
$string['welcomep50'] = 'Användningen av alla applikationerna i det här paketet regleras av deras respektive licenser. Det kompletta paketet <strong>{$a->installername}</strong>  är <a href="http://www.opensource.org/docs/definition_plain.html">Öppen källkod </a> och distribueras
under <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> licensen.';
$string['welcomep60'] = 'De följande sidorna leder dig genom några enkla steg för att konfigurera och installera <strong>Moodle</strong> på din dator, du kan acceptera standardinställningarna eller, alternativt, modifiera dem som det passar dina egna behov.';
$string['welcomep70'] = 'Klicka på knappen "Nästa" här nedan för att fortsätta installationen av <strong>Moodle</strong>';
$string['wwwroot'] = 'Webbadress';
