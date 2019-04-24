$(document).ready(function(){
 var sn = document.getElementById("sticky_nav");
      if ($(this).scrollTop() > 50){ 
          $('#scroll').fadeIn();
          sn.style.top = "0" 
      } else { 
          $('#scroll').fadeOut(); 
          sn.style.top = "-80px"
      } 
  console.log($(this).scrollTop());
  $(window).scroll(function(){
    var sn = document.getElementById("sticky_nav");
      if ($(this).scrollTop() > 50){ 
          $('#scroll').fadeIn();
          sn.style.top = "0" 
      } else { 
          $('#scroll').fadeOut(); 
          sn.style.top = "-80px"
      } 
  }); 
  $('#scroll').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 600); 
      return false; 
  }); 
});

$(document).ready(function(){
  $('.navbar').addClass('scrolled');
  $(window).scroll(function() {
    if($(this).scrollTop() > 70) 
    {
      $('.navbar').removeClass('scrolled');
    } else {
      $('.navbar').addClass('scrolled');
    }
  });
  
});

$(document).ready(function(){
  $('.navbar h3').addClass('scrolled');
  $(window).scroll(function() {
    if($(this).scrollTop() > 70) 
    {
      $('.navbar h3').removeClass('scrolled');
    } else {
      $('.navbar h3').addClass('scrolled');
    }
  });
})


$(window).scroll(function() {
  if($(this).scrollTop() > 50) 
  {
    $('.navbar').removeClass('scrolled');
  } else {
    $('.navbar').addClass('scrolled');
  }
});




// scrollspy
$(document).ready(function(){
  
  $(".navbar a").on('click', function(event) {
    
    if (this.hash !== "") {
      
      
      event.preventDefault();

      
      var hash = this.hash;

      // $("a[href='" + hash + "']").addClass("active")

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
        window.location.hash = hash;
      });
    } 
  });
});

$(document).ready(function(){
  
  $(".stuff a").on('click', function(event) {

    
    if (this.hash !== "") {
      
      event.preventDefault();

      
      var hash = this.hash;

      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        
        window.location.hash = hash;
      });
    } 
  });
});



// $(function() {
//   var selectedClass = "";
//   $(".fil-cat").click(function(){ 
//   selectedClass = $(this).attr("data-rel"); 
//    $("#portfolio").fadeTo(100, 0.1);
//   $("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
//   setTimeout(function() {
//     $("."+selectedClass).fadeIn().addClass('scale-anm');
//     $("#portfolio").fadeTo(300, 1);
//   }, 300); 
  
// });
// });
