<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BTC@Cyber_Crew</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="css/a.css"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
    <body>



        <style media="screen">
        body {
          background-image: url(https://pa1.narvii.com/6790/bb57256d902c04b6a158a7cc1bd3860300ea3458_hq.gif);
          background-attachment: fixed;
          background-size: cover;
        }



        .tablink {
          background-color: #555;
          color: white;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          font-size: 17px;
          width: 25%;
        }

        .tablink:hover {
          background-color: #777;
        }

        /* Style the tab content */
        .tabcontent {
          color: white;
          display: none;
          padding: 50px;
          text-align: center;
        }

        #London {background-color:red;}
        #Paris {background-color:green;}
        #Tokyo {background-color:blue;}
        #Oslo {background-color:orange;}

        .mySlides {
          display: none;
        }

        .container {
          position: relative;
          overflow: hidden;
          width: 100%;
          padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
        }

        /* Then style the iframe to fit in the container div with full height and width */
        .responsive-iframe {
          position: absolute;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          width: 100%;
          height: 100%;
        }

        </style>

      <!-- Navbar -->

          <div class="w3-top" >
            <div style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);" class="w3-bar w3-black w3-card">
              <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
              <a style="color:#03ff10;" href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
              <a style="color:#03ff10;" href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Tools</a>
              <a style="color:#03ff10;" href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>
              <a style="color:#03ff10;" href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
              <div class="w3-dropdown-hover w3-hide-small">
                <button style="color:#03ff10;" class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>
                <div style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);" class="w3-dropdown-content w3-bar-block w3-card-4">
                  <a style="background-color:black; color:#03ff10;" href="#" class="w3-bar-item w3-button">News</a>
                  <a style="background-color:black; color:#03ff10;" href="#" class="w3-bar-item w3-button">Tutorial</a>
                  <a style="background-color:black; color:#03ff10;" href="#" class="w3-bar-item w3-button">About</a>
                </div>
              </div>
              <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
            </div>
          </div>






<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links)
       <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
          <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
          <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">TOUR</a>
          <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
          <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">MERCH</a>
        </div>
-->






            <!-- Page content -->
            <div  class="w3-content" style="max-width:2000px;margin-top:46px">

              <!-- Automatic Slideshow Images -->
              <div  style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);" class="mySlides w3-display-container w3-center">
                <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2018/08/fondos-pantalla-full-hd_6.jpg?itok=UA_2-r1t" style="width:100%">
                <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                  <h3>BTC@Cyber_Crew</h3>
                  <p><b>IT Support and Solution</b></p>
                </div>
              </div>
              <div  style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);" class="mySlides w3-display-container w3-center">
                <img src="https://images8.alphacoders.com/588/thumb-1920-588074.png" style="width:100%">
                <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                  <h3>BTC@Cyber_Crew</h3>
                  <p><b>IT Support and Solution</b></p>
                </div>
              </div>
              <div  style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);" class="mySlides w3-display-container w3-center">
                <img src="https://wallpapermemory.com/uploads/339/anonymous-wallpaper-hd-1080p-162194.jpg" style="width:100%">
                <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
                  <h3>BTC@Cyber_Crew</h3>
                  <p><b>IT Support and Solution</b></p>
                </div>
              </div>
                <br>




            <!-- TEXT BERJALAN -->

            <marquee scrollamount="12">
              <class style="background-color: black;box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);color:#03ff10; font-size:50px;"><=== PANTANG PULANG SEBELUM TTL ===></class>
              <class></class>
              <class></class>
              <class></class>
            </marquee>
            <br>
            <br>




                <!-- TEAM -->

                <div style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);color:#03ff10;" class="w3-container w3-padding-64 w3-center" id="team">
                    <h2>OUR TEAM</h2>
                    <p>Meet the team - our office rats:</p>

                <div class="w3-row"><br>

                <div class="w3-quarter">
                  <img src="https://www.blackxperience.com/assets/blackattitude/blacktech/cyberpunk-2077-makin-realistis-thumbnail-600x600.jpg" alt="Boss" style="width:70%" class="w3-circle w3-hover-opacity">
                  <h3>Adyc@Cyber</h3>
                  <p>Staff</p>
                </div>

                <div class="w3-quarter">
                  <img src="https://www.blackxperience.com/assets/blackattitude/blacktech/cyberpunk-2077-makin-realistis-thumbnail-600x600.jpg" alt="Boss" style="width:70%" class="w3-circle w3-hover-opacity">
                  <h3>VinzzKacrut</h3>
                  <p>Support</p>
                </div>

                <div class="w3-quarter">
                  <img src="https://www.blackxperience.com/assets/blackattitude/blacktech/cyberpunk-2077-makin-realistis-thumbnail-600x600.jpg" alt="Boss" style="width:70%" class="w3-circle w3-hover-opacity">
                  <h3>Z0xShell</h3>
                  <p>CO Leader</p>
                </div>

                <div class="w3-quarter">
                  <img src="https://www.blackxperience.com/assets/blackattitude/blacktech/cyberpunk-2077-makin-realistis-thumbnail-600x600.jpg" alt="Boss" style="width:70%" class="w3-circle w3-hover-opacity">
                  <h3>HanzzGan</h3>
                  <p>Leader</p>
                </div>

                </div>
                </div>










                <style>
        body {font-family: "Lato", sans-serif;}

        .tablink {
          background-color: #555;
          color: white;
          float: left;
          border: none;
          outline: none;
          cursor: pointer;
          padding: 14px 16px;
          font-size: 17px;
          width: 25%;
        }

        .tablink:hover {
          background-color: #777;
        }

        /* Style the tab content */
        .tabcontent {
          color: lime;
          display: none;
          padding: 50px;
          text-align: center;
        }

        #London {background-color:black;   box-shadow: 0px 0px 20px 0px rgba(22,255,5,1);}
        #Paris {background-color:black;   box-shadow: 0px 0px 20px 0px rgba(22,255,5,1);}
        #Tokyo {background-color:black;   box-shadow: 0px 0px 20px 0px rgba(22,255,5,1);}
        #Oslo {background-color:black;   box-shadow: 0px 0px 20px 0px rgba(22,255,5,1);}
        </style>



        <p>Coming Soon</p>

        <div id="London" class="tabcontent">
          <h1>Coming Soon</h1>
          <p>LComing Soon</p>
        </div>

        <div id="Paris" class="tabcontent">
          <h1>Coming Soon</h1>
          <p>Coming Soon</p>
        </div>

        <div id="Tokyo" class="tabcontent">
          <h1>Coming Soon</h1>
          <p>Coming Soon</p>
        </div>

        <div id="Oslo" class="tabcontent">
          <h1>Coming Soon</h1>
          <p>Coming Soon</p>
        </div>

        <button class="tablink" onclick="openCity('London', this, 'black')" style="  box-shadow: 0px 0px 20px 0px rgba(22,255,5,1); color:lime;" id="defaultOpen">Coming Soon</button>
        <button class="tablink" onclick="openCity('Paris', this, 'black')" style="  box-shadow: 0px 0px 20px 0px rgba(22,255,5,1);  color:lime;" >Coming Soon</button>
        <button class="tablink" onclick="openCity('Tokyo', this, 'black')" style="  box-shadow: 0px 0px 20px 0px rgba(22,255,5,1);  color:lime;" >Coming Soon</button>
        <button class="tablink" onclick="openCity('Oslo', this, 'black')" style="  box-shadow: 0px 0px 20px 0px rgba(22,255,5,1);  color:lime;" >Coming Soon</button>

        <script>
        function openCity(cityName,elmnt,color) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablink");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
          }
          document.getElementById(cityName).style.display = "block";
          elmnt.style.backgroundColor = color;

        }
        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>

          br
            <br>
            <br>




            <!-- The Band Section -->
            <div style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);color:#03ff10;"  class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
              <h2 class="w3-wide">BTC@CYber_Crew</h2>
              <p class="w3-opacity"><i>We love Technology</i></p>
              <p class="w3-justify">BTC@Cyber_Crew merupakan comunitas IT yang bertujuan untuk menpelajari, membuat, berkarya dan mengembangkan Ilmu Tecnology di INDONESIA, baik dalam sektor networking, programing, maupun security...
              yang dimana kita ketahui pada saat ini perkembangan technology sangatlah cepat dan luas orang-orang berlomba untuk menciptakan dan mengembangankan technology, sebagai anak bangsa INDONESIA kita tidak boleh ketinggalan akan Technology untuk itu marilah kita bersama-sama untuk membangun dan mengembangan technology di INDONESIA.
              </p>
              <div class="w3-row w3-padding-32">
                <div class="w3-third">
                  <p>Name</p>
                  <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                </div>
                <div class="w3-third">
                  <p>Name</p>
                  <img src="/w3images/bandmember.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
                </div>
                <div class="w3-third">
                  <p>Name</p>
                  <img src="/w3images/bandmember.jpg" class="w3-round" alt="Random Name" style="width:60%">
                </div>
              </div>
            </div>


          <br>
          <br>





          <br>
          <br>
          <br><br>






              <div  style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1);" class="container">
                <iframe loop="1" autopalay="1" width="100%" class="responsive-iframe" src="https://youtube.com/embed/qeRCtn9kVi8"></iframe>
              </div>



              <br>
              <br>

                  <!-- The Contact Section -->
                  <div style="box-shadow: 0px 0px 18px 0px rgba(3,255,16,1); color:#03ff10; border-radius:2%;"  class="w3-container w3-content w3-padding-64" style="max-width:800px;" id="contact">
                    <h2 class="w3-wide w3-center">CONTACT</h2>
                    <p class="w3-opacity w3-center"><i>WE ARE :</i></p>
                    <div class="w3-row w3-padding-32">
                      <div class="w3-col m6 w3-large w3-margin-bottom">
                        <i class="fa fa-map-marker" style="width:30px"></i> Adyc@Cyber<br>
                        <i class="fa fa-phone" style="width:30px"></i> Phone: +10089234<br>
                        <i class="fa fa-envelope" style="width:30px"> </i> Email: BTCCYber_Crew@gmail.com<br>
                      </div>
                        <div class="w3-col m6">
                          <form action="/action_page.php" target="_blank">
                            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                              <div class="w3-half">
                                <input style="background-color:black; color:#03ff10; box-shadow: 0px 0px 10px 0px rgba(3,255,16,1);" class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                              </div>
                              <div class="w3-half">
                                <input style="background-color:black; color:#03ff10; box-shadow: 0px 0px 10px 0px rgba(3,255,16,1);" class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                              </div>
                            </div>
                            <input style="background-color:black; color:#03ff10; box-shadow: 0px 0px 10px 0px rgba(3,255,16,1);" class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                            <button style="color:black; box-shadow: 0px 0px 18px 0px rgba(3,255,16,1); " class="w3-button w3-green w3-section w3-right" type="submit">SEND</button>
                          </form>
                        </div>
                    </div>
                  </div>

                  <!-- End Page Content -->
                  </div>

                <br>
                <br>

                <!-- Image of location/map -->
                <img src="https://ak.picdn.net/shutterstock/videos/32724118/thumb/1.jpg" class="w3-image w3-greyscale-min" style="width:100%">

                <!-- Footer -->
                <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
                  <i class="fa fa-facebook-official w3-hover-opacity"></i>
                  <i class="fa fa-instagram w3-hover-opacity"></i>
                  <i class="fa fa-snapchat w3-hover-opacity"></i>
                  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                  <i class="fa fa-twitter w3-hover-opacity"></i>
                  <i class="fa fa-linkedin w3-hover-opacity"></i>
                  <p class="w3-medium">Powered by <a href="#" target="_blank">Anonymous</a></p>
                </footer>

                <script>
                  // Automatic Slideshow - change image every 4 seconds
                      var myIndex = 0;
                      carousel();

                      function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                          x[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}
                        x[myIndex-1].style.display = "block";
                        setTimeout(carousel, 4000);
                      }

                // Used to toggle the menu on small screens when clicking on the menu button
                      function myFunction() {
                        var x = document.getElementById("navDemo");
                        if (x.className.indexOf("w3-show") == -1) {
                          x.className += " w3-show";
                        } else {
                          x.className = x.className.replace(" w3-show", "");
                        }
                      }

                // When the user clicks anywhere outside of the modal, close it
                      var modal = document.getElementById('ticketModal');
                      window.onclick = function(event) {
                        if (event.target == modal) {
                          modal.style.display = "none";
                        }
                      }
                </script>


    </body>
</html>
