-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2019 at 06:13 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parduotuve`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorijos`
--

CREATE TABLE `kategorijos` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorijos`
--

INSERT INTO `kategorijos` (`id`, `pavadinimas`) VALUES
(1, 'Maisto papildai'),
(2, 'Arbatos ir vaistažolės'),
(3, 'Kosmetika'),
(4, 'Gydomieji tepalai'),
(5, 'Higienos reikmenys'),
(6, 'Akcijos');

-- --------------------------------------------------------

--
-- Table structure for table `prekes`
--

CREATE TABLE `prekes` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(100) NOT NULL,
  `nuotrauka` varchar(11) NOT NULL,
  `aprasymas` text NOT NULL,
  `kaina` float NOT NULL,
  `gamintojas` varchar(50) NOT NULL,
  `salis` varchar(35) NOT NULL,
  `nuolaida` int(11) NOT NULL DEFAULT '0',
  `pozicija` int(11) NOT NULL DEFAULT '999',
  `ar_rodyti` tinyint(1) NOT NULL DEFAULT '1',
  `kiekis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prekes`
--

INSERT INTO `prekes` (`id`, `pavadinimas`, `nuotrauka`, `aprasymas`, `kaina`, `gamintojas`, `salis`, `nuolaida`, `pozicija`, `ar_rodyti`, `kiekis`) VALUES
(1, 'Maisto papildas “Bijūnų trinktūra”', '1.jpg', 'Bijūnai vartojami plačiai įvairių šalių medicinoje. Jie tinkami skrandžiui, reumatui, podagrai bei kai kurioms ginekologinėms ir nervų ligoms gydyti. Juose gausu stroncio, todėl jų preparatais gydomas skrandžio ir gimdos vėžys. \r\n\r\nAugalo preparatai pasižymi skausmą malšinančiu, antispazminiu, antitoksiniu, baktericidiniu, uždegimą slopinančiu bei raminamuoju poveikiu - didina narkozės trukmę.\r\n\r\nBijūno vaistiniai preparatai vartojami gydyti miego sutrikimus (nemigą), neurasteniją, peršalimą, vegetatyvinius kraujagyslių sutrikimus, širdies sutrikimus, skrandžio ir žarnyno ligas, podagrą, epilepsiją, skrandžio, gimdos bei kepenų auglius.\r\n\r\nVakarų Sibire bijūno trauktinė vartojama sergant paralyžiumi, ja įtrinamos paralyžiuotos galūnės.\r\n\r\nSudėtis: vaistinio bijūno žolės ir šaknų su šakniastiebiais etanolinė ištrauka. Produkte yra 30 % etanolio.\r\n\r\nVartojimas: suaugusiems ir vyresniems kaip 12 metų vaikams gerti po 30 lašų 3 kartus per dieną, prieš valgymą. 25 - 30 dienų. Kiekis - 25 ml.', 2.3, 'Ekolab', 'Rusija', 0, 999, 1, 10),
(2, 'Maisto papildas GELEŽIS+ FOLIO RŪGŠTIS B12, vitC', '2.jpg', 'Geležis – mineralas, be kurio sveikata ir gera savijauta neįmanomi. Be geležies trinka visos organizmo funkcijos.\r\n\r\n„Pagrindinė geležies funkcija – krauju išnešioti deguonį į kiekvieną organizmo ląstelę“\r\n\r\nGeležies trukumo požymiai:\r\n\r\n•Silpnumas, didelis nuovargis\r\n•Dažnai užsikrečiama infekcijomis\r\n•Išbalusi oda\r\n•Patinęs liežuvis\r\n•Neramių kojų sindromas\r\n•Noras valgyti kalkes ar panašias nemaisto medžiagas\r\n•Plaukų slinkimas\r\n\r\n1 tabletėje yra vitamino C 80mg, geležies 14mg, folio rūgšties 200qg, vit B12 2.5qg.\r\n\r\nKiekis 30 tablečių.\r\nVartojimas: po 1 per dieną', 4.3, 'Vitar', 'Čekija', 0, 999, 1, 10),
(3, 'Maisto papildas “MILONA-8”', '7.jpg', 'Maisto papildas “MILONA-8” (apsauga nuo streso ir garantuotas ramus miegas). Maisto papildo sudėtyje esantys vaistiniai augalai (sukatžolė, valerijonas, melisa, pipirmėtė, apynys, raudonėlis) veikia raminančiai, mažina stresą, reguliuoja miegą, gerina bendrą organizmo būseną. Sudėtis: 2 tabletėse yra paprastoji sukatžolė - 200 mg, paprastųjų apynių spurgų - 100 mg, vaistinių valerijonų šaknų su šakniastiebiais - 100 mg, paprastųjų raudonėlių - 100mg, vaistinių melisų - 100mg. Vartojimo būdas: suaugusiesiems ir vyresniems kaip 14 metų vaikams gerti po 1 tabletę 2 k. per dieną antroje dienos pusėje. Vartojimo trukmė – 20 dienų. Neviršyti nustatytos rekomenduojamos dozės. Kiekis - 100 tablečių.', 6.5, 'Evalar', 'Rusija', 0, 500, 1, 2),
(7, 'Ginko-glicin forte', '3.jpg', 'Ginkmedis ir glicinas gerai atminčiai ir stipriems nervams.', 5, 'Fortex', 'Rusija', 0, 999, 1, 8),
(8, 'Milona-1', '4.jpg', 'Maisto papildas skirtas sausam ir šlapiam kosuliui gydyti. Užsisenėjusiam kosuliui taip pat. ', 6.3, 'Evalar', 'Ukraina', 0, 999, 1, 5),
(9, 'Vėsinantis kojų dezodorantas', '5.jpg', 'Dezodorantas turi prieš grybelinį poveikį, pašalina nemalonų kvapą, ramina ir tonizuoja. Pantenolis ir mentolis vėsina ir nuima nuovargį, triklozanas ir arbatmedžio aliejus slopina geybelių atsiradimą ir naikina nemalonų kvapą.\r\nTinka kasdieniniam naudojimui.\r\nNaudojimo būdas: purkšti ant švarių ir sausų pėdų. Kiekis - 150 ml.', 2.4, 'Zelionaja apteka', 'Rusija', 0, 999, 1, 10),
(10, 'Maisto papildas “Essencikaps”', '6.jpg', 'Tai efektyviai riebalų perteklių tirpdanti medžiaga, kuri kartu padeda išvengti ir rimtų ligų. \r\n\r\nLecitinas kepenyse skaido ir šalina blogąjį cholesterolį ir didina gerojo kiekį, taip padėdamas išvengti insulto, infarkto. \r\n\r\nMokslininkų nustatyta, kad lecitinas padeda įveikti riebalų perteklių – mažina ne tik cholesterolio kiekį kraujyje, bet ir viso organizmo nutukimą.\r\n\r\n1 tabletėje yra 300 mg sojos lecitino fosfolipidų.\r\n\r\nVartojimas: suaugusiems gerti po 2 kapsules 2-3 kartus per dieną, užgeriant nedideliu kiekiu vandens. Kiekis - 50 kapsulių.', 8.5, 'Emic', 'Latvija', 0, 999, 1, 5),
(11, 'Maisto papildas “Valerijonas forte”', '8.jpg', 'Valerijonas pasižymi daugialypiu poveikiu organizmui: \r\n• Slopina centrinę nervų sistemą;\r\n• Mažina lygiųjų raumenų spazmus;\r\n• Reguliuoja širdies veiklą;\r\n• Gerina virškinimo trakto veiklą;\r\n• Malšina skrandžio skausmus.\r\n\r\nTinka naudoti suaugusiems, ir nuo 18 metų asmenims.\r\n\r\nTačiau atminkite, kad visos valerijonų gydomosios savybės pasireiškia esant ilgalaikiam ir sistemingam jo vartojimui (ne trumpiau nei 1 mėnesį).\r\n\r\nSudėtis: trijose tabletėse yra 600 mg valerijono šakniasbiebių su šaknimis.\r\n\r\nVartojimas: po 1 tabletę 3 kartus per dieną valgio metu, užgeriant pakankamu kiekiu skysčio. Kiekis - 50 tablečių.', 4.3, 'Paira', 'Bulgarija', 0, 999, 1, 10),
(12, 'Maisto papildas “RelakSon”', '9.jpg', 'Raudonžiedės pasifloros poveikis sveikatai:\r\n• Raminamasis;\r\n• Nerimą slopinantis;\r\n• Padedantis užmigti;\r\n• Skausmą mažinantis;\r\n• Antiepilepsinis poveikis.\r\n\r\nAtlikta daug mokslinių ikiklinikinių pasifloros ekstrakto tyrimų. Įvairiais tyrimo modeliais su laboratoriniais gyvūnėliais nustatyta, kad pasifloros lapų ir stiebų ekstraktas pasižymi:\r\n• Anksiolitiniu, t. y. nerimą slopinančiu veikimu;\r\n• Slopina vaisto pentilenetetrazolio sukeltus traukulių priepuolius. Manoma, jog minėtą poveikį sukelia flavonoidai, kurie sąveikauja su benzodiazepinų receptoriais;\r\n• Pailgina barbitūratų (centrinės nervų sistemos antidepresantų klasės preparatai) sukeltos miego fazės trukmę;\r\n• Stiprina kitų antidepresinių ir raminamųjų preparatų poveikį, tarp jų – ir jonažolės bei valerijono preparatų;\r\n• Vartojama kosuliui, bronchinei astmai, nudegimams ir uždegimams gydyti.\r\n\r\n1 kapsulėje: 125 mg raudonžiedžių pasiflorų ekstrakto, 80 mg magnio, 5 mg vitamino B6.\r\n\r\nVartojimas: suaugusiems ir vaikams nuo 12 metų gerti po 1 kapsulę per dieną valgio metu, užgeriant nedideliu kiekiu vandens. Kiekis - 30 kapsulių.\r\n\r\n1 tabletėje yra 300 mg sojos lecitino fosfolipidų.\r\n\r\nVartojimas: suaugusiems gerti po 2 kapsules 2-3 kartus per dieną, užgeriant nedideliu kiekiu vandens. Kiekis - 50 kapsulių.', 5.3, 'Fortex', 'Rusija', 0, 999, 1, 5),
(13, 'Maisto papildas “Meškauogės ekstraktas”', '10.jpg', 'Lapuose yra 6-14 % arbutino, metilarbutino, 30-35 % raugų, flavonoidų, fenolkarbonių rūgščių, vitamino C, iki 1 % eterinio aliejaus, mineralinių medžiagų. \r\n\r\n• Fenolinis junginys arbutinas pasižymi antiseptiniu poveikiu. Jis skyla į gliukozę ir hidrochinoną. Pastarasis veikia šlapimo pūslę ir šlapimtakius, naikina bakterijas, pasižymi šlapimo išsiskyrimą skatinančiu poveikiu;\r\n• Slopina uždegiminius sutrikimus šlapimo takų sistemoje;\r\n• Meškauogė stabdo inkstų ir šlapimo pūslės akmenų formavimąsi ir skaldo jau susidariusius.\r\n\r\nDraudžiama vartoti:\r\n\r\n• Nėštumo ir žindymo laikotarpiu; \r\n• Negalima kartu vartoti šlapimo rūgštingumą keliančių vaistų; \r\n• Ilgiau kaip 10 dienų; \r\n• Vaikams, jaunesniems nei 12 metų; \r\n• Sergant skrandžio ir dvylikapirštės žarnos opalige, piktybiniais navikais. \r\n\r\nVartojimas: gerti po 2 tabletes 3 kartus per dieną po valgio. Kiekis - 30 tablečių.\r\n', 3, 'Tulos farmacijos fabrikas', 'Rusija', 0, 999, 1, 10),
(14, 'Maisto papildas “Spanguolės ekstraktas”', '11.jpg', 'Svarbiausia – tai uoga nuo avitaminozės. Spanguolės turi daug vitaminų ir mineralinių medžiagų, pastarųjų aptinkama net 25. Yra daug kalio, fosforo, geležies. Tiems, kas turi vadinamąjį „blogą“ kraują, spanguolės tikrai tinkama uoga. Taip pat šios uogos turi tonizuojančių savybių. Spanguolių sulčių PH yra labai mažas, jos rūgščios, todėl pasižymi antimikrobiniu poveikiu. Tokioje terpėje patogeniniai mikroorganizmai gali vystytis labai menkai. Spanguolės turi antiseptinių, priešuždegiminių savybių, gali prisidėti prie kai kurių susirgimų, susijusių su šlapimo pūsle, tulžimi ir pan., gydymo. Paprastoji rykštenė palaiko normalią šlapimo takų funkciją. 1 kapsulėje yra: 400 mg stambiauigių spanguolių ekstrakto, 20 mg paprastųjų rykštenių ekstrakto. Vartojimas: rekomenduojama vartoti po 1 kapsulę per dieną, rytais, užgeriant pakankamu kiekiu vandens. Kiekis - 70 kapsulių. ', 8, 'JuvaFarma', 'Bulgarija', 0, 999, 1, 5),
(15, 'Anticeliulitinis fito kompleksas “Celiusia”', '12.jpg', 'Naudojimo būdas: atidaryti ampulę, užtepti ant reikiamos kūno vietos, masažuojančiais judesiais įtrinti. Rekomenduojama naudoti 1-2 kartus dienoje. \r\n10 ampulių po 10 ml.', 12.5, 'xxx', 'Rusija', 0, 888, 1, 10),
(16, 'L-Karnitinas + Chromas + Inozitolis', '13.jpg', '• L-Karnitinas - geriausiai žinomas dėl savybės padėti deginti riebalus, tačiau egzistuoja ir kitos teigiamos L-Karnitino savybės.\r\n• Remiantis įvairiais moksliniais tyrimais, L-Karnitinas efektyviai ir saugiai vartojamas sveikatos, smegenų funkcijos bei ligų prevencijos tikslais. \r\n• L-Karnitino maisto papildai ypač tinkami vyresnio amžiaus ir mėsos bei žuvies nevalgantiems žmonėms.\r\n\r\nSudeginti riebalus bei atitinkamai numesti svorio tampa milijonų žmonių iššūkiu. Visgi, būtina suprasti, jog riebalų deginimas – tai ilgalaikis procesas arba tiesiog gyvenimo būdas. Riebalų deginimas – tai greitesnė medžiagų apykaita, tinkama mityba, reguliarus fizinis krūvis ir dar daug kitų faktorių viename. L-Karnitinas, šiuo atveju, tik pagalbininkas. Kiekis - 500 ml.\r\n\r\n20 ml skysčio yra: 660 mg L-karnitino, 200 mg inozitolio, 205 qg chromo.\r\n\r\nVartojimas: suaugusiems rekomenduojama vartoti po 20 ml skysčio 1 kartą per dieną. Geriausia vartoti ryte. Galima vartoti nuo 4 iki 6 savaičių.', 11.03, 'Virde', 'Ukraina', 0, 999, 1, 1),
(17, 'Veido kremas 45+ (maitinimas + raukšlių lyginimas)', '14.jpg', 'Sudėtyje esantis natūralus kokteilis iš 6 natūralių aliejų turi maitinančių medžiagų, kurie reikalingi odai, atnaujina regeneracijos procesus ir turi akivaizdų jauninimo efektą.\r\n\r\nArganų aliejus giliai drėkina odą, skatina kraujo apytaką, lėtina odos senėjimo procesus ir neleidžia atsirasti raukšlėms.\r\n\r\nTaukmedžių aliejus skatina kolageno sintezę, ląstelių regeneraciją, apsaugo odą nuo senėjimo, patempia veido ovalą.\r\n\r\nAvokadų ir simondsijų aliejai lengvai prasiskverbia pro lipidinį odos sluoksnį, stiprina jį iš vidaus ir transportuoja vitaminus ir mikroelementus į gilius epidermio sluoksnius, suteikia odai tonusą ir drėkinimą, oda atrodo pailsėjusi ir žvilganti. \r\n\r\nKokosų aliejus suteikia odai švelnumą ir minkštumą, grąžina komforto jausmą.\r\n\r\nMakadamijų aliejus prisotina odą maitinančiomis medžiagomis, drėkina odą, pašalina nuovargio, pleiskanojimo ir dirginimo pėdsakus. Oda tampa šilkinė ir lygi.\r\n\r\nHydrovance kompleksas atnaujina natūralų odos drėkinimo lygį.\r\n\r\nVit E apsaugo nuo laisvųjų radikalų, sustiprina apsauginius ir regeneruojančius odos mechanizmus.\r\n\r\nNaudojimo būdas: lengvais judesiais pagal masažo linijas užtepkite ant švarios veido odos. Kiekis - 48 g.', 3, 'BelKosmex', 'Baltarusija', 0, 1, 1, 5),
(18, 'Kvepiantis masažinis aliejus', '15.jpg', 'Masažinis aliejus sukurtas iš naturalių augalinių komponentų, kurie nesukelia alerginės reakcijos. \r\nAliejaus sudėtyje yra medetka ir ramunėlė, o tai pat natūralus antioksidantas - vitaminas E. Aliejus turi raminančių savybių nervinei sistemai. Taip pat sudėtyje esantys gydomieji augalai turi priešuždegiminių savybių, sustiprina imuninę sistemą. \r\n\r\nMedetkos sudėtyje yra karotinoidų ir saponinų, kurie turi rageneruojančių savybių. \r\n\r\nRamunėlės sudėtyje yra chamazuleno (natūralus antiseptikas antialergenas)- atpalaiduoja raumenis. \r\n\r\nVitaminas E - natūralus antioksidantas, apsaugo odą nuo senėjimo. \r\n\r\nNaudojimo būdas: nedidelį aliejaus kiekį masažuojamais judesiais užtepkite ant odos. Galima naudoti kaip kūno priežiūros priemonę po vonios ir dušo procedurų. Kiekis - 150 ml.', 3.4, 'Mirrolla', 'Rusija', 0, 999, 1, 10),
(22, 'Maisto papildas “Revit”', '20.jpg', 'Tai vitaminų A, B1, B2 ir C turintis preparatas. Vitaminai A ir C padeda palaikyti normalią imuninės sistemos veiklą, vitaminas B1 (tiaminas) padeda palaikyti normalią širdies veiklą, vitaminas B2 (riboflavinas) padeda išsaugoti normalų regėjimą. Svarbu įvairi ir subalansuota mityba bei sveikas gyvenimo būdas.\r\n\r\nVartojimas: gerti po 1 dražetę 1 kartą per dieną po valgio.\r\n\r\n1 dražetėje yra: vitamini C - 35 mg, vitamino A - 1380 qg, vitamino B1 - 1 mg, vitamino B2 - 1 mg. Kiekis - 100 dražečių.', 1.5, '“Marbiofarm”', 'Rusija', 0, 999, 1, 6),
(23, 'Maisto papildas - vitaminas E.', '19.jpg', 'Tai yra viena veiksmingiausių molekulių, turinčių antioksidacinių ir priešuždegiminių savybių: greitai nuramina išjautrėjusią odą, mažina sudirgimus ir paraudimus, kovoja prieš laisvųjų radikalų susidarymą. Natūraliai esantis mūsų kūne, šis galingas antioksidantas apsaugo ląstelės struktūrą, užkertant kelią priešlaikiniam senėjimui. Vitaminas E kovoja su laisvaisiais radikalais, kurie tampa fotosenėjimo ir odos uždegimų priežastimi.\r\n1 kapsulėje yra 350 mg vitamino E.\r\nVartojimo būdas: suaugusiems gerti po 1 kapsulę 1 kartą per dieną valgio metu. Vartojimo trukmė - 1 mėn. Kiekis - 60 kapsulių.', 3.9, 'Farmgrup', 'Rusija', 0, 999, 1, 3),
(24, 'Maisto papildas “Undevit”', '21.jpg', 'Undevit - multivitaminų kompleksas normalizuoti medžiagų apykaitą ir išvengti pirmalaikio senėjimo. \r\nVartojimas: rekomenduojama gerti po 1 dražetę per parą po valgymo.\r\n1 dražetėje yra: vitamino C - 75 mg, niacino - 20 mg, vitamino E - 10 mg a-Te, rutino - 10 mg, vitamino B6 - 3 mg, pantoteno r. - 3 mg, vitamino B1 - 2 mg, vitamino B2 - 2 mg, vitamino A - 1817 qg RE, folio rūgštis - 70 qg, vitamino B 12 - 2 qg. Kiekis - 50 dražečių.', 1.8, '“Marbiofarm”', 'Rusija', 0, 500, 1, 15),
(25, 'Maisto papildas “Grožio kapsulės”', '22.jpg', 'Vitaminai ir mikroelementai gali būti gaunami dviem būdais – geriami arba praturtintą kosmetikos priemonę tepantis tiesiogiai ant odos, plaukų ar nagų. Abu būdai yra svarbūs ir veiksmingi mūsų grožiui.\r\n\r\n• A grupė – odai atsinaujinti;\r\n• Vitaminas B2 – sveikai odos būklei;\r\n• Vitaminas B3 – pigmentinėms dėmelėms mažinti, dar vadinamas nikotino rūgštimi, niacinu, nikotinamidu ar vitaminu PP.\r\n• Vitaminas B7 – stipriems plaukams, dar vadinamas biotinu, vitaminu H, kofermentu R;\r\n• Vitaminas D – uždegimams malšinti;\r\n• Vitaminas E – odai drėkinti, raukšlelėms mažinti.\r\n\r\nDaugelis gydytojų rekomenduoja nakvišų aliejų moterims, kenčiančioms nuo mastopatijos, susijusios su menstruaciniu ciklu.\r\n\r\nNakvišų aliejus labai dažnai yra pirmo pasirinkimo gydymo priemonė, padedanti 40-60 proc. moterų.\r\n\r\nNaudingos vynuogių sėklų aliejaus savybės:\r\n\r\n• Baktericidinis;\r\n• Antivirusinis;\r\n• Imunomoduliuoti;\r\n• Žaizdų gijimas;\r\n• Rišikliai;\r\n• Priešuždegiminis.\r\nSudėtis: nakvišų aliejus - 240 mg, vynuogių sėklų aliejus - 80 mg, niacino - 18 mg, vitamino E - 16 mg, cinko - 16mg, pantoteno rūgšties - 6 mg, vitamino B2 - 1,6 mg, vitamino B1 - 1.4 mg, vitamino B6 - 1.4 mg, vitamino A - 850 uq, biotino - 150 uq, vitamino D - 5 uq, vitamino B12 - 3.6 uq.\r\nRekomenduojama vartoti po 1 kapsulę 2 kartus per dieną, užgeriant pakankamu kiekiu vandens. Kiekis - 60 minkštų kapsulių.\r\n', 8, 'Juvapharma Kft', 'Vengrija', 0, 999, 0, 5),
(27, 'KANAPIŲ TEPALAS su kanapių sėklų aliejumi', '23.jpg', 'Itin efektyvus kremas su kanapių sėklų aliejumi iš natūralių ekstraktų.\r\nKanapių aliejus yra hipoalerginė priemonė tradiciškai naudojama atopinės odos ir žvynelinės(psoriazės)pažeistos odos priežiūrai. \r\nSubalansuoja sausą odą, nuramina uždegiminius procesus, harmonizuoja drėgmės balansą, minkština, stiprina odą, gerina jos medžiagų apykaitą.\r\nDėl sudėtyje esančių polinesočiųjų riebalų rūgščių(linolo,alfa-linolo,gama-linolo) ypač tinka sausai ir pažeistai odai.\r\nNaudojimo būdas: nedidelį kiekį masažuojančiais judesiais įtrinti į odą 1-2 kartus dienoje. \r\n', 4.7, 'Virde', 'Bulgarija', 0, 999, 0, 8),
(28, 'Žolelių arbata “TIBETO”', '24.jpg', 'Liaudies medicinoje Tibeto arbata naudojama kaip valanti organizmą, gerinanti bendrą savijautą ir miegą, kepenų darbą. Gripo metu Tibeto arbata padės kovoti su infekcijomis ir stiprins imunitetą. \r\n\r\nSudedamosios dalys: ženšenio šaknis, vaistinės ramunės žiedai, jonažolė, paprastosios avietės lapai, storalapės bergenijos šaknys, smėlio šlamučio žiedai. Kiekis - 50 g.\r\n\r\nParuošimas: 1 arbatinį šaukštelį užpilti 150-200 ml verdančiu vandeniu, išlaikyti 8 min.\r\n', 2.1, 'OOO”Tiavit”', 'Rusija', 0, 999, 1, 4),
(29, 'Maisto papildas Ženšenis Pantokrinas Bičių pienelis', '25.jpg', 'Ženšenis palaiko fizinę / protinę veiklą, lytinę funkciją, ištvermę ir energingumą, normalią imuninės sistemos veiklą. Pantokrinas stabdo senėjimo procesą, palengvina ląstelių atsinaujinimą. Padeda sunkių darbų, ligų ir operacijų nuvargintiems, į depresiją linkusiems žmonėms. Bičių pienelis turi imunostimuliuojantį, antibakterinį, antivirusinį, antialerginį, antinavikinį, antidepresinį, uždegimą ir nuovargį, grybelį slopinantį poveikį.', 7.6, 'xxx', 'Rusija', 0, 999, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `preke_kat_tarp`
--

CREATE TABLE `preke_kat_tarp` (
  `id` int(11) NOT NULL,
  `prekes_id` int(11) NOT NULL,
  `kat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `preke_kat_tarp`
--

INSERT INTO `preke_kat_tarp` (`id`, `prekes_id`, `kat_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 7, 1),
(5, 8, 1),
(6, 9, 3),
(7, 10, 1),
(8, 11, 1),
(9, 12, 1),
(10, 13, 1),
(11, 14, 1),
(12, 15, 5),
(13, 16, 1),
(14, 17, 3),
(15, 18, 3),
(16, 19, 1),
(17, 20, 1),
(18, 23, 1),
(19, 22, 1),
(20, 27, 3),
(21, 27, 4),
(22, 15, 3),
(23, 15, 4),
(24, 28, 2),
(25, 29, 1),
(26, 9, 5),
(27, 18, 5);

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymas`
--

CREATE TABLE `uzsakymas` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `uzsak_name` varchar(60) NOT NULL,
  `uzsak_adress` varchar(200) NOT NULL,
  `ar_apmoketa` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `uzsakymo_duomenys`
--

CREATE TABLE `uzsakymo_duomenys` (
  `id` int(11) NOT NULL,
  `uzsakymo_id` int(11) NOT NULL,
  `prekes_id` int(11) NOT NULL,
  `kiekis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uzsakymo_duomenys`
--

INSERT INTO `uzsakymo_duomenys` (`id`, `uzsakymo_id`, `prekes_id`, `kiekis`) VALUES
(1, 1, 29, 1),
(2, 1, 23, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorijos`
--
ALTER TABLE `kategorijos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prekes`
--
ALTER TABLE `prekes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preke_kat_tarp`
--
ALTER TABLE `preke_kat_tarp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzsakymo_duomenys`
--
ALTER TABLE `uzsakymo_duomenys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorijos`
--
ALTER TABLE `kategorijos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `prekes`
--
ALTER TABLE `prekes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `preke_kat_tarp`
--
ALTER TABLE `preke_kat_tarp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `uzsakymo_duomenys`
--
ALTER TABLE `uzsakymo_duomenys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
