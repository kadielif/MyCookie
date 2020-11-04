-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 May 2017, 12:06:57
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tarif`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kad` varchar(20) NOT NULL,
  `parola` varchar(20) NOT NULL,
  `yetki` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kad`, `parola`, `yetki`) VALUES
(1, 'mycookie.admin', 'Elif123', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tarifler`
--

CREATE TABLE `tarifler` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8_turkish_ci NOT NULL,
  `tarif` text COLLATE utf8_turkish_ci NOT NULL,
  `malzeme` text COLLATE utf8_turkish_ci NOT NULL,
  `sure` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kisi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `derece` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(256) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `tarifler`
--

INSERT INTO `tarifler` (`id`, `adi`, `tarif`, `malzeme`, `sure`, `kisi`, `derece`, `resim`) VALUES
(2, 'Starbucks Kurabiyesi', 'Hamuru icin gerekli olan tereyagi ve yumurta sarilari derin bir kap icerisinde tel cirpici yardimi ile cirpilir.\r\nUzerine pudra sekeri, vanilya ve su ilave edilerek karistirilir.\r\nDaha sonra kabartma tozu ve tarcin ilave edilip karistirilir.\r\nElde edilen karisima azar azar un ilave edilip yogrulur ve ele yapismayan kivamli bir hamur elde edilir.\r\nSon olarak damla cikolata ve ceviz eklenip karisana kadar yogrulur.Hamur ikiye bolunup rulo yapilir.Elde edilen rulo buzluga kaldirilarak yarim saat dinlendirilir.\r\nBuzluktan alinan rulo bicak yardimi ile 2-3 cm genisliginde dilimlenir ve yagli kagit serili firin tepsisine dizilir.Pisirilir. Afiyet olsun.', '2 adet yumurta sarisi <br>\r\n150 gram oda isisinda yumusamis<br>\r\ntereyagi veya margarin<br>\r\n100 gram pudra sekeri (1 su bardagi)<br>\r\n1 corba kasigi su <br>\r\n1 paket vanilya (5 gram) <br>\r\n1/2 tatli kasigi kabartma tozu<br>\r\n1 bucuk tatli kasigi tarcin<br>\r\n300 gram un(yaklasIk 3 su bardagi<br>\r\n1 bucuk tatli kasigi tarcin<br>\r\n300 gram un(yaklasIk 3 su bardagi)<br>\r\n50 gram cikolata damlasi(1 cay bardagi)<br>\r\n100 gram kalin cekilmis ceviz', '12 dakika', '6-8 kisilik', '160 derece', 'starbucks.jpg'),
(3, 'Bayatlamayan Kurabiye', 'Hamurunu hazirlamak icin, sivi yag, pudra sekeri ve nisasta derin bir kap icerisinde guzelce karistirilir.\r\nElde edilen karisima, bardakla olculu olarak, azar azar un ilave edilip, guzelce yogrulur ve yumusak kivamli bir hamur elde edilir.\r\nSekillendirilen kurabiye, yagli kagit serili firin tepsisine dizilir.Istege gore firindan cikardiktan sonra pudra sekeri serpebilirsiniz.', '1 su bardagi sivi yag <br>\r\n1 su bardagi pudra sekeri <br>\r\n3 dolu yemek kasigi bugday nisastasi <br>\r\n2 bucuk su bardagi un <br>', '15 dakika', '8-10 kişilik', '180', 'tahin.jpg'),
(4, 'Basit Cikolata Toplari', 'Biskuvileri cok un haline getirmeden elimizle kiralim.Icine sutu, toz sekeri, tereyagini, kakaoyu ilave edelim ve karistiralim.\r\nSonra hamur yogurur gibi yoguralim.Daha sonra kucuk parcalar koparalim ve elimizle yuvarlak toplar yapalim.Cikolatali Toplari hindistan cevizine bulayip, servis yapalim.\r\nVe ya eritilmis cikolataya batirip uzerine sekerleme serpiniz.', '1 paket sade biskuvi <br>\r\nYarim paket kakaolu biskuvi <br>\r\n1 cay bardagi sut <br>\r\n1 corba kasigi terayagi (oda sicakliginda) <br>\r\n2 corba kasigi kakao <br>\r\n2 corba kasigi toz seker(istege gore arttirabilirsiniz) <br>\r\n1 kase hindistan cevizi, sekerleme,findik tozu veya eritilmis cikolata <br>\r\nKurdan', 'Pisirilmez', '8-10 kisilik', 'Pisirilmez', 'toplar.jpg'),
(5, 'Elmali Kurabiye', 'Elmalari rendeleyelim.Tavaya elmalari ve toz sekeri koyup karistirarak pisirelim.Uzerine tarcini ilave edip karistiralim ve elmalar suyunu cekene kadar pisirelim.Bir kaba un haric diger malzemeleri sirasiyla koyalim ve karistiralim.\r\nDaha sonra azar azar unu ilave edip ele yapismayan yumusak kivamli bir hamur yoguralim.Hamuru biraz dinlendirelim ve hamurdan kucuk parcalar koparalim.\r\nDuz bir zemin uzerinde yuvarlak sekilde acalim ve uzerine elmali harctan koyup yayalim.\r\n', '1 paket eritilmis margarin <br>\r\n1 cay bardagi sivi yagi <br>\r\n1 cay bardagi yogurt <br>\r\n1 adet yumurta <br>\r\n1 paket vanilya <br>\r\n1 paket kabartma tozu <br>\r\n5 su bardagi un <br>\r\nIci icin: <br>\r\n2 adet elma <br>\r\n1,5 yemek kasigi toz seker <br>\r\n1 tatli kasigi silme tarci ', '25 dakika ', '12 kisi', '180 derece', 'elmali.png'),
(6, 'Kalp Kurabiye', 'Un, seker, yumurta ve vanilyayi bir kaseye alip yogurun.Hamuru 1 saat buzdolabinda bekletin.Un serpilmis tezgahta hamuru merdane yardimiyla 1 cm kalinliginda acin ve kalp seklindeki kurabiye kalibi ile kesin.Yagli kagit serili tepsiye dizin.', '250 gr un (2 su bardagindan 2 parmak eksIk) </br>\r\nYarim su bardagi pudra sekeri </br>\r\n1 yumurta </br>\r\n125 gr tereyagi </br>\r\n1 paket vanilya </br>\r\n80 gr damla cikolata </br>', '20 dakika', '12 kisi', '180 derece', 'kalp.jpg'),
(7, 'Ayicikli Kurabiye', 'Hamur malzemelerinin hepsini karistirip yoguralim. Yogurdugumuz hamuru iki parcaya ayiralim.ayirdigimiz parcalardan birine kakao ekleyip guzelce yoguralim. Kakaolu hamurumuzu oklava ile acalim. Su bardagi ile yuvarlaklar keselim. Hamurdan cok az bir miktar ayicigin burnu icin ayirip kalan hamur bitene dek ayni islemi tekrarlayalim. Sekillendirip, pisirin. Afiyet olsun.', '1 paket oda isisinda yumusamis bitkisel margarin, teremyag ya da tereyagi (250g) <br>\r\n4 yemek kasigi sivi yag <br>\r\n1,5 su bardagi pudra sekeri <br>\r\nYarim paket kabartma tozu <br>\r\n1 paket sekerli vanilya <br>\r\n3,5 bardak un </br>\r\n3 yemek kasigi kakao <br>\r\n<li>damla cikolata <br>', '20 dakika', '12 kisi', '200 derece', 'ayi.jpg'),
(8, 'Tahinli Kurabiye', 'Bir kabin icerisine tahini, pudra sekerini ve sivi yagi koyalim ve iyice karistiralim.Findigi ekleyip yeniden guzelce karistiralim.Unu ve kabartma tozunu ilave edip tahinli kurabiye hamurunu iyice yoguralim.Hamurdan ceviz buyuklugunde parcalar koparip sekillendirelim ve yaglanmis ya da yagli kagit serilmis tepsiye dizelim.Servis tabagina alip biraz soguttuktan sonra uzerine pudra sekeri serpistirip susleyelim.', '1 su bardagi tahin <br>\r\n1 cay bardagi pudra sekeri <br>\r\n1 cay bardagi siviyag <br>\r\n4,5 su bardagi un <br>\r\n1 paket kabartma tozu\r\n3 yemek kasigi kakao <br>\r\n1 su bardagi kirilmis findik <br>\r\nUzeri icin: <br>\r\nPudra sekeri', '20 dakika', '10 kisi', '180 derece', 'tahin.jpg'),
(9, 'Susamli Kurabiye', 'Susamlari orta ateste, yagsiz bir tavada, tavayi surekli sallayarak kavuralim.  sogumasi icin bir kenara ayiralim. Bir kabin icine margarini, pudra sekerini koyalim ve karistiralim. Icine sivi yagi, susami ilave edelim ve karistiralim. Daha sonra nisastayi, unu, vanilyayi, kabartma tozunu koyalim ve kulak memesi yumusakliginda bir hamur yoguralim. Hamurdan ceviz buyuklugunde parcalar koparalim ve elimizle yuvarlayip, yagli kagit serili firin tepsisine dizelim.', '1 paket oda sicakliginda margarin(tereyagi ile denemeyin dagiliyorlar) <br>\r\n1 su pudra sekeri <br>\r\nYarim su bardagi sivi yag <br>\r\n1 su nisasta <br>\r\n1 su kavrulmus susam <br>\r\n1 cay kasigi vanilya ozutu ya da vanilya <br>\r\n1 paket kabartma tozu <br>\r\n3,5 su bardagi un <br>', '25 dakika', '10 kisi', '175 derece', 'susam.jpg'),
(10, 'Kelokslu Kurabiye', 'Bir kabin icerisine malzemeleri koyup guzelce yoguralim. Hazirladigimiz hamurun ele yapismamasi gerekiyor. Hamurdan kopardigimiz parcalari yuvarlayalim ve tepsiye dizelim.\r\nNutellayi isiya dayanikli cam bir kabin icerisine dokelim. Nutellanin uzerine 3 yemek kasigi sivi yag koyalim ve benmari usulu eritelim. Misir gevreklerini ezelim. Pisen kurabiyeleri once erittigimiz ilik nutellaya batiralim, daha sonra da misir gevreklerine bulayalim.', '250 gram oda sicakliginda margarin <br>\r\n2 adet yumurta <br>\r\n1 su bardagi pudra sekeri <br>\r\n2 kasik nisasta <br>\r\n1 paket vanilya <br>\r\n1 paket kabartma tozu <br>\r\n2,5 su bardagi misir nisastasi <br>\r\nAldigi kadar un. <br>\r\nUzeri icin: <br>\r\n400 gram nutellae <br>\r\n3 yemek kasigi sivi yag <br>\r\nMisir Gevregi <br>', '20 dakika', '10 kisi', '170 derece', 'keloks.jpg'),
(11, 'Atom Kurabiyesi', 'Hamur icin tum malzemeyi yogurup 10 dk kadar buzdolabinda dinlendiriyoruz, daha sonra mandalina buyuklugunde aldigimiz hamuru limon sIkacaginin tersine strech film koyup icli kofte gibi ortasini aciyoruz ic malzemeden koyup iyice kapatip strech yardimiyla tepsiye diziyoruz.\r\n170 derecede 20 dk kadar pisirip soguyunca pudra sekeri ile susluyoruz.', '1 paket oda isisinda yumusamis bitkisel margarin, teremyag ya da tereyagi (250g) <br>\r\n4 yemek kasigi sivi yag <br>\r\n1,5 su bardagi pudra sekeri <br>\r\nYarim paket kabartma tozu <br>\r\n1 paket sekerli vanilya <br>\r\n3,5 bardak un <br>\r\n3 yemek kasigi kakao <br>\r\ndamla cikolata', '20 dakika', '10 kisi', '170 derece', 'atom.jpg'),
(12, 'Corek Otlu Kurabiye', 'Margarin eritilip sogutulur malzemeler eklenip karistirilir un yavas yavas eklenir, yumusak bir hamur elde edilir. Hamura sekil verilir yagli kagida dizilir. Uzerine yumurta sarisi surulur. 180 derece firinda uzeri kizarana kadar pisirilir.', '125 gr margarin <br>\r\n1 cay bardagi sivi yag <br>\r\n1 yumurta aki <br>\r\n2 yemek kasigi corekotu <br>\r\n1 tatli kasigi kirmizi pul biber <br>\r\n11 yemek kasigi sirke <br>\r\n1 paket kabartma tozu <br>\r\n1 tatli kasigi tuz(silme) <br>\r\n2. 5 su bardagi un <br>\r\nUzeri icin: <br>\r\nYumurta sarisi', '25 dakika', '20 kisilik', '180 derece', 'corek.jpg'),
(13, 'Mantar Kurabiye', 'Oda isisinda yumusamis margarin, yumurta, toz seker ve vanilya derin bir kap icerisinde karistirilir.Uzerine kabartma tozu, nisasta ve azar azar un ilave edilerek guzelce yogrulur.Elde edilen hamurdan, cevizden biraz kucuk parcalar kopartilip, avuc icerisinde yuvarlanir ve yagli firin tepsisine dizilir.Kakaoya batirilmis sise agzi ile, yuvarlanan hamurlarin uzerine bastirilir ve mantar sekli verilir.Pisen kurabiyeler firindan alinir ve tepsi icerisinde soguduktan sonra, servise sunulur.', '125 gr margarin <br>\r\nYarim paket oda isisinda yumusamis margarin (125 gram) <br>\r\n1 yumurta <br>\r\n1 cay bardagi toz seker <br>\r\n1 tatli kasigi kabartma tozu <br>\r\n7 yemek kasigi nisasta <br>\r\n1 paket vanilya (5 gram) <br>\r\n1 bucuk su bardagi un (kullanilan su bardagi olcusu: 200 ml.) <br>\r\nUzeri icin: <br>\r\n1 yemek kasigi kakao', '15 dakika', '12 kisilik', '180 derece', 'mantar.jpg'),
(14, 'Kahve Cekirdegi Kurabiye', 'Bir kaba yumurtayi, tereyagini, pudra sekerini, nisastayi, kakaoyu, kahveyi koyalim ve yoguralim.Uzerine unu, kabartma tozunu, vanilyayi ilave edip, tekrar yoguralim.Hamurdan kucuk parcalar koparalim ve elimizde oval sekil verip, tepsiye dizelim.Oval sekil verdigimiz kurabiyelerin uzerine bicagin arka kismi ile derin cizikler atalim.pisirelim\r\n', '1 adet yumurta <br>\r\n125 gr tereyagi (oda isisinda) <br>\r\n1 su bardagi pudra sekeri <br>\r\nYarim su bardagi nisasta <br>\r\n2 tepeleme tatli kasigi neskafe (1 yemek kasigi sicak suda eritin) <br>\r\n2 su bardagi un <br>\r\n1 tatli kasigi kabartma tozu <br>\r\n1 tatli kasigi vanilya ', '15 dakika', '12 kisilik', '180 derece', 'kahve.jpg'),
(20, 'ay', 'a', 'a', 'a', 'a', 'a', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tarifler`
--
ALTER TABLE `tarifler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `tarifler`
--
ALTER TABLE `tarifler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
