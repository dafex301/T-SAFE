<?php

namespace Database\Seeders;

use App\Models\Aset;
use Illuminate\Database\Seeder;

class AsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assets = [
            [
                "nomor" => "101000000192",
                "nama" => "TANAH RUDIN  PERUM GRAHA PADMA NO.HGB :363",
                "tanggal" => "2013-07-29",
            ],
            [
                "nomor" => "101000000277",
                "nama" => "TANAH GEDUNG KANTOR [AIP]",
                "tanggal" => "2021-07-01",
            ],
            [
                "nomor" => "101000000278",
                "nama" => "TANAH RUMAH DINAS [AIP]",
                "tanggal" => "2021-07-01",
            ],
            [
                "nomor" => "201000000343",
                "nama" => "RUMAH DINAS PERUM GRAHA PADMA HGB NO.363",
                "tanggal" => "2013-07-29",
            ],
            [
                "nomor" => "201000000561",
                "nama" => "GEDUNG KANTOR HGB NO.00590 [AIP]",
                "tanggal" => "2021-07-01",
            ],
            [
                "nomor" => "201000000562",
                "nama" => "RUMAH DINAS GISIK SARI HGB NO.00116 [AIP]",
                "tanggal" => "2021-07-01",
            ],
            [
                "nomor" => "301000000739",
                "nama" => "TOYOTA RUSH LUXURY A/T S 1500 CC H 9285 WR",
                "tanggal" => "2013-04-08",
            ],
            [
                "nomor" => "301000000813",
                "nama" => "MOBIL LAYANAN TASPEN (MOTAS) TDK MENGGUNAKAN VSAT",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "301000001021",
                "nama" => "TOYOTA INNOVA TYPE V LUXURY AUTOMATIC GASOLINE",
                "tanggal" => "2015-10-20",
            ],
            [
                "nomor" => "301000001127",
                "nama" => "INNOVA TYPE G  AUTOMATIC GASOLINE WARNA HITAM",
                "tanggal" => "2016-10-07",
            ],
            [
                "nomor" => "301000001200",
                "nama" => "SEPEDA MOTOR HONDA SUPRA X 125 FI (CW) New HITAM",
                "tanggal" => "2017-05-16",
            ],
            [
                "nomor" => "301000001275",
                "nama" => "TOYOTA COROLLA ALTIS",
                "tanggal" => "2018-04-16",
            ],
            [
                "nomor" => "301000001310",
                "nama" => "HONDA SUPRA X 125 CC",
                "tanggal" => "2019-02-14",
            ],
            [
                "nomor" => "301000001313",
                "nama" => "HONDA CRV 1.5 TURBO CVT",
                "tanggal" => "2019-02-26",
            ],
            [
                "nomor" => "301000001321",
                "nama" => "TOYOTA AVANZA VELOZ 1.5 A/T",
                "tanggal" => "2019-02-22",
            ],
            [
                "nomor" => "301000001322",
                "nama" => "TOYOTA INNOVA 2.0",
                "tanggal" => "2019-02-22",
            ],
            [
                "nomor" => "301000001412",
                "nama" => "TOYOTA AVANZA VELOZ 1.5 A/T",
                "tanggal" => "2020-03-06",
            ],
            [
                "nomor" => "401000000851",
                "nama" => "PC SERVER DELL",
                "tanggal" => "2013-08-28",
            ],
            [
                "nomor" => "401000001417",
                "nama" => "UPS REMINGTONS SPHINX CUBE+ SERIES",
                "tanggal" => "2016-06-21",
            ],
            [
                "nomor" => "401000004385",
                "nama" => "SWITCH HUB CISCO 2960 24 PORT",
                "tanggal" => "2009-11-26",
            ],
            [
                "nomor" => "401000004386",
                "nama" => "HUB ( CISCO CATALIST )",
                "tanggal" => "2012-11-12",
            ],
            [
                "nomor" => "401000004387",
                "nama" => "CORE SWITCH  -24 PORT",
                "tanggal" => "2012-02-13",
            ],
            [
                "nomor" => "401000004388",
                "nama" => "SWITCH DISTRIBUTION (C2960_48 PORT + 2 PORT GIGABI",
                "tanggal" => "2012-02-13",
            ],
            [
                "nomor" => "401000004389",
                "nama" => "SMART UPS APC SUA 1500I (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "401000004390",
                "nama" => "HUB/SWITCH 16 PORT (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "401000006368",
                "nama" => "PERANGKAT SD-WAN FORTIGATE",
                "tanggal" => "2022-09-19",
            ],
            [
                "nomor" => "401000006398",
                "nama" => "PERANGKAT SWITCH MANAGED BACKUP",
                "tanggal" => "2022-09-20",
            ],
            [
                "nomor" => "401000006399",
                "nama" => "PERANGKAT SWITCH MANAGED BACKUP",
                "tanggal" => "2022-09-20",
            ],
            [
                "nomor" => "402000004202",
                "nama" => "Pc Hp Pavilion A66301+Lcd+Key b.",
                "tanggal" => "2009-03-31",
            ],
            [
                "nomor" => "402000004203",
                "nama" => "Pc hp pavillion a66301+Lcd+Key b.",
                "tanggal" => "2009-03-31",
            ],
            [
                "nomor" => "402000004204",
                "nama" => "Pc Hp Pavilion A66301+Lcd+Key b.",
                "tanggal" => "2009-03-31",
            ],
            [
                "nomor" => "402000004206",
                "nama" => "Pc hp pavillion a66301+Lcd+Key b.",
                "tanggal" => "2009-03-31",
            ],
            [
                "nomor" => "402000004207",
                "nama" => "Pc hp pavillion a66301+Lcd+Key b.",
                "tanggal" => "2009-03-31",
            ],
            [
                "nomor" => "402000004208",
                "nama" => "PC HP PAVILLION a66301+ Key B.",
                "tanggal" => "2009-03-31",
            ],
            [
                "nomor" => "402000004209",
                "nama" => "Pc Hp a66301 + Lcd + Key board",
                "tanggal" => "2009-03-31",
            ],
            [
                "nomor" => "402000006868",
                "nama" => "PRINTER PRINTRONIX P7215",
                "tanggal" => "2009-11-06",
            ],
            [
                "nomor" => "402000006958",
                "nama" => "LCD MONITOR SAMSUNG 18,5",
                "tanggal" => "2009-11-13",
            ],
            [
                "nomor" => "402000007493",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007494",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007495",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007496",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007497",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007498",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007499",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007500",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007501",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007502",
                "nama" => "Pc Acer M480 + Lcd + Key board",
                "tanggal" => "2010-06-04",
            ],
            [
                "nomor" => "402000007709",
                "nama" => "PRINTER COLOUR LASER FUJI XEROX C1110B",
                "tanggal" => "2010-06-22",
            ],
            [
                "nomor" => "402000007930",
                "nama" => "NOTE BOOK DELL VOSTRO 3300",
                "tanggal" => "2010-09-29",
            ],
            [
                "nomor" => "402000007932",
                "nama" => "NOTE BOOK TOSHIBA SATELLITE L635-1015X",
                "tanggal" => "2010-09-29",
            ],
            [
                "nomor" => "402000008039",
                "nama" => "LCD MONITOR 23 ACER TYPE G235H",
                "tanggal" => "2010-10-29",
            ],
            [
                "nomor" => "402000008040",
                "nama" => "LCD MONITOR 18.5 ACER TYPE G193HQ",
                "tanggal" => "2010-10-29",
            ],
            [
                "nomor" => "402000008041",
                "nama" => "LCD MONITOR 18.5 ACER TYPE G193HQ",
                "tanggal" => "2010-10-29",
            ],
            [
                "nomor" => "402000008042",
                "nama" => "LCD MONITOR 18.5 ACER TYPE G193HQ",
                "tanggal" => "2010-10-29",
            ],
            [
                "nomor" => "402000008772",
                "nama" => "Pc Acer M3970 + Lcd Acer + Key b. Acer",
                "tanggal" => "2011-10-20",
            ],
            [
                "nomor" => "402000008800",
                "nama" => "NOTEBOOK TOSHIBA PORTEGE M800-A361",
                "tanggal" => "2008-09-15",
            ],
            [
                "nomor" => "402000009137",
                "nama" => "Pc Lenovo Edge91-E4a + Lcd + Key board",
                "tanggal" => "2012-04-11",
            ],
            [
                "nomor" => "402000009138",
                "nama" => "Pc Lenovo Edge91-E4a + Lcd + Key board",
                "tanggal" => "2012-04-11",
            ],
            [
                "nomor" => "402000009139",
                "nama" => "Pc Lenovo Edge91-E4a + Lcd + Key board",
                "tanggal" => "2012-04-11",
            ],
            [
                "nomor" => "402000009140",
                "nama" => "Pc Lenovo Edge91-E4a + Lcd + Key board",
                "tanggal" => "2012-04-11",
            ],
            [
                "nomor" => "402000009141",
                "nama" => "PRINTER  EPSON LQ 2190",
                "tanggal" => "2012-04-11",
            ],
            [
                "nomor" => "402000009142",
                "nama" => "PRINTER  EPSON LQ 2190",
                "tanggal" => "2012-04-11",
            ],
            [
                "nomor" => "402000009143",
                "nama" => "PRINTER  EPSON LQ 2190",
                "tanggal" => "2012-04-11",
            ],
            [
                "nomor" => "402000009418",
                "nama" => "PRINTER HP LASER JET M 401 N",
                "tanggal" => "2012-08-07",
            ],
            [
                "nomor" => "402000009419",
                "nama" => "PRINTER HP LASER JET M 401 N",
                "tanggal" => "2012-08-07",
            ],
            [
                "nomor" => "402000009493",
                "nama" => "HP THIN CLIENT T5740",
                "tanggal" => "2012-10-16",
            ],
            [
                "nomor" => "402000009494",
                "nama" => "HP THIN CLIENT T5740",
                "tanggal" => "2012-10-16",
            ],
            [
                "nomor" => "402000009496",
                "nama" => "Thien Client Hp + Lcd + Key Board",
                "tanggal" => "2012-10-16",
            ],
            [
                "nomor" => "402000009497",
                "nama" => "Thin Client Hp + Lcd + Key Board",
                "tanggal" => "2012-10-16",
            ],
            [
                "nomor" => "402000009498",
                "nama" => "HP THIN CLIENT T5740",
                "tanggal" => "2012-10-16",
            ],
            [
                "nomor" => "402000009499",
                "nama" => "HP THIN CLIENT T5740",
                "tanggal" => "2012-10-16",
            ],
            [
                "nomor" => "402000010920",
                "nama" => "Printer Dotmetric Merk Epson",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010921",
                "nama" => "Printer Dotmetric Merk Epson",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010922",
                "nama" => "Printer Dotmetric Merk Epson lq 2190",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010923",
                "nama" => "Printer Inkjet Merk Epson Type L210",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010924",
                "nama" => "Printer Inkjet Merk Epson Type L210",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010926",
                "nama" => "Printer Inkjet Merk Epson Type L210",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010927",
                "nama" => "Printer Inkjet Merk Epson Type L210",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010928",
                "nama" => "Printer Inkjet Merk Epson Type L210",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010929",
                "nama" => "Printer Laserjet P255DW Merk FujiXeroc",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010930",
                "nama" => "Printer Laserjet Merk Fuji  Xeroc P255Dw",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010931",
                "nama" => "Printer Laserjet Merk Fuji  Xeroc P255Dw",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010932",
                "nama" => "Printer Laserjet Merk Fuji  Xeroc P255Dw",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010933",
                "nama" => "Komputer Desktop/CPU Merk Asus",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000010934",
                "nama" => "Komputer Desktop/CPU Merk Asus",
                "tanggal" => "2014-06-16",
            ],
            [
                "nomor" => "402000011091",
                "nama" => "PC SLIM HP ENVY 700-200d (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "402000011092",
                "nama" => "PC SLIM HP ENVY 700-200d (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "402000011093",
                "nama" => "PRINTER MULTI FUNCTION (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "402000011094",
                "nama" => "PRINTER DOT MATRIX (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "402000012762",
                "nama" => "NOTE BOOK MERK ASUS",
                "tanggal" => "2015-10-15",
            ],
            [
                "nomor" => "402000012765",
                "nama" => "NOTE BOOK MERK ASUS",
                "tanggal" => "2015-10-15",
            ],
            [
                "nomor" => "402000012766",
                "nama" => "NOTE BOOK MERK ASUS",
                "tanggal" => "2015-10-15",
            ],
            [
                "nomor" => "402000014236",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014237",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014238",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014239",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014240",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014241",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014242",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014243",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014244",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014245",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014246",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014247",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014248",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014249",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014250",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014251",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014252",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014253",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014254",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014255",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014256",
                "nama" => "PERSONAL COMPUTER (PC) MINI DESKTOP",
                "tanggal" => "2015-10-09",
            ],
            [
                "nomor" => "402000014258",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014259",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014260",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014261",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014262",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014263",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014264",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014271",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014272",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014273",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014274",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014275",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014276",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014277",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014278",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014279",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014280",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014281",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014282",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014283",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014284",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014285",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014286",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014287",
                "nama" => "PERSONAL COMPUTER (PC) DESKTOP",
                "tanggal" => "2014-12-24",
            ],
            [
                "nomor" => "402000014522",
                "nama" => "NOTE BOOK HEWLETT PACKARD (HP)",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014523",
                "nama" => "NOTE BOOK HEWLETT PACKARD (HP)",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014524",
                "nama" => "NOTE BOOK HEWLETT PACKARD (HP)",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014525",
                "nama" => "NOTE BOOK HEWLETT PACKARD (HP)",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014526",
                "nama" => "NOTE BOOK HEWLETT PACKARD (HP)",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014527",
                "nama" => "PRINTER LASERJET MONOKROM MULTIFUNGSI",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014528",
                "nama" => "PRINTER LASERJET MONOKROM MULTIFUNGSI",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014529",
                "nama" => "PRINTER LASERJET MONOKROM MULTIFUNGSI",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014530",
                "nama" => "PRINTER LASERJET WARNA HP",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014531",
                "nama" => "PRINTER DOTMETRIX EPSON LQ 2190",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014532",
                "nama" => "PRINTER DOTMETRIX EPSON LQ 2190",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014533",
                "nama" => "PRINTER DOTMETRIX EPSON LQ 2190",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014534",
                "nama" => "PRINTER DESKJET CANNON PIXMA MP 287",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014535",
                "nama" => "PRINTER DESKJET CANNON PIXMA MP 287",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000014536",
                "nama" => "PRINTER DESKJET CANNON PIXMA MP 287",
                "tanggal" => "2016-03-14",
            ],
            [
                "nomor" => "402000015307",
                "nama" => "PRINTER HP LASERJET PRO M402N",
                "tanggal" => "2016-05-11",
            ],
            [
                "nomor" => "402000015310",
                "nama" => "PRINTER HP LASERJET PRO M402N",
                "tanggal" => "2016-05-11",
            ],
            [
                "nomor" => "402000015311",
                "nama" => "PRINTER HP LASERJET PRO M402N",
                "tanggal" => "2016-05-11",
            ],
            [
                "nomor" => "402000015312",
                "nama" => "PRINTER HP LASERJET PRO M402N",
                "tanggal" => "2016-05-11",
            ],
            [
                "nomor" => "402000015313",
                "nama" => "PRINTER HP LASERJET PRO M402N",
                "tanggal" => "2016-05-11",
            ],
            [
                "nomor" => "402000016044",
                "nama" => "PERSONAL COMPUTER",
                "tanggal" => "2016-10-11",
            ],
            [
                "nomor" => "402000016045",
                "nama" => "PERSONAL COMPUTER",
                "tanggal" => "2016-10-11",
            ],
            [
                "nomor" => "402000016699",
                "nama" => "Notebook - Asus",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016700",
                "nama" => "Printer Epson LQ-2190",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016701",
                "nama" => "Printer Epson LQ-2190",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016702",
                "nama" => "Printer Laserjet - HP M402n",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016703",
                "nama" => "Printer Laserjet - HP M402n",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016704",
                "nama" => "Printer Laserjet - HP M402n",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016705",
                "nama" => "Printer Laserjet - HP M402n",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016706",
                "nama" => "Printer Laserjet - HP M402n",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016707",
                "nama" => "PC Touch screen - Asus",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "402000016754",
                "nama" => "Printer Label ZEBRA GT820",
                "tanggal" => "2017-03-03",
            ],
            [
                "nomor" => "402000017229",
                "nama" => "PERSONAL KOMPUTER DELL OptiPlex 3050MT",
                "tanggal" => "2018-02-27",
            ],
            [
                "nomor" => "402000017230",
                "nama" => "Printer Dotmetric Epson LQ-2190",
                "tanggal" => "2018-02-27",
            ],
            [
                "nomor" => "402000017290",
                "nama" => "PERSONAL KOMPUTER DELL OptiPlex 3050MT",
                "tanggal" => "2018-02-27",
            ],
            [
                "nomor" => "402000017291",
                "nama" => "PERSONAL KOMPUTER DELL OptiPlex 3050MT",
                "tanggal" => "2018-02-27",
            ],
            [
                "nomor" => "402000017292",
                "nama" => "PERSONAL KOMPUTER DELL OptiPlex 3050MT",
                "tanggal" => "2018-02-27",
            ],
            [
                "nomor" => "402000017293",
                "nama" => "PERSONAL KOMPUTER DELL OptiPlex 3050MT",
                "tanggal" => "2018-02-27",
            ],
            [
                "nomor" => "402000017294",
                "nama" => "PERSONAL KOMPUTER DELL OptiPlex 3050MT",
                "tanggal" => "2018-02-27",
            ],
            [
                "nomor" => "402000017295",
                "nama" => "PERSONAL KOMPUTER DELL OptiPlex 3050MT",
                "tanggal" => "2018-02-27",
            ],
            [
                "nomor" => "402000017700",
                "nama" => "NOTEBOOK HP PROBOOK 430 G3",
                "tanggal" => "2016-06-14",
            ],
            [
                "nomor" => "402000017701",
                "nama" => "NOTEBOOK LENOVO THINKPAD",
                "tanggal" => "2014-11-06",
            ],
            [
                "nomor" => "402000017721",
                "nama" => "NOTEBOOK HP PROBOOK 430 G3",
                "tanggal" => "2016-06-14",
            ],
            [
                "nomor" => "402000017955",
                "nama" => "PC HP SLIMLINE 290",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017956",
                "nama" => "PC HP SLIMLINE 290",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017957",
                "nama" => "PC HP SLIMLINE 290",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017958",
                "nama" => "PC HP SLIMLINE 290",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017959",
                "nama" => "PC HP SLIMLINE 290",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017960",
                "nama" => "PC HP SLIMLINE 290",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017961",
                "nama" => "PC HP SLIMLINE 290",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017962",
                "nama" => "PC HP SLIMLINE 290",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017971",
                "nama" => "Printer HP LaserJet Pro MFP M 181 FW (COLOR)",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017972",
                "nama" => "Printer HP LaserJet Pro MFP M 181 FW (COLOR)",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017977",
                "nama" => "Printer HP LaserJet Pro MFP M 28 W",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017978",
                "nama" => "Printer HP LaserJet Pro MFP M 28 W",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017979",
                "nama" => "Printer HP LaserJet Pro MFP M 28 W",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017980",
                "nama" => "Printer HP LaserJet Pro MFP M 28 W",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017981",
                "nama" => "Printer HP LaserJet Pro MFP M 28 W",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000017982",
                "nama" => "Printer HP LaserJet Pro MFP M 28 W",
                "tanggal" => "2019-03-25",
            ],
            [
                "nomor" => "402000018445",
                "nama" => "PRINTER EPSON LQ 2190",
                "tanggal" => "2013-05-22",
            ],
            [
                "nomor" => "402000018446",
                "nama" => "PRINTER HP LJ PRO 400 M401n",
                "tanggal" => "2013-05-22",
            ],
            [
                "nomor" => "402000018447",
                "nama" => "PERSONAL KOMPUTER (PC)  DELL",
                "tanggal" => "2013-06-14",
            ],
            [
                "nomor" => "402000018448",
                "nama" => "PERSONAL KOMPUTER (PC)  DELL",
                "tanggal" => "2013-06-14",
            ],
            [
                "nomor" => "402000018449",
                "nama" => "PERSONAL KOMPUTER (PC)  DELL",
                "tanggal" => "2013-06-14",
            ],
            [
                "nomor" => "402000018450",
                "nama" => "PERSONAL KOMPUTER (PC)  DELL",
                "tanggal" => "2013-06-14",
            ],
            [
                "nomor" => "402000018451",
                "nama" => "THIN CLIENT HP T510 W7E",
                "tanggal" => "2013-10-28",
            ],
            [
                "nomor" => "402000018452",
                "nama" => "THIN CLIENT HP T510 W7E",
                "tanggal" => "2013-10-28",
            ],
            [
                "nomor" => "402000018453",
                "nama" => "PRINTER DOTMETRIC EPSON LQ-2190",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018454",
                "nama" => "PRINTER  LASERJET MERK HP",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018455",
                "nama" => "PRINTER  LASERJET MERK HP",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018456",
                "nama" => "PRINTER  LASERJET MERK HP",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018457",
                "nama" => "PRINTER  LASERJET MERK HP",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018458",
                "nama" => "NOTE BOOK MERK ASUS",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018459",
                "nama" => "NOTE BOOK MERK ASUS",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018460",
                "nama" => "NOTE BOOK MERK ASUS",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018461",
                "nama" => "NOTE BOOK MERK ASUS",
                "tanggal" => "2015-05-15",
            ],
            [
                "nomor" => "402000018846",
                "nama" => "Logitech Group",
                "tanggal" => "2019-08-01",
            ],
            [
                "nomor" => "402000018847",
                "nama" => "Expansion Mic for Group",
                "tanggal" => "2019-08-01",
            ],
            [
                "nomor" => "402000019490",
                "nama" => "HP PROBOOK 440 G5",
                "tanggal" => "2018-04-17",
            ],
            [
                "nomor" => "402000019491",
                "nama" => "NOTEBOOK DELL 3400-N01",
                "tanggal" => "2020-06-19",
            ],
            [
                "nomor" => "402000019492",
                "nama" => "NOTEBOOK DELL 3400-N01",
                "tanggal" => "2020-06-19",
            ],
            [
                "nomor" => "402000019493",
                "nama" => "NOTEBOOK DELL 3400-N01",
                "tanggal" => "2020-06-19",
            ],
            [
                "nomor" => "402000019494",
                "nama" => "NOTEBOOK DELL 3400-N01",
                "tanggal" => "2020-06-19",
            ],
            [
                "nomor" => "402000019495",
                "nama" => "PRINTER HP LASERJET PRO M402N",
                "tanggal" => "2020-06-19",
            ],
            [
                "nomor" => "402000019496",
                "nama" => "PRINTER HP LASERJET PRO M402N",
                "tanggal" => "2020-06-19",
            ],
            [
                "nomor" => "402000019497",
                "nama" => "PRINTER HP LASERJET PRO M402N",
                "tanggal" => "2020-06-19",
            ],
            [
                "nomor" => "402000019498",
                "nama" => "PRINTER HP LASERJET PRO MFP M180N",
                "tanggal" => "2020-06-19",
            ],
            [
                "nomor" => "501000009208",
                "nama" => "AC STANDING FLOOR 5 PK",
                "tanggal" => "2009-09-14",
            ],
            [
                "nomor" => "501000009209",
                "nama" => "AC STANDING FLOOR 5 PK",
                "tanggal" => "2009-09-14",
            ],
            [
                "nomor" => "501000010023",
                "nama" => "HANDYCAM SONY DCR-SR220  60 GB",
                "tanggal" => "2009-11-13",
            ],
            [
                "nomor" => "501000010027",
                "nama" => "POMPA HYDRANT",
                "tanggal" => "2009-12-09",
            ],
            [
                "nomor" => "501000011121",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011122",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011123",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011124",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011125",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011126",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011127",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011128",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011129",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011130",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011131",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011132",
                "nama" => "MEJA PANJANG LIPAT  FUTURA FTR 189 UK.180X60 CM",
                "tanggal" => "2010-04-29",
            ],
            [
                "nomor" => "501000011539",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011540",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011541",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011542",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011543",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011544",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011545",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011546",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011547",
                "nama" => "MEJA + PARTISI P150XL120XT105",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011548",
                "nama" => "MEJA KERJA KEPALA SEKSI",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011549",
                "nama" => "MEJA KERJA KEPALA SEKSI",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011550",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011551",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011552",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011553",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011554",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011555",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011556",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011557",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011558",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011559",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011560",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011561",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011562",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011563",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011564",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011565",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011566",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011567",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011568",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011569",
                "nama" => "MEJA KERJA PELAKSANA/KARYAWAN",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011570",
                "nama" => "MEJA KECIL UKURAN P120XL50XT70 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011571",
                "nama" => "MEJA KECIL UKURAN P120XL50XT70 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011572",
                "nama" => "LACI DORONG",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011573",
                "nama" => "LACI DORONG",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011574",
                "nama" => "LACI DORONG",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011575",
                "nama" => "LACI DORONG",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011576",
                "nama" => "LACI DORONG",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011577",
                "nama" => "LACI DORONG",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011578",
                "nama" => "LACI DORONG",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011579",
                "nama" => "LACI DORONG",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011580",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011581",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011582",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011583",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011584",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011585",
                "nama" => "Laci dorong ukuran 40x50x54 cm",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011586",
                "nama" => "Laci dorong ukuran 40x50x54 cm",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011587",
                "nama" => "Laci dorong ukuran 40x50x54 cm",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011588",
                "nama" => "Laci dorong ukuran 40x50x54 cm",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011589",
                "nama" => "Laci dorong ukuran 40x50x54 cm",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011590",
                "nama" => "LACI DORONG UKURAN 40X50X54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011591",
                "nama" => "LACI DORONG UKURAN 40X50X54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011592",
                "nama" => "LACI DORONG UKURAN 40X50X54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011593",
                "nama" => "LACI DORONG UKURAN 40X50X54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011594",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011595",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011596",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011597",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011598",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011599",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011600",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011601",
                "nama" => "LACI DORONG UKURAN P40XL50XT54 CM.",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011602",
                "nama" => "MEJA KERJA SATPAM UKURAN P120XL74XT73",
                "tanggal" => "2010-07-26",
            ],
            [
                "nomor" => "501000011627",
                "nama" => "MESIN PENGHANCUR KERTAS ZSA2100 ST",
                "tanggal" => "2010-07-13",
            ],
            [
                "nomor" => "501000011628",
                "nama" => "Mesin penghancur kertas zsa4000s",
                "tanggal" => "2010-07-13",
            ],
            [
                "nomor" => "501000011650",
                "nama" => "KURSI TERAS RUMAH DINAS",
                "tanggal" => "2010-08-09",
            ],
            [
                "nomor" => "501000011651",
                "nama" => "LEMARI PAKAIAN  2 PINTU",
                "tanggal" => "2010-08-09",
            ],
            [
                "nomor" => "501000011652",
                "nama" => "TEMPAT TIDUR KAYU NO. 2",
                "tanggal" => "2010-08-09",
            ],
            [
                "nomor" => "501000012228",
                "nama" => "KURSI TAMU MPB 010  12,321 DUDUKAN",
                "tanggal" => "2010-11-12",
            ],
            [
                "nomor" => "501000012417",
                "nama" => "MEJA KECIL (SAMPING) MODERA S CLASS SSD 5010",
                "tanggal" => "2010-11-15",
            ],
            [
                "nomor" => "501000013452",
                "nama" => "LEMARI  PAKAIAN JATI 4 PINTU",
                "tanggal" => "2011-06-17",
            ],
            [
                "nomor" => "501000013453",
                "nama" => "MEJA RIAS 8 LACI",
                "tanggal" => "2011-06-17",
            ],
            [
                "nomor" => "501000013722",
                "nama" => "AC PANASONIC SPLIT 2 PK",
                "tanggal" => "2011-10-06",
            ],
            [
                "nomor" => "501000013723",
                "nama" => "AC PANASONIC SPLIT 2 PK",
                "tanggal" => "2011-10-06",
            ],
            [
                "nomor" => "501000013846",
                "nama" => "MESIN SCANNER KODAK  i1420",
                "tanggal" => "2011-10-24",
            ],
            [
                "nomor" => "501000016087",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016088",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016089",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016090",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016091",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016092",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016093",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016094",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016095",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016096",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016097",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016098",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016099",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016100",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016101",
                "nama" => "MEJA LIPAT FUTURA MJ FTR 189",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016102",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016103",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016104",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016106",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016107",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016109",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016111",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016112",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016113",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016114",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016115",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016117",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016118",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016119",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016120",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016121",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016123",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016124",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016126",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016128",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016130",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016131",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016132",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016133",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016134",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016136",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016137",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016139",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016140",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016141",
                "nama" => "KURSI TAMU SUSUN CHITOSE",
                "tanggal" => "2012-03-30",
            ],
            [
                "nomor" => "501000016932",
                "nama" => "MESIN FOTO KOPI FUJI XEROX",
                "tanggal" => "2012-05-14",
            ],
            [
                "nomor" => "501000017535",
                "nama" => "RAK BESI",
                "tanggal" => "2012-07-27",
            ],
            [
                "nomor" => "501000017536",
                "nama" => "RAK BESI",
                "tanggal" => "2012-07-27",
            ],
            [
                "nomor" => "501000017537",
                "nama" => "RAK BESI",
                "tanggal" => "2012-07-27",
            ],
            [
                "nomor" => "501000017538",
                "nama" => "RAK BESI",
                "tanggal" => "2012-07-27",
            ],
            [
                "nomor" => "501000017539",
                "nama" => "RAK BESI",
                "tanggal" => "2012-07-27",
            ],
            [
                "nomor" => "501000017792",
                "nama" => "POMPA AIR SUMERSIBLE MERK GRUNDFOS SP5A.12.",
                "tanggal" => "2012-09-11",
            ],
            [
                "nomor" => "501000017831",
                "nama" => "KITCHEN SET",
                "tanggal" => "2012-09-24",
            ],
            [
                "nomor" => "501000017834",
                "nama" => "ALMARI MAKAN",
                "tanggal" => "2012-09-24",
            ],
            [
                "nomor" => "501000017970",
                "nama" => "LEMARI ARSIP  4,8 M2 (3,75 M X 1,28 M )",
                "tanggal" => "2012-09-24",
            ],
            [
                "nomor" => "501000017971",
                "nama" => "LEMARI ARSIP  4,25 M2 ( 3,15 M X 1.35 M )",
                "tanggal" => "2012-09-24",
            ],
            [
                "nomor" => "501000019160",
                "nama" => "SCANNER CANON DR-C125",
                "tanggal" => "2012-11-27",
            ],
            [
                "nomor" => "501000019161",
                "nama" => "LED TV 32 INCH",
                "tanggal" => "2012-11-27",
            ],
            [
                "nomor" => "501000019162",
                "nama" => "MESIN PENGHANCUR KERTAS GEMET 320 C",
                "tanggal" => "2012-11-27",
            ],
            [
                "nomor" => "501000019163",
                "nama" => "MESIN FACSIMILE PANASONIC KX-MB2030CX",
                "tanggal" => "2012-11-27",
            ],
            [
                "nomor" => "501000019216",
                "nama" => "KURSI HADAP KEPALA MERK LUFO",
                "tanggal" => "2012-12-18",
            ],
            [
                "nomor" => "501000019229",
                "nama" => "KURSI HADAP KEPALA MERK LUFO",
                "tanggal" => "2012-12-18",
            ],
            [
                "nomor" => "501000019403",
                "nama" => "CAMERA DSLR NIKON D7000KIT (LENS 18-105 MM)",
                "tanggal" => "2013-03-20",
            ],
            [
                "nomor" => "501000019638",
                "nama" => "AUTOMATIC DOOR",
                "tanggal" => "2013-04-29",
            ],
            [
                "nomor" => "501000019698",
                "nama" => "TELEVISI SONY LED KLV 32EX33",
                "tanggal" => "2013-04-26",
            ],
            [
                "nomor" => "501000019784",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019787",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019789",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019791",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019793",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019795",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019797",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019799",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019801",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019803",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019805",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019806",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019808",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019809",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019811",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019813",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019816",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000019818",
                "nama" => "RAK ARSIP BAJA  ATLANTA 8 SHAP",
                "tanggal" => "2013-05-01",
            ],
            [
                "nomor" => "501000020395",
                "nama" => "AC SPLIT DAIKIN 2 PK",
                "tanggal" => "2013-07-26",
            ],
            [
                "nomor" => "501000020396",
                "nama" => "AC SPLIT DAIKIN 2 PK",
                "tanggal" => "2013-07-26",
            ],
            [
                "nomor" => "501000020614",
                "nama" => "MEJA RIAS",
                "tanggal" => "2013-09-17",
            ],
            [
                "nomor" => "501000020615",
                "nama" => "KURSI RIAS",
                "tanggal" => "2013-09-17",
            ],
            [
                "nomor" => "501000020633",
                "nama" => "TEMPAT TIDUR  INFORMA",
                "tanggal" => "2013-09-19",
            ],
            [
                "nomor" => "501000020634",
                "nama" => "SPRINGBED MERK INFORMA",
                "tanggal" => "2013-09-19",
            ],
            [
                "nomor" => "501000020652",
                "nama" => "MEJA MAKAN MERK INRFORMA",
                "tanggal" => "2013-09-19",
            ],
            [
                "nomor" => "501000020653",
                "nama" => "KURSI MAKAN MERK INFORMA",
                "tanggal" => "2013-09-19",
            ],
            [
                "nomor" => "501000020664",
                "nama" => "KURSI MAKAN MERK INFORMA",
                "tanggal" => "2013-09-20",
            ],
            [
                "nomor" => "501000020665",
                "nama" => "KURSI MAKAN MERK INFORMA",
                "tanggal" => "2013-09-20",
            ],
            [
                "nomor" => "501000020666",
                "nama" => "KURSI MAKAN MERK INFORMA",
                "tanggal" => "2013-09-20",
            ],
            [
                "nomor" => "501000021339",
                "nama" => "AC STANDING FLOOR 5 PK",
                "tanggal" => "2009-05-11",
            ],
            [
                "nomor" => "501000021340",
                "nama" => "AC STANDING FLOOR 5 PK",
                "tanggal" => "2009-05-11",
            ],
            [
                "nomor" => "501000021461",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021462",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021463",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021464",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021465",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021466",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021467",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021468",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021469",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021470",
                "nama" => "KURSI KERJA KEPALA SEKSI MERK ERGOMETIC",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021471",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021472",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021473",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021474",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021475",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021476",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021477",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021478",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021479",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021480",
                "nama" => "MEJA SAMPING KASIE MERK ORBITREND",
                "tanggal" => "2014-02-20",
            ],
            [
                "nomor" => "501000021488",
                "nama" => "ALMARI PAKAIAN MERK INFORMA",
                "tanggal" => "2014-02-10",
            ],
            [
                "nomor" => "501000021489",
                "nama" => "ALMARI TELEVISI MERK INFORMA",
                "tanggal" => "2014-02-10",
            ],
            [
                "nomor" => "501000022011",
                "nama" => "SECURITY ACCESS DOOR",
                "tanggal" => "2013-12-30",
            ],
            [
                "nomor" => "501000022138",
                "nama" => "TELEVISI LED 3D LG 42",
                "tanggal" => "2014-03-27",
            ],
            [
                "nomor" => "501000022139",
                "nama" => "TELEVISI LED 3D LG 32",
                "tanggal" => "2014-03-27",
            ],
            [
                "nomor" => "501000022141",
                "nama" => "KULKAS 2 PINTU SHARP SJ420KD",
                "tanggal" => "2014-03-27",
            ],
            [
                "nomor" => "501000022831",
                "nama" => "AC SPLIT 2 PK PANASONIC",
                "tanggal" => "2014-05-19",
            ],
            [
                "nomor" => "501000022832",
                "nama" => "AC SPLIT 2 PK PANASONIC",
                "tanggal" => "2014-05-19",
            ],
            [
                "nomor" => "501000022833",
                "nama" => "AC SPLIT 1,5 PK PANASONIC",
                "tanggal" => "2014-05-19",
            ],
            [
                "nomor" => "501000022834",
                "nama" => "AC SPLIT 1,5 PK PANASONIC",
                "tanggal" => "2014-05-19",
            ],
            [
                "nomor" => "501000022835",
                "nama" => "AC SPLIT 1 PK PANASONIC",
                "tanggal" => "2014-05-19",
            ],
            [
                "nomor" => "501000023265",
                "nama" => "DVR + HARDISK CCTV",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023368",
                "nama" => "MESIN CUCI ELEXTROLUX EWT 704 EU",
                "tanggal" => "2014-07-10",
            ],
            [
                "nomor" => "501000023377",
                "nama" => "MESIN ABSENSI SOLUTION X401",
                "tanggal" => "2014-05-08",
            ],
            [
                "nomor" => "501000023378",
                "nama" => "MESIN ABSENSI SOLUTION X401",
                "tanggal" => "2014-05-08",
            ],
            [
                "nomor" => "501000023435",
                "nama" => "POMPA AIR",
                "tanggal" => "2014-07-18",
            ],
            [
                "nomor" => "501000023478",
                "nama" => "LEMARI UKURAN 180X60X20",
                "tanggal" => "2014-09-05",
            ],
            [
                "nomor" => "501000023479",
                "nama" => "GRADENZA UKURAN 150 X 60 X 90",
                "tanggal" => "2014-09-05",
            ],
            [
                "nomor" => "501000023480",
                "nama" => "LOCKER UKURAN 155X60X265",
                "tanggal" => "2014-09-05",
            ],
            [
                "nomor" => "501000023481",
                "nama" => "MEJA CS UKURAN 120X64X72",
                "tanggal" => "2014-09-05",
            ],
            [
                "nomor" => "501000023509",
                "nama" => "GENERATOR HONDA EU301S (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023510",
                "nama" => "MEJA (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023511",
                "nama" => "MEJA (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023512",
                "nama" => "KURSI PETUGAS (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023513",
                "nama" => "KURSI PETUGAS (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023514",
                "nama" => "KURSI HADAP (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023515",
                "nama" => "KURSI HADAP (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023516",
                "nama" => "AC SPLIT DAIKIN FT20LVI (MOTAS )",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023517",
                "nama" => "AUDIO SYSTEM BMB DA 200 (MOTAS )",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023518",
                "nama" => "ELECTRO VOICE EVID 4.2  AUDIO SYST (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023519",
                "nama" => "BMB WM 1000 AUDIO SYST (MOTAS)",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023520",
                "nama" => "TELEVISI LG (MOTAS )",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023521",
                "nama" => "PEMADAM API SOLINGEN (MOTAS )",
                "tanggal" => "2014-06-03",
            ],
            [
                "nomor" => "501000023786",
                "nama" => "RAK BESI ATLANTA 8 SHAP 7 RUANG 1 TULANG",
                "tanggal" => "2014-10-13",
            ],
            [
                "nomor" => "501000023787",
                "nama" => "RAK BESI ATLANTA 8 SHAP 7 RUANG 1 TULANG",
                "tanggal" => "2014-10-13",
            ],
            [
                "nomor" => "501000023788",
                "nama" => "RAK BESI ATLANTA 8 SHAP 7 RUANG 1 TULANG",
                "tanggal" => "2014-10-13",
            ],
            [
                "nomor" => "501000023789",
                "nama" => "RAK BESI ATLANTA 8 SHAP 7 RUANG 1 TULANG",
                "tanggal" => "2014-10-13",
            ],
            [
                "nomor" => "501000023790",
                "nama" => "RAK BESI ATLANTA 8 SHAP 7 RUANG 1 TULANG",
                "tanggal" => "2014-10-13",
            ],
            [
                "nomor" => "501000023791",
                "nama" => "RAK BESI ATLANTA 8 SHAP 7 RUANG 1 TULANG",
                "tanggal" => "2014-10-13",
            ],
            [
                "nomor" => "501000023792",
                "nama" => "RAK BESI ATLANTA 8 SHAP 7 RUANG 1 TULANG",
                "tanggal" => "2014-10-13",
            ],
            [
                "nomor" => "501000023798",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023799",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023800",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023801",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023802",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023803",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023804",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023805",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023806",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023807",
                "nama" => "KAMERA SECURE 1/3 INFARED INDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023817",
                "nama" => "KAMERA SECURE 1/3 INFARED OUTDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023818",
                "nama" => "KAMERA SECURE 1/3 INFARED OUTDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023819",
                "nama" => "KAMERA SECURE 1/3 INFARED OUTDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023820",
                "nama" => "KAMERA SECURE 1/3 INFARED OUTDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023821",
                "nama" => "KAMERA SECURE 1/3 INFARED OUTDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023822",
                "nama" => "KAMERA SECURE 1/3 INFARED OUTDOOR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000023823",
                "nama" => "ASECORIS DVR",
                "tanggal" => "2014-06-25",
            ],
            [
                "nomor" => "501000024985",
                "nama" => "TELEVISI LED 32 SONY",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024986",
                "nama" => "TELEVISI LED 32 SONY",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024987",
                "nama" => "TELEVISI LED 32 SONY",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024988",
                "nama" => "AC SPLIT 1.5 LG",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024989",
                "nama" => "AC SPLIT 1.5 LG",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024990",
                "nama" => "AC SPLIT 2 PK MERK LG",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024991",
                "nama" => "AC SPLIT 2 PK MERK LG",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024992",
                "nama" => "AC STANDING FLOOR  5 PK MERK LG",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024993",
                "nama" => "AC STANDING FLOOR  5 PK MERK LG",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024994",
                "nama" => "MULTI MEDIA MERK HITACHI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024995",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024996",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024997",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024998",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000024999",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025000",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025001",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025002",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025003",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025004",
                "nama" => "KURSI RUANG TUNGGU MERK DONATI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025005",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025006",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025007",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025008",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025009",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025010",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025011",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025012",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025013",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025014",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025015",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025016",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025017",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025018",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025019",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025020",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025021",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025022",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025023",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025024",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025025",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025026",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025027",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025028",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025029",
                "nama" => "KURSI AULA MERK CHITOSE",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025030",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025031",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025032",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025033",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025034",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025035",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025036",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025037",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025038",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025039",
                "nama" => "FILLING CABINET MERK LUFO 4 LACI",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000025040",
                "nama" => "TEMPAT TIDUR MERK ROMANCE UK. 200X180 CM",
                "tanggal" => "2015-04-08",
            ],
            [
                "nomor" => "501000026243",
                "nama" => "POMPA AIR MERK GRUNDFOS",
                "tanggal" => "2015-06-03",
            ],
            [
                "nomor" => "501000026244",
                "nama" => "POMPA AIR MERK GRUNDFOS",
                "tanggal" => "2015-06-03",
            ],
            [
                "nomor" => "501000026245",
                "nama" => "MESIN NOMOR ANTRIAN (PANGGIL) QMS-SO600",
                "tanggal" => "2015-07-31",
            ],
            [
                "nomor" => "501000029025",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029026",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029027",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029028",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029029",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029030",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029031",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029032",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029033",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029034",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029035",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029036",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029037",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029038",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029039",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000029040",
                "nama" => "IP PHONE AVAYA E129 SIP - TYPE 1 (KANTOR CABANG)",
                "tanggal" => "2014-12-29",
            ],
            [
                "nomor" => "501000031655",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031656",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031657",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031658",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031659",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031660",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031661",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031662",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031663",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031664",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031665",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031666",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031667",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031668",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031669",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031670",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031671",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031672",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031673",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031674",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031675",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031676",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031677",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031678",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031679",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031680",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031681",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031682",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031683",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031684",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031685",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031686",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031687",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031688",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031689",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031690",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031691",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031692",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031693",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031694",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031695",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031696",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031697",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031698",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031699",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031700",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031701",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031702",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031703",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031704",
                "nama" => "KURSI KERJA KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031705",
                "nama" => "MEJA KARYAWAN (WORK STATION) PARTISI UNO",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031706",
                "nama" => "MEJA KARYAWAN (WORK STATION) PARTISI UNO",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031707",
                "nama" => "MEJA KARYAWAN (WORK STATION) PARTISI UNO",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031708",
                "nama" => "SICE KANTOR MERK LIGNA TYPE PALERMO",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031709",
                "nama" => "SICE KANTOR MERK LIGNA TYPE PALERMO",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031710",
                "nama" => "SICE KANTOR MERK LIGNA TYPE PALERMO",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031711",
                "nama" => "SICE KANTOR MERK LIGNA TYPE PALERMO",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031712",
                "nama" => "SICE KANTOR MERK LIGNA TYPE PALERMO",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031713",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031714",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031715",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031716",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031717",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031718",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031719",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031720",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031721",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031722",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031723",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031724",
                "nama" => "KURSI HADAP COSTUMER MERK INDACHI TYPE D-831 UCR",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031725",
                "nama" => "KURSI KEPALA KCU MERK LUFO TYPE L-900 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031726",
                "nama" => "KURSI WAKIL KEPALA KCU MERK LUFO TYPE L-900 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031727",
                "nama" => "MEJA WK KEPALA KCU MERK HORSE METAL TYPE MTP-03",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031728",
                "nama" => "MEJA WAKIL KEPALA KCU MERK HORSE METAL TYPE MTP-03",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031729",
                "nama" => "KURSI KEPALA BIDANG MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031730",
                "nama" => "KURSI KEPALA BIDANG MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031731",
                "nama" => "KURSI KEPALA BIDANG MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031732",
                "nama" => "KURSI KEPALA SEKSI MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031733",
                "nama" => "KURSI KEPALA SEKSI MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031734",
                "nama" => "KURSI KEPALA SEKSI MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031735",
                "nama" => "KURSI KEPALA SEKSI MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031736",
                "nama" => "KURSI KEPALA SEKSI MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000031737",
                "nama" => "KURSI KEPALA SEKSI MERK LUFO TYPE L-910 HDT",
                "tanggal" => "2016-05-23",
            ],
            [
                "nomor" => "501000032094",
                "nama" => "TV LED 42' MERK LG",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032095",
                "nama" => "TV LED 42' MERK LG",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032096",
                "nama" => "AC SPLIT 1.5 PK MERK PANASONIC",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032097",
                "nama" => "AC SPLIT 1.5 PK MERK PANASONIC",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032098",
                "nama" => "AC SPLIT 2 PK MERK PANASONIC",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032099",
                "nama" => "AC SPLIT 2 PK MERK PANASONIC",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032100",
                "nama" => "MESIN CUCI MERK ELEXTROLUX KAPASITAS 8 KG",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032101",
                "nama" => "LCD/MULTIMEDIA PROJECTOR MERK HITACHI",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032102",
                "nama" => "DISPENSER MERK SANKEN",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032103",
                "nama" => "DISPENSER MERK SANKEN",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032104",
                "nama" => "DISPENSER MERK SANKEN",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032105",
                "nama" => "DISPENSER MERK SANKEN",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032106",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032107",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032108",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032109",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032110",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032111",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032112",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032113",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032114",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032115",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032116",
                "nama" => "PEMADAM API 3 KG CO2 MERK PROTECT",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032117",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032118",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032119",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032120",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032121",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032124",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032127",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032128",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032129",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032131",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032132",
                "nama" => "PEMADAM API 3 KG POWDER MERK GUNNEBO",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032136",
                "nama" => "TEMPAT TIDUR MERK ROMANCE",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032138",
                "nama" => "TEMPAT TIDUR MERK ROMANCE",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032142",
                "nama" => "SICE TAMU",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032143",
                "nama" => "SICE TAMU",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032147",
                "nama" => "BUFFET HIAS RUANG TAMU TINGGI",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032148",
                "nama" => "BUFFET HIAS RUANG TAMU PENDEK",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032149",
                "nama" => "KITCHEN SET",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000032150",
                "nama" => "KITCHEN SET",
                "tanggal" => "2016-06-09",
            ],
            [
                "nomor" => "501000033253",
                "nama" => "Scanner Kodak i3300 with A3 flatbed",
                "tanggal" => "2016-06-17",
            ],
            [
                "nomor" => "501000035183",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035185",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035186",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035188",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035190",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035192",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035194",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035196",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035197",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035198",
                "nama" => "KURSI KARYAWAN MERK LUFO TYPE L-870",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035201",
                "nama" => "KURSI HADAP KEPALA BIDANG MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035202",
                "nama" => "KURSI HADAP KEPALA BIDANG MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035204",
                "nama" => "KURSI HADAP KEPALA BIDANG MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035205",
                "nama" => "KURSI HADAP KEPALA BIDANG MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035206",
                "nama" => "KURSI HADAP KEPALA BIDANG MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035207",
                "nama" => "KURSI HADAP KEPALA BIDANG MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035208",
                "nama" => "KURSI HADAP KEPALA SEKSI MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035209",
                "nama" => "KURSI HADAP KEPALA SEKSI MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035210",
                "nama" => "KURSI HADAP KEPALA SEKSI MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035211",
                "nama" => "KURSI HADAP KEPALA SEKSI MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035212",
                "nama" => "KURSI HADAP KEPALA SEKSI MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035213",
                "nama" => "KURSI HADAP KEPALA SEKSI MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035214",
                "nama" => "KURSI HADAP MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035215",
                "nama" => "KURSI HADAP WAKIL KEPALA MERK INDACHI TYPE D-831",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035216",
                "nama" => "ALMARI RUANG SPIDA (KEPALA BIDANG )",
                "tanggal" => "2017-03-13",
            ],
            [
                "nomor" => "501000035857",
                "nama" => "AC split 2 pk PANASONIC",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035858",
                "nama" => "AC split 2 pk PANASONIC",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035859",
                "nama" => "AC split 1,5 pk PANASONIC",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035860",
                "nama" => "AC split 1,5 pk PANASONIC",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035861",
                "nama" => "Dispenser-SANKEN",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035862",
                "nama" => "Dispenser-SANKEN",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035863",
                "nama" => "TV LED 43' - LG",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035864",
                "nama" => "TV LED 43' - LG",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035865",
                "nama" => "TV LED 43' - LG",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035866",
                "nama" => "TV LED 43' - LG",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000035867",
                "nama" => "Pemanas Air - Ariston",
                "tanggal" => "2017-04-26",
            ],
            [
                "nomor" => "501000037682",
                "nama" => "PERANGKAT MESIN ANTRIAN KIOS-K",
                "tanggal" => "2017-12-13",
            ],
            [
                "nomor" => "501000037838",
                "nama" => "Card Reader E-KTP",
                "tanggal" => "2017-10-13",
            ],
            [
                "nomor" => "501000039009",
                "nama" => "MESIN ABSENSI SOLUTION X401",
                "tanggal" => "2013-12-24",
            ],
            [
                "nomor" => "501000039098",
                "nama" => "TELEVISI '43 LG 43UJ632T",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039099",
                "nama" => "TELEVISI '32 LG32LJ500D",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039100",
                "nama" => "AC SPLIT PANASONIC 1,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039101",
                "nama" => "AC SPLIT PANASONIC 2,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039102",
                "nama" => "GENSET FEDERAL FDG6000S",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039103",
                "nama" => "LEMARI ES 2 PINTU LG GN-C422SLCN",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039104",
                "nama" => "DISPENSER SHARP SWD - 75 EHL",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039105",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039106",
                "nama" => "CANON EOS-800D",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039107",
                "nama" => "BRANKAS LUFO",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039108",
                "nama" => "VACUM CLEANER KRISBOW KW1800308",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000039109",
                "nama" => "LCD PROJECTOR + SCREEN",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040257",
                "nama" => "TELEVISI '43 LG 43UJ632T",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040259",
                "nama" => "TELEVISI '32 LG32LJ500D",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040261",
                "nama" => "AC SPLIT PANASONIC 1,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040263",
                "nama" => "AC SPLIT PANASONIC 2,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040264",
                "nama" => "AC SPLIT PANASONIC 2,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040265",
                "nama" => "AC SPLIT PANASONIC 2,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040266",
                "nama" => "AC SPLIT PANASONIC 2,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040267",
                "nama" => "AC SPLIT PANASONIC 2,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040268",
                "nama" => "AC SPLIT PANASONIC 2,5 PK",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040270",
                "nama" => "DISPENSER SHARP SWD - 75 EHL",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040272",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040273",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040274",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040275",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040276",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040277",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040278",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040279",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000040280",
                "nama" => "FILLING KABINET",
                "tanggal" => "2018-03-29",
            ],
            [
                "nomor" => "501000043591",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043592",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043593",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043594",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043595",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043596",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043597",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043598",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043599",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043600",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043601",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043602",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043603",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043604",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043605",
                "nama" => "KURSI RAPAT LUFO TYPE L.800 CR",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043606",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043607",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043608",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043609",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043610",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043611",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043612",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043613",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043614",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043615",
                "nama" => "FOLDING TABLE MERK EXPO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043616",
                "nama" => "SCANNER CANON TYPE DR-F120",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043617",
                "nama" => "SCANNER CANON TYPE DR-F120",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043618",
                "nama" => "COFFEE TABLE MERK UNO",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000043619",
                "nama" => "RANJANG PERIKSA +TIRAI BAHAN STAINLESS STEEL",
                "tanggal" => "2019-03-29",
            ],
            [
                "nomor" => "501000044141",
                "nama" => "Evolis Zenius",
                "tanggal" => "2019-03-14",
            ],
            [
                "nomor" => "501000044726",
                "nama" => "LEMARI ARSIP",
                "tanggal" => "2019-08-02",
            ],
            [
                "nomor" => "501000044727",
                "nama" => "LEMARI ARSIP",
                "tanggal" => "2019-08-02",
            ],
            [
                "nomor" => "501000044728",
                "nama" => "LEMARI ARSIP",
                "tanggal" => "2019-08-02",
            ],
            [
                "nomor" => "501000044729",
                "nama" => "LEMARI ARSIP",
                "tanggal" => "2019-08-02",
            ],
            [
                "nomor" => "501000044933",
                "nama" => "LG BUSINESS SMART TV 65 INCH",
                "tanggal" => "2019-11-04",
            ],
            [
                "nomor" => "501000044934",
                "nama" => "BRACKET & STAND FLOOR",
                "tanggal" => "2019-11-04",
            ],
            [
                "nomor" => "501000048311",
                "nama" => "MEJA KUBIKAL",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048312",
                "nama" => "MEJA KUBIKAL",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048313",
                "nama" => "MEJA KUBIKAL",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048314",
                "nama" => "MEJA KUBIKAL",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048315",
                "nama" => "MEJA KUBIKAL",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048316",
                "nama" => "MEJA KUBIKAL",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048317",
                "nama" => "MEJA KUBIKAL",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048318",
                "nama" => "MEJA KUBIKAL",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048319",
                "nama" => "SCANNER FUJITSU",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048320",
                "nama" => "DISPENSER",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048321",
                "nama" => "DISPENSER",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048322",
                "nama" => "DISPENSER",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048323",
                "nama" => "MICROPHONE",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048324",
                "nama" => "MICROPHONE",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048325",
                "nama" => "MICROPHONE",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048326",
                "nama" => "MICROPHONE",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048327",
                "nama" => "SOFA",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048328",
                "nama" => "MIXER",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000048329",
                "nama" => "AMPLIFIRE",
                "tanggal" => "2020-06-25",
            ],
            [
                "nomor" => "501000049462",
                "nama" => "Lemari Es 2 Pintu GN-C372SLCB",
                "tanggal" => "2021-02-26",
            ],
            [
                "nomor" => "501000049463",
                "nama" => "Lemari Es 2 Pintu GN-C372SLCB",
                "tanggal" => "2021-02-26",
            ],
            [
                "nomor" => "501000049464",
                "nama" => "Mesin Cuci FV1450SIB",
                "tanggal" => "2021-02-26",
            ],
            [
                "nomor" => "501000049465",
                "nama" => "Mesin Cuci FV1450SIB",
                "tanggal" => "2021-02-26",
            ],
            [
                "nomor" => "501000049466",
                "nama" => "Multimedia Proyektor Hitachi CP-WU5500",
                "tanggal" => "2021-02-26",
            ],
            [
                "nomor" => "501000049467",
                "nama" => "Scanner Kodak Alaris i3300",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049468",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049469",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (2)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049470",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (3)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049471",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (4)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049472",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (5)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049473",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (6)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049474",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (7)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049475",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (8)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049476",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (9)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049477",
                "nama" => "Kursi Tunggu 3 Seat Indachi D-771 V3 (10)",
                "tanggal" => "2021-03-16",
            ],
            [
                "nomor" => "501000049479",
                "nama" => "1 Set Sound System Untuk Aula",
                "tanggal" => "2021-03-17",
            ],
            [
                "nomor" => "501000049762",
                "nama" => "CCTV 16 CHANNEL",
                "tanggal" => "2021-03-17",
            ],
            [
                "nomor" => "501000049865",
                "nama" => "PABX",
                "tanggal" => "2021-03-18",
            ],
            [
                "nomor" => "501000052864",
                "nama" => "PRINTER ID CARD EVOLIS",
                "tanggal" => "2021-08-09",
            ],
            [
                "nomor" => "501000054794",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054799",
                "nama" => "AC SPLIT 2 PK MERK DAIKIN",
                "tanggal" => "2022-06-27",
            ],
            [
                "nomor" => "501000054842",
                "nama" => "AC SPLIT 2 PK MERK DAIKIN",
                "tanggal" => "2022-06-27",
            ],
            [
                "nomor" => "501000054843",
                "nama" => "AC SPLIT 2 PK MERK DAIKIN",
                "tanggal" => "2022-06-27",
            ],
            [
                "nomor" => "501000054844",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054845",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054846",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054847",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054848",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054849",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054850",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054851",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054852",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054853",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054854",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054855",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054856",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054857",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054858",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054859",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054860",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054861",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054862",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054863",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054864",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054865",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054866",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054867",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054868",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054869",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054870",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054871",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054872",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054873",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054874",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054875",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054876",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054877",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000054878",
                "nama" => "Kursi Kerja Karyawan Chairman Type TS-01003A",
                "tanggal" => "2022-06-23",
            ],
            [
                "nomor" => "501000055648",
                "nama" => "Dispenser SHARP Galon Bawah SWD-66EHL",
                "tanggal" => "2023-06-23",
            ],
            [
                "nomor" => "501000055663",
                "nama" => "Dispenser SHARP Galon Bawah SWD-66EHL",
                "tanggal" => "2023-06-23",
            ],
            [
                "nomor" => "501000055681",
                "nama" => "Scanner Fujitsu Fi-7260",
                "tanggal" => "2023-06-23",
            ],
            [
                "nomor" => "501000055682",
                "nama" => "AC Split 2 PK - LG",
                "tanggal" => "2023-06-23",
            ],
            [
                "nomor" => "501000055683",
                "nama" => "AC Split 2 PK - LG",
                "tanggal" => "2023-06-23",
            ],
            [
                "nomor" => "501000055684",
                "nama" => "Pompa Air Grundfos Type CR10-04",
                "tanggal" => "2023-06-23",
            ],
            [
                "nomor" => "501000055685",
                "nama" => "AC Standing 5 PK - Midea",
                "tanggal" => "2023-06-23",
            ],
            [
                "nomor" => "401000000486",
                "nama" => "Pc Hp Comp Prol Ml350+Lcd+Key b.",
                "tanggal" => "2004-09-22",
            ],
            [
                "nomor" => "402000004736",
                "nama" => "JARINGAN UPS",
                "tanggal" => "2002-11-22",
            ],
            [
                "nomor" => "501000002417",
                "nama" => "PABX ( 1 UNIT )  + 30 TELPON",
                "tanggal" => "2002-05-23",
            ],
            [
                "nomor" => "501000002418",
                "nama" => "PENANGKAL PETIR",
                "tanggal" => "2002-07-17",
            ],
            [
                "nomor" => "501000002437",
                "nama" => "AC SPLIT MITSUBISHI",
                "tanggal" => "2004-05-05",
            ],
            [
                "nomor" => "501000002439",
                "nama" => "AC SPLIT PANASONICCS/CU-PC18CKH",
                "tanggal" => "2004-05-31",
            ],
            [
                "nomor" => "501000002440",
                "nama" => "AC SPLIT PANASONICCS/CU-PC18CKH",
                "tanggal" => "2004-05-31",
            ],
            [
                "nomor" => "501000002442",
                "nama" => "AC CASSET  PANASONICCS/CU-PC18CKH",
                "tanggal" => "2004-05-31",
            ],
            [
                "nomor" => "501000002450",
                "nama" => "AC CEILING PANASONIC CS-A43CTH",
                "tanggal" => "2004-05-31",
            ],
            [
                "nomor" => "501000002451",
                "nama" => "AIR CURTAIN DIAMOND FM-1212C",
                "tanggal" => "2004-07-06",
            ],
            [
                "nomor" => "501000002452",
                "nama" => "SUMUR BOR / ARTETIS",
                "tanggal" => "2002-12-02",
            ],
            [
                "nomor" => "501000003198",
                "nama" => "TEMPAT TIDUR BESI NO. 2",
                "tanggal" => "2005-06-17",
            ],
            [
                "nomor" => "501000003220",
                "nama" => "TEMPAT TIDUR NO. 1",
                "tanggal" => "2005-06-09",
            ],
            [
                "nomor" => "501000003681",
                "nama" => "MESIN GEN SET PERKINS",
                "tanggal" => "2006-03-14",
            ],
            [
                "nomor" => "501000003733",
                "nama" => "SOFA MODEL L",
                "tanggal" => "2006-05-03",
            ],
            [
                "nomor" => "501000003895",
                "nama" => "LEMARI BESI",
                "tanggal" => "2006-09-18",
            ],
            [
                "nomor" => "501000003930",
                "nama" => "LEMARI BUKU  KCU",
                "tanggal" => "2006-09-29",
            ],
            [
                "nomor" => "501000003931",
                "nama" => "LEMARI 2 PINTU",
                "tanggal" => "2006-09-29",
            ],
            [
                "nomor" => "501000003932",
                "nama" => "MEJA KERJA KCU",
                "tanggal" => "2006-09-29",
            ],
            [
                "nomor" => "501000003933",
                "nama" => "MEJA   KERJA   WAKCU",
                "tanggal" => "2006-09-29",
            ],
            [
                "nomor" => "501000003951",
                "nama" => "SOUND SYSTEM",
                "tanggal" => "2006-10-13",
            ],
            [
                "nomor" => "501000005873",
                "nama" => "LEMARI FILLING CABINET",
                "tanggal" => "2004-10-26",
            ],
            [
                "nomor" => "501000005874",
                "nama" => "LEMARI FILLING CABINET",
                "tanggal" => "2004-10-26",
            ],
            [
                "nomor" => "501000005876",
                "nama" => "KURSI TAMU MEBEL KANTOR",
                "tanggal" => "2006-07-06",
            ],
            [
                "nomor" => "501000005877",
                "nama" => "KURSI TAMU MEBEL KANTOR",
                "tanggal" => "2006-07-06",
            ],
            [
                "nomor" => "501000005878",
                "nama" => "KURSI TAMU MEBEL KANTOR",
                "tanggal" => "2006-07-06",
            ],
            [
                "nomor" => "501000005879",
                "nama" => "KURSI TAMU MEBEL KANTOR",
                "tanggal" => "2006-07-06",
            ],
            [
                "nomor" => "501000005881",
                "nama" => "LEMARI BUKU",
                "tanggal" => "2006-11-30",
            ],
            [
                "nomor" => "501000005882",
                "nama" => "LEMARI BUKU",
                "tanggal" => "2006-11-30",
            ],
            [
                "nomor" => "501000005883",
                "nama" => "LEMARI BUKU",
                "tanggal" => "2006-11-30",
            ],
            [
                "nomor" => "501000005884",
                "nama" => "AIR  CONDITIONER",
                "tanggal" => "2006-11-28",
            ],
            [
                "nomor" => "501000005886",
                "nama" => "AIR  CONDITIONER",
                "tanggal" => "2006-11-28",
            ],
            [
                "nomor" => "501000005888",
                "nama" => "AIR  CONDITIONER",
                "tanggal" => "2006-11-28",
            ],
            [
                "nomor" => "501000005890",
                "nama" => "POMPA  AIR",
                "tanggal" => "2006-12-08",
            ],
            [
                "nomor" => "501000005891",
                "nama" => "POMPA  AIR",
                "tanggal" => "2006-12-08",
            ],
            [
                "nomor" => "501000005914",
                "nama" => "MEJA KERJA  KEPALA SEKSI",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005915",
                "nama" => "MEJA KERJA  KEPALA SEKSI",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005916",
                "nama" => "MEJA KERJA  KEPALA SEKSI",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005917",
                "nama" => "MEJA KERJA  KEPALA SEKSI",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005919",
                "nama" => "MEJA KERJA  KEPALA SEKSI",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005923",
                "nama" => "MEJA KERJA  KEPALA SEKSI",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005924",
                "nama" => "MEJA KERJA  KEPALA  BIDANG",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005925",
                "nama" => "MEJA KERJA  KEPALA  BIDANG",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005926",
                "nama" => "MEJA KERJA  KEPALA  BIDANG",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005945",
                "nama" => "NAKAS  ( LACI  SUSUN 3 ) PELAKSANA",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005946",
                "nama" => "NAKAS  ( LACI  SUSUN 3 ) PELAKSANA",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005947",
                "nama" => "NAKAS  ( LACI  SUSUN 3 ) PELAKSANA",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005948",
                "nama" => "NAKAS  ( LACI  SUSUN 3 ) PELAKSANA",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005949",
                "nama" => "NAKAS  ( LACI  SUSUN 3 ) PELAKSANA",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005950",
                "nama" => "NAKAS  ( LACI  SUSUN 3 ) PELAKSANA",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005985",
                "nama" => "Nakas (Laci susun 3) Pejabat",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005986",
                "nama" => "NAKAS  ( LACI  SUSUN 3 )  PEJABAT",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005987",
                "nama" => "NAKAS  ( LACI  SUSUN 3 )  PEJABAT",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005989",
                "nama" => "NAKAS  ( LACI  SUSUN 3 )  PEJABAT",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005990",
                "nama" => "Nakas (Laci susun 3) Pejabat",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005991",
                "nama" => "NAKAS  ( LACI  SUSUN 3 )  PEJABAT",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005992",
                "nama" => "Nakas (Laci susun 3) Pejabat",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005993",
                "nama" => "NAKAS  ( LACI  SUSUN 3 )  PEJABAT",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "501000005994",
                "nama" => "NAKAS  ( LACI  SUSUN 3 )  PEJABAT",
                "tanggal" => "2007-09-08",
            ],
            [
                "nomor" => "903000000391",
                "nama" => "AC SPLIT 0.5 PK",
                "tanggal" => "2007-11-22",
            ],
            [
                "nomor" => "903000000392",
                "nama" => "AC SPLIT 0.5 PK",
                "tanggal" => "2007-11-22",
            ],
            [
                "nomor" => "903000000447",
                "nama" => "AC SPLIT 1.5 PK",
                "tanggal" => "2008-02-05",
            ],
            [
                "nomor" => "903000000478",
                "nama" => "AC SPLIT 1.5 PK",
                "tanggal" => "2008-04-14",
            ],
            [
                "nomor" => "903000000663",
                "nama" => "AC SPLIT 1 PK",
                "tanggal" => "2008-11-03",
            ],
        ];

        foreach ($assets as $asset) {
            Aset::create($asset);
        }
    }
}
