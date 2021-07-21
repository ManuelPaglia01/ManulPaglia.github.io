window.onload = () => {

//mappa
    var mapOptions = {
        center: new google.maps.LatLng(0, 0),
        zoom: 1,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };


    map = new google.maps.Map
    (document.getElementById("map"), mapOptions);
    var latLong = new google.maps.LatLng('45.95304084636695', '12.677857184811431');

    var marker = new google.maps.Marker({
        position: latLong
    });

    marker.setMap(map);
    map.setZoom(17);
    map.setCenter(marker.getPosition());



/////////////////////////////////////////////////

    console.log("entra");
    const tab_switchers = document.querySelectorAll('[data-switcher]');

    for (let i = 0; i < tab_switchers.length; i++) {
        const tab_switcher = tab_switchers[i];
        const page_id = tab_switcher.dataset.tab;

        tab_switcher.addEventListener('click', () => {
            document.querySelector('.bottom-nav .section-1 .item-nav.tab.is-active').classList.remove('is-active');
            tab_switcher.parentNode.classList.add('is-active');
            SwitchPage(page_id);
        });
    }
}

function SwitchPage (page_id) {
    console.log(page_id);

    const current_page = document.querySelector('.pages .page.is-active');
    current_page.classList.remove('is-active');

    const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
    next_page.classList.add('is-active');
}





// Register service worker to control making site work offline
















































    