<? include 'templates/header.php'; ?>
	
    <div class="page page-contacts bg-grey">
        <div class="container">
            <div class="page__wrapper">
                <div class="page__sidebar">
                    <div class="page__sidebar-inner">
                        <? include 'templates/catalog-menu.php'; ?>
                    </div>
                </div>
                <div class="page__content">
                    <div class="page__top">
                        <div class="breadcrumbs">
                            <a href="/" class="breadcrumbs__back">
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                                Головна
                            </a>
                            <ul class="breadcrumbs__list">
                                <li class="breadcrumbs__li">
                                    <a href="/" class="breadcrumbs__a">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#home"/>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumbs__li">
                                    Контакти
                                </li>
                            </ul>
                        </div>
                        <h1 class="page__title title">Контакти</h1>
                    </div>
                    <div class="page-contacts__wrapper text">
                        <div class="page-contacts__row">
                            <? $city = [
                                0 => [
                                    'title' => 'Київ',
                                    'img' => $target . '/img/delivery-payments/kyiv.jpg',
                                    'address' => 'вул. Козацька, 122',
                                    'phones' => [
                                        0 => '044-501-67-72',
                                        1 => '050-331-60-05',
                                    ],
                                    'e-mail' => 'furniturag@arkadaplast.com.ua',
                                    'time' => 'Пн-Пт (9:00-17:00)<br>Перерва (12:00 - 13:00)',
                                    'location' => [
                                        'x' => '50.39674462958311',
                                        'y' => '30.49170831177',
                                    ],
                                ],
                                1 => [
                                    'title' => 'Львів',
                                    'img' => $target . '/img/delivery-payments/lviv.jpg',
                                    'address' => 'вул. Шевченка, 31 офіс 213',
                                    'phones' => [
                                        0 => '032-232-52-54',
                                        1 => '066-792-80-91'
                                    ],
                                    'e-mail' => 'arkadalviv@gmail.com',
                                    'time' => 'Пн-Пт (9:00-17:00)<br>Перерва (12:00 - 13:00)',
                                    'location' => [
                                        'x' => '49.84582175631457',
                                        'y' => '24.00651889825',
                                    ],
                                ],
                                2 => [
                                    'title' => 'Рівне',
                                    'img' => $target . '/img/delivery-payments/rivne.jpg',
                                    'address' => 'вул. Володимира Стельмаха 18ж',
                                    'phones' => [
                                        0 => '(068) 289-81-89',
                                        1 => '(095) 271-01-13',
                                    ],
                                    'e-mail' => 'rivnearkada@gmail.com',
                                    'time' => 'Пн-Пт (9:00-17:00)<br>Перерва (12:00 - 13:00)',
                                    'location' => [
                                        'x' => '50.601028675106214',
                                        'y' => '26.2793810694',
                                    ],
                                ],
                            ];
                            foreach($city as $item) { 
                                $title = $item['title'];
                                $img = $item['img'];
                                $address = $item['address'];
                                $phones = $item['phones'];
                                $email = $item['e-mail'];
                                $time = $item['time'];
                                $x = $item['location']['x'];
                                $y = $item['location']['y'];
                            ?>
                                <div class="page-contacts__col">
                                    <div class="page-contacts__bl">
                                        <div class="page-contacts__bl-img j-single-location" data-location-x="<?= $x; ?>" data-location-y="<?= $y; ?>">
                                            <picture class="page-contacts__bl-picture">
                                                <img src="<?= $img; ?>" alt="">
                                            </picture>
                                            <div class="page-contacts__bl-show-map">Дивитися на мапі</div>
                                        </div>
                                        <div class="page-contacts__bl-text">
                                            <div class="page-contacts__bl-title">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#marker"/>
                                                </svg>    
                                                <?= $title; ?>
                                            </div>
                                            <div class="page-contacts__bl-info">
                                                <ul class="info">
                                                    <li class="info__li">
                                                        <div class="info__title">
                                                            <?= $address; ?>
                                                        </div>
                                                    </li>
                                                    <? foreach($phones as $phone) { ?>
                                                        <li class="info__li">
                                                            <a href="tel:<?= $phone; ?>" class="info__item info__item--phone">
                                                                <div class="info__title">
                                                                    <?= $phone; ?>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    <? } ?>
                                                    <li class="info__li">
                                                        <a href="mailto:<?= $email; ?>" class="info__item info__item--email">
                                                            <div class="info__title">
                                                                <?= $email; ?>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="info__li">
                                                        <div class="info__item info__item--time">
                                                            <div class="info__title">
                                                                <b>Графік работи:</b> <br>
                                                                <?= $time; ?>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <? } ?>
                        </div>
                    </div>
                    <script>
                        addressCoord2=[];
                        addressCoord2.push([50.39674462958311, 30.49170831177, "<strong>вул. Козацька, 122</strong><br>044-501-67-72 <br>050-331-60-05"]);
                        addressCoord2.push([49.84582175631457, 24.00651889825, "<strong>вул. Шевченка, 31 офіс 213</strong><br>032-232-52-54 тел/факс <br>066-792-80-91"]);
                        addressCoord2.push([50.601028675106214, 26.2793810694, "<strong> вул. Володимира Стельмаха 18ж</strong><br>(068) 289-81-89 <br>(095) 271-01-13"]);
                    </script>
                    <div class="page-contacts__map j-map">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325516.5693171311!2d30.203050022670055!3d50.40200750491539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf4ee15a4505%3A0x764931d2170146fe!2z0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1686090120350!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<link href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" type="text/css" rel="stylesheet" media="screen" />
<link href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" type="text/css" rel="stylesheet" media="screen" />
<link href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" type="text/css" rel="stylesheet" media="screen" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"> </script>
<!--script map-->
<script type="text/javascript">
    //map mag
    function mapWorkOrNot() {
        if (document.querySelector('.j-map')) {

            let allMapsDots = [...document.querySelectorAll('.j-single-location')];
            let addressCoord = [];
            function goToDotMap() {
                allMapsDots = [...document.querySelectorAll('.j-single-location')];
                allMapsDots.forEach((ot) => {
                    ot.addEventListener('click', (e) => {
                        e.preventDefault();

                        document.getElementById("mapid").scrollIntoView();

                        let xCoord1 = Number(ot.dataset.locationX);
                        let yCoord1 = Number(ot.dataset.locationY);
                        map.setView([xCoord1, yCoord1], 18);
                        map.panTo(new L.LatLng(xCoord1, yCoord1));
                        markersPos[i].openPopup();
                    })
                })
            }

            function ifHaveDots(x='50.286891509018174' ,y='27.248665812032257',zoom=7) {
                if (!allMapsDots.length) {

                } else {
                    addressCoord = [];

                    addressCoord=addressCoord2;
                    console.log(addressCoord);
                    createMapBuy(x,y,zoom);
                }
            }


            let numberOfChanges = 0;

            ifHaveDots();

            function createMapBuy(x,y,zoom) {
                function createNewMap() {
                    let divMap = document.createElement('div');
                    divMap.id = 'mapid';
                    document.querySelector('.j-map').appendChild(divMap);
                }
                let mapDiv = document.querySelector('#mapid');

                if (!mapDiv) {
                    createNewMap();
                } else {
                    mapDiv.remove();
                    createNewMap();
                }

                var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 18,
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Points &copy 2012 LINZ'
                }),

                latlng = L.latLng(x,y );

                var map = L.map('mapid', {center: latlng, zoom: zoom, layers: [tiles]});

                var markers = L.markerClusterGroup();
                let markersPos = [];

                for (var i = 0; i < addressCoord.length; i++) {
                    var a = addressCoord[i];
                    var title = a[2];
                    var marker = L.marker(new L.LatLng(a[0], a[1]), { title: title });
                    marker.bindPopup(title);
                    markers.addLayer(marker);
                    markersPos.push(marker);
                }

                map.addLayer(markers);
                allMapsDots = [...document.querySelectorAll('.j-single-location')];
                allMapsDots.forEach((ot, i) => {
                    ot.addEventListener('click', (e) => {
                        e.preventDefault();
                        $('html,body').animate({ scrollTop: $('#mapid').offset().top - 100 }, 300);

                        let xCoord1 = Number(ot.dataset.locationX);
                        let yCoord1 = Number(ot.dataset.locationY);

                        map.setView([xCoord1, yCoord1], 18);
                        map.panTo(new L.LatLng(xCoord1, yCoord1));
                        markersPos[i].openPopup();
                    })
                })
            }
        }
    }
    mapWorkOrNot();

    //map mag
</script>

<div class="bg-grey">
    <? include 'templates/subscribe.php'; ?>
</div>

<? include 'templates/footer.php'; ?>