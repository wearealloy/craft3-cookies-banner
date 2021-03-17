<div class='cookies' id="fixed">
<div class='card-cookies'>
  <!-- <div class='header-cookies'>
    Do you like cookies?
  </div> -->
   <div class='content-cookies'>
     <p>We use cookies on our website to give you the most relevant experience by remembering your 
      preferences and repeat visits. By clicking “Accept”, you consent to the use of ALL the cookies.</p>
   <div class="cookies-settings helper-settings">
   <div class="element-cookies">
     <div class="text-settings">
        <h5>Personalization</h5>
<!--    <p>Lorem ipsum dolor sit amet.</p>
 --> </div>
    <div class="toggle-cookies">
     <label class="toggle-control">
       <input type="checkbox" checked="true">
        <span class="control"></span>
      </label>
   
     </div>
  </div>
  <div class="element-cookies">
     <div class="text-settings">
        <h5>Marketing</h5>
<!--    <p>Lorem ipsum dolor sit amet.</p>
 --> </div>
    <div class="toggle-cookies">
     <label class="toggle-control">
       <input type="checkbox" checked="checked">
        <span class="control"></span>
      </label>
   
     </div>
  </div><div class="element-cookies">
     <div class="text-settings">
        <h5>Analytics</h5>
<!--    <p>Lorem ipsum dolor sit amet.</p>
 --> </div>
    <div class="toggle-cookies">
     <label class="toggle-control">
       <input type="checkbox" checked="checked">
        <span class="control"></span>
      </label>
   
     </div>
  </div>
   
   
   </div>

  </div>
  <div class='actions-cookies'>
    <a class='nah'>DONT ALLOW</a>
    <a class='cookies-yes'>ACCEPT!</a>
  </div>
</div>
</div>


<script>


  
  /* Cookie functionality */
/* 
  setTimeout(function() {

function createCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function findCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

var cookie = findCookie('shown');
if (!cookie) {
    displayPopup();
}

function displayPopup() {
    createCookie('shown', 'true', 365);
    gsap.from('.cookies', {
    alpha: 0,
    delay: 2,
    ease: 'power2.out'

});
}


}, 500);
 */



  /*  */
  document.querySelector(".cookies-yes").addEventListener("click", function() {
    gsap.to('.cookies', {
        alpha: 0,
        zIndex: -10,
        ease: 'power3.out',
        duration: 1.5

    });
    setTimeout(function() {
        document.querySelector(".cookies").classList.add("helper-settings")
        console.log("hello")
    }, 1500);

});

document.querySelector(".nah").addEventListener("click", function() {
    gsap.to('.cookies', {
        alpha: 0,
        /* display: "none", */
        zIndex: -10,
        ease: 'power3.out'

    });

    /* turn on for a full versipn */
    /* document.querySelector(".cookies-settings").classList.toggle("helper-settings")
    document.querySelector(".nah").classList.toggle("helper-button-settings") */
    console.log("cookies are not currently enabled.")
    cookie_set = false;
});
</script>