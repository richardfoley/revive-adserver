<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

// Note: New translations not found in original lang files but found in CSV
$GLOBALS['strInventory'] = "Inventar";
$GLOBALS['strBasicInformation'] = "Osnovne informacije";
$GLOBALS['strWarning'] = "Opozorilo";
$GLOBALS['strTypeFTPUsername'] = "Prijava";
$GLOBALS['strTypeFTPPassword'] = "Geslo";
$GLOBALS['strHideInactive'] = "Skrij neaktivne";
$GLOBALS['strHasTaxID'] = "ID DDV";
$GLOBALS['strStatisticsDefaults'] = "Statistika";
$GLOBALS['strGeneralSettings'] = "Splošne nastavitve";
$GLOBALS['strAdminSettings'] = "Administratorske nastavitve";
$GLOBALS['strAdministratorSettings'] = "Administratorske nastavitve";
$GLOBALS['strChooseSection'] = "Izberi oddelek";
$GLOBALS['strInstall'] = "Namesti";
$GLOBALS['strLanguageSelection'] = "Izbira jezika";
$GLOBALS['strDatabaseSettings'] = "Nastavitve podatkovne baze";
$GLOBALS['strAdminAccount'] = "Nadzorniški račun";
$GLOBALS['strAdvancedSettings'] = "Napredne nastavitve";
$GLOBALS['strSpecifySyncSettings'] = "Usklajevalne nastavitve";
$GLOBALS['strBtnContinue'] = "Nadaljuj »";
$GLOBALS['strBtnRecover'] = "Povrni »";
$GLOBALS['strBtnStartAgain'] = "Znova začni s posodobitvijo »";
$GLOBALS['strBtnGoBack'] = "« Vrnitev";
$GLOBALS['strBtnAgree'] = "Strinjam se »";
$GLOBALS['strBtnDontAgree'] = "« Ne strinjam se";
$GLOBALS['strBtnRetry'] = "Poizkusi znova";
$GLOBALS['strFixErrorsBeforeContinuing'] = "Pred nadaljevanjem popravite vse napake";
$GLOBALS['strWarningRegisterArgcArv'] = "PHP nastavitvena spremenljivka register_argc_argv mora biti omogočena za zagon vzdrževanja iz ukazne vrstice.";
$GLOBALS['strTablesPrefix'] = "Predpona tabelnih imen";
$GLOBALS['strTablesType'] = "Tip tabele";
$GLOBALS['strInstallIntro'] = "Hvala za uporabo <a href='http://". MAX_PRODUCT_URL ."' target='_blank'><strong>". MAX_PRODUCT_NAME ."</strong></a><p>Ta čarovnik vas bo vodil skozi celoten postopek namestitve / posodobitve ". MAX_PRODUCT_NAME ." oglaševalskega strežnika.</p><p>Za pomoč pri namestitvenem postopku smo za vas ustvarili <a href='". OX_PRODUCT_DOCSURL ."/wizard/qsg-install' target='_blank'>Hiter vodič pri namestitvi</a> , ki vam omogoča spoznavanje celotnega postopka. Za podrobnejši vodič pri namestitvi in nastavitvi ". MAX_PRODUCT_NAME ." obiščite <a href='". OX_PRODUCT_DOCSURL ."/wizard/admin-guide' target='_blank'>Administratorski vodič</a>.";
$GLOBALS['strRecoveryRequiredTitle'] = "Vaš prejšnji poizkus posodobitve je naletel na težavo";
$GLOBALS['strRecoveryRequired'] = "Prišlo je do napake med procesiranjem vaše prejšnje posodobitve. ". MAX_PRODUCT_NAME ." bo poizkusil povrniti posodobitveni postopek. Prosimo, potrdite z klikom na gumb Povrni.";
$GLOBALS['strTermsTitle'] = "Pogoji uporabe, Varovanje zasebnosti";
$GLOBALS['strTermsIntro'] = "". MAX_PRODUCT_NAME ." se razpečuje prosto pod odprtokodno licenco GNU (General Public License). Prosimo, preglejte naslednjo dokumentacijo za nadaljevanje namestitve.";
$GLOBALS['strPolicyTitle'] = "Varovanje zasebnosti";
$GLOBALS['strPolicyIntro'] = "Prosimo, preglejte naslednjo dokumentacijo pred nadaljevanjem namestitvenega postopka";
$GLOBALS['strDbSetupTitle'] = "Nastavitve podatkovne baze";
$GLOBALS['strDbSetupIntro'] = "Prosimo, vnesite podatke za povezavo z vašo podatkovno bazo. Če jih ne poznate, prosimo obvestite svojega administratorja.<p> Z naslednjim korakom boste namestili podatkovno bazo. Kliknite 'Nadaljuj' za nadaljevanje.</p>";
$GLOBALS['strDbUpgradeIntro'] = "Spodaj so najdene podrobnosti podatkovne baze za vašo namestitev ". MAX_PRODUCT_NAME .". Prosimo, preverite če so podrobnosti pravilne.<p>Z naslednjim korakom boste posodobili svojo podatkovno bazo. Kliknite 'Nadaljuj' za posodobitev vašega sistema.</p>";
$GLOBALS['strOaUpToDate'] = "Vaša ". MAX_PRODUCT_NAME ." podatkovna baza in struktura datotek uporabljata najnovejšo različico in zato posodobitev v tem trenutku ni potrebna. Kliknite \"Nadaljuj\" za napotitev v ". MAX_PRODUCT_NAME ." Nadzorno ploščo.";
$GLOBALS['strOaUpToDateCantRemove'] = "Opozorilo: Posodobitvena datoteka je še vedno v vaši mapi. Zaradi varnostnih razlogov je ne moremo odstraniti. Prosimo, datoteko izbrišite ročno.";
$GLOBALS['strRemoveUpgradeFile'] = "Posodobitveno datoteko morate odstraniti iz vaše \"var\" mape.";
$GLOBALS['strInstallSuccess'] = "Z klikom na 'Nadaljuj' se boste prijavili v vaš oglaševalski strežnik.	<p><strong>Kaj sledi?</strong></p>	<div class='psub'>	  <p><b>Prijavite se na posodobitve o izdelku</b><br>	    <a href='". OX_PRODUCT_DOCSURL ."/wizard/join' target='_blank'>Prijavite se na ". MAX_PRODUCT_NAME ." elektronsko sporočanje</a> o posodobitvah izdelka, varnostnih popravkih in oznanilih o novih izdelkih.	  </p>	  <p><b>Ustvarjanje vaše prve oglaševalske kampanje</b><br>	    Uporabite <a href='". OX_PRODUCT_DOCSURL ."/wizard/qsg-firstcampaign' target='_blank'>hitri vodič pri ustvarjanju prve oglaševalske kampanje</a>.	  </p>	</div>	<p><strong>Dodatni namestitveni koraki</strong></p>	<div class='psub'>	  <p><b>Zaklenite vaše konfiguracijske datoteke</b><br>	    To je dodaten varnostni ukrep pri zaščiti vaših datotek pred spremenitvijo.  <a href='". OX_PRODUCT_DOCSURL ."/wizard/lock-config' target='_blank'>Več o tem</a>.	  </p>	  <p><b>Nastavi redno vzdrževalno nalogo</b><br>	    Vzdrževalna skripta je priporočljiva za zagotovitev pravočasnih in optimalnih učinkov oglaševalske dostave.  <a href='". OX_PRODUCT_DOCSURL ."/wizard/setup-cron' target='_blank'>Več o tem</a>	  </p>	  <p><b>Preglejte vaše konfiguracijske nastavitve</b><br>	    Pred uporabo ". MAX_PRODUCT_NAME ." vam priporočamo pregled vaših nastavitev s klikom na zaznamek 'Nastavitve'.	  </p>	</div>";
$GLOBALS['strSystemCheck'] = "Sistemska preverba";
$GLOBALS['strSystemCheckIntro'] = "Namestitveni čarovnik preverja nastavitve vašega strežnika, da se bo namestitev lahko uspešno zaključila.	<p>Prosimo, preverite vse poudarjene sporne točke za zaključitev namestitvenega postopka.</p>";
$GLOBALS['strDbSuccessIntro'] = "". MAX_PRODUCT_NAME ." podatkovna baza je bila ustvarjena. Prosimo, kliknite \"Nadaljuj\" za napotitev h konfiguraciji ". MAX_PRODUCT_NAME ." nadzorniških in dostavnih nastavitev.";
$GLOBALS['strDbSuccessIntroUpgrade'] = "Vaš sistem je bil uspešno nadgrajen. Naslednji koraki vam bodo pomagali pri posodobitvi konfiguracije vašega novega oglaševalskega strežnika.";
$GLOBALS['strErrorWritePermissions'] = "Prišlo je do napak pri dostopu do datotek. Pred nadaljevanjem jih morate odpraviti.<br />Pri odpravi teh napak v sistemu Linux vtipkajte naslednji ukazni niz:";
$GLOBALS['strErrorFixPermissionsCommand'] = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorWritePermissionsWin'] = "Prišlo je do napak pri dostopu do datotek. Pred nadaljevanjem jih morate odpraviti.";
$GLOBALS['strCheckDocumentation'] = "Za več pomoči si prosimo oglejte <a href='". OX_PRODUCT_DOCSURL ."'>". MAX_PRODUCT_NAME ."  dokumentacijo</a>.";
$GLOBALS['strAdminUrlPrefix'] = "URL Nadzorniškega vmesnika";
$GLOBALS['strDeliveryUrlPrefix'] = "URL Dostavnega orodja";
$GLOBALS['strDeliveryUrlPrefixSSL'] = "URL (SSL) Dostavnega orodja";
$GLOBALS['strImagesUrlPrefix'] = "URL Hrambe slik";
$GLOBALS['strImagesUrlPrefixSSL'] = "URL (SSL) Hrambe slik";
$GLOBALS['strEditConfigNotPossible'] = "Zaradi varnostnih nastavitev ni mogoče urejati vseh nastavitev konfiguracijske datoteke. Če želite uvesti spremembe, boste najprej morali odkleniti konfiguracijsko datoteko za to namestitev.";
$GLOBALS['strEditConfigPossible'] = "Urejanje nastavitev konfiguracijske datoteke je možna, vendar lahko vodi k varnostnim težavam. Če bi radi zaščitili svoj sistem, boste morali zakleniti konfiguracijsko datoteko za to namestitev.";
$GLOBALS['strUnableToWriteConfig'] = "V konfiguracijsko datoteko je bilo nemožno zapisati spremembe";
$GLOBALS['strUnableToWritePrefs'] = "Podatkovni bazi je bilo nemožno izročiti izbiro";
$GLOBALS['strImageDirLockedDetected'] = "Strežnik ne more zapisovati v <b>Mapo z slikami</b>. <br>Ne morete nadaljevati, dokler ne spremenite dovoljenj za to mapo ali pa ustvarite novo.";
$GLOBALS['strConfigurationSetup'] = "Nastavitveni kontrolni seznam";
$GLOBALS['strConfigurationSettings'] = "Konfiguracijske nastavitve";
$GLOBALS['strLoginCredentials'] = "Prijavne poverilnice";
$GLOBALS['strAdminUsername'] = "Administrator  Uporabniško ime";
$GLOBALS['strAdminPassword'] = "Administrator  Geslo";
$GLOBALS['strInvalidUsername'] = "Napačno uporabniško ime";
$GLOBALS['strAdminFullName'] = "Polno ime Administratorja";
$GLOBALS['strAdminEmail'] = "E-pošta Administratorja";
$GLOBALS['strAdministratorEmail'] = "E-pošta Administratorja";
$GLOBALS['strCompanyName'] = "Ime podjetja";
$GLOBALS['strUserlogEmail'] = "Beleži vsa odhodna e-poštna sporočila";
$GLOBALS['strTimezone'] = "Časovno področje";
$GLOBALS['strTimezoneEstimated'] = "Ocenjeno časovno področje";
$GLOBALS['strTimezoneGuessedValue'] = "Strežniško časovno področje ni pravilno nastavljeno v PHP-ju";
$GLOBALS['strTimezoneSeeDocs'] = "Prosimo, oglejte si %DOCS% za nastavitev te spremenljivke v PHP-ju";
$GLOBALS['strTimezoneDocumentation'] = "dokumentacija";
$GLOBALS['strLoginSettingsTitle'] = "Administratorska prijava";
$GLOBALS['strLoginSettingsIntro'] = "Za nadaljevanje posodobitvenega postopka, prosimo vnesite vaše ". MAX_PRODUCT_NAME ." podatke o administratorskem računu. Prijaviti se morate kot administrator za nadaljevanje posodobitvenega postopka.";
$GLOBALS['strAdminSettingsTitle'] = "Ustvari administratorski račun";
$GLOBALS['strAdminSettingsIntro'] = "Prosimo, izpolnite to polje za ustvaritev vašega administratorskega računa.";
$GLOBALS['strConfigSettingsIntro'] = "Prosimo, pred nadaljevanjem preverite spodnje konfiguracijske nastavite. Če niste prepričani, kaj počnete, pustite privzete nastavitve.";
$GLOBALS['strEnableAutoMaintenance'] = "Samodejno izvrši vzdrževalna dela med dostavo, če načrtovana vzdrževalna dela niso omogočena";
$GLOBALS['strDatabaseServer'] = "Globalne nastavitve podatkovne strežniške baze (Global database server)";
$GLOBALS['strDbType'] = "Tip podatkovne baze";
$GLOBALS['strDbHost'] = "Gostiteljsko ime podatkovne baze (Hostname)";
$GLOBALS['strDbPort'] = "Številka vtiča podatkovne baze (Port number)";
$GLOBALS['strDbUser'] = "Uporabniško ime za podatkovno bazo";
$GLOBALS['strDbPassword'] = "Geslo za podatkovno bazo";
$GLOBALS['strDbName'] = "Ime podatkovne baze";
$GLOBALS['strDatabaseOptimalisations'] = "Optimizacijske nastavitve podatkovne baze";
$GLOBALS['strPersistentConnections'] = "Uporabi trajne povezave (persistent connections)";
$GLOBALS['strCantConnectToDb'] = "Ne morem se povezati s podatkovno bazo";
$GLOBALS['strDemoDataInstall'] = "Namesti demonstracijske podatke";
$GLOBALS['strDemoDataIntro'] = "Privzete datoteke lahko naložite v ". MAX_PRODUCT_NAME ." kot pomoč pri prvi uporabi spletne oglaševalske aplikacije. Najpogostejši tipi pasic, kakor tudi začetnih kampanj so lahko naloženi in prednastavljeni. Priporočljivo za nove namestitve.";
$GLOBALS['strDebug'] = "Nastavitve beleženja iskanja in odstranjevanja napak (debug)";
$GLOBALS['strProduction'] = "Strežnik za produkcijo (production server)";
$GLOBALS['strEnableDebug'] = "Omogoči beleženje iskanja in odstranjevanja napak (debug)";
$GLOBALS['strDebugMethodNames'] = "Vključi imena postopkov v \"debug\" beležko";
$GLOBALS['strDebugLineNumbers'] = "Vključi številke nizov v \"debug\" beležko";
$GLOBALS['strDebugType'] = "Tip beležke za iskanje in odstranjevanje napak (debug)";
$GLOBALS['strDebugTypeFile'] = "Datoteka";
$GLOBALS['strDebugTypeMcal'] = "mCal";
$GLOBALS['strDebugTypeSql'] = "SQL podatkovna baza";
$GLOBALS['strDebugTypeSyslog'] = "Sistemska beležka (syslog)";
$GLOBALS['strDebugName'] = "Ime beležke, Kolendar, SQL Tabela,<br />ali Sistemska beležka";
$GLOBALS['strDebugPriority'] = "Prioritetni nivo iskanja in odstranjevanja napak";
$GLOBALS['strPEAR_LOG_DEBUG'] = "PEAR_LOG_DEBUG - Največ informacij";
$GLOBALS['strPEAR_LOG_INFO'] = "PEAR_LOG_INFO - Privzete informacije";
$GLOBALS['strPEAR_LOG_NOTICE'] = "PEAR_LOG_NOTICE";
$GLOBALS['strPEAR_LOG_WARNING'] = "PEAR_LOG_WARNING";
$GLOBALS['strPEAR_LOG_ERR'] = "PEAR_LOG_ERR";
$GLOBALS['strPEAR_LOG_CRIT'] = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT'] = "PEAR_LOG_ALERT";
$GLOBALS['strPEAR_LOG_EMERG'] = "PEAR_LOG_EMERG - Najmanj informacij";
$GLOBALS['strDebugIdent'] = "\"Debug\" identifikacijski niz";
$GLOBALS['strDebugUsername'] = "mCal, SQL Uporabniško ime strežnika";
$GLOBALS['strDebugPassword'] = "mCal, SQL Geslo strežnika";
$GLOBALS['strDeliverySettings'] = "Dostavne nastavitve";
$GLOBALS['strWebPath'] = "". MAX_PRODUCT_NAME ." Dostopne poti strežnika";
$GLOBALS['strWebPathSimple'] = "Omrežna pot";
$GLOBALS['strDeliveryPath'] = "Dostavna pot";
$GLOBALS['strImagePath'] = "Pot slik";
$GLOBALS['strDeliverySslPath'] = "SSL Dostavna pot";
$GLOBALS['strImageSslPath'] = "SSL Pot slik";
$GLOBALS['strImageStore'] = "Mapa za slike";
$GLOBALS['strTypeWebSettings'] = "Nastavitve hrambe spletnega strežnika lokalne pasice";
$GLOBALS['strTypeWebMode'] = "Shranjevalni način";
$GLOBALS['strTypeWebModeLocal'] = "Lokalni imenik";
$GLOBALS['strTypeWebDir'] = "Lokalni imenik";
$GLOBALS['strTypeDirError'] = "Mrežni strežnik ne more zapisovati v lokalni imenik";
$GLOBALS['strTypeWebModeFtp'] = "Zunanji FTP strežnik";
$GLOBALS['strTypeFTPHost'] = "FTP gostitelj";
$GLOBALS['strTypeFTPDirectory'] = "Imenik gostitelja";
$GLOBALS['strTypeFTPPassive'] = "Uporabi pasivni FTP";
$GLOBALS['strTypeFTPErrorDir'] = "FTP imenik gostitelja ne obstaja";
$GLOBALS['strTypeFTPErrorConnect'] = "Ne morem se povezati s FTP strežnikom. Uporabniško ime ali geslo ni pravilno";
$GLOBALS['strTypeFTPErrorHost'] = "FTP gostitelj ni pravilen";
$GLOBALS['strDeliveryFilenames'] = "Dostavna imena datotek";
$GLOBALS['strDeliveryFilenamesAdClick'] = "Klikov na oglas";
$GLOBALS['strDeliveryFilenamesAdConversionVars'] = "Pretvorbenih spremenljivk oglasa";
$GLOBALS['strDeliveryFilenamesAdContent'] = "Vsebina oglasa";
$GLOBALS['strDeliveryFilenamesAdConversion'] = "Pretvorba oglasa";
$GLOBALS['strDeliveryFilenamesAdConversionJS'] = "Pretvorba oglasa (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame'] = "Okvir oglasa";
$GLOBALS['strDeliveryFilenamesAdImage'] = "Slika oglasa";
$GLOBALS['strDeliveryFilenamesAdJS'] = "Oglas (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdLayer'] = "Sloj oglasa";
$GLOBALS['strDeliveryFilenamesAdLog'] = "Beležka oglasa";
$GLOBALS['strDeliveryFilenamesAdPopup'] = "Prikazujoč (Popup) oglas";
$GLOBALS['strDeliveryFilenamesAdView'] = "Prikaz oglasa";
$GLOBALS['strDeliveryFilenamesXMLRPC'] = "XML RPC Poziv";
$GLOBALS['strDeliveryFilenamesLocal'] = "Lokalni poziv";
$GLOBALS['strDeliveryFilenamesFrontController'] = "Sprednji preglednik";
$GLOBALS['strDeliveryFilenamesFlash'] = "Vključujoč FLASH (lahko je poln URL)";
$GLOBALS['strDeliveryCaching'] = "Nastavitve dostavnega pomnilnika pasice";
$GLOBALS['strDeliveryCacheLimit'] = "Čas med posodobitvami pomnilnika pasice (v sekundah)";
$GLOBALS['strOrigin'] = "Uporabi oddaljen izvorni strežnik";
$GLOBALS['strOriginType'] = "Tip izvornega strežnika";
$GLOBALS['strOriginHost'] = "Gostiteljsko ime (hostname) za izvorni strežnik";
$GLOBALS['strOriginPort'] = "Številka vtiča (port number) za izvorno podatkovno bazo";
$GLOBALS['strOriginScript'] = "Skriptna datoteka za izvorno podatkovno bazo";
$GLOBALS['strOriginTypeXMLRPC'] = "XMLRPC";
$GLOBALS['strOriginTimeout'] = "Premor izvora (v sekundah)";
$GLOBALS['strOriginProtocol'] = "Protokol izvornega strežnika";
$GLOBALS['strDeliveryAcls'] = "Preračunaj omejitve dostave pasice med dostavo";
$GLOBALS['strDeliveryObfuscate'] = "Zmedi kanal pri dostavi oglasov";
$GLOBALS['strDeliveryExecPhp'] = "Dovoli izvedbo PHP kode v oglasih<br />(Opozorilo: Varnostno tveganje)";
$GLOBALS['strDeliveryCtDelimiter'] = "Omejitev zunanjih (3rd party) sledilnikov klikov";
$GLOBALS['strP3PSettings'] = "P3P Varovanje zasebnosti";
$GLOBALS['strUseP3P'] = "Uporabi P3P polico";
$GLOBALS['strP3PCompactPolicy'] = "P3P pogodbena polica";
$GLOBALS['strP3PPolicyLocation'] = "Lokacija P3P police";
$GLOBALS['uiEnabled'] = "Uporabniški vmesnik je omogočen";
$GLOBALS['strGeotargetingSettings'] = "Geociljne nastavitve";
$GLOBALS['strGeotargeting'] = "Geociljne nastavitve";
$GLOBALS['strGeotargetingType'] = "Tip geociljnega modula";
$GLOBALS['strGeotargetingGeoipCountryLocation'] = "Lokacija MaxMind GeoIP podatkovne baze za državo";
$GLOBALS['strGeotargetingGeoipRegionLocation'] = "Lokacija MaxMind GeoIP podatkovne baze za regijo";
$GLOBALS['strGeotargetingGeoipCityLocation'] = "Lokacija MaxMind GeoIP podatkovne baze za mesto";
$GLOBALS['strGeotargetingGeoipAreaLocation'] = "Lokacija MaxMind GeoIP podatkovne baze za področje";
$GLOBALS['strGeotargetingGeoipDmaLocation'] = "Lokacija MaxMind GeoIP podatkovne baze za DMA";
$GLOBALS['strGeotargetingGeoipOrgLocation'] = "Lokacija MaxMind GeoIP podatkovne baze za organizacijo";
$GLOBALS['strGeotargetingGeoipIspLocation'] = "Lokacija MaxMind GeoIP podatkovne baze za ISP-ja";
$GLOBALS['strGeotargetingGeoipNetspeedLocation'] = "Lokacija MaxMind GeoIP podatkovne baze za Netspeed";
$GLOBALS['strGeoShowUnavailable'] = "Prikaži geociljne dostavne omejitve, četudi GeoIP podatki niso na voljo";
$GLOBALS['strGeotrackingGeoipCountryLocationError'] = "MaxMind GeoIP podatkovna baza za državo ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipRegionLocationError'] = "MaxMind GeoIP podatkovna baza za regijo ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipCityLocationError'] = "MaxMind GeoIP podatkovna baza za mesto ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipAreaLocationError'] = "MaxMind GeoIP podatkovna baza za področje ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipDmaLocationError'] = "MaxMind GeoIP podatkovna baza za DMA ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipOrgLocationError'] = "MaxMind GeoIP podatkovna baza za organizacijo ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipIspLocationError'] = "MaxMind GeoIP podatkovna baza za ISP-ja ne obstaja na določeni lokaciji";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "MaxMind GeoIP podatkovna baza za Netspeed ne obstaja na določeni lokaciji";
$GLOBALS['strShowCampaignInfo'] = "Prikaži dodatne informacije o kampanji na strani <i>Kampanje</i>";
$GLOBALS['strShowBannerInfo'] = "Prikaži dodatne informacije o pasici na strani <i>Pasice</i>";
$GLOBALS['strShowCampaignPreview'] = "Prikaži predogled vseh pasic na strani <i>Pasice</i>";
$GLOBALS['strShowBannerHTML'] = "Prikaži dejansko pasico namesto enostavne HTML kode pri predogledu HTML pasice";
$GLOBALS['strShowBannerPreview'] = "Prikaži predogled pasice na vrhu strani, ki obravnavajo pasice";
$GLOBALS['strGUIShowMatchingBanners'] = "Prikaži ujemajoče pasice na strani <i>Pasica s povezavo</i>";
$GLOBALS['strGUIShowParentCampaigns'] = "Prikaži izvorne kampanje na strani <i>Pasica s povezavo</i>";
$GLOBALS['strGUIAnonymousCampaignsByDefault'] = "Privzete kampanje spremeni v anonimne";
$GLOBALS['strBeginOfWeek'] = "Začetek tedna";
$GLOBALS['strPercentageDecimals'] = "Decimalke po odstotkih";
$GLOBALS['strWeightDefaults'] = "Privzeta vrednost";
$GLOBALS['strDefaultBannerWeight'] = "Privzeta vrednost pasice";
$GLOBALS['strDefaultCampaignWeight'] = "Privzeta vrednost kampanje";
$GLOBALS['strPublisherDefaults'] = "Privzete nastavitve spletne strani";
$GLOBALS['strModesOfPayment'] = "Načini plačila";
$GLOBALS['strCurrencies'] = "Valute";
$GLOBALS['strCategories'] = "Kategorije";
$GLOBALS['strHelpFiles'] = "Datoteke s pomočjo";
$GLOBALS['strDefaultApproved'] = "Odobreni čekovni predeli";
$GLOBALS['strAllowedInvocationTypes'] = "Dovoljeni pozivni tipi";
$GLOBALS['strEnable3rdPartyTrackingByDefault'] = "Omogoči privzeto zunanje sledenje klikov (3rd party)";
$GLOBALS['strCsvImport'] = "Dovoli nalaganje offline pretvorb";
$GLOBALS['strLogAdRequests'] = "Beleži zahtevo ob vsaki zahtevani pasici";
$GLOBALS['strLogAdImpressions'] = "Beleži ogled ob vsakem ogledu pasice";
$GLOBALS['strLogAdClicks'] = "Beleži klik ob vsakem kliku na pasico";
$GLOBALS['strLogTrackerImpressions'] = "Beleži sledilni ogled ob vsakem ogledu sledilnega signala";
$GLOBALS['strReverseLookup'] = "Preglej imena gostiteljev obiskovalcev, če niso podana";
$GLOBALS['strProxyLookup'] = "Poizkusi ugotoviti prave IP naslove obiskovalcev, ki uporabljajo proxy strežnik";
$GLOBALS['strPreventLogging'] = "Blokiraj nastavitve beleženja pasic";
$GLOBALS['strIgnoreHosts'] = "Ne beleži statistike za uporabnike, ki uporabljajo naslednje IP naslove ali gostitelje";
$GLOBALS['strBlockAdViews'] = "Ne štej učinkov oglasa, če je obiskovalec videl enak oglas/področje znotraj označenega časa (v sekundah)";
$GLOBALS['strBlockAdViewsError'] = "Blokirna vrednost učinka oglasa ne sme biti negativna";
$GLOBALS['strBlockAdClicks'] = "Ne štej klikov oglasa, če je obiskovalec kliknil na enak oglas/področje znotraj označenega časa (v sekundah)";
$GLOBALS['strBlockAdClicksError'] = "Blokirna vrednost klikov na oglas ne sme biti negativna";
$GLOBALS['strMaintenanceOI'] = "Presledek vzdrževalnega postopka (v minutah)";
$GLOBALS['strMaintenanceOIError'] = "Neveljaven presledek vzdrževalnega postopka - preglejte dokumentacijo za veljavne vrednosti";
$GLOBALS['strPrioritySettings'] = "Prednostne nastavitve";
$GLOBALS['strPriorityInstantUpdate'] = "Takoj posodobi oglasne prioritete po spremembi uporabniškega vmesnika (UI)";
$GLOBALS['strDefaultImpConWindow'] = "Privzeto okno povezave pri Učinkih oglasa (v sekundah)";
$GLOBALS['strDefaultImpConWindowError'] = "Če omogočeno, mora biti privzeto okno povezave pri Učinkih oglasa pozitivna vrednost";
$GLOBALS['strDefaultCliConWindow'] = "Privzeto okno povezave pri Klikih na oglas (v sekundah)";
$GLOBALS['strDefaultCliConWindowError'] = "Če omogočeno, mora biti privzeto okno povezave pri Klikih na oglas pozitivna vrednost";
$GLOBALS['strWarnLimit'] = "Pošlji opozorilo ko je število preostalih učinkov manjše kot navedeno tukaj";
$GLOBALS['strWarnLimitErr'] = "Opozorilo omejitve mora biti pozitivna vrednost";
$GLOBALS['strWarnLimitDays'] = "Pošlji opozorilo ko je število preostalih dni manjše kot navedeno tukaj";
$GLOBALS['strWarnLimitDaysErr'] = "Opozorilo omejitve dni naj bo pozitivna vrednost";
$GLOBALS['strWarnAdmin'] = "Pošlji opozorilo administratorju, ko se kampanja bliža svojemu koncu";
$GLOBALS['strWarnClient'] = "Pošlji opozorilo oglaševalcu, ko se kampanja bliža svojemu koncu";
$GLOBALS['strWarnAgency'] = "Pošlji opozorilo agenciji, ko se kampanja bliža svojemu koncu";
$GLOBALS['strQmailPatch'] = "qmail popravek";
$GLOBALS['strEnableQmailPatch'] = "Omogoči qmail popravek";
$GLOBALS['strGuiSettings'] = "Nastavitve uporabniškega vmesnika";
$GLOBALS['strAppName'] = "Ime aplikacije";
$GLOBALS['strMyHeader'] = "Lokacija header datoteke";
$GLOBALS['strMyHeaderError'] = "Header datoteka ne obstaja na lokaciji, ki ste jo določili";
$GLOBALS['strMyFooter'] = "Lokacija footer datoteke";
$GLOBALS['strMyFooterError'] = "Footer datoteka ne obstaja na lokaciji, ki ste jo določili";
$GLOBALS['strDefaultTrackerStatus'] = "Privzeto stanje sledilnika";
$GLOBALS['strDefaultTrackerType'] = "Privzeti tip sledilnika";
$GLOBALS['strMyLogo'] = "Ime datoteke po meri za logotip";
$GLOBALS['strMyLogoError'] = "Datoteka za logotip ne obstaja v admin/slikovni mapi";
$GLOBALS['strGuiHeaderForegroundColor'] = "Barva header-ja v ospredju";
$GLOBALS['strGuiHeaderBackgroundColor'] = "Barva header-ja v ozadju";
$GLOBALS['strGuiActiveTabColor'] = "Barva aktivnega zaznamka";
$GLOBALS['strGuiHeaderTextColor'] = "Barva besedila v header-ju";
$GLOBALS['strColorError'] = "Prosimo, vnesite barve v formatu RGB, npr '0066CC'";
$GLOBALS['strGzipContentCompression'] = "Uporabi GZIP za stiskanje vsebine";
$GLOBALS['strClientInterface'] = "Oglaševalcev vmesnik";
$GLOBALS['strReportsInterface'] = "Vmesnik za poročila";
$GLOBALS['strClientWelcomeEnabled'] = "Omogoči Dobrodošlico za oglaševalca";
$GLOBALS['strClientWelcomeText'] = "Pozdravno sporočilo<br />(HTML zaznamki so dovoljeni)";
$GLOBALS['strPublisherInterface'] = "Vmesnik za spletno stran";
$GLOBALS['strPublisherAgreementEnabled'] = "Omogoči prijavo za spletne strani, ki niso sprejele Pogojev uporabe";
$GLOBALS['strPublisherAgreementText'] = "Prijavno besedilo (HTML zaznamki so dovoljeni)";
$GLOBALS['strNovice'] = "Zaradi varnostnih razlogov potrebujejo postopki o izbrisu potrditev";
$GLOBALS['strInstallNotSuccessful'] = "<b>Namestitev ". MAX_PRODUCT_NAME ." ni bila uspešna</b><br /><br />Nekateri deli namestitve niso mogli biti dokončani.\nTe težave so lahko samo začasne, zato lahko kliknete <b>Nadaljuj</b> in se vrnete na\nprvi korak namestitvenega postopka. Če želite izvedeti, kaj pomeni sporočilo o napaki in kako jo odpraviti,\nprosimo, preglejte priloženo dokumentacijo.";
$GLOBALS['strEmailSettings'] = "Nastavitve za e-pošto";
$GLOBALS['strEmailHeader'] = "Glava za e-pošto";
$GLOBALS['strEmailLog'] = "Beležka za e-pošto";
$GLOBALS['strAuditTrailSettings'] = "Nastavitve za pregled poti (audit trail)";
$GLOBALS['strEnableAudit'] = "Omogoči pregled poti (audit trail)";
$GLOBALS['strTypeFTPErrorNoSupport'] = "Vaša PHP namestitev ne podpira FTP-ja";
$GLOBALS['strGeotargetingUseBundledCountryDb'] = "Uporabi implementirano MaxMind GeoLiteCountry podatkovno bazo";
$GLOBALS['strConfirmationUI'] = "Potrditev v Uporabniškem vmesniku";
$GLOBALS['strBannerStorage'] = "Nastavitve hrambe pasic";
$GLOBALS['strMaintenanceSettings'] = "Vzdrževalne nastavitve";
$GLOBALS['strSSLSettings'] = "SSL nastavitve";
$GLOBALS['requireSSL'] = "Vsili SSL dostop do uporabniškega vmesnika";
$GLOBALS['sslPort'] = "SSL port, ki ga uporablja Web Server";
$GLOBALS['strAlreadyInstalled'] = "". MAX_PRODUCT_NAME ." je že nameščen na ta sistem. Če bi ga radi konfigurirali, pojdite na <a href='account-index.php'>Nastavitve vmesnika</a>.";
$GLOBALS['strAllowEmail'] = "Dovoli globalno pošiljanje e-pošte";
$GLOBALS['strEmailAddressFrom'] = "E-poštni naslov pošilja poročila IZ";
$GLOBALS['strEmailAddressName'] = "Osebno ali ime podjetja se podpiše v e-pošto";
$GLOBALS['strInvocationDefaults'] = "Privzete pozivne nastavitve";
$GLOBALS['strDbLocal'] = "Uporabi lokalni povezovalni vtič (socket connection)";
$GLOBALS['strDbSocket'] = "Vtičnica podatkovne baze";
$GLOBALS['strEmailAddresses'] = "Naslov \"From\" e-pošte";
$GLOBALS['strEmailFromName'] = "Ime \"From\" e-pošte";
$GLOBALS['strEmailFromAddress'] = "E-pošta \"From\" e-poštnega naslova";
$GLOBALS['strEmailFromCompany'] = "E-pošta \"From\" podjetja";
$GLOBALS['strIgnoreUserAgents'] = "<b>Ne</b> beleži statistike odjemalcev z naslednjimi nizi v njihovem uporabniškem zastopniku (user-agent)(ena na vrstico)";
$GLOBALS['strEnforceUserAgents'] = "<b>Samo</b> beleži statistike odjemalcev z naslednjimi nizi v njihovem uporabniškem zastopniku (user-agent)(ena na vrstico)";
$GLOBALS['strConversionTracking'] = "Nastavitve sledilnika pretvorb";
$GLOBALS['strEnableConversionTracking'] = "Omogoči sledenje pretvorb";
$GLOBALS['strDbNameHint'] = "Podatkovna baza bo ustvarjena, če ne obstaja";
$GLOBALS['strProductionSystem'] = "Sistem produkcije";
$GLOBALS['strTypeFTPErrorUpload'] = "Datoteke ni bilo mogoče naložiti na FTP strežnik. Preverite vse nastavitve.";
$GLOBALS['strBannerLogging'] = "Nastavitve beleženja pasice";
$GLOBALS['strBannerDelivery'] = "Nastavitve dostave pasice";
$GLOBALS['strEnableDashboardSyncNotice'] = "Prosimo, omogočite <a href='account-settings-update.php'>Preveri za posodobitve</a> , če bi želeli uporabljati Nadzorno ploščo.";
$GLOBALS['strDashboardSettings'] = "Nastavitve Nadzorne plošče";
$GLOBALS['strWarningPHPversion'] = "". MAX_PRODUCT_NAME ." potrebuje PHP  različice 5.1.4 ali višje za pravilno delovanje. Trenutno uporabljate različico {php_version}.";
$GLOBALS['strErrorFixPermissionsRCommand'] = "<i>chmod -R a+w %s</i>";
$GLOBALS['strDeliveryCacheStore'] = "Tip hrambe pomnilnika dostavljanja pasice ";
$GLOBALS['strErrorInCacheStorePlugin'] = "Pri \"%s\" vtičniku je prišlo do napak.";
$GLOBALS['strDeliveryCacheStorage'] = "Tip hrambe dostavnega pomnilnika";
$GLOBALS['strGlobalDefaultBannerUrl'] = "Privzet URL slikovne pasice ";
$GLOBALS['strAdminShareStack'] = "Delite tehnične informacije z OpenX ekipo pri nadaljnem razvoju in testiranju.";
$GLOBALS['strCantConnectToDbDelivery'] = "Ne morem se povezati z podatkovno bazo";
$GLOBALS['strAdminCheckUpdates'] = "Samodejni preveri za posodobitve izdelka in varnostna opozorila (Priporočeno)";
$GLOBALS['strAdminCheckEveryLogin'] = "Vsako prijavo";
$GLOBALS['strAdminCheckDaily'] = "Dnevno";
$GLOBALS['strAdminCheckWeekly'] = "Tedensko";
$GLOBALS['strAdminCheckMonthly'] = "Mesečno";
$GLOBALS['strAdminCheckNever'] = "Nikoli";
$GLOBALS['generalSettings'] = "Globalne nastavitve sistema";
$GLOBALS['defaultLanguage'] = "Privzeti jezik sistema<br />(Vask uporabnik lahko izbere svoj jezik)";
$GLOBALS['strUploadConversions'] = "Naloži pretvorbe";
$GLOBALS['strDefaultBannerWErr'] = "Privzeta vrednost pasice naj bo pozitivno število";
$GLOBALS['strDefaultCampaignWErr'] = "Privzeta vrednost kampanje naj bo pozitivno število";
$GLOBALS['strChooseAdvertiser'] = "Izberite oglaševalca";
$GLOBALS['strChooseCampaign'] = "Izberite kampanjo";
$GLOBALS['strChooseCampaignBanner'] = "Izberite pasico";
$GLOBALS['strChooseTracker'] = "Izberite sledilnik";
$GLOBALS['strDefaultConversionStatus'] = "Privzeti status pretvorb";
$GLOBALS['strDefaultConversionType'] = "Privzeti tip pretvorb";
$GLOBALS['strCSVTemplateSettings'] = "Nastavitve CSV predloge";
$GLOBALS['strIncludeCountryInfo'] = "Vključi informacije o državi";
$GLOBALS['strIncludeBrowserInfo'] = "Vključi informacije o brskalniku";
$GLOBALS['strIncludeOSInfo'] = "Vključi informacije o operacijskem sistemu";
$GLOBALS['strIncludeSampleRow'] = "Vključi vzorčni niz";
$GLOBALS['strCSVTemplateAdvanced'] = "Napredna predloga";
$GLOBALS['strCSVTemplateIncVariables'] = "Vključi spremenljivke sledilnika";
?>