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
A
AA
AAL
AAN
AAON
AAP
AAPL
ABBV
ABC
ABG
ABMD
ABNB
ABT
ACAD
ACH
ACIW
ACM
ACMR
ACN
ADBE
ADI
ADM
ADP
ADPT
ADS
ADSK
ADUS
AEE
AEIS
AEO
AERI
AES
AFG
AFL
AGCO
AGIO
AIG
AIN
AIR
AIRC
AIT
AIV
AIZ
AJG
AJRD
AKAM
ALB
ALE
ALG
ALGN
ALGT
ALK
ALL
ALLE
ALLK
ALLO
ALLY
ALNY
ALRM
ALSN
ALTR
ALV
ALXN
AMAT
AMCX
AMD
AME
AMED
AMG
AMGN
AMN
AMP
AMSF
AMT
AMWD
AMZN
AN
ANAB
ANDE
ANET
ANF
ANGI
ANIK
ANIP
ANSS
ANTM
AON
AOS
AOUT
APA
APD
APEI
APH
APLE
APLT
APPF
APPN
APPS
APTV
ARCC
ARCT
ARE
ARMK
ARNA
ARNC
ARQT
ARVN
ARW
ARWR
ASGN
ASH
ASIX
ATEX
ATGE
ATKR
ATNI
ATR
ATRA
ATRC
ATRI
ATRO
ATUS
ATVI
AVA
AVAV
AVB
AVGO
AVLR
AVNS
AVNT
AVT
AVTR
AVY
AWI
AWK
AWR
AX
AXGN
AXON
AXP
AXSM
AYI
AYX
AZO
AZPN
BA
BABA
BAC
BAH
BAND
BAX
BBBY
BBIO
BBSI
BBY
BC
BCO
BCPC
BDC
BDTX
BDX
BECN
BEN
BERY
BF.B
BFAM
BGS
BH
BHF
BIDU
BIG
BIIB
BILI
BILL
BIO
BJ
BJRI
BK
BKI
BKNG
BKR
BKU
BL
BLD
BLDR
BLK
BLKB
BLL
BLMN
BLUE
BMI
BMRN
BMY
BOH
BOKF
BOOT
BOX
BPMC
BR
BRC
BRK.B
BRKR
BRKS
BRO
BRX
BSX
BTAI
BTI
BUD
BURL
BWA
BWXT
BX
BXP
BYND
BZUN
C
CABO
CACC
CAG
CAH
CALM
CARA
CARG
CARR
CARS
CASY
CAT
CB
CBRE
CBRL
CBSH
CBU
CC
CCI
CCK
CCL
CCMP
CCOI
CCXI
CDK
CDLX
CDNA
CDNS
CDW
CE
CEA
CENT
CENTA
CERN
CEVA
CF
CFG
CFR
CFX
CGEN
CGNT
CGNX
CHCO
CHD
CHDN
CHE
CHEF
CHGG
CHH
CHKP
CHNG
CHRW
CHTR
CHWY
CHX
CI
CIEN
CINF
CL
CLDR
CLDT
CLF
CLGX
CLH
CLR
CLX
CMA
CMC
CMCO
CMCSA
CMD
CME
CMG
CMI
CMP
CMS
CNC
CNK
CNMD
CNP
CNS
CNST
CNX
CNXC
CNXN
COF
COFS
COG
COHR
COIN
COKE
COLD
COLM
CONE
COO
COP
COR
CORR
CORT
COST
COTY
COUP
COUR
CPB
CPNG
CPRI
CPRT
CPS
CR
CREE
CRI
CRL
CRM
CRMT
CROX
CRS
CRTX
CRUS
CRVL
CRWD
CSCO
CSGP
CSGS
CSII
CSL
CSOD
CSWI
CSX
CTAS
CTB
CTLT
CTSH
CTVA
CTXS
CVCO
CVET
CVGW
CVLT
CVNA
CVS
CVX
CW
CWST
CWT
D
DAL
DAR
DASH
DBX
DCI
DCPH
DD
DDOG
DDS
DE
DECK
DELL
DFS
DG
DGX
DHI
DHR
DIOD
DIS
DISCA
DISCB
DISCK
DISH
DK
DKNG
DKS
DLB
DLR
DLTH
DLTR
DLX
DNLI
DNOW
DOCU
DORM
DOV
DOW
DPZ
DRE
DRI
DRNA
DRQ
DT
DVA
DVN
DXC
DXCM
DY
EA
EAT
EBAY
EBS
ECHO
ECL
ECPG
ED
EDIT
EEFT
EFX
EGHT
EGP
EGRX
EHTH
EIX
EL
ELAN
ELS
EME
EMN
EMR
ENDP
ENPH
ENR
ENS
ENSG
ENTA
ENTG
ENV
EOG
EPAM
EPAY
EPC
EQIX
EQT
ERIE
ES
ESE
ESPR
ESS
ET
ETN
ETR
ETRN
ETSY
EVBG
EVER
EVH
EVR
EVRG
EW
EWBC
EXAS
EXC
EXEL
EXLS
EXP
EXPD
EXPE
EXPO
EXR
EYE
F
FANG
FARO
FAST
FATE
FB
FBHS
FCFS
FCN
FCNCA
FCX
FDS
FDX
FELE
FFIN
FFIV
FGEN
FICO
FIS
FISV
FITB
FIVE
FIVE@GS
FIVN
FIXP
FIZZ
FL
FLO
FLOW
FLR
FLS
FLT
FLWS
FMC
FND
FNF
FNKO
FOCS
FOE
FOLD
FORM
FORR
FOX
FOXA
FOXF
FRHC
FRPH
FRPT
FSLR
FSLY
FTCH
FTCI
FTDR
FTI
FTNT
FTV
FUL
FWRD
GATX
GBCI
GBT
GBX
GCO
GCP
GD
GDDY
GDOT
GE
GEF
GGG
GH
GHC
GILD
GIS
GKOS
GL
GLPI
GLTR@GS
GLW
GM
GMED
GMS
GNL
GNRC
GNTX
GO
GOOG
GOOGL
GOSS
GPC
GPI
GPN
GPS
GRA
GRMN
GRUB
GS
GSHD
GSKY
GT
GTHX
GTLS
GTN
GVA
GWRE
GWW
H
HA
HAE
HAIN
HAL
HALO
HAS
HBAN
HBI
HCA
HCCI
HCSG
HD
HE
HEAR
HEI
HES
HFC
HGV
HHC
HHR
HIBB
HIG
HII
HLI
HLNE
HLT
HNP
HOG
HOLX
HON
HP
HPE
HPQ
HQY
HRB
HRC
HRL
HRTX
HSC
HSIC
HSKA
HST
HSY
HTA
HTHT
HUBB
HUBG
HUBS
HUM
HURN
HWM
HXL
IAA
IAC
IART
IBKR
IBM
IBN
IBP
IBTX
ICE
ICFI
ICPT
ICUI
IDA
IDCC
IDXX
IEX
IFF
IGMS
IIPR
IIVI
ILMN
INCY
INDB
INFO
INGN
INGR
INMD
INSP
INTC
INTU
INVH
IONS
IOSP
IOVA
IP
IPAR
IPG
IPGP
IQV
IR
IRBT
IRDM
IRM
IRTC
ISRG
IT
ITCI
ITGR
ITRI
ITT
ITW
IVZ
J
JACK
JBHT
JBL
JBSS
JBT
JCI
JCOM
JD
JEF
JELD
JJSF
JKHY
JLL
JNJ
JNPR
JOBS
JOUT
JPM
JWN
K
KAI
KALU
KAP@GS
KBH
KCEL
KDP
KEP
KEX
KEY
KEYS
KFY
KHC
KIDS
KIM
KKR
KLAC
KMB
KMI
KMPR
KMT
KMX
KNSL
KNX
KO
KOD
KR
KRG
KRTX
KRYS
KSU
KTB
KWR
L
LAD
LANC
LASR
LB
LBRDK
LCII
LDOS
LEA
LECO
LEG
LEGH
LEN
LEVI
LFC
LFUS
LGIH
LGND
LH
LHCG
LHX
LI
LII
LIN
LITE
LKOD@GS
LKQ
LLY
LMT
LNN
LNT
LNTH
LOPE
LOW
LPL
LPLA
LPSN
LPX
LRCX
LRN
LSCC
LSTR
LTHM
LULU
LUMN
LUV
LVS
LW
LYB
LYFT
LYV
M
MA
MAA
MAC
MAIL@GS
MAN
MANH
MANT
MANU
MAR
MAS
MASI
MAT
MATX
MBT
MBUU
MC
MCD
MCHP
MCK
MCO
MCRI
MD
MDB
MDGL
MDLA
MDLZ
MDRX
MDT
MDU
MED
MEDP
MEI
MELI
MET
MFGP
MGLN
MGM
MGNT@GS
MGRC
MGY
MHK
MHO
MIDD
MKC
MKL
MKSI
MKTX
MLAB
MLCO
MLHR
MLM
MMC
MMI
MMM
MMS
MMSI
MNRO
MNST
MO
MODV
MOH
MOMO
MORN
MOS
MOV
MPC
MPWR
MRC
MRK
MRNA
MRO
MRTX
MRVL
MS
MSA
MSCI
MSEX
MSFT
MSGE
MSGN
MSGS
MSI
MSM
MSTR
MTB
MTCH
MTD
MTG
MTH
MTN
MTOR
MTRN
MTX
MU
MUR
MUSA
MXIM
MXL
MYGN
MYRG
NARI
NATI
NAVI
NBIX
NCBS
NCR
NDAQ
NDSN
NEE
NEM
NEO
NEOG
NET
NEU
NEWR
NFG
NFLX
NGVT
NJR
NKE
NKTR
NLMK@GS
NLOK
NLSN
NMIH
NOC
NOK
NOV
NOW
NP
NPK
NRG
NSC
NSIT
NSP
NTAP
NTCO
NTCT
NTES
NTGR
NTLA
NTNX
NTRA
NTRS
NTUS
NUE
NUS
NUVA
NVDA
NVEE
NVR
NVRO
NVS
NVTA
NVTK@GS
NWE
NWL
NWLI
NWS
NWSA
NXPI
NXST
NYT
O
OC
ODFL
OFIX
OGE
OGS
OGZD@GS
OHI
OI
OII
OIS
OKE
OKTA
OLED
OLLI
OMC
OMCL
ON
ONTO
ORCL
ORLY
OSIS
OSK
OSUR
OTIS
OVV
OXY
OZON
PAGS
PANW
PATK
PAYC
PB
PBCT
PBF
PBH
PBI
PCAR
PCG
PCRX
PCTY
PD
PDCO
PEAK
PEG
PEGA
PEN
PEP
PETQ
PFE
PFG
PFGC
PFPT
PG
PGNY
PGR
PGTI
PH
PHM
PHOR@GS
PII
PINC
PINS
PIPR
PJT
PKG
PKI
PLAN
PLAY
PLCE
PLD
PLNT
PLTR
PLUS
PLXS
PLZL@GS
PM
PNC
PNFP
PNTG
PODD
POOL
POR
POST
POWI
PPC
PPG
PPL
PRAA
PRAH
PRFT
PRGS
PRI
PRLB
PRU
PSA
PSMT
PSN
PSTG
PSX
PTC
PTCT
PTON
PTR
PUMP
PVH
PWR
PXD
PYPL
PZZA
QADA
QCOM
QDEL
QLYS
QNST
QRTEA
QRVO
QTS
QTWO
QUOT
R
RACE
RAMP
RARE
RAVN
RBC
RCL
RDFN
RDS.A
RDY
RE
REG
REGI
REGN
RETA
REX
REYN
REZI
RF
RGA
RGEN
RGLD
RGNX
RGR
RH
RHI
RIG
RJF
RL
RMD
RNG
ROCK
ROG
ROK
ROKU
ROL
ROLL
ROP
ROST
RPD
RPM
RRBI
RRC
RRGB
RS
RSG
RTX
RVLV
RXN
RYN
RYTM
SAFM
SAGE
SAIA
SAIC
SAIL
SAM
SAP
SAVE
SBAC
SBCF
SBER@GS
SBGI
SBH
SBRA
SBUX
SCCO
SCHW
SCI
SCL
SCSC
SDGR
SEDG
SEE
SEIC
SF
SFIX
SFM
SGEN
SHAK
SHEN
SHI
SHOO
SHW
SIG
SIGI
SITE
SIVB
SJI
SJM
SJW
SKM
SKX
SLAB
SLB
SLG
SLGN
SLP
SMAR
SMG
SMPL
SMTC
SNA
SNAP
SNBR
SNPS
SNX
SNY
SO
SOHU
SON
SONO
SONY
SP
SPB@US
SPCE
SPG
SPGI
SPLK
SPOT
SPR
SPSC
SQ
SQSP
SR
SRC
SRCL
SRDX
SRE
SRI
SRPT
SSA@GS
SSD
SSNC
SSTK
STAA
STAG
STLD
STMP
STRA
STT
STZ
SUPN
SVST@GS
SWAV
SWBI
SWCH
SWI
SWK
SWKS
SWN
SWX
SXI
SXT
SYF
SYK
SYKE
SYNA
SYNH
SYY
T
TAK
TAL
TAP
TCBI
TCMD
TCRR
TCS
TCX
TDC
TDG
TDOC
TDS
TDY
TECH
TEL
TENB
TER
TFC
TFX
TGNA
TGT
THG
THO
THRM
THS
TJX
TKR
TM
TMHC
TMO
TMUS
TMX
TNC
TNDM
TNET
TNL
TOL
TOT
TPH
TPIC
TPR
TPTX
TPX
TREE
TREX
TRHC
TRIP
TRMB
TRNO
TROW
TRU
TRUP
TRV
TSCO
TSLA
TSM
TSN
TT
TTC
TTD
TTEK
TTM
TTMI
TTWO
TW
TWLO
TWNK
TWOU
TWTR
TXG
TXN
TXRH
TXT
TYL
UA
UAA
UAL
UBER
UBSI
UCTT
UDR
UFPI
UFS
UGI
UHS
UI
ULTA
UMBF
UNF
UNH
UNM
UNP
UNVR
UPS
UPWK
URBN
URI
USB
USFD
USM
USNA
USPH
UTHR
UTL
V
VAC
VALE
VC
VCEL
VCRA
VCYT
VEC
VEEV
VEON
VFC
VG
VIAC
VICR
VIPS
VIR
VIRT
VLO
VMC
VMI
VMW
VNDA
VNE
VNO
VNT
VPG
VREX
VRNS
VRNT
VRSK
VRSN
VRTS
VRTV
VRTX
VSAT
VTR
VTRS
VZ
VZIO
W
WAB
WABC
WAFD
WAL
WAT
WB
WBA
WBS
WCC
WDAY
WDC
WDFC
WEC
WELL
WERN
WEX
WFC
WGO
WH
WHD
WHR
WING
WIRE
WISH
WK
WLK
WLTW
WM
WMB
WMT
WOR
WORK
WRB
WRK
WRLD
WSC
WSM
WSO
WST
WTFC
WTRG
WTS
WTTR
WU
WW
WWD
WWE
WWW
WY
WYNN
XEC
XEL
XLNX
XLRN
XNCR
XOM
XP
XPO
XRAY
XRX
XYL
Y
YELP
YETI
YEXT
YUM
YUMC
YY
Z
ZBH
ZBRA
ZEN
ZG
ZGNX
ZI
ZION
ZM
ZNH
ZS
ZTS
ZUMZ
ZUO
ZYNE
ZYXI
TEXT;

 $fList = explode("\n", $a);


 $fLists = array_chunk($fList, 200);

foreach ($fLists as $fList) {
    foreach ($fList as $k=>$v) {
        if (strpos($v, '@')) {
            unset($fList[$k]);
        }
    }
    echo(implode(',', $fList) . "\n");
}

//
// WMB,XOM,VEON,T,TOT,VALE,VLO,SBRA,PTR,SHI,PPL,SRC,MFGP,MBT,OHI,OKE,MO,LUMN,IRM,KMI,HNP,KEP,LFC,GNL,ETRN,FTI,ET,GLPI,BTI,CVX,ARCC,BGS,AIRC,
