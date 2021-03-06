function updateTextArea() {
         
    var allVals = [];
    $('#checkbox :checked').each(function() {
        allVals.push($(this).val());
    });
    $('#no_hp').val(allVals)
}

$(function() {
    $('#checkbox input').click(updateTextArea);
    updateTextArea();
});

$(function() {
$(".conversation_window").prop({ scrollTop: $(".conversation_window").prop("scrollHeight") });
});

  // Morris Area Chart
 $(function() {
            var data = [ ["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9] ];
       Morris.Area({
            element: 'hero-area',
            data: [
                {period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647},
                {period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441},
                {period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501},
                {period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689},
                {period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293},
                {period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881},
                {period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588},
                {period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175},
                {period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028},
                {period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791}
            ],
            xkey: 'period',
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['iPhone', 'iPad', 'iPod Touch'],
            lineWidth: 2,
            hideHover: 'auto',
            lineColors: ["#81d5d9", "#a6e182", "#67bdf8"]
          });
});


function checkAll(form){
    for (var i=0;i<document.forms[form].elements.length;i++)
    {
        var e=document.forms[form].elements[i];
        if ((e.type == 'checkbox') && ((form + e.value != 'man_user_hero' + 'admin') || (e.name !='allbox')))
        {
            e.checked=document.forms[form].allbox.checked;
        }
    }
}

function formAction(idForm,action){
	$('#'+idForm).attr('action',action);
	$('#'+idForm).submit();
}
