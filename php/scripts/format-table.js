$(document).ready(function(){
    formatTable();
    highlightNav('#game-info-dropdown');
    loadFeeds('http://www.pesc-herald.com/feed.2099931991.rss', 'PESC Herald: ', '#pescherald');
});

function getNeutralizedAccent(val) {
    return typeof val !== 'string' ? val :
        val
            .replace( /έ/g, 'ε')
            .replace( /ύ/g, 'υ')
            .replace( /ό/g, 'ο')
            .replace( /ώ/g, 'ω')
            .replace( /ά/g, 'α')
            .replace( /ί/g, 'ι')
            .replace( /ή/g, 'η')
            .replace( /æ/g, 'ae' )
            .replace( /ß/g, 'ss' )
            .replace( /\n/g, ' ' )
            .replace( /á/g, 'a' )
            .replace( /É/g, 'e' )
            .replace( /é/g, 'e' )
            .replace( /í/g, 'i' )
            .replace( /ó/g, 'o' )
            .replace( /ú/g, 'u' )
            .replace( /ć/g, 'c' )
            .replace( /ê/g, 'e' )
            .replace( /î/g, 'i' )
            .replace( /ô/g, 'o' )
            .replace( /è/g, 'e' )
            .replace( /ï/g, 'i' )
            .replace( /Ö/g, 'o' )
            .replace( /ö/g, 'o' )
            .replace( /ü/g, 'u' )
            .replace( /ã/g, 'a' )
            .replace( /õ/g, 'o' )
            .replace( /ç/g, 'c' )
            .replace( /ì/g, 'i' )
            .replace( /ū/g, 'u' )
            .replace( /ž/g, 'z' );
}

// accent-neutral search
$.fn.DataTable.ext.type.search.string = function ( data ) {
    return ! data ?
        '' :
        typeof data === 'string' ? getNeutralizedAccent(data) : data;
};
    
function getTableColumnDefs() {
    return [
        { targets: [3, 4, 5, 6, 7, 8, 9], "searchable": false },
        { targets: [1, 2], className: "all text-center"},
        { targets: [3, 4, 5, 6, 7, 8, 9], className: "text-right" },
        { targets: 12, createdCell: onSeriesCellCreated },
        { targets: 2, createdCell: onPosCellCreated },
        { targets: [3, 4, 5, 6, 7, 8], createdCell: onStatCellCreated },
    ];
}

function onPosCellCreated(td, cellData, rowData, row, col) {
    var posClass = '';
    switch (cellData) {
        case 'GK':
            posClass = 'pos-gk';
            break;
        case 'DF':
            posClass = 'pos-df';
            break;
        case 'MF':
            posClass = 'pos-mf';
            break;
        case 'FW':
            posClass = 'pos-fw';
            break;
    }
    
    if (posClass != '')
        $(td).addClass(posClass);
}

function onSeriesCellCreated(td, cellData, rowData, row, col) {
    var cssClass = '';
    
    var val = cellData.toLowerCase();
    if (val.indexOf('nds') == 0) {
        cssClass = 'series-nds';
    } else if (val.indexOf('ndg') == 0) {
        cssClass = 'series-ndg';
    } else if (val.indexOf('cls') == 0) {
        cssClass = 'series-cls';
    } else if (val.indexOf('eus') == 0) {
        cssClass = 'series-eus';
    } else if (val.indexOf('bdr') == 0) {
        cssClass = 'series-bdr';
    } else if (val.indexOf('5*') == 0) {
        cssClass = 'series-5';
    } else if (val.indexOf('snv') == 0) {
        cssClass = 'series-snv';
    } else if (val.indexOf('top') == 0) {
        cssClass = 'series-top';
    } else if (val.indexOf('mvs') == 0) {
        cssClass = 'series-mvs';
    } else if (val.indexOf('hps') == 0) {
        cssClass = 'series-hps';
    }
    
    if (cssClass != '')
        $(td).addClass(cssClass);
}

function onStatCellCreated(td, cellData, rowData, row, col) {
    if (cellData >= 1000) {
        $(td).css({color: '#cc0000', 'font-weight': 'bold'});
    }
}
    
function formatTable() {
    var myDTContainer = $('#data-table-container');
    
    myDT = myDTContainer.DataTable({
        autoWidth: false,
        columnDefs: getTableColumnDefs(),
        fixedHeader: true,
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],
        order: [],
        pageLength: (window.innerHeight < 768)? 10 : 20,
        pagingType: "full_numbers",
        responsive: true
    });
    
    var dCompare = $('#data-compare');
    var dtCompare = $('#data-table-compare');
    var dtCompareBody = dtCompare.find('tbody:first');
    
    myDTContainer.find('th.sorting').on('click', function() {
        ga('send', 'event', 'datagrid', 'sort', $(this).text(), 1);
        });
    
    var searchBox =  $('#data-table-container_filter').find('input:first')
        .keyup(function() {
            myDT.search($.fn.DataTable.ext.type.search.string(this.value)).draw();
            })
        .change(function() {
            window.location.hash = this.value? '#' + encodeURIComponent(this.value) : '';
            })
        .on('change', function() {
            if (this.value)
                ga('send', 'pageview', location.pathname + location.search + location.hash);
            });
    
    var hash = decodeURIComponent(window.location.hash.slice(1).replace(/\+/g, '%20'));
    if (hash) {
        searchBox.val(hash);
        myDT.search($.fn.DataTable.ext.type.search.string(hash)).draw();
    }
}

function loadFeeds(feedUrl, feedPrefix, feedSelector) {
    $.ajax({
        url: document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(feedUrl),
        dataType: 'json',
        success: function(data) {
            var feed = data.responseData.feed.entries[0];
            if (!feed)
                return false;
            $('<a>', {
                href: feed.link,
                onclick: 'trackOutboundLink(this)',
                rel: 'external',
                html: feedPrefix + feed.title +  ' <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>'
            }).appendTo($(feedSelector).show());
        }
    });
}

var trackOutboundLink = function(link) {
    ga('send', 'event', 'outbound', 'click', link.href);
    link.target = '_blank';
}

var highlightNav = function(navId) {
    if ($(navId).find('li.active').length) {
        $(navId).addClass('active');
    }
}