
<!-- ############################################################################################################### -->

<!-- Info Modal -->
<div class="modal info-modal tr-3s"
     id="info-modal"
     data-modal="info-modal"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Sulanma, gübrələnmə, dərmanlanma</h4>
        </div>
        <div class="panel-body">
            <table class="table bordered m-0">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sort</th>
                    <th scope="col">Sahəsi</th>
                    <th scope="col">Umumi gübrələnmə</th>
                    <th scope="col">Umumi sulama</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="info-modal">Bağla</span>
        </div>

    </div>

</div>

<!-- Detail Modal -->
<div class="modal detail-modal tr-3s"
     id="detail-modal"
     data-modal="detail-modal"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Əkin haqqında məlumat</h4>
        </div>
        <div class="panel-body">
            <table class="table bordered m-0">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sort</th>
                    <th scope="col">Sahəsi</th>
                    <th scope="col">Umumi əkilən bitki miqdarı</th>
                    <th scope="col">Umumi məbləğ</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="detail-modal">Bağla</span>
        </div>

    </div>

</div>

<!-- Report Modal -->
<div class="modal report-modal tr-3s"
     id="report-modal"
     data-modal="report-modal"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Maliyyə hesabatı</h4>
        </div>
        <div class="panel-body">
            <table class="table bordered m-0">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sort</th>
                    <th scope="col">Sahəsi</th>
                    <th scope="col">Gübrələmə məbləği</th>
                    <th scope="col">Sulama xərci</th>
                    <th scope="col">Toxum dəyəri</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="report-modal">Bağla</span>
        </div>

    </div>

</div>

<!-- ############################################################################################################### -->

<!-- Bunker 1 -->
<div class="modal bunker-modal tr-3s"
     data-modal="bunker-info-1"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Birinci Bunker</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/silo-icon.png" alt="Bunker" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Bunker məlumatları</span>
                    <table class="table bordered m-0">
                        <tbody>
                        <tr>
                            <td>Bunker nömrəsi</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>İçindəki</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Miqdarı</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Nəmişlik miqdarı</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Anbar temperaturu</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>TOM</td>
                            <td>Data</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="bunker-info-1">Bağla</span>
        </div>

    </div>

</div>

<!-- Bunker 2 -->
<div class="modal bunker-modal tr-3s"
     data-modal="bunker-info-2"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">İkinci Bunker</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/silo-icon.png" alt="Bunker" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Bunker məlumatları</span>
                    <table class="table bordered m-0">
                        <tbody>
                        <tr>
                            <td>Bunker nömrəsi</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>İçindəki</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Miqdarı</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Nəmişlik miqdarı</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Anbar temperaturu</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>TOM</td>
                            <td>Data</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="bunker-info-2">Bağla</span>
        </div>

    </div>

</div>

<!-- Bunker 3 -->
<div class="modal bunker-modal tr-3s"
     data-modal="bunker-info-3"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Üçüncü Bunker</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/silo-icon.png" alt="Bunker" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Bunker məlumatları</span>
                    <table class="table bordered m-0">
                        <tbody>
                        <tr>
                            <td>Bunker nömrəsi</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>İçindəki</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Miqdarı</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Nəmişlik miqdarı</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>Anbar temperaturu</td>
                            <td>Data</td>
                        </tr>
                        <tr>
                            <td>TOM</td>
                            <td>Data</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="bunker-info-3">Bağla</span>
        </div>

    </div>

</div>

<!-- ############################################################################################################### -->

<!-- Brewery -->
<div class="modal brewery-modal tr-3s"
     data-modal="brewery-info"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Qazanxana</h4>
        </div>
        <div class="panel-body">
            <table class="table bordered m-0">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Bitki adı</th>
                    <th scope="col">Növü</th>
                    <th scope="col">Miqdarı</th>
                    <th scope="col">Nəmişlik</th>
                    <th scope="col">İstilik</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                    <td>Data</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="brewery-info">Bağla</span>
        </div>

    </div>

</div>

<!-- ############################################################################################################### -->

<!-- Depo 1 -->
<div class="modal depo-modal tr-3s"
     data-modal="depo-1"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Birinci Anbar</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/depo-icon.png" alt="Anbar" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Anbar məlumatları</span>
                    <table class="table bordered m-0">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Adı</th>
                            <th>Növü</th>
                            <th>Miqdarı</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Buğda</td>
                            <td>Qron R1</td>
                            <td>1000 Ton</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="depo-1">Bağla</span>
        </div>

    </div>

</div>

<!-- Depo 2 -->
<div class="modal depo-modal tr-3s"
     data-modal="depo-2"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">İkinci Anbar</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/depo-icon.png" alt="Anbar" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Anbar məlumatları</span>
                    <table class="table bordered m-0">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Adı</th>
                            <th>Növü</th>
                            <th>Miqdarı</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Buğda</td>
                            <td>Qron R1</td>
                            <td>1000 Ton</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="depo-2">Bağla</span>
        </div>

    </div>

</div>

<!-- Depo 3 -->
<div class="modal depo-modal tr-3s"
     data-modal="depo-3"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Üçüncü Anbar</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/depo-icon.png" alt="Anbar" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Anbar məlumatları</span>
                    <table class="table bordered m-0">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Adı</th>
                            <th>Növü</th>
                            <th>Miqdarı</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Buğda</td>
                            <td>Qron R1</td>
                            <td>1000 Ton</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="depo-3">Bağla</span>
        </div>

    </div>

</div>

<!-- Depo 4 -->
<div class="modal depo-modal tr-3s"
     data-modal="depo-3"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Üçüncü Anbar</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/depo-icon.png" alt="Anbar" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Anbar məlumatları</span>
                    <table class="table bordered m-0">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Adı</th>
                            <th>Növü</th>
                            <th>Miqdarı</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Buğda</td>
                            <td>Qron R1</td>
                            <td>1000 Ton</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="depo-3">Bağla</span>
        </div>

    </div>

</div>

<!-- ############################################################################################################### -->

<!-- Basin 1 -->
<div class="modal basin-modal tr-3s"
     data-modal="basin-1"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Birinci Hovuz</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/basin-icon.png" alt="Hovuz" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Hovuz məlumatları</span>
                    table
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="basin-1">Bağla</span>
        </div>

    </div>

</div>

<!-- Basin 2 -->
<div class="modal basin-modal tr-3s"
     data-modal="basin-2"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">İkinci Hovuz</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/basin-icon.png" alt="Hovuz" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Hovuz məlumatları</span>
                    table
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="basin-2">Bağla</span>
        </div>

    </div>

</div>

<!-- ############################################################################################################### -->

<!-- Pumping Station 1 -->
<div class="modal basin-modal tr-3s"
     data-modal="pumping-station-1"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Birinci Nasosxana</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/pumping-station-icon.png" alt="Nasosxana" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Nasosxana məlumatları</span>
                    table
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="pumping-station-1">Bağla</span>
        </div>

    </div>

</div>

<!-- Pumping Station 1 -->
<div class="modal basin-modal tr-3s"
     data-modal="pumping-station-2"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">İkinci Nasosxana</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/pumping-station-icon.png" alt="Nasosxana" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Nasosxana məlumatları</span>
                    table
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="pumping-station-2">Bağla</span>
        </div>

    </div>

</div>

<!-- ############################################################################################################### -->

<!-- Garage 1 -->
<div class="modal garage-modal tr-3s"
     data-modal="garage-1"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Birinci Qaraj</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/garage-icon.png" alt="Qaraj" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Qaraj məlumatları</span>
                    table
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="garage-1">Bağla</span>
        </div>

    </div>

</div>

<!-- Garage 2 -->
<div class="modal garage-modal tr-3s"
     data-modal="garage-2"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">İkinci Qaraj</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/garage-icon.png" alt="Qaraj" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Qaraj məlumatları</span>
                    table
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="garage-2">Bağla</span>
        </div>

    </div>

</div>

<!-- ############################################################################################################### -->

<!-- Oil Depo 1 -->
<div class="modal oil-depo-modal tr-3s"
     data-modal="fuel-pump-1"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">Birinci Yanacaqdoldurma Məntəqəsi</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/oil-depo-icon.png" alt="Yanacaqdoldurma" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Yanacaqdoldurma məntəqəsinin məlumatları</span>
                    table
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="fuel-pump-1">Bağla</span>
        </div>

    </div>

</div>

<!-- Oil Depo 2 -->
<div class="modal oil-depo-modal tr-3s"
     data-modal="fuel-pump-2"
     data-open-animation="zoomIn"
     data-close-animation="zoomOut"
     role="dialog"
     tabindex="-1">

    <div class="modal-content panel tr-3s" role="document">
        <div class="panel-header">
            <h4 class="panel-title">İkinci Yanacaqdoldurma Məntəqəsi</h4>
        </div>
        <div class="panel-body">
            <div class="row as-7 justify-content-center">
                <div class="col as-5 xxs-8">
                    <div class="thumb responsive pb-in-100">
                        <img src="{{asset('public')}}/assets/images/oil-depo-icon.png" alt="Yanacaqdoldurma" width="450" height="450">
                    </div>
                </div>
                <div class="col as-7 xxs-12 d-flex-center">
                    <span class="d-block mb-10 bold">Yanacaqdoldurma məntəqəsinin məlumatları</span>
                    table
                </div>
            </div>
        </div>
        <div class="panel-footer text-center">
            <span class="btn xs" aria-label="Bağla" aria-hidden="true" data-close="fuel-pump-2">Bağla</span>
        </div>

    </div>

</div>

<!-- ############################################################################################################### -->

<!-- Left ToolBar -->
<div class="left-toolbar">
    <div class="drop">

        <span class="drop-toggle btn" role="button" aria-haspopup="true" aria-expanded="false" id="change-map">
            <i aria-hidden="true" class="icon-map"></i>
        </span>

        <div class="drop-menu xs animated fadeInUp" aria-labelledby="change-map">
            <ul class="menu-body" role="toolbar">
                <li role="presentation">
                    <span class="menu-item" role="button">
                        <img src="{{asset('public')}}/assets/images/login-bg.png" alt="Google" width="30" height="30" class="radius-50p mr-10">
                        <span>Google</span>
                    </span>
                </li>
                <li role="presentation">
                    <span class="menu-item" role="button">
                        <img src="{{asset('public')}}/assets/images/login-bg.png" alt="Google" width="30" height="30" class="radius-50p mr-10">
                        <span>Bing</span>
                    </span>
                </li>
                <li role="presentation">
                    <span class="menu-item" role="button">
                        <img src="{{asset('public')}}/assets/images/login-bg.png" alt="Google" width="30" height="30" class="radius-50p mr-10">
                        <span>Yandex</span>
                    </span>
                </li>
            </ul>
        </div>

    </div>
</div>

<!-- ############################################################################################################### -->

<!-- Scripts -->
<script src="{{asset('public')}}/assets/js/jquery.min.js"></script>
<script async src="{{asset('public')}}/assets/js/template.js"></script>
<script src="{{asset('public')}}/assets/js/popper.min.js"></script>
<script src="{{asset('public')}}/assets/js/tooltip.js"></script>
<script src="{{asset('public')}}/assets/js/main.js"></script>
<script src="{{asset('public')}}/assets/js/function.js"></script>
<script async src="{{asset('public')}}/assets/js/pi.js"></script>
<script src="https://js.arcgis.com/3.26/"></script>

<script>
    var map;
	
    require([
        "esri/map",
        "esri/InfoTemplate",
        "esri/layers/ArcGISDynamicMapServiceLayer",
        "esri/symbols/SimpleFillSymbol",
        "esri/symbols/SimpleLineSymbol",
        "esri/tasks/IdentifyTask",
        "esri/tasks/IdentifyParameters",
        "esri/dijit/Popup",
        "dojo/_base/array",
        "esri/Color",
        "dojo/dom-construct",
        "dojo/domReady!"
    ], function (
        Map, InfoTemplate, ArcGISDynamicMapServiceLayer, SimpleFillSymbol,
        SimpleLineSymbol, IdentifyTask, IdentifyParameters, Popup,
        arrayUtils, Color, domConstruct
    ) {

        var identifyTask, identifyParams;

        var popup = new Popup({
            fillSymbol: new SimpleFillSymbol(SimpleFillSymbol.STYLE_SOLID,
                new SimpleLineSymbol(SimpleLineSymbol.STYLE_SOLID,
                    new Color([255, 0, 0]), 2), new Color([255, 255, 0, 0.25]))
        }, domConstruct.create("div"));

        map = new Map("mapDiv", {
            sliderOrientation : "vertical",
            sliderPosition: "bottom-left",
            logo:false,
            basemap: "satellite",

            center: [46.8076599, 41.2297739],
            zoom: 13

        });

	
        map.on("load", mapReady);

		var OrthoLayer = new ArcGISDynamicMapServiceLayer("http://213.154.5.139:8021/arcgis/rest/services/ORTHO_26102018/MapServer");
        var parcelsURL = "http://213.154.5.139:8021/arcgis/rest/services/Services_ULUAGRO/MapServer";
		var dynamicMapServiceLayer = new ArcGISDynamicMapServiceLayer("http://213.154.5.139:8021/arcgis/rest/services/Services_ULUAGRO/MapServer", {
            "opacity" : 0.9
        });
		
		
		var	dynamicOrthoLayer = new ArcGISDynamicMapServiceLayer("http://213.154.5.139:8021/arcgis/rest/services/RasterDataAgroPark/MapServer");
		
		
		map.addLayer(OrthoLayer);
        map.addLayer(dynamicMapServiceLayer);
		
		$(document).on("click",".pointer",function(){
			console.log('burda');
		}
		

        function mapReady () {
            map.on("click", executeIdentifyTask);
            //create identify tasks and setup parameters
            identifyTask = new IdentifyTask(parcelsURL);

            identifyParams = new IdentifyParameters();
            identifyParams.tolerance = 3;
            identifyParams.returnGeometry = true;
            //identifyParams.layerIds = [22, 25];
            identifyParams.layerOption = IdentifyParameters.LAYER_OPTION_ALL;
            identifyParams.width = map.width;
            identifyParams.height = map.height;
        }

        function executeIdentifyTask (event) {
            identifyParams.geometry = event.mapPoint;
            identifyParams.mapExtent = map.extent;

            var deferred = identifyTask
                .execute(identifyParams)
                .addCallback(function (response) {
                    // response is an array of identify result objects
                    // Let's return an array of features.
                    return arrayUtils.map(response, function (result) {
                        var feature = result.feature;
                        var layerName = result.layerName;

                        feature.attributes.layerName = layerName;

                        if (layerName === 'AgroPark.DBO.Pvot_S_Aran' || layerName === 'AgroPark.DBO.Pvot_S_ArpaQara32' || layerName === 'AgroPark.DBO.Pvot_S_Deveci' || layerName === 'AgroPark.DBO.Pvot_S_Elegant' || layerName === 'AgroPark.DBO.Pvot_S_ElegantRoyal' || layerName === 'AgroPark.DBO.Pvot_S_GrestavenGaldes' || layerName === 'AgroPark.DBO.Pvot_S_Krupinka' || layerName === 'AgroPark.DBO.Pvot_S_Myrabolan' || layerName === 'AgroPark.DBO.Pvot_S_Pioner' || layerName === 'AgroPark.DBO.Pvot_S_Pioner2088' || layerName === 'AgroPark.DBO.Pvot_S_Pioner2090' || layerName === 'AgroPark.DBO.Pvot_S_Pitakor' || layerName === 'AgroPark.DBO.Pvot_S_qara22' || layerName === 'AgroPark.DBO.Pvot_S_Qara32' || layerName === 'AgroPark.DBO.Pvot_S_QromElit' || layerName === 'AgroPark.DBO.Pvot_S_Red' || layerName === 'AgroPark.DBO.Pvot_S_RedGranni' || layerName === 'AgroPark.DBO.Pvot_S_Regina' || layerName === 'AgroPark.DBO.Pvot_S_ReginaKordia' || layerName === 'AgroPark.DBO.Pvot_S_ReginaZiraat' || layerName === 'AgroPark.DBO.Pvot_S_SantaMaria' || layerName === 'AgroPark.DBO.Pvot_S_SantaMariaKonusi' || layerName === 'AgroPark.DBO.Pvot_S_Skarlet' || layerName === 'AgroPark.DBO.Pvot_S_TanyaElit' || layerName === 'AgroPark.DBO.Pvot_S_TanyaR' || layerName === 'AgroPark.DBO.Pvot_S_Turk' || layerName === 'AgroPark.DBO.Pvot_S_Venus' || layerName === 'AgroPark.DBO.Pvot_S_Yonca' || layerName === 'AgroPark.DBO.Pvot_S_Zerdali') {


                            var buildingFootprintTemplateDepart = new InfoTemplate("Əkin barədə məlumat", "Əkin növü: ${EKIN} <br> Sort: ${NOV} <br> Sahəsi: ${Area} ha <br> Sərf olunan gübrə miqdarı ${FERT_SUM}");
                            feature.setInfoTemplate(buildingFootprintTemplateDepart);
                        }

                        return feature;
                    });
                });

            // InfoWindow expects an array of features from each deferred
            // object that you pass. If the response from the task execution
            // above is not an array of features, then you need to add a callback
            // like the one above to post-process the response and return an
            // array of features.
            map.infoWindow.setFeatures([deferred]);
            map.infoWindow.show(event.mapPoint);
        }

	
        $(document).on("click",".menu-title",function(){
            var id = $(this).attr("id");
            var visibleLayerIds = [];

            if(id == 1){
                for (i in all['cereals']) {
                    for (j in all['cereals'][i]['sort']) {
                        visibleLayerIds.push(all['cereals'][i]['sort'][j]['id']);
                    }
                }
            } else if(id == 2){
                for (i in all['gardens']) {
                    for (j in all['gardens'][i]['sort']) {
                        visibleLayerIds.push(all['gardens'][i]['sort'][j]['id']);
                    }
                }
            }

            dynamicMapServiceLayer.setVisibleLayers(visibleLayerIds);
        });

        $(document).on("click",".sub-menu-title",function(){
            var id = $(this).attr("id");
            var type = $(this).data("type");
            var visibleLayerIds = [];

            if(type == 1){
                for (i in all['cereals'][id]['sort']) {
                    visibleLayerIds.push(all['cereals'][id]['sort'][i]['id']);
                }
            } else if(type == 2){
                for (i in all['gardens'][id]['sort']) {
                    visibleLayerIds.push(all['gardens'][id]['sort'][i]['id']);
                }
            }

            dynamicMapServiceLayer.setVisibleLayers(visibleLayerIds);
        });

        $(document).on("click",".sub-sub-menu-title",function(){
            var sortId  = $(this).attr("id");
            var visibleLayerIds = [];

            visibleLayerIds.push(sortId);

            dynamicMapServiceLayer.setVisibleLayers(visibleLayerIds);
        });

    });


</script>

<!--<script>
    $("#taxil").click(function () {
        var datav = {OBJECTID_1: 1313};

        $.ajax({

            type: "POST",
            url: "http://10.10.1.253:6080/arcgis/rest/services/Qax_NEW/MapServer/2",
            data: datav,
            success: function (result) {
                var southCarolinaCounties = new FeatureLayer("https://sampleserver1.arcgisonline.com/ArcGIS/rest/services/Demographics/ESRI_Census_USA/MapServer/3", {
                    mode: FeatureLayer.MODE_SNAPSHOT,
                    outFields: [result.name, "POP2000", "POP2007", "POP00_SQMI", "POP07_SQMI"]
                });
                console.log(result.json())
                // $("#test").html(result);
            }
        });

    });
</script>-->

<script>

    const $body = $('body');
    const $sideToggle = $('.side-toggle');

    $sideToggle.on('click', function () {

        const $sideBar = $('.sidebar');
        var $thisSideToggle = $(this);
        var $sideId = $thisSideToggle.attr('id');

        var $thisSideBar = $('[aria-labelledby="' + $sideId + '"]');

        if($thisSideBar.hasClass('shown')){
            $thisSideToggle.attr('aria-expanded', 'false');
            $thisSideBar.removeClass('shown');
        }else{
            $sideToggle.attr('aria-expanded', 'false');
            $thisSideToggle.attr('aria-expanded', 'true');
            $sideBar.removeClass('shown');
            $thisSideBar.addClass('shown');
        }

        if($sideBar.hasClass('shown')){
            $body.addClass('side-shown');
        }else{
            $body.removeClass('side-shown');
        }
    });

    $('.search-toggle').on('click', function () {
        $body.toggleClass('search-open');
    });

    $('*').click(function (e) {

        /*if (!$(e.target).is('.side-toggle')
            && !$(e.target).is('.side-toggle *')
            && !$(e.target).is('.side-menu')
            && !$(e.target).is('.side-menu *')) {
            $body.removeClass('side-shown');
        }*/

        if (!$(e.target).is('#search-input')
            && !$(e.target).is('#search-input *')) {
            $searchFilter.attr('hidden', true);
        }
    });

    const $searchFilter = $('.search-filter');
    const $searchInput = $('#search-input');

    $searchInput.on('focus',function () {
        $searchFilter.attr('hidden', false);
    });

    /*====================================================================================================================*/
    /* Side menu */
    /*====================================================================================================================*/

    $(document).on('click','.menu-toggle',function () {
        const $id  = $(this).attr('id');

        $(this).parent().siblings().find('ul, .sub-menu').slideUp(300);

        $(this).parent().toggleClass('active');
        $(this).parent().siblings().removeClass('active');

        $('[aria-labelledby="' + $id + '"]').slideToggle(300);
        return false;
    });

</script>

</body>

</html>
