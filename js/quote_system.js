// Set your endpoint prices below

// 1 year Emsisoft
var year1Emsisoft = 30;
// 2 years Emsisoft
var year2Emsisoft = 70;
// 3 years Emsisoft
var year3Emsisoft = 100;

// 1 year BitDefender
var year1Bit = 50;
// 2 years BitDefender
var year2Bit = 115;
// 3 years BitDefender
var year3Bit = 150;


// Set your server prices below

// 1 year Emsisoft
var year1Esrv = 100;
// 2 year Emsisoft
var year2Esrv = 175;
// 3 year Emsisoft
var year3Esrv = 240;

// 1 year BitDefender
var year1Bsrv = 150;
// 2 years BitDefender
var year2Bsrv = 250;
// 3 years BitDefender
var year3Bsrv = 350;

function calculate() {
    var endpoints = $('#endpoints').val();
    var servers = $('#servers').val();
    var years = $('#years').val();
    var eprice = 0;
    var sprice = 0;
    if ($('#software').val() == 'Emsisoft') {
        if (years == 1) {
            eprice = year1Emsisoft;
            sprice = year1Esrv;
        }else {
            if (years == 2) {
                eprice = year2Emsisoft;
                sprice = year2Esrv;
            }else {
                eprice = year3Emsisoft;
                sprice = year3Esrv;
            }
        }
    }else {
        if (years == 1) {
            eprice = year1Bit;
            sprice = year1Bsrv;
        }else {
            if (years == 2) {
                eprice = year2Bit;
                sprice = year2Bsrv;
            }else {
                eprice = year3Bit;
                sprice = year3Bsrv;
            }
        }
    }

    var endTotal = ( endpoints * eprice );
    var srvTotal = ( servers * sprice);

    var Total = ( endTotal + srvTotal );

    $( '#quote_amount' ).val(Total);
}

$( '#software' ).change(function() {
    calculate();
});
$( '#endpoints' ).change(function() {
    calculate();
});
$( '#servers' ).change(function() {
    calculate();
});
$( '#years' ).change(function() {
    calculate();
});