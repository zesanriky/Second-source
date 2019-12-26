
<!DOCTYPE html>
<html>



<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<link rel="stylesheet" type="text/css" href="immersive-slider.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="jquery.immersive-slider.js"></script>
<script type="text/javascript" src="jquery.immersive-slider.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

.fa-skype {
  background: #00aff0;
  color: white;
}

.fa-android {
  background: #a4c639;
  color: white;
}

.fa-dribbble {
  background: #ea4c89;
  color: white;
}

.fa-vimeo {
  background: #45bbff;
  color: white;
}

.fa-tumblr {
  background: #2c4762;
  color: white;
}

.fa-vine {
  background: #00b489;
  color: white;
}

.fa-foursquare {
  background: #45bbff;
  color: white;
}

.fa-stumbleupon {
  background: #eb4924;
  color: white;
}

.fa-flickr {
  background: #f40083;
  color: white;
}

.fa-yahoo {
  background: #430297;
  color: white;
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
</style>


</head>


<video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop>
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
<source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
</video>
<div id="polina">
<h1>Polina</h1>
<p>filmed by Alexander Wagner 2011
<p><a href="http://thenewcode.com/777/Create-Fullscreen-HTML5-Page-Background-Video">original article</a>

<img src="http://img.xcitefun.net/users/2011/01/227165,xcitefun-hrithik-roshan-marie-claire-2.jpg" alt="Mountain View" style="width:300px;height:400px;">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porta dictum turpis, eu mollis justo gravida ac. Proin non eros blandit, rutrum est a, cursus quam. Nam ultricies, velit ac suscipit vehicula, turpis eros sollicitudin lacus, at convallis mauris magna non justo. Etiam et suscipit elit. Morbi eu ornare nulla, sit amet ornare est. Sed vehicula ipsum a mattis dapibus. Etiam volutpat vel enim at auctor.</p>
<p>Aenean pharetra convallis pellentesque. Vestibulum et metus lectus. Nunc consectetur, ipsum in viverra eleifend, erat erat ultricies felis, at ultricies mi massa eu ligula. Suspendisse in justo dapibus metus sollicitudin ultrices id sed nisl.</p>
<button>Pause</button>
</div>

<style>

body {
  margin: 0;
  background: #000; 
}
video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
.stopfade { 
   opacity: .5;
}

#polina { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  width: 33%;
  margin:2rem;
  float: right;
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#polina button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover { 
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background; 
}
a:hover{
  background:rgba(0,0,0,0.9);
}
@media screen and (max-width: 500px) { 
  div{width:70%;} 
}
@media screen and (max-device-width: 800px) {
  html { background: url(https://thenewcode.com/assets/images/polina.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}

</style>



<script>
var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 


pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})


</script>
<body>

  <div id="immersive_slider">

<script>
$("#immersive_slider").immersive_slider({
  animation: "bounce", // As usual, you can change the animation to these: slide (default), bounce, fade, slideUp, and bounceUp
  slideSelector: ".slide", // This option will let you assign custom selector for each slides in case .slide is already taken
  container: ".main", // This option lets you define the container of which the background will appear. Make sure the slider is inside this container as well.
  cssBlur: false, // Experimental: In case you don't want to keep adding new data-blurred attributes, trigger this to true and it will generate the blur image on the fly (more info below).
  pagination: true, // Toggle this to false if you don't want a pagination
  loop: true, // Toggle to false if you don't want the slider to loop. Default is true.
  autoStart: 5000 // Define the number of milliseconds before it navigates automatically. Change this to 0 or false to disable autoStart. The default value is 5000.
});
</script>

        <div class="slide" data-blurred="http://lorempixel.com/output/food-q-c-1131-754-8.jpg">



        <div class="content">
            <h2>Movie Kites</h2>
            <p>Kites is a 2010 Indian Hindi/Spanish mix language dialogue romantic action thriller film directed by Anurag Basu, story written and produced by Rakesh Roshan, starring Hrithik Roshan, Bárbara Mori, Kangana Ranaut, and Kabir Bedi.[2] The film was released in India and in North America on 21 May 2010. Its 208-theater opening in North America made it the largest Bollywood release up to that time.[6] It was also the first Bollywood movie to reach the weekend top ten, though My Name is Khan had a larger first-weekend North American gross.[6] Reliance Entertainment bought worldwide distribution rights of Kites for whooping ₹150 crore (US$23 million), which is a record sum[citation needed]. Despite a strong opening,[7] The film only managed to collect ₹48.56 crore (US$7.5 million) net in its lifetime run following a critical loss. The film had been aired in a week of its release on smallscreen.</p>
          </div>


          <div class="image">
            <img src="http://images.indianexpress.com/2017/01/hrithik-7591.jpg" alt="Slider 1">

  

          </div>
        </div>
        <div class="slide" data-blurred="http://images.indianexpress.com/2017/01/hrithik-7591.jpg">

          <div class="content">
            <h2>Krrish</h2>
            <p>Krrish ([ˈkrɪʃ]) is a 2006 Indian science fiction superhero film directed, produced, and written by Rakesh Roshan, and starring Hrithik Roshan, Priyanka Chopra, Rekha and Naseeruddin Shah. It is the second film in the Krrish series, being the sequel to Koi... Mil Gaya, and relates the story of Krishna, the son of the previous film's protagonists, who inherits his father's superhuman abilities. After falling in love with Priya, he follows her to Singapore, where he takes on the persona of "Krrish" to keep his identity secret while saving children from a burning circus. From that moment on he is regarded as a superhero, and must later thwart the plans of the evil Dr. Siddhant.</p>
          </div>
          <div class="image">
            <img src="http://awallpapersimages.com/wp-content/uploads/2016/07/Latest-Bollywood-actor-Hrithik-Roshan-o.jpg" alt="Slider 1">

          </div>
        </div>


 <div class="slide" data-blurred=" https://i.pinimg.com/originals/c1/8b/f2/c18bf26b0c6db64d9aeaad7b6e74f527.jpg  ">

          <div class="content">
            <h2>NaTumJanoNaHum</h2>
            <p>Krrish ([ËˆkrÉªÊƒ]) is a 2006 Indian science fiction superhero film directed, produced, and written by Rakesh Roshan, and starring Hrithik Roshan, Priyanka Chopra, Rekha and Naseeruddin Shah. It is the second film in the Krrish series, being the sequel to Koi... Mil Gaya, and relates the story of Krishna, the son of the previous film's protagonists, who inherits his father's superhuman abilities. After falling in love with Priya, he follows her to Singapore, where he takes on the persona of "Krrish" to keep his identity secret while saving children from a burning circus. From that moment on he is regarded as a superhero, and must later thwart the plans of the evil Dr. Siddhant.</p>
          </div>
          <div class="image">
            <img src=" https://i.pinimg.com/originals/c1/8b/f2/c18bf26b0c6db64d9aeaad7b6e74f527.jpg  ">

          </div>
        </div>



 <div class="slide" data-blurred=" https://www.google.de/search?q=hrithik+images&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi4rp_VxYzWAhVItRQKHRnSD8EQ_AUICigB&biw=1315&bih=638#imgrc=JwMXMddr-78d5M:  ">

          <div class="content">
            <h2>Agnipath</h2>
            <p>Krrish ([ËˆkrÉªÊƒ]) is a 2006 Indian science fiction superhero film directed, produced, and written by Rakesh Roshan, and starring Hrithik Roshan, Priyanka Chopra, Rekha and Naseeruddin Shah. It is the second film in the Krrish series, being the sequel to Koi... Mil Gaya, and relates the story of Krishna, the son of the previous film's protagonists, who inherits his father's superhuman abilities. After falling in love with Priya, he follows her to Singapore, where he takes on the persona of "Krrish" to keep his identity secret while saving children from a burning circus. From that moment on he is regarded as a superhero, and must later thwart the plans of the evil Dr. Siddhant.</p>
          </div>
          <div class="image">
            <img src="https://i.ytimg.com/vi/PrSoHbtyELE/maxresdefault.jpg  ">

          </div>
        </div>



 <div class="slide" data-blurred="https://www.google.de/search?q=hrithik+images&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi4rp_VxYzWAhVItRQKHRnSD8EQ_AUICigB&biw=1315&bih=638#imgrc=PHvp4eylrfaVyM:">

          <div class="content">
            <h2>Mohejodharo</h2>
            <p>Krrish ([ËˆkrÉªÊƒ]) is a 2006 Indian science fiction superhero film directed, produced, and written by Rakesh Roshan, and starring Hrithik Roshan, Priyanka Chopra, Rekha and Naseeruddin Shah. It is the second film in the Krrish series, being the sequel to Koi... Mil Gaya, and relates the story of Krishna, the son of the previous film's protagonists, who inherits his father's superhuman abilities. After falling in love with Priya, he follows her to Singapore, where he takes on the persona of "Krrish" to keep his identity secret while saving children from a burning circus. From that moment on he is regarded as a superhero, and must later thwart the plans of the evil Dr. Siddhant.</p>
          </div>
          <div class="image">
            <img src="http://thefitnessroad.com/wp-content/uploads/2013/07/hrithik-roshan-hot-six-pack-body-photo-pic05.jpg  ">

          </div>
        </div>















        <div class="slide" data-blurred="http://images.indianexpress.com/2017/01/hrithik-7591.jpg">
          <div class="content">
            <h2>Dhoom</h2>
            <p>Dhoom 2 (English: Blast 2, also abbreviated and known as D:2, D2 and Dhoom 2: Back In Action) is a 2006 Indian action film directed by Sanjay Gadhvi and produced by Aditya Chopra and Yash Chopra at an estimated budget of ₹350 million (US$5.4 million) under the Yash Raj Films banner. It is the second in the Dhoom series. Abhishek Bachchan and Uday Chopra star as buddy cops Jai Dixit and Ali, respectively. The duo attempt to capture Mr. A (Hrithik Roshan), a professional thief whose passion is to steal rare and valuable collectibles using high-technology gadgets. The film features Bipasha Basu and Aishwarya Rai in lead female roles. Dhoom 2 was shot primarily in India, Durban, and Rio de Janeiro, becoming the first major Hindi film to be shot in Brazil. The distributor, Yash Raj Films, promoted the film by forging associations with Pepe Jeans and Coca-Cola. It premiered on 24 November 2006 in India, where it received the widest release in Indian cinema history with over 1800 prints. It was dubbed simultaneously in Tamil as well as in Telugu. Singer Vijay Prakash dubbed for ACP Jai Dixit in Tamil.</p>
          </div>
          <div class="image">
            <img src="http://awallpapersimages.com/wp-content/uploads/2016/07/Actor-Hrithik-Roshan-Wallpapers.jpg">
          </div>
        </div>
          <div class="is-nav">
          <a href="#" class="is-prev">&laquo;</a>
          <a href="#" class="is-next">&raquo;</a>
        </div>
      </div>
    </div>
	</div>
	<div class="benefits">
    <div class="page_container">



</body>
<body>

<h1 style="color:yellow;">Keep Connected in Social Media </h1>

<!-- Add font awesome icons -->
<a href=" https://www.facebook.com"
 class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
<a href="#" class="fa fa-snapchat-ghost"></a>
<a href="#" class="fa fa-skype"></a>
<a href="#" class="fa fa-android"></a>
<a href="#" class="fa fa-dribbble"></a>
<a href="#" class="fa fa-vimeo"></a>
<a href="#" class="fa fa-tumblr"></a>
<a href="#" class="fa fa-vine"></a>
<a href="#" class="fa fa-foursquare"></a>
<a href="#" class="fa fa-stumbleupon"></a>
<a href="#" class="fa fa-flickr"></a>
<a href="#" class="fa fa-yahoo"></a>
<a href="#" class="fa fa-reddit"></a>
<a href="#" class="fa fa-rss"></a>


</body>
      

</html>	   
