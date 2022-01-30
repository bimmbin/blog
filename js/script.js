$("#subplus1").click(function(){
    $(".head2").slideToggle('100')
});
$("#subplus2").click(function(){
  $(".head3").slideToggle('100')
});
$("#subplus3").click(function(){
  $(".head4").slideToggle('100')
});
$("#subplus4").click(function(){
  $(".head5").slideToggle('100')
});
$("#subplus5").click(function(){
  $(".head6").slideToggle('100')
});
$("#subplus6").click(function(){
  $(".head7").slideToggle('100')
});
$("#subplus7").click(function(){
  $(".head8").slideToggle('100')
});
$("#subplus1").click(function(){
  $(".head8").slideToggle('100')
});

$("#belowPlus").click(function(){
  $(".below2").slideToggle('200')
});

$(".img img").click(function(){
  $("nav").toggleClass("navTog")
});

$(".delete input[type=submit]").click(function(e){
    if(!confirm('Are you sure you want to delete this article?')){
        e.preventDefault();
        return false;
    }
    return true;
});



var allQuotes = $(".slide");
var currentQuote = 0;
// $(".slide:nth");.show();
function changeQuote() {

  $(allQuotes[currentQuote]).fadeOut(50, function() {

    if (currentQuote == allQuotes.length -1) {
      currentQuote = 0;
    } else {
      currentQuote++;
    }
    
    $(allQuotes[currentQuote]).fadeIn(50);


  });



}

var quoteTimer = setInterval(changeQuote, 10000);
