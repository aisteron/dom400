    /*управление картинкой youtube*/
    
    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });
 
    function labnolThumb(id) {
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }
 
    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }


    function openTab(evt, tabName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("tabarea");
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            }
        tablinks = document.getElementsByClassName("drow");
        for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
        }

    function showHouse(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;

                var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            spaceBetween: 30,
            });
            }
        };
        xmlhttp.open("GET","dev/gethouse.php?id="+str,true);
        xmlhttp.send();
        
    }
}    



document.addEventListener('lazyincluded',  function(e){
    // e.target has new content
  if(document.querySelector(".section5").classList.contains('lazyload')==false)
  {
    var tag = document.createElement("script");
    tag.src = "dev/js/swiper.min.js";
    document.getElementsByTagName("head")[0].appendChild(tag);


    var jq = document.createElement("script");
    jq.src = "dev/lity/jquery-3.1.0.slim.min.js";
    document.getElementsByTagName("head")[0].appendChild(jq);
    
    jq.onload = function()
    {
        var lit = document.createElement("script");
        lit.src = "dev/lity/lity.js";
        document.getElementsByTagName("head")[0].appendChild(lit); 
        console.log('lity loaded after jq');



        $('.house').click(function(){
            console.log('house click');
            lity('<div id="txtHint"><b>Person info will be listed here...</b></div>');



        })
    }

  } 
    
});