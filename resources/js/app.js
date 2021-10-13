require('./bootstrap');
require('@popperjs/core');
require('bootstrap');
toastr = require('toastr');


let categoryOption = document.getElementById('categoryOption');

categoryOption.addEventListener('change', function () {
    if(this.value.length <= 0)
        window.location.href = '/';
    else
        window.location.href = '/event/' + this.value;
});
