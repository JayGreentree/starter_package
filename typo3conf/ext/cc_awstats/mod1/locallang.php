<?php
/**
 * Language labels for module "tools_txccawstatsM1"
 * 
 * This file is detected by the translation tool.
 */

$LOCAL_LANG = Array (
	'default' => Array (
		'title' => 'AWStats logfile analysis',
		'aws_helpText' => 'The logfiles have to be named *.log or *log*.txt<br>examples: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>ERROR:</strong><br>The logfile directory \'\' configured in typo3conf/localconf.php as \'\' was NOT found!',
		'aws_errLogfileDir_conf' => '<strong>ERROR:</strong><br>The logfile directory is not configured in typo3conf/localconf.php like this:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>ERROR:</strong><br>Could not create directory \'\' to store data for AWStats. Please check write permissions.',
		'aws_noLogfilesFound' => '<strong>ERROR:</strong><br>No logfiles found in directory \'\'<br>The logfiles have to be named *.log or *log*.txt<br>examples: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'save configuration',
		'aws_btnEditConf' => 'edit configuration',
		'aws_hdrSelectLogfile' => 'Select logfile to view analysis:',
		'aws_hdrConfLogfile' => 'Configure logfiles:',
		'aws_msg1ConfLogfile' => 'You have to configure following logfiles:',
		'aws_msg2ConfLogfile' => 'Please enter the domain(s) for wich the logfile is. For multiple domains seperate them with komma. The main domain first.<br>example: <strong>www.mydomain.com,mydomain.com,sub.mydomain.com</strong><br>You can hide files with <strong>-</strong> (minus)<br>',
		'aws_hdrEditLogfile' => 'Edit logfile configuration:',
		'aws_btnClearCache' => 'Clear cache',
		'aws_hdrClearCache' => 'Clear AWStat cache',
		'aws_descrClearCache' => 'Clearing the cache may be needed with upgrade to new AWStats versions.',
		'aws_cacheCleared' => 'Cleared caches.',
	),
	'dk' => Array (
	),
	'de' => Array (
		'title' => 'AWStats Logfile Analyse',
		'aws_helpText' => 'Die Logfiles m�ssen auf folgendes Muster passen: *.log oder *log*.txt<br>Beispiele: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>FEHLER:</strong><br>The logfile directory \'\' configured in typo3conf/localconf.php as \'\' was NOT found!',
		'aws_errLogfileDir_conf' => '<strong>FEHLER:</strong><br>The logfile directory is not configured in typo3conf/localconf.php like this:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>FEHLER:</strong><br>Could not create directory \'\' to store data for AWStats. Please check write permissions.',
		'aws_noLogfilesFound' => '<strong>FEHLER:</strong><br>No logfiles found in directory \'\'<br>The logfiles have to be named *.log or *log*.txt<br>examples: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'Konfiguration sichern',
		'aws_btnEditConf' => 'Konfiguration bearbeiten',
		'aws_hdrSelectLogfile' => 'W�hlen Sie ein Logfile f�r die Analyse aus:',
		'aws_hdrConfLogfile' => 'Logfiles konfigurieren:',
		'aws_msg1ConfLogfile' => 'Sie m�ssen folgende Logfiles konfigurieren:',
		'aws_msg2ConfLogfile' => 'Bitte die Domain(s) f�r das Logfile eintragen. Mehrere Domains mit Komma trennen. Die Haupt-Domain als erstes.<br>Beispiel: <strong>www.mydomain.com,mydomain.com,sub.mydomain.com</strong><br>Ist eine Datei kein Logfile, dann <strong>-</strong> (minus) eintragen.<br>',
		'aws_hdrEditLogfile' => 'Logfile Konfiguration bearbeiten:',
		'aws_btnClearCache' => 'Cache l�schen',
		'aws_hdrClearCache' => 'AWStat Cache l�schen',
		'aws_descrClearCache' => 'Das l�schen des Cache ist unter Umst�nden beim Upgrade auf eine neue AWStats Version notwendig.',
		'aws_cacheCleared' => 'Caches gel�scht.',
	),
	'no' => Array (
		'title' => 'AWStats lofil analyse',
		'aws_helpText' => 'Loggfilen m� ha filnavn med *.log eller *log*.txt<br>f.eks.: <strong>mitt-domene.log   logfile.txt   website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>ERROR:</strong><br>Loggfil folderen " konfigurert i typo3conf/localconf.php som " ble ikke funnet',
		'aws_errLogfileDir_conf' => '<strong>ERROR:</strong>br>Logfil folderen er ikke konfigurert i typo3conf/localconf.php som f�lger:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>ERROR:</strong><br>Kunne ikke lage folder " til � lagre data for AWStats. V�r vennlig � sjekk skrive rettigheter.',
		'aws_noLogfilesFound' => '<strong>ERROR:</strong><br>Ingen logfiler er funnet i folderen "<br>Loggfilen m� ha filnavn med *.log eller *log*.txt<br>f.eks.: <strong>mitt-domene.log   logfile.txt   website-log.txt</strong>',
		'aws_btnSaveConf' => 'lagre konfigurasjon',
		'aws_btnEditConf' => 'rediger konfigurasjon',
		'aws_hdrSelectLogfile' => 'Velg logfil for � se analyse',
		'aws_hdrConfLogfile' => 'Konfigurer logfil',
		'aws_msg1ConfLogfile' => 'Du m� konfigurere f�lgende logfiler',
		'aws_msg2ConfLogfile' => 'Tast inn domene(t) for loggfilen. Flere domener separeres med komma. Hoveddomenet f�rst. <br> Eksempel : <strong>www.mittdomene.no,mittdomene.no,sub.mittdomene.no</strong><br>Du kan skjule filer med <strong>-</strong> (minus)<br>',
		'aws_hdrEditLogfile' => 'Rediger loggfil konfigurasjon',
		'aws_btnClearCache' => 'T�m buffer',
		'aws_hdrClearCache' => 'T�m AWStat buffer',
		'aws_descrClearCache' => '� t�mme bufferet er muligens n�dvendig ved oppgradering til nyere AWStats versjon',
		'aws_cacheCleared' => 'Bufferet er t�mt',
	),
	'it' => Array (
	),
	'fr' => Array (
		'title' => 'AWStats analyse statistique',
		'aws_helpText' => 'Les fichiers journaux doivent �tre nomm�s *.log ou *log*.txt<br>ex: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>ERREUR:</strong><br>Le dossier des fichiers journaux " configur� dans typo3conf/localconf.php comme " n\'a pas �t� trouv�!',
		'aws_errLogfileDir_conf' => '<strong>ERREUR:</strong><br>Le dossier des fichiers journaux n\'est pas configur� dans typo3conf/localconf.php comme cela:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '] <strong>ERREUR:</strong><br>Impossible de cr�er le dossier \'\' pour stocker les donn�es de AWStats. Veuillez contr�ler les droits d\'acc�s.',
		'aws_noLogfilesFound' => '<strong>ERREUR:</strong><br>Aucun fichier journal trouv� dans le dossier \'\'<br>Les fichiers journaux doivent �tre nomm�s *.log ou *log*.txt<br>ex: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'Sauver la configuration',
		'aws_btnEditConf' => 'Editer la configuration',
		'aws_hdrSelectLogfile' => 'S�l�ctionnez le journal � analyser:',
		'aws_hdrConfLogfile' => 'Configurer les fichiers journaux:',
		'aws_msg1ConfLogfile' => 'Vous devez configurez les fichiers journaux suivant:',
		'aws_msg2ConfLogfile' => 'Veuillez pr�ciser le domaine au quel se raporte le fichier journal . Pour les domaines multiples, s�parez les par des virgules. Le domaine principale en premier.<br>ex.: <strong>www.mydomain.com,mydomain.com,sub.mydomain.com</strong><br>Vous pouvez cacher des fichiers avec <strong>-</strong> (moins)<br>',
		'aws_hdrEditLogfile' => 'Editer la configuration des fichiers journaux:',
		'aws_btnClearCache' => 'Effacer le cache',
		'aws_hdrClearCache' => 'Effacer le cache AWStats',
		'aws_descrClearCache' => 'Effacer le cache peut-�tre obligatoire lors de la mise � jour vers une nouvelle version de AWStats.',
		'aws_cacheCleared' => 'Caches effac�s.',
	),
	'es' => Array (
	),
	'nl' => Array (
		'title' => 'AWStats logbestand analyse',
		'aws_helpText' => 'De logbestanden moeten *.log of *log*.txt genoemd worden<br>voorbeelden:<strong>mijn-domein.log.logbestand.txt  website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>FOUT:</strong><br>De logbestand map \'\' ingesteld in typo3conf/localconf.php als \'\' kon NIET worden gevonden!',
		'aws_errLogfileDir_conf' => '<strong>FOUT:</strong><br>De logbestand map is in typo3conf/localconf.php niet geconfigureerd op de volgende manier: <br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;"',
		'aws_errCreateLogfileDir' => '<strong>FOUT:</strong><br>Kon directory \'\' voor de opslag van AWStats data niet aanmaken. Kijk a.u.b. uw schrijf-permissies na.',
		'aws_noLogfilesFound' => '<strong>FOUT:</strong><br>Geen logbestanden gevonden in de map \'\' <br>De logbestanden moeten *.log of *.log*.txt genoemd worden.<br>voorbeelden:<strong>mijn-domein.log  logbestand.txt  website-log.tct</strong>',
		'aws_btnSaveConf' => 'opslaan configuratie',
		'aws_btnEditConf' => 'bewerken configuratie',
		'aws_hdrSelectLogfile' => 'Selecteer logbestand en bekijk de analyse:',
		'aws_hdrConfLogfile' => 'Configureer logbestanden:',
		'aws_msg1ConfLogfile' => 'U moet de volgende logbestanden configureren:',
		'aws_msg2ConfLogfile' => 'Vul a.u.b. de domein(en) in waarvoor het logbestand is. Scheidt meerdere domeinen met een komma. Het hoofddomein komt eerst.<br>voorbeeld:<strong>www.mijndomein,com,mijndomein.com,sub.mijndomein.com</strong><br>U kunt bestanden verbergen met <strong>-</strong>(minus)<br>',
		'aws_hdrEditLogfile' => 'Logbestand configuratie aanpassen:',
		'aws_btnClearCache' => 'Cache legen',
		'aws_hdrClearCache' => 'AWStats cache legen',
		'aws_descrClearCache' => 'Bij het upgraden naar een nieuwe AWStats versie kan het nodig zijn de cache te lagen',
		'aws_cacheCleared' => 'Cache geleegd.',
	),
	'cz' => Array (
		'title' => 'AWStats anal�za log�',
		'aws_helpText' => 'Soubory s logy',
		'aws_errLogfileDir' => '<strong>CHYBA:</strong><br>Adres�� s logy \'\', specifikovan� v typo3conf/localconf.php jako \'\' NEBYL nalezen!',
		'aws_errLogfileDir_conf' => '<strong>CHYBA:</strong><br>Adres�� s logy nen� specifikovan� v typo3conf/localconf.php jako nap�:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/pro_priklad/;',
		'aws_errCreateLogfileDir' => '<strong>CHYBA:</strong><br>Nelze vytvo�it adres�� \'\' k ulo�en� dat pro AWStats. Zkontrolujte pros�m p��stupov� pr�va.',
		'aws_noLogfilesFound' => '<strong>CHYBA:</strong><br>V adres��i \'\' nebyly nalezeny ��dn� log soubory.<br>Log soubory by m�ly b�t pojmenovan� jako *.log nebo *log*.txt<br>P��klady: <strong>moje-domena.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'ulo�it konfiguraci',
		'aws_btnEditConf' => 'upravit konfiguraci',
		'aws_hdrSelectLogfile' => 'Vyberte log soubor pro zobrazen� anal�zy:',
		'aws_hdrConfLogfile' => 'Konfigurovat log soubory',
		'aws_msg1ConfLogfile' => 'Je t�eba konfigurovat n�sleduj�c� log soubory:',
		'aws_msg2ConfLogfile' => 'Pros�m vlo�te dom�ny, kter�m p��slu�� tento log soubor. Pro v�ce dom�n tyto odd�lte pomoc� ��rky. Hlavn� dom�nu vlo�te jako prvn�.<br>P��klad:<strong>www.mojedomena.cz,mojedomena.cz,poddomena.mojedomena.cz</strong><br>Skr�t soubory m��ete pomoc� <strong>-</strong> (m�nus).<br>',
		'aws_hdrEditLogfile' => 'Upravit konfiguraci log soubor�',
		'aws_btnClearCache' => 'Vypr�zdnit cache',
		'aws_hdrClearCache' => 'Vypr�zdnit ke� AWStats',
		'aws_descrClearCache' => 'Se zm�nou verze AWStats je t�eba vypr�zdit cache.',
		'aws_cacheCleared' => 'Cache vypr�zdn�na.',
	),
	'pl' => Array (
		'title' => 'AWStats analiza log�w',
		'aws_helpText' => 'Nazwy plik�w log�w musz� by� postaci *.log albo *log*.txt<br>przyk�ad: <strong>moja-domena.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>B��D:</strong><br>Katalog z plikami log�w \'\' skonfigurowany w typo3conf/localconf.php jako \'\' nie zosta� znaleziony!',
		'aws_errLogfileDir_conf' => '<strong>B��D:</strong><br>Katalog z plikami log�w nie jest skonfigurowany w typo3conf/localconf.php np. w ten spos�b:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/logi/;',
		'aws_errCreateLogfileDir' => '<strong>B��D:</strong><br>Nie mog� utworzy� katalogu \'\' przechowuj�cego dane AWStats. Sprawd� prawa zapisu.',
		'aws_noLogfilesFound' => '<strong>B��D:</strong><br>Nie znaleziono plik�w log�w w katalogu \'\'<br>Nazwy plik�w log�w musz� by� postaci *.log albo *log*.txt<br>przyk�ad: <strong>moja-domena.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'Zapisz konfiguracj�',
		'aws_btnEditConf' => 'Edytuj konfiguracj�',
		'aws_hdrSelectLogfile' => 'Wybierz plik log�w do analizy:',
		'aws_hdrConfLogfile' => 'Konfiguruj pliki log�w:',
		'aws_msg1ConfLogfile' => 'Skonfigurowa�e� poni�sze pliki log�w:',
		'aws_msg2ConfLogfile' => 'Wprowad� nazwy domen dla kt�rych generowany jest log. Domeny oddzielaj przecinkami. G��wna domena najpierw.<br>Przyk�ad: <strong>www.mojadomena.pl,mojadomena.com.pl</strong><br>Mo�esz ukry� pliki u�ywaj�c <strong>-</strong> (minus)<br>',
		'aws_hdrEditLogfile' => 'Edytuj konfiguracj� pliku log�w:',
		'aws_btnClearCache' => 'Wyczy�� cache',
		'aws_hdrClearCache' => 'Wyczy�� cache AWStat',
		'aws_descrClearCache' => 'Przy zmianie wersji AWStats moze by� wymagane wyczyszczenie cache\'u.',
		'aws_cacheCleared' => 'Wyczyszczono cache.',
	),
	'si' => Array (
		'title' => 'AWStats analiza obiska',
		'aws_helpText' => 'Dnevniki morajo biti poimenovani *.log ali *log*.txt<br>primeri: <strong>moja-domena.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>NAPAKA:</strong><br>Pot do dnevnikov \'\' nastavljena v typo3conf/localconf.php kot \'\' NE obstaja!',
		'aws_errLogfileDir_conf' => '<strong>NAPAKA:</strong><br>Pot do dnevnikov v typo3conf/localconf.php ni pravilno nastavljena. Primer:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>NAPAKA:</strong><br>Mape \'\' za shranjevanje podatkov za AWStats ni bilo mogo�e ustvariti. Preverite privilegije za pisanje.',
		'aws_noLogfilesFound' => '<strong>NAPAKA:</strong><br>V mapi \'\' ni datotek.<br>Dnevniki morajo biti poimenovani *.log ali *log*.txt<br>primeri: <strong>moja-domena.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'shrani nastavitve',
		'aws_btnEditConf' => 'uredi nastavitve',
		'aws_hdrSelectLogfile' => 'Izberi dnevnik za analizo:',
		'aws_hdrConfLogfile' => 'Nastavi dnevnike:',
		'aws_msg1ConfLogfile' => 'Nastaviti morate naslednje dnevnike:',
		'aws_msg2ConfLogfile' => 'Vpi�ite domene, za katere je ta dnevnik. Pri ve�ih domenah jih lo�ite z vejico. Glavna domena najprej. <br>primer: <strong>www.mydomain.com,mydomain.com,sub.mydomain.com</strong><br>Datoteke lahko skrijete z znakom<strong>-</strong> (minus)<br>',
		'aws_hdrEditLogfile' => 'Uredi nastavitve dnevnika:',
		'aws_btnClearCache' => 'Izprazni predpomnilnik:',
		'aws_hdrClearCache' => 'Izprazni AWStats predpomnilnik:',
		'aws_descrClearCache' => 'Pri nadgradnji programa AWStats je v�asih potrebno brisanje predpomnilnika.',
		'aws_cacheCleared' => 'Prepomnilniki izpraznjeni.',
	),
	'fi' => Array (
		'title' => 'AWStats lokitiedosto analyysi',
		'aws_helpText' => 'Lokitiedostot on nimett�v� *.log or *log*.txt<br>Esimerkit: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>ERROR:</strong><br>Lokitiedosto hakemisto \'\' configured in typo3conf/localconf.php as \'\' ei l�ytynyt!',
		'aws_errLogfileDir_conf' => '<strong>ERROR:</strong><br>Lokitiedostohakemistoa ei ole konfiguroitu typo3conf/localconf.php kuten esimerkiksi:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>ERROR:</strong><br>Hakemistoa ei voitu luoda \'\' tallentamaan AWStats tietoja. Tarkista kirjoitus oikeudet.',
		'aws_noLogfilesFound' => '<strong>ERROR:</strong><br>Hakemistosta ei l�ytynyt lokitiedostoja \'\'<br>Lokitiedostot on nimett�v� *.log or *log*.txt<br>Esimerkiksi: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'tallenna konfiguraatio',
		'aws_btnEditConf' => 'muotoile konfiguraatiota',
		'aws_hdrSelectLogfile' => 'Valitse lokitiedosto jonka analyysin haluat n�hd�:',
		'aws_hdrConfLogfile' => 'Konfiguroi lokitiedostoja',
		'aws_msg1ConfLogfile' => 'Olet konfiguroinut seuraavia lokitiedostoja:',
		'aws_msg2ConfLogfile' => 'Anna domain jolle lokitiedosto on. Jos on useampia domaineja erottele ne pilkuin. P��domaini ensiksi.<br>esimerkki:',
		'aws_hdrEditLogfile' => 'Muotoile lokitiedoston konfiguraatiota',
		'aws_btnClearCache' => 'Tyhejenn� v�limuisti',
		'aws_hdrClearCache' => 'Tyhjenn� AWStatin v�limuisti',
		'aws_descrClearCache' => 'V�limuistien tyhjennys voi olla tarpeellinen p�ivitett�ess� AWStatsin uuteen versioon.',
		'aws_cacheCleared' => 'Tyhjennetty v�limuistit',
	),
	'tr' => Array (
		'title' => 'AWStat logdosyas� analizi',
		'aws_btnSaveConf' => 'konfig�rasyonu kaydet',
		'aws_btnEditConf' => 'konfig�rasyonu d�zelt',
		'aws_hdrSelectLogfile' => 'Logdosyas�n�n analiz g�sterimini se�',
		'aws_hdrConfLogfile' => 'Logdosyalar� konfig�rasyonu:',
		'aws_msg1ConfLogfile' => 'A�a��daki logdosyalar�n� konfig�re etmelisiniz:',
		'aws_hdrEditLogfile' => 'Logdosyalar� konfig�rasyonunu d�zelt:',
		'aws_btnClearCache' => '�nbelle�i temizle',
		'aws_hdrClearCache' => 'AWStat belle�ini temizle',
		'aws_descrClearCache' => '�nbellek temizleniyor daha y�ksek AWStat s�r�m�n� y�klemeniz gerekli olabilir.',
		'aws_cacheCleared' => '�nbellek temizlendi.',
	),
	'se' => Array (
		'title' => 'Analysering av AWStats log-filen',
		'aws_helpText' => 'Logfilen b�r ha namnet *.log eller *log*.txt<br>exempel: <strong>my-domain.log logfile.text website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>ETT FEL HAR UPPST�TT:</strong><br>Logfilens katalog \'\' som konfigurerats i typo3conf/localconf.php med namnet \'\' hittades INTE!',
		'aws_errLogfileDir_conf' => '<strong>ETT FEL HAR UPPST�TT:</strong><br>Logfilens katalog har inte konfigurerats i typo3conf/localconf.php enligt detta exempel:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>ETT FEL HAR UPPST�TT:</strong><br>Det g�r inte att skapa katalogen \'\' f�r att lagra data f�r AWStats. V�nligen kontrollera skrivr�ttigheterna.',
		'aws_noLogfilesFound' => '<strong>ETT FEL HAR UPPST�TT:</strong>Ingen logfil hittades i katalogen \'\'<br>Logfilen b�r ha ett namn som *.log eller *log*.txt<br>Exempel: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'spara konfigurationen',
		'aws_btnEditConf' => '�ndra konfigurationen',
		'aws_hdrSelectLogfile' => 'V�lj vilken logfil som skall analyseras:',
		'aws_hdrConfLogfile' => 'Konfigurera logfilen:',
		'aws_msg1ConfLogfile' => 'Du b�r konfigurera f�ljande logfiler:',
		'aws_msg2ConfLogfile' => 'V�nligen ge det domain till vilket logfilen h�r. Har du flere domain b�r dom separeras med ett kommatecken. Ange huvud-domainet f�rst.<br>Exempel: <strong>www.mydomain.com,mydomain.com,sub.mydomain.com</strong><br>. Filer kan g�mmas med ett minusstreck <strong>-</strong><br>',
		'aws_hdrEditLogfile' => '�ndra logfilens konfiguration:',
		'aws_btnClearCache' => 'T�m cache-minnet',
		'aws_hdrClearCache' => 'T�m AWStats cache-minne',
		'aws_descrClearCache' => 'Det kan vara n�dv�ndigt att t�mma cache-minnet d� du uppgraderar till en ny version av AWStats.',
		'aws_cacheCleared' => 'Cache-minnet t�mt.',
	),
	'pt' => Array (
		'title' => 'AWStats an�lise de di�rios',
		'aws_helpText' => 'Os di�rios tem de ser nomeados *.log ou *log*.txt<br>exemplos: <strong>my-domain.log</strong> ou <strong>logfile.txt</strong> ou <strong>website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>ERRO:<strong><br>A directoria de di�rios \'\' configurada em typo3conf/localconf.php como \'\' N�O existe!',
		'aws_errLogfileDir_conf' => '<strong>ERRO:<strong><br>A directoria de di�rios n�o est� configurada em typo3conf/localconf.php como por exemplo:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/por_exemplo/;',
		'aws_errCreateLogfileDir' => '<strong>ERRO:</strong><br>N�o � poss�vel criar a directoria \'\' para guardar os dados de AWStats. Verifique as permiss�es de escrita.',
		'aws_noLogfilesFound' => '<strong>ERROR:</strong><br>Nenhum di�rios encontrado na directoria \'\'<br>Os di�rios tem de ser nomeados *.log ou *log*.txt<br>exemplos: <strong>my-domain.log</strong> ou <strong>logfile.txt</strong> ou <strong>website-log.txt</strong>',
		'aws_btnSaveConf' => 'salvar configura��o',
		'aws_btnEditConf' => 'editar configura��o',
		'aws_hdrSelectLogfile' => 'Selecionar di�rio a analisar:',
		'aws_hdrConfLogfile' => 'Configurar di�rios:',
		'aws_msg1ConfLogfile' => 'Tem de configurar os seguintes di�rios:',
		'aws_msg2ConfLogfile' => 'Introduza o(s) dom�nio(s) a que este di�rio pertence. Para multiplos dom�nios separe-os por v�rgula. O dom�nio principal primeiro.<br>exemplo: <strong>www.meudominio.com,meudominio.com,sub.meudominio.com</strong><br>Pode ocultar ficheiros usando o sinal <strong>-</strong> (menos)<br>',
		'aws_hdrEditLogfile' => 'Editar configura��o do di�rio:',
		'aws_btnClearCache' => 'Limpar cache',
		'aws_hdrClearCache' => 'Limpar cache do AWStats',
		'aws_descrClearCache' => 'Limpar a cache pode ser necess�rio ao actualizar para novas vers�es do AWStats.',
		'aws_cacheCleared' => 'Cache limpa.',
	),
	'ru' => Array (
		'title' => '���������� ���-������ AWStats',
		'aws_helpText' => '���-����� ������ ���������� *.log ��� *.log.txt<br />�������: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>������:</strong><br />������� � ���-������� \'\', ����������������� � typo3conf/localconf.php ��� \'\', �� ��� ������!',
		'aws_errLogfileDir_conf' => '<strong>������:</strong><br />������� � ���-������� �� ��������������� � typo3conf/localconf.php ���:<br />$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>������:</strong><br />�� ���� ������� ������� \'\', ��� ����� ��������� ����� ��� AWStats. ����������, ��������� ����� �� ������.',
		'aws_noLogfilesFound' => '<strong>������:</strong><br />���-����� �� ������� � �������� \'\'<br />���-����� ������ ���������� *.log ��� *.log.txt<br />�������: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => '��������� ������������',
		'aws_btnEditConf' => '�������� ������������',
		'aws_hdrSelectLogfile' => '�������� ���-���� ��� �������:',
		'aws_hdrConfLogfile' => '���������������� ���-�����:',
		'aws_msg1ConfLogfile' => '��� ���� ���������������� ��������� ���-�����:',
		'aws_msg2ConfLogfile' => '����������, ������� ������, ��� ������� ��� ������� ���� ���-����. ���� ������� �����, ���������� �� ��������. ������� ����� ������ ���� ������.<br />������: <strong>www.mydomain.com,mydomain.com,sub.mydomain.com</strong><br />�� ������ �������� ����� � ������� <strong>-</strong> (�����)<br />',
		'aws_hdrEditLogfile' => '�������� ������������ ���-�����:',
		'aws_btnClearCache' => '�������� ���',
		'aws_hdrClearCache' => '�������� ��� AWStats',
		'aws_descrClearCache' => '������� ���� ����� ������������� ��� �������� �� ����� ������ AWStats.',
		'aws_cacheCleared' => '���� �������.',
	),
	'ro' => Array (
		'aws_cacheCleared' => 'Sterge informatii stocate',
	),
	'ch' => Array (
	),
	'sk' => Array (
	),
	'lt' => Array (
	),
	'is' => Array (
	),
	'hr' => Array (
	),
	'hu' => Array (
		'title' => 'AWStats napl�f�jl elemz�s',
		'aws_helpText' => 'A napl�f�jloknak *.log vagy *log*.txt -szer� nevet kell adni.<br>p�ld�k:<strong>mydomain.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>HIBA:</strong><br>A "typo3conf/localconf.php-ban ... -k�nt konfigur�lt" napl�f�jl k�nyvt�r NEM tal�lhat�!',
		'aws_errLogfileDir_conf' => '<strong>HIBA:</strong><br>A napl�f�jl k�nyvt�r nincs konfigur�lva a typo3conf/localconf.php f�jlban, mint p�ld�ul ez:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>HIBA:</strong><br>A \'\'  nev� k�nyvt�r nem hozhat� l�tre adatt�rol�sra az AWStats r�sz�re. Ellen�rizd az �r�si jogosults�got.',
		'aws_noLogfilesFound' => '<strong>Hiba:</strong><br>A \'\' k�nyvt�rban nincs napl�f�jl<br>A napl�f�jloknak *.log vagy *log*.txt -szer� nevet kell adni.<br>p�ld�k: <strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_btnSaveConf' => 'be�ll�t�s ment�se',
		'aws_btnEditConf' => 'be�ll�t�s szerkeszt�se',
		'aws_hdrSelectLogfile' => 'V�laszd ki a vizsg�land� napl�f�jlt:',
		'aws_hdrConfLogfile' => 'Napl�f�jlok be�ll�t�sa:',
		'aws_msg1ConfLogfile' => 'A k�vetkez� napl�f�jlokat kell konfigur�lni:',
		'aws_msg2ConfLogfile' => 'Add meg, hogy melyik tartom�nyokra van napl�f�jl. T�bsz�r�s tartom�nyokat vessz�vel v�laszd el. El�sz�r a f�tartom�nyt add meg.<br>p�lda: <strong>www.mydomain.com,mydomain.com,sub.mydomain.com</strong><br>A f�jlokat elrejtheted a  <strong>-</strong> (minusz) jellel<br>',
		'aws_hdrEditLogfile' => 'Napl�f�jl konfigur�ci� szerkeszt�se',
		'aws_btnClearCache' => 'Cache t�rl�se',
		'aws_hdrClearCache' => 'AWStat cache t�rl�se',
		'aws_descrClearCache' => 'A cache t�rl�se sz�ks�gess� v�lhat �j AWStat verzi�ra t�rt�n� �t�ll�sn�l.',
		'aws_cacheCleared' => 'Cache t�r�lve.',
	),
	'gl' => Array (
	),
	'th' => Array (
	),
	'gr' => Array (
	),
	'hk' => Array (
		'title' => 'AWStats��x���R',
		'aws_helpText' => '��x�ݭn�R�W��*.log �� *log*.txt<br>�ҡG<strong>my-domain.log logfile.txt website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>���~�G</strong><br>�䤣��btypo3conf/localconf.php ���]�w����x�ɸ�Ƨ��I',
		'aws_errLogfileDir_conf' => '<strong>���~�G</strong><br>�btypo3conf/localconf.php ���]�w����x�ɸ�Ƨ����O�H�U�榡�G<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/for_example/;',
		'aws_errCreateLogfileDir' => '<strong>���~�G</strong><br>����߸�Ƨ�"�x�sAWStats����ơC���ˬdŪ�g�v���C',
		'aws_noLogfilesFound' => '<strong>���~�G</strong><br>�b��Ƨ����䤣���x�ɮ�" <br>��x�ɭn�R�W��*.log �� *log*.txt<br>�ҡG<strong>my-domain.log logfile.txt website-log.txt<strong>',
		'aws_btnSaveConf' => '�x�s�]�w',
		'aws_btnEditConf' => '�ק�]�w',
		'aws_hdrSelectLogfile' => '��ܤ�x���˵����R�G',
		'aws_hdrConfLogfile' => '�]�w��x�ɡG',
		'aws_msg1ConfLogfile' => '�A�ݭn�]�w�H�U��x�ɡG',
		'aws_msg2ConfLogfile' => '�п�ܤ�x�ɰO�������� (domains) �C�p�h��@�Ӻ���A�i�Ρu, �v���}�C�D�����b�̥��C�ҡG<strong>www.mydomain.com,mydomain.com,sub.mydomain.com</strong><br>�A�i�H��<strong>-</strong>(�u-�v) �����ɮ�',
		'aws_hdrEditLogfile' => '�ק��x�ɳ]�w:',
		'aws_btnClearCache' => '�M���֨��O��:',
		'aws_hdrClearCache' => '�M��AWStat�֨��O��',
		'aws_descrClearCache' => '�ɯŦ̷ܳs�� AWStats �]�\\�ݭn�M���֨��O��',
		'aws_cacheCleared' => '�w�M���֨��O��',
	),
	'eu' => Array (
	),
	'bg' => Array (
	),
	'br' => Array (
		'title' => 'AWStats an�lise de di�rios',
		'aws_helpText' => 'Os di�rios t�m de ser nomeados *.log ou *log*.txt<br>exemplos: <strong>meu-dominio.log</strong> ou <strong>arquivo-diario.txt</strong> ou <strong>website-log.txt</strong>',
		'aws_errLogfileDir' => '<strong>ERRO:<strong><br>O diret�rio de di�rios \'\' configurado em typo3conf/localconf.php como \'\' N�O existe!',
		'aws_errLogfileDir_conf' => '<strong>ERRO:<strong><br>O diret�rio de di�rios n�o est� configurado em typo3conf/localconf.php como por exemplo:<br>$TYPO3_CONF_VARS["FE"]["logfile_dir"]="fileadmin/por_exemplo/;',
		'aws_errCreateLogfileDir' => '<strong>ERRO:</strong><br>N�o � poss�vel criar a directoria \'\' para guardar os dados de AWStats. Verifique as permiss�es de escrita.',
	),
	'et' => Array (
	),
	'ar' => Array (
	),
	'he' => Array (
	),
	'ua' => Array (
	),
	'lv' => Array (
	),
	'jp' => Array (
	),
	'vn' => Array (
	),
	'ca' => Array (
	),
	'ba' => Array (
	),
	'kr' => Array (
	),
	'eo' => Array (
	),
	'my' => Array (
	),
	'hi' => Array (
	),
);
?>