require('./bootstrap');
require('@popperjs/core');
require('bootstrap');
toastr = require('toastr');


let categoryOption = document.getElementById('categoryOption');

categoryOption.addEventListener('change', function () {
    window.location.href = '/event/' + this.value;
});
