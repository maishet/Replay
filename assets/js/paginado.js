$(document).ready(function() {
    $("div.pagination-container").jPages({
        containerID: "itemContainer",
        perPage: 8,
        startPage: 1,
        midRange: 2,
        next: "Siguiente",
        previous: "Anterior",
        animation: "bounceInUp",
    });
});