jQuery.expr[':'].regex = function(elem, index, match) {
    var matchParams = match[3].split(','),
        validLabels = /^(data|css):/,
        attr = {
            method: matchParams[0].match(validLabels) ? 
                        matchParams[0].split(':')[0] : 'attr',
            property: matchParams.shift().replace(validLabels,'')
        },
        regexFlags = 'ig',
        regex = new RegExp(matchParams.join('').replace(/^\s+|\s+$/g,''), regexFlags);
    return regex.test(jQuery(elem)[attr.method](attr.property));
};

// Sliding photos on main page
$(document).ready(function() {
//Misha
  $('#description2 .avatar').click(function() {
 var $marginRighty_1 = $('#description2');
 $marginRighty_1.animate({
   marginRight: parseInt($marginRighty_1.css('marginRight'),10) == 0 ? $marginRighty_1.outerWidth() :  0
 });
 $('div#description1').hide('slow');
 $('div#description3').hide('slow');
 $('div.descr2').show('200');
  });
//Vova    
   $('#description3 .avatar').click(function() {
 var $marginRighty_2 = $('#description3');
 $marginRighty_2.animate({
   marginRight: parseInt($marginRighty_2.css('marginRight'),10) == 0 ? $marginRighty_2.outerWidth() :  0
 });
 $('div#description1').hide('slow');
 $('div#description2').hide('slow');
 $('div.descr3').show('200');
  });
// Oleg  
  $('#description1 .avatar').click(function() {
   $('div#description2').hide('slow');
   $('div#description3').hide('slow');
   $('div.descr1').show('200');
  }); 
 // Close button  
$('span.quit').click(function() {
 $('div:regex(id,descr[1-3])').hide('fast');
 $('div#description1, div#description2, div#description3').css("margin","0");
 $('div#description1, div#description2, div#description3').css("display","inline");
  });

});