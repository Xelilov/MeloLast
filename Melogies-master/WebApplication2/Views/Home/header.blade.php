<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="utf-8">
    <title>UluAgro.az</title>

    <meta name="viewport" content="initial-scale=1, user-scalable=1, width=device-width">

    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-touch-fullscreen" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#2d71e2"/>
    <meta name="msapplication-TileImage" content="/{{asset('public')}}/assets/images/favicon.png">
    <meta name="msapplication-TileColor" content="#2d71e2"/>
    <meta name="msapplication-navbutton-color" content="#2d71e2"/>
    <meta name="theme-color" content="#2d71e2"/>

    <meta name="robots" content="noindex, nofollow, noarchive, noodp, noydir"/>

    <meta name="country" content="Azerbaijan"/>
    <meta name="language" content="Azerbaijani"/>
    <meta name="content-language" content="az_AZ"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="designer" content="Kamal Balayev" />
    <meta name="generator" content="Virtual Azərbaycan Şirkəti" />
    <meta name="copyright" content="UluAgro.az (c) 2018 Bütün hüquqlar qorunur"/>
    <meta name="description" content="Description"/>

    <link rel="canonical" href="http://www.uluagro.az/"/>

    <link rel="shortcut icon" href="{{asset('public')}}/assets/images/favicon.png"/>
    <link rel="stylesheet" href="{{asset('public')}}/assets/css/main.css"/>
    <link rel="stylesheet" href="{{asset('public')}}/assets/css/pi.css">
    <link rel="stylesheet" href="{{asset('public')}}/assets/icons/style.css"/>
    <link rel="stylesheet" href="https://js.arcgis.com/3.25/esri/css/esri.css"/>
</head>
<body>

<header class="header clear w-100p">
    <a href="index.php" title="UluAgro" class="logo float-left" lang="en">
        <img src="{{asset('public')}}/assets/images/logo.png" alt="UluAgro Logo" height="50" width="">
    </a>
</header>

<!-- Right Side-->
<aside class="right-side clear d-table text-center">
    <div class="d-row">
        <div class="d-cell">
            <a href="#" class="account-toggle d-block" data-toggle="tooltip" data-placement="left" title="Elvin Abbasov">
                <img src="{{asset('public')}}/assets/images/user-avatar.png" alt="Elvin Abbasov" width="45" height="45" class="radius-50p">
            </a>
        </div>
    </div>

    <div class="d-row h-100p">
        <div class="d-cell menu-toggles">
            <span class="side-toggle btn no-border" role="button"
                  data-toggle="tooltip" data-placement="left"
                  title="Bitkilər və Planlamalar" aria-label="Bitkilər və Planlamalar"
                  id="side-menu-1" aria-haspopup="true" aria-expanded="false">
                <i aria-hidden="true" class="icon-leaf v-align-middle"></i>
            </span>

            <span class="side-toggle btn no-border" role="button"
                  data-toggle="tooltip" data-placement="left"
                  title="Obyektlər" aria-label="Obyektlər"
                  id="side-menu-2" aria-haspopup="true" aria-expanded="false">
                <i aria-hidden="true" class="icon-th-circle v-align-middle"></i>
            </span>

            <span class="side-toggle btn no-border" role="button"
                  data-toggle="tooltip" data-placement="left"
                  title="Statistikalar" aria-label="Statistikalar"
                  id="side-menu-3" aria-haspopup="true" aria-expanded="false">
                <i aria-hidden="true" class="icon-survey-list v-align-middle"></i>
            </span>

            <span class="side-toggle btn no-border" role="button"
                  data-toggle="tooltip" data-placement="left"
                  title="Kargüzarlıq" aria-label="Kargüzarlıq"
                  id="side-menu-4" aria-haspopup="true" aria-expanded="false">
                <i aria-hidden="true" class="icon-book v-align-middle"></i>
            </span>

            <span class="side-toggle btn no-border" role="button"
                  aria-hidden="true" aria-label="Xəritə tarixçəsi"
                  id="map-type" data-toggle="tooltip" data-placement="left"
                  title="Xəritə tarixçəsi" aria-haspopup="true" aria-expanded="false">
                <i aria-hidden="true" class="icon-history v-align-middle"></i>
            </span>
        </div>
    </div>

    <div class="d-row">
        <div class="d-cell">
            <a href="http://agrotv.az/" rel="external noopener noreferrer" class="d-block" data-toggle="tooltip" data-placement="left" title="AgroTv">
                <i aria-hidden="true" class="icon-tv v-align-middle"></i>
            </a>
            <a href="https://birja.vac.az/" rel="external noopener noreferrer" class="d-block" data-toggle="tooltip" data-placement="left" title="Birja">
                <i aria-hidden="true" class="icon-currency-usd v-align-middle"></i>
            </a>
        </div>
    </div>

    <div class="d-row">
        <div class="d-cell">
            <span class="side-toggle btn no-border" role="button" aria-hidden="true" aria-label="Haqqımızda" id="about-us" data-toggle="tooltip" data-placement="left" title="Haqqımızda" aria-haspopup="true" aria-expanded="false">
                <i aria-hidden="true" class="icon-info-circle-thin v-align-middle"></i>
            </span>
            <a href="login.php" class="d-block" data-toggle="tooltip" data-placement="left" title="Çıxış">
                <i aria-hidden="true" class="icon-power-1 v-align-middle"></i>
            </a>
        </div>
    </div>

</aside>

<!-- Side Menu 1-->
<aside class="sidebar tr-3s" aria-labelledby="side-menu-1">

    <div class="sidebar-head bg-special">
        <h2 class="m-0 text-white bold">Bitkilər və planlamalar</h2>
    </div>

    <div class="sidebar-body scroll o-auto">
        <ul class="side-menu type-none m-0 pl-0 pt-10 pb-10" role="menubar">

            <li role="presentation" class="cereals clear">
                <a href="#" role="menuitem" id="1" class="menu-title text-uppercase bold float-left" title="Dənli bitkilər">
                    <i aria-hidden="true" class="icon-wheat mr-10"></i>Dənli bitkilər
                </a>
                <span class="menu-toggle pointer float-left text-center" id="menu-1">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>
                <ul class="sub-menu type-none m-0 float-left w-100p" role="menu" aria-labelledby="menu-1"></ul>
            </li>

            <li role="presentation" class="gardens clear">
                <a href="#" role="menuitem" id="2" class="menu-title text-uppercase bold float-left" title="Bağlar">
                    <i aria-hidden="true" class="icon-tree-11 mr-10"></i>Bağlar
                </a>
                <span class="menu-toggle pointer float-left text-center" id="menu-2">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>
                <ul id="gardens" class="sub-menu type-none m-0 float-left w-100p" role="menu" aria-labelledby="menu-2"></ul>
            </li>

            <li role="presentation" class="planting-planning clear">
                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Əkin planlaması">
                    <i aria-hidden="true" class="icon-planting mr-10"></i>Əkin planlaması
                </a>
                <span class="menu-toggle pointer float-left text-center" id="menu-3">
                  <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>
                <div class="sub-menu type-none m-0 p-20 pt-10 pb-10 float-left w-100p" aria-labelledby="menu-3">
                    <table>
                      <tbody></tbody>
                    </table>
                </div>
            </li>

            <li role="presentation" class="work-planning clear">
                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="İş planlaması">
                    <i aria-hidden="true" class="icon-work-planning mr-10"></i>İş planlaması
                </a>
                <span class="menu-toggle pointer float-left text-center" id="menu-15">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>
                <div class="sub-menu type-none m-0 p-20 pt-10 pb-10 float-left w-100p" aria-labelledby="menu-15">
                    <table>
                        <tbody></tbody>
                    </table>
                </div>
            </li>

        </ul>
    </div>

</aside>

<!-- Side Menu 2-->
<aside class="sidebar tr-3s scroll o-auto" aria-labelledby="side-menu-2">

    <div class="sidebar-head bg-special">
        <h2 class="m-0 text-white bold">Obyektlər</h2>
    </div>

    <div class="sidebar-body scroll o-auto">
        <ul class="side-menu type-none m-0 pl-0 pt-10 pb-10" role="menubar">

            <li role="presentation" class="bunkers lg-icons clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Bunkerlər">
                    <i aria-hidden="true" class="icon-bunker mr-10"></i>
                    Bunkerlər
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-4">
                <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
            </span>

                <div class="sub-menu type-none m-0 pl-10 pr-10 float-left w-100p" aria-labelledby="menu-4">
                    <div class="row as-5">

                        <div class="col text-center p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" title="Bunker 1" data-target-modal="bunker-info-1">
                                <i aria-hidden="true" class="icon-bunker" data-precent="20%"></i>
                            </a>
                        </div>

                        <div class="col text-center p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" title="Bunker 2" data-target-modal="bunker-info-2">
                                <i aria-hidden="true" class="icon-bunker" data-precent="58%"></i>
                            </a>
                        </div>

                        <div class="col text-center p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" title="Bunker 3" data-target-modal="bunker-info-3">
                                <i aria-hidden="true" class="icon-bunker" data-precent="72%"></i>
                            </a>
                        </div>

                        <div class="col text-center p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" title="Qazanxana" data-target-modal="brewery-info">
                                <i aria-hidden="true" class="icon-brewery" data-precent="34%"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </li>

            <li role="presentation" class="depo lg-icons clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Anbarlar">
                    <i aria-hidden="true" class="icon-warehouse mr-10"></i>
                    Anbarlar
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-5">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>

                <div class="sub-menu type-none m-0 pl-10 pr-10 float-left w-100p" aria-labelledby="menu-5">
                    <div class="row as-5">

                        <div class="col as-6 p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" title="Anbar 1" data-target-modal="depo-1">
                                <i aria-hidden="true" class="icon-warehouse"></i>
                            </a>
                        </div>

                        <div class="col as-6 p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" title="Anbar 1" data-target-modal="depo-2">
                                <i aria-hidden="true" class="icon-warehouse"></i>
                            </a>
                        </div>

                        <div class="col as-6 p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" title="Anbar 1" data-target-modal="depo-3">
                                <i aria-hidden="true" class="icon-warehouse"></i>
                            </a>
                        </div>

                        <div class="col as-6 p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" title="Anbar 1" data-target-modal="depo-4">
                                <i aria-hidden="true" class="icon-warehouse"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </li>

            <li role="presentation" class="artisan clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Artizanlar">
                    <i aria-hidden="true" class="icon-artisan-well mr-10"></i>
                    Artizanlar
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-6">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>

                <div class="sub-menu type-none m-0 p-20 pt-10 pb-10 float-left w-100p" aria-labelledby="menu-6">
                    <table class="w-100p">
                        <tbody>
                        <tr>
                            <td>1. APT</td>
                            <td>100</td>
                            <td width="120px">
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                            </td>
                        </tr>

                        <tr>
                            <td>2. APT</td>
                            <td>50</td>
                            <td width="120px">
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                            </td>
                        </tr>

                        <tr>
                            <td>3. APT</td>
                            <td>50</td>
                            <td width="120px">
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                            </td>
                        </tr>

                        <tr>
                            <td>4. APT</td>
                            <td>50</td>
                            <td width="120px">
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                            </td>
                        </tr>

                        <tr>
                            <td>5. APT</td>
                            <td>50</td>
                            <td width="120px">
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                                <i aria-hidden="true"
                                   class="icon-info-circle-thin pointer"
                                   data-toggle="tooltip"
                                   title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></i>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </li>

            <li role="presentation" class="basin lg-icons clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Hovuz">
                    <i aria-hidden="true" class="icon-reservoir mr-10"></i>
                    Hovuz
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-7">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>

                <div class="sub-menu type-none m-0 pl-10 pr-10 float-left w-100p" aria-labelledby="menu-7">
                    <div class="row as-5">
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="basin-1" title="Hovuz 1">
                                <i aria-hidden="true" class="icon-reservoir"></i>
                            </a>
                        </div>
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="basin-2" title="Hovuz 2">
                                <i aria-hidden="true" class="icon-reservoir"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </li>

            <li role="presentation" class="pumping-station lg-icons clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Nasosxana">
                    <i aria-hidden="true" class="icon-pump-station mr-10"></i>
                    Nasosxana
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-8">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>

                <div class="sub-menu type-none m-0 pl-10 pr-10 float-left w-100p" aria-labelledby="menu-8">
                    <div class="row as-5">
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="pumping-station-1" title="Nasosxana 1">
                                <i aria-hidden="true" class="icon-pump-station"></i>
                            </a>
                        </div>
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="pumping-station-3" title="Nasosxana 2">
                                <i aria-hidden="true" class="icon-pump-station"></i>
                            </a>
                        </div>
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="pumping-station-3" title="Nasosxana 3">
                                <i aria-hidden="true" class="icon-pump-station"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </li>

            <li role="presentation" class="garage lg-icons clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Qaraj">
                    <i aria-hidden="true" class="icon-garage mr-10"></i>
                    Qaraj
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-9">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>

                <div class="sub-menu type-none m-0 pl-10 pr-10 float-left w-100p" aria-labelledby="menu-9">
                    <div class="row as-5">
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="garage-1" title="Qaraj 1">
                                <i aria-hidden="true" class="icon-garage"></i>
                            </a>
                        </div>
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="garage-2" title="Qaraj 2">
                                <i aria-hidden="true" class="icon-garage"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </li>

            <li role="presentation" class="oil-depo lg-icons clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Yanacaqdoldurma Məntəqəsi">
                    <i aria-hidden="true" class="icon-fuel-pump mr-10"></i>
                    Yanacaqdoldurma M.
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-10">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>

                <div class="sub-menu type-none m-0 pl-10 pr-10 float-left w-100p" aria-labelledby="menu-10">
                    <div class="row as-5">
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="fuel-pump-1" title="Yanacaqdoldurma Məntəqəsi 1">
                                <i aria-hidden="true" class="icon-fuel-pump"></i>
                            </a>
                        </div>
                        <div class="col p-10">
                            <a href="#" class="d-block relative" data-toggle="tooltip" data-target-modal="fuel-pump-2" title="Yanacaqdoldurma Məntəqəsi 2">
                                <i aria-hidden="true" class="icon-fuel-pump"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </li>

            <li role="presentation" class="clear">
                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Ehtiyatlar">
                    <i aria-hidden="true" class="icon-list-circle mr-10"></i>
                    Ehtiyatlar
                </a>

                <span class="menu-toggle pointer float-left text-center">
                    <i aria-hidden="true" class="icon-eye v-align-middle tr-3s"></i>
                </span>
            </li>

        </ul>
    </div>

</aside>

<!-- Side Menu 3-->
<aside class="sidebar tr-3s scroll o-auto" aria-labelledby="side-menu-3">

    <div class="sidebar-head bg-special">
        <h2 class="m-0 text-white bold">Statistikalar</h2>
    </div>

    <div class="sidebar-body scroll o-auto">
        <ul class="side-menu type-none m-0 pl-0 pt-10 pb-10" role="menubar">

            <li role="presentation" class="camera clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Kamera Nəzarəti">
                    <i aria-hidden="true" class="icon-surveillance-video-camera mr-10"></i>
                    Kamera Nəzarəti
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-11">
                <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
            </span>

                <div class="sub-menu type-none m-0 p-20 pt-10 pb-10 float-left w-100p" aria-labelledby="menu-11">
                    <div class="row as-5 bold">
                        <div class="col as-2">
                            <a href="#" class="active" data-toggle="tooltip" title="Kamera 1">1</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 2">2</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 3">3</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 4">4</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 5">5</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 6">6</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 7">7</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 8">8</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 9">9</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 10">10</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 11">11</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 12">12</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 13">13</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 14">14</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 15">15</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 16">16</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 17">17</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 18">18</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 19">19</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 20">20</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Kamera 21">21</a>
                        </div>
                    </div>
                </div>

            </li>

            <li role="presentation" class="pivot clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Pivotlar">
                    <i aria-hidden="true" class="icon-pivot-irrigation mr-10"></i>
                    Pivotlar
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-12">
                    <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
                </span>

                <div class="sub-menu type-none m-0 p-20 pt-10 pb-10 float-left w-100p" aria-labelledby="menu-12">
                    <div class="row as-5 bold">
                        <div class="col as-2">
                            <a href="#" class="active" data-toggle="tooltip" title="Pivot 1">1</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 2">2</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 3">3</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 4">4</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 5">5</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 6">6</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 7">7</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 8">8</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 9">9</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 10">10</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 11">11</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 12">12</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 13">13</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 14">14</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 15">15</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 16">16</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 17">17</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 18">18</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 19">19</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 20">20</a>
                        </div>
                        <div class="col as-2">
                            <a href="#" data-toggle="tooltip" title="Pivot 21">21</a>
                        </div>
                    </div>
                </div>

            </li>

            <li role="presentation" class="car clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Avtomobillər">
                    <i aria-hidden="true" class="icon-tractor mr-10"></i>
                    Avtomobillər
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-13">
                <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
            </span>

                <div class="sub-menu type-none m-0 p-20 pt-10 pb-10 float-left w-100p" aria-labelledby="menu-13">
                    <table class="w-100p">
                        <tbody>
                        <tr>
                            <td width="100%">Traktor</td>
                            <td><span class="badge bg-special float-right">7</span></td>
                        </tr>
                        <tr>
                            <td>Lapet</td>
                            <td><span class="badge bg-special float-right">8</span></td>
                        </tr>
                        <tr>
                            <td>Kombayn</td>
                            <td><span class="badge bg-special float-right">2</span></td>
                        </tr>
                        <tr>
                            <td>Agreqat</td>
                            <td><span class="badge bg-special float-right">6</span></td>
                        </tr>
                        <tr>
                            <td>Cip</td>
                            <td><span class="badge bg-special float-right">4</span></td>
                        </tr>
                        <tr>
                            <td>Niva</td>
                            <td><span class="badge bg-special float-right">3</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </li>

            <li role="presentation" class="analytics-forecast clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Analiz və Proqnoz">
                    <i aria-hidden="true" class="icon-analysis mr-10"></i>
                    Analiz və Proqnoz
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-14">
                <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
            </span>

                <div class="sub-menu type-none m-0 p-0 float-left w-100p" aria-labelledby="menu-14">
                    <div class="row text-center">
                        <div class="col p-10"></div>
                        <div class="col p-10"></div>
                    </div>
                </div>

            </li>

        </ul>
    </div>

</aside>

<!-- Side Menu 4-->
<aside class="sidebar tr-3s scroll o-auto" aria-labelledby="side-menu-4">

    <div class="sidebar-head bg-special">
        <h2 class="m-0 text-white bold">Kargüzarlıq</h2>
    </div>

    <div class="sidebar-body scroll o-auto">
        <ul class="side-menu type-none m-0 pl-0 pt-10 pb-10" role="menubar">

            <li role="presentation" class="financial-planning clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Maliyyə hesabatı">
                    <i aria-hidden="true" class="icon-money mr-10"></i>
                    Maliyyə hesabatı
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-16">
                <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
            </span>

                <div class="sub-menu type-none m-0 p-20 pt-10 pb-10 float-left w-100p" aria-labelledby="menu-16">
                    <table>
                        <tbody>
                        <tr>
                            <td width="100%">User name</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td width="100%">User name</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td width="100%">User name</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td width="100%">User name</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td width="100%">User name</td>
                            <td>Data</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </li>

            <li role="presentation" class="hr clear">

                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="HR">
                    <i aria-hidden="true" class="icon-workers mr-10"></i>
                    HR
                </a>

                <span class="menu-toggle pointer float-left text-center" id="menu-17">
                <i aria-hidden="true" class="icon-arrow-down v-align-middle tr-3s"></i>
            </span>

                <div class="sub-menu type-none m-0 p-20 pt-10 pb-10 float-left w-100p" aria-labelledby="menu-17">
                    <table>
                        <tbody>
                        <tr>
                            <td width="100%">Sahə müfəttişi</td>
                            <td><span class="badge bg-special float-right">10</span></td>
                        </tr>
                        <tr>
                            <td>Aqronom</td>
                            <td><span class="badge bg-special float-right">8</span></td>
                        </tr>
                        <tr>
                            <td>Şofer</td>
                            <td><span class="badge bg-special float-right">5</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </li>

            <li role="separator" class="separator"></li>

            <li role="presentation" class="clear">
                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Gələn sənədlər">
                    <i aria-hidden="true" class="icon-arrow-down mr-10"></i>
                    Gələn sənədlər
                </a>
            </li>

            <li role="presentation" class="clear">
                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Gedən sənədlər">
                    <i aria-hidden="true" class="icon-arrow-up mr-10"></i>
                    Gedən sənədlər
                </a>
            </li>

            <li role="presentation" class="clear">
                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Arxiv Sənədlər">
                    <i aria-hidden="true" class="icon-archive mr-10"></i>
                    Arxiv Sənədlər
                </a>
            </li>

            <li role="separator" class="separator"></li>

            <li role="presentation" class="clear">
                <a href="#" role="menuitem" class="menu-title text-uppercase bold float-left" title="Yeni sənəd yarat">
                    <i aria-hidden="true" class="icon-plus mr-10"></i>
                    Yeni sənəd yarat
                </a>
            </li>

            <li role="separator" class="separator"></li>

        </ul>
    </div>

</aside>

<!-- Side Menu 5-->
<aside class="sidebar lg tr-3s" aria-labelledby="about-us">

    <div class="sidebar-head bg-special">
        <h2 class="m-0 text-white bold">ULUAGRO</h2>
    </div>

    <div class="sidebar-body p-40 text-white light font-16 scroll o-auto">
        <p class="text-center"><img src="{{asset('public')}}/assets/images/line.png" alt="line" height="51" width="300"></p>
        <p>Uluagro LLC is an agricultural management company.  We are the developer of an agricultural hub on over 2000 hectares of land consisting of various cultivation samples in Gakh region, Azerbaijan.   Our vision is to revolutionize the agricultural practices in Azerbaijan and lead a new era of agricultural development.</p>
        <p>The cultivations consist of grain crops and fruit gardens, of which we highlight the growing of almonds trees with the help of Turkish and Spanish expertise and material.</p>
        <p>Our fundamental development philosophy is to build diversified agricultural investment portfolios customized to meet specific requirements by optimizing performance of farmland {{asset('public')}}/assets that are best identified and managed through the integration of both agricultural and financial expertise to provide maximum results.</p>
        <p class="text-center"><img src="{{asset('public')}}/assets/images/line.png" alt="line" height="51" width="300"></p>
        <p>Uluagro LLC is one of the first agricultural projects such format in the region.  It is a complex business project oriented to operate internationally. Our business is based on modern technologies for production, logistics and sales. The establishment of Uluagro will create an opportunity to provide the transition from small individual producer to wide-scale agricultural industrial production and steady and safe foreign market entry, and stipulate the use of innovative technologies, as well as unit standards and the achievement of sustainable quality of result products. </p>
        <p class="text-center"><img src="{{asset('public')}}/assets/images/line.png" alt="line" height="51" width="300"></p>
        <p>Uluagro’s territory lays on over 2000 hectares. The works considered for the initial stage of Uluagro’s construction have been completed. During this first stage we constructed 15 pivotal irrigation systems from Valley, USA over the territory of 500 Ha and successfully planted various grain types under them.  Another 500 Ha of land is planned to be irrigated by the same pivot technology by the end of year.</p>
        <p>The cereal crops cultivated on the territory are: wheat, barley, buckwheat, corn and soybeans.  Fruit types are: nuts, almonds, walnuts, apples, pears and plums.  The fruit bearing lands are irrigated by fully-automated drip irrigation technology from Spain and Turkey.</p>
        <p>The Agro-park is centered on logistics center with 4500 ton silo storage and dryer, covered parking lot, office center, warehouse and hospitality center.  Uluagro possesses various planting and irrigation equipment, harvesters, fertilizers and multi-purpose tractors.</p>
        <p class="text-center"><img src="{{asset('public')}}/assets/images/line.png" alt="line" height="51" width="300"></p>
        <p>Distinguished by quality management and highly sophisticated irrigation, fertilizer, growth and harvesting systems, we plan to increase the area of fertile lands of our Agro-park in the future.  We believe it will serve an important part on the total scale of Azerbaijan’s agricultural development and assist in increasing the levels of expertise on the international export markets.</p>
        <p>As the situation develops rapidly we observe a shortage of human resources in certain fields.  Local staff is well experienced with earth and plant science but lack managerial, planning and control skills.  Also a language barrier creates delays during communication with foreign contractors.</p>
        <p>We would gladly greet an opportunity to interview managers of the agricultural field with enough expertise to control and develop the processes so far implemented and started in Uluagro.  We require a person(s) with language skills (English, Turkish, Spanish or French) and good experience in plant growing, irrigation and fertilization techniques.  The person(s) has to be mobile and able to travel over the territory of Azerbaijan and foreign countries when needed.</p>
        <p class="text-center"><img src="{{asset('public')}}/assets/images/line.png" alt="line" height="51" width="300"></p>
    </div>

</aside>

<!-- Side Menu 5-->
<aside class="sidebar tr-3s" aria-labelledby="map-type">

    <div class="sidebar-head bg-special">
        <h2 class="m-0 text-white bold">Xəritə tarixçəsi</h2>
    </div>

    <div class="sidebar-body p-20 pb-0 scroll o-auto text-center text-uppercase">
        <div class="row as-10 xs-5 xxs-5">
            <div class="col as-6 mb-20">
                <div class="d-block item bg-white pointer">
                    <div class="thumb hover responsive pb-in-75">
                        <img src="{{asset('public')}}/assets/images/login-bg.png" alt="26.10.2018" width="200" height="200">
                    </div>
                    <small class="d-block pt-5 pb-5">26.09.2018</small>
                </div>
            </div>
            <div class="col as-6 mb-20">
                <div class="d-block item bg-white pointer">
                    <div class="thumb hover responsive pb-in-75">
                        <img src="{{asset('public')}}/assets/images/login-bg.png" alt="26.10.2018" width="200" height="200">
                    </div>
                    <small class="d-block pt-5 pb-5">26.08.2018</small>
                </div>
            </div>
            <div class="col as-6 mb-20">
                <div class="d-block item bg-white pointer">
                    <div class="thumb hover responsive pb-in-75">
                        <img src="{{asset('public')}}/assets/images/login-bg.png" alt="26.10.2018" width="200" height="200">
                    </div>
                    <small class="d-block pt-5 pb-5">26.07.2018</small>
                </div>
            </div>
            <div class="col as-6 mb-20">
                <div class="d-block item bg-white pointer">
                    <div class="thumb hover responsive pb-in-75">
                        <img src="{{asset('public')}}/assets/images/login-bg.png" alt="26.10.2018" width="200" height="200">
                    </div>
                    <small class="d-block pt-5 pb-5">26.06.2018</small>
                </div>
            </div>
        </div>
    </div>

</aside>
