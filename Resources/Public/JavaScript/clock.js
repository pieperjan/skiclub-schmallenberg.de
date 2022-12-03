jQuery(document).ready(function () {
  var y;
  var clock = jQuery( '#MyClockDisplay' ).length; 

  function myClock2() {         
    setTimeout(function() {   
      const d = new Date();
      var currentdate = Date.now();
      const n = d.toLocaleTimeString();
      const a = d.toLocaleDateString();

      function myFunction(x) {
        if (x.matches) { // If media query matches
          const months = ["Jan. ", "Feb. ", "März ", "April ", "Mai ", "Juni ", "Juli ", "Aug. ", "Sept. ", "Okt. ", "Nov. ", "Dez. "];
          const month = months[d.getMonth()];
          return month;
        } else {
          const months = ["Januar ", "Februar ", "März ", "April ", "Mai ", "Juni ", "Juli ", "August ", "September ", "Oktober ", "November ", "Dezember "];
          const month = months[d.getMonth()];
          return month;
        }
      }
      const year = d.getFullYear();
      
      var x = window.matchMedia("(max-width: 575.98px)")
      var month = myFunction(x);
      var month = myFunction(x);
      x.addListener(myFunction)

      
      jQuery('.month').append(month);
      jQuery('.year').append(year);
    
    }, 1000)
  }

  jQuery(document).ready(function () {
    myClock2();
  });
  
  if (clock == 1) {

    function myClock() {         
      setTimeout(function() {   
        const d = new Date();
        var currentdate = Date.now();
        const n = d.toLocaleTimeString();
        const a = d.toLocaleDateString();

        function myFunction(x) {
          if (x.matches) { // If media query matches
            const months = ["Jan. ", "Feb. ", "März ", "April ", "Mai ", "Juni ", "Juli ", "Aug. ", "Sept. ", "Okt. ", "Nov. ", "Dez. "];
            const month = months[d.getMonth()];
            return month;
          } else {
            const months = ["Januar ", "Februar ", "März ", "April ", "Mai ", "Juni ", "Juli ", "August ", "September ", "Oktober ", "November ", "Dezember "];
            const month = months[d.getMonth()];
            return month;
          }
        }
        const year = d.getFullYear();
        
        var x = window.matchMedia("(max-width: 575.98px)")
    
        x.addListener(myFunction)

        document.getElementById("MyClockDisplay").innerHTML = a + ',' + n; 
        myClock();
      }, 1000)
    }
    jQuery(document).ready(function () {
      myClock();
    });

  }
});


