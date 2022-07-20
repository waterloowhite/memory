<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 *
 * @author Davor Turkalj <turki.bsc@gmail.com>
 */
$lang['menu']                  = 'Konfiguracijske postavke';
$lang['error']                 = 'Postavke nisu ažurirane zbog neispravnih vrijednosti, molim provjerite vaše promjene i ponovo ih pohranite.
                  <br />Neispravne vrijednosti biti će označene crvenim rubom.';
$lang['updated']               = 'Postavke uspješno izmijenjene.';
$lang['nochoice']              = '(ne postoje druge mogućnosti odabira)';
$lang['locked']                = 'Postavke ne mogu biti izmijenjene, ako je to nenamjerno, <br />
                       osigurajte da su ime datoteke lokalnih postavki i dozvole ispravni.';
$lang['danger']                = 'Opasnost: Promjena ove opcije može učiniti nedostupnim Vaš wiki i izbornik upravljanja postavkama.';
$lang['warning']               = 'Upozorenje: Izmjena ove opcije može izazvati neželjeno ponašanje.';
$lang['security']              = 'Sigurnosno upozorenje: Izmjena ove opcije može izazvati sigurnosni rizik.';
$lang['_configuration_manager'] = 'Upravljanje postavkama';
$lang['_header_dokuwiki']      = 'DokuWiki';
$lang['_header_plugin']        = 'Dodatak';
$lang['_header_template']      = 'Predložak';
$lang['_header_undefined']     = 'Nedefinirana postavka';
$lang['_basic']                = 'Osnovno';
$lang['_display']              = 'Prikaz';
$lang['_authentication']       = 'Prijava';
$lang['_anti_spam']            = 'Protu-Spam';
$lang['_editing']              = 'Izmjena';
$lang['_links']                = 'Prečaci';
$lang['_media']                = 'Mediji';
$lang['_notifications']        = 'Obavijesti';
$lang['_syndication']          = 'RSS izvori';
$lang['_advanced']             = 'Napredno';
$lang['_network']              = 'Mreža';
$lang['_msg_setting_undefined'] = 'Nema postavke meta_podatka.';
$lang['_msg_setting_no_class'] = 'Nema postavke klase.';
$lang['_msg_setting_no_default'] = 'Nema podrazumijevane vrijednosti.';
$lang['title']                 = 'Wiki naslov, odnosno naziv Vašeg wikija';
$lang['start']                 = 'Naziv početne stranice u svakom imenskom prostoru';
$lang['lang']                  = 'Jezik sučelja';
$lang['template']              = 'Predložak, odnosno izgled wikija.';
$lang['tagline']               = 'Opisni redak Wiki naslova (ako ga predložak podržava)';
$lang['sidebar']               = 'Naziv bočne stranice (ako ga predložak podržava), prazno polje onemogućuje bočnu stranicu';
$lang['license']               = 'Pod kojom licencom će sadržaj biti objavljen?';
$lang['savedir']               = 'Pod-direktoriji gdje se pohranjuju podatci';
$lang['basedir']               = 'Staza poslužitelja (npr. <code>/dokuwiki/</code>). Ostavite prazno za auto-detekciju.';
$lang['baseurl']               = 'URL poslužitelja (npr. <code>http://www.yourserver.com</code>). Ostavite prazno za auto-detekciju.';
$lang['cookiedir']             = 'Staza za kolačiće. Ostavite prazno za bazni URL.';
$lang['dmode']                 = 'Mod kreiranja diretorija';
$lang['fmode']                 = 'Mod kreiranja datoteka';
$lang['allowdebug']            = 'Omogući uklanjanje pogrešaka. <b>Onemogiućiti ako nije potrebno!</b>';
$lang['recent']                = 'Broj unosa po stranici na nedavnim promjenama';
$lang['recent_days']           = 'Koliko nedavnih promjena da se čuva (dani)';
$lang['breadcrumbs']           = 'Broj nedavnih stranica koji se prikazuje. Postavite na 0 da biste onemogućili.';
$lang['youarehere']            = 'Prikaži hijerarhijsku stazu stranice (tada vjerojatno želite onemogućiti gornju opciju)';
$lang['fullpath']              = 'Prikaži punu putanju u podnožju stranice';
$lang['typography']            = 'Napravi tipografske zamjene';
$lang['dformat']               = 'Format datuma (pogledajte PHP <a href="http://php.net/strftime">strftime</a> funkciju)';
$lang['signature']             = 'Što  ubacuje gumb potpisa u uređivaču';
$lang['showuseras']            = 'Što da prikažem za korisnika koji je napravio zadnju izmjenu';
$lang['toptoclevel']           = 'Najviši nivo za sadržaj stranice';
$lang['tocminheads']           = 'Minimalni broj naslova koji određuje da li će biti prikazan sadržaj stranice';
$lang['maxtoclevel']           = 'Maksimalni broj nivoa u sadržaju stranice';
$lang['maxseclevel']           = 'Maksimalni nivo do kojeg se omogućuje izmjena dijela stranice';
$lang['camelcase']             = 'Koristi CamelCase za poveznice (veliko početno slovo svake riječi)';
$lang['deaccent']              = 'Kako se pročišćuje naziv stranice';
$lang['useheading']            = 'Koristi prvi naslov za naziv stranice';
$lang['sneaky_index']          = 'Inicijalno DokuWiki će prikazati sve imenske prostore u site mapi. Omogućavanjem ove opcije biti će sakriveni oni za koje korisnik nema barem pravo čitanja. Ovo može rezultirati skrivanjem podimenskih prostora koji su inače pristupačni, što može indeks učiniti nekorisnim pod određenim postavkama ACL-a.';
$lang['hidepages']             = 'Kod potrage mape stranica i drugih automatskih indeksa ne prikazuj stranice koje zadovoljavaju ovaj regularni izraz';
$lang['useacl']                = 'Koristi kontrolnu listu pristupa';
$lang['autopasswd']            = 'Auto-generiranje lozinki';
$lang['authtype']              = 'Mehanizam za identificiranje korisnika';
$lang['passcrypt']             = 'Metoda šifriranja lozinki';
$lang['defaultgroup']          = 'Osnovna grupa';
$lang['superuser']             = 'Superuser - grupa, korisnik ili zarezom odvojena lista  (npr. korisnik1,@grupa1,korisnik2) s punim pravom pristupa svim stranicama i funkcionalnostima neovisno o ACL postavkama';
$lang['manager']               = 'Manager - grupa, korisnik ili zarezom odvojena lista  (npr. korisnik1,@grupa1,korisnik2) s pristupom određenim upravljačkim funkcijama';
$lang['profileconfirm']        = 'Potvrdi promjene profila sa lozinkom';
$lang['rememberme']            = 'Omogući trajne kolačiće za prijavu (zapamti me)';
$lang['disableactions']        = 'Onemogući određene DokuWiki aktivnosti';
$lang['disableactions_check']  = 'Provjeri';
$lang['disableactions_subscription'] = 'Pretplati/Odjavi';
$lang['disableactions_wikicode'] = 'Vidi izvorni kod/Izvezi sirovi oblik';
$lang['disableactions_profile_delete'] = 'Obriši svog korisnika';
$lang['disableactions_other']  = 'Ostale aktivnosti (odvojene zarezom)';
$lang['disableactions_rss']    = 'XML Syndication (RSS)';
$lang['auth_security_timeout'] = 'Vremenski limit za prijavu (sekunde)';
$lang['securecookie']          = 'Da li će kolačići poslani HTTPS-om biti poslani HTTPS-om od strane preglednika? Onemogući ovu opciju kada je samo prijava osigurana SSL-om a ne i pristup stranicama.';
$lang['remote']                = 'Omogući udaljeni API. Ovo omogućava drugim aplikacijama pristup wikiju korištenjem XML-RPC i drugih mehanizama.';
$lang['remoteuser']            = 'Ograniči pristup udaljenom API-u samo korisnicima i grupama navedenim ovdje u listi odvojenoj zarezom. Ostavi prazno za pristup omogućen svima.';
$lang['usewordblock']          = 'Zaustavi spam baziran na listi riječi';
$lang['relnofollow']           = 'Koristi rel="nofollow" na vanjskim poveznicama';
$lang['indexdelay']            = 'Čekanje prije indeksiranja (sek.)';
$lang['mailguard']             = 'Prikrivanje e-mail adresa';
$lang['iexssprotect']          = 'Provjeri učitane datoteke za potencijalno maliciozni JavaScript ili HTML kod';
$lang['usedraft']              = 'Automatski pohrani nacrte promjena tijekom uređivanja';
$lang['htmlok']                = 'Omogući ugrađeni HTML';
$lang['phpok']                 = 'Omogući ugrađeni PHP';
$lang['locktime']              = 'Maksimalna trajanje zaključavanja (sek.)';
$lang['cachetime']             = 'Maksimalno trajanje priručne pohrane (sek.)';
$lang['target____wiki']        = 'Odredišni prozor za interne poveznice';
$lang['target____interwiki']   = 'Odredišni prozor za interwiki poveznice';
$lang['target____extern']      = 'Odredišni prozor za vanjske poveznice';
$lang['target____media']       = 'Odredišni prozor za medijske poveznice';
$lang['target____windows']     = 'Odredišni prozor za windows poveznice';
$lang['mediarevisions']        = 'Omogućiti revizije medijskih datoteka?';
$lang['refcheck']              = 'Provjeri prije brisanja da li se medijska datoteka još uvijek koristi';
$lang['gdlib']                 = 'Inačica GD Lib';
$lang['im_convert']            = 'Staza do ImageMagick\'s konverzijskog alata';
$lang['jpg_quality']           = 'Kvaliteta kompresije JPG-a (0-100)';
$lang['fetchsize']             = 'Maksimalna veličina (bajtovi) koju fetch.php može učitati iz vanjskih URL-ova. npr. za pohranu i promjenu veličine vanjskih slika.';
$lang['subscribers']           = 'Omogući korisnicima preplatu na promjene preko e-pošte';
$lang['subscribe_time']        = 'Vrijeme (sek.) nakon kojeg se šalju pretplatne liste. Trebalo bi biti manje od od vremena navedenog u recent_days parametru.';
$lang['notify']                = 'Uvijek šalji obavijesti o promjenama na ovu adresu epošte';
$lang['registernotify']        = 'Uvijek šalji obavijesti o novo-kreiranim korisnicima na ovu adresu epošte';
$lang['mailfrom']              = 'Adresa pošiljatelja epošte koja se koristi pri slanju automatskih poruka';
$lang['mailreturnpath']        = 'Adresa e-pošte primatelja za obavijesti o ne-isporuci';
$lang['mailprefix']            = 'Prefiks predmeta poruke kod automatskih poruka. Ostaviti prazno za korištenje naslova wikija';
$lang['htmlmail']              = 'Šalji ljepše, ali i veće poruke u HTML obliku. Onemogući za slanje poruka kao običan tekst.';
$lang['sitemap']               = 'Generiraj Google mapu stranica svakih (dana). 0 za onemogućivanje';
$lang['rss_type']              = 'tip XML feed-a';
$lang['rss_linkto']            = 'XML feed povezuje na';
$lang['rss_content']           = 'Što da se prikazuje u stavkama XML feed-a?';
$lang['rss_update']            = 'Interval obnavljanja XML feed-a (sek.)';
$lang['rss_show_summary']      = 'Prikaz sažetka u naslovu XML feed-a';
$lang['rss_media']             = 'Koje vrste promjena trebaju biti prikazane u XML feed-u?';
$lang['rss_media_o_both']      = 'oboje';
$lang['rss_media_o_pages']     = 'stranice';
$lang['rss_media_o_media']     = 'medij';
$lang['updatecheck']           = 'Provjera za nadogradnje i sigurnosna upozorenja? DokuWiki treba imati pristup do dokuwiki.org za ovo.';
$lang['userewrite']            = 'Koristi jednostavne URL-ove';
$lang['useslash']              = 'Koristi kosu crtu kao separator imenskih prostora u URL-ovima';
$lang['sepchar']               = 'Separator riječi u nazivu stranice';
$lang['canonical']             = 'Uvije koristi puni kanonski oblik URL-ova (puna apsolutna staza)';
$lang['fnencode']              = 'Metoda kodiranja ne-ASCII imena datoteka.';
$lang['autoplural']            = 'Provjera izraza u množini u poveznicama';
$lang['compression']           = 'Vrsta kompresije za pohranu attic datoteka';
$lang['gzip_output']           = 'Koristi gzip Content-Encoding za xhtml';
$lang['compress']              = 'Sažmi CSS i javascript izlaz';
$lang['cssdatauri']            = 'Veličina u bajtovima do koje slike navedene u CSS datotekama će biti ugrađene u stylesheet kako bi se smanjilo prekoračenje zaglavlja HTTP zathjeva . <code>400</code> do <code>600</code> bajtova je dobra vrijednost. Postavi <code>0</code> za onemogućavanje.';
$lang['send404']               = 'Pošalji "HTTP 404/Page Not Found" za nepostojeće stranice';
$lang['broken_iua']            = 'Da li je ignore_user_abort funkcija neispravna na vašem sustavu? Ovo može izazvati neispravan indeks pretrage. IIS+PHP/CGI je poznat po neispravnosti. Pogledaj <a href="http://bugs.dokuwiki.org/?do=details&amp;task_id=852">Bug 852</a> za više informacija.';
$lang['xsendfile']             = 'Koristi X-Sendfile zaglavlje da se dopusti web poslužitelj dostavu statičkih datoteka? Vaš web poslužitelj ovo mora podržavati.';
$lang['renderer_xhtml']        = 'Mehanizam koji se koristi za slaganje osnovnog (xhtml) wiki izlaza';
$lang['renderer__core']        = '%s (dokuwiki jezgra)';
$lang['renderer__plugin']      = '%s (dodatak)';
$lang['search_nslimit']        = 'Ograniči potragu na trenutnih X imenskih prostora. Kada se potraga izvrši s strane unutar dubljeg imenskog prostora, prvih X imenskih prostora će biti dodano u filtar';
$lang['search_fragment']       = 'Odredi podrazumijevani način djelomične pretrage';
$lang['search_fragment_o_exact'] = 'identično';
$lang['search_fragment_o_starts_with'] = 'počinje s';
$lang['search_fragment_o_ends_with'] = 'završava s';
$lang['search_fragment_o_contains'] = 'sadrži';
$lang['dnslookups']            = 'Da li da DokuWiki potraži ime računala za udaljenu IP adresu korisnik koji je izmijenio stranicu. Ako imate spor ili neispravan DNS server, nemojte koristiti ovu funkcionalnost, onemogućite ovu opciju';
$lang['jquerycdn']             = 'Da li da se jQuery i jQuery UI script datoteke učitavaju sa CDN? To proizvodi dodatne HTTP zahtjeve, ali datoteke se mogu brže učitati i korisnici ih već mogu imati učitane u od ranije.';
$lang['jquerycdn_o_0']         = 'Bez CDN, samo lokalna dostava';
$lang['jquerycdn_o_jquery']    = 'CDN na code.jquery.com';
$lang['jquerycdn_o_cdnjs']     = 'CDN na cdnjs.com';
$lang['proxy____host']         = 'Proxy poslužitelj - adresa';
$lang['proxy____port']         = 'Proxy poslužitelj - port';
$lang['proxy____user']         = 'Proxy poslužitelj - korisničko ime';
$lang['proxy____pass']         = 'Proxy poslužitelj - lozinka';
$lang['proxy____ssl']          = 'Koristi SSL za vezu prema proxy poslužitelju';
$lang['proxy____except']       = 'Preskoči proxy za URL-ove koji odgovaraju ovom regularnom izrazu.';
$lang['license_o_']            = 'Ništa odabrano';
$lang['typography_o_0']        = 'ništa';
$lang['typography_o_1']        = 'isključivši jednostruke navodnike';
$lang['typography_o_2']        = 'uključivši jednostruke navodnike (ne mora uvijek raditi)';
$lang['userewrite_o_0']        = 'ništa';
$lang['userewrite_o_1']        = '.htaccess';
$lang['userewrite_o_2']        = 'DokuWiki interno';
$lang['deaccent_o_0']          = 'isključeno';
$lang['deaccent_o_1']          = 'ukloni akcente';
$lang['deaccent_o_2']          = 'romanizacija';
$lang['gdlib_o_0']             = 'GD Lib nije dostupna';
$lang['gdlib_o_1']             = 'Inačica 1.x';
$lang['gdlib_o_2']             = 'Autodetekcija';
$lang['rss_type_o_rss']        = 'RSS 0.91';
$lang['rss_type_o_rss1']       = 'RSS 1.0';
$lang['rss_type_o_rss2']       = 'RSS 2.0';
$lang['rss_type_o_atom']       = 'Atom 0.3';
$lang['rss_type_o_atom1']      = 'Atom 1.0';
$lang['rss_content_o_abstract'] = 'Sažetak';
$lang['rss_content_o_diff']    = 'Unificirani Diff';
$lang['rss_content_o_htmldiff'] = 'HTML formatirana diff tabela';
$lang['rss_content_o_html']    = 'Puni HTML sadržaj stranice';
$lang['rss_linkto_o_diff']     = 'pregled razlika';
$lang['rss_linkto_o_page']     = 'izmijenjena stranica';
$lang['rss_linkto_o_rev']      = 'lista izmjena';
$lang['rss_linkto_o_current']  = 'tekuća stranica';
$lang['compression_o_0']       = 'ništa';
$lang['compression_o_gz']      = 'gzip';
$lang['compression_o_bz2']     = 'bz2';
$lang['xsendfile_o_0']         = 'ne koristi';
$lang['xsendfile_o_1']         = 'Posebno lighttpd zaglavlje (prije inačice 1.5)';
$lang['xsendfile_o_2']         = 'Standardno X-Sendfile zaglavlje';
$lang['xsendfile_o_3']         = 'Posebno Nginx X-Accel-Redirect zaglavlje';
$lang['showuseras_o_loginname'] = 'Korisničko ime';
$lang['showuseras_o_username'] = 'Puno ime korisnika';
$lang['showuseras_o_username_link'] = 'Puno ime korisnika kao interwiki poveznica';
$lang['showuseras_o_email']    = 'Korisnikova adresa epošte (prikrivanje prema mailguard postavci)';
$lang['showuseras_o_email_link'] = 'Korisnikova adresa epošte kao mailto: poveznica';
$lang['useheading_o_0']        = 'Nikad';
$lang['useheading_o_navigation'] = 'Samo navigacija';
$lang['useheading_o_content']  = 'Samo wiki sadržaj';
$lang['useheading_o_1']        = 'Uvijek';
$lang['readdircache']          = 'Maksimalna starost za readdir međuspremnik (sek.)';