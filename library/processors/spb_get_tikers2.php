<?php
setlocale(LC_ALL, 'ru_RU.utf8');


// $sourceFile = '../../data_sources/spb_exchange/ListingSecurityList.csv';

// $content = file_get_contents($sourceFile);
// $content = mb_convert_encoding($content,  'utf-8', 'ccp1251');
// echo($content);

//
// $row = 1;
// if (($handle = fopen($sourceFile, "r")) !== FALSE) {
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         $num = count($data);
//         echo "$num полей в строке $row:\n";
//         $row++;
//         for ($c = 0; $c < $num; $c++) {
//             echo $data[$c] . "\n";
//         }
//     }
//     fclose($handle);
// }

$a = <<< TEXT
A	Agilent Technologies, Inc.	US00846U1016
AA	Alcoa Corporation	US0138721065
AAL	American Airlines Group Inc.	US02376R1023
AAN	The Aaron's Company, Inc.	US00258W1080
AAON	AAON, Inc.	US0003602069
AAP	Advance Auto Parts, Inc.	US00751Y1064
AAPL	Apple Inc.	US0378331005
AAXN	Axon Enterprise, Inc.	US05464C1018
ABBV	AbbVie Inc.	US00287Y1091
ABC	AmerisourceBergen Corporation	US03073E1055
ABG	Asbury Automotive Group, Inc.	US0434361046
ABMD	ABIOMED, Inc.	US0036541003
ABNB	Airbnb, Inc.	US0090661010
ABT	Abbott Laboratories	US0028241000
ACAD	ACADIA Pharmaceuticals Inc.	US0042251084
ACH	The Bank of New York Mellon	US0222761092
ACIA	Acacia Communications, Inc.	US00401C1080
ACIW	ACI Worldwide, Inc.	US0044981019
ACM	AECOM	US00766T1007
ACMR	ACM Research, Inc. Class A	US00108J1097
ACN	Accenture plc	IE00B4BNMY34
ADBE	Adobe Inc.	US00724F1012
ADI	Analog Devices, Inc.	US0326541051
ADM	Archer-Daniels-Midland Company	US0394831020
ADP	Automatic Data Processing, Inc.	US0530151036
ADPT	Adaptive Biotechnologies Corporation	US00650F1093
ADS	Alliance Data Systems Corporation	US0185811082
ADS@DE	adidas AG	DE000A1EWWW0
ADSK	Autodesk, Inc.	US0527691069
ADUS	Addus HomeCare Corporation	US0067391062
AEE	Ameren Corporation	US0236081024
AEIS	Advanced Energy Industries, Inc.	US0079731008
AEO	American Eagle Outfitters, Inc.	US02553E1064
AERI	Aerie Pharmaceuticals, Inc.	US00771V1089
AES	The AES Corporation	US00130H1059
AFG	American Financial Group, Inc.	US0259321042
AFL	Aflac Incorporated	US0010551028
AFX@DE	Carl-Zeiss Meditec AG	DE0005313704
AGCO	AGCO Corporation	US0010841023
AGIO	Agios Pharmaceuticals, Inc.	US00847X1046
AIG	American International Group, Inc.	US0268747849
AIN	Albany International Corp. Class A	US0123481089
AIR	AAR CORP.	US0003611052
AIRC	Apartment Income REIT Corp.	US03750L1098
AIT	Applied Industrial Technologies, Inc.	US03820C1053
AIV	Apartment Investment & Management Company	US03748R7474
AIZ	Assurant, Inc.	US04621X1081
AJG	Arthur J. Gallagher & Co.	US3635761097
AJRD	Aerojet Rocketdyne Holdings, Inc.	US0078001056
AKAM	Akamai Technologies, Inc.	US00971T1016
ALB	Albemarle Corporation	US0126531013
ALE	ALLETE, Inc.	US0185223007
ALG	Alamo Group Inc.	US0113111076
ALGN	Align Technology, Inc.	US0162551016
ALGT	Allegiant Travel Company	US01748X1028
ALK	Alaska Air Group, Inc.	US0116591092
ALL	The Allstate Corporation	US0200021014
ALLE	Allegion Public Limited Company	IE00BFRT3W74
ALLK	Allakos Inc.	US01671P1003
ALLO	Allogene Therapeutics, Inc.	US0197701065
ALLY	Ally Financial Inc.	US02005N1000
ALNY	Alnylam Pharmaceuticals, Inc.	US02043Q1076
ALRM	Alarm.com Holdings, Inc.	US0116421050
ALSN	Allison Transmission Holdings, Inc.	US01973R1014
ALTR	Altair Engineering Inc.	US0213691035
ALV	Autoliv, Inc.	US0528001094
ALV@DE	Allianz SE	DE0008404005
ALXN	Alexion Pharmaceuticals, Inc.	US0153511094
AMAT	Applied Materials, Inc.	US0382221051
AMCX	AMC Networks Inc.	US00164V1035
AMD	Advanced Micro Devices, Inc.	US0079031078
AME	AMETEK, Inc.	US0311001004
AMED	Amedisys, Inc.	US0234361089
AMG	Affiliated Managers Group, Inc.	US0082521081
AMGN	Amgen Inc.	US0311621009
AMN	AMN Healthcare Services, Inc.	US0017441017
AMP	Ameriprise Financial, Inc.	US03076C1062
AMSF	AMERISAFE, Inc.	US03071H1005
AMT	American Tower Corporation	US03027X1000
AMWD	American Woodmark Corporation	US0305061097
AMZN	Amazon.com, Inc.	US0231351067
AN	AutoNation, Inc.	US05329W1027
ANAB	AnaptysBio, Inc.	US0327241065
ANDE	The Andersons, Inc.	US0341641035
ANET	Arista Networks, Inc.	US0404131064
ANF	Abercrombie & Fitch Co.	US0028962076
ANGI	ANGI Homeservices Inc.	US00183L1026
ANIK	Anika Therapeutics, Inc.	US0352551081
ANIP	ANI Pharmaceuticals, Inc.	US00182C1036
ANSS	ANSYS, Inc.	US03662Q1058
ANTM	Anthem, Inc.	US0367521038
AON	Aon plc	IE00BLP1HW54
AOS	A. O. Smith Corporation	US8318652091
AOUT	American Outdoor Brands, Inc.	US02875D1090
APA	APA Corporation	US03743Q1085
APD	Air Products & Chemicals, Inc.	US0091581068
APEI	American Public Education, Inc.	US02913V1035
APH	Amphenol Corporation	US0320951017
APLE	Apple Hospitality REIT, Inc.	US03784Y2000
APLT	Applied Therapeutics, Inc.	US03828A1016
APPF	AppFolio, Inc.	US03783C1009
APPN	Appian Corporation	US03782L1017
APPS	Digital Turbine, Inc.	US25400W1027
APTV	Aptiv PLC 	JE00B783TY65
ARCC	Ares Capital Corporation	US04010L1035
ARCT	Arcturus Therapeutics Holdings Inc.	US03969T1097
ARE	Alexandria Real Estate Equities, Inc.	US0152711091
ARMK	Aramark	US03852U1060
ARNA	Arena Pharmaceuticals, Inc.	US0400476075
ARNC	Arconic Corporation	US03966V1070
ARQT	Arcutis Biotherapeutics, Inc.	US03969K1088
ARVN	Arvinas, Inc.	US04335A1051
ARW	Arrow Electronics, Inc.	US0427351004
ARWR	Arrowhead Pharmaceuticals, Inc.	US04280A1007
ASGN	ASGN Incorporated	US00191U1025
ASH	Ashland Global Holdings Inc.	US0441861046
ASIX	AdvanSix Inc.	US00773T1016
ATEX	Anterix Inc.	US03676C1009
ATGE	Adtalem Global Education Inc.	US00737L1035
ATKR	Atkore International Group Inc.	US0476491081
ATNI	ATN International, Inc.	US00215F1075
ATR	AptarGroup, Inc.	US0383361039
ATRA	Atara Biotherapeutics, Inc.	US0465131078
ATRC	AtriCure, Inc.	US04963C2098
ATRI	Atrion Corporation	US0499041053
ATRO	Astronics Corporation	US0464331083
ATUS	Altice USA, Inc.	US02156K1034
ATVI	Activision Blizzard, Inc.	US00507V1098
AVA	Avista Corporation	US05379B1070
AVAV	AeroVironment, Inc.	US0080731088
AVB	AvalonBay Communities, Inc.	US0534841012
AVGO	Broadcom Inc.	US11135F1012
AVLR	Avalara, Inc.	US05338G1067
AVNS	Avanos Medical, Inc.	US05350V1061
AVNT	Avient Corporation	US05368V1061
AVT	Avnet, Inc.	US0538071038
AVTR	Avantor, Inc.	US05352A1007
AVY	Avery Dennison Corporation	US0536111091
AWI	Armstrong World Industries, Inc.	US04247X1028
AWK	American Water Works Company, Inc.	US0304201033
AWR	American States Water Company	US0298991011
AX	Axos Financial, Inc.	US05465C1009
AXE	Anixter International Inc.	US0352901054
AXGN	Axogen, Inc.	US05463X1063
AXP	American Express Company	US0258161092
AXSM	Axsome Therapeutics, Inc.	US05464T1043
AYI	Acuity Brands, Inc.	US00508Y1029
AYX	Alteryx, Inc.	US02156B1035
AZO	AutoZone, Inc.	US0533321024
AZPN	Aspen Technology, Inc.	US0453271035
BA	THE BOEING COMPANY	US0970231058
BABA	Citibank, N.A.	US01609W1027
BAC	Bank of America Corporation	US0605051046
BAH	Booz Allen Hamilton Holding Corporation	US0995021062
BAND	Bandwidth Inc.	US05988J1034
BAS@DE	BASF SE	DE000BASF111
BAX	Baxter International Inc.	US0718131099
BAYN@DE	Bayer Aktiengesellschaft	DE000BAY0017
BBBY	Bed Bath & Beyond Inc.	US0758961009
BBIO	BridgeBio Pharma, Inc.	US10806X1028
BBSI	Barrett Business Services, Inc.	US0684631080
BBY	Best Buy Co., Inc.	US0865161014
BC	Brunswick Corporation	US1170431092
BCO	The Brink's Company	US1096961040
BCPC	Balchem Corporation	US0576652004
BDC	Belden Inc.	US0774541066
BDTX	Black Diamond Therapeutics, Inc.	US09203E1055
BDX	Becton, Dickinson and Company	US0758871091
BEAT	BioTelemetry, Inc.	US0906721065
BECN	Beacon Roofing Supply, Inc.	US0736851090
BEN	Franklin Resources, Inc.	US3546131018
BERY	Berry Global Group, Inc.	US08579W1036
BF/B	Brown-Forman Corporation	US1156372096
BFAM	Bright Horizons Family Solutions Inc.	US1091941005
BFYT	Benefytt Technologies, Inc.	US08182C1062
BGS	B&G Foods, Inc.	US05508R1068
BH	Biglari Holdings Inc.	US08986R3093
BHF	Brighthouse Financial, Inc.	US10922N1037
BIDU	The Bank of New York Mellon	US0567521085
BIG	Big Lots, Inc.	US0893021032
BIIB	Biogen Inc.	US09062X1037
BILI	Deutsche Bank Trust Company Americas	US0900401060
BILL	Bill.com Holdings, Inc.	US0900431000
BIO	Bio-Rad Laboratories, Inc.	US0905722072
BJ	BJ's Wholesale Club Holdings, Inc.	US05550J1016
BJRI	BJ's Restaurants, Inc.	US09180C1062
BK	The Bank of New York Mellon Corporation	US0640581007
BKI	Black Knight, Inc.	US09215C1053
BKNG	Booking Holdings Inc.	US09857L1089
BKR	Baker Hughes Company	US05722G1004
BKU	BankUnited, Inc.	US06652K1034
BL	BlackLine, Inc.	US09239B1098
BLD	TopBuild Corp.	US89055F1030
BLDR	Builders FirstSource, Inc.	US12008R1077
BLK	BlackRock, Inc.	US09247X1019
BLKB	Blackbaud, Inc.	US09227Q1004
BLL	Ball Corporation	US0584981064
BLMN	Bloomin' Brands, Inc.	US0942351083
BLUE	bluebird bio, Inc.	US09609G1004
BMCH	BMC Stock Holdings, Inc.	US05591B1098
BMI	Badger Meter, Inc.	US0565251081
BMRN	BioMarin Pharmaceutical Inc.	US09061G1013
BMW@DE	Bayerische Motoren Werke AG	DE0005190003
BMY	Bristol-Myers Squibb Company	US1101221083
BOH	Bank of Hawaii Corporation	US0625401098
BOKF	BOK Financial Corporation	US05561Q2012
BOLD	Audentes Therapeutics, Inc.	US05070R1041
BOOT	Boot Barn Holdings, Inc.	US0994061002
BOSS@DE	HUGO BOSS AG	DE000A1PHFF7
BOX	Box, Inc.	US10316T1043
BPMC	Blueprint Medicines Corporation	US09627Y1091
BR	Broadridge Financial Solutions, Inc.	US11133T1034
BRC	Brady Corporation	US1046741062
BRK/B	Berkshire Hathaway Inc.	US0846707026
BRKR	Bruker Corporation	US1167941087
BRKS	Brooks Automation, Inc.	US1143401024
BRO	Brown & Brown, Inc.	US1152361010
BRX	Brixmor Property Group Inc.	US11120U1051
BSX	Boston Scientific Corporation	US1011371077
BTAI	BioXcel Therapeutics, Inc.	US09075P1057
BTI	Citibank, N.A.	US1104481072
BUD	The Bank of New York Mellon	US03524A1088
BURL	Burlington Stores, Inc.	US1220171060
BVB@DE	Borussia Dortmund GmbH & Co. Kommanditgesellschaft auf Aktien	DE0005493092
BWA	BorgWarner Inc.	US0997241064
BWXT	BWX Technologies, Inc.	US05605H1005
BX	The Blackstone Group Inc. Class A	US09260D1072
BXP	Boston Properties, Inc.	US1011211018
BYND	Beyond Meat, Inc.	US08862E1091
BZUN	JPMorgan Chase Bank, N.A.	US06684L1035
C	Citigroup Inc.	US1729674242
CABO	Cable One, Inc.	US12685J1051
CACC	Credit Acceptance Corporation	US2253101016
CAG	Conagra Brands, Inc.	US2058871029
CAH	Cardinal Health, Inc.	US14149Y1082
CALM	Cal-Maine Foods, Inc.	US1280302027
CARA	Cara Therapeutics, Inc.	US1407551092
CARG	CarGurus, Inc.	US1417881091
CARR	Carrier Global Corporation	US14448C1045
CARS	Cars.com Inc.	US14575E1055
CASY	Casey's General Stores, Inc.	US1475281036
CAT	Caterpillar Inc.	US1491231015
CB	Chubb Limited	CH0044328745
CBPO	China Biologic Products Holdings, Inc.	KYG215151047
CBPX	Continental Building Products, Inc.	US2111711030
CBRE	CBRE Group, Inc.	US12504L1098
CBRL	Cracker Barrel Old Country Store, Inc.	US22410J1060
CBSH	Commerce Bancshares, Inc.	US2005251036
CBU	Community Bank System, Inc.	US2036071064
CC	The Chemours Company	US1638511089
CCI	Crown Castle International Corp.	US22822V1017
CCK	Crown Holdings, Inc.	US2283681060
CCL	Carnival Corporation	PA1436583006
CCMP	CMC Materials, Inc.	US12571T1007
CCOI	Cogent Communications Holdings, Inc.	US19239V3024
CCXI	ChemoCentryx, Inc.	US16383L1061
CDK	CDK Global, Inc.	US12508E1010
CDLX	Cardlytics, Inc.	US14161W1053
CDNA	CareDx, Inc.	US14167L1035
CDNS	Cadence Design Systems, Inc.	US1273871087
CDW	CDW Corporation	US12514G1085
CE	Celanese Corporation	US1508701034
CEA	The Bank of New York Mellon	US16937R1041
CENT	Central Garden & Pet Company	US1535271068
CENTA	Central Garden & Pet Company	US1535272058
CERN	Cerner Corporation	US1567821046
CEVA	CEVA, Inc.	US1572101053
CF	CF Industries Holdings, Inc.	US1252691001
CFG	Citizens Financial Group, Inc.	US1746101054
CFR	Cullen/Frost Bankers, Inc.	US2298991090
CFX	Colfax Corporation	US1940141062
CGEN	Compugen Ltd.	IL0010852080
CGNT	Cognyte Software Ltd.	IL0011691438
CGNX	Cognex Corporation	US1924221039
CHCO	City Holding Company	US1778351056
CHD	Church & Dwight Co., Inc.	US1713401024
CHDN	Churchill Downs Incorporated	US1714841087
CHE	Chemed Corporation	US16359R1032
CHEF	The Chefs’ Warehouse, Inc.	US1630861011
CHGG	Chegg, Inc.	US1630921096
CHH	Choice Hotels International, Inc.	US1699051066
CHK	Chesapeake Energy Corporation	US1651677437
CHKP	Check Point Software Technologies Ltd.	IL0010824113
CHNG	Change Healthcare Inc.	US15912K1007
CHRW	C.H. Robinson Worldwide, Inc.	US12541W2098
CHTR	Charter Communications, Inc.	US16119P1084
CHWY	Chewy, Inc.	US16679L1098
CHX	ChampionX Corporation	US15872M1045
CI	Cigna Corporation	US1255231003
CIEN	Ciena Corporation	US1717793095
CINF	Cincinnati Financial Corporation	US1720621010
CL	Colgate-Palmolive Company	US1941621039
CLDR	Cloudera, Inc.	US18914U1007
CLDT	Chatham Lodging Trust	US16208T1025
CLF	Cleveland-Cliffs Inc.	US1858991011
CLGX	CoreLogic, Inc.	US21871D1037
CLH	Clean Harbors, Inc.	US1844961078
CLR	Continental Resources, Inc.	US2120151012
CLX	The Clorox Company	US1890541097
CMA	Comerica Incorporated	US2003401070
CMC	Commercial Metals Company	US2017231034
CMCO	Columbus McKinnon Corporation	US1993331057
CMCSA	Comcast Corporation	US20030N1019
CMD	Cantel Medical Corp.	US1380981084
CME	CME Group Inc.	US12572Q1058
CMG	Chipotle Mexican Grill, Inc.	US1696561059
CMI	Cummins Inc.	US2310211063
CMP	Compass Minerals International, Inc.	US20451N1019
CMS	CMS Energy Corporation	US1258961002
CNC	Centene Corporation	US15135B1017
CNK	Cinemark Holdings, Inc.	US17243V1026
CNMD	CONMED Corporation	US2074101013
CNP	CenterPoint Energy, Inc.	US15189T1079
CNS	Cohen & Steers, Inc.	US19247A1007
CNST	Constellation Pharmaceuticals, Inc.	US2103731061
CNX	CNX Resources Corporation	US12653C1080
CNXC	Concentrix Corporation	US20602D1019
CNXN	PC Connection, Inc.	US69318J1007
COF	Capital One Financial Corporation	US14040H1059
COFS	ChoiceOne Financial Services, Inc.	US1703861062
COG	Cabot Oil & Gas Corporation	US1270971039
COHR	Coherent, Inc.	US1924791031
COIN	Coinbase Global, Inc. 	US19260Q1076
COKE	Coca-Cola Consolidated, Inc.	US1910981026
COLD	Americold Realty Trust	US03064D1081
COLM	Columbia Sportswear Company	US1985161066
CON@DE	Continental Aktiengesellschaft	DE0005439004
CONE	CyrusOne Inc.	US23283R1005
COO	The Cooper Companies, Inc.	US2166484020
COP	ConocoPhillips	US20825C1045
COR	CoreSite Realty Corporation	US21870Q1058
CORR	CorEnergy Infrastructure Trust, Inc.	US21870U5020
CORT	Corcept Therapeutics Incorporated	US2183521028
COST	Costco Wholesale Corporation	US22160K1051
COTY	Coty Inc.	US2220702037
COUP	Coupa Software Incorporated	US22266L1061
COUR	Coursera, Inc.	US22266M1045
CPB	Campbell Soup Company	US1344291091
CPNG	Coupang, Inc.	US22266T1097
CPRI	Capri Holdings Limited	VGG1890L1076
CPRT	Copart, Inc.	US2172041061
CPS	Cooper-Standard Holdings Inc.	US21676P1030
CR	Crane Co.	US2243991054
CREE	Cree, Inc.	US2254471012
CRI	Carter's, Inc.	US1462291097
CRL	Charles River Laboratories International, Inc.	US1598641074
CRM	salesforce.com, inc.	US79466L3024
CRMT	America’s Car-Mart, Inc.	US03062T1051
CROX	Crocs, Inc.	US2270461096
CRS	Carpenter Technology Corporation	US1442851036
CRTX	Cortexyme, Inc.	US22053A1079
CRUS	Cirrus Logic, Inc.	US1727551004
CRVL	CorVel Corporation	US2210061097
CRWD	CrowdStrike Holdings, Inc.	US22788C1053
CSCO	Cisco Systems, Inc.	US17275R1023
CSGP	CoStar Group, Inc.	US22160N1090
CSGS	CSG Systems International, Inc.	US1263491094
CSII	Cardiovascular Systems, Inc.	US1416191062
CSL	Carlisle Companies Incorporated	US1423391002
CSOD	Cornerstone OnDemand, Inc.	US21925Y1038
CSWI	CSW Industrials, Inc.	US1264021064
CSX	CSX Corporation	US1264081035
CTAS	Cintas Corporation	US1729081059
CTB	Cooper Tire & Rubber Company	US2168311072
CTLT	Catalent, Inc.	US1488061029
CTSH	Cognizant Technology Solutions Corporation	US1924461023
CTVA	Corteva, Inc.	US22052L1044
CTXS	Citrix Systems, Inc.	US1773761002
CVCO	Cavco Industries, Inc.	US1495681074
CVET	Covetrus, Inc.	US22304C1009
CVGW	Calavo Growers, Inc.	US1282461052
CVLT	Commvault Systems, Inc.	US2041661024
CVNA	Carvana Co.	US1468691027
CVS	CVS Health Corporation	US1266501006
CVX	Chevron Corporation	US1667641005
CW	Curtiss-Wright Corporation	US2315611010
CWST	Casella Waste Systems, Inc. Class A	US1474481041
CWT	California Water Service Group	US1307881029
CXO	Concho Resources Inc.	US20605P1012
D	Dominion Energy, Inc.	US25746U1097
DAL	Delta Air Lines, Inc.	US2473617023
DAR	Darling Ingredients Inc.	US2372661015
DASH	DoorDash, Inc. Class A	US25809K1051
DB1@DE	Deutsche Boerse Aktiengesellschaft	DE0005810055
DBK@DE	Deutsche Bank Aktiengesellschaft	DE0005140008
DBX	Dropbox, Inc.	US26210C1045
DCI	Donaldson Company, Inc.	US2576511099
DCPH	Deciphera Pharmaceuticals, Inc.	US24344T1016
DD	DuPont de Nemours, Inc.	US26614N1028
DDOG	Datadog, Inc.	US23804L1035
DDS	Dillard's, Inc.	US2540671011
DE	Deere & Company	US2441991054
DECK	Deckers Outdoor Corporation	US2435371073
DELL	Dell Technologies Inc.	US24703L2025
DFS	Discover Financial Services	US2547091080
DG	Dollar General Corporation	US2566771059
DGX	Quest Diagnostics Incorporated	US74834L1008
DHER@DE	Delivery Hero SE	DE000A2E4K43
DHI	D.R. Horton, Inc.	US23331A1097
DHR	Danaher Corporation	US2358511028
DIOD	Diodes Incorporated	US2545431015
DIS	The Walt Disney Company	US2546871060
DISCA	Discovery, Inc.	US25470F1049
DISCB	Discovery, Inc.	US25470F2039
DISCK	Discovery, Inc.	US25470F3029
DISH	DISH Network Corporation	US25470M1099
DK	Delek US Holdings, Inc.	US24665A1034
DKNG	DraftKings Inc.	US26142R1041
DKS	Dick's Sporting Goods, Inc.	US2533931026
DLB	Dolby Laboratories, Inc.	US25659T1079
DLR	Digital Realty Trust, Inc.	US2538681030
DLTH	Duluth Holdings Inc. ClassB	US26443V1017
DLTR	Dollar Tree, Inc.	US2567461080
DLX	Deluxe Corporation	US2480191012
DNKN	Dunkin' Brands Group, Inc.	US2655041000
DNLI	Denali Therapeutics Inc.	US24823R1059
DNOW	NOW Inc.	US67011P1003
DOCU	DocuSign, Inc.	US2561631068
DORM	Dorman Products, Inc.	US2582781009
DOV	Dover Corporation	US2600031080
DOW	Dow Inc.	US2605571031
DPW@DE	Deutsche Post AG	DE0005552004
DPZ	Domino’s Pizza, Inc.	US25754A2015
DRE	Duke Realty Corporation	US2644115055
DRI	Darden Restaurants, Inc.	US2371941053
DRNA	Dicerna Pharmaceuticals, Inc.	US2530311081
DRQ	Dril-Quip, Inc.	US2620371045
DT	Dynatrace, Inc.	US2681501092
DTE@DE	Deutsche Telekom AG	DE0005557508
DVA	DaVita Inc.	US23918K1088
DVN	Devon Energy Corporation	US25179M1036
DWNI@DE	Deutsche Wohnen SE	DE000A0HN5C6
DXC	DXC Technology Company	US23355L1061
DXCM	DexCom, Inc.	US2521311074
DY	Dycom Industries, Inc.	US2674751019
EA	Electronic Arts Inc.	US2855121099
EAT	Brinker International, Inc.	US1096411004
EBAY	eBay Inc.	US2786421030
EBS	Emergent BioSolutions Inc.	US29089Q1058
ECHO	Echo Global Logistics, Inc.	US27875T1016
ECL	Ecolab Inc.	US2788651006
ECPG	Encore Capital Group, Inc.	US2925541029
ED	Consolidated Edison, Inc.	US2091151041
EDIT	Editas Medicine, Inc.	US28106W1036
EEFT	Euronet Worldwide, Inc.	US2987361092
EFX	Equifax Inc.	US2944291051
EGHT	8x8, Inc.	US2829141009
EGP	EastGroup Properties, Inc.	US2772761019
EGRX	Eagle Pharmaceuticals, Inc.	US2697961082
EHTH	eHealth, Inc.	US28238P1093
EIX	Edison International	US2810201077
EL	The Estee Lauder Companies Inc.	US5184391044
ELAN	Elanco Animal Health Incorporated	US28414H1032
ELS	Equity LifeStyle Properties, Inc.	US29472R1086
EME	EMCOR Group, Inc.	US29084Q1004
EMN	Eastman Chemical Company	US2774321002
EMR	Emerson Electric Co.	US2910111044
ENDP	Endo International PLC	IE00BJ3V9050
ENPH	Enphase Energy, Inc.	US29355A1079
ENR	Energizer Holdings, Inc.	US29272W1099
ENS	EnerSys	US29275Y1029
ENSG	The Ensign Group, Inc.	US29358P1012
ENTA	Enanta Pharmaceuticals, Inc.	US29251M1062
ENTG	Entegris, Inc.	US29362U1043
ENV	Envestnet, Inc.	US29404K1060
EOAN@DE	E.ON SE	DE000ENAG999
EOG	EOG Resources, Inc.	US26875P1012
EPAM	EPAM Systems, Inc.	US29414B1044
EPAY	Bottomline Technologies (de), Inc.	US1013881065
EPC	Edgewell Personal Care Company	US28035Q1022
EQIX	Equinix, Inc.	US29444U7000
EQT	EQT Corporation	US26884L1098
ERIE	Erie Indemnity Company	US29530P1021
ES	Eversource Energy	US30040W1080
ESE	ESCO Technologies Inc.	US2963151046
ESPR	Esperion Therapeutics, Inc.	US29664W1053
ESS	Essex Property Trust, Inc.	US2971781057
ET	Energy Transfer LP	US29273V1008
ETN	Eaton Corporation plc	IE00B8KQN827
ETR	Entergy Corporation	US29364G1031
ETRN	Equitrans Midstream Corporation	US2946001011
ETSY	Etsy, Inc.	US29786A1060
EV	Eaton Vance Corp.	US2782651036
EVBG	Everbridge, Inc.	US29978A1043
EVER	EverQuote, Inc. Class A	US30041R1086
EVH	Evolent Health, Inc.	US30050B1017
EVK@DE	Evonik Industries AG	DE000EVNK013
EVR	Evercore Inc.	US29977A1051
EVRG	Evergy, Inc.	US30034W1062
EVT@DE	Evotec SE	DE0005664809
EW	Edwards Lifesciences Corporation	US28176E1082
EWBC	East West Bancorp, Inc.	US27579R1041
EXAS	Exact Sciences Corporation	US30063P1057
EXC	Exelon Corporation	US30161N1019
EXEL	Exelixis, Inc.	US30161Q1040
EXLS	ExlService Holdings, Inc.	US3020811044
EXP	Eagle Materials Inc.	US26969P1084
EXPD	Expeditors International of Washington, Inc.	US3021301094
EXPE	Expedia Group, Inc.	US30212P3038
EXPO	Exponent, Inc.	US30214U1025
EXR	Extra Space Storage Inc.	US30225T1025
EYE	National Vision Holdings, Inc.	US63845R1077
F	Ford Motor Company	US3453708600
FANG	Diamondback Energy, Inc.	US25278X1090
FARO	FARO Technologies, Inc.	US3116421021
FAST	Fastenal Company	US3119001044
FATE	Fate Therapeutics, Inc.	US31189P1021
FB	Facebook, Inc.	US30303M1027
FBHS	Fortune Brands Home & Security, Inc.	US34964C1062
FCFS	FirstCash, Inc.	US33767D1054
FCN	FTI Consulting, Inc.	US3029411093
FCNCA	First Citizens BancShares, Inc. Class A	US31946M1036
FCX	Freeport-McMoRan Inc.	US35671D8570
FDS	FactSet Research Systems Inc.	US3030751057
FDX	FedEx Corporation	US31428X1063
FELE	Franklin Electric Co., Inc.	US3535141028
FFIN	First Financial Bankshares, Inc.	US32020R1095
FFIV	F5 Networks, Inc.	US3156161024
FGEN	FibroGen, Inc.	US31572Q8087
FICO	Fair Isaac Corporation	US3032501047
FIS	Fidelity National Information Services, Inc.	US31620M1062
FISV	Fiserv, Inc.	US3377381088
FITB	Fifth Third Bancorp	US3167731005
FIVE	Five Below, Inc.	US33829M1018
FIVE@GS	X5 Retail Group N.V., GDR	US98387E2054
FIVN	Five9, Inc.	US3383071012
FIXP	Fix Price Group Ltd	US33835G2057
FIZZ	National Beverage Corp.	US6350171061
FL	Foot Locker, Inc.	US3448491049
FLIR	FLIR Systems, Inc.	US3024451011
FLO	Flowers Foods, Inc.	US3434981011
FLOW	SPX FLOW, Inc.	US78469X1072
FLR	Fluor Corporation	US3434121022
FLS	Flowserve Corporation	US34354P1057
FLT	FleetCor Technologies, Inc.	US3390411052
FLWS	1-800-FLOWERS.COM, Inc.	US68243Q1067
FMC	FMC Corporation	US3024913036
FME@DE	Fresenius Medical Care AG & Co. KGaA	DE0005785802
FND	Floor & Decor Holdings, Inc.	US3397501012
FNF	Fidelity National Financial, Inc.	US31620R3030
FNKO	Funko, Inc.	US3610081057
FOCS	Focus Financial Partners Inc.	US34417P1003
FOE	Ferro Corporation	US3154051003
FOLD	Amicus Therapeutics, Inc.	US03152W1099
FORM	FormFactor, Inc.	US3463751087
FORR	Forrester Research, Inc.	US3465631097
FOX	Fox Corporation	US35137L2043
FOXA	Fox Corporation	US35137L1052
FOXF	Fox Factory Holding Corp.	US35138V1026
FRE@DE	Fresenius SE & Co. KGaA	DE0005785604
FRHC	Freedom Holding Corp.	US3563901046
FRPH	FRP Holdings, Inc.	US30292L1070
FRPT	Freshpet, Inc.	US3580391056
FSCT	Forescout Technologies, Inc.	US34553D1019
FSLR	First Solar, Inc.	US3364331070
FSLY	Fastly, Inc.	US31188V1008
FTCH	Farfetch Limited	KY30744W1070
FTCI	FTC Solar, Inc.	US30320C1036
FTDR	frontdoor, inc.	US35905A1097
FTI	TechnipFMC plc	GB00BDSFG982
FTNT	Fortinet, Inc.	US34959E1091
FTR	Frontier Communications Corporation	US35906A3068
FTV	Fortive Corporation	US34959J1088
FUL	H.B. Fuller Company	US3596941068
FWRD	Forward Air Corporation	US3498531017
GATX	GATX Corporation	US3614481030
GBCI	Glacier Bancorp, Inc.	US37637Q1058
GBT	Global Blood Therapeutics, Inc.	US37890U1088
GBX	The Greenbrier Companies, Inc.	US3936571013
GCO	Genesco Inc.	US3715321028
GCP	GCP Applied Technologies Inc.	US36164Y1010
GD	General Dynamics Corporation	US3695501086
GDDY	GoDaddy Inc.	US3802371076
GDOT	Green Dot Corporation	US39304D1028
GE	General Electric Company	US3696041033
GEF	Greif, Inc.	US3976241071
GGG	Graco Inc.	US3841091040
GH	Guardant Health, Inc.	US40131M1099
GHC	Graham Holdings Company	US3846371041
GILD	GILEAD SCIENCES, INC.	US3755581036
GIS	General Mills, Inc.	US3703341046
GKOS	Glaukos Corporation	US3773221029
GLIBA	GCI Liberty, Inc.	US36164V3050
GLPI	Gaming and Leisure Properties, Inc.	US36467J1088
GLTR@GS	Globaltrans Investment PLC, GDR	US37949E2046
GLW	Corning Incorporated	US2193501051
GM	General Motors Company	US37045V1008
GMED	Globus Medical, Inc.	US3795772082
GMS	GMS Inc.	US36251C1036
GNL	Global Net Lease, Inc.	US3793782018
GNRC	Generac Holdings Inc.	US3687361044
GNTX	Gentex Corporation	US3719011096
GO	Grocery Outlet Holding Corp.	US39874R1014
GOOG	Alphabet Inc.	US02079K1079
GOOGL	Alphabet Inc.	US02079K3059
GOSS	Gossamer Bio, Inc.	US38341P1021
GPC	Genuine Parts Company	US3724601055
GPI	Group 1 Automotive, Inc.	US3989051095
GPN	Global Payments Inc.	US37940X1028
GPS	The Gap, Inc.	US3647601083
GRA	W.R. Grace & Co.	US38388F1084
GRMN	Garmin Ltd.	CH0114405324
GRUB	GrubHub Inc.	US4001101025
GS	The Goldman Sachs Group, Inc.	US38141G1040
GSH	JPMorgan Chase Bank, N.A.	US40065W1071
GSHD	Goosehead Insurance, Inc. Class A	US38267D1090
GSKY	GreenSky, Inc.	US39572G1004
GT	The Goodyear Tire & Rubber Company	US3825501014
GTHX	G1 Therapeutics, Inc.	US3621LQ1099
GTLS	Chart Industries, Inc.	US16115Q3083
GTN	Gray Television, Inc.	US3893751061
GTX	Garrett Motion Inc.	US3665051054
GVA	Granite Construction Incorporated	US3873281071
GWRE	Guidewire Software, Inc.	US40171V1008
GWW	W.W. Grainger, Inc.	US3848021040
H	Hyatt Hotels Corporation	US4485791028
HA	Hawaiian Holdings, Inc.	US4198791018
HAE	Haemonetics Corporation	US4050241003
HAIN	The Hain Celestial Group, Inc.	US4052171000
HAL	Halliburton Company	US4062161017
HALO	Halozyme Therapeutics, Inc.	US40637H1095
HAS	Hasbro, Inc.	US4180561072
HBAN	Huntington Bancshares Incorporated	US4461501045
HBI	Hanesbrands Inc.	US4103451021
HCA	HCA Healthcare, Inc.	US40412C1018
HCCI	Heritage-Crystal Clean, Inc.	US42726M1062
HCSG	Healthcare Services Group, Inc.	US4219061086
HD	The Home Depot, Inc.	US4370761029
HDS	HD Supply Holdings, Inc.	US40416M1053
HE	Hawaiian Electric Industries, Inc.	US4198701009
HEAR	Turtle Beach Corporation	US9004502061
HEI	HEICO Corporation	US4228061093
HEI@DE	HeidelbergCement AG	DE0006047004
HEN3@DE	Henkel AG & Co.	DE0006048432
HES	Hess Corporation	US42809H1077
HFC	HollyFrontier Corporation	US4361061082
HGV	Hilton Grand Vacations Inc.	US43283X1054
HHC	The Howard Hughes Corporation	US44267D1072
HHR	JPMorgan Chase Bank, N.A.	US42207L1061
HIBB	Hibbett Sports, Inc.	US4285671016
HIG	The Hartford Financial Services Group, Inc.	US4165151048
HII	Huntington Ingalls Industries, Inc.	US4464131063
HLI	Houlihan Lokey, Inc. Class A	US4415931009
HLNE	Hamilton Lane Incorporated Class A	US4074971064
HLT	Hilton Worldwide Holdings Inc.	US43300A2033
HNP	The Bank of New York Mellon	US4433041005
HOG	Harley-Davidson, Inc.	US4128221086
HOLX	Hologic, Inc.	US4364401012
HON	Honeywell International Inc.	US4385161066
HOT@DE	HOCHTIEF Aktiengesellschaft	DE0006070006
HP	Helmerich & Payne, Inc.	US4234521015
HPE	Hewlett Packard Enterprise Company	US42824C1099
HPQ	HP Inc.	US40434L1052
HQY	HealthEquity, Inc.	US42226A1079
HRB	H&R Block, Inc.	US0936711052
HRC	Hill-Rom Holdings, Inc.	US4314751029
HRL	Hormel Foods Corporation	US4404521001
HRTX	Heron Therapeutics, Inc.	US4277461020
HSC	Harsco Corporation	US4158641070
HSIC	Henry Schein, Inc.	US8064071025
HSKA	Heska Corporation	US42805E3062
HST	Host Hotels & Resorts, Inc.	US44107P1049
HSY	The Hershey Company	US4278661081
HTA	Healthcare Trust of America, Inc.	US42225P5017
HTHT	Citibank, N.A.	US44332N1063
HUBB	Hubbell Incorporated	US4435106079
HUBG	Hub Group, Inc.	US4433201062
HUBS	HubSpot, Inc.	US4435731009
HUM	Humana Inc.	US4448591028
HURN	Huron Consulting Group Inc.	US4474621020
HWM	Howmet Aerospace Inc.	US4432011082
HXL	Hexcel Corporation	US4282911084
IAA	IAA, Inc.	US4492531037
IAC	IAC/InterActiveCorp	US44891N1090
IART	Integra LifeSciences Holdings Corporation	US4579852082
IBKR	Interactive Brokers Group, Inc.	US45841N1072
IBM	International Business Machines Corporation	US4592001014
IBN	Deutsche Bank Trust Company Americas	US45104G1040
IBP	Installed Building Products, Inc.	US45780R1014
IBTX	Independent Bank Group, Inc.	US45384B1061
ICE	Intercontinental Exchange, Inc.	US45866F1049
ICFI	ICF International, Inc.	US44925C1036
ICPT	Intercept Pharmaceuticals, Inc.	US45845P1084
ICUI	ICU Medical, Inc.	US44930G1076
IDA	IDACORP, Inc.	US4511071064
IDCC	InterDigital, Inc.	US45867G1013
IDXX	IDEXX Laboratories, Inc.	US45168D1046
IEX	IDEX Corporation	US45167R1041
IFF	International Flavors & Fragrances Inc.	US4595061015
IFX@DE	Infineon Technologies AG	DE0006231004
IGMS	IGM Biosciences, Inc.	US4495851085
IIPR	Innovative Industrial Properties, Inc.	US45781V1017
IIVI	II-VI Incorporated	US9021041085
ILMN	Illumina, Inc.	US4523271090
INCY	Incyte Corporation	US45337C1027
INDB	Independent Bank Corp.	US4538361084
INFO	IHS Markit Ltd.	BMG475671050
INGN	Inogen, Inc.	US45780L1044
INGR	Ingredion Incorporated	US4571871023
INMD	InMode Ltd.	IL0011595993
INSP	Inspire Medical Systems, Inc.	US4577301090
INTC	Intel Corporation	US4581401001
INTU	Intuit Inc.	US4612021034
INVH	Invitation Homes Inc.	US46187W1071
IONS	Ionis Pharmaceuticals, Inc.	US4622221004
IOSP	Innospec Inc.	US45768S1050
IOVA	Iovance Biotherapeutics, Inc.	US4622601007
IP	International Paper Company	US4601461035
IPAR	Inter Parfums, Inc.	US4583341098
IPG	The Interpublic Group of Companies, Inc.	US4606901001
IPGP	IPG Photonics Corporation	US44980X1090
IPHI	Inphi Corporation	US45772F1075
IQV	IQVIA Holdings Inc.	US46266C1053
IR	Ingersoll Rand Inc.	US45687V1061
IRBT	iRobot Corporation	US4627261005
IRDM	Iridium Communications Inc.	US46269C1027
IRM	Iron Mountain Incorporated	US46284V1017
IRTC	iRhythm Technologies, Inc.	US4500561067
ISRG	Intuitive Surgical, Inc.	US46120E6023
IT	Gartner, Inc.	US3666511072
ITCI	Intra-Cellular Therapies, Inc.	US46116X1019
ITGR	Integer Holdings Corporation	US45826H1095
ITRI	Itron, Inc.	US4657411066
ITT	ITT Inc.	US45073V1089
ITW	Illinois Tool Works Inc.	US4523081093
IVZ	Invesco Ltd.	BMG491BT1088
JACK	Jack in the Box Inc.	US4663671091
JBHT	J.B. Hunt Transport Services, Inc.	US4456581077
JBL	Jabil Inc.	US4663131039
JBSS	John B. Sanfilippo & Son, Inc.	US8004221078
JBT	John Bean Technologies Corporation	US4778391049
JCI	Johnson Controls International plc	IE00BY7QL619
JCOM	j2 Global, Inc.	US48123V1026
JD	Deutsche Bank Trust Company Americas	US47215P1066
JEC	Jacobs Engineering Group Inc.	US4698141078
JEF	Jefferies Financial Group Inc.	US47233W1099
JELD	JELD-WEN Holding, Inc.	US47580P1030
JJSF	J & J Snack Foods Corp.	US4660321096
JKHY	Jack Henry & Associates, Inc.	US4262811015
JLL	Jones Lang LaSalle Incorporated	US48020Q1076
JNJ	Johnson & Johnson	US4781601046
JNPR	Juniper Networks, Inc.	US48203R1041
JOBS	JPMorgan Chase Bank, N.A.	US3168271043
JOUT	Johnson Outdoors Inc.	US4791671088
JPM	JPMorgan Chase & Co.	US46625H1005
JWN	Nordstrom, Inc.	US6556641008
K	Kellogg Company	US4878361082
KAI	Kadant Inc.	US48282T1043
KALU	Kaiser Aluminum Corporation	US4830077040
KAP@GS	Citibank, N.A.	US63253R2013
KBH	KB Home	US48666K1097
KDP	Keurig Dr Pepper Inc.	US49271V1008
KEP	Citibank, N.A.	US5006311063
KEX	Kirby Corporation	US4972661064
KEY	KeyCorp	US4932671088
KEYS	Keysight Technologies, Inc.	US49338L1035
KFY	Korn Ferry	US5006432000
KHC	The Kraft Heinz Company	US5007541064
KIDS	OrthoPediatrics Corp.	US68752L1008
KIM	Kimco Realty Corporation	US49446R1095
KKR	KKR & Co. Inc.	US48251W1045
KLAC	KLA Corporation	US4824801009
KMB	Kimberly-Clark Corporation	US4943681035
KMI	Kinder Morgan, Inc.	US49456B1017
KMPR	Kemper Corporation	US4884011002
KMT	Kennametal Inc.	US4891701009
KMX	CarMax, Inc.	US1431301027
KNSL	Kinsale Capital Group, Inc.	US49714P1084
KNX	Knight-Swift Transportation Holdings Inc.	US4990491049
KO	THE COCA-COLA COMPANY	US1912161007
KOD	Kodiak Sciences Inc.	US50015M1099
KR	The Kroger Co.	US5010441013
KRG	Kite Realty Group Trust	US49803T3005
KRTX	Karuna Therapeutics, Inc.	US48576A1007
KRYS	Krystal Biotech, Inc.	US5011471027
KSU	Kansas City Southern	US4851703029
KTB	Kontoor Brands, Inc.	US50050N1037
L	Loews Corporation	US5404241086
LAD	Lithia Motors, Inc.	US5367971034
LANC	Lancaster Colony Corporation	US5138471033
LASR	nLIGHT, Inc.	US65487K1007
LB	L Brands, Inc.	US5017971046
LBRDK	Liberty Broadband Corporation	US5303073051
LCII	LCI Industries	US50189K1034
LDOS	Leidos Holdings, Inc.	US5253271028
LEA	Lear Corporation	US5218652049
LECO	Lincoln Electric Holdings, Inc.	US5339001068
LEG	Leggett & Platt, Incorporated	US5246601075
LEGH	Legacy Housing Corporation	US52472M1018
LEN	Lennar Corporation	US5260571048
LEVI	Levi Strauss & Co.	US52736R1023
LFC	Deutsche Bank Trust Company Americas	US16939P1066
LFUS	Littelfuse, Inc.	US5370081045
LGIH	LGI Homes, Inc.	US50187T1060
LGND	Ligand Pharmaceuticals Incorporated	US53220K5048
LH	Laboratory Corporation of America Holdings	US50540R4092
LHA@DE	Deutsche Lufthansa Aktiengesellschaft	DE0008232125
LHCG	LHC Group, Inc.	US50187A1079
LHX	L3Harris Technologies, Inc.	US5024311095
LI	Li Auto Inc.	US50202M1027
LII	Lennox International Inc.	US5261071071
LIN	Linde plc	IE00BZ12WP82
LITE	Lumentum Holdings Inc.	US55024U1097
LKOD@GS	Citibank, N.A.	US69343P1057
LKQ	LKQ Corporation	US5018892084
LLY	Eli Lilly and Company	US5324571083
LMT	Lockheed Martin Corporation	US5398301094
LNN	Lindsay Corporation	US5355551061
LNT	Alliant Energy Corporation	US0188021085
LNTH	Lantheus Holdings, Inc.	US5165441032
LOPE	Grand Canyon Education, Inc.	US38526M1062
LOW	Lowe's Companies, Inc.	US5486611073
LPL	Citibank, N.A.	US50186V1026
LPLA	LPL Financial Holdings Inc.	US50212V1008
LPSN	LivePerson, Inc.	US5381461012
LPX	Louisiana-Pacific Corporation	US5463471053
LRCX	Lam Research Corporation	US5128071082
LRN	Stride, Inc.	US86333M1080
LSCC	Lattice Semiconductor Corporation	US5184151042
LSTR	Landstar System, Inc.	US5150981018
LTHM	Livent Corporation 	US53814L1089
LULU	lululemon athletica inc.	US5500211090
LUMN	Lumen Technologies, Inc.	US5502411037
LUV	Southwest Airlines Co.	US8447411088
LVS	Las Vegas Sands Corp.	US5178341070
LW	Lamb Weston Holdings, Inc.	US5132721045
LYB	LyondellBasell Industries N.V.	NL0009434992
LYFT	Lyft, Inc.	US55087P1049
LYV	Live Nation Entertainment, Inc.	US5380341090
M	Macy's, Inc.	US55616P1049
MA	Mastercard Incorporated	US57636Q1040
MAA	Mid-America Apartment Communities, Inc.	US59522J1034
MAC	The Macerich Company	US5543821012
MAIL@GS	Mail.ru Group Limited, GDR	US5603172082
MAN	ManpowerGroup Inc.	US56418H1005
MANH	Manhattan Associates, Inc.	US5627501092
MANT	ManTech International Corporation	US5645631046
MANU	Manchester United plc	KYG5784H1065
MAR	Marriott International, Inc.	US5719032022
MAS	Masco Corporation	US5745991068
MASI	Masimo Corporation	US5747951003
MAT	Mattel, Inc.	US5770811025
MATX	Matson, Inc.	US57686G1058
MBT	JPMorgan Chase Bank, N.A.	US6074091090
MBUU	Malibu Boats, Inc.	US56117J1007
MC	Moelis & Company	US60786M1053
MCD	McDonald's Corporation	US5801351017
MCHP	Microchip Technology Incorporated	US5950171042
MCK	McKesson Corporation	US58155Q1031
MCO	Moody's Corporation	US6153691059
MCRI	Monarch Casino & Resort, Inc.	US6090271072
MD	MEDNAX, Inc.	US58502B1061
MDB	MongoDB, Inc.	US60937P1066
MDGL	Madrigal Pharmaceuticals, Inc.	US5588681057
MDLA	Medallia, Inc.	US5840211099
MDLZ	Mondelez International, Inc.	US6092071058
MDRX	Allscripts Healthcare Solutions, Inc.	US01988P1084
MDT	Medtronic Public Limited Company	IE00BTN1Y115
MDU	MDU Resources Group, Inc.	US5526901096
MED	Medifast, Inc.	US58470H1014
MEDP	Medpace Holdings, Inc.	US58506Q1094
MEI	Methode Electronics, Inc.	US5915202007
MELI	MercadoLibre, Inc.	US58733R1023
MET	MetLife, Inc.	US59156R1086
MFGP	Deutsche Bank Trust Company Americas	US5948374039
MGLN	Magellan Health, Inc.	US5590792074
MGM	MGM Resorts International	US5529531015
MGNT@GS	JPMorgan Chase Bank, N.A.	US55953Q2021
MGRC	McGrath RentCorp	US5805891091
MGY	Magnolia Oil & Gas Corporation	US5596631094
MHK	Mohawk Industries, Inc.	US6081901042
MHO	M/I Homes, Inc.	US55305B1017
MIDD	The Middleby Corporation	US5962781010
MKC	McCormick & Company, Incorporated	US5797802064
MKL	Markel Corporation	US5705351048
MKSI	MKS Instruments, Inc.	US55306N1046
MKTX	MarketAxess Holdings Inc.	US57060D1081
MLAB	Mesa Laboratories, Inc.	US59064R1095
MLCO	Deutsche Bank Trust Company Americas	US5854641009
MLHR	Herman Miller, Inc.	US6005441000
MLM	Martin Marietta Materials, Inc.	US5732841060
MMC	Marsh & McLennan Companies, Inc.	US5717481023
MMI	Marcus & Millichap, Inc.	US5663241090
MMM	3M Company	US88579Y1010
MMS	MAXIMUS, Inc.	US5779331041
MMSI	Merit Medical Systems, Inc.	US5898891040
MNRO	Monro, Inc.	US6102361010
MNST	Monster Beverage Corporation	US61174X1090
MO	Altria Group, Inc.	US02209S1033
MODV	ModivCare Inc.	US60783X1046
MOH	Molina Healthcare, Inc.	US60855R1005
MOMO	Deutsche Bank Trust Company Americas	US60879B1070
MORN	Morningstar, Inc.	US6177001095
MOS	The Mosaic Company	US61945C1036
MOV	Movado Group, Inc.	US6245801062
MPC	Marathon Petroleum Corporation	US56585A1025
MPWR	Monolithic Power Systems, Inc.	US6098391054
MRC	MRC Global Inc.	US55345K1034
MRK	Merck & Co., Inc.	US58933Y1055
MRK@DE	Merck KGaA	DE0006599905
MRNA	Moderna, Inc.	US60770K1079
MRO	Marathon Oil Corporation	US5658491064
MRTX	Mirati Therapeutics, Inc.	US60468T1051
MRVL	Marvell Technology, Inc.	US5738741041
MS	Morgan Stanley	US6174464486
MSA	MSA Safety Incorporated	US5534981064
MSCI	MSCI Inc.	US55354G1004
MSEX	Middlesex Water Company	US5966801087
MSFT	Microsoft Corporation	US5949181045
MSG	The Madison Square Garden Company	US55825T1034
MSGE	Madison Square Garden Entertainment Corp.	US55826T1025
MSGN	MSG Networks Inc.	US5535731062
MSI	Motorola Solutions, Inc.	US6200763075
MSM	MSC Industrial Direct Co., Inc.	US5535301064
MSTR	MicroStrategy Incorporated	US5949724083
MTB	M&T Bank Corporation	US55261F1049
MTCH	Match Group, Inc.	US57667L1070
MTD	Mettler-Toledo International Inc.	US5926881054
MTG	MGIC Investment Corporation	US5528481030
MTH	Meritage Homes Corporation	US59001A1025
MTN	Vail Resorts, Inc.	US91879Q1094
MTOR	Meritor, Inc.	US59001K1007
MTRN	Materion Corporation	US5766901012
MTSC	MTS Systems Corporation	US5537771033
MTX	Minerals Technologies Inc.	US6031581068
MTX@DE	MTU Aero Engines AG	DE000A0D9PT0
MU	Micron Technology, Inc.	US5951121038
MUR	Murphy Oil Corporation	US6267171022
MUSA	Murphy USA Inc.	US6267551025
MUV2@DE	r Ruckversicherungs-Gesellschaft Aktiengesellschaft in Munchen	DE0008430026
MXIM	Maxim Integrated Products, Inc.	US57772K1016
MXL	MaxLinear, Inc.	US57776J1007
MYGN	Myriad Genetics, Inc.	US62855J1043
MYRG	MYR Group Inc.	US55405W1045
NARI	Inari Medical, Inc.	US45332Y1091
NATI	National Instruments Corporation	US6365181022
NAVI	Navient Corporation	US63938C1080
NBIX	Neurocrine Biosciences, Inc.	US64125C1099
NCBS	Nicolet Bankshares, Inc.	US65406E1029
NCR	NCR Corporation	US62886E1082
NDAQ	Nasdaq, Inc.	US6311031081
NDSN	Nordson Corporation	US6556631025
NEE	NextEra Energy, Inc.	US65339F1012
NEM	Newmont Goldcorp Corporation	US6516391066
NEO	NeoGenomics, Inc.	US64049M2098
NEOG	Neogen Corporation	US6404911066
NET	Cloudflare, Inc.	US18915M1071
NEU	NewMarket Corporation	US6515871076
NEWR	New Relic, Inc.	US64829B1008
NFG	National Fuel Gas Company	US6361801011
NFLX	Netflix, Inc.	US64110L1061
NGVT	Ingevity Corporation	US45688C1071
NJR	New Jersey Resources Corporation	US6460251068
NKE	NIKE, Inc.	US6541061031
NKTR	Nektar Therapeutics	US6402681083
NLMK@GS	Deutsche Bank Trust Company Americas	US67011E2046
NLOK	NortonLifeLock Inc	US6687711084
NLSN	Nielsen Holdings plc	GB00BWFY5505
NMIH	NMI Holdings, Inc.	US6292093050
NOC	Northrop Grumman Corporation	US6668071029
NOK	Citibank, N.A.	US6549022043
NOV	NOV Inc.	US62955J1034
NOW	ServiceNow, Inc.	US81762P1021
NP	Neenah, Inc.	US6400791090
NPK	National Presto Industries, Inc.	US6372151042
NRG	NRG Energy, Inc.	US6293775085
NSC	Norfolk Southern Corporation	US6558441084
NSIT	Insight Enterprises, Inc.	US45765U1034
NSP	Insperity, Inc.	US45778Q1076
NTAP	NetApp, Inc.	US64110D1046
NTCO	Natura &Co Holding S.A.	US63884N1081
NTCT	NetScout Systems, Inc.	US64115T1043
NTES	The Bank of New York Mellon	US64110W1027
NTGR	NETGEAR, Inc.	US64111Q1040
NTLA	Intellia Therapeutics, Inc.	US45826J1051
NTNX	Nutanix, Inc.	US67059N1081
NTRA	Natera, Inc.	US6323071042
NTRS	Northern Trust Corporation	US6658591044
NTUS	Natus Medical Incorporated	US6390501038
NUE	Nucor Corporation	US6703461052
NUS	Nu Skin Enterprises, Inc.	US67018T1051
NUVA	NuVasive, Inc.	US6707041058
NVDA	NVIDIA Corporation	US67066G1040
NVEE	NV5 Global, Inc.	US62945V1098
NVR	NVR, Inc.	US62944T1051
NVRO	Nevro Corp.	US64157F1030
NVS	Novartis AG	US66987V1098
NVTA	Invitae Corporation	US46185L1035
NVTK@GS	The Bank of New York Mellon	US6698881090
NWE	NorthWestern Corp	US6680743050
NWL	Newell Brands Inc.	US6512291062
NWLI	National Western Life Group, Inc. Class A	US6385171029
NWS	News Corporation	US65249B2088
NWSA	News Corporation	US65249B1098
NXPI	NXP Semiconductors N.V.	NL0009538784
NXST	Nexstar Media Group, Inc.	US65336K1034
NYT	The New York Times Company	US6501111073
O	Realty Income Corporation	US7561091049
OC	Owens Corning	US6907421019
ODFL	Old Dominion Freight Line, Inc.	US6795801009
OFIX	Orthofix Medical Inc.	US68752M1080
OGE	OGE Energy Corp.	US6708371033
OGS	ONE Gas, Inc.	US68235P1084
OGZD@GS	The Bank of New York Mellon	US3682872078
OHI	Omega Healthcare Investors, Inc.	US6819361006
OI	O-I Glass, Inc.	US67098H1041
OII	Oceaneering International, Inc.	US6752321025
OIS	Oil States International, Inc.	US6780261052
OKE	ONEOK, Inc.	US6826801036
OKTA	Okta, Inc.	US6792951054
OLED	Universal Display Corporation	US91347P1057
OLLI	Ollie’s Bargain Outlet Holdings, Inc.	US6811161099
OMC	Omnicom Group Inc.	US6819191064
OMCL	Omnicell, Inc.	US68213N1090
ON	ON Semiconductor Corporation	US6821891057
ONTO	Onto Innovation Inc.	US6833441057
ORCL	Oracle Corporation	US68389X1054
ORLY	O'Reilly Automotive, Inc.	US67103H1077
OSIS	OSI Systems, Inc.	US6710441055
OSK	Oshkosh Corporation	US6882392011
OSUR	OraSure Technologies, Inc.	US68554V1089
OTIS	Otis Worldwide Corporation	US68902V1070
OVV	Ovintiv Inc.	US69047Q1022
OXY	Occidental Petroleum Corporation	US6745991058
PAGS	Pagseguro Digital Ltd	KYG687071012
PANW	Palo Alto Networks, Inc.	US6974351057
PATK	Patrick Industries, Inc.	US7033431039
PAYC	Paycom Software, Inc.	US70432V1026
PB	Prosperity Bancshares, Inc.	US7436061052
PBCT	People's United Financial, Inc.	US7127041058
PBF	PBF Energy Inc.	US69318G1067
PBH	Prestige Consumer Healthcare Inc.	US74112D1019
PBI	Pitney Bowes Inc.	US7244791007
PCAR	PACCAR Inc	US6937181088
PCG	PG&E Corporation	US69331C1080
PCRX	Pacira BioSciences, Inc.	US6951271005
PCTY	Paylocity Holding Corporation	US70438V1061
PD	PagerDuty, Inc.	US69553P1003
PDCO	Patterson Companies, Inc.	US7033951036
PEAK	Healthpeak Properties Inc	US42250P1030
PEG	Public Service Enterprise Group Incorporated	US7445731067
PEGA	Pegasystems Inc.	US7055731035
PEN	Penumbra, Inc.	US70975L1070
PEP	PepsiCo, Inc.	US7134481081
PETQ	PetIQ, Inc.	US71639T1060
PFE	Pfizer Inc.	US7170811035
PFG	Principal Financial Group, Inc.	US74251V1026
PFGC	Performance Food Group Company	US71377A1034
PFPT	Proofpoint, Inc.	US7434241037
PG	The Procter & Gamble Company	US7427181091
PGNY	Progyny, Inc.	US74340E1038
PGR	The Progressive Corporation	US7433151039
PGTI	PGT Innovations, Inc.	US69336V1017
PH	Parker-Hannifin Corporation	US7010941042
PHM	PulteGroup, Inc.	US7458671010
PHOR@GS	Citibank, N.A.	US71922G2093
PII	Polaris Inc.	US7310681025
PINC	Premier, Inc.	US74051N1028
PINS	Pinterest, Inc.	US72352L1061
PIPR	Piper Sandler Companies	US7240781002
PJT	PJT Partners Inc. Class A	US69343T1079
PKG	Packaging Corporation of America	US6951561090
PKI	PerkinElmer, Inc.	US7140461093
PLAN	Anaplan, Inc.	US03272L1089
PLAY	Dave & Buster's Entertainment, Inc.	US2383371091
PLCE	The Children's Place, Inc.	US1689051076
PLNT	Planet Fitness, Inc.	US72703H1014
PLTR	Palantir Technologies Inc. Class A	US69608A1088
PLUS	ePlus inc.	US2942681071
PLXS	Plexus Corp.	US7291321005
PLZL@GS	The Bank of New York Mellon	US73181M1172
PM	Philip Morris International Inc.	US7181721090
PNC	The PNC Financial Services Group, Inc.	US6934751057
PNFP	Pinnacle Financial Partners, Inc.	US72346Q1040
PNTG	The Pennant Group, Inc.	US70805E1091
PODD	Insulet Corporation	US45784P1012
POOL	Pool Corporation	US73278L1052
POR	Portland General Electric Company	US7365088472
POST	Post Holdings, Inc.	US7374461041
POWI	Power Integrations, Inc.	US7392761034
PPC	Pilgrim’s Pride Corporation	US72147K1088
PPG	PPG Industries, Inc.	US6935061076
PPL	PPL Corporation	US69351T1060
PRAA	PRA Group, Inc.	US69354N1063
PRAH	PRA Health Sciences, Inc.	US69354M1080
PRFT	Perficient, Inc.	US71375U1016
PRG	PROG Holdings, Inc.	US74319R1014
PRGS	Progress Software Corporation	US7433121008
PRI	Primerica, Inc.	US74164M1080
PRLB	Proto Labs, Inc.	US7437131094
PRSP	Perspecta Inc.	US7153471005
PRU	Prudential Financial, Inc.	US7443201022
PS	Pluralsight, Inc.	US72941B1061
PSA	Public Storage	US74460D1090
PSMT	PriceSmart, Inc.	US7415111092
PSN	Parsons Corporation	US70202L1026
PSTG	Pure Storage, Inc.	US74624M1027
PSX	Phillips 66	US7185461040
PTC	PTC Inc.	US69370C1009
PTCT	PTC Therapeutics, Inc.	US69366J2006
PTON	Peloton Interactive, Inc.	US70614W1009
PTR	The Bank of New York Mellon	US71646E1001
PUM@DE	Puma SE	DE0006969603
PUMP	ProPetro Holding Corp.	US74347M1080
PVH	PVH Corp.	US6936561009
PWR	Quanta Services, Inc.	US74762E1029
PXD	Pioneer Natural Resources Company	US7237871071
PYPL	PayPal Holdings, Inc.	US70450Y1038
PZZA	Papa John's International, Inc.	US6988131024
QADA	QAD Inc.	US74727D3061
QCOM	QUALCOMM Incorporated	US7475251036
QDEL	Quidel Corporation	US74838J1016
QLYS	Qualys, Inc.	US74758T3032
QNST	QuinStreet, Inc.	US74874Q1004
QRTEA	Qurate Retail, Inc.	US74915M1009
QRVO	Qorvo, Inc.	US74736K1016
QTS	QTS Realty Trust, Inc.	US74736A1034
QTWO	Q2 Holdings, Inc.	US74736L1098
QUOT	Quotient Technology Inc.	US7491191034
R	Ryder System, Inc.	US7835491082
RACE	Ferrari N.V.	NL0011585146
RAMP	LiveRamp Holdings, Inc.	US53815P1084
RARE	Ultragenyx Pharmaceutical Inc.	US90400D1081
RAVN	Raven Industries, Inc.	US7542121089
RBC	Regal Beloit Corporation	US7587501039
RCL	Royal Caribbean Cruises Ltd.	LR0008862868
RDFN	Redfin Corporation	US75737F1084
RDS A	Royal Dutch Shell plc	US7802592060
RDY	JPMorgan Chase Bank, N.A.	US2561352038
RE	Everest Re Group, Ltd.	BMG3223R1088
REG	Regency Centers Corporation	US7588491032
REGI	Renewable Energy Group, Inc.	US75972A3014
REGN	Regeneron Pharmaceuticals, Inc.	US75886F1075
RETA	Reata Pharmaceuticals, Inc.	US75615P1030
REX	REX American Resources Corporation	US7616241052
REYN	Reynolds Consumer Products Inc.	US76171L1061
REZI	Resideo Technologies, Inc.	US76118Y1047
RF	Regions Financial Corporation	US7591EP1005
RGA	Reinsurance Group of America, Incorporated	US7593516047
RGEN	Repligen Corporation	US7599161095
RGLD	Royal Gold, Inc.	US7802871084
RGNX	REGENXBIO Inc.	US75901B1070
RGR	Sturm, Ruger & Company, Inc.	US8641591081
RH	RH	US74967X1037
RHI	Robert Half International Inc.	US7703231032
RHM@DE	Rheinmetall Aktiengesellschaft	DE0007030009
RIG	Transocean Ltd.	CH0048265513
RJF	Raymond James Financial, Inc.	US7547301090
RL	Ralph Lauren Corporation	US7512121010
RMD	ResMed Inc.	US7611521078
RNG	RingCentral, Inc.	US76680R2067
ROCK	Gibraltar Industries, Inc.	US3746891072
ROG	Rogers Corporation	US7751331015
ROK	Rockwell Automation, Inc.	US7739031091
ROKU	Roku, Inc.	US77543R1023
ROL	Rollins, Inc.	US7757111049
ROLL	RBC Bearings Incorporated	US75524B1044
ROP	Roper Technologies, Inc.	US7766961061
ROST	Ross Stores, Inc.	US7782961038
RP	RealPage, Inc.	US75606N1090
RPD	Rapid7, Inc.	US7534221046
RPM	RPM International Inc.	US7496851038
RRBI	Red River Bancshares, Inc.	US75686R2022
RRC	Range Resources Corporation	US75281A1097
RRGB	Red Robin Gourmet Burgers, Inc.	US75689M1018
RS	Reliance Steel & Aluminum Co.	US7595091023
RSG	Republic Services, Inc.	US7607591002
RTX	Raytheon Technologies Corporation	US75513E1010
RVLV	Revolve Group, Inc.	US76156B1070
RWE@DE	RWE Aktiengesellschaft	DE0007037129
RXN	Rexnord Corporation	US76169B1026
RYN	Rayonier Inc.	US7549071030
RYTM	Rhythm Pharmaceuticals, Inc.	US76243J1051
SAFM	Sanderson Farms, Inc.	US8000131040
SAGE	Sage Therapeutics, Inc.	US78667J1088
SAIA	Saia, Inc.	US78709Y1055
SAIC	Science Applications International Corporation	US8086251076
SAIL	SailPoint Technologies Holdings, Inc.	US78781P1057
SAM	The Boston Beer Company, Inc.	US1005571070
SAP	SAP SE	US8030542042
SAVE	Spirit Airlines, Inc.	US8485771021
SBAC	SBA Communications Corporation	US78410G1040
SBCF	Seacoast Banking Corporation of Florida	US8117078019
SBER@GS	JPMorgan Chase Bank, N.A.	US80585Y3080
SBGI	Sinclair Broadcast Group, Inc.	US8292261091
SBH	Sally Beauty Holdings, Inc.	US79546E1047
SBRA	Sabra Health Care REIT, Inc.	US78573L1061
SBUX	Starbucks Corporation	US8552441094
SCCO	Southern Copper Corporation	US84265V1052
SCHW	The Charles Schwab Corporation	US8085131055
SCI	Service Corporation International	US8175651046
SCL	Stepan Company	US8585861003
SCSC	ScanSource, Inc.	US8060371072
SDGR	Schrodinger, Inc.	US80810D1037
SEDG	SolarEdge Technologies, Inc.	US83417M1045
SEE	Sealed Air Corporation	US81211K1007
SEIC	SEI Investments Company	US7841171033
SF	Stifel Financial Corp.	US8606301021
SFIX	Stitch Fix, Inc.	US8608971078
SFM	Sprouts Farmers Market, Inc.	US85208M1027
SGEN	Seagen Inc.	US81181C1045
SHAK	Shake Shack Inc.	US8190471016
SHEN	Shenandoah Telecommunications Company	US82312B1061
SHI	The Bank of New York Mellon	US82935M1099
SHL@DE	Siemens Healthineers AG	DE000SHL1006
SHOO	Steven Madden, Ltd.	US5562691080
SHW	The Sherwin-Williams Company	US8243481061
SIE@DE	Siemens Aktiengesellschaft	DE0007236101
SIG	Signet Jewelers Limited	BMG812761002
SIGI	Selective Insurance Group, Inc.	US8163001071
SINA	SINA Corporation	KYG814771047
SITE	SiteOne Landscape Supply, Inc.	US82982L1035
SIVB	SVB Financial Group	US78486Q1013
SJI	South Jersey Industries, Inc.	US8385181081
SJM	The J.M. Smucker Company	US8326964058
SJW	SJW Group	US7843051043
SKM	Citibank, N.A.	US78440P1084
SKX	Skechers U.S.A., Inc.	US8305661055
SLAB	Silicon Laboratories Inc.	US8269191024
SLB	Schlumberger Limited	AN8068571086
SLG	SL Green Realty Corp.	US78440X8048
SLGN	Silgan Holdings Inc.	US8270481091
SLP	Simulations Plus, Inc.	US8292141053
SMAR	Smartsheet Inc.	US83200N1037
SMG	The Scotts Miracle-Gro Company	US8101861065
SMPL	The Simply Good Foods Company	US82900L1026
SMTC	Semtech Corporation	US8168501018
SNA	Snap-on Incorporated	US8330341012
SNAP	Snap Inc.	US83304A1060
SNBR	Sleep Number Corporation	US83125X1037
SNE	Sony Corporation	US8356993076
SNPS	Synopsys, Inc.	US8716071076
SNX	SYNNEX Corporation	US87162W1009
SNY	JPMorgan Chase Bank, N.A.	US80105N1054
SO	The Southern Company	US8425871071
SOHU	The Bank of New York Mellon	US83410S1087
SON	Sonoco Products Company	US8354951027
SONO	Sonos, Inc.	US83570H1086
SP	SP Plus Corporation	US78469C1036
SPB@US	Spectrum Brands Holdings, Inc.	US84790A1051
SPCE	Virgin Galactic Holdings, Inc.	US92766K1060
SPG	Simon Property Group, Inc.	US8288061091
SPGI	S&P Global Inc.	US78409V1044
SPLK	Splunk Inc.	US8486371045
SPOT	Spotify Technology S.A	LU1778762911
SPR	Spirit AeroSystems Holdings, Inc.	US8485741099
SPSC	SPS Commerce, Inc.	US78463M1071
SQ	Square, Inc.	US8522341036
SQSP	Squarespace, Inc.	US85225A1079
SRC	Spirit Realty Capital, Inc.	US84860W3007
SRCL	Stericycle, Inc.	US8589121081
SRDX	Surmodics, Inc.	US8688731004
SRE	Sempra Energy	US8168511090
SRI	Stoneridge, Inc.	US86183P1021
SRPT	Sarepta Therapeutics, Inc.	US8036071004
SSA@GS	Citibank, N.A.	US48122U2042
SSD	Simpson Manufacturing Co., Inc.	US8290731053
SSNC	SS&C Technologies Holdings, Inc.	US78467J1007
SSTK	Shutterstock, Inc.	US8256901005
STAA	STAAR Surgical Company	US8523123052
STAG	STAG Industrial, Inc.	US85254J1025
STLD	Steel Dynamics, Inc.	US8581191009
STMP	Stamps.com Inc.	US8528572006
STRA	Strategic Education, Inc.	US86272C1036
STT	State Street Corporation	US8574771031
STX	Seagate Technology Public Limited Company	IE00B58JVZ52
STZ	Constellation Brands, Inc.	US21036P1084
SUPN	Supernus Pharmaceuticals, Inc.	US8684591089
SVST@GS	Deutsche Bank Trust Company Americas	US8181503025
SWAV	ShockWave Medical, Inc.	US82489T1043
SWBI	Smith & Wesson Brands, Inc.	US8317541063
SWCH	Switch, Inc.	US87105L1044
SWI	SolarWinds Corporation	US83417Q1058
SWK	Stanley Black & Decker, Inc.	US8545021011
SWKS	Skyworks Solutions, Inc.	US83088M1027
SWN	Southwestern Energy Company	US8454671095
SWX	Southwest Gas Holdings, Inc.	US8448951025
SXI	Standex International Corporation	US8542311076
SXT	Sensient Technologies Corporation	US81725T1007
SYF	Synchrony Financial	US87165B1035
SYK	Stryker Corporation	US8636671013
SYKE	Sykes Enterprises, Incorporated	US8712371033
SYNA	Synaptics Incorporated	US87157D1090
SYNH	Syneos Health, Inc.	US87166B1026
SYY	Sysco Corporation	US8718291078
T	AT&T INC.	US00206R1023
TAK	The Bank of New York Mellon	US8740602052
TAL	JPMorgan Chase Bank, N.A.	US8740801043
TAP	Molson Coors Brewing Company	US60871R2094
TCBI	Texas Capital Bancshares, Inc.	US88224Q1076
TCMD	Tactile Systems Technology, Inc.	US87357P1003
TCRR	TCR2 Therapeutics Inc.	US87808K1060
TCS	JPMorgan Chase Bank, N.A.	US87238U2033
TCX	Tucows Inc.	US8986972060
TDC	Teradata Corporation	US88076W1036
TDG	TransDigm Group Incorporated	US8936411003
TDOC	Teladoc Health, Inc.	US87918A1051
TDS	Telephone and Data Systems, Inc.	US8794338298
TDY	Teledyne Technologies Incorporated	US8793601050
TECD	Tech Data Corporation	US8782371061
TECH	Bio-Techne Corporation	US09073M1045
TEL	TE Connectivity Ltd.	CH0102993182
TENB	Tenable Holdings, Inc.	US88025T1025
TER	Teradyne, Inc.	US8807701029
TFC	Truist Financial Corporation	US89832Q1094
TFX	Teleflex Incorporated	US8793691069
TGNA	TEGNA Inc.	US87901J1051
TGT	Target Corporation	US87612E1064
THG	The Hanover Insurance Group, Inc.	US4108671052
THO	Thor Industries, Inc.	US8851601018
THRM	Gentherm Incorporated	US37253A1034
TIF	Tiffany & Co.	US8865471085
TJX	The TJX Companies, Inc.	US8725401090
TKR	The Timken Company	US8873891043
TM	Toyota Motor Corporation	US8923313071
TMHC	Taylor Morrison Home Corporation	US87724P1066
TMO	Thermo Fisher Scientific Inc.	US8835561023
TMUS	T-Mobile US, Inc.	US8725901040
TMX	Terminix Global Holdings, Inc.	US88087E1001
TNC	Tennant Company	US8803451033
TNDM	Tandem Diabetes Care, Inc.	US8753722037
TNET	TriNet Group, Inc.	US8962881079
TNL	Travel + Leisure Co.	US8941641024
TOL	Toll Brothers, Inc.	US8894781033
TOT	JPMorgan Chase Bank, N.A.	US89151E1091
TPH	TRI Pointe Group, Inc.	US87265H1095
TPIC	TPI Composites, Inc.	US87266J1043
TPR	Tapestry, Inc.	US8760301072
TPTX	Turning Point Therapeutics, Inc.	US90041T1088
TPX	Tempur Sealy International, Inc.	US88023U1016
TREE	LendingTree, Inc.	US52603B1070
TREX	Trex Company, Inc.	US89531P1057
TRHC	Tabula Rasa HealthCare, Inc.	US8733791011
TRIP	TripAdvisor, Inc.	US8969452015
TRMB	Trimble Inc.	US8962391004
TRNO	Terreno Realty Corporation	US88146M1018
TROW	T. Rowe Price Group, Inc.	US74144T1088
TRU	TransUnion	US89400J1079
TRUP	Trupanion, Inc.	US8982021060
TRV	The Travelers Companies, Inc.	US89417E1091
TRY0130	TURKEY 11,875% 15.01.2030	US900123AL40
TSCO	Tractor Supply Company	US8923561067
TSLA	Tesla, Inc.	US88160R1014
TSM	Citibank, N.A.	US8740391003
TSN	Tyson Foods, Inc.	US9024941034
TT	Trane Technologies plc	IE00BK9ZQ967
TTC	The Toro Company	US8910921084
TTD	The Trade Desk, Inc.	US88339J1051
TTEK	Tetra Tech, Inc.	US88162G1031
TTM	Citibank, N.A.	US8765685024
TTMI	TTM Technologies, Inc.	US87305R1095
TTWO	Take-Two Interactive Software, Inc.	US8740541094
TW	Tradeweb Markets Inc. Class A	US8926721064
TWLO	Twilio Inc.	US90138F1021
TWNK	Hostess Brands, Inc.	US44109J1060
TWOU	2U, Inc.	US90214J1016
TWTR	Twitter, Inc.	US90184L1026
TXG	10x Genomics, Inc. Class A	US88025U1097
TXN	Texas Instruments Incorporated	US8825081040
TXRH	Texas Roadhouse, Inc.	US8826811098
TXT	Textron Inc.	US8832031012
TYL	Tyler Technologies, Inc.	US9022521051
UA	Under Armour, Inc.	US9043112062
UAA	Under Armour, Inc.	US9043111072
UAL	United Airlines Holdings, Inc.	US9100471096
UBER	Uber Technologies, Inc.	US90353T1007
UBSI	United Bankshares, Inc.	US9099071071
UCTT	Ultra Clean Holdings, Inc.	US90385V1070
UDR	UDR, Inc.	US9026531049
UFPI	UFP Industries, Inc.	US90278Q1085
UFS	Domtar Corporation	US2575592033
UGI	UGI Corporation	US9026811052
UHS	Universal Health Services, Inc.	US9139031002
UI	Ubiquiti Inc.	US90353W1036
ULTA	Ulta Beauty, Inc.	US90384S3031
UMBF	UMB Financial Corporation	US9027881088
UNF	UniFirst Corporation	US9047081040
UNH	UnitedHealth Group Incorporated	US91324P1021
UNM	Unum Group	US91529Y1064
UNP	Union Pacific Corporation	US9078181081
UNVR	Univar Solutions Inc.	US91336L1070
UPS	United Parcel Service, Inc.	US9113121068
UPWK	Upwork Inc.	US91688F1049
URBN	Urban Outfitters, Inc.	US9170471026
URI	United Rentals, Inc.	US9113631090
USB	U.S. Bancorp	US9029733048
USFD	US Foods Holding Corp.	US9120081099
USM	United States Cellular Corporation	US9116841084
USNA	USANA Health Sciences, Inc.	US90328M1071
USPH	U.S. Physical Therapy, Inc.	US90337L1089
UTHR	United Therapeutics Corporation	US91307C1027
UTL	Unitil Corporation	US9132591077
V	Visa Inc.	US92826C8394
VAC	Marriott Vacations Worldwide Corporation	US57164Y1073
VALE	Citibank, N.A.	US91912E1055
VAR	Varian Medical Systems, Inc.	US92220P1057
VC	Visteon Corporation	US92839U2069
VCEL	Vericel Corporation	US92346J1088
VCRA	Vocera Communications, Inc.	US92857F1075
VCYT	Veracyte, Inc.	US92337F1075
VEC	Vectrus, Inc.	US92242T1016
VEEV	Veeva Systems Inc.	US9224751084
VEON	The Bank of New York Mellon	US91822M1062
VFC	V.F. Corporation	US9182041080
VG	Vonage Holdings Corp.	US92886T2015
VIAC	VIACOMCBS INC - CLASS B	US92556H2067
VICR	Vicor Corporation	US9258151029
VIE	Viela Bio, Inc.	US9266131005
VIPS	Deutsche Bank Trust Company Americas	US92763W1036
VIR	Vir Biotechnology, Inc.	US92764N1028
VIRT	Virtu Financial, Inc.	US9282541013
VLO	Valero Energy Corporation	US91913Y1001
VMC	Vulcan Materials Company	US9291601097
VMI	Valmont Industries, Inc.	US9202531011
VMW	Vmware, Inc.	US9285634021
VNA@DE	Vonovia SE	DE000A1ML7J1
VNDA	Vanda Pharmaceuticals Inc.	US9216591084
VNE	Veoneer, Inc.	US92336X1090
VNO	Vornado Realty Trust	US9290421091
VNT	Vontier Corporation	US9288811014
VOW3@DE	VOLKSWAGEN AKTIENGESELLSCHAFT	DE0007664039
VPG	Vishay Precision Group, Inc.	US92835K1034
VREX	Varex Imaging Corporation	US92214X1063
VRNS	Varonis Systems, Inc.	US9222801022
VRNT	Verint Systems Inc.	US92343X1000
VRSK	Verisk Analytics, Inc.	US92345Y1064
VRSN	VeriSign, Inc.	US92343E1029
VRTS	Virtus Investment Partners, Inc.	US92828Q1094
VRTU	Virtusa Corporation	US92827P1021
VRTV	Veritiv Corporation	US9234541020
VRTX	Vertex Pharmaceuticals Incorporated	US92532F1003
VSAT	ViaSat, Inc.	US92552V1008
VTR	Ventas, Inc.	US92276F1003
VTRS	Viatris Inc.	US92556V1061
VZ	Verizon Communications Inc.	US92343V1044
VZIO	VIZIO Holding Corp.	US92858V1017
W	Wayfair Inc.	US94419L1017
WAB	Westinghouse Air Brake Technologies Corporation	US9297401088
WABC	Westamerica Bancorporation	US9570901036
WAFD	Washington Federal, Inc.	US9388241096
WAL	Western Alliance Bancorporation	US9576381092
WAT	Waters Corporation	US9418481035
WB	JPMorgan Chase Bank, N.A.	US9485961018
WBA	Walgreens Boots Alliance, Inc.	US9314271084
WBS	Webster Financial Corporation	US9478901096
WCC	WESCO International, Inc.	US95082P1057
WDAY	Workday, Inc.	US98138H1014
WDC	Western Digital Corporation	US9581021055
WDFC	WD-40 Company	US9292361071
WEC	WEC Energy Group, Inc.	US92939U1060
WELL	Welltower Inc.	US95040Q1040
WERN	Werner Enterprises, Inc.	US9507551086
WEX	WEX Inc.	US96208T1043
WFC	Wells Fargo & Company	US9497461015
WGO	Winnebago Industries, Inc.	US9746371007
WH	Wyndham Hotels & Resorts, Inc.	US98311A1051
WHD	Cactus, Inc.	US1272031071
WHR	Whirlpool Corporation	US9633201069
WING	Wingstop Inc.	US9741551033
WIRE	Encore Wire Corporation	US2925621052
WISH	ContextLogic Inc. Class A	US21077C1071
WK	Workiva Inc.	US98139A1051
WLH	William Lyon Homes	US5520747008
WLK	Westlake Chemical Corporation	US9604131022
WLTW	Willis Towers Watson Public Limited Company	IE00BDB6Q211
WM	Waste Management, Inc.	US94106L1098
WMB	The Williams Companies, Inc.	US9694571004
WMT	Walmart Inc.	US9311421039
WOR	Worthington Industries, Inc.	US9818111026
WORK	Slack Technologies, Inc.	US83088V1026
WRB	W. R. Berkley Corporation	US0844231029
WRK	WestRock Company	US96145D1054
WRLD	World Acceptance Corporation	US9814191048
WSC	WillScot Mobile Mini Holdings Corp.	US9713781048
WSM	Williams-Sonoma, Inc.	US9699041011
WSO	Watsco, Inc.	US9426222009
WST	West Pharmaceutical Services, Inc.	US9553061055
WTFC	Wintrust Financial Corporation	US97650W1080
WTRG	Essential Utilities, Inc.	US29670G1022
WTS	Watts Water Technologies, Inc.	US9427491025
WTTR	Select Energy Services, Inc.	US81617J3014
WU	The Western Union Company	US9598021098
WW	WW International, Inc.	US98262P1012
WWD	Woodward, Inc.	US9807451037
WWE	World Wrestling Entertainment, Inc.	US98156Q1085
WWW	Wolverine World Wide, Inc.	US9780971035
WY	Weyerhaeuser Company	US9621661043
WYNN	Wynn Resorts, Limited	US9831341071
XEC	Cimarex Energy Co.	US1717981013
XEL	Xcel Energy Inc.	US98389B1008
XLNX	Xilinx, Inc.	US9839191015
XLRN	Acceleron Pharma Inc.	US00434H1086
XNCR	Xencor, Inc.	US98401F1057
XOM	Exxon Mobil Corporation	US30231G1022
XP	XP Inc.	KYG982391099
XPO	XPO Logistics, Inc.	US9837931008
XRAY	DENTSPLY SIRONA Inc.	US24906P1093
XRX	Xerox Holdings Corporation	US98421M1062
XYL	Xylem Inc.	US98419M1009
Y	Alleghany Corporation	US0171751003
YELP	Yelp Inc.	US9858171054
YETI	YETI Holdings, Inc.	US98585X1046
YEXT	Yext, Inc.	US98585N1063
YUM	Yum! Brands, Inc.	US9884981013
YUMC	Yum China Holdings, Inc.	US98850P1093
YY	JOYY, Inc.	US46591M1099
Z	Zillow Group, Inc.	US98954M2008
ZBH	Zimmer Biomet Holdings, Inc.	US98956P1021
ZBRA	Zebra Technologies Corporation	US9892071054
ZEN	Zendesk, Inc.	US98936J1016
ZG	Zillow Group, Inc.	US98954M1018
ZGNX	Zogenix, Inc.	US98978L2043
ZI	ZoomInfo Technologies Inc.	US98980F1049
ZION	Zions Bancorporation	US9897011071
ZM	Zoom Video Communications, Inc.	US98980L1017
ZNH	The Bank of New York Mellon	US1694091091
ZS	Zscaler, Inc.	US98980G1022
ZTS	Zoetis Inc.	US98978V1035
ZUMZ	Zumiez Inc.	US9898171015
ZUO	Zuora, Inc.	US98983V1061
ZYNE	Zynerba Pharmaceuticals, Inc.	US98986X1090
ZYXI	Zynex, Inc.	US98986M1036
TEXT;

$b = <<< TEXT2
 
US0378331005
US92766K1060
US88160R1014
US00846U1016
US0138721065
US02376R1023
US00258W1080
US00751Y1064
US00287Y1091
US03073E1055
US0434361046
US0036541003
US0090661010
US0028241000
US0042251084
US00766T1007
US00108J1097
IE00B4BNMY34
US00724F1012
US0326541051
US0394831020
US0530151036
US00650F1093
US0185811082
DE000A1EWWW0
US0527691069
US0236081024
US0079731008
US02553E1064
US00771V1089
US00130H1059
US0259321042
US0010551028
DE0005313704
US0010841023
US00847X1046
US0268747849
US0003611052
US03750L1098
US03748R7474
US04621X1081
US3635761097
US0078001056
US00971T1016
US0126531013
US0162551016
US01748X1028
US0116591092
US0200021014
IE00BFRT3W74
US01671P1003
US0197701065
US02005N1000
US02043Q1076
US0116421050
US01973R1014
US0213691035
US0153511094
US0382221051
US00164V1035
US0079031078
US0311001004
US0234361089
US0082521081
US0311621009
US03076C1062
US03027X1000
US0305061097
US0231351067
US05329W1027
US0327241065
US0341641035
US0404131064
US0028962076
US00183L1026
US0352551081
US00182C1036
US03662Q1058
US0367521038
US8318652091
US02875D1090
US03743Q1085
US0091581068
US02913V1035
US0320951017
US03784Y2000
US03828A1016
US03783C1009
US03782L1017
US25400W1027
JE00B783TY65
US04010L1035
US03969T1097
US0152711091
US03852U1060
US0400476075
US03966V1070
US03969K1088
US04335A1051
US0427351004
US04280A1007
US0441861046
US00773T1016
US03676C1009
US00737L1035
US0476491081
US0465131078
US04963C2098
US0464331083
US02156K1034
US00507V1098
US0080731088
US0534841012
US11135F1012
US05338G1067
US05368V1061
US05352A1007
US0536111091
US0304201033
US0298991011
US05465C1009
US05463X1063
US05464C1018
US0258161092
US05464T1043
US00508Y1029
US02156B1035
US0533321024
US0453271035
US0970231058
US0605051046
US0995021062
US05988J1034
US0718131099
DE000BAY0017
US0758961009
US10806X1028
US0684631080
US0865161014
US1170431092
US1096961040
US0774541066
US09203E1055
US0758871091
US0736851090
US3546131018
US08579W1036
US1156372096
US05508R1068
US10922N1037
US0893021032
US09062X1037
US0900431000
US0905722072
US09180C1062
US0640581007
US09215C1053
US09857L1089
US05722G1004
US09239B1098
US12008R1077
US09247X1019
US0584981064
US0942351083
US09609G1004
US09061G1013
DE0005190003
US1101221083
US0994061002
US10316T1043
US09627Y1091
US0846707026
US1143401024
US1152361010
US1011371077
US09075P1057
US0997241064
US05605H1005
US09260D1072
US1011211018
US08862E1091
US1729674242
US2253101016
US2058871029
US14149Y1082
US1280302027
US1407551092
US1417881091
US14448C1045
US14575E1055
US1491231015
CH0044328745
US12504L1098
US2005251036
US1638511089
US22822V1017
US2283681060
PA1436583006
US12571T1007
US19239V3024
US16383L1061
US12508E1010
US14161W1053
US14167L1035
US1273871087
US12514G1085
US1508701034
US1567821046
US1572101053
US1252691001
US1746101054
US1940141062
IL0010852080
US1924221039
US1713401024
US1630861011
US1630921096
IL0010824113
US15912K1007
US12541W2098
US16119P1084
US16679L1098
US15872M1045
US1255231003
US1717793095
US1720621010
US1941621039
US18914U1007
US16208T1025
US1858991011
US1844961078
US2120151012
US1890541097
US2003401070
US2017231034
US20030N1019
US12572Q1058
US1696561059
US2310211063
US20451N1019
US1258961002
US15135B1017
US17243V1026
US15189T1079
US2103731061
US12653C1080
US20602D1019
US14040H1059
US1270971039
US1924791031
US1910981026
US1985161066
US23283R1005
US20825C1045
US21870U5020
US2183521028
US22160K1051
US2220702037
US22266L1061
US1344291091
VGG1890L1076
US2172041061
US21676P1030
US2254471012
US1462291097
US79466L3024
US2270461096
US1442851036
US22053A1079
US1727551004
US22788C1053
US17275R1023
US22160N1090
US21925Y1038
US1264081035
US1729081059
US2168311072
US1488061029
US1924461023
US22052L1044
US1773761002
US22304C1009
US1282461052
US1468691027
US1266501006
US1667641005
US1474481041
US25746U1097
US2473617023
US2372661015
US25809K1051
DE0005810055
US26210C1045
US24344T1016
US26614N1028
US23804L1035
US2540671011
US2441991054
US2435371073
US24703L2025
US2547091080
US2566771059
US74834L1008
US23331A1097
US2358511028
US2545431015
US2546871060
US25470F1049
US25470F2039
US25470F3029
US25470M1099
US24665A1034
US26142R1041
US2533931026
US25659T1079
US2538681030
US26443V1017
US2567461080
US2480191012
US24823R1059
US67011P1003
US2561631068
US2600031080
US2605571031
US25754A2015
US2644115055
US2371941053
US2530311081
US2681501092
DE0005557508
US23918K1088
US25179M1036
US23355L1061
US2521311074
US2674751019
US2855121099
US1096411004
US2786421030
US29089Q1058
US27875T1016
US2788651006
US2925541029
US2091151041
US28106W1036
US2944291051
US2829141009
US28238P1093
US2810201077
US5184391044
US28414H1032
US29084Q1004
US2774321002
US2910111044
IE00BJ3V9050
US29355A1079
US29272W1099
US29275Y1029
US29251M1062
US29362U1043
US29404K1060
US26875P1012
US29414B1044
US1013881065
US28035Q1022
US29444U7000
US26884L1098
US30040W1080
US29664W1053
US2971781057
US29273V1008
IE00B8KQN827
US29364G1031
US2946001011
US29786A1060
US29978A1043
US30041R1086
US30050B1017
US29977A1051
US30034W1062
US28176E1082
US27579R1041
US30063P1057
US30161N1019
US30161Q1040
US3021301094
US30212P3038
US30225T1025
US63845R1077
US3453708600
US25278X1090
US3119001044
US31189P1021
US30303M1027
US34964C1062
US33767D1054
US3029411093
US35671D8570
US31428X1063
US3156161024
US31572Q8087
RU000A101NK4
US31620M1062
US3377381088
US3167731005
US33829M1018
US3383071012
US6350171061
US3448491049
US3024451011
US3434981011
US3434121022
US34354P1057
US3390411052
US68243Q1067
US3024913036
US3397501012
US31620R3030
US3610081057
US3154051003
US03152W1099
US3463751087
US35137L2043
US35137L1052
US3563901046
US3580391056
US3364331070
US31188V1008
KY30744W1070
GB00BDSFG982
US34959E1091
US34959J1088
US37890U1088
US3936571013
US3715321028
US3695501086
US3802371076
US39304D1028
US3696041033
US3841091040
US40131M1099
US3755581036
US3703341046
US3773221029
US2193501051
US37045V1008
US3795772082
US36251C1036
US3793782018
US3687361044
US39874R1014
US02079K1079
US02079K3059
US38341P1021
US3724601055
US3989051095
US37940X1028
US3647601083
CH0114405324
US4001101025
US38141G1040
US39572G1004
US3825501014
US3621LQ1099
US16115Q3083
US3893751061
US3873281071
US3848021040
US4485791028
US4198791018
US4062161017
US40637H1095
US4180561072
US4461501045
US4103451021
US40412C1018
US42726M1062
US4219061086
US4370761029
US9004502061
DE0006048432
US42809H1077
US4361061082
US43283X1054
US44267D1072
US4285671016
US4165151048
US4464131063
US43300A2033
US4128221086
US4364401012
US4385161066
US4234521015
US42824C1099
US40434L1052
US42226A1079
US0936711052
US4404521001
US4277461020
US4158641070
US8064071025
US44107P1049
US4278661081
US42225P5017
US4435106079
US4435731009
US4448591028
US4432011082
US4282911084
US44891N1090
US45841N1072
US4592001014
US45780R1014
US45866F1049
US45845P1084
US45867G1013
US45168D1046
US4595061015
DE0006231004
US4495851085
US45781V1017
US9021041085
US4523271090
US45337C1027
BMG475671050
US45780L1044
US4571871023
IL0011595993
US4577301090
US4581401001
US4612021034
US46187W1071
US4622221004
US4622601007
US4601461035
US4606901001
US44980X1090
US45772F1075
US45687V1061
US4627261005
US46269C1027
US46284V1017
US4500561067
US46120E6023
US46116X1019
US4657411066
US4523081093
BMG491BT1088
US4698141078
US4663671091
US4456581077
US4663131039
US8004221078
IE00BY7QL619
US48123V1026
US47233W1099
US47580P1030
US4262811015
US4781601046
US48203R1041
US46625H1005
US6556641008
US4878361082
US4830077040
US48666K1097
US49271V1008
US4932671088
US49338L1035
US5007541064
US68752L1008
US49446R1095
US4824801009
US4943681035
US49456B1017
US4891701009
US1431301027
US49714P1084
US4990491049
US1912161007
US50015M1099
US5010441013
US49803T3005
US48576A1007
US5011471027
US4851703029
US50050N1037
US5404241086
US5367971034
US65487K1007
US5017971046
US5253271028
US5246601075
US5260571048
US52736R1023
US50187T1060
US53220K5048
US50540R4092
US50187A1079
US5024311095
IE00BZ12WP82
US55024U1097
US5018892084
US5324571083
US5398301094
US0188021085
US5165441032
US5486611073
US5381461012
US5463471053
US5128071082
US86333M1080
US5184151042
US53814L1089
US5500211090
US5502411037
US8447411088
US5178341070
US5132721045
NL0009434992
US55087P1049
US5380341090
US55616P1049
US57636Q1040
US5543821012
KYG5784H1065
US5719032022
US5745991068
US5747951003
US5770811025
US56117J1007
US5801351017
US5950171042
US58155Q1031
US6153691059
US6090271072
US58502B1061
US60937P1066
US5588681057
US5840211099
US6092071058
US01988P1084
IE00BTN1Y115
US58470H1014
US58733R1023
US59156R1086
US5529531015
US5596631094
US55305B1017
US5797802064
US55306N1046
US57060D1081
US6005441000
US5732841060
US5717481023
US88579Y1010
US61174X1090
US02209S1033
US61945C1036
US6245801062
US56585A1025
US6098391054
US55345K1034
US58933Y1055
DE0006599905
US60770K1079
US5658491064
US60468T1051
US6174464486
US55354G1004
US5949181045
US55826T1025
US5535731062
US55825T1034
US6200763075
US5535301064
US5949724083
US55261F1049
US57667L1070
US5528481030
US59001A1025
US5537771033
US5951121038
US6267171022
DE0008430026
US57772K1016
US57776J1007
US62855J1043
US45332Y1091
US6365181022
US63938C1080
US64125C1099
US62886E1082
US6311031081
US65339F1012
US6516391066
US64049M2098
US18915M1071
US64829B1008
US64110L1061
US6460251068
US6541061031
US6402681083
US6687711084
GB00BWFY5505
US6292093050
US6668071029
US62955J1034
US81762P1021
US6293775085
US45778Q1076
US64110D1046
US64111Q1040
US45826J1051
US67059N1081
US6323071042
US6658591044
US6703461052
US67018T1051
US6707041058
US67066G1040
US62945V1098
US64157F1030
US46185L1035
US6512291062
US65249B2088
US65249B1098
NL0009538784
US65336K1034
US6501111073
US7561091049
US6907421019
US6795801009
US6708371033
US6819361006
US67098H1041
US6752321025
US6780261052
US6826801036
US6792951054
US91347P1057
US6811161099
US6819191064
US6821891057
US6833441057
US68389X1054
US67103H1077
US6882392011
US68554V1089
US68902V1070
US69047Q1022
US6745991058
KYG687071012
US6974351057
US7033431039
US70432V1026
US7127041058
US69318G1067
US7244791007
US6937181088
US69331C1080
US6951271005
US70438V1061
US69553P1003
US7033951036
US42250P1030
US7445731067
US7055731035
US70975L1070
US7134481081
US71639T1060
US7170811035
US74251V1026
US71377A1034
US7434241037
US7427181091
US74340E1038
US7433151039
US7010941042
US7458671010
US7310681025
US72352L1061
US7240781002
US6951561090
US7140461093
US03272L1089
US2383371091
US1689051076
US74340W1036
US72703H1014
US69608A1088
US7181721090
US6934751057
US72346Q1040
US70805E1091
US73278L1052
US7392761034
US72147K1088
US6935061076
US69351T1060
US69354N1063
US74319R1014
US7433121008
US7437131094
US7153471005
US7443201022
US72941B1061
US74460D1090
US70202L1026
US74624M1027
US7185461040
US69370C1009
US69366J2006
US70614W1009
US74347M1080
US6936561009
US74762E1029
US7237871071
US70450Y1038
US6988131024
US7475251036
US74838J1016
US74758T3032
US74874Q1004
US74915M1009
US74736K1016
US74736A1034
US7491191034
US7835491082
NL0011585146
US53815P1084
US90400D1081
US7542121089
LR0008862868
US75737F1084
US7588491032
US75972A3014
US75886F1075
US75615P1030
US76118Y1047
US7591EP1005
US7599161095
US7802871084
US75901B1070
US8641591081
US74967X1037
US7703231032
CH0048265513
US7547301090
US7512121010
US7611521078
US76680R2067
US7739031091
US77543R1023
US7757111049
US7766961061
US7782961038
US7534221046
US7496851038
US75281A1097
US75689M1018
US7595091023
US7607591002
US75513E1010
US76156B1070
US76169B1026
US76243J1051
US8000131040
US78667J1088
US8086251076
US78781P1057
US1005571070
US8485771021
US78410G1040
US8292261091
US79546E1047
US78573L1061
US8552441094
US84265V1052
US8085131055
US8175651046
US8060371072
US80810D1037
US83417M1045
US81211K1007
US8606301021
US8608971078
US85208M1027
US81181C1045
US8190471016
US82312B1061
US8243481061
BMG812761002
US78486Q1013
US8385181081
US8326964058
US8305661055
AN8068571086
US78440X8048
US8292141053
US83200N1037
US8101861065
US82900L1026
US8168501018
US8330341012
US83304A1060
US83125X1037
US8716071076
US87162W1009
US8425871071
US83570H1086
US78469C1036
US8288061091
US78409V1044
US8486371045
LU1778762911
US8485741099
US8522341036
US84860W3007
US8589121081
US8168511090
US8036071004
US8290731053
US78467J1007
US8256901005
US8523123052
US85254J1025
US8581191009
US8528572006
US86272C1036
US8574771031
IE00B58JVZ52
US21036P1084
US8684591089
US82489T1043
US8317541063
US87105L1044
US83417Q1058
US8545021011
US83088M1027
US8454671095
US8448951025
US87165B1035
US8636671013
US87157D1090
US87166B1026
US8718291078
US00206R1023
US60871R2094
US88224Q1076
US87357P1003
US87808K1060
US8986972060
US88076W1036
US8936411003
US87918A1051
US8794338298
US8793601050
US88025T1025
US8807701029
US89832Q1094
US87901J1051
US87612E1064
US8851601018
US89469A1043
US8725401090
US8873891043
US87724P1066
US8835561023
US8725901040
US8753722037
US8894781033
US87265H1095
US87266J1043
US8760301072
US90041T1088
US88023U1016
US52603B1070
US89531P1057
US8733791011
US8969452015
US8962391004
US74144T1088
US89400J1079
US8982021060
US89417E1091
US8923561067
US9024941034
US88339J1051
US87305R1095
US8740541094
US8926721064
US90138F1021
US44109J1060
US90214J1016
US90184L1026
US88025U1097
US8825081040
US8832031012
US9043112062
US9043111072
US9100471096
US90353T1007
US90385V1070
US9026531049
US90278Q1085
US2575592033
US9026811052
US9139031002
US90353W1036
US90384S3031
US91324P1021
US91529Y1064
US9078181081
US91336L1070
US9113121068
US91688F1049
US9170471026
US9113631090
US9029733048
US9120081099
US9116841084
US90328M1071
US91307C1027
US92826C8394
US57164Y1073
US92839U2069
US92346J1088
US92857F1075
US92337F1075
US9224751084
US9182041080
US92886T2015
US92556H2067
US9258151029
US9266131005
US92764N1028
US9282541013
US91913Y1001
US9291601097
US9285634021
US9216591084
US92336X1090
US9290421091
US9288811014
US92214X1063
US9222801022
US92343X1000
US92345Y1064
US92343E1029
US9234541020
US92532F1003
US92552V1008
US92276F1003
US92556V1061
US92343V1044
US94419L1017
US9297401088
US9576381092
US9418481035
US9314271084
US95082P1057
US98138H1014
US9581021055
US9292361071
US92939U1060
US95040Q1040
US9497461015
US9746371007
US98311A1051
US1272031071
US9633201069
US9741551033
US21077C1071
IE00BDB6Q211
US94106L1098
US9694571004
US9311421039
US83088V1026
US96145D1054
US9814191048
US9713781048
US9699041011
US81617J3014
US9598021098
US98262P1012
US98156Q1085
US9780971035
US9621661043
US9831341071
US1717981013
US98389B1008
US9839191015
US00434H1086
US98401F1057
US30231G1022
KYG982391099
US9837931008
US24906P1093
US98421M1062
US98419M1009
US9858171054
US98585X1046
US98585N1063
US9884981013
US98850P1093
US98954M2008
US98956P1021
US9892071054
US98936J1016
US98954M1018
US98978L2043
US98980F1049
US9897011071
US98980L1017
US98980G1022
US98978V1035
US9898171015
US98983V1061
US98986X1090
US98986M1036
TEXT2;

 $bList = explode("\n", $b);
//echo(implode(',', $bList) . "\n");

$fList = [];

 $aList = explode("\n", $a);
 // $aLists = array_chunk($aList, 800);
 foreach ($aList as $stockData) {
     $cells = explode("\t", $stockData);
     $ticker = trim($cells[0]);
     $code = trim(array_pop($cells));
     if (in_array($code,$bList)) {
         $fList[] = $ticker;
     }
 }

 $fLists = array_chunk($fList, 800);

foreach ($fLists as $fList) {
    echo(implode(',', $fList) . "\n");
}
