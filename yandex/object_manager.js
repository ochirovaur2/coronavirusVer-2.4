ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map('map', {
            center: [54.89794,86.990382],
            zoom: 2
        }, {
            searchControlProvider: 'yandex#search'
        }),
        objectManager = new ymaps.ObjectManager({
            // Чтобы метки начали кластеризоваться, выставляем опцию.
            clusterize: true,
            // ObjectManager принимает те же опции, что и кластеризатор.
            gridSize: 32,
            clusterDisableClickZoom: true
        });

    // Чтобы задать опции одиночным объектам и кластерам,
    // обратимся к дочерним коллекциям ObjectManager.
    objectManager.objects.options.set('preset', 'islands#greenDotIcon');
    objectManager.clusters.options.set('preset', 'islands#greenClusterIcons');
    myMap.geoObjects.add(objectManager);
    myMap.behaviors.disable('scrollZoom');
    $.ajax({
        url: "data.json"
    }).done(function(data) {
        objectManager.add(data);
    });

}