$(function() {
    $('.filter-input').click(function (e) {
        var name = $(this).attr('name');
        var val = $('[name='+name+']').val();

        var values = [];
        $('input[name="'+name+'"]:checked').each(function() {
            values.push($(this).val());
        });

        filterUrlState(values, name, 'array');
    });

    $('.filter-range input').blur(function (e) {
        var values = {};
        var code = $(this).data('code')
        $('[data-code='+code+']').each(function() {
            values[$(this).attr('name')] = $(this).val();
        });

        filterUrlState(values, code, 'range');
    });
});

function getSearchParameters() {
    var prmstr = window.location.search.substr(1);
    return prmstr != null && prmstr != "" ? transformToAssocArray(prmstr) : {};
}

function transformToAssocArray( prmstr ) {
    var params = {};
    var prmarr = prmstr.split("&");
    for ( var i = 0; i < prmarr.length; i++) {
        var tmparr = prmarr[i].split("=");
        params[tmparr[0]] = tmparr[1];
    }
    return params;
}

function filterUrlState(values, code, type) {
    var filters = {};
    var url_elems = [];
    var params = getSearchParameters();

    if (values) {
        if (type == 'range') {
            if (values.salary_min || values.salary_max) {
                params[code] = values.salary_min+'-'+values.salary_max;
            } else {
                values = '';
            }
        } else if (type == 'array') {
            if (values.length > 0)
                params[code] = '['+values.join(',').replace(' ', '%20')+']';
        }
    }

    for (var param in params) {
        if (param == code) {
            if (values.length == 0)
                params[code] = '';
        }

        var val_str = params[param];

        if (typeof val_str != 'undefined') {
            if (val_str.length > 0)
                url_elems.push(param+'='+val_str);
        }
        filters[param] = val_str;
    }

    var url = '';
    if (url_elems.length > 0)
        url = '?'+url_elems.join('&');
    else
        url = location.pathname;

    history.pushState(null, null, url);

    var handler = 'employFilter::onFilter';
    if ($('[data-filter-handler]').length)
        handler = $('[data-filter-handler]').data('filter-handler');

    $.request(handler, {
        data: {
            filters: filters
        }
    });
}